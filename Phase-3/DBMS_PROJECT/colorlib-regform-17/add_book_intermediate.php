<html>
<?php
								$host = "localhost";
								$port = 5432;
								$database = "saa_final_library";
								$user = "myuser";
								$password = "mypass";

					try{
						//if(!isset($_COOKIE["Email"]) or (isset($_COOKIE["Email"]) and isset($_POST["submit"]) and $_COOKIE["Email"]!=$_POST["email"]))
							//$_COOKIE["Email"]=$_POST["email"];
						//if(!isset($_COOKIE["Password"]) or (isset($_COOKIE["Password"]) and isset($_POST["submit"]) and $_COOKIE["Password"]!=$_POST["password"]))
							//$_COOKIE["Password"]=$_POST["password"];
						$conn = new PDO("pgsql:host=$host port=$port dbname=$database user=$user password=$password");
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						//echo "<br>Connected successfully";
						$stmtp = "SELECT pid FROM publisher WHERE pname='".$_POST["pname"]."'";
						$stmtp = $conn->query($stmtp);
						$result3 = $stmtp-> fetch(\PDO::FETCH_ASSOC);
						if(empty($result3['pid']))
						{
							$stmt4 = "SELECT MAX(RIGHT(pid,2)::int)+1 AS maxa FROM publisher WHERE LEFT(RIGHT(pid,2),1)::int!=0";
							$stmt4 = $conn->query($stmt4);
							$result4 = $stmt4-> fetch(\PDO::FETCH_ASSOC);
							if(empty($result4["maxa"]))
							{
								$stmt5 = "SELECT MAX(RIGHT(pid,1)::int)+1 AS maxa FROM publisher";
								$stmt5 = $conn->query($stmt5);
								$result6 = $stmt5-> fetch(\PDO::FETCH_ASSOC);
								if(!($result6["maxa"]==9))
								{
									$pid="P00000000";
								}
								else
								{
									$pid="P0000000";
								}
								$pid=$pid.$result6["maxa"];
								//$pid=$pid.$result3;
							}
							else
							{
								$pid="P0000000";
								$pid=$pid.$result4["maxa"];
								//$pid=$pid.$result3;
							}
							$insert2 = "INSERT INTO publisher VALUES('".$pid."','".$_POST["paddress"]."','".$_POST["pemail"]."','".$_POST["pname"]."')";
							$insert2 = $conn->query($insert2);
						}
						else
						{
								$pid=$result3['pid'];
						}
						$stmt1 = "SELECT au_id FROM author WHERE fname='".$_POST["au_fname"]."' AND lname='".$_POST["au_lname"]."'";
						$stmt1 = $conn->query($stmt1);
						$result1 = $stmt1-> fetch(\PDO::FETCH_ASSOC);
						if(empty($result1['au_id']))
						{
							$stmt2 = "SELECT MAX(RIGHT(au_id,2)::int)+1 AS maxa FROM author WHERE LEFT(RIGHT(au_id,2),1)::int!=0";
							$stmt2 = $conn->query($stmt2);
							$result2 = $stmt2-> fetch(\PDO::FETCH_ASSOC);
							if(empty($result2["maxa"]))
							{
								$stmt3 = "SELECT MAX(RIGHT(au_id,1)::int)+1 AS maxa FROM author";
								$stmt3 = $conn->query($stmt3);
								$result2 = $stmt3-> fetch(\PDO::FETCH_ASSOC);
								if(!($result2==9))
								{
									$au_id="A00000000";
								}
								else
								{
									$au_id="A0000000";
								}
								$au_id=$au_id.$result2["maxa"];
								//$au_id=$au_id.$result2;
							}
							else
							{
								$au_id="A0000000";
								$au_id=$au_id.$result2["maxa"];
								//$au_id=$au_id.$result2;
							}
							$insert1 = "INSERT INTO author VALUES('".$_POST["au_fname"]."',NULL,'".$_POST["au_lname"]."','".$au_id."','".$pid."','".$_POST["type"]."','".$_POST["genre"]."')";
							$insert1 = $conn->query($insert1);
						}
						else
						{
								$au_id=$result1['au_id'];
						}
						//echo $au_id.$pid;
						//querying database for table values
						//$stmt1 = "CREATE VIEW student_genres AS (SELECT count(*) AS counta,genre FROM student,Borrows,book WHERE Email='".$_COOKIE["Email"]."' AND password='".$_COOKIE["Password"]."' AND Usn=usn_borrows AND Book_id_borrows=Book_id AND type='Fiction' GROUP BY genre)";
						//$stmt1 = $conn->query($stmt1);
						//$stmt2="SELECT DISTINCT book_name FROM book WHERE genre IN (SELECT DISTINCT genre FROM student_genres WHERE counta>=ALL(SELECT counta FROM student_genres))";
						//$stmt2 = $conn->query($stmt2);
						if(empty($_POST["semester"]))
							$semester='NULL';
						else
							$semester=$_POST["semester"];
						if(empty($_POST["did_book"]))
							$did_book='NULL';
						else
							$did_book=$_POST["did_book"];
						if(empty($_POST["genre"]))
							$genre='NULL';
						else
							$genre=$_POST["genre"];
						if($did_book!='NULL' and $genre!='NULL')
							$stmt= "INSERT INTO book VALUES('".$_POST["book_name"]."','".$_POST["book_id"]."','".$_POST["type"]."',".$semester.",'".$_POST["pdate"]."',".$_POST["rating"].",".$_POST["age_rest"].",'".$au_id."','".$_POST["branch_id_book"]."','".$did_book."','".$pid."','".$genre."',FALSE)";
						else if($did_book=='NULL' and $genre!='NULL')
							$stmt= "INSERT INTO book VALUES('".$_POST["book_name"]."','".$_POST["book_id"]."','".$_POST["type"]."',".$semester.",'".$_POST["pdate"]."',".$_POST["rating"].",".$_POST["age_rest"].",'".$au_id."','".$_POST["branch_id_book"]."',".$did_book.",'".$pid."','".$genre."',FALSE)";
						else if($did_book!='NULL' and $genre=='NULL')
							$stmt= "INSERT INTO book VALUES('".$_POST["book_name"]."','".$_POST["book_id"]."','".$_POST["type"]."',".$semester.",'".$_POST["pdate"]."',".$_POST["rating"].",".$_POST["age_rest"].",'".$au_id."','".$_POST["branch_id_book"]."','".$did_book."','".$pid."',".$genre.",FALSE)";
						else
							$stmt= "INSERT INTO book VALUES('".$_POST["book_name"]."','".$_POST["book_id"]."','".$_POST["type"]."',".$semester.",'".$_POST["pdate"]."',".$_POST["rating"].",".$_POST["age_rest"].",'".$au_id."','".$_POST["branch_id_book"]."',".$did_book.",'".$pid."',".$genre.",FALSE)";
						$stmt = $conn->query($stmt);
						//$stmt="SELECT book_name FROM book WHERE genre='Fantasy'";
						//$stmt=$conn->query($stmt);
						/*$no = 0;
						while($result = $stmt-> fetch(\PDO::FETCH_ASSOC)) {
								if($no%5==0 and !$no==0)
								{
									echo "<br><br><br><br>";
								}
								echo "<div class=\"location\">
								<img src=\"images/location_".($no%5+1).".jpg\" alt=\"\">"
								."<div class=\"location_title text-center\"><div><a href=\"#\">".$result['book_name']."<div>+</div></a></div></div>
								</div>";  
								//echo "<br>".$result['book_name'];
								$no = $no +1;      
						}}*/
						echo "<br>INSERTION SUCCESSFUL";
						echo "<br><a href=\"../../DBMS_PROJECT/SAAL/SAAL/SAAL_admin.php\">CLICK HERE TO GO BACK TO HOME PAGE</a>";
						//$stmt3="DROP VIEW student_genres";
						//$stmt3 = $conn->query($stmt3);
					}
					catch (PDOException $e){
					// report error message
					echo $e->getMessage();
					}

					$conn = null;
?>