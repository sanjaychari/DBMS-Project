<html>
<?php
								$host = "localhost";
								$port = 5432;
								$database = "saa_final_library";
								$user = "myuser";
								$password = "mypass";

					try{
						if(isset($_POST["submit"])){
						//if(!isset($_COOKIE["Email"]) or (isset($_COOKIE["Email"]) and isset($_POST["submit"]) and $_COOKIE["Email"]!=$_POST["email"]))
							//$_COOKIE["Email"]=$_POST["email"];
						//if(!isset($_COOKIE["Password"]) or (isset($_COOKIE["Password"]) and isset($_POST["submit"]) and $_COOKIE["Password"]!=$_POST["password"]))
							//$_COOKIE["Password"]=$_POST["password"];
						$conn = new PDO("pgsql:host=$host port=$port dbname=$database user=$user password=$password");
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						//echo "<br>Connected successfully";

						//querying database for table values
						//$stmt1 = "CREATE VIEW student_genres AS (SELECT count(*) AS counta,genre FROM student,Borrows,book WHERE Email='".$_COOKIE["Email"]."' AND password='".$_COOKIE["Password"]."' AND Usn=usn_borrows AND Book_id_borrows=Book_id AND type='Fiction' GROUP BY genre)";
						//$stmt1 = $conn->query($stmt1);
						//$stmt2="SELECT DISTINCT book_name FROM book WHERE genre IN (SELECT DISTINCT genre FROM student_genres WHERE counta>=ALL(SELECT counta FROM student_genres))";
						//$stmt2 = $conn->query($stmt2);
						$stmt= "INSERT INTO book VALUES('".$_POST["book_name"]."','".$_POST["book_id"]."','".$_POST["type"]."',".$_POST["semester"].",'".$_POST["pdate"]."',".$_POST["rating"].",".$_POST["age_rest"].",'".$_POST["au_id"]."','".$_POST["branch_id_book"]."','".$_POST["did_book"]."','".$_POST["pid_book"]."','".$_POST["genre"]."',FALSE)";
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