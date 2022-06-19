<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo('name'); echo " | "; bloginfo('description'); ?> </title>
    <meta name="title" content="Cafe">
    <meta name="description" content="Кафе Здравия Желаю! Богучар">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" href="css/style.min.css">
    <?php 
        wp_head();
    ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <div class="container">
            <div class="header__wrapper">
                <div class="header__logo"">
                    <?php the_custom_logo(); ?>
                </div>
    
                <nav>

                    <?php
                        wp_nav_menu( [
                            'menu'            => 'Main',
                            'container'       => false,
                            'menu_class'      => 'header__nav',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'items_wrap'      => '<ul class="header__nav">%3$s</ul>',
                            'depth'           => 0
                        ] );
                    ?>

                    <!-- <ul class="header__nav">
                        <li>
                            <a class="header__nav_item" href="">Главная</a>
                        </li>
                        <li>
                            <a class="header__nav_item" href="">Меню</a>
                        </li>
                        <li>
                            <a class="header__nav_item" href="">Корзина</a>
                        </li>
                    </ul> -->
                </nav>
            </div>
        </div>
    </header>