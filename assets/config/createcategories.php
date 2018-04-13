<?php
/*	CRIANDO AS CATEGORIAS PADRONIZADAS	*/
function insert_category_podcast() {
	wp_insert_term(
		'Podcast'
		, 'category'
		, array(
		  'description'	=> 'Para postagens de podcasts'
		  , 'slug' 		=> 'podcast'
		)
	);
}
add_action( 'init', 'insert_category_podcast' );

function insert_category_destaque() {
	wp_insert_term(
		'Destaque'
		, 'category'
		, array(
		  'description'	=> 'Para postagens que aparecerão no slider'
		  , 'slug' 		=> 'destaque'
		)
	);
}
add_action( 'init', 'insert_category_destaque' );

function insert_category_noticia() {
	wp_insert_term(
		'Notícia'
		, 'category'
		, array(
		  'description'	=> 'Para postagens de notícias'
		  , 'slug' 		=> 'noticia'
		)
	);
}
add_action( 'init', 'insert_category_noticia' );