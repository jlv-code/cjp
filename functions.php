<?php 

	/**
		@author: jlv
		@file: functions.php
		@version: 1.0
	 */


include_once ('inc/widgets-area.php');

// Register Theme Features
function theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails', array('post',));

	 // Set custom thumbnail dimensions
	set_post_thumbnail_size( 150, 150, true );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

	if (function_exists('add_image_size')) {
		add_image_size('lsThumb', 270, 190, true);
		add_image_size('lsMediun', 330, 230, true);
	}
}

// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'theme_features' );

// Register Navigation Menus
function nav_menus() {

	$locations = array(
		'main' => 'Principal',
	);
	register_nav_menus( $locations );

}

// Hook into the 'init' action
add_action( 'init', 'nav_menus' );

// Register Style
function styles() {

	wp_register_style( 'MainStyle', get_template_directory_uri().'/style.css', false, '1', 'all' );
	wp_enqueue_style( 'MainStyle' );

}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'styles' );

// Register Script
function scripts() {

	wp_register_script( 'GFonts', get_template_directory_uri().'/static/js/gfonts.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'GFonts' );
	
}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'scripts' );

// Change the excerpt string
function excerpt_length($length) {
		return 20;
}
add_filter( 'excerpt_length', 'excerpt_length', 999 );

// Change excerpt "more"
function new_excerpt_more($more) {
		return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Posts pagination
function the_pagination($posts) {
	global $wp_query;

	if($posts) $wp_query = $posts;

	$big = 999999999; 
	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages
	) );
}

// Breadcrumb
function the_breadcrumb() {
	echo '<a href="', get_option('home'), '">', 'Inicio', "</a>";
	if (is_category() || is_single()) {
		echo " » ";
		the_category(' - ');
		if (is_single()) {
			echo " » ";
			the_title();
		}
	} elseif (is_page()) {
		echo " » ", the_title();
	}
}

// The Post Type

function the_post_type() {
	switch(get_post_type()):
		case 'audiencia': $pt = 'Audiencia'; break;
		case 'post': $pt = 'Noticias'; break;
	endswitch;
	echo $pt;
}