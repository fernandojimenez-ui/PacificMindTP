<?php
/**
 * Module: WYSIWYG Content
 */

$title     = get_sub_field( 'title' );
$content   = get_sub_field( 'content' );
$cta_label = get_sub_field( 'cta_label' );
$cta_style = get_sub_field( 'cta_style' ) ?: 'primary';
$cta       = get_sub_field( 'cta' );
$spacing_top    = get_sub_field( 'spacing_top' ) ?: 'md';
$spacing_bottom = get_sub_field( 'spacing_bottom' ) ?: 'md';
$pt             = [ 'none' => '', 'sm' => 'pt-8 md:pt-12', 'md' => 'pt-16 md:pt-24', 'lg' => 'pt-24 md:pt-32' ];
$pb             = [ 'none' => '', 'sm' => 'pb-8 md:pb-12', 'md' => 'pb-16 md:pb-24', 'lg' => 'pb-24 md:pb-32' ];

if ( ! $title && ! $content ) {
	return;
}
?>

<section class="<?php echo trim( ( $pt[ $spacing_top ] ?? 'pt-16 md:pt-24' ) . ' ' . ( $pb[ $spacing_bottom ] ?? 'pb-16 md:pb-24' ) ); ?>">
	<div class="container mx-auto">

		<?php if ( $title ) : ?>
		<h2 class="mb-8 text-3xl font-bold tracking-tight text-[#3395ac] md:text-4xl">
			<?php echo esc_html( $title ); ?>
		</h2>
		<?php endif; ?>

		<?php if ( $content ) : ?>
		<div class="entry-content">
			<?php echo wp_kses_post( $content ); ?>
		</div>
		<?php endif; ?>

		<?php if ( $cta_label && $cta && $cta['url'] ) : ?>
		<div class="mt-8">
			<a
				href="<?php echo esc_url( $cta['url'] ); ?>"
				class="pmh-button pmh-button-<?php echo esc_attr( $cta_style ); ?>"
				<?php if ( $cta['target'] ) : ?>
				target="<?php echo esc_attr( $cta['target'] ); ?>"
				rel="noopener noreferrer"
				<?php endif; ?>
			>
				<?php echo esc_html( $cta_label ); ?>
			</a>
		</div>
		<?php endif; ?>

	</div>
</section>
