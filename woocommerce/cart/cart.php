<?php
/**
 * FYFAEN cart wrapper.
 *
 * WooCommerce continues to render and process the cart table. This template only
 * adds FYFAEN presentation around the standard cart hook output.
 *
 * @package FYFAEN
 */
defined( 'ABSPATH' ) || exit;
?>
<div class="fyfaen-cart-heading">
    <div>
        <span class="fyfaen-kicker">FYFAEN SHOPPING BAG</span>
        <h1><?php esc_html_e( 'Handlekurv.', 'fyfaen' ); ?></h1>
    </div>
    <p><?php esc_html_e( 'Sjekk varene dine før du går videre til betaling. Checkout og betalingsbehandling håndteres fortsatt av WooCommerce og betalingspluginene.', 'fyfaen' ); ?></p>
</div>
<?php do_action( 'woocommerce_before_cart' ); ?>
<div class="woocommerce-cart-form-wrapper">
<?php do_action( 'woocommerce_before_cart_table' ); ?>
<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
<?php do_action( 'woocommerce_before_cart_contents' ); ?>
<?php wc_get_template( 'cart/cart-item.php' ); // WooCommerce-compatible hook point; table rows are rendered by standard cart hooks. ?>
<?php do_action( 'woocommerce_cart_contents' ); ?>
<?php do_action( 'woocommerce_after_cart_contents' ); ?>
</form>
<?php do_action( 'woocommerce_after_cart_table' ); ?>
</div>
<?php do_action( 'woocommerce_after_cart' ); ?>
