<?php 
function nik_script_enqueue(){

	/*wp_enqueue_style( 'customstyle', get_template_directory_uri().'assets/css/nerdignorante.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'largedevices', get_template_directory_uri().'assets/css/largedevices.min.css', array(), '1.0.0', 'screen and (min-width: 2559px)');
	wp_enqueue_style( 'laptop', get_template_directory_uri().'assets/css/laptop.min.css', array(), '1.0.0', 'screen and (min-width: 1440px) and (max-width: 2559px)');
	wp_enqueue_style( 'tablet', get_template_directory_uri().'assets/css/tablet.min.css', array(), '1.0.0', 'screen and (min-width: 768px) and (max-width: 1439px)');
	wp_enqueue_style( 'mobile', get_template_directory_uri().'assets/css/mobile.min.css', array(), '1.0.0', 'screen and (min-width: 360px) and (max-width: 767px)');
	wp_enqueue_style( 'smallerdevices', get_template_directory_uri().'assets/css/smallerdevices.min.css', array(), '1.0.0', 'screen and (max-width: 359px)');*/
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_register_style( 'nikcarousel', get_template_directory_uri() . '/assets/css/nikcarousel.css' );
	wp_register_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
	wp_register_style( 'add', get_template_directory_uri() . '/assets/css/add.css' );
	
	wp_register_script('jquery', get_template_directory_uri() . '/assets/js/bootstrap.min.js', 'jquery');

	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'nikcarousel' );
	wp_enqueue_style( 'responsive' );
	wp_enqueue_style( 'add' );

	wp_enqueue_script('jquery');
}
add_action( 'init', 'nik_script_enqueue'/*, $priority, $accepted_args */);