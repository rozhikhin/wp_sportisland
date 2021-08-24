<?php

register_taxonomy( 'shedule-days', [ 'shedule' ], [
    'labels'                => [
        'name'              => esc_html__('Week days', 'sportisland'), //'Дни недели',
        'singular_name'     => esc_html__('Day of the week', 'sportisland'), //'День недели',
        'search_items'      => esc_html__('Search days of the week', 'sportisland'), //'Найти день недели',
        'all_items'         => esc_html__('All days of the week', 'sportisland'), //'Все дни недели',
        'view_item '        => esc_html__('View a day of the week', 'sportisland'), //'Просмотр дня недели',
        'edit_item'         => esc_html__('Edit a day of the week', 'sportisland'), //'Редактировать день недели',
        'update_item'       => esc_html__('Update a day of the week', 'sportisland'), //'Обновить день недели',
        'add_new_item'      => esc_html__('Add a day of the week', 'sportisland'), //'Добавить день недели',
        'new_item_name'     => esc_html__('New day of the week', 'sportisland'), //'Новый день недели',
        'menu_name'         => esc_html__('Week days', 'sportisland'), //'Дни недели',
    ],
    'description'           => '', // описание таксономии
    'public'                => true,
    'hierarchical'          => true,
] );

register_taxonomy( 'places', [ 'shedule' ], [
    'labels'                => [
        'name'              => esc_html__('Gyms', 'sportisland'), //'Залы',
        'singular_name'     => esc_html__('Gym', 'sportisland'), //'Зал',
        'search_items'      => esc_html__('Search gyms', 'sportisland'), //'Найти зал',
        'all_items'         => esc_html__('All gyms', 'sportisland'), //'Все залы',
        'view_item '        => esc_html__('View a gym', 'sportisland'), //'Просмотр зала',
        'edit_item'         => esc_html__('Edit a gym', 'sportisland'), //'Редактировать зал',
        'update_item'       => esc_html__('Update a gym', 'sportisland'), //'Обновить зал',
        'add_new_item'      => esc_html__('Add a gym', 'sportisland'),  //'Добавить  зал',
        'new_item_name'     => esc_html__('New gym', 'sportisland'), //'Новый зал',
        'menu_name'         => esc_html__('Gyms', 'sportisland'), //'Залы',
    ],
    'description'           => '', // описание таксономии
    'public'                => true,
    'hierarchical'          => true,
] );

register_post_type('shedule', [
    'labels' => [
        'name'               => esc_html__('Shedule', 'sportisland'), //'Расписание', // основное название для типа записи
        'singular_name'      => esc_html__('Training', 'sportisland'), //'Занятие', // название для одной записи этого типа
        'add_new'            => esc_html__('Add a new training', 'sportisland'), //'Добавить новое занятие', // для добавления новой записи
        'add_new_item'       => esc_html__('Adding a new training', 'sportisland'), //'Добавление нового занятия', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => esc_html__('Editing a training', 'sportisland'), //'Редактирование занятия', // для редактирования типа записи
        'new_item'           => esc_html__('New training', 'sportisland'), //'Новое заняттие', // текст новой записи
        'view_item'          => esc_html__('View training', 'sportisland'), //'Смотреть занятие', // для просмотра записи этого типа.
        'search_items'       => esc_html__('Search trainings', 'sportisland'), //'Искать занятие', // для поиска по этим типам записи
        'not_found'          =>  esc_html__('No trainings found', 'sportisland'), //'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => esc_html__('No trainings found in trash', 'sportisland'), //'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => esc_html__('Shedule', 'sportisland'), //'Расписание', // название меню
    ],
    'public'              => true,
    'menu_position'       => 20,
    'menu_icon'           => 'dashicons-image-filter',
    'hierarchical'        => false,
    'supports'            => [ 'title' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => [],
    'has_archive'         => true,
]);
