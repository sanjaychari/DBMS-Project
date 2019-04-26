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
				<li><a href="SAAL_student.php">Home</a></li>
				<li><a href="#">About us</a></li>
				<li><a href="listings.html">Books</a></li>
				<li><a href="blog.html">News</a></li>
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
		<div class="header_background"><div class="background_image" style="background-image:url(images/header.jpg)"></div></div>
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			
			<!-- Logo -->
			<div class="logo"><a href="#"><span>SAA</span><span>+</span>Library</a></div>

			<!-- Header Nav -->
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="SAAL_student.php">Home</a></li>
						<li class="active"><a href="listings_student.php">Books</a></li>
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
											<input type="text" class="search_input" placeholder="What are you looking for?" required="required" name="query"></div><div>
											<button class="search_button" type="submit" name="submit">Search</button>
										</div>
									</div>
							</div>

							<!-- Listing Filter -->
							<div class="listing_filter">
								<div class="section_title"><h1>Filter by tags</h1></div>
								<div class="listing_filter_container d-flex flex-row align-items-start justify-content-start flex-wrap">
									
									<!-- Listing Checkbox -->
									<div class="listing_checkbox">
										<label>Name of Book
											<input type="radio" data-filter=".name" name="option" value="book_name">
											<span class="checkmark"></span>
										</label>
									</div>

									<!-- Listing Checkbox -->
									<div class="listing_checkbox">
										<label>Author
											<input type="radio" data-filter=".author" name="option" value="author">
											<span class="checkmark"></span>
										</label>
									</div>

									<!-- Listing Checkbox -->
									<div class="listing_checkbox">
										<label>Publisher
											<input type="radio" data-filter=".publish" name="option" value="publisher">
											<span class="checkmark"></span>
										</label>
									</div>
									<!-- Listing Checkbox -->
									<div class="listing_checkbox">
										<label>Genre
											<input type="radio" data-filter=".genre" name="option" value="genre">
											<span class="checkmark"></span>
										</label>
									</div>

								</div>
							</div>

				</div>
			</div>
		</form>
		</div>
	</div>
		
</div>

<!?php
	echo $_COOKIE["Email"];
	echo $_COOKIE["Password"];
?>

<?php
//Form submitted
if(isset($_POST['submit'])){
function display_data($data) {
    $output = "<table>";
    foreach($data as $key => $var) {
        //$output .= '<tr>';
        if($key===0) {
            $output .= '<tr>';
            foreach($var as $col => $val) {
                $output .= "<td>" . $col . '</td>';
            }
            $output .= '</tr>';
            foreach($var as $col => $val) {
                $output .= '<td>' . $val . '</td>';
            }
            $output .= '</tr>';
        }
        else {
            $output .= '<tr>';
            foreach($var as $col => $val) {
                $output .= '<td>' . $val . '</td>';
            }
            $output .= '</tr>';
        }
    }
    $output .= '</table>';
    echo $output;
}
$host = "localhost";
$port = 5432;
$database = "saa_final_library";
$user = "myuser";
$password = "mypass";

 switch($_POST['option']) {
        case "book_name":
            try{
		$conn = new PDO("pgsql:host=$host port=$port dbname=$database user=$user password=$password");
		// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "<br>Connected successfully";

			//querying database for table values
			$stmt = "SELECT book_name FROM book,publisher WHERE book_name LIKE '%".$_POST['query']."%' AND pid_book=pid"; 
			$stmt = $conn->query($stmt);
						//$stmt="SELECT book_name FROM book WHERE genre='Fantasy'";
						//$stmt=$conn->query($stmt);
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
            break;
        case "author":
            try{
		$conn = new PDO("pgsql:host=$host port=$port dbname=$database user=$user password=$password");
		// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "<br>Connected successfully";

			//querying database for table values
			$stmt = "SELECT book_name FROM book,author WHERE fname LIKE '%".$_POST['query']."%' OR lname LIKE '%".$_POST['query']."%' AND au_id=Au_id_book"; 
			$stmt = $conn->query($stmt);
						//$stmt="SELECT book_name FROM book WHERE genre='Fantasy'";
						//$stmt=$conn->query($stmt);
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
						};
	}
	catch (PDOException $e){
		// report error message
		echo $e->getMessage();
	}

	$conn = null;
            break;
        case "publisher":
            try{
		$conn = new PDO("pgsql:host=$host port=$port dbname=$database user=$user password=$password");
		// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "<br>Connected successfully";

			//querying database for table values
			$stmt = "SELECT book_name FROM book,publisher WHERE pname LIKE '%".$_POST['query']."%' AND pid=pid_book"; 
			$stmt = $conn->query($stmt);
						//$stmt="SELECT book_name FROM book WHERE genre='Fantasy'";
						//$stmt=$conn->query($stmt);
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
            break;
        case "genre":
            try{
		$conn = new PDO("pgsql:host=$host port=$port dbname=$database user=$user password=$password");
		// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "<br>Connected successfully";

			//querying database for table values
			$stmt = "SELECT book_name FROM book WHERE genre LIKE '%".$_POST['query']."%'"; 
			$stmt = $conn->query($stmt);
						//$stmt="SELECT book_name FROM book WHERE genre='Fantasy'";
						//$stmt=$conn->query($stmt);
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
            break;
         default:
         	echo "No option has been selected.";
}
}
?>

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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/listings.js"></script>
</body>
</html>