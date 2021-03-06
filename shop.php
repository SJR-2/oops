<?php 
  session_start(); 

  if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {



	$_SESSION['id'] = rand(1000,1000000000);
	





  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: Login.php");
  }
}

?>
<?php 
	include("php/clothing-name.php");
	//include("php/cart.php");
 ?>

<!DOCTYPE html>
<!-- https://getbootstrap.com/docs/3.3/css/#forms -->
<!--[if IE 9]> <html lang="zxx" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="zxx" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="zxx">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>OOPS | Shop</title>
		<meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="fonts/fontello/css/fontello.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="css/animations.css" rel="stylesheet">
		<link href="plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="plugins/hover/hover-min.css" rel="stylesheet">		
		
		<!-- The Project's core CSS file -->
		<!-- Use css/rtl_style.css for RTL version -->
		<link href="css/style.css" rel="stylesheet" >
		<!-- The Project's Typography CSS file, includes used fonts -->
		<!-- Used font for body: Roboto -->
		<!-- Used font for headings: Raleway -->
		<!-- Use css/rtl_typography-default.css for RTL version -->
		<link href="css/typography-default.css" rel="stylesheet" >
		<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
		<link href="css/skins/light_blue.css" rel="stylesheet">
		

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
		<style>
.dropbtn {
    
  
    font-size: 16px;
    border: none;
}
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-content {
    display: none;
    position: absolute;
   
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown-content a:hover {}
.dropdown:hover .dropdown-content {
    display: block;
}
.dropdown:hover .dropbtn {
    
}
</style>
	</head>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="shop.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "gradient-background-header": applies gradient background to header -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
	<body class="no-trans    ">

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		
		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
		
			<!-- header-container start -->
			<div class="header-container">
				
				
				<!-- header-top start -->
				<!-- classes:  -->
				<!-- "dark": dark version of header top e.g. class="header-top dark" -->
				<!-- "colored": colored version of header top e.g. class="header-top colored" -->
				<!-- ================ -->
				<div class="header-top dark ">
					<div class="container">
						<div class="row">
							<div class="col-xs-3 col-sm-6 col-md-9">
								<!-- header-top-first start -->
								<!-- ================ -->
								<div class="header-top-first clearfix" >
									<ul class="social-links circle small clearfix hidden-xs">
										<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
										<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
										<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
										<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
										<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
										<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
										<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
									</ul>
									<div class="social-links hidden-lg hidden-md hidden-sm circle small">
										<div class="btn-group dropdown">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
											<ul class="dropdown-menu dropdown-animation">
												<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
												<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
												<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
												<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
												<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
												<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
												<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
												<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
											</ul>
										</div>
									</div>
									<ul class="list-inline hidden-sm hidden-xs">
										<li><i class="fa fa-map-marker pr-5 pl-10"></i>Grand Rapids, MI 49507</li>
										<!-- <li><i class="fa fa-phone pr-5 pl-10"></i>number</li>
 -->										<li><i class="fa fa-envelope-o pr-5 pl-10"></i> shop@oops616.com</li>
									</ul>
								</div>
								<!-- header-top-first end -->
							</div>
					
						</div>
					</div>
				</div>
				<!-- header-top end -->
				
				<!-- header start -->
				<!-- classes:  -->
				<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
				<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
				<!-- "full-width": mandatory class for the full-width menu layout -->
				<!-- "centered": mandatory class for the centered logo layout -->
				<!-- ================ --> 
				<header class="header  fixed    clearfix" >
					
					<div class="container">
						<div class="row">
							<div class="col-md-3 ">
								<!-- header-first start -->
								<!-- ================ -->
								<div class="header-first clearfix">
									
				
									
									<!-- logo -->
									<div id="logo" class="logo" style="margin-bottom: 1em;">
										<a href="shop.php"><img id="logo_img" src="op.jpg" alt="OOPS!" style="border-radius: 50%; height: 7em; "></a>
									</div>
									<!-- name-and-slogan -->
									<!-- <div class="site-slogan" style="">
										Its A Life Style
									</div> -->

								</div>
								<!-- header-first end -->

							</div>
							<div class="col-md-9">
					
								<!-- header-second start -->
								<!-- ================ -->
								<div class="header-second clearfix">
									
								<!-- main-navigation start -->
								<!-- classes: -->
								<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
								<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
								<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
								<!-- ================ -->
								<div class="main-navigation  animated with-dropdown-buttons">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">

											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
												
											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse" id="navbar-collapse-1">
												<!-- main-menu -->
												<ul class="nav navbar-nav ">	
													<li class="active">
														<a href="index-landing.php"  >Back To Home</a>
													

													</li></ul>
												<!-- main-menu end -->
												
												<?php include("php/cart-layout.php"); ?>
												
											</div>

										</div>

									</nav>

									<!-- navbar end -->

								</div>

								<!-- main-navigation end -->
								</div>
								<!-- header-second end -->
					
							</div>
						</div>
					</div>
					
				</header>
				<!-- header end -->
			</div>
			<!-- header-container end -->
		
			<!-- banner start -->
			<!-- ================ -->
			<div class="banner dark-translucent-bg padding-bottom-clear" style="background-image:url('images/la.jpeg');background-position: 50% 32%; height: 28em;">
				<!-- breadcrumb start -->
				<!-- ================ -->
				<div class="breadcrumb-container">
					<div class="container">
						<ol class="breadcrumb">
							<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="index-landing.php">Home</a></li>
							<li class="active">Shop</li>
						</ol>
					</div>
				</div>
				<!-- breadcrumb end -->
				<div class="container">
					<div class="row">
						<div class="col-md-8 text-center col-md-offset-2 pv-20">
							<h2 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100" style="padding-top: 6em;">OOPS Its a <strong>Life Style</strong></h2>
							<div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
						
						</div>
					</div>
				</div>
		
									
			</div>
			<!-- banner end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">
							<!-- pills start -->
							<!-- ================ -->
							<!-- Nav tabs -->
							<ul class="nav nav-pills" role="tablist">
								<li class="active"><a href="#pill-1" role="tab" data-toggle="tab" title="Latest Arrivals"><i class="icon-star"></i> Latest Arrivals</a></li>
								<li><a href="#pill-2" role="tab" data-toggle="tab" title="Lowest-Highest"><i class="icon-up-1"></i>Price</a></li>
								<li><a href="#pill-3" role="tab" data-toggle="tab" title="Top Sellers"><i class=" icon-heart"></i> Top Sellers</a></li>



					<li><a href="#" role="tab" data-toggle="tab" title="Category"><i class=" icon-search"></i>Category</a></li>

   <li> <a href="#pill-5"  style="display: inline;"  role="tab" data-toggle="tab" title="T-Shirt">T-Shirt</a></li>
  <li>  <a href="#pill-6"  role="tab" data-toggle="tab" title="Long-Sleeve" style="display: inline;">Long-Sleeve</a></li>

							</ul>
							<!-- Tab panes -->
							<div class="tab-content clear-style">
								<div class="tab-pane active" id="pill-1">						
									<div class="row masonry-grid-fitrows grid-space-10">
										<?php
										$x=1;
										if (isset($item)) {
									
										for ($i=0; $i <count($item) ; $i++) { 
									$outOfStock = false;
									echo '<div class="col-md-3 col-sm-6 masonry-grid-item">';
										echo '<div class="listing-item white-bg bordered mb-20">';
											echo '<div class="overlay-container">';
											if ($item[$i]['stock'] ==0) {
													echo  '<span class="badge">SOLD OUT</span>';
													$outOfStock = true;
											}else{
											echo  '<span class="badge">'.$item[$i]['stock'].' in stock</span>';
											}
										
													echo '<img src="images/product-'.$x.'.jpg" alt="">';
												echo '<a class="overlay-link popup-img-single" href="images/product-'.$x.'.jpg"><i class="fa fa-search-plus"></i></a>';
												$x++;
													if($outOfStock){
		echo '<div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
													</div>
												</div>';
											echo '<div class="body">
										<h3><a href="#"> '.$item[$i]["name"].'</a></h3>';
												echo '<p class="small">'.$item[$i]["type"].'</p>';
												
													echo '<div class="elements-list clearfix">
													<span class="price">$'.$item[$i]["price"].'.00</span>
														<a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Select item<i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>';
													}else{
		echo '<div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="shop-product.php?item='.$item[$i]['pid'].'" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
													</div>
												</div>';
											echo '<div class="body">
										<h3><a href="shop-product.php?item='.$item[$i]['pid'].'"> '.$item[$i]["name"].'</a></h3>';
												echo '<p class="small">'.$item[$i]["type"].'</p>';
												
													echo '<div class="elements-list clearfix">
													<span class="price">$'.$item[$i]["price"].'.00</span>
														<a href="shop-product.php?item='.$item[$i]['pid'].'" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Select item<i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>';
													}
										
									}
										}
										?>

										
									</div>
								</div>
							
								<div class="tab-pane" id="pill-2">
							<div class="row masonry-grid-fitrows grid-space-10">
										<?php
										
// gets server information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopapparel";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// array to hold items for each row from data base
$items = array();
// 
$sql = "SELECT Distinct name,price,type, stock, ID FROM shopapparel order by price asc";
$result = $conn->query($sql);
// loops through rows until there is 0 rows
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
    	$items[] = array("name" => $row["name"], "price" => $row["price"], "type"=> $row["type"], "stock" => $row["stock"], "pid"=>$row["ID"]);
    }
    // if no rows 
} else {
    echo "0 results";
}
$conn->close();
						if (isset($items[0]['name'])) {
									
										for ($i=0; $i <count($items) ; $i++) { 
									$outOfStock= false;
									echo '<div class="col-md-3 col-sm-6 masonry-grid-item">';
										echo '<div class="listing-item white-bg bordered mb-20">';
											echo '<div class="overlay-container">';
											if ($items[$i]['stock'] ==0) {
												$outOfStock = true;
													echo  '<span class="badge">SOLD OUT</span>';
											}else{
											echo  '<span class="badge">'.$items[$i]['stock'].' in stock</span>';
											}
										
													echo '<img src="images/product-3.jpg" alt="">';
												echo '<a class="overlay-link popup-img-single" href="images/product-1.jpg"><i class="fa fa-search-plus"></i></a>';
													
												if($outOfStock){
		echo '<div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
													</div>
												</div>';
											echo '<div class="body">
										<h3><a href="#"> '.$items[$i]["name"].'</a></h3>';
												echo '<p class="small">'.$items[$i]["type"].'</p>';
												
													echo '<div class="elements-list clearfix">
													<span class="price">$'.$items[$i]["price"].'.00</span>
														<a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Select item<i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>';
													}else{
		echo '<div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="shop-product.php?item='.$items[$i]['pid'].'" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
													</div>
												</div>';
											echo '<div class="body">
										<h3><a href="shop-product.php?item='.$items[$i]['pid'].'"> '.$items[$i]["name"].'</a></h3>';
												echo '<p class="small">'.$items[$i]["type"].'</p>';
												
													echo '<div class="elements-list clearfix">
													<span class="price">$'.$items[$i]["price"].'.00</span>
														<a href="shop-product.php?item='.$items[$i]['pid'].'" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Select item<i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>';
													}
										
									}
										}
										
										?>

										
									</div>
								</div>
								<div class="tab-pane" id="pill-3">
									<div class="row masonry-grid-fitrows grid-space-10">
										
							<?php
										
// gets server information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopapparel";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// array to hold items for each row from data base
$items = array();
// selecting only name and price to display on shop page
$sql = "SELECT Distinct name,price,type, stock, rating, shopapparel.ID FROM shopapparel, productreview WHERE shopapparel.name = productreview.clothingName AND rating >=4";
$result = $conn->query($sql);
// loops through rows until there is 0 rows
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
    	$items[] = array("name" => $row["name"], "price" => $row["price"], "type"=> $row["type"], "stock" => $row["stock"], "rating"=> $row["rating"], "pid"=> $row["ID"]);
    }
    // if no rows 
} else {
    echo "0 results";
}
$conn->close();
						if (isset($items[0]['name'])) {
									
										for ($i=0; $i <count($items) ; $i++) { 
									$outOfStock= false;
									echo '<div class="col-md-3 col-sm-6 masonry-grid-item">';
										echo '<div class="listing-item white-bg bordered mb-20">';
											echo '<div class="overlay-container">';
											if ($items[$i]['stock'] ==0) {
												$outOfStock = true;
													echo  '<span class="badge">SOLD OUT</span>
													<span class="price">'.$items[$i]["rating"].' star rating</span>';
											}else{
											echo  '<span class="badge">'.$items[$i]['stock'].' in stock</span>
											<span class="price">'.$items[$i]["rating"].' star rating</span>';
											}
										
													echo '<img src="images/product-3.jpg" alt="">';
												echo '<a class="overlay-link popup-img-single" href="images/product-1.jpg"><i class="fa fa-search-plus"></i></a>';
													
											if($outOfStock){
		echo '<div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
													</div>
												</div>';
											echo '<div class="body">
										<h3><a href="#"> '.$items[$i]["name"].'</a></h3>';
												echo '<p class="small">'.$items[$i]["type"].'</p>';
												
													echo '<div class="elements-list clearfix">
													<span class="price">$'.$items[$i]["price"].'.00</span>
														<a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Select item<i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>';
													}else{
		echo '<div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="shop-product.php?item='.$items[$i]['pid'].'" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
													</div>
												</div>';
											echo '<div class="body">
										<h3><a href="shop-product.php?item='.$items[$i]['pid'].'"> '.$items[$i]["name"].'</a></h3>';
												echo '<p class="small">'.$items[$i]["type"].'</p>';
												
													echo '<div class="elements-list clearfix">
													<span class="price">$'.$items[$i]["price"].'.00</span>
														<a href="shop-product.php?item='.$items[$i]['pid'].'" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Select item<i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>';
													}
										
									}
								}
										
										?>

									
							
								
								
							
									</div>
								</div>
<!-- this pill is for categorizing clothing -->
						<div class="tab-pane" id="pill-5">
									<div class="row masonry-grid-fitrows grid-space-10">
										
							<?php
										
// gets server information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopapparel";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// array to hold items for each row from data base
$items = array();
// selecting only name and price to display on shop page
$sql = "SELECT Distinct name,price,type, stock,ID FROM shopapparel WHERE type = 'T-Shirt'";
$result = $conn->query($sql);
// loops through rows until there is 0 rows
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
    	$items[] = array("name" => $row["name"], "price" => $row["price"], "type"=> $row["type"], "stock" => $row["stock"],"pid"=> $row["ID"]);
    }
    // if no rows 
} else {
    echo "0 results";
}
$conn->close();
						if (isset($items[0]['name'])) {
									
										for ($i=0; $i <count($items) ; $i++) { 
									$outOfStock= false;
									echo '<div class="col-md-3 col-sm-6 masonry-grid-item">';
										echo '<div class="listing-item white-bg bordered mb-20">';
											echo '<div class="overlay-container">';
											if ($items[$i]['stock'] ==0) {
												$outOfStock = true;
													echo  '<span class="badge">SOLD OUT</span>';
											}else{
											echo  '<span class="badge">'.$items[$i]['stock'].' in stock</span>
											';
											}
										
													echo '<img src="images/product-3.jpg" alt="">';
												echo '<a class="overlay-link popup-img-single" href="images/product-1.jpg"><i class="fa fa-search-plus"></i></a>';
													
											if($outOfStock){
		echo '<div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
													</div>
												</div>';
											echo '<div class="body">
										<h3><a href="#"> '.$items[$i]["name"].'</a></h3>';
												echo '<p class="small">'.$items[$i]["type"].'</p>';
												
													echo '<div class="elements-list clearfix">
													<span class="price">$'.$items[$i]["price"].'.00</span>
														<a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Select item<i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>';
													}else{
		echo '<div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="shop-product.php?item='.$items[$i]['pid'].'" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
													</div>
												</div>';
											echo '<div class="body">
										<h3><a href="shop-product.php?item='.$items[$i]['pid'].'"> '.$items[$i]["name"].'</a></h3>';
												echo '<p class="small">'.$items[$i]["type"].'</p>';
												
													echo '<div class="elements-list clearfix">
													<span class="price">$'.$items[$i]["price"].'.00</span>
														<a href="shop-product.php?item='.$items[$i]['pid'].'" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Select item<i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>';
													}
										
									}
								}
										
										?>

									
							
								
								
							
									</div>
								</div>
<div class="tab-pane" id="pill-6">
									<div class="row masonry-grid-fitrows grid-space-10">
										
							<?php
										
// gets server information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopapparel";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// array to hold items for each row from data base
$items = array();
// selecting only name and price to display on shop page
$sql = "SELECT Distinct name,price,type, stock, ID FROM shopapparel WHERE type = 'Long-Sleeve'";
$result = $conn->query($sql);
// loops through rows until there is 0 rows
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
    	$items[] = array("name" => $row["name"], "price" => $row["price"], "type"=> $row["type"], "stock" => $row["stock"], "pid"=>$row["ID"]);
    }
    // if no rows 
} else {
    echo "0 results";
}
$conn->close();
						if (isset($items[0]['name'])) {
									
										for ($i=0; $i <count($items) ; $i++) { 
									$outOfStock= false;
									echo '<div class="col-md-3 col-sm-6 masonry-grid-item">';
										echo '<div class="listing-item white-bg bordered mb-20">';
											echo '<div class="overlay-container">';
											if ($items[$i]['stock'] ==0) {
												$outOfStock = true;
													echo  '<span class="badge">SOLD OUT</span>';
											}else{
											echo  '<span class="badge">'.$items[$i]['stock'].' in stock</span>
											';
											}
										
													echo '<img src="images/product-3.jpg" alt="">';
												echo '<a class="overlay-link popup-img-single" href="images/product-1.jpg"><i class="fa fa-search-plus"></i></a>';
													
											if($outOfStock){
		echo '<div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
													</div>
												</div>';
											echo '<div class="body">
										<h3><a href="#"> '.$items[$i]["name"].'</a></h3>';
												echo '<p class="small">'.$items[$i]["type"].'</p>';
												
													echo '<div class="elements-list clearfix">
													<span class="price">$'.$items[$i]["price"].'.00</span>
														<a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Select item<i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>';
													}else{
		echo '<div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="shop-product.php?item='.$items[$i]['pid'].'" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
													</div>
												</div>';
											echo '<div class="body">
										<h3><a href="shop-product.php?item='.$items[$i]['pid'].'"> '.$items[$i]["name"].'</a></h3>';
												echo '<p class="small">'.$items[$i]["type"].'</p>';
												
													echo '<div class="elements-list clearfix">
													<span class="price">$'.$items[$i]["price"].'.00</span>
														<a href="shop-product.php?item='.$items[$i]['pid'].'" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Select item<i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>';
													}
										
									}
								}
										
										?>

									
							
								
								
							
									</div>
								</div>

									</div>


							</div>
							<!-- pills end -->
							<!-- pagination start -->
							<div>
							<nav class="text-center" >
								<ul class="pagination">
									<li><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
								</ul>
							</nav>
						</div>
							<!-- pagination end -->
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

			<!-- section start -->
			<!-- ================ -->
			<section class="section light-gray-bg pv-40 clearfix">
				<div class="container">
					<div class="row grid-space-10">
						<div class="col-md-3 col-sm-6">
							<div class="feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
								<span class="icon default-bg"><i class="fa fa-diamond"></i></span>
								<h3>Premium Quality</h3>
							
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
								<span class="icon default-bg"><i class="icon-lock"></i></span>
								<h3>Secure &amp; Safe Payment</h3>
							</div>
						</div>
						<div class="clearfix visible-sm"></div>
						<div class="col-md-3 col-sm-6">
							<div class="feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
								<span class="icon default-bg"><i class="icon-globe"></i></span>
								<h3 class="pl-10 pr-10">Fast Shipping</h3>
							
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="250">
								<span class="icon default-bg"><i class="icon-thumbs-up"></i></span>
								<h3>24/7 Customer Support</h3>
						
							</div>
						</div>
					</div>
				
				</div>
			</section>
			<!-- section end -->
			
	

		
		
			<!-- footer top end -->
			<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
			<!-- ================ -->
			<footer id="footer" class="clearfix ">

				<!-- .footer start -->
				<!-- ================ -->
				<div class="footer">
					<div class="container">
						<div class="footer-inner">
							<div class="row">
						
								
								<div class="col-md-12">
									<div class="footer-content text-center">
										<h2 class="title">Find Us</h2>
										<div class="separator-2"></div>
										<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium odio voluptatem necessitatibus illo vel dolorum soluta.</p> -->
										<ul class="social-links circle animated-effect-1">
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
											<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
											<li class="xing"><a target="_blank" href="http://www.xing.com"><i class="fa fa-xing"></i></a></li>
										</ul>
										<div class="separator-2"></div>
										<ul class="list-icons">
											<li><i class="fa fa-map-marker pr-10 text-default"></i> Grand Rapids, MI 49507</li>
										<!-- 	<li><i class="fa fa-phone pr-10 text-default"></i> number</li>
 -->											<li><a href="mailto:shop@oops616.com"><i class="fa fa-envelope-o pr-10"></i>shop@oops616.com</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .footer end -->

				<!-- .subfooter start -->
				<!-- ================ -->
				<div class="subfooter">
					<div class="container">
						<div class="subfooter-inner">
							<div class="row">
								<div class="col-md-12">
									<p class="text-center">2018 Oops616. All Rights Reserved</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .subfooter end -->

			</footer>
			<!-- footer end -->
			
		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- ================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>
		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/waypoints/jquery.waypoints.min.js"></script>
		<!-- Count To javascript -->
		<script type="text/javascript" src="plugins/jquery.countTo.js"></script>
		<!-- Parallax javascript -->
		<script src="plugins/jquery.parallax-1.1.3.js"></script>
		<!-- Contact form -->
		<script src="plugins/jquery.validate.js"></script>
		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="plugins/owlcarousel2/owl.carousel.min.js"></script>
		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>
		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>
