<?php

// Theme Options
add_theme_support('post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
add_theme_support( 'title-tag' );
add_theme_support('post-thumbnails');



// Navigation Set-up

function alrdadi_nav_setup(){


    register_nav_menu( 'primary','Navigation Header' );
}

add_action('after_setup_theme', 'alrdadi_nav_setup');


function custom_post_type(){

    register_post_type('description',array(
        'supports' => array('title', 'editor'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'عنوان و الوصف في الصفحة الرئيسية',
            'add_new_item' => 'Add New Description',
            'edit_item' => 'Edit Description',
            'all_items' => 'All Description',
            'singlur_name' => 'Description'
        ),
        'menu_icon' => 'dashicons-text'
    
    ));

    register_post_type('description_eng',array(
        'supports' => array('title', 'editor'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Title and description English',
            'add_new_item' => 'Add New Description',
            'edit_item' => 'Edit Description',
            'all_items' => 'All Description',
            'singlur_name' => 'Description'
        ),
        'menu_icon' => 'dashicons-text'
    
    ));

}


add_action( 'init', 'custom_post_type');



