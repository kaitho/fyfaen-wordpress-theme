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

<section class="fyfaen-irl" aria-label="FYFAEN IRL">
	<div class="container">
		<div class="fyfaen-section-heading">
			<div><p class="fyfaen-kicker">FYFAEN IRL</p><h2>Fete klær.<br><em>Fete folk.</em></h2></div>
			<p class="fyfaen-irl__intro">Sett på ekte folk, ute i verden. FYFAEN er laget for å brukes.</p>
		</div>

		<div class="fyfaen-irl__grid">
			<figure class="fyfaen-irl__item fyfaen-irl__item--wide"><img src="https://fyfaen.store/wp-content/uploads/2024/12/1B041E90-60F5-479B-98D3-94DEACE73308.jpg" alt="FYFAEN i bruk ute blant folk" loading="lazy"></figure>
			<figure class="fyfaen-irl__item"><img src="https://fyfaen.store/wp-content/uploads/2024/12/239479DD-DC09-482C-A22D-226D89FD0C15.jpg" alt="FYFAEN oversized T-shirt i hverdagen" loading="lazy"></figure>
			<figure class="fyfaen-irl__item"><img src="https://fyfaen.store/wp-content/uploads/2024/12/5501DBDF-5A77-47C3-A937-C4E6D506A519.jpg" alt="FYFAEN T-shirt i bruk" loading="lazy"></figure>
			<figure class="fyfaen-irl__item fyfaen-irl__item--tall"><img src="https://fyfaen.store/wp-content/uploads/2024/12/72DFE85E-B426-4A81-B7A5-41A2F7548135.jpg" alt="FYFAEN i gatemiljø" loading="lazy"></figure>
			<figure class="fyfaen-irl__item fyfaen-irl__item--tall"><img src="https://fyfaen.store/wp-content/uploads/2025/07/Skjermbilde-2025-07-08-235706.png" alt="FYFAEN backstage" loading="lazy"></figure>
			<figure class="fyfaen-irl__item"><img src="https://fyfaen.store/wp-content/uploads/2024/12/IMG_3296.jpg" alt="FYFAEN hvit T-shirt" loading="lazy"></figure>
			<figure class="fyfaen-irl__item"><img src="https://fyfaen.store/wp-content/uploads/2024/12/IMG_1419-scaled.jpg" alt="FYFAEN svart T-shirt" loading="lazy"></figure>
		</div>
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

<style>
.fyfaen-irl{padding:100px 0;border-top:1px solid var(--fy-line);border-bottom:1px solid var(--fy-line);overflow:hidden}.fyfaen-irl__intro{max-width:340px;margin:0;color:var(--fy-muted);font-weight:650}.fyfaen-irl__grid{display:grid;grid-template-columns:1.45fr .8fr .8fr;grid-auto-rows:300px;gap:12px}.fyfaen-irl__item{margin:0;overflow:hidden;background:var(--fy-soft);min-width:0}.fyfaen-irl__item img{width:100%;height:100%;object-fit:cover;transition:transform .6s cubic-bezier(.2,.7,.2,1)}.fyfaen-irl__item:hover img{transform:scale(1.025)}.fyfaen-irl__item--wide{grid-row:span 2}.fyfaen-irl__item--tall{grid-row:span 2}@media(max-width:900px){.fyfaen-irl__grid{grid-template-columns:1fr 1fr;grid-auto-rows:260px}.fyfaen-irl__item--wide{grid-column:span 2;grid-row:span 2}}@media(max-width:700px){.fyfaen-irl{padding:65px 0}.fyfaen-irl__grid{grid-template-columns:1fr 1fr;grid-auto-rows:210px;gap:8px}.fyfaen-irl__item--wide{grid-column:span 2;grid-row:span 2}.fyfaen-irl__item--tall{grid-row:span 2}.fyfaen-irl__intro{margin-top:8px}}
</style>

<?php get_footer(); ?>
