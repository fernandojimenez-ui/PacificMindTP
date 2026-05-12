<?php
/**
 * Module: Homepage — Reviews
 * Used on: Homepage / Front Page
 */

$shortcode = get_sub_field( 'shortcode' ) ?: '[trustindex data-widget-id="8a53eaa2775901942c7629b0164"]';
?>

<?php if ( $shortcode ) : ?>
<section class="py-20 bg-white">
	<div class="container mx-auto">
		<?php echo do_shortcode( wp_kses_post( $shortcode ) ); ?>
	</div>
</section>
<?php endif; ?>
