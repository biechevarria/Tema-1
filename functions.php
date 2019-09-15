<?php  

function agregar_css_js(){
    wp_enqueue_style( 'style' , get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap-yeti' ,get_template_directory_uri() . '/css/bootstrap-yeti.min.css');
}
add_action( 'wp_enqueue_scripts', 'agregar_css_js' );