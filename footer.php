<?php
defined( 'ABSPATH' ) || exit;
?>
</main>
<footer class="site-footer">
	<div class="container">
		<div class="site-footer__top">
			<div>
				<div class="site-footer__eyebrow">FYFAEN CLOTHING</div>
				<div class="site-footer__brand">FYFAEN</div>
				<p class="site-footer__tagline">Norsk brand. Skapt for å skille seg ut — med fokus på kvalitet, passform og produkter du faktisk vil bruke.</p>
			</div>

			<nav class="site-footer__nav-block" aria-label="Footer">
				<div class="site-footer__nav-title">MENY</div>
				<div class="footer-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'container'      => false,
							'fallback_cb'    => function () {
								$shop_url     = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' );
								$cart_url     = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/' );
								$checkout_url = function_exists( 'wc_get_checkout_url' ) ? wc_get_checkout_url() : home_url( '/' );
								$terms_page   = get_page_by_path( 'refund_returns' );
								?>
								<ul>
									<li><a href="<?php echo esc_url( $shop_url ); ?>">Butikk</a></li>
									<li><a href="<?php echo esc_url( $cart_url ); ?>">Handlekurv</a></li>
									<li><a href="<?php echo esc_url( $checkout_url ); ?>">Kasse</a></li>
									<?php if ( $terms_page ) : ?>
										<li><a href="<?php echo esc_url( get_permalink( $terms_page ) ); ?>">Kjøpsvilkår</a></li>
									<?php endif; ?>
								</ul>
								<?php
							},
						)
					);
					?>
				</div>
			</nav>
		</div>

		<div class="site-footer__statement">
			<h2>Klær som mener</h2>
		</div>

		<div class="site-footer__bottom">
			<span>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></span>
			<span>fyfaen.store</span>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
