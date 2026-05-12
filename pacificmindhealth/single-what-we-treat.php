<?php
/**
 * Single template for the what-we-treat custom post type.
 *
 * @package PacificMindHealth
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/flexible-content' ); ?>

<!-- ── Content ── -->
<section class="py-16 md:py-24">
	<div class="container mx-auto">
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>
