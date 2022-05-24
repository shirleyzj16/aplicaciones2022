<?php
    function load_assets(){

        wp_enqueue_style('boostrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');

        // cargar BS js
 wp_enqueue_style('boostrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js');
        
        wp_enqueue_style('style', get_stylesheet_uri() );
    }

    add_action('wp_enqueue_scripts', 'load_assets');
   
    function my_function_admin_bar(){ 
        return false; 
    }

    add_filter( 'show_admin_bar' , 'my_function_admin_bar');
    // soporte para imagenes
  add_theme_support('post-thumbnails');
?>    