<?php
$title    = get_sub_field( 'flp_challenges_title' )        ?: '';
$intro    = get_sub_field( 'flp_challenges_intro' )        ?: '';
$cards    = get_sub_field( 'flp_challenges_cards' )        ?: [];
$_bimg    = get_sub_field( 'flp_challenges_bottom_image' );
$bimg_url = $_bimg ? $_bimg['url'] : '';
$bimg_alt = $_bimg ? $_bimg['alt'] : '';
$note     = get_sub_field( 'flp_challenges_note' )         ?: '';

$icons = [
    '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
    '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="4" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/><path d="M16 2v4M8 2v4M3 10h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
    '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 8v4M12 16h.01" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
    '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="8" r="4" stroke="currentColor" stroke-width="2"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
];
?>
<section class="ilwu-challenges" aria-label="Challenges">
    <div class="ilwu-container">
        <?php if ( $title ) : ?>
        <h2 class="ilwu-section-title reveal"><?php echo wp_kses_post( $title ); ?></h2>
        <?php endif; ?>
        <?php if ( $intro ) : ?>
        <p class="ilwu-section-intro reveal"><?php echo esc_html( $intro ); ?></p>
        <?php endif; ?>
        <?php if ( $cards ) : ?>
        <div class="ilwu-challenges__grid">
            <?php foreach ( $cards as $i => $card ) :
                $icon = $icons[ $i ] ?? $icons[0]; ?>
            <div class="ilwu-challenge-card reveal">
                <div class="ilwu-challenge-card__icon" aria-hidden="true">
                    <?php echo $icon; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped — trusted SVG ?>
                </div>
                <div>
                    <h3 class="ilwu-challenge-card__title"><?php echo wp_kses_post( $card['flp_chall_title'] ); ?></h3>
                    <p class="ilwu-challenge-card__body"><?php echo esc_html( $card['flp_chall_body'] ); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <?php if ( $bimg_url || $note ) : ?>
        <div class="ilwu-challenges__bottom reveal">
            <?php if ( $bimg_url ) : ?>
            <div class="ilwu-challenges__image">
                <img src="<?php echo esc_url( $bimg_url ); ?>" alt="<?php echo esc_attr( $bimg_alt ); ?>" loading="lazy">
            </div>
            <?php endif; ?>
            <?php if ( $note ) : ?>
            <div class="ilwu-challenges__note">
                <p><?php echo esc_html( $note ); ?></p>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
