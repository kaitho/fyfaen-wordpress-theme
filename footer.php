<?php
defined( 'ABSPATH' ) || exit;
?>
</main>
<footer class="site-footer">
	<div class="container">
		<div class="site-footer__grid">
			<div>
				<div class="site-footer__brand">FYFAEN</div>
				<p class="site-footer__tagline">Norsk brand. Skapt for å skille seg ut — med fokus på kvalitet, passform og produkter du faktisk vil bruke.</p>
			</div>
			<div class="footer-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'fallback_cb' => false ) ); ?>
			</div>
			<div>
				<strong>FYFAEN Clothing</strong>
				<p class="site-footer__tagline">Takk for at du handler norsk.</p>
			</div>
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
