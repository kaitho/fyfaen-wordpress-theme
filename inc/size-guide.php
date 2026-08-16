<?php
/**
 * FYFAEN size guide integration.
 */
defined( 'ABSPATH' ) || exit;

function fyfaen_show_size_guide() {
	if ( ! function_exists( 'is_product' ) || ! is_product() ) {
		return;
	}

	if ( has_term( 'sokker', 'product_cat' ) ) {
		return;
	}

	get_template_part( 'template-parts/size-guide' );
}
add_action( 'woocommerce_after_add_to_cart_form', 'fyfaen_show_size_guide', 20 );
