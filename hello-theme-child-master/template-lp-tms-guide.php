<?php
/**
 * Template Name: LP - TMS Guide Download
 * Pacific Mind Health — TMS Guide Download Landing Page
 */

@ini_set( 'display_errors', 0 );
error_reporting( 0 );

wp_enqueue_style( 'pmh-lp-ilwu',      get_stylesheet_directory_uri() . '/css/template-lp-ilwu.css',      [],              '1.0.0' );
wp_enqueue_style( 'pmh-lp-tms-guide', get_stylesheet_directory_uri() . '/css/template-lp-tms-guide.css', ['pmh-lp-ilwu'], '1.0.0' );

get_header();
?>

<main class="ilwu-lp tms-guide-lp" id="main-content">

    <section class="tms-hero" aria-label="TMS Guide Download">
        <div class="tms-hero__bg" style="background-image: url('https://pacificmindhealth.com/wp-content/uploads/TMSS-min-scaled-1.webp');"></div>
        <div class="tms-hero__overlay"></div>

        <div class="ilwu-container tms-hero__content">

            <div class="tms-hero__top">
                <div class="tms-hero__text">
                    <p class="tms-hero__eyebrow">Free Download</p>
                    <h1 class="tms-hero__headline">Is TMS Right for You?</h1>
                    <p class="tms-hero__body">If you've tried antidepressants without relief or are looking for alternatives, this free guide will walk you through everything you need to know about transcranial magnetic stimulation (TMS).</p>
                </div>
                <div class="tms-hero__image">
                    <img src="https://243525362.fs1.hubspotusercontent-na2.net/hubfs/243525362/ILWU/Free%20TMS%20Guide%20LP%20Image%20(2).png" alt="Is TMS Right for You? Free Guide" loading="eager">
                </div>
            </div>

            <div class="tms-hero__form">
                <script src="https://js-na2.hsforms.net/forms/embed/243525362.js" defer></script>
                <div class="hs-form-frame" data-region="na2" data-form-id="f8bffebb-823a-4e3b-836b-c773f14b6f07" data-portal-id="243525362"></div>
            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>
