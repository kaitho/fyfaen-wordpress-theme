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
<div class="fyfaen-announcement"><div class="fyfaen-announcement__inner container">Fri frakt når du handler for over 549,-</div></div>
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
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'fallback_cb' => 'fyfaen_primary_menu_fallback' ) ); ?>
		</nav>
		<div class="site-header__actions">
			<button class="fyfaen-menu-toggle" type="button" aria-expanded="false" aria-controls="fyfaen-mobile-nav" aria-label="<?php esc_attr_e( 'Åpne meny', 'fyfaen' ); ?>">
				<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
			</button>
			<a class="fyfaen-icon-link" href="<?php echo esc_url( function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Handlekurv', 'fyfaen' ); ?>">
				<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M3.5 5h2l1.7 10.2a1.8 1.8 0 0 0 1.8 1.5h7.8a1.8 1.8 0 0 0 1.8-1.5L20 8H7"/><circle cx="10" cy="20" r="1"/><circle cx="17" cy="20" r="1"/></svg>
				<?php if ( function_exists( 'WC' ) && WC()->cart ) : ?><span class="fyfaen-cart-count"><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></span><?php endif; ?>
			</a>
		</div>
	</div>
	<nav id="fyfaen-mobile-nav" class="fyfaen-mobile-nav" aria-label="<?php esc_attr_e( 'Mobilmeny', 'fyfaen' ); ?>">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'fallback_cb' => 'fyfaen_primary_menu_fallback' ) ); ?>
	</nav>
</header>
<main id="main" class="site-main">
