<?php
/** WooCommerce presentation integration. No payment, order or checkout logic belongs here. */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

// Keep WooCommerce available for its own frontend components. The theme only changes presentation.
add_filter( 'woocommerce_enqueue_styles', '__return_true' );

// Use a clearer Norwegian placeholder for variation selectors without touching variation logic.
add_filter( 'woocommerce_dropdown_variation_attribute_options_args', function ( $args ) {
	$args['show_option_none'] = 'Velg Størrelse';
	return $args;
} );
