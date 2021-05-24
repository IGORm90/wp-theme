<?php

add_action( 'init', function(){
    register_post_type('docs', [
            'labels'             => [
            'name'               => 'Документы', // Основное название типа записи
            'singular_name'      => 'Документ', // отдельное название записи типа Book
            'add_new'            => 'Добавить Документ',
            'add_new_item'       => 'Добавить новый Документ',
            'edit_item'          => 'Редактировать Документ',
            'new_item'           => 'Новый Документ',
            'view_item'          => 'Посмотреть Документ',
            'search_items'       => 'Найти Документ',
            'not_found'          => 'Документ найдены',
            'not_found_in_trash' => 'В корзине Документы не найдены',
            'parent_item_colon'  => '',
            'menu_name'          => 'Документ'
        ],
        'public'        => true,
        'show_ui'       => true,
        'has_archive'   => true,
        'rewrite'   => [
            'with_front' => false,
        ],
        'supports' => ['title', 'thumbnail'],
    ]);
});
