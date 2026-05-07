<?php
/**
 * Template Name: Flexible Landing Page
 * Pacific Mind Health — ACF Flexible Content Landing Page
 */

@ini_set( 'display_errors', 0 );
error_reporting( 0 );

wp_enqueue_style( 'pmh-lp-ilwu',       get_stylesheet_directory_uri() . '/css/template-lp-ilwu.css',       [],              '1.0.0' );
wp_enqueue_style( 'pmh-lp-general-ad', get_stylesheet_directory_uri() . '/css/template-lp-general-ad.css', ['pmh-lp-ilwu'], '1.0.0' );

get_header();
?>

<main class="ilwu-lp flp" id="main-content">

<?php
$layout_map = [
    'hero'         => 'module-hero',
    'intro'        => 'module-intro',
    'insurance'    => 'module-insurance',
    'why_cards'    => 'module-why-cards',
    'conditions'   => 'module-conditions',
    'challenges'   => 'module-challenges',
    'treatments'   => 'module-treatments',
    'testimonials' => 'module-testimonials',
    'locations'    => 'module-locations',
    'cta_banner'    => 'module-cta-banner',
    'global_module' => 'module-global-module',
];

if ( have_rows( 'flexible_landing_page_sections' ) ) :
    while ( have_rows( 'flexible_landing_page_sections' ) ) : the_row();
        $layout = get_row_layout();
        if ( isset( $layout_map[ $layout ] ) ) {
            get_template_part( 'template-parts/flexible-landing-page/' . $layout_map[ $layout ] );
        }
    endwhile;
endif;
?>

</main>

<script>
(function () {
    var els = document.querySelectorAll('.flp .reveal');
    if (!('IntersectionObserver' in window)) {
        els.forEach(function (el) { el.classList.add('revealed'); });
        return;
    }
    var obs = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    els.forEach(function (el) { obs.observe(el); });
}());
</script>

<?php get_footer(); ?>
