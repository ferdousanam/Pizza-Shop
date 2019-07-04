<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Aahar || Food Delivery</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/user/images/favicon.ico'); ?>">
	<link rel="apple-touch-icon" href="<?php echo base_url('assets/user/images/icon.png'); ?>">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url('assets/user/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/user/css/plugins.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/user/style.css'); ?>">

	<!-- Cusom css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/user/css/custom.css'); ?>">

	<!-- Modernizer js -->
	<script src="<?php echo base_url('assets/user/js/vendor/modernizr-3.5.0.min.js'); ?>"></script>
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
	your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- <div class="fakeloader"></div> -->

<!-- Main wrapper -->
<div class="wrapper" id="wrapper">
	<!-- Start Header Area -->
	<header class="htc__header bg--white">
		<!-- Start Mainmenu Area -->
		<div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-sm-4 col-md-6 order-1 order-lg-1">
						<div class="logo">
							<a href="<?=base_url()?>">
								<img src="<?php echo base_url('assets/user/images/logo/foody.png'); ?>" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
						<div class="main__menu__wrap">
							<nav class="main__menu__nav d-none d-lg-block">
								<ul class="mainmenu">
									<li class="drop"><a href="<?=base_url()?>">Home</a></li>
									<li><a href="<?=base_url('about')?>">About</a></li>
									<li><a href="<?=base_url('contact')?>">Contact</a></li>
								</ul>
							</nav>

						</div>
					</div>
					<div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
						<div class="header__right d-flex justify-content-end">
							<div class="log__in">
								<a class="accountbox-trigger" href="#"><i class="zmdi zmdi-account-o"></i></a>
							</div>
							<div class="shopping__cart">
								<a class="minicart-trigger" href="#"><i class="zmdi zmdi-shopping-basket"></i></a>
								<div class="shop__qun">
									<span>03</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Mobile Menu -->
				<div class="mobile-menu d-block d-lg-none"></div>
				<!-- Mobile Menu -->
			</div>
		</div>
		<!-- End Mainmenu Area -->
	</header>
	<!-- End Header Area -->
