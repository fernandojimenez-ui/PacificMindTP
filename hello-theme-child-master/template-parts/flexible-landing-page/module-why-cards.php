<?php
$title         = get_sub_field( 'flp_why_title' )         ?: '';
$intro         = get_sub_field( 'flp_why_intro' )         ?: '';
$cards         = get_sub_field( 'flp_why_cards' )         ?: [];
$coverage_note = get_sub_field( 'flp_why_coverage_note' ) ?: '';
?>
<section class="ilwu-why" aria-label="Why choose us">
    <div class="ilwu-container">
        <?php if ( $title ) : ?>
        <h2 class="ilwu-section-title reveal"><?php echo esc_html( $title ); ?></h2>
        <?php endif; ?>
        <?php if ( $intro ) : ?>
        <p class="ilwu-section-intro reveal"><?php echo esc_html( $intro ); ?></p>
        <?php endif; ?>
        <div class="ilwu-why__grid">
            <?php foreach ( $cards as $card ) :
                $_icon    = $card['flp_why_card_icon'];
                $icon_url = $_icon ? $_icon['url'] : '';
                $icon_alt = $_icon ? $_icon['alt'] : '';
            ?>
            <div class="ilwu-why-card reveal">
                <?php if ( $icon_url ) : ?>
                <div class="ilwu-why-card__icon-wrap" aria-hidden="true">
                    <img src="<?php echo esc_url( $icon_url ); ?>" alt="<?php echo esc_attr( $icon_alt ); ?>" style="width:100%;height:100%;object-fit:contain;">
                </div>
                <?php endif; ?>
                <div>
                    <h3 class="ilwu-why-card__title"><?php echo wp_kses_post( $card['flp_why_card_title'] ); ?></h3>
                    <p class="ilwu-why-card__body"><?php echo esc_html( $card['flp_why_card_body'] ); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php if ( $coverage_note ) : ?>
        <div class="ilwu-coverage-note reveal">
            <svg class="ilwu-coverage-note__icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div><?php echo wp_kses_post( $coverage_note ); ?></div>
        </div>
        <?php endif; ?>
    </div>
</section>
