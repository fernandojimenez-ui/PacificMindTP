<?php
/**
 * Module: Homepage — Blog Preview
 * Used on: Homepage / Front Page
 */

$heading        = get_sub_field( 'heading' ) ?: 'Support Your Mental Health At Home';
$posts_per_page = (int) get_sub_field( 'posts_per_page' ) ?: 3;

$blog_query = new WP_Query( [
	'post_type'      => 'post',
	'posts_per_page' => $posts_per_page,
	'post_status'    => 'publish',
] );
?>

<?php if ( $blog_query->have_posts() ) : ?>
<section class="py-20 bg-[#f2f6f8]">
	<div class="container mx-auto">

		<?php if ( $heading ) : ?>
		<h3 class="text-2xl md:text-3xl font-bold text-center mb-12 text-[#1a4a5a]">
			<?php echo esc_html( $heading ); ?>
		</h3>
		<?php endif; ?>

		<div class="grid md:grid-cols-3 gap-8">
			<?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
			<article class="bg-white rounded-2xl overflow-hidden text-left" style="box-shadow: 0 2px 12px rgba(0,0,0,0.07);">
				<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'medium_large', [ 'class' => 'w-full object-cover', 'style' => 'height:200px;' ] ); ?>
				</a>
				<?php endif; ?>
				<div class="p-6">
					<h4 class="font-bold mb-3">
						<a href="<?php the_permalink(); ?>" class="text-[#1a4a5a] hover:text-[#3395ac]"><?php the_title(); ?></a>
					</h4>
					<p class="text-sm text-[#6b7280]"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
				</div>
			</article>
			<?php endwhile; ?>
		</div>

	</div>
</section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
