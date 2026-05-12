<?php
/**
 * Module: Homepage — CTA Banner
 * Used on: Homepage / Front Page
 */

$heading      = get_sub_field( 'heading' ) ?: 'Begin Your Journey Toward Wellness';
$phone_number = get_sub_field( 'phone_number' ) ?: '310-425-3881';
$phone_label  = get_sub_field( 'phone_label' ) ?: '310-425-3881';
$cta_label    = get_sub_field( 'cta_label' ) ?: 'Request A Consultation';
$cta          = get_sub_field( 'cta' );
$cta_url      = ( $cta && $cta['url'] ) ? $cta['url'] : '/new-patient/';
?>

<section class="py-16 text-white text-center bg-[#1a4a5a]">
	<div class="container mx-auto">

		<?php if ( $heading ) : ?>
		<h3 class="text-2xl md:text-3xl font-bold mb-8">
			<?php echo esc_html( $heading ); ?>
		</h3>
		<?php endif; ?>

		<div class="flex flex-wrap justify-center gap-4">

			<?php if ( $phone_number ) : ?>
			<a
				href="tel:+1<?php echo esc_attr( preg_replace( '/\D/', '', $phone_number ) ); ?>"
				class="inline-block font-semibold px-8 py-3 rounded-full transition bg-white text-[#1a4a5a] hover:bg-[#f0f9fb]"
			>
				<?php echo esc_html( $phone_label ?: $phone_number ); ?>
			</a>
			<?php endif; ?>

			<?php if ( $cta_label ) : ?>
			<a
				href="<?php echo esc_url( $cta_url ); ?>"
				class="inline-block font-semibold px-8 py-3 rounded-full border-2 border-white text-white transition hover:bg-white hover:text-[#1a4a5a]"
				<?php if ( $cta && ! empty( $cta['target'] ) ) : ?>
				target="<?php echo esc_attr( $cta['target'] ); ?>" rel="noopener noreferrer"
				<?php endif; ?>
			>
				<?php echo esc_html( $cta_label ); ?>
			</a>
			<?php endif; ?>

		</div>

	</div>
</section>
