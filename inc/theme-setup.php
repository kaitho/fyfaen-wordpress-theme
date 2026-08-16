<?php
/** Theme setup. */

defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', function () {
	load_theme_textdomain( 'fyfaen', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array( 'height' => 120, 'width' => 400, 'flex-height' => true, 'flex-width' => true ) );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'fyfaen' ),
		'footer'  => __( 'Footer Menu', 'fyfaen' ),
	) );
} );

/** Fallback for staging copies where the existing menu is not assigned to this theme location. */
function fyfaen_primary_menu_fallback() {
	$items = array();
	$items['Butikk'] = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' );
	$sizes = get_page_by_path( 'storrelser' );
	$terms = get_page_by_path( 'kjopsvilkar' );
	if ( $sizes ) {
		$items['Størrelser'] = get_permalink( $sizes );
	}
	if ( $terms ) {
		$items['Kjøpsvilkår'] = get_permalink( $terms );
	}
	if ( function_exists( 'wc_get_cart_url' ) ) {
		$items['Handlekurv'] = wc_get_cart_url();
	}

	echo '<ul class="menu">';
	foreach ( $items as $label => $url ) {
		echo '<li class="menu-item"><a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
	}
	echo '</ul>';
}

add_filter( 'body_class', function ( $classes ) {
	$classes[] = 'fyfaen-theme';

	if ( is_page() ) {
		$page = get_queried_object();
		if ( $page && ! empty( $page->post_name ) ) {
			$classes[] = 'fyfaen-page-' . sanitize_html_class( $page->post_name );
		}
	}

	return $classes;
} );
