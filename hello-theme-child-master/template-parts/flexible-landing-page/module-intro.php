<?php
$title     = get_sub_field( 'flp_intro_title' )     ?: '';
$_img      = get_sub_field( 'flp_intro_image' );
$img_url   = $_img ? $_img['url'] : '';
$img_alt   = $_img ? $_img['alt'] : '';
$body      = get_sub_field( 'flp_intro_body' )      ?: '';
$cta_label = get_sub_field( 'flp_intro_cta_label' ) ?: '';
$cta_url   = get_sub_field( 'flp_intro_cta_url' )   ?: '';
?>
<section class="ilwu-intro" aria-label="About">
    <?php if ( $title ) : ?>
    <div class="ilwu-container">
        <h2 class="ilwu-section-title reveal"><?php echo esc_html( $title ); ?></h2>
    </div>
    <?php endif; ?>
    <div class="ilwu-container ilwu-intro__inner">
        <?php if ( $img_url ) : ?>
        <div class="ilwu-intro__image reveal">
            <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>" loading="lazy">
        </div>
        <?php endif; ?>
        <div class="ilwu-intro__body reveal">
            <?php echo wp_kses_post( $body ); ?>
            <?php if ( $cta_label && $cta_url ) : ?>
            <a href="<?php echo esc_url( $cta_url ); ?>" class="ilwu-btn ilwu-btn--primary ilwu-intro__cta"><?php echo esc_html( $cta_label ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
