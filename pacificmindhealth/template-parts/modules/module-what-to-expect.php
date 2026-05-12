<?php
/**
 * Module: Homepage — What To Expect
 * Used on: Homepage / Front Page
 */

$heading   = get_sub_field( 'heading' ) ?: 'What To Expect';
$body      = get_sub_field( 'body' );
$cta_label = get_sub_field( 'cta_label' ) ?: 'About Us';
$cta       = get_sub_field( 'cta' );
$cta_url   = ( $cta && $cta['url'] ) ? $cta['url'] : '/about/';
$image     = get_sub_field( 'image' );

$fallback_body = '<p>Pacific Mind Health is committed to creating an intake process that is smooth and efficient. We know filling out paperwork can be time-consuming, but it\'s the quickest way to get you care. Our staff is trained to assist with any insurance and referral requirements.</p>
<p>Once complete, your Pacific Mind Health clinician will conduct a comprehensive exam that considers you as a whole person. They will take the time to explain our diagnosis and answer any questions you may have. Together, you and your clinician will create a treatment plan that works for you.</p>';
?>

<section class="py-20 bg-[#f2f6f8]">
	<div class="container mx-auto">
		<div class="md:grid md:grid-cols-2 md:gap-16 items-center">

			<div class="mb-10 md:mb-0">
				<?php if ( $image ) : ?>
				<img
					src="<?php echo esc_url( $image['url'] ); ?>"
					alt="<?php echo esc_attr( $image['alt'] ); ?>"
					class="w-full rounded-2xl object-cover"
					style="box-shadow: 0 4px 24px rgba(0,0,0,0.10);"
				>
				<?php else : ?>
				<img
					src="<?php echo esc_url( content_url( '/uploads/josh-from-pacific-1.jpg' ) ); ?>"
					alt="Pacific Mind Health Team"
					class="w-full rounded-2xl object-cover"
					style="box-shadow: 0 4px 24px rgba(0,0,0,0.10);"
				>
				<?php endif; ?>
			</div>

			<div>
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

		</div>
	</div>
</section>
