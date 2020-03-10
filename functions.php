<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/* Permet d'adapter la requête principale avant qu'elle ne s'exécute lala*/ 
function extraire_cours( $query ) {

    if (!is_home() && $query->is_category('cours'))
    {
       $query->set( 'posts_per_page', 29 );
       $query->set( 'orderby', 'meta_value_num');
    }
 }
 add_action( 'pre_get_posts', 'extraire_cours' );