<?php
/**
 * FYFAEN single-product template.
 *
 * Presentation only: WooCommerce continues to own product data, cart,
 * checkout, orders and payment processing.
 */
defined( 'ABSPATH' ) || exit;

get_header();
?>
<style>
/* FYFAEN single-product refinement */
.fyfaen-product-page__gallery .woocommerce-product-gallery__image img {
	max-height: 560px;
	width: 100%;
	object-fit: contain;
	margin-inline: auto;
}

.fyfaen-product-page__info .product_title {
	font-size: clamp(3.1rem, 4.25vw, 4.5rem);
	line-height: .9;
	max-width: 470px;
	text-wrap: balance;
}

.fyfaen-product-page__info .price {
	margin-top: 22px;
}

.fyfaen-product-page__info .variations_form .variations {
	border: 0;
	margin: 0 0 18px;
}

.fyfaen-product-page__info .variations_form .variations td,
.fyfaen-product-page__info .variations_form .variations th {
	border: 0;
	padding: 0 0 14px;
	vertical-align: middle;
}

.fyfaen-product-page__info .variations_form .variations th.label {
	padding-right: 16px;
	white-space: nowrap;
}

.fyfaen-product-page__info .variations_form .variations th label {
	font-size: .72rem;
	font-weight: 900;
	letter-spacing: .1em;
	text-transform: uppercase;
}

.fyfaen-product-page__info .variations_form .variations select {
	min-height: 46px;
	min-width: 205px;
	border: 1px solid #cfcfcf;
	border-radius: 0;
	background: #fff;
	padding: 0 38px 0 13px;
	font-weight: 750;
}

.fyfaen-product-page__info .reset_variations {
	font-size: .68rem;
	font-weight: 800;
	text-decoration: underline;
	margin-left: 8px;
}

.fyfaen-product-page__info .quantity input.qty {
	min-height: 48px;
	border-radius: 0;
	border: 1px solid #cfcfcf;
	font-weight: 800;
}

.fyfaen-product-page__info .single_add_to_cart_button {
	min-height: 48px;
	padding-inline: 24px;
	letter-spacing: .04em;
	text-transform: uppercase;
}

@media (max-width: 700px) {
	.fyfaen-product-page__gallery .woocommerce-product-gallery__image img {
		max-height: 520px;
	}

	.fyfaen-product-page__info .product_title {
		font-size: clamp(2.7rem, 12vw, 4rem);
	}

	.fyfaen-product-page__info .variations_form .variations select {
		min-width: 0;
		width: 100%;
	}
}
</style>
<?php

if ( have_posts() ) :
	while ( have_posts() ) : the_post();

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
