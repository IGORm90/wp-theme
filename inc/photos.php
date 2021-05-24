<?php

add_action( 'init', function(){
    register_post_type('photos', [
            'labels'             => [
            'name'               => 'Фото', // Основное название типа записи
            'singular_name'      => 'Фото', // отдельное название записи типа Book
            'add_new'            => 'Добавить Фото',
            'add_new_item'       => 'Добавить новое Фото',
            'edit_item'          => 'Редактировать Фото',
            'new_item'           => 'Новое Фото',
            'view_item'          => 'Посмотреть Фото',
            'search_items'       => 'Найти Фото',
            'not_found'          => 'Фото найдено',
            'not_found_in_trash' => 'В корзине Фото не найдены',
            'parent_item_colon'  => '',
            'menu_name'          => 'Фото'
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
