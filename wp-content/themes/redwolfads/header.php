<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Site for Planet Earth</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Site for Planet Earth" />
	<meta name="keywords" content="planet, Earth" />
	<meta name="author" content="PLANET" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700|Roboto:300,400' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/bootstrap.css">

	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>

    <body>
	<div class="box-wrap">
		<header role="banner" id="fh5co-header">
			<div class="container">
			<nav class="navbar navbar-default">
					<div class="row">
						<div class="col-md-3">
							<div class="fh5co-navbar-brand">
								<a class="fh5co-logo" href="<?php bloginfo( 'url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand-nav.png" alt="Closest Logo"></a>
							</div>
						</div>
						<div class="col-md-6">
			<?php 
			
			$args = array(
				'menu' => 'ul',
				'container_class' => 'navbar navbar-default',
				'menu_class' => 'nav text-center'

			);
			
			wp_nav_menu($args) ?>
			
							<!-- <ul class="nav text-center">
								<li class="active"><a href="index.html"><span>Work</span></a></li>
								<li><a href="inside.html">About</a></li>
								<li><a href="services.html">Services</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul> -->
						</div>
						<div class="col-md-3">
							<ul class="social">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
								<li><a href="#"><i class="icon-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</nav>
		  </div>
		</header>