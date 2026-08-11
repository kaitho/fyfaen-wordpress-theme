<?php
/** FYFAEN editorial front page. WooCommerce remains the commerce engine. */
defined( 'ABSPATH' ) || exit;
get_header();

$featured = function_exists( 'wc_get_products' ) ? wc_get_products( array(
	'limit'    => 4,
	'featured' => true,
	'status'   => 'publish',
	'orderby'  => 'date',
	'order'    => 'DESC',
) ) : array();

if ( empty( $featured ) && function_exists( 'wc_get_products' ) ) {
	$featured = wc_get_products( array( 'limit' => 4, 'status' => 'publish', 'orderby' => 'date', 'order' => 'DESC' ) );
}
?>

<section class="fyfaen-hero">
	<div class="container fyfaen-hero__inner">
		<div class="fyfaen-hero__copy">
			<p class="fyfaen-kicker">FYFAEN CLOTHING / NORWAY</p>
			<h1>Klær som<br><em>skiller seg ut.</em></h1>
			<p class="fyfaen-hero__lead">Tunge kvaliteter. Relaxed fits. Norsk attitude.</p>
			<div class="fyfaen-hero__actions">
				<a class="fyfaen-button fyfaen-button--light" href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">Shop kolleksjonen <span>↗</span></a>
				<a class="fyfaen-text-link fyfaen-text-link--light" href="#featured">Se favorittene</a>
			</div>
		</div>
		<div class="fyfaen-hero__mark" aria-hidden="true">FY<br>FAEN</div>
	</div>
</section>

<section class="fyfaen-marquee" aria-label="FYFAEN highlights">
	<div class="fyfaen-marquee__track">
		<span>HEAVYWEIGHT QUALITY</span><b>✦</b><span>RELATABLE BY DESIGN</span><b>✦</b><span>MADE FOR EVERYDAY</span><b>✦</b><span>FAST NORWEGIAN SHIPPING</span><b>✦</b>
		<span>HEAVYWEIGHT QUALITY</span><b>✦</b><span>RELATABLE BY DESIGN</span><b>✦</b><span>MADE FOR EVERYDAY</span><b>✦</b><span>FAST NORWEGIAN SHIPPING</span><b>✦</b>
	</div>
</section>

<section id="featured" class="fyfaen-section fyfaen-featured">
	<div class="container">
		<div class="fyfaen-section-heading">
			<div><p class="fyfaen-kicker">UTVALGT</p><h2>Dette er <em>FYFAEN.</em></h2></div>
			<a class="fyfaen-text-link" href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">Se alt <span>↗</span></a>
		</div>
		<?php if ( $featured ) : ?>
			<div class="fyfaen-product-grid fyfaen-product-grid--featured">
				<?php foreach ( $featured as $product ) : ?>
					<a class="fyfaen-home-product" href="<?php echo esc_url( $product->get_permalink() ); ?>">
						<div class="fyfaen-home-product__media">
							<?php echo $product->get_image( 'woocommerce_thumbnail' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<?php if ( $product->is_on_sale() ) : ?><span>Sale</span><?php endif; ?>
						</div>
						<div class="fyfaen-home-product__info"><h3><?php echo esc_html( $product->get_name() ); ?></h3><strong><?php echo wp_kses_post( $product->get_price_html() ); ?></strong></div>
					</a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<section class="fyfaen-statement">
	<div class="container fyfaen-statement__inner">
		<div><p class="fyfaen-kicker">FYFAEN CLOTHING</p><h2>Fete klær.<br><em>Fete folk.</em></h2></div>
		<div class="fyfaen-statement__copy"><p>Vi lager plagg med fokus på passform, stoffkvalitet og en logo du kjenner igjen. Enkle nok til hverdagen. Distinkte nok til at folk legger merke til dem.</p><a class="fyfaen-button" href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">Finn din favoritt <span>↗</span></a></div>
	</div>
</section>

<section class="fyfaen-values">
	<div class="container fyfaen-values__grid">
		<div><span>01</span><h3>Kvalitet først.</h3><p>Fokus på materialer, passform og plagg du faktisk vil bruke.</p></div>
		<div><span>02</span><h3>Relaterbart.</h3><p>Et uttrykk med personlighet, uten unødvendig støy.</p></div>
		<div><span>03</span><h3>Norsk brand.</h3><p>Utviklet i Norge med en tydelig norsk identitet.</p></div>
		<div><span>04</span><h3>Rask levering.</h3><p>Fri frakt når du handler for over 549,-.</p></div>
	</div>
</section>

<?php get_footer(); ?>
