<?php
$eyebrow   = get_sub_field( 'flp_treatments_eyebrow' )   ?: '';
$heading   = get_sub_field( 'flp_treatments_heading' )   ?: '';
$intro     = get_sub_field( 'flp_treatments_intro' )     ?: '';
$cards     = get_sub_field( 'flp_treatments_cards' )     ?: [];
$cta_label = get_sub_field( 'flp_treatments_cta_label' ) ?: '';
$cta_url   = get_sub_field( 'flp_treatments_cta_url' )   ?: '';
?>
<section class="ilwu-treatments" aria-label="Our treatment services">
    <div class="ilwu-container">
        <?php if ( $eyebrow || $heading || $intro ) : ?>
        <div class="ilwu-treatments__header reveal">
            <?php if ( $eyebrow ) : ?>
            <p class="ilwu-treatments__eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
            <?php endif; ?>
            <?php if ( $heading ) : ?>
            <h2 class="ilwu-treatments__heading"><?php echo esc_html( $heading ); ?></h2>
            <?php endif; ?>
            <?php if ( $intro ) : ?>
            <p class="gad-treatments__intro"><?php echo wp_kses_post( $intro ); ?></p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <div class="ilwu-treatments__grid">
            <?php foreach ( $cards as $card ) :
                $_img     = $card['flp_treat_image'];
                $img_url  = $_img ? $_img['url'] : '';
                $img_alt  = $_img ? $_img['alt'] : '';
                $sub_list = $card['flp_treat_sub_list'] ?? '';
            ?>
            <article class="ilwu-treatment-card reveal">
                <?php if ( $img_url ) : ?>
                <div class="ilwu-treatment-card__image">
                    <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>" loading="lazy">
                </div>
                <?php endif; ?>
                <div class="ilwu-treatment-card__body">
                    <h3 class="ilwu-treatment-card__title"><?php echo wp_kses_post( $card['flp_treat_title'] ); ?></h3>
                    <p class="ilwu-treatment-card__desc"><?php echo esc_html( $card['flp_treat_desc'] ); ?></p>
                    <?php if ( $sub_list ) : ?>
                    <div class="gad-sub-list-wrap"><?php echo wp_kses_post( $sub_list ); ?></div>
                    <?php endif; ?>
                    <?php if ( ! empty( $card['flp_treat_link_url'] ) ) : ?>
                    <a href="<?php echo esc_url( $card['flp_treat_link_url'] ); ?>" class="ilwu-treatment-card__link">
                        <?php echo wp_kses_post( ! empty( $card['flp_treat_link_label'] ) ? $card['flp_treat_link_label'] : 'Learn More &rarr;' ); ?>
                    </a>
                    <?php endif; ?>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
        <?php if ( $cta_label && $cta_url ) : ?>
        <div class="ilwu-locations__cta reveal">
            <a href="<?php echo esc_url( $cta_url ); ?>" class="ilwu-btn ilwu-btn--primary"><?php echo esc_html( $cta_label ); ?></a>
        </div>
        <?php endif; ?>
    </div>
</section>
