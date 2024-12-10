<?php
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'menuT' => 'Menu Topo',
		'menuP'  => 'Menu Principal',
		'menuM'  => 'Menu Mobile',
	) );

	register_sidebar( array(
		'name'          => 'Footer Coluna 1',
		'id'            => 'footer-1',
		'description'   => 'Primeira coluna do footer',
	) );

	register_sidebar( array(
		'name'          => 'Footer Coluna 2',
		'id'            => 'footer-2',
		'description'   => 'Segunda coluna do footer',
	) );

	register_sidebar( array(
		'name'          => 'Footer Coluna 3',
		'id'            => 'footer-3',
		'description'   => 'Terceira coluna do footer',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

add_image_size( 'home-g', 372, 182, true);
add_image_size( 'home-p', 163, 106, true);
add_image_size( 'post', 960, 270, true);

function newTitle($title) {
	if ( is_category() ) {
			$title = single_cat_title( '', false );
		} elseif ( is_tag() ) {
			$title = single_tag_title( '', false );
		} elseif ( is_author() ) {
			$title = '<span class="vcard">' . get_the_author() . '</span>' ;
		}
	return $title;
}

add_filter( 'wpcf7_support_html5_fallback', '__return_true' );


?>