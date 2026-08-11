<?php
/** WooCommerce presentation integration. No payment or order logic belongs here. */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

// Keep the theme compatible with WooCommerce templates while leaving commerce logic to WooCommerce.
add_filter( 'woocommerce_enqueue_styles', '__return_true' );
