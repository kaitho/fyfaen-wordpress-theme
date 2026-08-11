<?php
/** Front-end assets. */

defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function () {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'fyfaen-style', get_stylesheet_uri(), array(), $version );
    wp_enqueue_script( 'fyfaen-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), $version, true );
} );
