<?php

if (!function_exists('all_cycles_setup')): 
    function all_cycles_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support('post-thumbnails');
    } 
endif;

add_theme_support("after_setup_theme", "all_cycles_setup");
add_filter('use_block_editor_for_post', '__return_false', 10);

function all_cycles_styles() {
    wp_enqueue_style('all_cycles_reset', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('all_cycles_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'all_cycles_styles');

function all_cycles_scripts () {
    wp_enqueue_script("nav-menu",  get_template_directory_uri() . "/js/menu.js");
}

add_action('wp_enqueue_scripts', 'all_cycles_scripts');



?>