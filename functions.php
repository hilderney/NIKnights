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
			, 'social-menu' => __('Social Menu')
			, 'footer-menu' => __('Footer Menu')
			, 'sidebar-menu' => __('Sidebar Menu')
		)
	);
	}
	add_action( 'init', 'register_menus' );


/*
	=====================================================
		Seting Pagination
	=====================================================
*/
	function wordpress_pagination() {
        global $wp_query;
        $big = 999999999;
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages,
            'prev_next'          => true,
			'prev_text'          => __('Anterior'),
			'next_text'          => __('Próximo')
        ));
  	}

  	function wordpress_custom_pagination($query) {
		        $big = 999999999;
		        echo paginate_links( array(
		            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		            'format' => '?paged=%#%',
		            'current' => max( 1, get_query_var('paged') ),
		            'total' => $query->max_num_pages,
		            'prev_next'          => true,
					'prev_text'          => __('Anterior'),
					'next_text'          => __('Próximo')
		        ));
			}


/*
	=====================================================
		Theme Suport Functions
	=====================================================
*/
//add_theme_support('custom-background');
//add_theme_support('custom-header');
//add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails');
	add_theme_support( 'custom-logo' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'comments' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-formats', array('aside', 'image', 'video', 'audio'));

	/*POST TYPES*/

	function my_posts_types() {
		register_post_type( 'Podcasts', array(
			'labels' 		=> array(
				'name' 				=> __('Podcasts')
				, 'singular_name' 	=> __('Podcast') )
			, 'public'		=> true
			, 'has_archive'	=> true
			, 'menu_icon'	=> 'dashicons-microphone'
			, 'supports'	=> array('title', 'editor', 'thumbnail', 'page-attributes') )
		);
	}
	add_action('init', 'my_posts_types');



/*
	=====================================================
		Comments Functions
	=====================================================
*/

	require_once get_template_directory() . '/assets/config/createcomments.php';



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


/*
	=====================================================
		Criando os Widgets de Anúncios
	=====================================================
*/
	require_once get_template_directory() . '/assets/config/createcustomwidgets.php';