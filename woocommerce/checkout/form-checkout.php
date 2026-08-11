<?php
/**
 * FYFAEN checkout wrapper. All checkout fields, gateways and order processing
 * remain supplied by WooCommerce and installed payment plugins.
 *
 * @package FYFAEN
 */
defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_checkout_form', $checkout );
?>
<div class="fyfaen-checkout-heading">
    <span class="fyfaen-kicker">FYFAEN CHECKOUT</span>
    <h1><?php esc_html_e( 'Nesten i mål.', 'fyfaen' ); ?></h1>
    <p><?php esc_html_e( 'Fyll inn opplysningene dine og velg betalingsmåte. WooCommerce og betalingsleverandørene håndterer resten.', 'fyfaen' ); ?></p>
</div>
<?php if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) : ?>
    <?php echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'Du må være innlogget for å fullføre kjøpet.', 'woocommerce' ) ) ); ?>
<?php else : ?>
<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data" aria-label="<?php esc_attr_e( 'Checkout', 'woocommerce' ); ?>">
    <div id="customer_details">
        <?php do_action( 'woocommerce_checkout_billing' ); ?>
        <?php do_action( 'woocommerce_checkout_shipping' ); ?>
    </div>
    <div id="order_review" class="woocommerce-checkout-review-order">
        <h3 id="order_review_heading"><?php esc_html_e( 'Din ordre', 'fyfaen' ); ?></h3>
        <?php do_action( 'woocommerce_checkout_order_review' ); ?>
    </div>
</form>
<?php endif; ?>
<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
