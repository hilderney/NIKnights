<!doctype html>
<html lang="pt-br" class="nik">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php bloginfo('name'); echo ' | '; bloginfo('description');?></title>
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?> ">
		<?php wp_head(); ?>
		<?php //include('analyticstracking.php'); ?>
	</head>
	<body <?php body_class(); ?> >
		<header>

			<?php include('navbar.php'); ?>
			<section id="ad-head-container"></section>
		</header>
		<div class="main-wrapper">
		<?php if(is_front_page()): ?>
		<section id="carousel-section">
			<?php include(get_template_directory().'/assets/views/carousel.php'); ?>
		</section>
		<?php endif; ?>