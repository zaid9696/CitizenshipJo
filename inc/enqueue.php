<?php 


function zaid_starter_scripts(){

    // Font 
    wp_enqueue_style( "zaid_starter_font",  'https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap'); 
    // CSS Style
    wp_enqueue_style( "zaid_starter_style", get_theme_file_uri( 'dist/style.css' ) );
    // Jquery
    // wp_enqueue_script( 'zaid_starter_jQuery', get_theme_file_uri( 'src/js/jquery.min.js' ), array('jquery'), '1.0', true);
    // OwlCarousel JS File 
    // wp_enqueue_script( 'zaid_starter_owl', get_theme_file_uri( 'src/js/owl.carousel.min.js' ), array('jquery'), '1.0', true);  
    // JS
     wp_enqueue_script( 'zaid_starter_js', get_theme_file_uri( 'dist/main.js' ), array('jquery'), '1.0', true);
    // Sending Data to JS File
    wp_localize_script( 'zaid_starter_js', 'zaid_starterUri', array(
        'root_uri' => get_site_url(),
        'root_theme_uri' => get_theme_file_uri()
    ) );



}


add_action('wp_enqueue_scripts', 'zaid_starter_scripts');