<?php
/*
		CRIANDO AS PAGINAS NECESSARIAS
*/
function insert_page_blog() {
	wp_insert_post( 
		array(
			'post_title'		=> 'Blog'
			, 'post-name'		=> 'blog'				
			, 'post_content'	=> ''
			, 'post_status'		=> 'publish'
			, 'post_author'		=> 1
			, 'post_type'		=> 'page'
		)
	);
}
if( null == get_page_by_title( 'blog' ) ) {
    add_action( 'init', 'insert_page_blog' );
}
function insert_page_home() {
	wp_insert_post( 
		array(
			'post_title'		=> 'Home'
			, 'post-name'		=> 'home'				
			, 'post_content'	=> ''
			, 'post_status'		=> 'publish'
			, 'post_author'		=> 1
			, 'post_type'		=> 'page'
		)
	);
}
if( null == get_page_by_title( 'home' ) ) {
    add_action( 'init', 'insert_page_home' );
}
function insert_page_podcast() {
	wp_insert_post( 
		array(
			'post_title'		=> 'Podcast'
			, 'post-name'		=> 'podcast'				
			, 'post_content'	=> ''
			, 'post_status'		=> 'publish'
			, 'post_author'		=> 1
			, 'post_type'		=> 'page'
		)
	);
}
if( null == get_page_by_title( 'podcast' ) ) {
    add_action( 'init', 'insert_page_podcast' );
}
function insert_page_sobre() {
	wp_insert_post( 
		array(
			'post_title'		=> 'Sobre'
			, 'post-name'		=> 'sobre'				
			, 'post_content'	=> ''
			, 'post_status'		=> 'publish'
			, 'post_author'		=> 1
			, 'post_type'		=> 'page'
		)
	);
}
if( null == get_page_by_title( 'sobre' ) ) {
    add_action( 'init', 'insert_page_sobre' );
}


/*
		CONFIGURANDO AS PAGINAS HOME E BLOG
*/	
	update_site_option( 'show_on_front', 'page' );
	$blog_page = get_page_by_title( 'blog' );
	update_site_option( 'page_for_posts', $blog_page->ID );
	$home_page = get_page_by_title( 'home' );
	update_site_option( 'page_on_front', $home_page->ID );


/*
		GARANTINDO QUE AS PAGINAS NECESSARIAS NAO SEJAM EXCLUIDAS
*/
$blog_page = get_page_by_title( 'blog' );
if ($blog_page->post_status == 'trash') {
	$sblogpage->post_status = 'publish';
	wp_update_post($blog_page);
}
$home_page = get_page_by_title( 'home' );
if ($home_page->post_status == 'trash') {
	$home_page->post_status = 'publish';
	wp_update_post($home_page);
}
$podcast_page = get_page_by_title( 'podcast' );
if ($podcast_page->post_status == 'trash') {
	$podcast_page->post_status = 'publish';
	wp_update_post($podcast_page);
}
$sobre_page = get_page_by_title( 'sobre' );
if ($sobre_page->post_status == 'trash') {
	$sobre_page->post_status = 'publish';
	wp_update_post($sobre_page);
}
