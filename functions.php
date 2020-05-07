<?php 

// Enqueue Styles and Scripts
function add_theme_scripts() {
  // Custom Styles CSS
  wp_enqueue_style( 'styles', get_template_directory_uri() . '/dist/app.css', array(), '1.0.0', 'all');
  // Cusom JavaScript
  wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/app.js', array (), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// Enable extra features