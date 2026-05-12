<?php
/**
 * Module: Homepage — Locations Grid
 * Used on: Homepage / Front Page
 */

$intro_text = get_sub_field( 'intro_text' ) ?: 'We offer in-person appointments at our Long Beach, West Los Angeles, and Orange County offices and convenient online appointments for patients throughout California.';

$location_query = new WP_Query( [
	'post_type'      => 'location',
	'posts_per_page' => -1,
	'post_status'    => 'publish',
	'orderby'        => 'title',
	'order'          => 'ASC',
] );
?>

<section class="py-20 bg-[#f2f6f8]">
	<div class="container mx-auto text-center">

		<?php if ( $intro_text ) : ?>
		<p class="text-lg mb-10 mx-auto max-w-2xl text-[#4b5563]">
			<?php echo wp_kses_post( $intro_text ); ?>
		</p>
		<?php endif; ?>

		<?php if ( $location_query->have_posts() ) : ?>
		<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
			<?php while ( $location_query->have_posts() ) : $location_query->the_post(); ?>
			<a
				href="<?php the_permalink(); ?>"
				class="bg-white rounded-xl py-3 px-4 font-semibold transition text-sm text-[#1a4a5a] hover:bg-[#e8f4f7]"
				style="box-shadow: 0 1px 4px rgba(0,0,0,0.06);"
			>
				<?php the_title(); ?>
			</a>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>

	</div>
</section>
