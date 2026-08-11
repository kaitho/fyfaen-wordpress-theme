<?php
/** Front-end assets. */

defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function () {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'fyfaen-style', get_stylesheet_uri(), array(), $version );
    wp_enqueue_style( 'fyfaen-polish', get_template_directory_uri() . '/assets/css/polish.css', array( 'fyfaen-style' ), $version );
    wp_enqueue_script( 'fyfaen-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), $version, true );

    if ( function_exists( 'is_product' ) && is_product() ) {
        wp_enqueue_style( 'fyfaen-product', get_template_directory_uri() . '/assets/css/product.css', array( 'fyfaen-style', 'fyfaen-polish' ), $version );
    }
    if ( function_exists( 'is_shop' ) && ( is_shop() || is_product_category() || is_product_tag() ) ) {
        wp_enqueue_style( 'fyfaen-shop', get_template_directory_uri() . '/assets/css/shop.css', array( 'fyfaen-style', 'fyfaen-polish' ), $version );
    }
    if ( function_exists( 'is_cart' ) && is_cart() ) {
        wp_enqueue_style( 'fyfaen-cart', get_template_directory_uri() . '/assets/css/cart.css', array( 'fyfaen-style', 'fyfaen-polish' ), $version );
    }
    if ( function_exists( 'is_checkout' ) && is_checkout() && ! is_order_received_page() ) {
        wp_enqueue_style( 'fyfaen-checkout', get_template_directory_uri() . '/assets/css/checkout.css', array( 'fyfaen-style', 'fyfaen-polish' ), $version );
    }
} );
