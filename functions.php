<?php
    function load_assets(){

        wp_enqueue_style('boostrap_css', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
       
        wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/css/fontawesome.min.css' );
        wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/css/v4-font-face.min.css' );
        wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/css/v5-font-face.min.css' );

        wp_enqueue_style('style', get_stylesheet_uri() );
        
        wp_enqueue_script('jquery');

        wp_enqueue_script('boostrap_js', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js");
    }

    add_action('wp_enqueue_scripts', 'load_assets');


    /**Eliminar el margin colocado por wordpress */
   
    function my_function_admin_bar(){ 
        return false; 
    }
    
    add_filter( 'show_admin_bar' , 'my_function_admin_bar');

    /** Soporte para imagenes destacadas en páginas */

    add_theme_support('post-thumbnails');

   /** Definir tamaño de imagenes */
   
   add_image_size('post', 400, 320, true);
   
    /** Nueva navegación */

    register_nav_menus(array(
        'menu_principal'=>__('Menu Principal')
    ));

    /** Widget */
    function exploraticos_widgets(){
        register_sidebar(array(
            'name' => ('Footer Widget'),
            'id' => 'footer_widget',
            'descripcion' => 'Widget para el Footer de la página',
            'before_widget' => '<div id="$1%s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        ));
    }
    add_action( 'widgets_init', 'exploraticos_widgets');

?>     