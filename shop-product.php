<?php
 session_start(); 
include("php/cart.php");


// get value after link is clicked for out fit
$val = $_GET["item"];

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


// // array to hold items for each row from data base
// $items = array();

if ($stmt = $conn->prepare("SELECT Distinct name, price, color, type FROM shopapparel where ID = ? ")) {
	

$stmt->bind_param("i",$val);

$stmt->execute();

$meta = $stmt->result_metadata();

$stmt->bind_result($name,$price,$color,$type);


$stmt->fetch();
$stmt->close();
}



$conn->close();






$size = array("M", "L", "XL");



?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="zxx" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="zxx" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="eng">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>OOPS | Shop Product</title>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
		
	</head>

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
								<div class="header-top-first clearfix">
									<ul class="social-links circle small clearfix hidden-xs">
										<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
										<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
										<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
										<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
										<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
										<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
										<li class="facebook"><a target="_blank" href="https://www.facebook.com/oops616/"><i class="fa fa-facebook"></i></a></li>
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
												<li class="facebook"><a target="_blank" href="https://www.facebook.com/oops616/"><i class="fa fa-facebook"></i></a></li>
												<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
											</ul>
										</div>
									</div>
									<ul class="list-inline hidden-sm hidden-xs">
										<li><i class="fa fa-map-marker pr-5 pl-10"></i>Grand Rapids, MI 49507</li>
										<!-- <li><i class="fa fa-phone pr-5 pl-10"></i>number</li>
 -->										<li><i class="fa fa-envelope-o pr-5 pl-10"></i>shop@oops616.com</li>
									</ul>
								</div>
								<!-- header-top-first end -->
							</div>
							<div class="col-xs-9 col-sm-6 col-md-3">

								
								<!-- header-top-second end -->
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
				<header class="header  fixed    clearfix">
					
					<div class="container">
						<div class="row">
							<div class="col-md-3 ">
								<!-- header-first start -->
								<!-- ================ -->
								<div class="header-first clearfix">
									
							
									
									<!-- logo -->
									<div id="logo" class="logo">
										<a href="shop.php"><img id="logo_img" src="op.jpg" alt="OOPS" style="border-radius: 50%; height: 7em; margin-bottom: 1em;"></a>
									</div>

									<!-- name-and-slogan -->
									<!-- <div class="site-slogan">
										ITS A LIFE STYLE
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

													<!-- mega-menu start -->
													<!-- mega-menu end -->
													<!-- mega-menu start -->
													
													<!-- mega-menu end -->
													
													<!-- mega-menu start -->
													
													<!-- mega-menu end -->
												
													
														
													
													<li class="active">
														<a href="shop.php"  >Back To Shop</a>
													

													</li>
													
												</ul>
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
		
			<!-- breadcrumb start -->
			<!-- ================ -->
			<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="index-landing.php">Home</a></li>
						<li class="active">Product</li>
					</ol>
				</div>
			</div>
			<!-- breadcrumb end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">Shop Product</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->

							<div class="row">
								<div class="col-md-4">
									<!-- pills start -->
									<!-- ================ -->
									<!-- Nav tabs -->
									<ul class="nav nav-pills" role="tablist">
										<li class="active"><a href="#pill-1" role="tab" data-toggle="tab" title="images"><i class="fa fa-camera pr-5"></i> Photo</a></li>
										<!-- <li><a href="#pill-2" role="tab" data-toggle="tab" title="video"><i class="fa fa-video-camera pr-5"></i> Video</a></li> -->
									</ul>
									<!-- Tab panes -->
									<div class="tab-content clear-style">
										<div class="tab-pane active" id="pill-1">
											<div class="owl-carousel content-slider-with-large-controls">
												<div class="overlay-container overlay-visible">
													<img src="images/product-1.jpg" alt="">
													<a href="images/product-1.jpg" class="owl-carousel--popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
												</div>

											<!-- 	<div class="overlay-container overlay-visible">
													<img src="images/product-1-2.jpg" alt="">
													<a href="images/product-1-2.jpg" class="owl-carousel--popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
												</div> -->
											</div>
														<?php
											$val = $_GET["item"];
								
	
											
											include("php/clothing-rating.php");
											$buy=0;
											$notBuyAgian =0;
											for ($x=0; $x <count($review) ; $x++) { 

										if ($review[$x]["id"] == $val && $review[$x]["buyagain"] == 1) {
												$buy++;
											}elseif ($review[$x]["id"] == $val && $review[$x]["buyagain"] == 0) {
											$notBuyAgian++;
											}

											}
										$notBuyAgian = $buy + $notBuyAgian;

											echo '<span><strong>'.$buy.' out of '.$notBuyAgian. ' customers would buy this product again<strong></span>';
												?>
										</div>
									
									</div>
									<!-- pills end -->
								</div>
					
								<div class="col-md-8 pv-30">
									<?php echo "<h1>" . $name . "</h1>"  ?>
									<?php echo "<p>" . $type. "</p>"; ?>
						
									<hr class="mb-10">
									<div class="clearfix mb-20">
										<?php
											$val = $_GET["item"];
								// gets server information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopapparel";

$sum =0;
$count=0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	$sql = "SELECT rating as value_sum FROM `productreview` WHERE ID = $val ";
	$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
    
$value = $row['value_sum'];

    $sum += $value;
    $count++;


    }
    // if no rows 
} else {
    echo '<ul style="display: inline-block;"><li><a href="#f1">rate this product</a></li></ul>';
}

$conn->close();

					
											if ($sum >0) {
											
											$averageRating = round($sum / $count); 
										
												echo '<span>';

												for ($x=0; $x <$averageRating ; $x++) { 
										
											echo '<i class="fa fa-star text-default"></i> ';
											}
											if ($averageRating<5)
											 {
												for ($averageRating; $averageRating <5 ; $averageRating++) { 
													echo '<i class="fa fa-star"></i> ';
												}
											}
										echo '</span>';
									
									# code...
											}
										?>
									
										<a href="#" class="wishlist"><i class="fa fa-heart-o pl-10 pr-5"></i>Wishlist</a>
										<ul class="pl-20 pull-right social-links circle small clearfix margin-clear animated-effect-1">
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
									<div class="row grid-space-10">
										<form   role="form" class="clearfix" action="php/add-cart.php" method="post">

											

											<div class="col-md-4">
												<div class="form-group">
													<label for="quantity">Quantity</label>
													<input type="text" class="form-control" name="quantity" value="1" placeholder="1" id="quantity">
												</div>
											</div>
												

									 <?php
					

    

									echo "<div class='col-md-4'>",
												"<div class='form-group'>",
												"<label for='color'>Color</label>",

													"<select class='form-control' name='color' id='color'>";
														
														for($i=0; $i<count($color);$i++){
															echo "<option selected>" .$color. "</option>";

														} 

												
												echo	"</select>",
												 "</div>",
											 "</div>";
											// size selector
												echo "<div class='col-md-4'>",
												"<div class='form-group'>",
												"<label for='size'>Size</label>",
													"<select class='form-control' name='size' id='size'>";
														
														for($i=0; $i<count($size);$i++){
															echo "<option>" .$size[$i]. "</option>";

														} 

												
												echo	"</select>",
												 "</div>",
											 "</div>"

											 ?>
		
								
									
											<div class="col-md-12 text-right">
												
											</div>
										
									</div>

									<div class="light-gray-bg p-20 bordered clearfix">
										<!-- show price and get price for cart -->
									<?php echo "<span class='product price'><i class='icon-tag pr-10'></i>$".$price.".00</span>"  ?>	
							        <?php echo "<input type='hidden' name='price' value=".$price.">"	?>
							       <input type="hidden" name="productName" value="<?php echo $name; ?>">
							          <?php echo "<input type='hidden' name='productType' value=".$type.">"	?>
							           <?php echo "<input type='hidden' name='productID' value=".$val.">"	?>


									<div class="product elements-list pull-right clearfix">
											<input type="submit" value="Add to Cart" class="margin-clear btn btn-default">
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

			<!-- section start -->
			<!-- ================ -->

			<!-- iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii          rating and comments -->
		<section class="pv-30 light-gray-bg"> 				
			<div class="container">
					<div class="row">
						<div class="col-md-8">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs style-4" role="tablist">
								<!-- <li class="active"><a href="#h2tab2" role="tab" data-toggle="tab"><i class="fa fa-files-o pr-5"></i>Specifications</a></li> -->
									<?php 
									$val = $_GET["item"];
									include("php/clothing-rating.php");
									$totalReviews =0;
									for ($i=0; $i <count($review) ; $i++) { 
											if ($review[$i]["id"] == $val) {
								
										$totalReviews++;

									}
									}
									
							echo	'<li class="active"><a href="#h2tab3" role="tab" data-toggle="tab"><i class="fa fa-star pr-5"></i>('.$totalReviews.') Reviews</a></li>';
								?>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content padding-top-clear padding-bottom-clear">
				
								<div class="tab-pane fade in active" id="h2tab3">
									<!-- comments start -->
									<?php 
									include("php/clothing-rating.php");
									$val = $_GET["item"];
									for ($i=0; $i <count($review) ; $i++) { 
								
									if (isset($review) && $review[$i]['id'] == $val) {
									
									
								echo '<div class="comments margin-clear space-top">
										<!-- comment start -->
										<div class="comment clearfix">
											<div class="comment-avatar">
												<img class="img-circle" src="images/avatar.jpg" alt="avatar">
											</div>
											<header>';
											echo '	<h3>'.$review[$i]['subject'].'</h3>';
											echo '	<div class="comment-meta">';
											for ($x=0; $x <$review[$i]["rating"] ; $x++) { 
										
											echo '<i class="fa fa-star text-default"></i> ';
											}
											if ($review[$i]["rating"]<5)
											 {
												for ($review[$i]["rating"]; $review[$i]["rating"] <5 ; $review[$i]["rating"]++) { 
													echo '<i class="fa fa-star"></i> ';
												}
											}
											
											  echo '| '.$review[$i]['username'].'</div>
											</header>';
										echo '<div class="comment-content">
												<div class="comment-body clearfix">';
												echo '	<p>'.$review[$i]['message'].' </p>
												</div>
											</div>
										</div>';
										}

									}
										?>
										<!-- comment end -->


										

									<!-- comments form start -->
									<div class="comments-form" id="f1" >
										<h2 class="title">Add your Review</h2>
										<form role="form" id="comment-form" action="php/add-review.php" method="post">
											<?php 
													$itemId = $_GET['item'];

											echo '<input type="hidden" name="item" value="'.$itemId.'">'; 


											?>
											
											<div class="form-group has-feedback">
												<label for="name4">Name</label>
												<input type="text" class="form-control" id="name4" placeholder="" name="name4" required>
												<i class="fa fa-user form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="subject4">Subject</label>
												<input type="text" class="form-control" id="subject4" placeholder="" name="subject4" required>
												<i class="fa fa-pencil form-control-feedback"></i>
											</div>
											<div class="form-group">
												<label>Rating</label>
												<select class="form-control" name="review" id="review">
													<option value=5>5</option>
													<option value=4>4</option>
													<option value=3>3</option>
													<option value=2>2</option>
													<option value=1>1</option>
												</select>
											</div>
											<div class="form-group has-feedback">
												<label for="message4">Message</label>
												<textarea class="form-control" rows="8" id="message4" placeholder="" name="message4" required></textarea>
												<i class="fa fa-envelope-o form-control-feedback"></i>
											</div>
											<div class="form-group">
												<legend>Would you buy again</legend>
												<label for="radioz">Yes</label>
												<input type="radio" name="buyAgain" id="radioz" value="1">
												<label for="radiox">No</label>
												<input type="radio" name="buyAgain" id="radiox" value="0">

											</div>	
											<?php
											//$val = $_GET["item"];
			                               echo '<input type="hidden" name="clothingname" value="'.$name.'">';
											echo '<input type="submit" value="submit" name="s1" class="btn btn-default">';
											?>
										</form>
									</div>
									<!-- comments form end -->
								</div>
							</div>
						</div>

						<!-- sidebar start -->


					</div>
				</div>
			</section>
			<!-- section end -->

			<!-- section start -->
			<!-- ================ -->
						<!-- section start -->
			<!-- ================ -->
			<section class="pv-30 dark-translucent-bg padding-bottom-clear" style="background-image:url('images/la.jpeg');background-position: 50% 32%; height: 25em;">
				<div class="container">
					<div class="row grid-space-10">
						<div class="col-md-3 col-sm-6">
							<div class="pv-30 ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
								<span class="icon default-bg"><i class="fa fa-diamond"></i></span>
								<h3>Premium &amp; Guaranteed Quality</h3>
								<div class="separator clearfix"></div>
						
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="pv-30 ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
								<span class="icon default-bg"><i class="icon-lock"></i></span>
								<h3>Secure &amp; Safe Payment</h3>
								<div class="separator clearfix"></div>
								
							</div>
						</div>
						<div class="clearfix visible-sm"></div>
						<div class="col-md-3 col-sm-6">
							<div class="pv-30 ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
								<span class="icon default-bg"><i class="icon-globe"></i></span>
								<h3 class="pl-10 pr-10">Free &amp; Fast Shipping</h3>
								<div class="separator clearfix"></div>
								
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="pv-30 ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="250">
								<span class="icon default-bg"><i class="icon-thumbs-up"></i></span>
								<h3>24/7 Customer Support</h3>
								<div class="separator clearfix"></div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			
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
											<li><i class="fa fa-map-marker pr-10 text-default"></i>Grand Rapids, MI 49507</li>
											<!-- <li><i class="fa fa-phone pr-10 text-default"></i>number</li> -->
											<li><a href="mailto:shop@oops616.com"><i class="fa fa-envelope-o pr-10"></i>shop@oops616.com</a></li>
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
