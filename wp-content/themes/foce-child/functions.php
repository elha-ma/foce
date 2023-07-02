<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    //charger la feuille de style du thème parent
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

//Intégrer les scripts et style de Swiper JS
function slider_scripts() { 
    wp_register_style('swiper-css',get_stylesheet_directory_uri() . '/assets/lib/swiper/swiper-bundle.min.css');
    wp_enqueue_style('swiper-css');
    wp_register_script('swiper-js', get_stylesheet_directory_uri() . '/assets/lib/swiper/swiper-bundle.min.js');
    wp_enqueue_script('swiper-js');
}
add_action('wp_enqueue_scripts', 'slider_scripts');


//Intégrer le script JS des animations de la page
function charger_script_animations() {
    wp_register_script( 'scripts_animations', get_stylesheet_directory_uri() . '/js/scripts-anim.js' );
    wp_enqueue_script( 'scripts_animations'); 	   
}
add_action( 'wp_enqueue_scripts', 'charger_script_animations');











