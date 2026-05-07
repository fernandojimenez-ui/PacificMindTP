<?php
$title = get_sub_field( 'flp_locations_title' ) ?: '';
$intro = get_sub_field( 'flp_locations_intro' ) ?: '';
$cards = get_sub_field( 'flp_locations_cards' ) ?: [];
?>
<section class="ilwu-locations" aria-label="Our locations">
    <div class="ilwu-container">
        <?php if ( $title ) : ?>
        <h2 class="ilwu-section-title reveal"><?php echo esc_html( $title ); ?></h2>
        <?php endif; ?>
        <?php if ( $intro ) : ?>
        <p class="ilwu-section-intro reveal"><?php echo esc_html( $intro ); ?></p>
        <?php endif; ?>
        <div class="ilwu-locations__grid">
            <?php foreach ( $cards as $loc ) :
                $directions_url = 'https://maps.google.com/maps?daddr=' . urlencode( wp_strip_all_tags( $loc['flp_loc_address'] ) );
            ?>
            <div class="ilwu-location-card reveal">
                <iframe
                    class="ilwu-location-card__map"
                    src="<?php echo esc_url( $loc['flp_loc_map_url'] ); ?>"
                    title="<?php echo esc_attr( $loc['flp_loc_name'] ); ?> location"
                    loading="lazy"
                    allowfullscreen
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="ilwu-location-card__info">
                    <h3 class="ilwu-location-card__name">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1 1 12 6a2.5 2.5 0 0 1 0 5.5z" fill="currentColor"/></svg>
                        <?php echo esc_html( $loc['flp_loc_name'] ); ?>
                    </h3>
                    <p class="ilwu-location-card__address"><?php echo wp_kses_post( $loc['flp_loc_address'] ); ?></p>
                    <div class="ilwu-location-card__hours">
                        <p class="ilwu-location-card__hours-label">Opening Hours</p>
                        <div class="ilwu-location-card__hours-row"><span>Monday &ndash; Friday</span><span><?php echo wp_kses_post( $loc['flp_loc_hrs_weekday'] ); ?></span></div>
                        <div class="ilwu-location-card__hours-row"><span>Saturday</span><span><?php echo esc_html( $loc['flp_loc_hrs_saturday'] ); ?></span></div>
                        <div class="ilwu-location-card__hours-row"><span>Sunday</span><span><?php echo esc_html( $loc['flp_loc_hrs_sunday'] ); ?></span></div>
                    </div>
                    <a href="<?php echo esc_url( $directions_url ); ?>" target="_blank" rel="noopener noreferrer" class="ilwu-location-card__directions">Get Directions</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
