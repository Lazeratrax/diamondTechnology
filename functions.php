<?php

//1 - хук. 2 - название функции, 3 - приоритет, 4 - особенности
add_action('wp_enqueue_scripts', 'style_theme');
//подключение скриптов в футере
add_action('wp_footer', 'scripts_theme');
//регистрация меню
add_action('after_setup_theme', 'theme_register_nav_menu');
//виджеты - для рботы галерей и поисковика
add_action('widgets_init', 'register_my_widgets');


//удаление верхнего дефолтного маржина
function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'remove_admin_login_header');
// конец удаление верхнего дефолтного маржина

// widgets
function register_my_widgets()
{
//    поисковая форма в хэдере
    register_sidebar(array(
        'name' => 'searchForm',
        'id' => "left_sidebar",
        'description' => 'Описание поисковика',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => "</div>\n",
        'before_title' => '<h5 class="widgettitle">',
        'after_title' => "</h5>\n"
    ));

    //форма основная
    register_sidebar(array(
        'name' => 'mainForm',
        'id' => "main_form",
        'description' => 'Описание главной формы',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => "</div>\n",
        'before_title' => '<h5 class="widgettitle">',
        'after_title' => "</h5>\n"
    ));

    //   календарь в футере
    register_sidebar(array(
        'name' => 'calendarFooter',
        'id' => "calendar_footer",
        'description' => 'Описание календаря в футере',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => "</div>\n",
        'before_title' => '<h5 class="widgettitle">',
        'after_title' => "</h5>\n"
    ));

//облако меток в футере
    register_sidebar(array(
        'name' => 'theTagCloud',
        'id' => "the_tag_cloud",
        'description' => 'Облако меток в футере',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => "</div>\n"
    ));
}

//эта функция подключает главное меню
function theme_register_nav_menu()
{
    register_nav_menu('top', 'Меню в шапке');

    //миниатюры для постов
    add_theme_support('post-thumbnails', array('post'));
    //Позволяет указывать формат посту
    add_theme_support('post-formats', array('aside', 'gallery', 'video'));

    //миниатюры галерей
    add_image_size('mytheme-gallery-large', 278, 290, true);
    //миниатюры галерей мини
    add_image_size('mytheme-gallery__mini', 140, 146, true);
    add_image_size('mytheme-gallery-mini__objects', 300, 224, true);
    add_image_size('mytheme-gallery-mini__object-gallery', 276, 224, true);
    add_image_size('mytheme-gallery-mini__completed-objects', 300, 137, true);
    add_image_size('mytheme-gallery-mini__completed-objects', 300, 137, true);
    add_image_size('mytheme-gallery-mini__completed-objects', 300, 137, true);
}

//эта функция подключает стили
function style_theme()
{
    //обязательное подключение главного CSS
    wp_enqueue_style('style', get_stylesheet_uri());
    //мои стили
    wp_enqueue_style('diamond_styles__reset', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('diamond_styles__fonts', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style('diamond_styles__header', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('diamond_style__blocks', get_template_directory_uri() . '/assets/css/blocks.css');
    wp_enqueue_style('diamond_styles__footer', get_template_directory_uri() . '/assets/css/footer.css');
    wp_enqueue_style('diamond_styles__media', get_template_directory_uri() . '/assets/css/media.css');
}

//подключение скриптов
function scripts_theme()
{

    wp_deregister_script('jquery');
    //    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, null, true );
    wp_register_script('jquery', '//code.jquery.com/jquery-2.2.0.min.js', false, null, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.js');
    wp_enqueue_script('gallery', get_template_directory_uri() . '/assets/js/gallery.js');
}