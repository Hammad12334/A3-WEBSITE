<?php
//protecting the other pages via session

session_start();

if (!isset($_SESSION['user'])) {
	header("Location:login.php");
	exit();
}

//logout
if (isset($_POST["logout"])) {
	unset($_SESSION["user"]);
}

?>




<!DOCTYPE html>
	<html>
	<head>
		<title>LaundryX - Shop</title>
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

<div class="site-banner">
	<div class="banner-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">			
					<div class="colored">
						<h1>Shop</h1>
						<div class="breadcum-items">
							<span class="item"><a href="index.html">Home /</a></span>
							<span class="item colored">Shop</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!--site-banner-->

		
	<section>		
			
		
			
		
		<div class="products-list">
			<div class="products">
				<!-- render porducts here -->
			</div>
			
			<div class="cart">
				<h2> Your Cart </h2>
				
				
				<div class="cart-header">
					<div class="column1">Item</div>
					<div class="column2">Unit price</div>
					<div class="column3">Units</div>
				</div>
				<div class="cart-items">
					<!-- render cart items here -->
				</div>
				<div class="cart-footer">
					<div class="subtotal">
						Subtotal (0 items): $0
					</div>
					
					
					
					<div class="checkout">
						Check out down Below
					</div>
					
				</div>
				<p>Click on add button on product to add to cart</p>
				<p>Click on any product within the cart to remove</p>
			</div>
		</div>


		<script>
			const porductsListEl = document.querySelector(".products-list");
			const seeMoreBtn = document.querySelector(".see-more-btn");
		
			seeMoreBtn.addEventListener('click', () => {
				porductsListEl.scrollIntoView({behavior: "smooth"})
			})
		</script>
		
		<script src="./products.js"></script>
		<script src="./app.js"></script>



		<br>
		<br>

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

		<br>
		<br>
		<br>
		
		




		<div class="row">
			<div class="col-75">
			  <div class="container">
				<form action="/action_page.php">
				
				  <div class="row">
					<div class="col-50">
					  <h1>Billing Address</h1>
					  <label for="fname"><i class="fa fa-user"></i> Full Name</label>
					  <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
					  <label for="email"><i class="fa fa-envelope"></i> Email</label>
					  <input type="text" id="email" name="email" placeholder="john@example.com">
					  <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
					  <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
					  <label for="city"><i class="fa fa-institution"></i> City</label>
					  <input type="text" id="city" name="city" placeholder="New York">
		  
					  <div class="row">
						<div class="col-50">
						  <label for="state">State</label>
						  <input type="text" id="state" name="state" placeholder="NY">
						</div>
						<div class="col-50">
						  <label for="zip">Zip</label>
						  <input type="text" id="zip" name="zip" placeholder="10001">
						</div>
					  </div>
					</div>
		  
					<div class="col-50">
					  <h1>Payment</h1>
					  <label for="fname">Accepted Cards : Visa , Master Card , Google Pay , Apple Pay</label>
					  
					  <label for="cname">Name on Card</label>
					  <input type="text" id="cname" name="cardname" placeholder="John More Doe">
					  <label for="ccnum">Credit card number</label>
					  <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
					  <label for="expmonth">Exp Month</label>
					  <input type="text" id="expmonth" name="expmonth" placeholder="September">
					  <div class="row">
						<div class="col-50">
						  <label for="expyear">Exp Year</label>
						  <input type="text" id="expyear" name="expyear" placeholder="2018">
						</div>
						<div class="col-50">
						  <label for="cvv">CVV</label>
						  <input type="text" id="cvv" name="cvv" placeholder="352">
						</div>
					  </div>
					</div>
					
				  </div>

				 
				  <label>
					<input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
				  </label>
				  <input type="submit" value="Payment" class="btn">
				</form>
			  </div>
			</div>








	</section>



<footer id="footer">
	<div class="container">
		<div class="row">

			<div class="wrap flex-container">

			<div class="col-md-3 footer-logo text-center mb-3">
				<img src="images/main-logo.png" class="mb-3">
				
			</div>		

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