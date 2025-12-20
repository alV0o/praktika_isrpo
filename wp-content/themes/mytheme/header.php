<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css?v=<?php echo time();?>">
    <?php wp_head()?>
</head>
<body>
    <header class="header_selection">
        <img class="header_logo" src="<?php echo get_template_directory_uri();?>/image/logo.png" alt="logo">
        <h1>MelodikA</h1>
        <div class="nav_menu">
            <?php get_search_form();?>
            <nav>
                <a href="<?php echo home_url(); ?>">Главная</a>
                <?php wp_nav_menu(array(//меню навигации
                    'theme_location' => 'header-menu',
                    'menu_class' => 'header_nav',
                )); ?>
            </nav>
        </div>
    </header>