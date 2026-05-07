<?php
$_bg         = get_sub_field( 'flp_hero_bg_image' );
$bg_url      = $_bg ? $_bg['url'] : '';
$headline    = get_sub_field( 'flp_hero_headline' )    ?: '';
$subheadline = get_sub_field( 'flp_hero_subheadline' ) ?: '';
$body        = get_sub_field( 'flp_hero_body' )        ?: '';
$ctas        = get_sub_field( 'flp_hero_ctas' )        ?: [];
?>
<section class="ilwu-hero" aria-label="Hero">
    <?php if ( $bg_url ) : ?>
    <div class="ilwu-hero__bg" style="background-image: url('<?php echo esc_url( $bg_url ); ?>');"></div>
    <?php endif; ?>
    <div class="ilwu-hero__overlay"></div>
    <div class="ilwu-container ilwu-hero__content">
        <div class="ilwu-hero__text">
            <?php if ( $headline ) : ?>
            <h1 class="ilwu-hero__headline"><?php echo wp_kses_post( $headline ); ?></h1>
            <?php endif; ?>
            <?php if ( $subheadline ) : ?>
            <h2><?php echo esc_html( $subheadline ); ?></h2>
            <?php endif; ?>
            <?php if ( $body ) : ?>
            <p class="gad-hero__body"><?php echo wp_kses_post( $body ); ?></p>
            <?php endif; ?>
            <?php if ( $ctas ) : ?>
            <div class="ilwu-hero__ctas">
                <?php foreach ( $ctas as $cta ) : ?>
                <a href="<?php echo esc_url( $cta['flp_hero_cta_url'] ); ?>" class="ilwu-btn ilwu-btn--<?php echo esc_attr( $cta['flp_hero_cta_style'] ?: 'white' ); ?>">
                    <?php echo esc_html( $cta['flp_hero_cta_label'] ); ?>
                </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="ilwu-hero__wave" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 70" preserveAspectRatio="none">
            <path d="M0,35 C360,70 1080,0 1440,35 L1440,70 L0,70 Z" fill="#ffffff"/>
        </svg>
    </div>
</section>
