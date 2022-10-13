<?php
//protecting the other pages via session

session_start();



//logout
if (isset($_POST["logout"])) {
	unset($_SESSION["user"]);
}

?>


<!DOCTYPE html>
	<html>
	<head>
		<title>LaundryX - Home</title>
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
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	</head>

<body>

<div id="main-wrapper" class="overflow-hidden">
	<div id="header-wrap">
	<div class="header-top-menu bg-black color-secondary">
		<div class="container">
			
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
							<li class="nav-item text-hover active"><a href="index.php" class="nav-link" data-effect="Home">Home</a></li>
							<li class="nav-item text-hover"><a href="login.php" class="nav-link" data-effect="Contact">Login</a></li>
							<li class="nav-item text-hover"><a href="about.html" class="nav-link" data-effect="About Us">About us</a></li>
	
							<li class="nav-item text-hover"><a href="contact.html" class="nav-link" data-effect="Contact">Contact us</a></li>
							<li class="nav-item text-hover"><a href="shop.php" class="nav-link" data-effect="Contact">Shop</a></li>

							
					
						

						</ul>
					</div>

					<div class="action-menu">


					<div class="shopping-cart">
							<a href="shop.html">
								<i class="icon icon-shopping-cart"></i>
							</a>
						</div>
						<br>
						
						<form method="post" >
							<input type= "hidden" name ="logout" value="1"/>
							<input type= "submit" value="logout"/>
						</form>	
							
						
						

						
					</div><!--action-menu-->

				</nav>

				

			</div>	
			
		</div>

		

	</header>

</div><!--header-wrap-->

<section id="billboard">
	<div class="main-slider">
		
		<div class="slider-item">
			
			<figure>
				<img src="images/banner1.jpg">
			</figure>
			
			<div class="text-content col-md-8">
				
				<h2 class="text-uppercase colored padding-xsmall"><a href="#">No Laundry and No time? No worries!</a></h2>
				<p>LaundryX can do all! Simply click few buttons to access the  best laundry experience you will ever have! Try it now by login to our site and start your careless laundry journey! </p>
				<div class="pix_btn">
					<a href="login.html" class="btn-hvr-effects mt-3">Log In</a>
					
				</div>
			</div><!--content-box-->


		</div><!--slider-item-->

		<div class="slider-item">
			
			<figure>
				<img src="images/banner2.jpg">
			</figure>
			
			<div class="text-content col-md-8">
				<span></span>
				<h2 class="text-uppercase colored padding-xsmall"><a href="">Spend your time doing things you love</a></h2>
				<p>The ultimate laundry solution is here!</p>
				<div class="pix_btn">
					<a href="login.html" class="btn-hvr-effects mt-3">Log In</a>
				</div>
			</div><!--content-box-->

				
		</div><!--slider-item-->


	</div><!--slider-->

</section>

<section class="about-us margin-medium">
	<div class="container">
		<div class="row">
			<div class="nav-tabs-wrap products-tab">
				
				<h2 class="section-title text-center">LaundryX</h2>
				
				<nav>
					<div class="nav nav-tabs padding-small text-hover" id="nav-tab" role="tablist">
						<a class="nav-link active" id="nav-missions-tab" data-bs-toggle="tab" data-bs-target="#nav-missions" role="tab" aria-controls="nav-missions" aria-selected="true">Our Missions</a>
						<a class="nav-link" id="nav-values-tab" data-bs-toggle="tab" data-bs-target="#nav-values" role="tab" aria-controls="nav-values" aria-selected="false">Our Values</a>
					
					</div>
				</nav>

				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" role="tabpanel" id="nav-missions" aria-labelledby="nav-missions-tab">
						<div class="col-md-12">
							<div class="row">						
								
								<div class="col-md-6">
									<div class="product-image" style="background-image: url(images/tabimg.jpg);background-size: cover;"></div>
								</div>
								
								<div class="text-content col-md-6 bg-Peach p-5">
									<h3 class="mb-4">
									Providing quality services for everyone
									</h3>
									<p>

										LaundryX is the best quailty of laundry experience you could find across Australia! We specialise in deliver your clothings in a rapid speed and secure transaction. We also partner with the best laundry stores in your local area which will wash, dry and fold your beloved clothing and send it back to you like brand new!  </p>
									
									<div class="pix_btn mt-4">
										<a href="#" class="btn-hvr-effects">read more</a>
									</div>
								</div>
							</div>
						</div><!--content-->
					</div><!--tab-pane-->

					<div class="tab-pane fade" role="tabpanel" id="nav-values" aria-labelledby="nav-values-tab">
						<div class="col-md-12">
							<div class="row">
								
								<div class="col-md-6">
									<div class="product-image" style="background-image: url(images/tabimg1.jpg);background-size: cover;"></div>
								</div>

								<div class="text-content col-md-6 bg-Peach p-5">
									<h3 class="mb-4">
										Let us take care of your clothing.
									</h3>
									<p>LaundryX always aims for high value for customer, we appericate that our customer picks our service. By using our service, we can provide the best customer experience and professional laundry washing skill to our customers, hence our value and goal for the business is “Customer No.1” </p>
									<div class="pix_btn mt-4">
										<a href="#" class="btn-hvr-effects">read more</a>
									</div>
								</div>
							</div>
						</div><!--col-md-12-->
					</div><!--tab-panel-->

					

				</div><!--tab-content-->

			</div><!---with-nav-tabs--->
		</div>
	</div>				

</section>






<section class="gallery-wrap margin-medium">

</section>




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
							<li><a href="#">Home</a></li>
							<li><a href="about.html">About us</a></li>
							<li><a href="#">Gallery</a></li>
							<li><a href="#">Shop</a></li>
							<li><a href="blog.html">Blogs</a></li>
							<li><a href="contact.html">Contact us</a></li>
							<li><a href="contact.html">JOIN US AS A DRIVER </a></li>
						</ul>
					</div>
					<div class="detail mb-4">
						<h3>Social Links</h3>
						<div class="social-links flex-container">
							<a href="#" class="icon icon-facebook"></a>
							<a href="#" class="icon icon-twitter"></a>
							<a href="#" class="icon icon-pinterest-p"></a>
							<a href="#" class="icon icon-youtube"></a>
							<a href="#" class="icon icon-linkedin"></a>
						</div><!--social-links-->
					</div><!--detail-->
				</div>
			</div>

			</div><!--flex-container-->

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
 

	<script src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	
</body>
</html>	