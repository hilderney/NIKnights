<?php

/*
	=====================================================
		Importing Styles and Scripts
	=====================================================
*/
	require_once get_template_directory() . '/assets/config/loadingfiles.php';

/*
	=====================================================
		Importing Navs Classes for bootstrap
	=====================================================
*/
	require_once get_template_directory() . '/assets/config/class-wp-bootstrap-navwalker.php';



/*
	=====================================================
		Activate Menus
	=====================================================
*/
function register_menus(){
	register_nav_menus( array(
		'header-menu' => __('Main Menu')
		, 'footer-menu1' => __('Footer Menu 1')
		, 'footer-menu2' => __('Footer Menu 2')
		, 'footer-menu3' => __('Footer Menu 3')
		, 'sidebar-menu' => __('Sidebar Menu')
		)
	);
}
add_action( 'init', 'register_menus' );




/*
	=====================================================
		Theme Suport Functions
	=====================================================
*/
//add_theme_support('custom-background');
//add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support( 'custom-logo' );
add_theme_support( 'html5' );
add_theme_support('post-formats', array('aside', 'image', 'video', 'audio'));


/*POST TYPES*/

function my_posts_types() {
	register_post_type( 'Podcasts', array(
		'labels' 		=> array(
							'name' 				=> __('Podcasts')
							, 'singular_name' 	=> __('Podcast')
		)
		, 'public'		=> true
		, 'has_archive'	=> true
		, 'menu_icon'	=> 'dashicons-microphone'
		, 'supports'	=> array('title', 'editor', 'thumbnail', 'page-attributes')
		)
	);
}
add_action('init', 'my_posts_types');





/*
	=====================================================
		Sidebar Functions
	=====================================================
*/
	require_once get_template_directory() . '/assets/config/createsidebars.php';



/*
	=====================================================
		Criando e Setando as Categorias obrigatórias
	=====================================================
*/
	require_once get_template_directory() . '/assets/config/createcategories.php';


/*
	=====================================================
		Criando e Setando as Páginas obrigatórias
	=====================================================
*/	
	require_once get_template_directory() . '/assets/config/createpages.php';

	/*
	=====================================================
		Criando e Setando a Metabox
	=====================================================
*/	
	require_once get_template_directory() . '/assets/config/metabox.php';

