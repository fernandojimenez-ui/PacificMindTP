<?php
/**
 * Module: Homepage — Featured Treatments
 * Used on: Homepage / Front Page
 */

$cards            = get_sub_field( 'cards' );
$view_more_label  = get_sub_field( 'view_more_label' ) ?: 'View More Treatments';
$view_more_cta    = get_sub_field( 'view_more_cta' );
$view_more_url    = ( $view_more_cta && $view_more_cta['url'] ) ? $view_more_cta['url'] : '/treatments/';

$fallback_cards = [
	[
		'image_url'   => content_url( '/uploads/1G1A7340-scaled.jpg' ),
		'image_alt'   => 'TMS Therapy',
		'title'       => 'Transcranial Magnetic Stimulation (TMS)',
		'description' => 'One of the most innovative mental health treatments we offer. TMS delivers magnetic pulses to stimulate underactive nerve cells in the parts of the brain that control mood. FDA-approved and non-invasive.',
		'link_text'   => 'Read More →',
		'link_url'    => '/treatments/transcranial-magnetic-stimulation/',
	],
	[
		'image_url'   => content_url( '/uploads/1G1A7318-scaled.jpg' ),
		'image_alt'   => 'Psychiatry',
		'title'       => 'Psychiatry &amp; Telepsychiatry',
		'description' => 'Psychiatry is a medical specialty focused on diagnosing, treating, and preventing disorders related to mood and behavior. Our psychiatrists develop personalized health plans for each patient.',
		'link_text'   => 'Read More →',
		'link_url'    => '/treatments/telepsychiatry-services/',
	],
	[
		'image_url'   => content_url( '/uploads/Spravato-Image.jpg' ),
		'image_alt'   => 'Spravato Therapy',
		'title'       => 'Spravato Therapy',
		'description' => 'Also known as esketamine, Spravato® provides rapid and long-lasting relief from treatment-resistant depression. Self-administered with a nasal spray under professional supervision.',
		'link_text'   => 'Read More →',
		'link_url'    => '/treatments/spravato-therapy/',
	],
];
?>

<section class="py-20 bg-[#f2f6f8]">
	<div class="container mx-auto">

		<div class="grid md:grid-cols-3 gap-8">

			<?php if ( $cards ) : ?>

				<?php foreach ( $cards as $card ) :
					$img       = $card['image'];
					$img_url   = $img ? esc_url( $img['url'] ) : '';
					$img_alt   = $img ? esc_attr( $img['alt'] ) : '';
					$title     = esc_html( $card['title'] );
					$desc      = esc_html( $card['description'] );
					$lnk_text  = esc_html( $card['link_text'] ?: 'Read More →' );
					$lnk_url   = esc_url( $card['link_url'] ?: '#' );
				?>
				<div class="bg-white rounded-2xl overflow-hidden" style="box-shadow: 0 2px 12px rgba(0,0,0,0.07);">
					<?php if ( $img_url ) : ?>
					<img src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>" class="w-full object-cover" style="height: 220px;">
					<?php endif; ?>
					<div class="p-6">
						<h2 class="text-xl font-bold mb-3 text-[#1a4a5a]"><?php echo $title; ?></h2>
						<p class="text-sm mb-5 text-[#6b7280]"><?php echo $desc; ?></p>
						<a href="<?php echo $lnk_url; ?>" class="font-semibold text-[#3395ac]"><?php echo $lnk_text; ?></a>
					</div>
				</div>
				<?php endforeach; ?>

			<?php else : ?>

				<?php foreach ( $fallback_cards as $card ) : ?>
				<div class="bg-white rounded-2xl overflow-hidden" style="box-shadow: 0 2px 12px rgba(0,0,0,0.07);">
					<img src="<?php echo esc_url( $card['image_url'] ); ?>" alt="<?php echo esc_attr( $card['image_alt'] ); ?>" class="w-full object-cover" style="height: 220px;">
					<div class="p-6">
						<h2 class="text-xl font-bold mb-3 text-[#1a4a5a]"><?php echo $card['title']; ?></h2>
						<p class="text-sm mb-5 text-[#6b7280]"><?php echo esc_html( $card['description'] ); ?></p>
						<a href="<?php echo esc_url( $card['link_url'] ); ?>" class="font-semibold text-[#3395ac]"><?php echo esc_html( $card['link_text'] ); ?></a>
					</div>
				</div>
				<?php endforeach; ?>

			<?php endif; ?>

		</div>

		<?php if ( $view_more_label ) : ?>
		<div class="text-center mt-10">
			<a href="<?php echo esc_url( $view_more_url ); ?>" class="inline-block font-semibold px-8 py-3 rounded-full border-2 transition border-[#3395ac] text-[#3395ac] hover:bg-[#3395ac] hover:text-white">
				<?php echo esc_html( $view_more_label ); ?>
			</a>
		</div>
		<?php endif; ?>

	</div>
</section>
