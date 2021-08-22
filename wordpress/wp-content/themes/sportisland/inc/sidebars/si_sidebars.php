<?php

add_action('widgets_init', 'si_sidebars_register');

function si_sidebars_register() {
    register_sidebar([
        'name' => __('Contacts in Header', 'sportisland'),
        'id' => 'si-header-sidebar',
        'before_widget' => null,
        'after_widget'  => null,
    ]);

    register_sidebar([
        'name' => __('Contacts in Footer', 'sportisland'),
        'id' => 'si-footer-sidebar',
        'before_widget' => null,
        'after_widget'  => null,
    ]);

    register_sidebar([
        'name' => __('Sidebar in Footer Left', 'sportisland'),
        'id' => 'si-footer-left-sidebar',
        'before_widget' => null,
        'after_widget'  => null,
    ]);

    register_sidebar([
        'name' => __('Sidebar in Footer Center', 'sportisland'),
        'id' => 'si-footer-center-sidebar',
        'before_widget' => null,
        'after_widget'  => null,
    ]);

    register_sidebar([
        'name' => __('Sidebar in Footer Right', 'sportisland'),
        'id' => 'si-footer-right-sidebar',
        'before_widget' => null,
        'after_widget'  => null,
    ]);

    register_sidebar([
        'name' => __('Map in Contact Page', 'sportisland'),
        'id' => 'si-contact-map-sidebar',
        'before_widget' => null,
        'after_widget'  => null,
    ]);

    register_sidebar([
        'name' => __('Info in Contact Page', 'sportisland'),
        'id' => 'si-contact-info-sidebar',
        'before_widget' => null,
        'after_widget'  => null,
    ]);
}
