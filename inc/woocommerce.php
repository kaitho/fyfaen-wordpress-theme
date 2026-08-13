<?php
/** WooCommerce presentation integration. No payment, order or checkout logic belongs here. */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

// Keep WooCommerce available for its own frontend components. The theme only changes presentation.
add_filter( 'woocommerce_enqueue_styles', '__return_true' );
