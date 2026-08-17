<?php
/**
 * FYFAEN WooCommerce shop/category archive.
 * Presentation only: WooCommerce remains responsible for products,
 * queries, sorting, pagination, cart and checkout.
 */
defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>

<main id="primary" class="site-main fyfaen-shop">
    <div class="container">
        <header class="fyfaen-shop__hero">
            <div>
                <p class="fyfaen-eyebrow">FYFAEN CLOTHING</p>
                <?php if ( is_product_category() ) : ?>
                    <h1><?php woocommerce_page_title(); ?></h1>
                <?php else : ?>
                    <h1>Hele <em>kolleksjonen.</em></h1>
                <?php endif; ?>
                <p class="fyfaen-shop__intro">Oversized tees, hoodies, sokker. Norsk brand med fokus på kvalitet, passform og særpreg.</p>
            </div>
        </header>

        <div class="fyfaen-shop__toolbar">
            <div class="fyfaen-shop__result-count"><?php woocommerce_result_count(); ?></div>
            <div class="fyfaen-shop__ordering"><?php woocommerce_catalog_ordering(); ?></div>
        </div>

        <?php if ( woocommerce_product_loop() ) : ?>
            <?php do_action( 'woocommerce_before_shop_loop' ); ?>

            <div class="fyfaen-shop__grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php wc_get_template_part( 'content', 'product' ); ?>
                <?php endwhile; ?>
            </div>

            <?php do_action( 'woocommerce_after_shop_loop' ); ?>
        <?php else : ?>
            <?php do_action( 'woocommerce_no_products_found' ); ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer( 'shop' ); ?>
