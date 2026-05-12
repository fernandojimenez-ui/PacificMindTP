<?php
/**
 * Module: Video Hero
 */

$eyebrow    = get_sub_field( 'eyebrow' );
$heading    = get_sub_field( 'heading' );
$subheading = get_sub_field( 'subheading' );
$video_file = get_sub_field( 'video_file' );
$poster     = get_sub_field( 'poster_image' );
$min_height = get_sub_field( 'min_height' ) ?: '90vh';
$overlay    = get_sub_field( 'overlay' ) ?: 'medium';
$ctas       = get_sub_field( 'ctas' );

$overlay_opacity = match ( $overlay ) {
	'none'  => false,
	'light' => 'rgba(0,0,0,0.15)',
	'dark'  => 'rgba(0,0,0,0.50)',
	default => 'rgba(0,0,0,0.30)',
};
?>

<section
	class="relative flex items-center justify-center text-white overflow-hidden"
	style="min-height: <?php echo esc_attr( $min_height ); ?>;"
>
	<?php if ( $video_file ) : ?>
	<video
		class="absolute inset-0 w-full h-full object-cover"
		autoplay muted loop playsinline
		<?php if ( $poster ) : ?>poster="<?php echo esc_url( $poster['url'] ); ?>"<?php endif; ?>
	>
		<source src="<?php echo esc_url( $video_file ); ?>" type="video/mp4">
	</video>
	<?php endif; ?>

	<?php if ( $overlay_opacity ) : ?>
	<div class="absolute inset-0" style="background: <?php echo esc_attr( $overlay_opacity ); ?>;" aria-hidden="true"></div>
	<?php endif; ?>

	<div class="relative z-10 container mx-auto text-center px-4 py-24">

		<?php if ( $eyebrow ) : ?>
		<p class="text-base md:text-lg uppercase tracking-widest mb-4 text-white/85">
			<?php echo esc_html( $eyebrow ); ?>
		</p>
		<?php endif; ?>

		<?php if ( $heading ) : ?>
		<h2 class="text-4xl md:text-6xl font-bold leading-tight mb-4 text-white">
			<?php echo esc_html( $heading ); ?>
		</h2>
		<?php endif; ?>

		<?php if ( $subheading ) : ?>
		<p class="text-lg md:text-2xl font-normal mb-10 max-w-3xl mx-auto text-white/90">
			<?php echo esc_html( $subheading ); ?>
		</p>
		<?php endif; ?>

		<?php if ( $ctas ) : ?>
		<div class="flex flex-wrap justify-center gap-4">
			<?php foreach ( $ctas as $cta ) :
				$label = $cta['cta_label'];
				$link  = $cta['cta_url'];
				$style = $cta['cta_style'] ?: 'primary';
				if ( ! $label || ! $link || ! $link['url'] ) continue;
				$btn_class = $style === 'primary'
					? 'bg-[#52BFCF] hover:bg-[#3395ac]'
					: 'border-2 border-white hover:bg-white hover:text-[#1a4a5a]';
			?>
			<a
				href="<?php echo esc_url( $link['url'] ); ?>"
				class="inline-block font-semibold px-8 py-3 rounded-full transition text-white <?php echo $btn_class; ?>"
				<?php if ( ! empty( $link['target'] ) ) : ?>
				target="<?php echo esc_attr( $link['target'] ); ?>" rel="noopener noreferrer"
				<?php endif; ?>
			>
				<?php echo esc_html( $label ); ?>
			</a>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>

	</div>
</section>
