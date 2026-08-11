<?php
defined( 'ABSPATH' ) || exit;
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
	<div class="site-header__inner container">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<?php endif; ?>
		</div>

		<nav class="main-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'fyfaen' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'fallback_cb'    => false,
			) );
			?>
		</nav>

		<?php if ( function_exists( 'wc_get_cart_url' ) ) : ?>
			<a class="site-header__cart" href="<?php echo esc_url( wc_get_cart_url() ); ?>">
				<?php esc_html_e( 'Handlekurv', 'fyfaen' ); ?>
				<?php if ( function_exists( 'WC' ) && WC()->cart ) : ?>
					(<?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?>)
				<?php endif; ?>
			</a>
		<?php endif; ?>
	</div>
</header>
<main id="main" class="site-main">
