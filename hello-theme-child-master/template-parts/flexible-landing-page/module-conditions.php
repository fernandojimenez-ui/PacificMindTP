<?php
$_bg         = get_sub_field( 'flp_conditions_bg_image' );
$bg_url      = $_bg ? $_bg['url'] : '';
$headline    = get_sub_field( 'flp_conditions_headline' )    ?: '';
$intro       = get_sub_field( 'flp_conditions_intro' )       ?: '';
$tags        = get_sub_field( 'flp_conditions_tags' )        ?: [];
$online_text = get_sub_field( 'flp_conditions_online_text' ) ?: '';
$_img        = get_sub_field( 'flp_conditions_image' );
$img_url     = $_img ? $_img['url'] : '';
$img_alt     = $_img ? $_img['alt'] : '';
$has_image   = (bool) $img_url;
?>
<section class="ilwu-conditions" aria-label="Conditions we treat">
    <?php if ( $bg_url ) : ?>
    <div class="ilwu-conditions__bg" style="background-image: url('<?php echo esc_url( $bg_url ); ?>');"></div>
    <?php endif; ?>
    <div class="ilwu-conditions__overlay"></div>
    <div class="ilwu-wave ilwu-wave--into-teal" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
            <path d="M0,30 C480,60 960,0 1440,30 L1440,0 L0,0 Z" fill="#ffffff"/>
        </svg>
    </div>

    <?php if ( $has_image ) : ?>
    <div class="ilwu-container ilwu-conditions__inner">
        <div class="ilwu-conditions__content">
    <?php else : ?>
    <div class="ilwu-container gad-conditions__inner">
    <?php endif; ?>

            <?php if ( $headline ) : ?>
            <h2 class="ilwu-conditions__headline reveal"><?php echo esc_html( $headline ); ?></h2>
            <?php endif; ?>
            <?php if ( $intro ) : ?>
            <p class="ilwu-conditions__intro reveal"><?php echo esc_html( $intro ); ?></p>
            <?php endif; ?>
            <?php if ( $tags ) : ?>
            <ul class="ilwu-conditions__tags reveal" role="list">
                <?php foreach ( $tags as $tag ) :
                    $tag_url   = ! empty( $tag['flp_conditions_tag_url'] )   ? $tag['flp_conditions_tag_url']   : '';
                    $tag_label = ! empty( $tag['flp_conditions_tag_label'] ) ? $tag['flp_conditions_tag_label'] : '';
                ?>
                <li class="ilwu-conditions__tag">
                    <?php if ( $tag_url ) : ?>
                        <a href="<?php echo esc_url( $tag_url ); ?>"><?php echo wp_kses_post( $tag_label ); ?></a>
                    <?php else : ?>
                        <?php echo wp_kses_post( $tag_label ); ?>
                    <?php endif; ?>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            <?php if ( $online_text ) : ?>
            <p class="ilwu-conditions__online reveal">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                    <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10A15.3 15.3 0 0 1 12 2z" stroke="currentColor" stroke-width="2"/>
                </svg>
                <?php echo esc_html( $online_text ); ?>
            </p>
            <?php endif; ?>

    <?php if ( $has_image ) : ?>
        </div>
        <div class="ilwu-conditions__image reveal">
            <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>" loading="lazy">
        </div>
    <?php endif; ?>
    </div>

    <div class="ilwu-wave ilwu-wave--out-of-teal" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
            <path d="M0,30 C480,0 960,60 1440,30 L1440,60 L0,60 Z" fill="#ffffff"/>
        </svg>
    </div>
</section>
