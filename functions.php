<?php

// main menu
add_theme_support( 'menus' );
define( 'MENU_PRIMARY', 'menu_primary' );

function numa_menus() {
	$locations = array(
		MENU_PRIMARY => __( 'Primary' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'numa_menus' );

// add featured images
add_theme_support( 'post-thumbnails' );

// enqueued styles
function custom_css_scripts() {
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/_inc/fonts/font-awesome-4.4.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/_inc/lib/bootstrap-3.3.5-dist/css/bootstrap.min.css' );
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true );
	wp_enqueue_script( 'bootstrap-plugins', get_template_directory_uri() . '/_inc/lib/bootstrap-3.3.5-dist/js/bootstrap.min.js', array(), '1.0.0', true );
}

// register widgetized sidebar
function numa_widgets_init() {
	register_sidebar( array(
		'name'			=>	'Right sidebar',
		'id'			=>	'right_1',
		'before_widget'	=>	'<div class="numa-widget">',
		'after_widget'	=>	'</div>',
		'before_title'	=>	'<h3>',
		'after_title'	=>	'</h3>',
	) );
}

add_action( 'widgets_init', 'numa_widgets_init' );

add_action( 'wp_enqueue_scripts', 'custom_css_scripts' );

// add support and register a custom header image
$numa_header_args = array (
	'flex-width'	=>	true,
	'width'			=>	1200,
	'flex-height'	=>	true,
	'height'		=>	400,
	'default-image'	=>	get_template_directory_uri() . '/_inc/img/header-image.jpg',
	'uploads'		=>	true,
);

add_theme_support( 'custom-header', $numa_header_args );

?>