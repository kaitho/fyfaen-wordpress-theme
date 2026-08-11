<?php
defined( 'ABSPATH' ) || exit;
?>
</main>
<footer class="site-footer">
	<div class="container">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'footer',
			'container'      => 'nav',
			'container_class' => 'footer-navigation',
			'fallback_cb'    => false,
		) );
		?>
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
