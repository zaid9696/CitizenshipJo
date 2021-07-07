<?php

// Theme Options
add_theme_support('post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
add_theme_support( 'title-tag' );
add_theme_support('post-thumbnails');
add_image_size( 'search-img', 1100, 190,true );
add_image_size( 'cover-img', 500, 220, true );
add_image_size( 'most-img', 170, 165, true );



// Navigation Set-up

function zaid_starter_nav_setup(){


    register_nav_menu( 'primary','Navigation Header' );
    register_nav_menu( 'secondary','Footer Header' );
}

add_action('after_setup_theme', 'zaid_starter_nav_setup');




/*
 * Set post views count using post meta
 */
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
 }

// Remove URL Field in Comments 
 function crunchify_disable_comment_url($fields) { 
    unset($fields['url']);
    return $fields;
}

add_filter('comment_form_default_fields','crunchify_disable_comment_url');


function custom_post_type(){

    register_post_type('youtube',array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'فيديوهات يوتيوب',
            'add_new_item' => 'أضف فيديو جديد',
            'edit_item' => 'تعديل العنصر',
            'all_items' => 'جميع فيديوهات',
            'singlur_name' => 'Video'
        ),
        'menu_icon' => 'dashicons-youtube'
    
    ));

    register_post_type('partners',array(
        'supports' => array('title','thumbnail'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'شركاء المواطنة',
            'add_new_item' => 'أضافة شريك جديد',
            'edit_item' => 'تعديل العنصر',
            'all_items' => 'جميع شركاء ',
            'singlur_name' => 'Partner'
        ),
        'menu_icon' => 'dashicons-groups'
    
    ));

}


add_action( 'init', 'custom_post_type');

function ccp_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Widget Area', 'ccp' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Appears in the footer section of the site.', 'ccp' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}

add_action( 'widgets_init', 'ccp_widgets_init' );