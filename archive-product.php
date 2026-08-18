<?php
defined( 'ABSPATH' ) || exit;
get_header( 'shop' );
?>
<main id="primary" class="site-main fyfaen-shop">
    <div class="container">
        <header class="fyfaen-shop__hero">
            <div>
                <p class="fyfaen-eyebrow">FYFAEN CLOTHING / est 2024</p>
                <?php if ( is_product_category() ) : ?>
                    <h1><?php woocommerce_page_title(); ?></h1>
                <?php else : ?>
                    <h1>Hele <em>kolleksjonen.</em></h1>
                <?php endif; ?>
                <p class="fyfaen-shop__intro">Norsk brand. Skapt for å skille seg ut — med fokus på kvalitet, passform og produkter du faktisk vil bruke.</p>
            </div>
            <div class="fyfaen-shop__hero-mark" aria-hidden="true">FY<br>FAEN</div>
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
<style>
.fyfaen-shop__hero{position:relative;min-height:300px;display:flex;align-items:flex-end;justify-content:space-between;gap:50px;padding:75px 0 58px;border-bottom:1px solid var(--fy-line);overflow:hidden}.fyfaen-shop__hero h1{position:relative;z-index:1;margin:0;font-size:clamp(4rem,8vw,8rem);line-height:.82;letter-spacing:-.075em;font-weight:950}.fyfaen-shop__hero h1 em{font-style:normal;color:#9d9d9d}.fyfaen-shop__intro{position:relative;z-index:1;max-width:500px;margin:28px 0 0;color:var(--fy-muted);font-size:1rem}.fyfaen-shop__hero-mark{position:absolute;right:-.03em;bottom:-.08em;font-size:clamp(9rem,19vw,19rem);line-height:.7;font-weight:950;letter-spacing:-.1em;color:#f2f2f0;user-select:none}.fyfaen-shop__toolbar{display:flex;align-items:center;justify-content:space-between;gap:20px;padding:22px 0;border-bottom:1px solid var(--fy-line)}.fyfaen-shop__result-count{font-size:.72rem;font-weight:800;letter-spacing:.08em;text-transform:uppercase;color:#777}.fyfaen-shop__ordering{font-size:.78rem}.fyfaen-shop__grid{padding-top:30px}.fyfaen-shop__grid .product a img{transition:transform .55s cubic-bezier(.2,.7,.2,1),filter .35s ease}.fyfaen-shop__grid .product:hover a img{transform:scale(1.025);filter:brightness(.97)}.fyfaen-shop__grid .product .woocommerce-loop-product__title{letter-spacing:-.015em}.fyfaen-shop__grid .product .price{font-weight:850}.fyfaen-shop__grid .product .onsale{left:12px;top:12px}@media(max-width:700px){.fyfaen-shop__hero{min-height:250px;padding:52px 0 40px}.fyfaen-shop__hero h1{font-size:clamp(3.6rem,16vw,6rem)}.fyfaen-shop__intro{font-size:.92rem;margin-top:20px;max-width:390px}.fyfaen-shop__hero-mark{font-size:7rem;right:-.02em;bottom:.05em}.fyfaen-shop__toolbar{padding:16px 0}.fyfaen-shop__grid{padding-top:20px}}
</style>
<?php get_footer( 'shop' ); ?>
