<?php
get_header();
?>

<main id="treatment-single" class="treatment-single">
	<?php while ( have_posts() ) : the_post(); ?>

	<section
		class="tmt-hero<?php echo has_post_thumbnail() ? '' : ' tmt-hero--no-image'; ?>"
		<?php if ( has_post_thumbnail() ) : ?>
		style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( null, 'full' ) ); ?>');"
		<?php endif; ?>
	>
		<div class="tmt-hero__overlay"></div>
		<div class="tmt-hero__inner">
			<nav class="tmt-hero__breadcrumb" aria-label="Breadcrumb">
				<a href="<?php echo esc_url( home_url( '/what-we-treat/' ) ); ?>">&#8592; What We Treat</a>
			</nav>
			<h1 class="tmt-hero__title"><?php the_title(); ?></h1>
			<?php
			$excerpt = get_the_excerpt();
			if ( $excerpt ) :
			?>
			<p class="tmt-hero__sub"><?php echo esc_html( $excerpt ); ?></p>
			<?php endif; ?>
		</div>
	</section>

	<section class="tmt-content">
		<div class="tmt-content__wrap">
			<?php the_content(); ?>
		</div>

		<div class="tmt-content__cta-wrap">
			<p class="tmt-content__cta-label">Ready to take the first step?</p>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="tmt-content__cta-btn">
				Get Help Today
			</a>
		</div>
	</section>

	<?php endwhile; ?>
</main>

<?php
get_footer();
