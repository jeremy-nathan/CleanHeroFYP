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
	<title>Clean Hero</title>

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

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element bg-color" style="height: auto; padding: 60px 0; background: url('./movers/images/bg-2.png') no-repeat center center / 100% 100%;">

			<div class="container mt-4" style="z-index: 2">
				<div class="center">
					<h2 class="text-white h2 font-weight-semibold mb-2">Welcome to Clean Hero!</h2>
					<p class="text-white-50">If you wish to create a booking with us, please fill in your details below</p>
				</div>
				<div class="row topmargin justify-content-center">
					<div class="col-lg-6">
						<ul class="nav nav-tabs nav-justified flex-column border-bottom-0 flex-md-row bg-color mt-4" role="tablist">
							<li class="nav-item">
								<a class="nav-link py-3 active" id="home-moving-tab" data-toggle="tab" role="tab" aria-controls="home-moving" aria-selected="true">Create a Booking</a>
							</li>
						</ul>
						<div class="tab-content rounded-bottom shadow bg-white py-4 px-5">
							<div class="tab-pane fade show active" id="home-moving" role="tabpanel" aria-labelledby="home-moving-tab">
								<p class="text-center mb-4">Please enter your details for your booking.</p>
								<div class="form-widget">
									<div class="form-result"></div>
									<form class="row home-moving-form position-relative mb-0" action="booking.php" method="post" enctype="multipart/form-data">
										<!-- <div class="form-process">
											<div class="css3-spinner">
												<div class="css3-spinner-scaler"></div>
											</div>
										</div> -->

										<div class="col-sm-12 input-group form-group">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="icon-line2-map"></i></span>
											</div>
											<input required type="text" name="address1" id="home-moving-form-location-from" class="form-control required" placeholder="Address Line 1">
										</div>
										<div class="col-sm-12 input-group form-group">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="icon-line2-map"></i></span>
											</div>
											<input required type="text" name="address2" id="home-moving-form-location-from" class="form-control required" placeholder="Address Line 2">
										</div>
										<div class="col-sm-6 input-group form-group">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="icon-building2"></i></span>
											</div>
											<input required type="text" class="form-control required" name="city" id="home-moving-form-date"  placeholder="City">
										</div>
										<div class="col-sm-6 input-group form-group">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="icon-line2-pointer"></i></span>
											</div>
											<input required type="text" name="postcode" id="home-moving-form-location-to" class="form-control required"  placeholder="Postcode">
										</div>

										<div class="col-sm-6 input-group form-group">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="icon-line2-calendar"></i></span>
											</div>
											<input required type="text" class="form-control home-date required" name="bookDate" id="home-moving-form-date"  placeholder="Your Date">
										</div>
										<div class="col-sm-6 input-group form-group">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="icon-line2-clock"></i></span>
											</div>
											<input required type="time" name="startTime" id="home-moving-form-location-to" class="form-control required"  placeholder="Start Time">
										</div>
										<div class="col-sm-6 input-group form-group">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="icon-line2-plus"></i></span>
											</div>
											<input required type="text" name="noOfHours" id="home-moving-form-location-to" class="form-control required"  placeholder="No. of Hours">
										</div>
										<div class="col-sm-6 input-group form-group">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="icon-line2-user"></i></span>
											</div>
											<input required type="text" name="fullName" id="home-moving-form-name" class="form-control required"  placeholder="Your Full Name">
										</div>
										<div class="col-sm-6 input-group form-group">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="icon-line2-call-out"></i></span>
											</div>
											<input required type="text" name="phoneNumber" id="home-moving-form-phone" class="form-control required"  placeholder="Your Phone Number">
										</div>

										<div class="col-sm-6 input-group form-group">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="icon-id-card"></i></span>
											</div>
											<input required type="text" name="icNo" id="home-moving-form-email" class="form-control required"  placeholder="Your IC No.">
										</div>

										<div class="col-12">
											<button type="submit" name="submitBookingButton" value="Submit" class="btn bg-color text-white font-weight-medium btn-block py-2 mt-2">Submit</button>
										</div>

										<input type="hidden" name="prefix" value="home-moving-form-">
										<input type="hidden" name="subject" value="Home Moving Request">
										<input type="hidden" name="html_title" value="Home Moving">
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5 d-none d-lg-flex flex-wrap justify-content-center">
						<img src="./movers/images/2.svg" alt="Image 1" class="d-flex align-self-end ml-5 mt-3">
					</div>
				</div>
			</div>

			<div class="svg-separator">
				<div>
					<svg preserveAspectRatio="xMidYMax meet" viewBox="0 0 1600 100" data-height="100">
						<path style="opacity: 1;fill: rgba(255,255,255,0.75);" d="M1040,56c0.5,0,1,0,1.6,0c-16.6-8.9-36.4-15.7-66.4-15.7c-56,0-76.8,23.7-106.9,41C881.1,89.3,895.6,96,920,96
						C979.5,96,980,56,1040,56z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.75);" d="M1699.8,96l0,10H1946l-0.3-6.9c0,0,0,0-88,0s-88.6-58.8-176.5-58.8c-51.4,0-73,20.1-99.6,36.8 c14.5,9.6,29.6,18.9,58.4,18.9C1699.8,96,1699.8,96,1699.8,96z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.75);" d="M1400,96c19.5,0,32.7-4.3,43.7-10c-35.2-17.3-54.1-45.7-115.5-45.7c-32.3,0-52.8,7.9-70.2,17.8 c6.4-1.3,13.6-2.1,22-2.1C1340.1,56,1340.3,96,1400,96z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.75);" d="M320,56c6.6,0,12.4,0.5,17.7,1.3c-17-9.6-37.3-17-68.5-17c-60.4,0-79.5,27.8-114,45.2 c11.2,6,24.6,10.5,44.8,10.5C260,96,259.9,56,320,56z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.75);" d="M680,96c23.7,0,38.1-6.3,50.5-13.9C699.6,64.8,679,40.3,622.2,40.3c-30,0-49.8,6.8-66.3,15.8 c1.3,0,2.7-0.1,4.1-0.1C619.7,56,620.2,96,680,96z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.75);" d="M-40,95.6c28.3,0,43.3-8.7,57.4-18C-9.6,60.8-31,40.2-83.2,40.2c-14.3,0-26.3,1.6-36.8,4.2V106h60V96L-40,95.6
						z"></path>
						<path style="opacity: 1;fill: rgba(255,255,255,0.3);;" d="M504,73.4c-2.6-0.8-5.7-1.4-9.6-1.4c-19.4,0-19.6,13-39,13c-19.4,0-19.5-13-39-13c-14,0-18,6.7-26.3,10.4 C402.4,89.9,416.7,96,440,96C472.5,96,487.5,84.2,504,73.4z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.3);;" d="M1205.4,85c-0.2,0-0.4,0-0.6,0c-19.5,0-19.5-13-39-13s-19.4,12.9-39,12.9c0,0-5.9,0-12.3,0.1 c11.4,6.3,24.9,11,45.5,11C1180.6,96,1194.1,91.2,1205.4,85z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.3);;" d="M1447.4,83.9c-2.4,0.7-5.2,1.1-8.6,1.1c-19.3,0-19.6-13-39-13s-19.6,13-39,13c-3,0-5.5-0.3-7.7-0.8 c11.6,6.6,25.4,11.8,46.9,11.8C1421.8,96,1435.7,90.7,1447.4,83.9z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.3);;" d="M985.8,72c-17.6,0.8-18.3,13-37,13c-19.4,0-19.5-13-39-13c-18.2,0-19.6,11.4-35.5,12.8 c11.4,6.3,25,11.2,45.7,11.2C953.7,96,968.5,83.2,985.8,72z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.3);;" d="M743.8,73.5c-10.3,3.4-13.6,11.5-29,11.5c-19.4,0-19.5-13-39-13s-19.5,13-39,13c-0.9,0-1.7,0-2.5-0.1 c11.4,6.3,25,11.1,45.7,11.1C712.4,96,727.3,84.2,743.8,73.5z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.3);;" d="M265.5,72.3c-1.5-0.2-3.2-0.3-5.1-0.3c-19.4,0-19.6,13-39,13c-19.4,0-19.6-13-39-13 c-15.9,0-18.9,8.7-30.1,11.9C164.1,90.6,178,96,200,96C233.7,96,248.4,83.4,265.5,72.3z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.3);;" d="M1692.3,96V85c0,0,0,0-19.5,0s-19.6-13-39-13s-19.6,13-39,13c-0.1,0-0.2,0-0.4,0c11.4,6.2,24.9,11,45.6,11 C1669.9,96,1684.8,96,1692.3,96z"></path> <path style="opacity: 1;fill: rgba(255,255,255,0.3);;" d="M25.5,72C6,72,6.1,84.9-13.5,84.9L-20,85v8.9C0.7,90.1,12.6,80.6,25.9,72C25.8,72,25.7,72,25.5,72z"></path>
						<path style="fill: rgb(255, 255, 255);" d="M-40,95.6C20.3,95.6,20.1,56,80,56s60,40,120,40s59.9-40,120-40s60.3,40,120,40s60.3-40,120-40s60.2,40,120,40s60.1-40,120-40s60.5,40,120,40s60-40,120-40s60.4,40,120,40s59.9-40,120-40s60.3,40,120,40s60.2-40,120-40s60.2,40,120,40s59.8,0,59.8,0l0.2,143H-60V96L-40,95.6z"></path>
					</svg>
					<div class="bg-white" style="height: 150px"></div>
				</div>
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap pb-0">

				<div class="container clearfix">

					<div class="row justify-content-center mb-5">
						<div class="col-lg-7 center">
							<div class="heading-block">
								<h3 class="nott mb-3 font-weight-semibold ls0">A Hero You Can Trust</h3>
							</div>
						</div>
					</div>

				</div>

				<div class="clear"></div>

				<!-- <div class="section p-0 dark mb-0" style="background: linear-gradient(to right, rgba(25,102,221,0.2), rgba(25,102,221,0.5)), url('./movers/images/section/1.jpg') no-repeat center center / cover; min-height: 400px">
					<div class="container">
						<div class="row justify-content-between mb-4" style="padding: 100px 0 160px;">
							<div class="col-lg-5 col-md-6 offset-lg-1 pt-3">
								<a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe" class="play-video ml-3"><i class="icon-play"></i></a>
								<h2 class="display-4 font-weight-bold text-white topmargin-lg">Services we can help you with.</h2>
							</div>
							<div class="col-lg-5 col-md-6 mb-0 mb-md-5">
								<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt distinctio dolor nemo quasi cum. A ipsam tempora voluptatem officiis! Accusantium!</p>
								<h3 class="mb-2 text-white">Service We Provide:</h3>
								<div class="d-flex">
									<ul class="col-6 iconlist">
										<li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">100% Trustable</span></li>
										<li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">100% Safe &amp; Secure</span></li>
										<li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">On-Time Delivery</span></li>
										<li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">Verified Movers</span></li>
										<li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">Liecenced Company</span></li>
										<li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">No Hidden Charges</span></li>
										<li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">Live Chat</span></li>
									</ul>
									<ul class="col-6 iconlist">
										<li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">24x7  Support</span></li>
										<li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">No Extra Payments</span></li>
										<li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">Also Deliver on Sunday</span></li>
										<li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">Minimum 1 Mover Free</span></li>
										<li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">Track Items by App</span></li>
										<li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">International Delivery</span></li>
										<li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">Door to Door</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<svg class="svg-curve" viewBox="0 0 1463 188.03">
						<path style="fill:#FFF;" d="M-.5,288.5s297-175,792-97,599,52,671,25v143H-.5Z" transform="translate(0 -171.47)"/></svg>
				</div> -->

				<div class="section section-features bg-transparent mt-0 p-0 clearfix">
					<div class="container clearfix">
						<div class="row col-mb-50 col-mb-lg-80">
							<div class="col-md-6">
								<div class="feature-box media-box">
									<div class="fbox-icon position-relative mb-4" style="background-image: url('./movers/images/featured-img/1.jpg');">
										<i class="icon-bed"></i>
									</div>
									<div class="fbox-content">
										<h3 class="font-weight-semibold">Mattress Cleaning</h3>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="feature-box media-box">
									<div class="fbox-icon position-relative mb-4" style="background-image: url('./movers/images/featured-img/2.jpg');">
										<i class="icon-stroopwafel"></i>
									</div>
									<div class="fbox-content">
										<h3 class="font-weight-semibold">Carpet Cleaning</h3>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="feature-box media-box">
									<div class="fbox-icon position-relative mb-4">
										<i class="icon-bacterium"></i>
									</div>
									<div class="fbox-content">
										<h3 class="font-weight-semibold">Microbial Control</h3>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="feature-box media-box">
									<div class="fbox-icon position-relative mb-4" style="background-image: url('./movers/images/featured-img/1.jpg');">
										<i class="icon-car"></i>
									</div>
									<div class="fbox-content">
										<h3 class="font-weight-semibold">Car Cushion Cleaning</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="clear"></div>

				<div class="clear"></div>
				<div class="container mb-5">
					<div class="section-clients mx-auto" style="max-width: 700px">
						<div class="center clearfix mb-4">
							<span class="badge badge-pill lightthemecolor color text-uppercase ls1 font-weight-medium py-2 px-3">Operating Since 2016</span>
						</div>
						<div class="clear"></div>
					</div>
				</div>

				<div class="clear"></div>

				<div class="section dark pt-0 mb-0 bg-color" style="background: url('./movers/images/bg-2.png') no-repeat center bottom / 100%; overflow: visible">
					<svg viewBox="0 0 1960 206.8" class="bg-white">
						<path class="svg-themecolor" style="opacity:0.2;" d="M0,142.8A2337.49,2337.49,0,0,1,297.5,56.3C569.33-3.53,783.89.22,849.5,2.3c215.78,6.86,382.12,45.39,503.25,73.45,158.87,36.8,283.09,79.13,458.75,54.55A816.49,816.49,0,0,0,1983,86.8v110H0Z"/>
						<path class="svg-themecolor" d="M.5,152.8s498-177,849-150,1031,238,1134,94v110H.5Z"/>
					</svg>
					<div class="container">
						<div class="row align-items-center justify-content-center center my-4">

							<div class="col-sm-8">
								<div class="heading-block border-bottom-0 mb-4">
									<h2 class="font-weight-semibold ls0 nott mb-3" style="font-size: 44px; line-height: 1.3">Contact us</h2>
									<p>Get in touch with us!</p>
								</div>
								<a href="contact.php" class="button button-white button-light button-rounded font-weight-medium m-0">Get In Touch</a>
							</div>

						</div>
					</div>
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
									<li class="mb-2"><a href="contact.php">Support</a></li>
									<li class="mb-2"><a href="contact.php">Contact</a></li>
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
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- DatePicker JS -->
	<script src="js/components/datepicker.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<!-- <script src="js/functions.js"></script> -->

	<script>

		jQuery('.home-date').datepicker({
			autoclose: true,
			startDate: "today",
		});
	</script>


</body>
</html>