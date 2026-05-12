<?php
/**
 * Module: Homepage — Treatments Intro
 * Used on: Homepage / Front Page
 */

$heading         = get_sub_field( 'heading' ) ?: 'Your Mental Health Journey Is Unique.';
$subheading      = get_sub_field( 'subheading' ) ?: 'Your Treatment Should Be Too.';
$intro_text      = get_sub_field( 'intro_text' ) ?: 'At Pacific Mind Health, we believe everyone should have access to compassionate and effective care. We offer modern and traditional evidence-based mental health treatment that is tailored to meet your needs.';
$treatment_items = get_sub_field( 'treatment_items' );
$cta_label       = get_sub_field( 'cta_label' ) ?: 'Learn More';
$cta             = get_sub_field( 'cta' );
$cta_url         = ( $cta && $cta['url'] ) ? $cta['url'] : '/treatments/';

$default_treatments = [
	'Transcranial Magnetic Stimulation (TMS)',
	'Spravato® (esketamine)',
	'ADHD Treatment',
	'Psychiatry',
	'Therapy',
	'Genetic Testing',
];
?>

<section class="py-20 bg-white">
	<div class="container mx-auto text-center">

		<h2 class="text-3xl md:text-4xl font-bold mb-3 text-[#1a4a5a]">
			<?php echo esc_html( $heading ); ?>
		</h2>

		<h3 class="text-2xl font-medium mb-8 text-[#3395ac]">
			<?php echo esc_html( $subheading ); ?>
		</h3>

		<p class="text-lg mb-8 mx-auto max-w-3xl text-[#4b5563]">
			<?php echo wp_kses_post( $intro_text ); ?>
		</p>

		<ul class="grid grid-cols-2 md:grid-cols-3 gap-3 mb-10 text-left max-w-2xl mx-auto">
			<?php if ( $treatment_items ) : ?>
				<?php foreach ( $treatment_items as $item ) : ?>
				<li class="flex items-center gap-2 text-[#374151]">
					<span class="text-[#3395ac] font-bold" aria-hidden="true">✓</span>
					<?php echo esc_html( $item['treatment_name'] ); ?>
				</li>
				<?php endforeach; ?>
			<?php else : ?>
				<?php foreach ( $default_treatments as $t ) : ?>
				<li class="flex items-center gap-2 text-[#374151]">
					<span class="text-[#3395ac] font-bold" aria-hidden="true">✓</span>
					<?php echo esc_html( $t ); ?>
				</li>
				<?php endforeach; ?>
			<?php endif; ?>
		</ul>

		<?php if ( $cta_label ) : ?>
		<a href="<?php echo esc_url( $cta_url ); ?>" class="inline-block text-white font-semibold px-8 py-3 rounded-full transition bg-[#52BFCF] hover:bg-[#3395ac]">
			<?php echo esc_html( $cta_label ); ?>
		</a>
		<?php endif; ?>

	</div>
</section>
