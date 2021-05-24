<?php

    define('WPTEST_PATH_CSS', get_template_directory_uri() . '/assets/css/');
    define('WPTEST_PATH_JS', get_template_directory_uri() . '/assets/js/');


    include_once('inc/menu.php');
    include_once('inc/widgets.php');
    include_once('inc/docs.php');
    include_once('inc/photos.php');


    add_action('wp_enqueue_scripts', function(){
		wp_enqueue_style('bootstrap', WPTEST_PATH_CSS . 'bootstrap.min.css');
		wp_enqueue_style('main', WPTEST_PATH_CSS . 'main.css');

		wp_deregister_script('jquery');
		wp_register_script('jquery', WPTEST_PATH_JS . 'jquery-3.4.1.min.js', [], false, true);

		wp_enqueue_script('jquery');
		wp_enqueue_script('boostrap', WPTEST_PATH_JS . 'bootstrap.bundle.min.js', [], false, true);
        wp_enqueue_script('main', WPTEST_PATH_JS . 'main.js', [], false, true);

        wp_enqueue_script('main', WPTEST_PATH_JS . 'main.js');
    });
    

    add_action('after_setup_theme', function(){
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        register_nav_menu('header', 'Меню в шапке');
        register_nav_menu('sidebar', 'Меню в боковой колонке');
    });


    //отключает добавочную строку в title
    add_filter( 'document_title_parts', function($title){
        $title['site'] = '';
        return $title;
    });