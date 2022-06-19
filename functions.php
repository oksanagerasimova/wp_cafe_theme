<?php
    add_action('wp_enqueue_scripts', 'cafe_scripts');

    function cafe_scripts() {
        wp_enqueue_style( 'cafe-style', get_stylesheet_uri() );
        wp_enqueue_script( 'cafe-scripts', get_template_directory_uri() .'/assets/js/script.js', array('jquery'), null, true);
    };

    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );

    add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
    function filter_nav_menu_link_attributes($atts, $item, $args) {
        if ($args->menu === 'Main') {
            $atts['class'] = 'header__nav_item';

            if ($item->current) {
                $atts['class'] .= ' header__nav_item-active';
            }
        };

        return $atts;
    }

    add_action( 'after_setup_theme', 'woocommerce_support' );
    function woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    }
    
?>