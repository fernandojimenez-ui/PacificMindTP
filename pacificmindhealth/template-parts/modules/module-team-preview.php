<?php
/**
 * Module: Homepage — Team Preview
 * Used on: Homepage / Front Page
 */

$eyebrow        = get_sub_field( 'eyebrow' ) ?: 'Our Health Team';
$heading        = get_sub_field( 'heading' ) ?: 'Meet Our Health Professionals';
$posts_per_page = (int) get_sub_field( 'posts_per_page' ) ?: 4;
$view_all_label = get_sub_field( 'view_all_label' ) ?: 'View All Providers';
$view_all_cta   = get_sub_field( 'view_all_cta' );
$view_all_url   = ( $view_all_cta && $view_all_cta['url'] ) ? $view_all_cta['url'] : '/provider/';

$team_query = new WP_Query( [
	'post_type'      => 'team',
	'posts_per_page' => $posts_per_page,
	'post_status'    => 'publish',
] );
?>

<section class="py-20 bg-white">
	<div class="container mx-auto text-center">

		<?php if ( $eyebrow ) : ?>
		<p class="text-sm font-semibold uppercase tracking-widest mb-2 text-[#3395ac]">
			<?php echo esc_html( $eyebrow ); ?>
		</p>
		<?php endif; ?>

		<?php if ( $heading ) : ?>
		<h2 class="text-3xl font-bold mb-12 text-[#1a4a5a]">
			<?php echo esc_html( $heading ); ?>
		</h2>
		<?php endif; ?>

		<?php if ( $team_query->have_posts() ) : ?>
		<div class="grid sm:grid-cols-2 md:grid-cols-4 gap-8">
			<?php while ( $team_query->have_posts() ) : $team_query->the_post(); ?>
			<div class="text-center">
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="w-32 h-32 rounded-full overflow-hidden mx-auto mb-4">
					<?php the_post_thumbnail( 'medium', [ 'class' => 'w-full h-full object-cover' ] ); ?>
				</div>
				<?php else : ?>
				<div class="w-32 h-32 rounded-full mx-auto mb-4 flex items-center justify-center bg-[#f2f6f8]">
					<span class="text-[#3395ac] text-4xl" aria-hidden="true">👤</span>
				</div>
				<?php endif; ?>
				<h3 class="font-semibold text-[#1a4a5a]"><?php the_title(); ?></h3>
				<?php
				$job_title = get_post_meta( get_the_ID(), 'job_title', true );
				if ( $job_title ) : ?>
				<p class="text-sm text-[#6b7280]"><?php echo esc_html( $job_title ); ?></p>
				<?php endif; ?>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>

		<?php if ( $view_all_label ) : ?>
		<div class="mt-10">
			<a
				href="<?php echo esc_url( $view_all_url ); ?>"
				class="inline-block font-semibold px-8 py-3 rounded-full border-2 transition border-[#3395ac] text-[#3395ac] hover:bg-[#3395ac] hover:text-white"
				<?php if ( $view_all_cta && ! empty( $view_all_cta['target'] ) ) : ?>
				target="<?php echo esc_attr( $view_all_cta['target'] ); ?>" rel="noopener noreferrer"
				<?php endif; ?>
			>
				<?php echo esc_html( $view_all_label ); ?>
			</a>
		</div>
		<?php endif; ?>

	</div>
</section>
