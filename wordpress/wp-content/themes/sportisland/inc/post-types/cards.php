<?php

register_post_type('cards', [
    'labels' => [
        'name'               => 'Карты', // основное название для типа записи
        'singular_name'      => 'Карта', // название для одной записи этого типа
        'add_new'            => 'Добавить новую карту', // для добавления новой записи
        'add_new_item'       => 'Добавление новой карты', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => 'Редактирование карты', // для редактирования типа записи
        'new_item'           => 'Новая карта', // текст новой записи
        'view_item'          => 'Смотреть карту', // для просмотра записи этого типа.
        'search_items'       => 'Искать карту', // для поиска по этим типам записи
        'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => 'Клубные карты', // название меню
    ],
    'public'              => true,
    'menu_position'       => 20,
    'menu_icon'           => 'dashicons-money',
    'hierarchical'        => false,
    'supports'            => [ 'title' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => [],
    'has_archive'         => false,
]);
