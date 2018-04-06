<?php 

function nik_widget_setup(){
	
		$sidebar1 = array(
			'name'          => 'main-sidebar',
			'id'            => 'sidebar-1',
			'description'   => 'Main sidebar is shown in every screen size',
			'class'         => 'main-sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		);

		$sidebar2 = array(
			'name'          => 'second-sidebar',
			'id'            => 'sidebar-2',
			'description'   => 'Second sidebar is not shown in small screens',
			'class'         => 'second-sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		);

		$footer_widget_area1 = array(
			'name'          => 'footer_widget_area_1',
			'id'            => 'footer_widget_area-1',
			'description'   => 'First column in footer is shown in Every screen size',
			'class'         => 'footer-col-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		);

		$footer_widget_area2 = array(
			'name'          => 'footer_widget_area_2',
			'id'            => 'footer_widget_area-2',
			'description'   => 'Second column in footer is not shown in small screen size',
			'class'         => 'footer-col-2',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		);

		$footer_widget_area3 = array(
			'name'          => 'footer_widget_area_3',
			'id'            => 'footer_widget_area-3',
			'description'   => 'Third column in footer is not shown in small screen size',
			'class'         => 'footer-col-3',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		);

		$ad_widget_superbanner = array(
			'name'          => 'ad_widget_superbanner',
			'id'            => 'ad_widget_superbanner',
			'description'   => 'ad_widget_superbanner is not shown in mobile`s screen size',
			'class'         => 'ni-ad-superbanner',
			'before_widget' => '<div id="%1$s" class="ni-ad-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		);
		register_sidebar( $sidebar1 );
		register_sidebar( $sidebar2 );
		register_sidebar( $footer_widget_area1 );
		register_sidebar( $footer_widget_area2 );
		register_sidebar( $footer_widget_area3 );
		register_sidebar( $ad_widget_superbanner );		
}
add_action('widgets_init','nik_widget_setup');