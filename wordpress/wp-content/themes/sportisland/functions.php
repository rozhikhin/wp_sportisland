<?php

get_template_part('inc/SI_Widget_Text');
get_template_part('inc/SI_Widget_Contacts');
get_template_part('inc/SI_Widget_Social_Link');
get_template_part('inc/SI_Widget_Iframe');

add_action('show_admin_bar', '__return_false');
add_action('after_setup_theme', 'si_setup');
add_action('wp_enqueue_scripts', 'si_scripts');
add_action('widgets_init', 'si_register');

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

function si_register() {
    register_sidebar([
        'name' => 'Contacts in Header',
        'id' => 'si-header-sidebar',
        'before_widget' => null,
        'after_widget'  => null,
    ]);

    register_sidebar([
        'name' => 'Contacts in Footer',
        'id' => 'si-footer-sidebar',
        'before_widget' => null,
        'after_widget'  => null,
    ]);

    register_sidebar([
        'name' => 'Sidebar in Footer Left',
        'id' => 'si-footer-left-sidebar',
        'before_widget' => null,
        'after_widget'  => null,
    ]);

    register_sidebar([
        'name' => 'Sidebar in Footer Center',
        'id' => 'si-footer-center-sidebar',
        'before_widget' => null,
        'after_widget'  => null,
    ]);

    register_sidebar([
        'name' => 'Sidebar in Footer Right',
        'id' => 'si-footer-right-sidebar',
        'before_widget' => null,
        'after_widget'  => null,
    ]);

    register_sidebar([
        'name' => 'Map in Contact',
        'id' => 'si-contact-map-sidebar',
        'before_widget' => null,
        'after_widget'  => null,
    ]);

    register_sidebar([
        'name' => 'Info in Contact',
        'id' => 'si-contact-info-sidebar',
        'before_widget' => null,
        'after_widget'  => null,
    ]);

    register_widget('SI_Widget_Text');
    register_widget('SI_Widget_Contacts');
    register_widget('SI_Widget_Social_Link');
    register_widget('SI_Widget_Iframe');

}

