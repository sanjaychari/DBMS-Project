<!DOCTYPE html>
<html lang="en">
<head>
<title>Listings</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="DirectoryPlus template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link rel="stylesheet" type="text/css" href="styles/listings.css">
<link rel="stylesheet" type="text/css" href="styles/listings_responsive.css">
</head>
<body>

<!-- Menu -->

<div class="menu">
	<div class="menu_container text-right">
		<div class="menu_close">close</div>
		<nav class="menu_nav">
			<ul>
				<li><a href="SAAL_admin.php">Home</a></li>
				<li><a href="#">About us</a></li>
				<li><a href="listings.html">Books</a></li>
				<li><a href="blog.html">News</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		<div class="menu_link">
			<a href="return_book_student.php">-Return Book</a>
			<a href="borrow_book_student.php">+Borrow Book</a>
		</div>
	</div>
</div>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_background"><div class="background_image" style="background-image:url(images/header.jpg)"></div></div>
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			
			<!-- Logo -->
			<div class="logo"><a href="#"><span>SAA</span><span>+</span>Library</a></div>

			<!-- Header Nav -->
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="SAAL_admin.php">Home</a></li>
						<li class="active"><a href="listings_admin.php">Books</a></li>
					</ul>
				</nav>
				<div class="add_listing text-center trans_200"><a href="remove_book.php">-Remove Book</a></div>
				<div class="add_listing text-center trans_200"><a href="../../../DBMS_PROJECT/colorlib-regform-17/add_book.html">+Add Book</a></div>
				<div class="add_listing text-center trans_200"><a href="execute_query.php">Execute Query</a></div>
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
		<!-- Listings -->


		<div class="listings container_custom">
			<div class="container">
				<div class="row">
					
					<!-- Listings Content -->
					<div class="col-xl-6">
						<div class="listings_content">

							<!-- Listing Search -->
							<div class="listing_search_container">
									<form class="search_form" id="search_form" method="post" action="<?=$_SERVER['PHP_SELF']?>">
									<div class="d-flex flex-md-row flex-column align-items-start justify-content-start">
										<div>
											<input type="text" class="search_input" placeholder="Enter the query :" required="required" name="query"></div><div>
											<button class="search_button" type="submit" name="submit">Execute</button>
										</div>
									</div>
									</form>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
		
</div>
<?php
		$host = "localhost";
								$port = 5432;
								$database = "saa_final_library";
								$user = "myuser";
								$password = "mypass";

					try{
						$conn = new PDO("pgsql:host=$host port=$port dbname=$database user=$user password=$password");
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						//echo "<br>Connected successfully";
						if(isset($_POST["submit"])){
						//querying database for table values
						//$stmt1="CREATE VIEW yourbooks AS (SELECT book_id FROM book,student WHERE book_name='".$_POST["book"]."' AND Email='".$_COOKIE["Email"]."' AND password='".$_COOKIE["Password"]."')";
						//$stmt1 = $conn->query($stmt1);
						$query = $_POST["query"];
						print "<table>";
  						$result = $conn->query($query);
  //return only the first row (we only need field names)
  						$row = $result->fetch(PDO::FETCH_ASSOC);
  						print " <tr>";
  						foreach ($row as $field => $value){
   							print " <th>$field</th>";
  						} // end foreach
  						print " </tr>";
  //second query gets the data
  						$data = $conn->query($query);
  						$data->setFetchMode(PDO::FETCH_ASSOC);
  						foreach($data as $row){
   							print " <tr>";
   							foreach ($row as $name=>$value){
   								print " <td>$value</td>";
   							} // end field loop
   							print " </tr>";
  						} // end record loop
 						print "</table>";
					}}
					catch (PDOException $e){
					// report error message
					echo $e->getMessage();
					}

					$conn = null;
					?>
</body>
</html>