<?php  

// Soporte de imagenes destacadas
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
 }

function agregar_css_js(){
    wp_enqueue_style( 'style' , get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap-yeti' ,get_template_directory_uri() . '/css/bootstrap-yeti.min.css');
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), '1.14.7', true);
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('popper'), '4.3', true);

}
add_action( 'wp_enqueue_scripts', 'agregar_css_js' );