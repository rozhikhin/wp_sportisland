<?php

register_post_type('orders', [
    'labels' => [
        'name'               => esc_html__('Orders', 'sportisland'), //'Заявки, // основное название для типа записи
        'singular_name'      => esc_html__('Order', 'sportisland'), //'Заявка', // название для одной записи этого типа
        'add_new'            => esc_html__('Add a new order', 'sportisland'), //'Добавить новую заявку', // для добавления новой записи
        'add_new_item'       => esc_html__('Adding a new order', 'sportisland'), //'Добавление новой заявки', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => esc_html__('Editing order', 'sportisland'), //'Редактирование завки', // для редактирования типа записи
        'new_item'           => esc_html__('New order', 'sportisland'), //'Новая заявка', // текст новой записи
        'view_item'          => esc_html__('View order', 'sportisland'), //'Смотреть заявку', // для просмотра записи этого типа.
        'search_items'       => esc_html__('Search orders', 'sportisland'), //'Искать заявку', // для поиска по этим типам записи
        'not_found'          => esc_html__('No orders found', 'sportisland'), //'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => esc_html__('No orders found in trash', 'sportisland'), //'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => esc_html__('Orders', 'sportisland'), //'Заявки', // название меню
    ],
    'public'              => false,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 20,
    'menu_icon'           => 'dashicons-email',
    'hierarchical'        => false,
    'supports'            => [ 'title' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => [],
    'has_archive'         => false,
]);
