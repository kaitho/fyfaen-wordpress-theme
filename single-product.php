<?php
/**
 * FYFAEN single-product template.
 *
 * Presentation only: WooCommerce continues to own product data, cart,
 * checkout, orders and payment processing.
 */
defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

		do_action( 'woocommerce_before_single_product' );
	?>
	<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'fyfaen-product-page', get_the_ID() ); ?>>
		<div class="fyfaen-product-page__main">
			<div class="fyfaen-product-page__gallery">
				<?php do_action( 'woocommerce_before_single_product_summary' ); ?>
			</div>

			<aside class="fyfaen-product-page__info">
				<div class="fyfaen-product-page__eyebrow">FYFAEN CLOTHING</div>
				<?php do_action( 'woocommerce_single_product_summary' ); ?>

				<div class="fyfaen-product-perks" aria-label="Produktinformasjon">
					<div><strong>549,-</strong><span>Fri frakt over</span></div>
					<div><strong>FYFAEN</strong><span>Norsk brand</span></div>
					<div><strong>QUALITY</strong><span>Fokus på stoff og passform</span></div>
				</div>
			</aside>
		</div>

		<div class="fyfaen-product-page__details">
			<?php do_action( 'woocommerce_after_single_product_summary' ); ?>
		</div>
	</div>
	<?php

	do_action( 'woocommerce_after_single_product' );
	endwhile;
endif;

get_footer();
