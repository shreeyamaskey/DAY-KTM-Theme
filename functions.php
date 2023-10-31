<?php 

function dayktm_files() {
    wp_enqueue_script('dayktm_main_script', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
    wp_enqueue_style('dayktm_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'dayktm_files');


function dayktm_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'dayktm_features');

function mytheme_post_thumbnails() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'mytheme_post_thumbnails');


register_sidebar( array(
    'name' => __( 'In Header Widget Area', 'rmccollin' ),
    'id' => 'in-header-widget-area',
    'description' => __( 'A widget area located to the right hand side of the header, next to the site title and description.', 'rmccollin' ),
    'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
   ) );

?>
