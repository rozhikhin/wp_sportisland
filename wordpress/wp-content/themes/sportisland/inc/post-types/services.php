<?php

register_post_type('services', [
    'labels' => [
        'name'               => esc_html__('Services', 'sportisland'), //'Услуги', // основное название для типа записи
        'singular_name'      => esc_html__('Service', 'sportisland'), //'Услуга', // название для одной записи этого типа
        'add_new'            => esc_html__('Add a new service', 'sportisland'), //'Добавить новую услугу', // для добавления новой записи
        'add_new_item'       => esc_html__('Adding a new service', 'sportisland'), //'Добавление новой услуги', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => esc_html__('Editing service', 'sportisland'), //'Редактирование услуги', // для редактирования типа записи
        'new_item'           => esc_html__('New service', 'sportisland'), //'Новая услуга', // текст новой записи
        'view_item'          => esc_html__('View service', 'sportisland'), //'Смотреть услугу', // для просмотра записи этого типа.
        'search_items'       => esc_html__('Search services', 'sportisland'), //'Искать услугу', // для поиска по этим типам записи
        'not_found'          => esc_html__('No services found', 'sportisland'), // 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => esc_html__('No services found in trash', 'sportisland'), //'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => esc_html__('Services', 'sportisland'), //'Услуги', название меню
    ],
    'public'              => true,
    'menu_position'       => 20,
    'menu_icon'           => 'dashicons-index-card',
    'hierarchical'        => false,
    'supports'            => [ 'title' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => [],
    'has_archive'         => true,
]);
