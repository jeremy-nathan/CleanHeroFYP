<?php

session_start();

?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />

	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />

	<!-- Movers Demo Specific Stylesheet -->
	<link rel="stylesheet" href="css/colors.php?color=0F66DD" type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href="./movers/css/fonts.css" type="text/css" />
	<link rel="stylesheet" href="./movers/movers.css" type="text/css" />
	<!-- / -->

	<!-- DatePicker CSS -->
	<link rel="stylesheet" href="css/components/datepicker.css" type="text/css" />

	<meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

	<!-- Document Title
	============================================= -->
	<title>Payment Page</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="dark header-size-sm" data-sticky-shrink="false">
			<div class="container">
				<div class="header-row">

					<!-- Logo
					============================================= -->
					<div id="logo" class="ml-auto ml-md-0">
						<a href="index.php" class="standard-logo" data-dark-logo="images/logo-dark.png"><img class="mx-auto" src="images/logo.png" alt="Canvas Logo"></a>
						<a href="index.php" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img class="mx-auto" src="images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<ul class="header-extras d-none d-sm-flex mx-auto mx-md-0 mb-4 mb-md-0">
						<li>
							<i class="i-plain icon-call m-0"></i>
							<div class="he-text font-weight-normal text-white-50">
								Call Us:
								<span><a href="tel:+60384081676" class="text-white font-weight-medium">+603-8408-1676</a></span>
							</div>
						</li>
						<li>
							<i class="i-plain icon-line2-envelope m-0"></i>
							<div class="he-text font-weight-normal text-white-50">
								Email Us:
								<span><a href="mailto:hai@cleanhero.com.my" target="_top" class="text-white font-weight-medium">hai@cleanhero.com.my</a></span>
							</div>
						</li>
					</ul>

				</div>
			</div>

			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-between flex-row-reverse flex-lg-row">


						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows not-dark">

							<ul class="menu-container">
								<li class="menu-item current"><a class="menu-link" href="index.php"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link" href="rates.php"><div>Rates</div></a></li>
								<li class="menu-item"><a class="menu-link" href="contact.php"><div>Support</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title" class="bg-color page-title-dark py-6">

			<div class="container clearfix">
				<h1>PAYMENT CHECKOUT</h1>
				<span >Please provide your payment details</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Movers</a></li>
					<li class="breadcrumb-item active" aria-current="page">Contact</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap pb-0">

				<div class="container mb-12">
					<div class="row justify-content-between">
						<div class="col-lg-12 mb-12 mb-lg-12">
							<h3>Checkout</h3>

							<div class="form-widget">

								<div class="form-result"></div>

								<form class="mb-0" id="payment-form" name="template-contactform" action="charge.php" method="post">

									<div class="row">

                                    <!-- <div class="col-12 form-group"> -->
                                        <!-- <label for="first_name">First Name <small>*</small></label> -->
                                        <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
                                    <!-- </div> -->
                                    
                                    <!-- <div class="col-12 form-group"> -->
                                        <!-- <label for="last_name">First Name <small>*</small></label> -->
                                        <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
                                    <!-- </div> -->

                                    <!-- <div class="col-12 form-group"> -->
                                        <!-- <label for="email">Email<small>*</small></label> -->
                                        <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address">
                                    <!-- </div> -->

                                    <!-- <div class="col-12 form-group"> -->
                                        <div class="form-control" id="card-element">
                                        <!-- A Stripe Element will be inserted here. -->
                                        </div>

                                        <h4 style="margin-top:20px;">Amount : RM <?php echo $_SESSION["currentAmount"]; ?></h4>
                                    <!-- </div> -->
                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert"></div>
										<div class="col-12 form-group">
											<button class="button button-rounded m-0 btn-block button-large" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">CHECKOUT</button>
										</div>

                                 
									</div>

									<input type="hidden" name="prefix" value="template-contactform-">

								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="clear"></div>


				<div class="section dark pt-0 mb-0 bg-color" style="background: url('./movers/images/bg-2.png') no-repeat center bottom / 100%; overflow: visible">
					<svg viewBox="0 0 1960 206.8" class="bg-white">
						<path class="svg-themecolor" style="opacity:0.2;" d="M0,142.8A2337.49,2337.49,0,0,1,297.5,56.3C569.33-3.53,783.89.22,849.5,2.3c215.78,6.86,382.12,45.39,503.25,73.45,158.87,36.8,283.09,79.13,458.75,54.55A816.49,816.49,0,0,0,1983,86.8v110H0Z"/>
						<path class="svg-themecolor" d="M.5,152.8s498-177,849-150,1031,238,1134,94v110H.5Z"/>
					</svg>
				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="bg-transparent border-0">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap pb-4 clearfix">

					<div class="row">

						<div style="visibility:hidden;" class="col-lg-2 col-md-2 col-6">
							<div class="widget clearfix">

								<h4 class="ls0 mb-4 nott">Features</h4>

								<ul class="list-unstyled iconlist ml-0">
									<li class="mb-2"><a href="#">Help Center</a></li>
									<li class="mb-2"><a href="#">Paid with Moblie</a></li>
									<li class="mb-2"><a href="#">Status</a></li>
									<li class="mb-2"><a href="#">Changelog</a></li>
									<li class="mb-2"><a href="#">Contact Support</a></li>
								</ul>

							</div>
						</div>
						<div style="visibility:hidden;" class="col-lg-2 col-md-2 col-6">
							<div class="widget clearfix">

								<h4 class="ls0 mb-4 nott">Support</h4>

								<ul class="list-unstyled iconlist ml-0">
									<li class="mb-2"><a href="#">Home</a></li>
									<li class="mb-2"><a href="demo-movers-company.php">About</a></li>
									<li class="mb-2"><a href="demo-movers-faqs.php">FAQs</a></li>
									<li class="mb-2"><a href="#">Support</a></li>
									<li class="mb-2"><a href="demo-movers-contact.php">Contact</a></li>
								</ul>

							</div>
						</div>
						<div style="visibility:hidden;" class="col-lg-2 col-md-2 col-6">
							<div class="widget clearfix">

								<h4 class="ls0 mb-4 nott">Trending</h4>

								<ul class="list-unstyled iconlist ml-0">
									<li class="mb-2"><a href="#">Shop</a></li>
									<li class="mb-2"><a href="#">Portfolio</a></li>
									<li class="mb-2"><a href="#">Blog</a></li>
									<li class="mb-2"><a href="#">Events</a></li>
									<li class="mb-2"><a href="#">Forums</a></li>
								</ul>

							</div>
						</div>
						<div style="visibility:hidden;" class="col-lg-2 col-md-2 col-6">
							<div class="widget clearfix">

								<h4 class="ls0 mb-4 nott">Get to Know us</h4>

								<ul class="list-unstyled iconlist ml-0">
									<li class="mb-2"><a href="#">Corporate</a></li>
									<li class="mb-2"><a href="#">Agency</a></li>
									<li class="mb-2"><a href="#">eCommerce</a></li>
									<li class="mb-2"><a href="#">Personal</a></li>
									<li class="mb-2"><a href="#">OnePage</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-4 col-md-4 text-md-right">
							<div class="widget clearfix">

								<h4 class="ls0 mb-4 nott">Headquarters:</h4>

								<div>
									<address>
										No. 12a, Jalan Perindustrian Suntrack, <br>
										Hub Perindustrian Suntrack, Off Jalan P1a, <br>
										Seksyen 13, 43650 <br>
										Bandar Baru Bangi, Selangor									
									</address>
									<h3 class="mb-3"><a href="tel:+603-8408-1676"><i class="icon-call mr-1" style="font-size: 22px;"></i> +603-8408-1676</a></h3>
									<div class="d-flex justify-content-md-end">
										<a href="https://web.facebook.com/mycleanhero/?_rdc=1&_rdr" class="social-icon si-small si-facebook" title="Facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>

										<a href="https://www.instagram.com/mycleanhero/" class="social-icon si-small si-instagram" title="instagram">
											<i class="icon-instagram"></i>
											<i class="icon-instagram"></i>
										</a>

									</div>
								</div>

							</div>
						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<!-- <div id="copyrights" class="bg-transparent">

				<div class="container clearfix">

					<div class="row justify-content-between align-items-center">
						<div class="col-md-6 text-black-50">
							Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.
						</div>

						<div class="col-md-6 d-md-flex flex-md-column align-items-md-end mt-4 mt-md-0">
							<div class="copyrights-menu copyright-links text-black-50 clearfix">
								<a href="rates.php">Rates</a>/<a href="contact.php">Contact</a>
							</div>
						</div>
					</div>

				</div>

			</div>#copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
        <!-- Stripe -->
        <script src="https://js.stripe.com/v3/"></script>
        <script src="./charge.js"></script>

	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- DatePicker JS -->
	<script src="js/components/datepicker.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

</body>
</html>