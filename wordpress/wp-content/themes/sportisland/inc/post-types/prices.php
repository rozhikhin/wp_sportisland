<?php

register_post_type('prices', [
    'labels' => [
        'name'               => 'Цены', // основное название для типа записи
        'singular_name'      => 'Прайс', // название для одной записи этого типа
        'add_new'            => 'Добавить новый прайс', // для добавления новой записи
        'add_new_item'       => 'Добавление нового прайс', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => 'Редактирование прайса', // для редактирования типа записи
        'new_item'           => 'Новый прайс', // текст новой записи
        'view_item'          => 'Смотреть прайс', // для просмотра записи этого типа.
        'search_items'       => 'Искать прайс', // для поиска по этим типам записи
        'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => 'Цены', // название меню
    ],
    'public'              => true,
    'menu_position'       => 20,
    'menu_icon'           => 'dashicons-media-spreadsheet',
    'hierarchical'        => false,
    'supports'            => [ 'title' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => [],
    'has_archive'         => true,
]);
