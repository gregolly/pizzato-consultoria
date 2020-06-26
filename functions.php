<?php

function wpabrindez_theme_scripts(){
    wp_enqueue_script('jquery-new', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), false, true);
    wp_enqueue_script('owl-caroul', get_template_directory_uri().'/js/owl.carousel.min.js', array(), false, true);
    wp_enqueue_script('slide', get_template_directory_uri().'/js/slide.js', array(), false, true);
    wp_enqueue_script('slideIn', get_template_directory_uri().'/js/slideIn.js', array(), false, true);

    //css
    wp_enqueue_style('style', get_stylesheet_directory_uri() .'/css/style.css', false, false);
    wp_enqueue_style('owl-min', get_stylesheet_directory_uri() .'/css/owl.carousel.min.css', false, false);
    wp_enqueue_style('owl-min-theme', get_stylesheet_directory_uri() .'/css/owl.theme.default.min.css', false, false);
    wp_enqueue_style('slideIn',  get_stylesheet_directory_uri().'/css/slidein.css', array(), false, false);
}
add_action('wp_enqueue_scripts', 'wpabrindez_theme_scripts');

wp_deregister_script('jquery');



add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_my_menu(){
    register_nav_menu('menu-main', 'menu principal');
}
add_action('init', 'register_my_menu');

register_sidebar( $args = [
    'name' => 'dynamic_sidebar',
    'id' => 'id_sidebar',
]);
// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
