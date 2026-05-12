<?php
/**
 * Module: Homepage — Insurance Banner
 * Used on: Homepage / Front Page
 */

$heading        = get_sub_field( 'heading' ) ?: "We're In-Network with Every Major Insurance";
$bg_image       = get_sub_field( 'bg_image' );
$overlay        = get_sub_field( 'overlay' ) ?: 'medium';

$fallback_bg = '/wp-content/uploads/sandy-sea-bottom-underwater-background-underwater-blue-ocean-1.jpg';
$bg_url      = $bg_image ? esc_url( $bg_image['url'] ) : esc_url( site_url( $fallback_bg ) );

$overlay_color = match ( $overlay ) {
	'none'  => false,
	'light' => 'rgba(26,74,90,0.35)',
	'dark'  => 'rgba(26,74,90,0.85)',
	default => 'rgba(26,74,90,0.65)',
};

$section_style = "background-image: url('{$bg_url}'); background-attachment: fixed; background-size: cover; background-position: center;";
?>

<section class="py-24 text-white text-center relative" style="<?php echo esc_attr( $section_style ); ?>">

	<?php if ( $overlay_color ) : ?>
	<div class="absolute inset-0" style="background: <?php echo esc_attr( $overlay_color ); ?>;" aria-hidden="true"></div>
	<?php endif; ?>

	<div class="container mx-auto relative z-10">
		<?php if ( $heading ) : ?>
		<h3 class="text-2xl md:text-3xl font-bold">
			<?php echo esc_html( $heading ); ?>
		</h3>
		<?php endif; ?>
	</div>

</section>
