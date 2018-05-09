<?php 
session_start();

include("php/cart.php");

 

  // if (!isset($_SESSION['username'])) {
  // 	$_SESSION['msg'] = "You must log in first";
  // 	header('location: Login.php');
  // }

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: Login.php");
  }


?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="zxx" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="zxx" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="zxx">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>The Project | Thank You</title>
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
								<div class="header-top-first clearfix">
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
										<!-- <li><i class="fa fa-phone pr-5 pl-10"></i>number</li> -->
										<li><i class="fa fa-envelope-o pr-5 pl-10"></i>shop@oops616.com</li>
									</ul>
								</div>
								<!-- header-top-first end -->
							</div>
							<div class="col-xs-9 col-sm-6 col-md-3">

								<!-- header-top-second start -->
								<!-- ================ -->
								<div id="header-top-second"  class="clearfix">
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
										<div id="logo" class="logo" style="margin-bottom: 1em;">
										<a href="shop.php"><img id="logo_img" src="op.jpg" alt="OOPS!" style="border-radius: 50%; height: 7em; "></a>
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
												
													
														
													
													<li class="active">
														<a href="shop.php"  >Back To Home</a>
													

													</li>
													
												</ul>
												<!-- main-menu end -->
												
												
												
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
		
			<!-- breadcrumb start -->
			<!-- ================ -->
			<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="shop.php">Home</a></li>
						<li class="active">Thank You</li>
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
						<div class="main col-md-8 col-md-offset-2">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title text-center">Thank You <i class="fa fa-smile-o pl-10"></i></h1>
							<div class="separator"></div>
						
							<p class="text-center">
								<a href="shop.php" class="btn btn-default btn-lg">Continue Shopping!</a>	
							</p>

						</div>
						<!-- main end -->

					</div>
				</div>
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

							<div id="invoice-container" class="invoice-container">
								<div class="row">
									<div class="col-sm-6">
									
										
										<address class="small">
											<strong>Oops616</strong><br>
											Grand Rapids, MI 495077<br>
											<!-- <abbr title="Phone">P:</abbr> number<br> -->
											E-mail: <a href="mailto:shop@oops616.com">shop@oops616.com</a>
										</address>
									</div>
									<div class="col-sm-offset-3 col-sm-3">
								<!-- 		<p class="text-right small"><strong>Invoice #001</strong> <br> May 15, 2015</p> -->
										<h5 class="text-right">Client</h5>
										<p class="text-right small">
											<?php

											if (isset($_SESSION["username"])) {
													 echo '<strong>User name:</strong> <span>'.$_SESSION["username"].'</span> <br>';
											}else if (isset($_SESSION['id'])) {
												echo '<strong>User ID:</strong> <span>'.$_SESSION["id"].'</span> <br>';
											}{
											
										}
										?>
			
										</p>
									</div>
								</div>
							
								<table class="table cart table-bordered">
									<thead>
										<tr>
											<th>Description </th>
											<th>Price </th>
											<th>Quantity</th>
											<th class="amount">Total </th>
										</tr>
									</thead>
									<tbody>
										<tr>
											
											
											<?php 

$totalBill =0;
if(isset($items)){
	
for ($i=0; $i <count($items) ; $i++) { 
	echo '	<tr class="remove-data">
										<td class="product"><a href="shop-product.php?item='.$items[$i]["productID"].'">'.$items[$i]["productName"].'</a> <small>Size: '.$items[$i]["size"].'</small></td>
										<td class="price">$'.$items[$i]["subtotal"].'.00 </td>
										<td class="quantity">
											<div class="form-group">
												<div class="">'.$items[$i]["unitsInCart"].'</div>
											</div>											
										</td>
										<form action="php/remove-cart.php" method="post">
										<input type="hidden" name="id" value="'.$items[$i]["productID"].'">
										<input type="hidden" name="units" value="'.$items[$i]["unitsInCart"].'">
									
										';
$total =0;

for ($x=0; $x <$items[$i]["unitsInCart"] ; $x++) { 
	$total = $items[$i]["subtotal"] +$total;
}
$totalBill = $total + $totalBill;
									echo '<td class="amount">$'.number_format(($total), 2, '.', '').'</td>
									</tr>';
										
}
}
?>
										</tr>
										
										<tr>
											<td class="total-quantity" colspan="3">Subtotal</td>
											
											<?php 

										$totalQ=0;
										
if (isset($items)) {
		for ($i=0; $i <count($items) ; $i++) { 
		$totalQ = $items[$i]["unitsInCart"] + $totalQ;

										}
}
									




echo '<td class="total-amount">$'.number_format($totalBill, 2, '.', '').'</td>';

										?>
											
											
											
										</tr>
										
										<tr>
											<td class="total-quantity" colspan="2">Sales Tax</td>
											<td class="price">+6%</td>
											
											<?php 
											$totalQ=0;
										
if (isset($items)) {
		for ($i=0; $i <count($items) ; $i++) { 
		$totalQ = $items[$i]["unitsInCart"] + $totalQ;

										}
}
									




echo '<td class="total-amount">$'.number_format(($totalBill*0.06), 2, '.', '').'</td>';
											
											
											?>
											
											
										</tr>
										<!-- <tr>										
											<td class="total-quantity" colspan="3">Shipping</td>
											<td class="amount">$12.00</td>
										</tr>
										<tr> -->
											
											
											<?php 

										$totalQ=0;
										
if (isset($items)) {
		for ($i=0; $i <count($items) ; $i++) { 
		$totalQ = $items[$i]["unitsInCart"] + $totalQ;

										}
}
									

echo '<td class="total-quantity" colspan="3">Total</td>';


echo '<td class="total-amount">$'.number_format(($totalBill+($totalBill*0.06)), 2, '.', '').'</td>';

										?>
										
										
										</tr>
									</tbody>
								</table>
								<p class="small">If you have any questions concerning this invoice, contact <strong>Oops616</strong>, email: <strong>shop@oops616.com</strong> <br> Thank you for your business!</p>
								<hr>
							</div>
							<div class="text-right">	
								<button onclick="print_window();" class="btn btn-print btn-default-transparent btn-hvr hvr-shutter-out-horizontal">Print <i class="fa fa-print pl-10"></i></button>
							</div>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->
			
			
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
			<!-- section end -->

			
	

			<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
			<!-- ================ -->
			
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
											<li><i class="fa fa-map-marker pr-10 text-default"></i>Grand Rapids, MI 49507</li>
										<!-- 	<li><i class="fa fa-phone pr-10 text-default"></i>number</li> -->
											<li><a href="mailto:info@theproject.com"><i class="fa fa-envelope-o pr-10"></i>shop@oops616.com</a></li>
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
<?php
$to = "smj.johnsonjr@gmail.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>
<?php 
$ud = $_SESSION['id'];
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



$sql = "DELETE FROM `shopcart` WHERE UID = $ud ";


if ($conn->query($sql) === TRUE) {
	if (!isset($_SESSION['username'])) {
	session_destroy();
  	unset($_SESSION['id']);
	destroy($_SESSION['id']);
	}
	
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// $amount=0;
// $id =0;


// for ($i=0; $i <count($items) ; $i++) { 
// 	$amount =0;
// 	$id=0;
// 	$amount = $items[$i]["unitsInCart"];
// 	$id = $items[$i]["productID"];

// 	$sql = "SELECT stock FROM `shopapparel` WHERE ID =$id";
	
// 	if ($result=mysqli_query($con,$sql)){

// $row = mysqli_fetch_assoc($result);
// }
// $stck =0;
// echo "stck". $stck. "<br>";
// $stck = $row["stock"];

// $amount = $stck - $amount;



// 	$sql = "UPDATE `shopapparel` SET `stock`= $amount  WHERE ID =$id ";

// 	if ($conn->query($sql) === TRUE) {
//     echo "Record updated successfully ";
// } else {
//     echo "Error updating record: " . $conn->error;
// }
// }



$conn->close();

?>