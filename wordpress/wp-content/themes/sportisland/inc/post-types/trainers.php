<?php

register_post_type('trainers', [
    'labels' => [
        'name'               => 'Тренеры', // основное название для типа записи
        'singular_name'      => 'Тренер', // название для одной записи этого типа
        'add_new'            => 'Добавить нового тренера', // для добавления новой записи
        'add_new_item'       => 'Добавление нового тренера', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => 'Редактирование тренера', // для редактирования типа записи
        'new_item'           => 'Новый тренер', // текст новой записи
        'view_item'          => 'Смотреть тренера', // для просмотра записи этого типа.
        'search_items'       => 'Искать тренера', // для поиска по этим типам записи
        'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => 'Тренеры', // название меню
    ],
    'public'              => true,
    'menu_position'       => 20,
    'menu_icon'           => 'dashicons-groups',
    'hierarchical'        => false,
    'supports'            => [ 'title' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => [],
    'has_archive'         => true,
]);
