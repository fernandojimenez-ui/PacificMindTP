<?php
/**
 * Module: Hero
 */

$bg_image   = get_sub_field( 'bg_image' );
$title      = get_sub_field( 'title' );
$subtitle   = get_sub_field( 'subtitle' );
$back_link  = get_sub_field( 'back_link' );
$min_height = get_sub_field( 'min_height' ) ?: '65vh';
$text_align = get_sub_field( 'text_align' ) ?: 'left';

$style_parts = [ 'min-height: ' . esc_attr( $min_height ) ];
if ( $bg_image ) {
	$style_parts[] = "background-image: url('" . esc_url( $bg_image['url'] ) . "')";
	$style_parts[] = 'background-size: cover';
	$style_parts[] = 'background-position: center';
}

$text_class = $text_align === 'center' ? 'text-center' : '';
?>

<section
	class="relative flex items-center justify-center overflow-hidden bg-[#1a4a5a]"
	style="<?php echo implode( '; ', $style_parts ); ?>"
>
	<div class="wt-hero-overlay absolute inset-0" aria-hidden="true"></div>

	<div class="relative z-10 mx-auto w-full max-w-4xl px-6 py-16 <?php echo $text_class; ?>">

		<?php if ( $back_link && $back_link['url'] ) : ?>
		<a
			href="<?php echo esc_url( $back_link['url'] ); ?>"
			class="mb-5 inline-flex items-center gap-1.5 text-sm font-medium text-white/70 transition hover:text-[#52BFCF]"
		>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4" aria-hidden="true">
				<path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd"/>
			</svg>
			<?php echo esc_html( $back_link['title'] ); ?>
		</a>
		<?php endif; ?>

		<?php if ( $title ) : ?>
		<h1 class="mb-4 text-4xl font-extrabold leading-tight tracking-tight text-white md:text-5xl lg:text-6xl">
			<?php echo esc_html( $title ); ?>
		</h1>
		<?php endif; ?>

		<?php if ( $subtitle ) : ?>
		<p class="<?php echo $text_align === 'center' ? 'mx-auto' : ''; ?> max-w-xl text-lg leading-relaxed text-white/85">
			<?php echo esc_html( $subtitle ); ?>
		</p>
		<?php endif; ?>

	</div>
</section>
