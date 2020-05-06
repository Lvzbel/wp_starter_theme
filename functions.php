<?php 

// Enqueue Styles and Scripts

function add_theme_scripts() {
  wp_enqueue_style( '/style', get_stylesheet_uri() );
 
  wp_enqueue_style( 'styles', get_template_directory_uri() . '/dist/app.css', array(), '1.0.0', 'all');
 
  wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/app.js', array (), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );