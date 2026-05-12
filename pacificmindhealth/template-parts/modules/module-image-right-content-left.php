<?php
/**
 * Module: Content Left / Image Right
 */

$image     = get_sub_field( 'image' );
$eyebrow   = get_sub_field( 'eyebrow' );
$title     = get_sub_field( 'title' );
$content   = get_sub_field( 'content' );
$cta       = get_sub_field( 'cta' );
$cta_label = get_sub_field( 'cta_label' );
$spacing_top    = get_sub_field( 'spacing_top' ) ?: 'md';
$spacing_bottom = get_sub_field( 'spacing_bottom' ) ?: 'md';
$pt             = [ 'none' => '', 'sm' => 'pt-8 md:pt-12', 'md' => 'pt-16 md:pt-24', 'lg' => 'pt-24 md:pt-32' ];
$pb             = [ 'none' => '', 'sm' => 'pb-8 md:pb-12', 'md' => 'pb-16 md:pb-24', 'lg' => 'pb-24 md:pb-32' ];
?>

<section class="<?php echo trim( ( $pt[ $spacing_top ] ?? 'pt-16 md:pt-24' ) . ' ' . ( $pb[ $spacing_bottom ] ?? 'pb-16 md:pb-24' ) ); ?>">
	<div class="container mx-auto">
		<div class="grid gap-12 lg:grid-cols-2 lg:items-center">

			<div class="flex flex-col gap-5">

				<?php if ( $eyebrow ) : ?>
				<p class="text-sm font-semibold uppercase tracking-widest text-[#3395ac]">
					<?php echo esc_html( $eyebrow ); ?>
				</p>
				<?php endif; ?>

				<?php if ( $title ) : ?>
				<h2 class="text-3xl font-bold tracking-tight text-[#3395ac] md:text-4xl">
					<?php echo esc_html( $title ); ?>
				</h2>
				<?php endif; ?>

				<?php if ( $content ) : ?>
				<div class="entry-content">
					<?php echo wp_kses_post( $content ); ?>
				</div>
				<?php endif; ?>

				<?php if ( $cta && $cta['url'] ) : ?>
				<div>
					<a
						href="<?php echo esc_url( $cta['url'] ); ?>"
						class="pmh-button pmh-button-primary"
						<?php if ( $cta['target'] ) : ?>
						target="<?php echo esc_attr( $cta['target'] ); ?>"
						rel="noopener noreferrer"
						<?php endif; ?>
					>
						<?php echo esc_html( $cta_label ?: $cta['title'] ); ?>
					</a>
				</div>
				<?php endif; ?>

			</div>

			<?php if ( $image ) : ?>
			<div>
				<img
					src="<?php echo esc_url( $image['url'] ); ?>"
					alt="<?php echo esc_attr( $image['alt'] ?: $title ); ?>"
					width="<?php echo esc_attr( $image['width'] ); ?>"
					height="<?php echo esc_attr( $image['height'] ); ?>"
					class="w-full rounded-2xl object-cover shadow-sm"
					loading="lazy"
				>
			</div>
			<?php endif; ?>

		</div>
	</div>
</section>
