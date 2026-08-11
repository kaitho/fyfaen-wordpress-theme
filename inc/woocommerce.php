<?php
/** WooCommerce presentation integration. No payment, order or checkout logic belongs here. */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

// Keep WooCommerce available for its own frontend components. The theme only changes presentation.
add_filter( 'woocommerce_enqueue_styles', '__return_true' );

// Add a lightweight editorial intro above the product grid. Product data and commerce logic remain untouched.
add_action( 'woocommerce_before_shop_loop', function () {
	if ( ! is_shop() && ! is_product_category() ) {
		return;
	}
	?>
	<section class="fyfaen-shop-intro" aria-labelledby="fyfaen-shop-title">
		<div>
			<span class="fyfaen-kicker">FYFAEN CLOTHING</span>
			<h1 id="fyfaen-shop-title">Kle deg som du mener det.</h1>
		</div>
		<p>Oversized tees, hoodies, sokker og mer. Norsk brand med fokus på kvalitet, passform og særpreg.</p>
	</section>
	<?php
}, 8 );
