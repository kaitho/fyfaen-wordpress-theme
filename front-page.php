<?php
/**
 * FYFAEN editorial front page.
 * Commerce remains powered by WooCommerce; this template only presents products.
 */
defined( 'ABSPATH' ) || exit;

get_header();

$featured = new WP_Query( array(
    'post_type'      => 'product',
    'posts_per_page' => 4,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
) );
?>

<section class="fyfaen-hero">
    <div class="fyfaen-hero__inner container">
        <div class="fyfaen-hero__copy">
            <p class="fyfaen-eyebrow">FYFAEN CLOTHING</p>
            <h1>Klær som<br><em>skiller seg ut.</em></h1>
            <p class="fyfaen-hero__lead">Tunge kvaliteter. Relaxed fits. Norsk attitude.</p>
            <div class="fyfaen-hero__actions">
                <a class="fyfaen-button fyfaen-button--light" href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">Shop kolleksjonen <span>↗</span></a>
                <a class="fyfaen-text-link" href="#featured">Se favorittene</a>
            </div>
        </div>
        <div class="fyfaen-hero__mark" aria-hidden="true">FY<br>FAEN</div>
    </div>
</section>

<section class="fyfaen-marquee" aria-label="FYFAEN highlights">
    <div class="fyfaen-marquee__track">
        <span>HEAVYWEIGHT QUALITY</span><b>✦</b><span>RELATABLE BY DESIGN</span><b>✦</b><span>MADE FOR EVERYDAY</span><b>✦</b><span>FAST NORWEGIAN SHIPPING</span><b>✦</b>
        <span>HEAVYWEIGHT QUALITY</span><b>✦</b><span>RELATABLE BY DESIGN</span><b>✦</b><span>MADE FOR EVERYDAY</span><b>✦</b><span>FAST NORWEGIAN SHIPPING</span><b>✦</b>
    </div>
</section>

<section id="featured" class="fyfaen-section fyfaen-featured">
    <div class="container">
        <div class="fyfaen-section-heading">
            <div>
                <p class="fyfaen-eyebrow">UTVALGT</p>
                <h2>Dette er <em>FYFAEN.</em></h2>
            </div>
            <a class="fyfaen-text-link" href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">Se alt <span>↗</span></a>
        </div>

        <?php if ( $featured->have_posts() ) : ?>
            <div class="fyfaen-product-grid fyfaen-product-grid--featured">
                <?php while ( $featured->have_posts() ) : $featured->the_post(); ?>
                    <?php wc_get_template_part( 'content', 'product' ); ?>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="fyfaen-statement">
    <div class="container">
        <p class="fyfaen-eyebrow">FYFAEN CLOTHING</p>
        <h2>Fete klær.<br><em>Fete folk.</em></h2>
        <p>Vi lager plagg med fokus på passform, stoffkvalitet og en logo du kjenner igjen.</p>
    </div>
</section>

<section class="fyfaen-section fyfaen-trust">
    <div class="container">
        <div class="fyfaen-trust__grid">
            <div><strong>549,-</strong><span>Fri frakt over</span></div>
            <div><strong>★★★★★</strong><span>4,7 / 5 på Trustpilot</span></div>
            <div><strong>NORSK</strong><span>Brand med attitude</span></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
