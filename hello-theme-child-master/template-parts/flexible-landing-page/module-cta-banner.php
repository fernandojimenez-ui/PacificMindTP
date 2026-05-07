<?php
$headline = get_sub_field( 'flp_cta_headline' ) ?: '';
$subtext  = get_sub_field( 'flp_cta_subtext' )  ?: '';
$buttons  = get_sub_field( 'flp_cta_buttons' )  ?: [];
?>
<section class="ilwu-cta-banner" aria-label="Call to action">
    <div class="ilwu-container ilwu-cta-banner__content">
        <?php if ( $headline ) : ?>
        <h2 class="ilwu-cta-banner__headline reveal"><?php echo esc_html( $headline ); ?></h2>
        <?php endif; ?>
        <?php if ( $subtext ) : ?>
        <div class="ilwu-cta-banner__subtext reveal"><?php echo wp_kses_post( $subtext ); ?></div>
        <?php endif; ?>
        <?php if ( $buttons ) : ?>
        <div class="ilwu-cta-banner__buttons reveal">
            <?php foreach ( $buttons as $btn ) : ?>
            <a href="<?php echo esc_url( $btn['flp_cta_btn_url'] ); ?>" class="ilwu-btn ilwu-btn--<?php echo esc_attr( $btn['flp_cta_btn_style'] ?: 'white' ); ?>">
                <?php echo esc_html( $btn['flp_cta_btn_label'] ); ?>
            </a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
