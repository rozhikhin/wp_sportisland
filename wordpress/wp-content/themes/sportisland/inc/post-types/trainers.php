<?php

register_post_type('trainers', [
    'labels' => [
        'name'               => esc_html__('Trainers', 'sportisland'),  //'Тренеры', // основное название для типа записи
        'singular_name'      => esc_html__('Trainer', 'sportisland'), //'Тренер', // название для одной записи этого типа
        'add_new'            => esc_html__('Add a new trainer', 'sportisland'), //'Добавить нового тренера', // для добавления новой записи
        'add_new_item'       => esc_html__('Adding a new trainer', 'sportisland'),//'Добавление нового тренера', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => esc_html__('Editing trainer', 'sportisland'), //'Редактирование тренера', // для редактирования типа записи
        'new_item'           => esc_html__('New trainer', 'sportisland'), //'Новый тренер', // текст новой записи
        'view_item'          => esc_html__('View trainer', 'sportisland'), //'Просмотр тренера', // для просмотра записи этого типа.
        'search_items'       => esc_html__('Search trainers', 'sportisland'), //'Искать тренера', // для поиска по этим типам записи
        'not_found'          => esc_html__('No trainers found', 'sportisland'), //'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => esc_html__('No trainers found in trash', 'sportisland'), //'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => esc_html__('Trainers', 'sportisland') //'Тренеры', // название меню
    ],
    'public'              => true,
    'menu_position'       => 20,
    'menu_icon'           => 'dashicons-groups',
    'hierarchical'        => false,
    'supports'            => [ 'title' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => [],
    'has_archive'         => true,
]);
