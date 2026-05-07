<?php
$title     = get_sub_field( 'flp_testimonials_title' )     ?: 'What Our Patients Say';
$shortcode = get_sub_field( 'flp_testimonials_shortcode' ) ?: '[trustindex no-registration=google]';
?>
<section class="ilwu-testimonials" aria-label="Patient testimonials">
    <div class="ilwu-container">
        <?php if ( $title ) : ?>
        <h2 class="ilwu-section-title reveal"><?php echo esc_html( $title ); ?></h2>
        <?php endif; ?>
        <?php if ( $shortcode ) : ?>
        <?php echo do_shortcode( wp_kses_post( $shortcode ) ); ?>
        <?php endif; ?>
    </div>
</section>
