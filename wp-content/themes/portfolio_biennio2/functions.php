<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    
    wp_enqueue_script( 'typed-scripts', get_stylesheet_directory_uri() . '/typed.js/lib/typed.min.js', array(), $the_theme->get( 'Version' ), true );
    
    wp_enqueue_script( 'isotope-scripts', get_stylesheet_directory_uri() . '/isotope/isotope.pkgd.min.js', array(), $the_theme->get( 'Version' ), true );

    wp_enqueue_script('lightbox-scripts', get_stylesheet_directory_uri() . '/lightbox2/dist/js/lightbox.min.js', array(), $the_theme->get('Version'), true);
    wp_enqueue_style('lightbox-styles', get_stylesheet_directory_uri() . '/lightbox2/dist/css/lightbox.min.css', array(), $the_theme->get('Version'));
       
    wp_enqueue_script( 'wow-scripts', get_stylesheet_directory_uri() . '/wow/wow.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_style( 'wow-styles', get_stylesheet_directory_uri() . '/wow/animate.css', array(), $the_theme->get( 'Version' ));
    
    wp_enqueue_script( 'portfolio_biennio2-scripts', get_stylesheet_directory_uri() . '/js/portfolio_biennio2.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_style( 'portfolio_biennio2-styles', get_stylesheet_directory_uri() . '/css/portfolio_biennio2.css', array(), $the_theme->get( 'Version' ) );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );
