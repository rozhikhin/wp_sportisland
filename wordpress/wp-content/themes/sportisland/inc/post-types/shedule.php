<?php

register_taxonomy( 'shedule-days', [ 'shedule' ], [
    'labels'                => [
        'name'              => 'Дни недели',
        'singular_name'     => 'День недели',
        'search_items'      => 'Найти день недели',
        'all_items'         => 'Все дни недели',
        'view_item '        => 'Просмотр дня недели',
        'edit_item'         => 'Редактировать день недели',
        'update_item'       => 'Обновить день недели',
        'add_new_item'      => 'Добавить день недели',
        'new_item_name'     => 'Новый день недели',
        'menu_name'         => 'Дни недели',
    ],
    'description'           => '', // описание таксономии
    'public'                => true,
    'hierarchical'          => true,
] );

register_taxonomy( 'places', [ 'shedule' ], [
    'labels'                => [
        'name'              => 'Залы',
        'singular_name'     => 'Зал',
        'search_items'      => 'Найти зал',
        'all_items'         => 'Все залы',
        'view_item '        => 'Просмотр зала',
        'edit_item'         => 'Редактировать зал',
        'update_item'       => 'Обновить зал',
        'add_new_item'      => 'Добавить  зал',
        'new_item_name'     => 'Новый зал',
        'menu_name'         => 'Залы',
    ],
    'description'           => '', // описание таксономии
    'public'                => true,
    'hierarchical'          => true,
] );

register_post_type('shedule', [
    'labels' => [
        'name'               => 'Расписание', // основное название для типа записи
        'singular_name'      => 'Занятие', // название для одной записи этого типа
        'add_new'            => 'Добавить новое занятие', // для добавления новой записи
        'add_new_item'       => 'Добавление нового занятия', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => 'Редактирование занятия', // для редактирования типа записи
        'new_item'           => 'Новое заняттие', // текст новой записи
        'view_item'          => 'Смотреть занятие', // для просмотра записи этого типа.
        'search_items'       => 'Искать занятие', // для поиска по этим типам записи
        'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => 'Расписание', // название меню
    ],
    'public'              => true,
    'menu_position'       => 20,
    'menu_icon'           => 'dashicons-image-filter',
    'hierarchical'        => false,
    'supports'            => [ 'title' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => [],
    'has_archive'         => true,
]);
