<?php
/**
 * Bonn Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BonnJoel
 */
function bonnjoel_addmore_scripts() {
	/*
	 * Enqueue custom scripts and styles	 
	 */
	wp_enqueue_style( 'bonnjoel_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css' );
	wp_enqueue_style( 'bonnjoel_fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );	
	wp_enqueue_style( 'bonnjoel_mmenu-css', get_template_directory_uri() . '/css/mmenu.css' );
	wp_enqueue_style( 'bonnjoel_lightbox-css', get_template_directory_uri() . '/css/lightbox.css' );
	wp_enqueue_style( 'bonnjoel_slick-css', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'bonnjoel_slick-theme', get_template_directory_uri() . '/css/slick-theme.css' );
	wp_enqueue_style( 'bonnjoel_custom-css', get_template_directory_uri() . '/custom.css' );

	wp_register_script( 'bonnjoel_mmenu-js', get_template_directory_uri() . '/js/mmenu.min.js', array('jquery'), 'v5.6.5', true );
	wp_register_script( 'bonnjoel_lightbox-js', get_template_directory_uri() . '/js/lightbox.js', 'jquery', 'v2.8.2', true );
	wp_register_script( 'bonnjoel_imgloaded-js', get_template_directory_uri() . '/js/imagesloaded.min.js', '', 'v4.1.0', true );	
	wp_register_script( 'bonnjoel_fastclick', get_template_directory_uri() . '/js/fastclick.js', '', '1.0.6' );
	wp_register_script( 'bonnjoel_firstWord', get_template_directory_uri() . '/js/firstWord.js', '', '1.0.6', false );
	wp_register_script( 'bonnjoel_nicescroll', get_template_directory_uri() . '/js/jquery.nicescroll.min.js', array('jquery'), false, true );
	wp_register_script( 'bonnjoel_slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), false, true );

	wp_enqueue_script( 'bonnjoel_imgloaded-js' );
	wp_enqueue_script( 'bonnjoel_fastclick' );
	wp_enqueue_script( 'bonnjoel_firstWord' );
	wp_enqueue_script( 'bonnjoel_nicescroll' );
	wp_enqueue_script( 'bonnjoel_mmenu-js' );
	wp_enqueue_script( 'bonnjoel_slick' );
	wp_enqueue_script( 'bonnjoel_tether', '//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array('jquery'), '1.4.0', true );
	wp_enqueue_script( 'bonnjoel_bootstrapjs', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array('jquery', 'bonnjoel_tether'), '0.0.6', true );	
	wp_enqueue_script( 'bonnjoel_theme-js', get_template_directory_uri() . '/js/theme.js', array('jquery','bonnjoel_mmenu-js', 'bonnjoel_nicescroll', 'bonnjoel_imgloaded-js'), false, true );	
	
}

add_action( 'wp_enqueue_scripts', 'bonnjoel_addmore_scripts' );
