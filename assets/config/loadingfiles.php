<?php 
function nik_script_enqueue(){

	wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_register_style( 'nikcarousel', get_template_directory_uri() . '/assets/css/nikcarousel.min.css' );
	wp_register_style( 'stylesheet', get_template_directory_uri() . '/assets/css/nik_stylesheet.min.css' );
	wp_register_style( '4k', get_template_directory_uri() . '/assets/css/nik_4k.min.css', array(), '1.0.0', 'screen and (min-width: 2560px)');
	wp_register_style( 'xl', get_template_directory_uri() . '/assets/css/nik_extra_large.min.css', array(), '1.0.0', 'screen and (min-width: 1200px) and (max-width: 2559px)');
	wp_register_style( 'lg', get_template_directory_uri() . '/assets/css/nik_large.min.css', array(), '1.0.0', 'screen and (min-width: 992px) and (max-width: 1199px)');
	wp_register_style( 'md', get_template_directory_uri() . '/assets/css/nik_medium.min.css', array(), '1.0.0', 'screen and (min-width: 768px) and (max-width: 991px)');
	wp_register_style( 'sm', get_template_directory_uri() . '/assets/css/nik_small.min.css', array(), '1.0.0', 'screen and (min-width: 576px) and (max-width: 767px)');
	wp_register_style( 'xs', get_template_directory_uri() . '/assets/css/nik_extra_small.min.css', array(), '1.0.0', 'screen and (max-width: 575px)');
	wp_register_style( 'ad', get_template_directory_uri() . '/assets/css/ad.min.css' );
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'nikcarousel' );
	wp_enqueue_style( 'stylesheet' );
	wp_enqueue_style( '4k' );
	wp_enqueue_style( 'xl' );
	wp_enqueue_style( 'lg' );
	wp_enqueue_style( 'md' );
	wp_enqueue_style( 'sm' );
	wp_enqueue_style( 'xs' );
	wp_enqueue_style( 'ad' );

	wp_register_script('jquery', get_template_directory_uri() . '/assets/js/bootstrap.min.js', 'jquery');
	wp_enqueue_script('jquery');

}
add_action( 'init', 'nik_script_enqueue'/*, $priority, $accepted_args */);