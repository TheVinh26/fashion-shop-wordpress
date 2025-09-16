<?php
function fashion_shop_setup() {
    add_theme_support('woocommerce');
    add_theme_support('title-tag');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'fashion-shop')
    ));
}
add_action('after_setup_theme', 'fashion_shop_setup');

function fashion_shop_scripts() {
    wp_enqueue_style('fashion-style', get_stylesheet_uri());
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'fashion_shop_scripts');

function fashion_shop_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'fashion-shop')
    ));
}
add_action('after_setup_theme', 'fashion_shop_register_menus');

function fashion_shop_enqueue_styles() {
    wp_enqueue_style('fashion-shop-style', get_stylesheet_uri(), array(), time());
}
add_action('wp_enqueue_scripts', 'fashion_shop_enqueue_styles');

function fashionshop_add_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'fashionshop_add_woocommerce_support');

add_action('after_setup_theme', function() {
    add_theme_support('woocommerce');
});
