<?php
/** Front-end assets. */

defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function () {
    $version = wp_get_theme()->get( 'Version' );
    $polish_file = get_template_directory() . '/assets/css/polish.css';
    $polish_version = file_exists( $polish_file ) ? (string) filemtime( $polish_file ) : $version;
    $header_file = get_template_directory() . '/assets/css/header.css';
    $header_version = file_exists( $header_file ) ? (string) filemtime( $header_file ) : $version;
    $footer_file = get_template_directory() . '/assets/css/footer.css';
    $footer_version = file_exists( $footer_file ) ? (string) filemtime( $footer_file ) : $version;

    wp_enqueue_style( 'fyfaen-style', get_stylesheet_uri(), array(), $version );
    wp_enqueue_style( 'fyfaen-polish', get_template_directory_uri() . '/assets/css/polish.css', array( 'fyfaen-style' ), $polish_version );
    wp_enqueue_style( 'fyfaen-header', get_template_directory_uri() . '/assets/css/header.css', array( 'fyfaen-polish' ), $header_version );
    wp_enqueue_style( 'fyfaen-footer', get_template_directory_uri() . '/assets/css/footer.css', array( 'fyfaen-header' ), $footer_version );
    wp_enqueue_script( 'fyfaen-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), $version, true );

    if ( function_exists( 'is_product' ) && is_product() ) {
        wp_enqueue_style( 'fyfaen-product', get_template_directory_uri() . '/assets/css/product.css', array( 'fyfaen-style', 'fyfaen-polish', 'fyfaen-header', 'fyfaen-footer' ), $version );
    }
    if ( function_exists( 'is_shop' ) && ( is_shop() || is_product_category() || is_product_tag() ) ) {
        wp_enqueue_style( 'fyfaen-shop', get_template_directory_uri() . '/assets/css/shop.css', array( 'fyfaen-style', 'fyfaen-polish', 'fyfaen-header', 'fyfaen-footer' ), $version );
    }
    if ( function_exists( 'is_cart' ) && is_cart() ) {
        wp_enqueue_style( 'fyfaen-cart', get_template_directory_uri() . '/assets/css/cart.css', array( 'fyfaen-style', 'fyfaen-polish', 'fyfaen-header', 'fyfaen-footer' ), $version );
    }
    if ( function_exists( 'is_checkout' ) && is_checkout() && ! is_order_received_page() ) {
        wp_enqueue_style( 'fyfaen-checkout', get_template_directory_uri() . '/assets/css/checkout.css', array( 'fyfaen-style', 'fyfaen-polish', 'fyfaen-header', 'fyfaen-footer' ), $version );
    }
} );

/**
 * Back In Stock Notifier loads its own Bootstrap styles, so load our product
 * overrides late enough to win the cascade without modifying the plugin.
 */
add_action( 'wp_enqueue_scripts', function () {
    if ( function_exists( 'is_product' ) && is_product() ) {
        $file = get_template_directory() . '/assets/css/notifier.css';
        $version = file_exists( $file ) ? (string) filemtime( $file ) : wp_get_theme()->get( 'Version' );
        wp_enqueue_style(
            'fyfaen-notifier',
            get_template_directory_uri() . '/assets/css/notifier.css',
            array( 'fyfaen-product' ),
            $version
        );
    }
}, 1000 );
