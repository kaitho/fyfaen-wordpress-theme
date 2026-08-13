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
					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'fallback_cb' => false ) ); ?>
				</div>
			</nav>
		</div>

		<div class="site-footer__statement">
			<h2>Klær som mener <span>det.</span></h2>
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
