<!doctype html>
<html lang="pt-br" class="nik">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
		<meta name="description" content="Nerd Ignorante é um site de humor para pessoas que gostam de cultura Pop e Nerd">
		<title><?php bloginfo('name'); echo ' | '; bloginfo('description');?></title>
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?> ">
		<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/assets/brand/NI_ICON.png" type="image/x-icon">
		<?php wp_head(); ?>
		<?php include('analyticstracking.php') ?>
	</head>
	<body <?php body_class(); ?> >
		<header>

			<?php include('navbar.php'); ?>
			<section id="ad-head-container"></section>
		</header>
		<div class="main-wrapper">
			<h1 class="siteDescription hide"> Nerd Ignorante - Onde o mundo nerd encontra a brutalidade</h1>
		<?php if(is_front_page()): ?>
		<section id="carousel-section">
			<?php include(get_template_directory().'/assets/views/carousel.php'); ?>
		</section>
		<?php endif; ?>