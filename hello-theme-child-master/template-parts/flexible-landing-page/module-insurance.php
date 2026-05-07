<?php
$title       = get_sub_field( 'flp_insurance_title' )       ?: '';
$intro       = get_sub_field( 'flp_insurance_intro' )       ?: '';
$logos       = get_sub_field( 'flp_insurance_logos' )       ?: [];
$coming_soon = get_sub_field( 'flp_insurance_coming_soon' ) ?: '';
?>
<section class="ilwu-insurance" aria-label="Insurance coverage">
    <div class="ilwu-container">
        <?php if ( $title ) : ?>
        <h2 class="ilwu-section-title reveal"><?php echo esc_html( $title ); ?></h2>
        <?php endif; ?>
        <?php if ( $intro ) : ?>
        <p class="ilwu-section-intro reveal"><?php echo wp_kses_post( $intro ); ?></p>
        <?php endif; ?>
        <?php if ( $logos ) : ?>
        <ul class="ilwu-insurance__grid" role="list">
            <?php foreach ( $logos as $row ) :
                $logo = $row['flp_insurance_logo_img'];
                if ( ! $logo ) continue; ?>
            <li><span class="ilwu-insurance__logo"><img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" loading="lazy"></span></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <?php if ( $coming_soon ) : ?>
        <p class="ilwu-insurance__coming-soon"><?php echo esc_html( $coming_soon ); ?></p>
        <?php endif; ?>
    </div>
</section>
