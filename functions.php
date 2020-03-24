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

add_action('admin_head', 'hide_wp_title_input');
function hide_wp_title_input()
{
    $screen = get_current_screen();
    if ($screen->id != 'game') {
        return;
    }
    ?>
    <style type="text/css">
      #post-body-content {
        display: none;
      }
    </style>
  <?php
}

function save_post_type_beneficiary($post_id) {
    $post_type = get_post_type($post_id);
    if ($post_type != 'beneficiary') {
        return;
    }

    $post_title = get_field('organization_name');
    $post_name = sanitize_title($post_title);
    $post = array(
        'ID' => $post_id,
        'post_name' => $post_name,
        'post_title' => $post_title
    );
    wp_update_post($post);
}

function save_post_type_resource($post_id) {
    $post_type = get_post_type($post_id);
    if ($post_type != 'resource') {
        return;
    }

    $post_title = get_field('organization_name');
    $post_name = sanitize_title($post_title);
    $post = array(
        'ID' => $post_id,
        'post_name' => $post_name,
        'post_title' => $post_title
    );
    wp_update_post($post);
}

add_action('acf/save_post', 'save_post_type_beneficiary'); 
add_action('acf/save_post', 'save_post_type_resource'); 



?>