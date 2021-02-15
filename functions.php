<?php

if (!function_exists('all_cycles_setup')): 
    function all_cycles_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support('post-thumbnails');
    } 
endif;
add_theme_support("after_setup_theme", "all_cycles_setup");
add_filter('use_block_editor_for_post', '__return_false', 10);


// Link CSS
function all_cycles_styles() {
    wp_enqueue_style('all_cycles_reset', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('all_cycles_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'all_cycles_styles');


// Link JS
function all_cycles_scripts () {
    wp_enqueue_script("nav-menu",  get_template_directory_uri() . "/js/menu.js", array(), false, true);

    if (is_page('volunteer') || is_page('contact') ||  is_front_page() ) {
        wp_enqueue_script("validation-functions",  get_template_directory_uri() . "/js/validation-functions.js", array(), false, true);           
    }

    if (is_page('volunteer')) {
        wp_enqueue_script("volunteer-validation",  get_template_directory_uri() . "/js/volunteer-validation.js", array(), false, true);     
    }

    if (is_page('contact')) {
        wp_enqueue_script("contact-validation",  get_template_directory_uri() . "/js/contact-validation.js", array(), false, true);     
    }

    if (is_front_page()) {
        wp_enqueue_script("front-page-validation",  get_template_directory_uri() . "/js/front-page-validation.js", array(), false, true);     
    }
}
add_action('wp_enqueue_scripts', 'all_cycles_scripts');


// Create new Admin page
function admin_landing_page() {
    add_menu_page( 'Welcome | All Cycles Admin', 'Welcome', 'manage_options', 'admin_landing_page', 'create_admin_page', 'dashicons-menu', 5  );
}
add_action( 'admin_menu', 'admin_landing_page' );
function create_admin_page() {
    ?>
    <div class="admin-container">
        <h1>Welcome to All Cycles Administration!</h1>
        <p>Now that you’re logged in you can use this dashboard to manage all the content that appears on the website. Here’s a high level overview of how to manage each of the content types used on All Cycles YEG.</p>

        <h2>Products Donated</h2>
        <p>Use this page to update the number of products donated on the landing page of the website. The page is set up to only display the most recent post you’ve created in this category. This way, you can keep track of how many you’ve donated in the past by referring to past posts.</p>

        <h2>Beneficiaries, Resources, and Donation locations</h2>
        <p>These sections are used to create new partners for each corresponding page. Create a new partner by clicking the “add new” button under each post type and fill out the corresponding form.</p>

        <h2>Events</h2>
        <p>This post type is for creating new events that All Cycles is participating in. The home page of All Cycles is currently set up to show the four most recent events that you’ve posted.</p>
    </div>
    <?php
}

function load_admin_styles($hook) {
    if ($hook != 'toplevel_page_admin_landing_page'){
        return;
    }
    wp_enqueue_style('admin-style.css', get_template_directory_uri() . '/assets/css/admin-style.css');
}
add_action( 'admin_enqueue_scripts', 'load_admin_styles' );


// Hide WP title
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

// Rename custom posts with proper title
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

function save_post_type_donations($post_id) {
    $post_type = get_post_type($post_id);
    if ($post_type != 'donation_location') {
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

function save_post_type_events($post_id) {
    $post_type = get_post_type($post_id);
    if ($post_type != 'events') {
        return;
    }

    $post_title = get_field('title');
    $post_name = sanitize_title($post_title);
    $post = array(
        'ID' => $post_id,
        'post_name' => $post_name,
        'post_title' => $post_title
    );
    wp_update_post($post);
}

function save_post_type_products_donated($post_id) {
    $post_type = get_post_type($post_id);
    if ($post_type != 'products_donated') {
        return;
    }

    $post_title = get_field('number_of_products_donated');
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
add_action('acf/save_post', 'save_post_type_donations'); 
add_action('acf/save_post', 'save_post_type_events');
add_action('acf/save_post', 'save_post_type_products_donated');


// Hide the following pages from the WP dashboard. Comment out to bring back.
function remove_menus(){
    remove_menu_page( 'index.php' );                  //Dashboard
    remove_menu_page( 'edit.php' );                   //Posts
    remove_menu_page( 'upload.php' );                 //Media
    remove_menu_page( 'plugins.php' );               //Plugins
    // remove_menu_page( 'users.php' );                 //Users
    remove_menu_page( 'tools.php');                 //Tools
    remove_menu_page( 'themes.php');                 //Appearance
    remove_menu_page( 'edit-comments.php' );          //Comments
    remove_menu_page( 'edit.php?post_type=page' );    //Pages

}
add_action( 'admin_menu', 'remove_menus' );


// Hide ACF from the dashboard
add_filter('acf/settings/show_admin', '__return_false');


// Hide CPT UI from the dashboard
remove_action( 'admin_menu', 'cptui_plugin_menu' );


// Redirect dashboard initial page
function dashboard_redirect(){
    wp_redirect(admin_url('edit.php?post_type=beneficiary'));
}
add_action('load-index.php','dashboard_redirect');


// Remove toolbar Buttons
function remove_toolbar_buttons($wp_admin_bar) {
	$wp_admin_bar->remove_node('new-content');
    $wp_admin_bar->remove_node('comments');
    $wp_admin_bar->remove_node('wp-logo');
    $wp_admin_bar->remove_node('customize');
    $wp_admin_bar->remove_node('search');
    $wp_admin_bar->remove_node('edit');
    $wp_admin_bar->remove_node('themes');
}
add_action('admin_bar_menu', 'remove_toolbar_buttons', 999);





?>