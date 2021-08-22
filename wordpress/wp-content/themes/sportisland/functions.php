<?php

add_action('show_admin_bar', '__return_false');
add_action('after_setup_theme', 'si_setup');
add_action('wp_enqueue_scripts', 'si_scripts');

function si_setup(){
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // add_theme_support('menus');
    register_nav_menu('menu-header', 'Menu in Header');
    register_nav_menu('menu-footer', 'Menu in Footer');
    load_theme_textdomain( 'sportisland', get_template_directory() . '/languages' );

    remove_theme_support( 'widgets-block-editor' );
}

function _si_assets_path($path) {
    echo get_template_directory_uri() . '/assets/' . $path;
}

function si_scripts(){
    wp_enqueue_style('si-style', get_template_directory_uri() . '/assets/css/styles.css', [], '1.0');
    wp_enqueue_script('si-script', get_template_directory_uri() . '/assets/js/js.js', [], '1.0', true);
}

/**
 * Include another theme scripts
 */
get_template_part('inc/sidebars/si_sidebars');
get_template_part('inc/widgets/si_widgets');
get_template_part('inc/shotcodes/si_shotcodes');

