<?php
/**
 * Module: CTA Band
 */

$heading         = get_sub_field( 'heading' );
$body            = get_sub_field( 'body' );
$primary_label   = get_sub_field( 'primary_label' );
$primary_cta     = get_sub_field( 'primary_cta' );
$secondary_label = get_sub_field( 'secondary_label' );
$secondary_cta   = get_sub_field( 'secondary_cta' );
$spacing_top    = get_sub_field( 'spacing_top' ) ?: 'md';
$spacing_bottom = get_sub_field( 'spacing_bottom' ) ?: 'md';
$pt             = [ 'none' => '', 'sm' => 'pt-8 md:pt-12', 'md' => 'pt-16 md:pt-24', 'lg' => 'pt-24 md:pt-32' ];
$pb             = [ 'none' => '', 'sm' => 'pb-8 md:pb-12', 'md' => 'pb-16 md:pb-24', 'lg' => 'pb-24 md:pb-32' ];
?>

<section class="px-6 <?php echo trim( ( $pt[ $spacing_top ] ?? 'pt-16 md:pt-24' ) . ' ' . ( $pb[ $spacing_bottom ] ?? 'pb-16 md:pb-24' ) ); ?>">
	<div class="mx-auto max-w-3xl rounded-2xl border border-[#c8e6ed] bg-[#f0f9fb] p-10 text-center md:p-14">

		<?php if ( $heading ) : ?>
		<p class="mb-3 text-2xl font-bold tracking-tight text-[#1a4a5a] md:text-3xl">
			<?php echo esc_html( $heading ); ?>
		</p>
		<?php endif; ?>

		<?php if ( $body ) : ?>
		<p class="mx-auto mb-8 max-w-lg text-base leading-relaxed text-[#4b5563]">
			<?php echo esc_html( $body ); ?>
		</p>
		<?php endif; ?>

		<?php if ( $primary_cta || $secondary_cta ) : ?>
		<div class="flex flex-wrap justify-center gap-3">

			<?php if ( $primary_cta && $primary_cta['url'] ) : ?>
			<a
				href="<?php echo esc_url( $primary_cta['url'] ); ?>"
				class="pmh-button pmh-button-primary px-9 py-3.5 text-sm"
				<?php if ( $primary_cta['target'] ) : ?>
				target="<?php echo esc_attr( $primary_cta['target'] ); ?>"
				rel="noopener noreferrer"
				<?php endif; ?>
			>
				<?php echo esc_html( $primary_label ?: $primary_cta['title'] ); ?>
			</a>
			<?php endif; ?>

			<?php if ( $secondary_cta && $secondary_cta['url'] ) : ?>
			<a
				href="<?php echo esc_url( $secondary_cta['url'] ); ?>"
				class="pmh-button pmh-button-secondary px-9 py-3.5 text-sm"
				<?php if ( $secondary_cta['target'] ) : ?>
				target="<?php echo esc_attr( $secondary_cta['target'] ); ?>"
				rel="noopener noreferrer"
				<?php endif; ?>
			>
				<?php echo esc_html( $secondary_label ?: $secondary_cta['title'] ); ?>
			</a>
			<?php endif; ?>

		</div>
		<?php endif; ?>

	</div>
</section>
