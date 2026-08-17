<?php
/** FYFAEN IRL editorial gallery for the WooCommerce shop/front page. */

defined( 'ABSPATH' ) || exit;

add_action( 'woocommerce_after_shop_loop', function () {
	if ( ! is_shop() && ! is_front_page() ) {
		return;
	}
	?>
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
	<?php
} );

add_action( 'wp_head', function () {
	if ( ! is_shop() && ! is_front_page() ) {
		return;
	}
	?>
	<style>
		.fyfaen-irl{padding:100px 0;border-top:1px solid var(--fy-line);border-bottom:1px solid var(--fy-line);overflow:hidden}
		.fyfaen-irl__intro{max-width:340px;margin:0;color:var(--fy-muted);font-weight:650}
		.fyfaen-irl__grid{display:grid;grid-template-columns:1.45fr .8fr .8fr;grid-auto-rows:300px;gap:12px}
		.fyfaen-irl__item{margin:0;overflow:hidden;background:var(--fy-soft);min-width:0}
		.fyfaen-irl__item img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s cubic-bezier(.2,.7,.2,1)}
		.fyfaen-irl__item:hover img{transform:scale(1.025)}
		.fyfaen-irl__item--wide{grid-row:span 2}
		.fyfaen-irl__item--tall{grid-row:span 2}
		@media(max-width:900px){.fyfaen-irl__grid{grid-template-columns:1fr 1fr;grid-auto-rows:260px}.fyfaen-irl__item--wide{grid-column:span 2;grid-row:span 2}}
		@media(max-width:700px){.fyfaen-irl{padding:65px 0}.fyfaen-irl__grid{grid-template-columns:1fr 1fr;grid-auto-rows:210px;gap:8px}.fyfaen-irl__item--wide{grid-column:span 2;grid-row:span 2}.fyfaen-irl__intro{margin-top:8px}}
	</style>
	<?php
} );
