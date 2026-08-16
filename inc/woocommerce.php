<?php
/** WooCommerce presentation integration. No payment, order or checkout logic belongs here. */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

// Keep WooCommerce available for its own frontend components. The theme only changes presentation.
add_filter( 'woocommerce_enqueue_styles', '__return_true' );

// Use a consistent Norwegian placeholder for variation selectors without touching variation logic.
add_filter( 'woocommerce_dropdown_variation_attribute_options_args', function ( $args ) {
	$args['show_option_none'] = 'Velg Størrelse';
	return $args;
} );

// Final presentation fallback: replace WooCommerce's default placeholder text everywhere
// a variation dropdown is rendered, while leaving all option values and variation logic intact.
add_filter( 'woocommerce_dropdown_variation_attribute_options_html', function ( $html ) {
	$html = str_replace( 'Velg et alternativ', 'Velg Størrelse', $html );
	$html = str_replace( 'Velg et Alternativ', 'Velg Størrelse', $html );
	return $html;
} );
