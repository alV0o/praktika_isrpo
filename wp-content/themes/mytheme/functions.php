<?php
    //функция подключения css и js
    function theme_files(){
        //регистрируем css файл reset'a
        wp_register_style(
            'theme_reset',
            get_template_directory_uri() . '/css/reset.css', 
            array(), 
            filemtime(get_template_directory() . '/css/reset.css'));
        
        //регистрируем css файл основной
        wp_register_style(
            'theme_main',
            get_template_directory_uri() . '/css/main.css', 
            array(), 
            filemtime(get_template_directory() . '/css/main.css'));
        
        //подключаем файлы
        wp_enqueue_style('theme_reset');
        wp_enqueue_style('theme_main');

        //регистрируем скрипт
        wp_register_script(
            'theme_script',
            get_template_directory_uri() . '/js/main.js', 
            array(), 
            filemtime(get_template_directory() . '/js/main.js')
        );

        //подключаем скрипт
        wp_enqueue_script('theme_script');
    };

    //привязываем действие к функции
    add_action('wp_enqueue_scripts','theme_files',1);

    //функция ограничения размера текста
    function custom_excerpt_length($length){
        return 20;
    };

    //привязываем обработчик к фильтру
    add_filter('excerpt_length', 'custom_excerpt_length', 999);
?>