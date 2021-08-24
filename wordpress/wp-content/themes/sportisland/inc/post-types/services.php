<?php

register_post_type('services', [
    'labels' => [
        'name'               =>  esc_html__('Services', 'sportisland'), //'Услуги', // основное название для типа записи
        'singular_name'      => 'Услуга', // название для одной записи этого типа
        'add_new'            => 'Добавить новую услугу', // для добавления новой записи
        'add_new_item'       => 'Добавление новой услуги', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => 'Редактирование услуги', // для редактирования типа записи
        'new_item'           => 'Новая услуга', // текст новой записи
        'view_item'          => 'Смотреть услугу', // для просмотра записи этого типа.
        'search_items'       => 'Искать услугу', // для поиска по этим типам записи
        'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
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
