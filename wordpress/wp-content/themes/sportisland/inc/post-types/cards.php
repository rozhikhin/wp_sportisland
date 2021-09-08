<?php

register_post_type('cards', [
    'labels' => [
        'name'               => esc_html__('Cards', 'sportisland'), //'Клубные карты', // основное название для типа записи
        'singular_name'      => esc_html__('Card', 'sportisland'), //'Карта', // название для одной записи этого типа
        'add_new'            => esc_html__('Add a new card', 'sportisland'), //'Добавить новую карту', // для добавления новой записи
        'add_new_item'       => esc_html__('Adding a new card', 'sportisland'), //'Добавление новой карты', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => esc_html__('Editing card', 'sportisland'), //'Редактирование карты', // для редактирования типа записи
        'new_item'           => esc_html__('New card', 'sportisland'), //'Новая карта', // текст новой записи
        'view_item'          => esc_html__('View card', 'sportisland'), //'Смотреть карту', // для просмотра записи этого типа.
        'search_items'       => esc_html__('Search cards', 'sportisland'), //'Искать карту', // для поиска по этим типам записи
        'not_found'          => esc_html__('No cards found', 'sportisland'), //'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => esc_html__('No cards found in trash', 'sportisland'), //'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => esc_html__('Cards', 'sportisland'), //'Клубные карты', // название меню
    ],
    'description'         => esc_html__('Cards', 'sportisland'),
    'public'              => true,
    'menu_position'       => 20,
    'menu_icon'           => 'dashicons-money',
    'hierarchical'        => false,
    'supports'            => [ 'title' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => [],
    'has_archive'         => false,
]);
