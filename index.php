<?php
get_header();
?>
<div class="container">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?>>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<p><?php esc_html_e( 'Ingen innhold funnet.', 'fyfaen' ); ?></p>
	<?php endif; ?>
</div>
<?php
get_footer();
