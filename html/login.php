<!DOCTYPE html>
	<html>
	<head>
		<title>LaundryX</title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="format-detection" content="telephone=no">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="author" content="">
	    <meta name="keywords" content="">
	    <meta name="description" content="">
		
	    <link rel="stylesheet" type="text/css" href="fonts/icomoon/icomoon.css">
	    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
		<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
		<link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

		<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	    <link rel="stylesheet" type="text/css" href="style.css">

	</head>
	<body>

<div id="main-wrapper" class="overflow-hidden">
	<div class="header-top-menu bg-black color-secondary">
		<div class="container">
			

				</div><!--flex-container-->

			</div>
		</div>
	</div><!----top-menu---->

	<header id="header">
		<div class="container">
			<div class="row">

			<nav class="navbar navbar-expand-lg col-md-12">

				<div class="navbar-brand">
					<a href="index.html">
						<img src="images/main-logo.png" alt="logo">
					</a>
				</div>

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#slide-navbar-collapse" aria-controls="slide-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"><i class="icon icon-navicon"></i></span>
				</button>

				<div class="navbar-collapse collapse" id="slide-navbar-collapse">
					<ul class="navbar-nav list-inline text-uppercase">
						<li class="nav-item text-hover"><a href="index.php" class="nav-link" data-effect="Home">Home</a></li>
						<li class="nav-item text-hover active"><a href="login.php" class="nav-link" data-effect="Contact">Login</a></li>
						<li class="nav-item text-hover "><a href="about.html" class="nav-link" data-effect="About Us">About us</a></li>
				
						<li class="nav-item text-hover"><a href="contact.html" class="nav-link" data-effect="Contact">Contact us</a></li>
						<li class="nav-item text-hover"><a href="shop.php" class="nav-link" data-effect="Contact">Shop</a></li>

						

						
						
					</ul>
				</div>

				<div class="action-menu">
					<div class="searchbar">
						<a href="#" class="search-button search-toggle" data-selector=".navbar">
							<i class="icon icon-search"></i>
						</a>
						<form role="search" method="get" class="search-box" action="">
							<input class="search-field text search-input" placeholder="Search" type="search">
						</form>
					</div>
					<div class="shopping-cart">
						<a href="#">
							<i class="icon icon-shopping-cart"></i>
						</a>
					</div>
				</div><!--action-menu-->

			</nav>

			</div>		
		</div>

	</header>

<div class="site-banner">
	<div class="banner-content">
		<form class="modal-content animate"  method="post">
			<div class="imgcontainer">
			  
			  <img src="images/main-logo.png" alt="Avatar" class="avatar">
			</div>
		
			<div class="container">
			  <label for="uname"><h4>Username</h4></label>
			  <input type="text" placeholder="Enter Username" name="user" required>
		
			  <label for="psw"><h4>Password</h4></label>
			  <input type="password" placeholder="Enter Password" name="password" required>
				
			  <button type="submit">Login</button>
			
			</div>
		
			
		  </form>
	</div>
 
<?php

 

// Process fothe login using phph

require "check.php" ;
if(isset($failed)) {echo "Invalid Username/Password" ; }

?>






<footer id="footer">
	<div class="container">
		<div class="row">

			<div class="wrap flex-container">

				

			<div class="col-md-5 mr-5 mb-3">
				<div class="widget-newsletter mb-5">
					<h4 class="widget-title">Subscribe To Our Newletter</h4>
					<div class="newsletter-button d-flex">
						<input type="text" name="Subscribe" placeholder="Your Email Address">
						<button class="btn-hvr-effects">Subscribe</button>
					</div>
					
				</div><!--widget-newsletter-->

				
			</div><!--col-md-4-->

			<div class="col-md-2">
				<div class="quick-links">
					<h4 class="widget-title">Quick Links</h4>
					<div class="footer-menu">
						<ul class="list-unstyled">
							<li><a href="index.html">Home</a></li>
							<li><a href="#">About us</a></li>

							<li><a href="#">Shop</a></li>
							<li><a href="contact.html">Contact us</a></li>
							<li><a href="login.html">Login</a></li>
						</ul>
					</div>
				</div>
			</div>

			</div><!--content-->

		</div>
	</div>
</footer>


<div class="footer-bottom">
	<div class="container">
		<div class="wrap flex-container padding-small">
			
			<div class="payment-card">
				<span>We Accept:</span>
				<img src="images/visa.png" class="cardImg">
				<img src="images/american-express.png" class="cardImg">
				<img src="images/master-card.png" class="cardImg">
			</div>
		</div>
	</div>
</div>

</div>    	

<script src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>	