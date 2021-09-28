<?php

register_post_type('prices', [
    'labels' => [
        'name'               => esc_html__('Prices', 'sportisland'), //'Цены', // основное название для типа записи
        'singular_name'      => esc_html__('Price', 'sportisland'), //'Прайс', // название для одной записи этого типа
        'add_new'            => esc_html__('Add a new price', 'sportisland'), //'Добавить новый прайс', // для добавления новой записи
        'add_new_item'       => esc_html__('Adding a new price', 'sportisland'), //'Добавление нового прайса', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => esc_html__('Editing price', 'sportisland'), //'Редактирование прайса', // для редактирования типа записи
        'new_item'           => esc_html__('New price', 'sportisland'), //'Новый прайс', // текст новой записи
        'view_item'          => esc_html__('View price', 'sportisland'), //'Смотреть прайс', // для просмотра записи этого типа.
        'search_items'       => esc_html__('Search prices', 'sportisland'), //'Искать прайс', // для поиска по этим типам записи
        'not_found'          => esc_html__('No prices found', 'sportisland'), //'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => esc_html__('No prices found in trash', 'sportisland'), //'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => esc_html__('Prices', 'sportisland') //'Цены', // название меню
    ],
    'public'              => true,
    'menu_position'       => 20,
    'menu_icon'           => 'dashicons-media-spreadsheet',
    'hierarchical'        => false,
    'show_in_rest'        => true,
    'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => [],
    'has_archive'         => true,
]);
