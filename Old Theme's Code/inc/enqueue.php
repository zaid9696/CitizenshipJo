<?php 


function citizenship_scripts(){

    // Font 
    wp_enqueue_style( "citizenship_font",  '//fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap');
    // Font English
    wp_enqueue_style( "citizenship_font-",  '//fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap');
    // CSS Style
    wp_enqueue_style( "citizenship_style", get_theme_file_uri( '/css/style.css' ) );
    // JS 
    wp_enqueue_script( 'citizenship_js', get_theme_file_uri( 'js/dist/main.js' ), array('jquery'), '1.0', true);
    // Sending Data to JS File
    wp_localize_script( 'citizenship_js', 'citizenshipUri', array(
        'root_uri' => get_site_url(),
        'root_theme' => get_theme_file_uri()
    ) );



}


add_action('wp_enqueue_scripts', 'citizenship_scripts');