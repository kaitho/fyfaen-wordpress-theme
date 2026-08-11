<?php
get_header();
?>
<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?>>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; ?>
</div>
<?php
get_footer();
