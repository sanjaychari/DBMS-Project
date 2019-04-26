<?php
if(isset($_POST["submit"]))
{
setcookie("Email", $_POST["email"], time()+(86400*30), "/");
setcookie("Password", $_POST["password"], time()+(86400*30), "/");
//$_COOKIE["Email"]=$_POST["email"];
//$_COOKIE["Password"]=$_POST["password"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SAAL</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="DirectoryPlus template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<!-- Menu -->

<div class="menu">
	<div class="menu_container text-right">
		<div class="menu_close">close</div>
		<nav class="menu_nav">
			<ul>
				<li><a href="SAAL_student.php">Home</a></li>
				<li><a href="#">About us</a></li>
				<li><a href="listings.php">Books</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		<div class="menu_link">
			<a href="return_book.php">-Return Book</a>
			<a href="borrow_book.php">+Borrow Book</a>
		</div>
	</div>
</div>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			
			<!-- Logo -->
			<div class="logo"><a href="#"><span>SAA</span><span>+</span>Library</a></div>

			<!-- Header Nav -->
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li class="active"><a href="SAAL_student.php">Home</a></li>
						<li><a href="listings_student.php">Books</a></li>
					</ul>
				</nav>
				<div class="add_listing text-center trans_200"><a href="return_book_student.php">-Return Book</a></div>
				<div class="add_listing text-center trans_200"><a href="borrow_book_student.php">+Borrow Book</a></div>
				<div class="log_reg">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="../../../DBMS_PROJECT/Login_v16/Login_v16/logout.php">Logout</a></li>
						<!li><!a href="../../../DBMS_PROJECT/colorlib-regform-17/Reg.html"><!/a><!/li>
					</ul>
				</div>
				<div class="hamburger">
					<i class="fa fa-bars trans_200"></i>
				</div>
			</div>

		</div>
	</header>

	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			
			<!-- Home Slider -->
			<div class="home_slider_container">
				<div class="owl-carousel owl-theme home_slider">
					
					<!-- Slide -->
					<div class="slide">
						<div class="background_image" style="background-image:url(images/index.jpg)"></div>
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col-xl-8 offset-xl-2">
										<div class="home_content text-center">
											<div class="home_title"><h1>Limitless <span>Opportunities</span></h1></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="slide">
						<div class="background_image" style="background-image:url(images/index1.jpg)"></div>
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col-xl-8 offset-xl-2">
										<div class="home_content text-center">
											<div class="home_title"><h1>Limitless <span>Opportunities</h1></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="slide">
						<div class="background_image" style="background-image:url(images/index2.jpg)"></div>
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col-xl-8 offset-xl-2">
										<div class="home_content text-center">
											<div class="home_title"><h1>Limitless <span>Opportunities</h1></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>

		<!-- Categories -->

		<div class="categories">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="categories_container d-flex flex-md-row flex-column align-items-start justify-content-start">
							
							<!-- Category -->
							<div class="category text-center">
								<a href="listings.html">
									<div class="d-flex flex-md-column flex-row align-items-md-center align-items-md-start align-items-center justify-content-start">
										<div class="cat_title">Easy Interface</div>
									</div>
								</a>
							</div>

							<!-- Category -->
							<div class="category text-center">
								<a href="listings.html">
									<div class="d-flex flex-md-column flex-row align-items-md-center align-items-md-start align-items-center justify-content-start">
										<div class="cat_title">Instant Transactions</div>
									</div>	
								</a>
							</div>

							<!-- Category -->
							<div class="category text-center">
								<a href="listings.html">
									<div class="d-flex flex-md-column flex-row align-items-md-center align-items-md-start align-items-center justify-content-start">
										<div class="cat_title">Systematically Maintained</div>
									</div>
								</a>
							</div>

							<!-- Category -->
							<div class="category text-center">
								<a href="listings.html">
									<div class="d-flex flex-md-column flex-row align-items-md-center align-items-md-start align-items-center justify-content-start">
										<div class="cat_title">High Quality</div>
									</div>
								</a>
							</div>

							<!-- Category -->
							<div class="category text-center">
								<a href="listings.html">
									<div class="d-flex flex-md-column flex-row align-items-md-center align-items-md-start align-items-center justify-content-start">
										<div class="cat_title">Good Collection</div>
									</div>
								</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Locations -->

		<div class="locations container_custom">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center"><h1>Fiction Books Recommended For You</h1></div>
						<div class="locations_container d-flex flex-row align-items-start justify-content-between flex-wrap">
					<?php
								$host = "localhost";
								$port = 5432;
								$database = "saa_final_library";
								$user = "myuser";
								$password = "mypass";

					try{
						if(!isset($_COOKIE["Email"]))
							$_COOKIE["Email"]=$_POST["email"];
						if(!isset($_COOKIE["Password"]))
							$_COOKIE["Password"]=$_POST["password"];
						$conn = new PDO("pgsql:host=$host port=$port dbname=$database user=$user password=$password");
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						//echo "<br>Connected successfully";

						//querying database for table values
						$stmt1 = "CREATE VIEW student_genres AS (SELECT count(*) AS counta,genre FROM student,Borrows,book WHERE Email='".$_COOKIE["Email"]."' AND password='".$_COOKIE["Password"]."' AND Usn=usn_borrows AND Book_id_borrows=Book_id AND type='Fiction' GROUP BY genre)";
						$stmt1 = $conn->query($stmt1);
						$stmt2="SELECT DISTINCT book_name FROM book WHERE genre IN (SELECT DISTINCT genre FROM student_genres WHERE counta>=ALL(SELECT counta FROM student_genres))";
						$stmt2 = $conn->query($stmt2);
						//$stmt="SELECT book_name FROM book WHERE genre='Fantasy'";
						//$stmt=$conn->query($stmt);
						$no = 0;
						while($result = $stmt2-> fetch(\PDO::FETCH_ASSOC)) {
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
						}
						$stmt3 = "DROP VIEW student_genres";
						$stmt3 = $conn->query($stmt3);
					}
					catch (PDOException $e){
					// report error message
					echo $e->getMessage();
					}

					$conn = null;
					?></div>
					</div>
				</div>
			</div>
		</div>

		<div class="locations container_custom">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center"><h1>Educational Books Recommended For You</h1></div>
						<div class="locations_container d-flex flex-row align-items-start justify-content-between flex-wrap">
								<?php
								$host = "localhost";
								$port = 5432;
								$database = "saa_final_library";
								$user = "myuser";
								$password = "mypass";

					try{
						if(!isset($_COOKIE["Email"]))
							$_COOKIE["Email"]=$_POST["email"];
						if(!isset($_COOKIE["Password"]))
							$_COOKIE["Password"]=$_POST["password"];
						$conn = new PDO("pgsql:host=$host port=$port dbname=$database user=$user password=$password");
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						//echo "<br>Connected successfully";

						//querying database for table values
						$stmt = "SELECT DISTINCT book_name FROM student,book WHERE Email='".$_COOKIE["Email"]."' AND password='".$_COOKIE["Password"]."'
								 AND type='Educational' AND ((Did_Book IS NOT NULL AND LEFT(Did_Book,9)=LEFT(Did_stud,9) AND book.semester=student.semester) OR (Did_Book IS NULL AND book.semester=student.semester))"; 
						$stmt = $conn->query($stmt);
						$no = 0;
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
						}
					}
					catch (PDOException $e){
					// report error message
					echo $e->getMessage();
					}

					$conn = null;
					?>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="locations container_custom">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center"><h1>Your Overdue Books</h1></div>
						<div class="locations_container d-flex flex-row align-items-start justify-content-between flex-wrap">
								<?php
								$host = "localhost";
								$port = 5432;
								$database = "saa_final_library";
								$user = "myuser";
								$password = "mypass";

					try{
						if(!isset($_COOKIE["Email"]))
							$_COOKIE["Email"]=$_POST["email"];
						if(!isset($_COOKIE["Password"]))
							$_COOKIE["Password"]=$_POST["password"];
						$conn = new PDO("pgsql:host=$host port=$port dbname=$database user=$user password=$password");
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						//echo "<br>Connected successfully";

						//querying database for table values
						$stmt = "UPDATE borrows SET overdue_fees=(current_date::date-due_date::date)*10 WHERE current_date>due_date"; 
						$stmt = $conn->query($stmt);
						$stmt1 = "SELECT book_name,overdue_fees FROM borrows,book,student WHERE overdue_fees>0 AND book_id=Book_id_borrows AND usn=usn_borrows AND Email='".$_COOKIE["Email"]."' AND password='".$_COOKIE["Password"]."'";
						$stmt1 = $conn->query($stmt1);
						$stmt2= "SELECT SUM(overdue_fees) AS total FROM borrows,book,student WHERE overdue_fees>0 AND book_id=Book_id_borrows AND usn=usn_borrows AND Email='".$_COOKIE["Email"]."' AND password='".$_COOKIE["Password"]."'";
						$stmt2 = $conn->query($stmt2);
						$no = 0;
						while($result = $stmt1-> fetch(\PDO::FETCH_ASSOC)) {
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
						}
					}
					catch (PDOException $e){
					// report error message
					echo $e->getMessage();
					}

					$conn = null;
					?>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="locations container_custom">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center"><h1>High Rated Books</h1></div>
						<div class="locations_container d-flex flex-row align-items-start justify-content-between flex-wrap">
								<?php
								$host = "localhost";
								$port = 5432;
								$database = "saa_final_library";
								$user = "myuser";
								$password = "mypass";

					try{
						if(!isset($_COOKIE["Email"]))
							$_COOKIE["Email"]=$_POST["email"];
						if(!isset($_COOKIE["Password"]))
							$_COOKIE["Password"]=$_POST["password"];
						$conn = new PDO("pgsql:host=$host port=$port dbname=$database user=$user password=$password");
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						//echo "<br>Connected successfully";

						//querying database for table values
						$stmt = "SELECT book_name,rating FROM book,student WHERE Email='".$_COOKIE["Email"]."' AND password='".$_COOKIE["Password"]."' AND branch_id_stud=branch_id_book ORDER BY rating";
						$stmt = $conn->query($stmt);
						//$stmt2= "SELECT SUM(overdue_fees) AS total FROM borrows,book,student WHERE overdue_fees>0 AND book_id=Book_id_borrows AND usn=usn_borrows AND Email='".$_COOKIE["Email"]."' AND password='".$_COOKIE["Password"]."'";
						//$stmt2 = $conn->query($stmt2);
						$no = 0;
						while($result = $stmt-> fetch(\PDO::FETCH_ASSOC) and $no<=5) {
								if($no%5==0 and !$no==0)
								{
									echo "<br><br><br><br>";
								}
								echo "<div class=\"location\">
								<img src=\"images/location_".($no%5+1).".jpg\" alt=\"\">"
								."<div class=\"location_title text-center\"><div><a href=\"#\">".$result['book_name']."(".$result['rating'].")<div>+</div></a></div></div>
								</div>";  
								//echo "<br>".$result['book_name'];
								$no = $no +1;      
						}
					}
					catch (PDOException $e){
					// report error message
					echo $e->getMessage();
					}

					$conn = null;
					?>

						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- How it works -->

		<div class="how container_custom">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center"><h1>How Does This Site Work?<span>+</span></h1></div>
						<div class="icon_box_container d-flex flex-row align-items-start justify-content-between flex-wrap">
							
							<!-- Icon Box -->
							<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
								<div class="icon_box_num">01.</div>
								<div class="icon_box_icon"><img src="images/icon_6.svg" alt="https://www.flaticon.com/authors/monkik"></div>
								<div class="icon_box_title">Choose a category</div>
								<div class="icon_box_text">
									<p>Search under 'Books' page. You can narrow your seacrh using keywords and by selecting the tags to filter the results.</p>
								</div>
							</div>

							<!-- Icon Box -->
							<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
								<div class="icon_box_num">02.</div>
								<div class="icon_box_icon"><img src="images/icon_7.svg" alt="https://www.flaticon.com/authors/monkik"></div>
								<div class="icon_box_title">Find your pick</div>
								<div class="icon_box_text">
									<p>The results will be displayed based on your search criteria. You can choose anything from our wide collection.</p>
								</div>
							</div>

							<!-- Icon Box -->
							<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
								<div class="icon_box_num">03.</div>
								<div class="icon_box_icon"><img src="images/icon_8.svg" alt="https://www.flaticon.com/authors/monkik"></div>
								<div class="icon_box_title">Go & have fun</div>
								<div class="icon_box_text">
									<p>^.^</p>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>



		<!-- Clients -->

		<div class="clients">
			<div class="container">
				<div class="row">
					<div class="col">

						<!-- Clients Slider -->
						<div class="clients_slider_container">
							<div class="owl-carousel owl-theme clients_slider">
								
								<!-- Slide -->
								<div class="slide">
									<div class="client_image"><a href="#"><img src="images/client_1.jpg" alt=""></a></div>
								</div>

								<!-- Slide -->
								<div class="slide">
									<div class="client_image"><a href="#"><img src="images/client_2.jpg" alt=""></a></div>
								</div>

								<!-- Slide -->
								<div class="slide">
									<div class="client_image"><a href="#"><img src="images/client_3.jpg" alt=""></a></div>
								</div>

								<!-- Slide -->
								<div class="slide">
									<div class="client_image"><a href="#"><img src="images/client_4.jpg" alt=""></a></div>
								</div>

								<!-- Slide -->
								<div class="slide">
									<div class="client_image"><a href="#"><img src="images/client_5.jpg" alt=""></a></div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/listings.js"></script>
</body>
</html>