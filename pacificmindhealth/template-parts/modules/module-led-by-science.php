<?php
/**
 * Module: Homepage — Led by Science
 * Used on: Homepage / Front Page
 */

$eyebrow   = get_sub_field( 'eyebrow' ) ?: 'Led by Science and Compassion';
$heading   = get_sub_field( 'heading' ) ?: 'Quality Mental Health Care for Every Patient';
$body      = get_sub_field( 'body' );
$cta_label = get_sub_field( 'cta_label' ) ?: 'View Conditions We Treat';
$cta       = get_sub_field( 'cta' );
$cta_url   = ( $cta && $cta['url'] ) ? $cta['url'] : '/conditions/';
$image     = get_sub_field( 'image' );

$fallback_body = '<p>At Pacific Mind Health, our goal is to provide quality, science-based mental health care. We want all of our patients to live happier, more fulfilling lives.</p>
<p>Our experienced team of psychiatrists, psychiatric nurse practitioners, physician assistants, and therapists work together to customize a treatment plan just for you.</p>
<p>We know suffering from a mental health disorder can feel frustrating, confusing, and even scary. You are not alone. Pacific Mind Health is here to guide you on your mental health journey.</p>';
?>

<section class="py-20 bg-white">
	<div class="container mx-auto">
		<div class="md:grid md:grid-cols-2 md:gap-16 items-center">

			<div>
				<?php if ( $eyebrow ) : ?>
				<p class="text-sm font-semibold uppercase tracking-widest mb-2 text-[#3395ac]">
					<?php echo esc_html( $eyebrow ); ?>
				</p>
				<?php endif; ?>

				<?php if ( $heading ) : ?>
				<h2 class="text-3xl font-bold mb-6 text-[#1a4a5a]">
					<?php echo esc_html( $heading ); ?>
				</h2>
				<?php endif; ?>

				<div class="text-[#4b5563] entry-content">
					<?php echo $body ? wp_kses_post( $body ) : $fallback_body; ?>
				</div>

				<?php if ( $cta_label ) : ?>
				<div class="mt-8">
					<a
						href="<?php echo esc_url( $cta_url ); ?>"
						class="inline-block text-white font-semibold px-8 py-3 rounded-full transition bg-[#52BFCF] hover:bg-[#3395ac]"
						<?php if ( $cta && ! empty( $cta['target'] ) ) : ?>
						target="<?php echo esc_attr( $cta['target'] ); ?>" rel="noopener noreferrer"
						<?php endif; ?>
					>
						<?php echo esc_html( $cta_label ); ?>
					</a>
				</div>
				<?php endif; ?>
			</div>

			<div class="mt-10 md:mt-0">
				<?php if ( $image ) : ?>
				<img
					src="<?php echo esc_url( $image['url'] ); ?>"
					alt="<?php echo esc_attr( $image['alt'] ); ?>"
					class="w-full rounded-2xl object-cover"
					style="box-shadow: 0 4px 24px rgba(0,0,0,0.10);"
				>
				<?php else : ?>
				<img
					src="<?php echo esc_url( content_url( '/uploads/1G1A7642-scaled.jpg' ) ); ?>"
					alt="Pacific Mind Health Clinic"
					class="w-full rounded-2xl object-cover"
					style="box-shadow: 0 4px 24px rgba(0,0,0,0.10);"
				>
				<?php endif; ?>
			</div>

		</div>
	</div>
</section>
