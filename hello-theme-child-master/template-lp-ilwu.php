<?php
/**
 * Template Name: LP - ILWU
 * Pacific Mind Health, ILWU Member Landing Page
 */

@ini_set( 'display_errors', 0 );
error_reporting( 0 );

wp_enqueue_style( 'pmh-lp-ilwu', get_stylesheet_directory_uri() . '/css/template-lp-ilwu.css', [], '1.0.0' );

// ── HERO ──────────────────────────────────────────────────────────────────────
$_hero_bg         = get_field( 'ilwu_hero_bg_image' );
$hero_bg_url      = $_hero_bg ? $_hero_bg['url'] : 'https://pacificmindhealth.com/wp-content/uploads/image-1-1.png';
$hero_eyebrow     = get_field( 'ilwu_hero_eyebrow' )     ?: 'Pacific Mind Health';
$hero_headline    = get_field( 'ilwu_hero_headline' )    ?: 'Premiere Mental Health Treatment &amp; Support for International Longshore and Warehouse Union Members';
$hero_subheadline = get_field( 'ilwu_hero_subheadline' ) ?: '100% Coverage &nbsp;&middot;&nbsp; Immediate Care &nbsp;&middot;&nbsp; Evidence-Based';
$hero_cta1_label  = get_field( 'ilwu_hero_cta1_label' )  ?: 'Schedule Now';
$hero_cta1_url    = get_field( 'ilwu_hero_cta1_url' )    ?: 'https://pacificmindhealth.com/new-patient/?hsLang=en';
$hero_cta2_label  = get_field( 'ilwu_hero_cta2_label' )  ?: 'Call Us: 310-571-5041';
$hero_cta2_url    = get_field( 'ilwu_hero_cta2_url' )    ?: 'tel:3105715041';
$_hero_fg         = get_field( 'ilwu_hero_fg_image' );
$hero_fg_url      = $_hero_fg ? $_hero_fg['url'] : 'https://pacificmindhealth.com/wp-content/uploads/Union-Workers-16.jpg';
$hero_fg_alt      = $_hero_fg ? $_hero_fg['alt'] : 'Mental health care for ILWU members';

// ── TRUST BAR ─────────────────────────────────────────────────────────────────
$trust_items = get_field( 'ilwu_trust_items' ) ?: [
	[ 'ilwu_trust_icon' => '✓',  'ilwu_trust_text' => '100% Coverage' ],
	[ 'ilwu_trust_icon' => '⚡', 'ilwu_trust_text' => 'Immediate Care' ],
	[ 'ilwu_trust_icon' => '◎',  'ilwu_trust_text' => 'Evidence-Based' ],
];

// ── INTRO / ABOUT ─────────────────────────────────────────────────────────────
$intro_title   = get_field( 'ilwu_intro_title' ) ?: 'Care that Works as Hard as You Do';
$_intro_img    = get_field( 'ilwu_intro_image' );
$intro_img_url = $_intro_img ? $_intro_img['url'] : 'https://pacificmindhealth.com/wp-content/uploads/Union-Workers-18.png';
$intro_img_alt = $_intro_img ? $_intro_img['alt'] : 'ILWU mental health care';
$intro_body    = get_field( 'ilwu_intro_body' );
if ( ! $intro_body ) {
	$intro_body = '<p>Working at the port is both physically and mentally demanding, with long hours and high-pressure conditions. While the work brings pride and purpose, it can also contribute to stress, anxiety, and depression.</p>'
		. '<p>Pacific Mind Health provides outpatient mental health care for International Longshore and Warehouse Union members and their families across California. Our goal is to help you access the support you need as quickly as possible, with care that fits your life, your schedule, and your needs.</p>'
		. '<p>Take the next step. Call <a href="tel:3105715041">310-571-5041</a> or email <a href="mailto:contact@pacificmindhealth.com">contact@pacificmindhealth.com</a>.</p>';
}
$intro_cta_label = get_field( 'ilwu_intro_cta_label' ) ?: 'Schedule Now';
$intro_cta_url   = get_field( 'ilwu_intro_cta_url' )   ?: 'https://pacificmindhealth.com/new-patient/?hsLang=en';

// ── INSURANCE ─────────────────────────────────────────────────────────────────
$insurance_title  = get_field( 'ilwu_insurance_title' ) ?: 'Your ILWU Benefits Cover Care 100%';
$insurance_intro  = get_field( 'ilwu_insurance_intro' );
if ( ! $insurance_intro ) {
	$insurance_intro = '<p>Your ILWU insurance covers copays, deductibles, and coinsurance, so you can access treatment with <strong>zero out-of-pocket costs</strong>.</p>';
}
$insurance_logos = get_field( 'ilwu_insurance_logos' );

// ── HOW WE HELP ───────────────────────────────────────────────────────────────
$why_title = get_field( 'ilwu_why_title' ) ?: 'How Pacific Mind Health Can Help';
$why_intro = get_field( 'ilwu_why_intro' ) ?: 'We understand the unique challenges faced by longshore and port workers and use a &ldquo;whole-person&rdquo; approach that goes beyond just a prescription.';
$why_cards = get_field( 'ilwu_why_cards' ) ?: [
	[ 'ilwu_why_card_title' => '100% Coverage',          'ilwu_why_card_body' => 'Services are fully covered for ILWU members and their families.' ],
	[ 'ilwu_why_card_title' => 'Fast Access to Care',    'ilwu_why_card_body' => 'Immediate appointment availability.' ],
	[ 'ilwu_why_card_title' => 'In-Person or Online',    'ilwu_why_card_body' => 'Get convenient care in a way that works for you.' ],
	[ 'ilwu_why_card_title' => 'Evidence-Based Therapy', 'ilwu_why_card_body' => 'Treatment options are tailored to your specific needs.' ],
	[ 'ilwu_why_card_title' => 'Compassionate Care',     'ilwu_why_card_body' => 'Coordinated, ongoing support keeps you moving forward.' ],
];
$coverage_note = get_field( 'ilwu_coverage_note' );
if ( ! $coverage_note ) {
	$coverage_note = '<p>Your ILWU insurance benefits cover the full cost of care &ndash; including copays, deductibles, and coinsurance. <strong>No out-of-pocket costs.</strong></p>';
}

// SVG icons for the "Why" cards (indexed by position 0–4)
$why_icons = [
	'<img src="https://pacificmindhealth.com/wp-content/uploads/Insurance-Coverage.png" alt="100% Coverage" style="width:100%;height:100%;object-fit:contain;">',
	'<img src="https://pacificmindhealth.com/wp-content/uploads/Fast-Access.png" alt="Fast Access to Care" style="width:100%;height:100%;object-fit:contain;">',
	'<img src="https://pacificmindhealth.com/wp-content/uploads/Online-Telehealth.png" alt="In-Person or Online" style="width:100%;height:100%;object-fit:contain;">',
	'<img src="https://pacificmindhealth.com/wp-content/uploads/Evidence.png" alt="Evidence-Based Therapy" style="width:100%;height:100%;object-fit:contain;">',
	'<img src="https://pacificmindhealth.com/wp-content/uploads/Compassionate.png" alt="Compassionate Care" style="width:100%;height:100%;object-fit:contain;">',
];

// ── CONDITIONS ────────────────────────────────────────────────────────────────
$_cond_bg       = get_field( 'ilwu_conditions_bg_image' );
$cond_bg_url    = $_cond_bg ? $_cond_bg['url'] : home_url( '/wp-content/uploads/pexels-flo-dahm-458917.jpg.webp' );
$cond_headline  = get_field( 'ilwu_conditions_headline' )    ?: 'ILWU-Focused Treatment Options';
$cond_intro     = get_field( 'ilwu_conditions_intro' )       ?: 'We help ILWU members and their families manage a wide range of mental health conditions, available in-person and online across all of California.';
$cond_tags      = get_field( 'ilwu_conditions_tags' ) ?: [
	[ 'ilwu_ctag_label' => 'Depression',             'ilwu_ctag_url' => home_url( '/what-we-treat/depression-treatments/' ) ],
	[ 'ilwu_ctag_label' => 'Anxiety',                'ilwu_ctag_url' => home_url( '/what-we-treat/anxiety-treatments/' ) ],
	[ 'ilwu_ctag_label' => 'PTSD &amp; Trauma',      'ilwu_ctag_url' => home_url( '/what-we-treat/trauma-ptsd/' ) ],
	[ 'ilwu_ctag_label' => 'Sleep Disorders',        'ilwu_ctag_url' => home_url( '/what-we-treat/sleep-disorder/' ) ],
	[ 'ilwu_ctag_label' => 'ADHD',                   'ilwu_ctag_url' => home_url( '/what-we-treat/adhd/' ) ],
	[ 'ilwu_ctag_label' => 'Bipolar Disorder',       'ilwu_ctag_url' => home_url( '/what-we-treat/bipolar-disorder/' ) ],
	[ 'ilwu_ctag_label' => 'Chronic Pain',           'ilwu_ctag_url' => home_url( '/what-we-treat/' ) ],
	[ 'ilwu_ctag_label' => 'Traumatic Brain Injury', 'ilwu_ctag_url' => home_url( '/what-we-treat/' ) ],
	[ 'ilwu_ctag_label' => 'Burnout &amp; Recovery', 'ilwu_ctag_url' => home_url( '/what-we-treat/' ) ],
	[ 'ilwu_ctag_label' => 'Addiction',              'ilwu_ctag_url' => home_url( '/what-we-treat/substance-use-disorder/' ) ],
	[ 'ilwu_ctag_label' => 'OCD',                    'ilwu_ctag_url' => home_url( '/what-we-treat/ocd/' ) ],
	[ 'ilwu_ctag_label' => 'Schizophrenia',          'ilwu_ctag_url' => home_url( '/what-we-treat/schizophrenia/' ) ],
];
$cond_online   = get_field( 'ilwu_conditions_online_text' ) ?: 'Online: Available anywhere in California';
$_cond_img     = get_field( 'ilwu_conditions_image' );
$cond_img_url  = $_cond_img ? $_cond_img['url'] : 'https://pacificmindhealth.com/wp-content/uploads/Union-Workers-17.jpg';
$cond_img_alt  = $_cond_img ? $_cond_img['alt'] : 'Mental health treatment options';

// ── CHALLENGES ────────────────────────────────────────────────────────────────
$chall_title = get_field( 'ilwu_challenges_title' ) ?: 'Unique Mental Health Challenges<br>Faced by Longshoremen';
$chall_intro = get_field( 'ilwu_challenges_intro' ) ?: "Life at the port comes with unique stressors that can impact mental health. You don't have to face them alone.";
$chall_cards = get_field( 'ilwu_challenges_cards' ) ?: [
	[ 'ilwu_chall_title' => 'High-Stress Environment', 'ilwu_chall_body' => 'Working under tight deadlines to load and unload cargo, coupled with the physical demands of the job, can lead to chronic stress that builds over time.' ],
	[ 'ilwu_chall_title' => 'Unpredictable Schedules', 'ilwu_chall_body' => 'Irregular hours, night shifts, and extended periods away from home disrupt sleep patterns and can strain personal relationships over time.' ],
	[ 'ilwu_chall_title' => 'Physical Risks &amp; Trauma', 'ilwu_chall_body' => 'Working with heavy machinery and hazardous conditions can lead to injuries, near-misses, and accidents, and the lasting psychological toll that follows.' ],
	[ 'ilwu_chall_title' => 'Isolation &amp; Loneliness', 'ilwu_chall_body' => 'Long hours at work or away from family can make it difficult to maintain strong social connections, a critical factor in long-term mental wellbeing.' ],
];
$_chall_bimg     = get_field( 'ilwu_challenges_bottom_image' );
$chall_bimg_url  = $_chall_bimg ? $_chall_bimg['url'] : 'https://pacificmindhealth.com/wp-content/uploads/Union-Workers-14.jpg';
$chall_bimg_alt  = $_chall_bimg ? $_chall_bimg['alt'] : 'ILWU mental health challenges';
$chall_note      = get_field( 'ilwu_challenges_note' ) ?: 'Mental health challenges are not a sign of weakness, but stigma can still make it hard to seek help. Reaching out is a proactive step toward improving your quality of life, maintaining your ability to work, and providing for your family.';

// SVG icons for the "Challenges" cards (indexed by position 0–3)
$challenge_icons = [
	'<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
	'<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="4" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/><path d="M16 2v4M8 2v4M3 10h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
	'<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 8v4M12 16h.01" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
	'<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="8" r="4" stroke="currentColor" stroke-width="2"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
];

// ── TREATMENTS ────────────────────────────────────────────────────────────────
$treat_eyebrow = get_field( 'ilwu_treatments_eyebrow' ) ?: 'What We Offer';
$treat_heading = get_field( 'ilwu_treatments_heading' ) ?: 'Our Treatment Services';
$treat_cards   = get_field( 'ilwu_treatments_cards' ) ?: [
	[
		'ilwu_treat_image'      => [ 'url' => home_url( '/wp-content/uploads/image_change_1_720.png.avif' ),                    'alt' => 'Psychiatry and Medication Management' ],
		'ilwu_treat_title'      => 'Psychiatry &amp; Medication Management',
		'ilwu_treat_desc'       => 'Our board-certified psychiatrists offer collaborative, evidence-based care, including pharmacogenomic testing to find the right medication with less trial and error.',
		'ilwu_treat_link_url'   => home_url( '/treatments/psychiatry/' ),
		'ilwu_treat_link_label' => 'Learn More &rarr;',
	],
	[
		'ilwu_treat_image'      => [ 'url' => home_url( '/wp-content/uploads/1G1A7318-2048x1365.jpg.avif' ),                    'alt' => 'Transcranial Magnetic Stimulation' ],
		'ilwu_treat_title'      => 'Transcranial Magnetic Stimulation (TMS)',
		'ilwu_treat_desc'       => 'A non-invasive, drug-free procedure using focused magnetic pulses to stimulate mood-regulating areas of the brain. FDA-approved for depression and treatment-resistant conditions.',
		'ilwu_treat_link_url'   => home_url( '/treatments/transcranial-magnetic-stimulation/' ),
		'ilwu_treat_link_label' => 'Learn More &rarr;',
	],
	[
		'ilwu_treat_image'      => [ 'url' => home_url( '/wp-content/uploads/Spravato.jpg' ),                                   'alt' => 'Spravato and Ketamine Therapy' ],
		'ilwu_treat_title'      => 'Spravato&reg; &amp; Ketamine Therapy',
		'ilwu_treat_desc'       => 'Rapid-acting treatments for treatment-resistant depression. FDA-approved Spravato nasal spray and evidence-based ketamine protocols administered under medical supervision.',
		'ilwu_treat_link_url'   => home_url( '/treatments/spravato-therapy/' ),
		'ilwu_treat_link_label' => 'Learn More &rarr;',
	],
	[
		'ilwu_treat_image'      => [ 'url' => home_url( '/wp-content/uploads/family-therapy-psychologist-office.jpg.avif' ),    'alt' => 'Therapy' ],
		'ilwu_treat_title'      => 'Therapy',
		'ilwu_treat_desc'       => 'Our therapists offer a range of options to help you work through challenges and build lasting change.',
		'ilwu_treat_link_url'   => home_url( '/treatments/psychotherapy/' ),
		'ilwu_treat_link_label' => 'Learn More &rarr;',
	],
	[
		'ilwu_treat_image'      => [ 'url' => home_url( '/wp-content/uploads/Screen-Shot-2023-07-12-at-1.40.10-PM.png.avif' ), 'alt' => 'ADHD Testing' ],
		'ilwu_treat_title'      => 'ADHD Testing',
		'ilwu_treat_desc'       => 'We combine a psychiatric evaluation with a neurological assessment to build personalized treatment plans.',
		'ilwu_treat_link_url'   => home_url( '/treatments/adhd-services/' ),
		'ilwu_treat_link_label' => 'Learn More &rarr;',
	],
	[
		'ilwu_treat_image'      => [ 'url' => home_url( '/wp-content/uploads/Spravato-Image.jpg.avif' ),                       'alt' => 'Pharmacogenomic Testing' ],
		'ilwu_treat_title'      => 'Pharmacogenomic Testing',
		'ilwu_treat_desc'       => 'A simple cheek swab analyzes your DNA to predict medication response and reduce the need for trial and error.',
		'ilwu_treat_link_url'   => home_url( '/treatments/pharmacogenomic-testing/' ),
		'ilwu_treat_link_label' => 'Learn More &rarr;',
	],
];

// ── TESTIMONIALS ──────────────────────────────────────────────────────────────
$test_title = get_field( 'ilwu_testimonials_title' ) ?: 'Hear From Our Patients';

// ── LOCATIONS ─────────────────────────────────────────────────────────────────
$loc_title = get_field( 'ilwu_locations_title' ) ?: 'Our Locations';
$loc_intro = get_field( 'ilwu_locations_intro' ) ?: 'Care close to where you live and work, in person at one of our California clinics, or online from anywhere in the state.';
$loc_cards = get_field( 'ilwu_locations_cards' ) ?: [
	[
		'ilwu_loc_name'         => 'Long Beach',
		'ilwu_loc_map_url'      => 'https://maps.google.com/maps?q=320+Pine+Ave+Suite+609+Long+Beach+CA+90802&ie=UTF8&iwloc=&output=embed',
		'ilwu_loc_address'      => '320 Pine Ave<br>Suite 609<br>Long Beach, CA 90802',
		'ilwu_loc_hrs_weekday'  => '8:00 AM &ndash; 6:00 PM',
		'ilwu_loc_hrs_saturday' => 'By appointment',
		'ilwu_loc_hrs_sunday'   => 'Closed',
	],
	[
		'ilwu_loc_name'         => 'Irvine',
		'ilwu_loc_map_url'      => 'https://maps.google.com/maps?q=16485+Laguna+Canyon+Road+Suite+110+Irvine+CA+92618&ie=UTF8&iwloc=&output=embed',
		'ilwu_loc_address'      => '16485 Laguna Canyon Road<br>Suite 110<br>Irvine, CA 92618',
		'ilwu_loc_hrs_weekday'  => '8:00 AM &ndash; 6:00 PM',
		'ilwu_loc_hrs_saturday' => 'By appointment',
		'ilwu_loc_hrs_sunday'   => 'Closed',
	],
	[
		'ilwu_loc_name'         => 'Los Angeles',
		'ilwu_loc_map_url'      => 'https://maps.google.com/maps?q=2211+Corinth+Ave+Suite+300+Los+Angeles+CA+90064&ie=UTF8&iwloc=&output=embed',
		'ilwu_loc_address'      => '2211 Corinth Ave<br>Suite 300<br>Los Angeles, CA 90064',
		'ilwu_loc_hrs_weekday'  => '8:00 AM &ndash; 6:00 PM',
		'ilwu_loc_hrs_saturday' => 'By appointment',
		'ilwu_loc_hrs_sunday'   => 'Closed',
	],
];

// ── CTA BANNER ────────────────────────────────────────────────────────────────
$cta_headline  = get_field( 'ilwu_cta_headline' )  ?: 'Take the Next Step Toward Better Mental Health';
$cta_subtext   = get_field( 'ilwu_cta_subtext' );
if ( ! $cta_subtext ) {
	$cta_subtext = '<p>ILWU members and their families have access to world-class mental health care at <strong>no out-of-pocket cost</strong>. Your benefits are there&mdash;let us help you use them.</p>';
}
$cta_btn_label = get_field( 'ilwu_cta_btn_label' ) ?: 'Schedule Now';
$cta_btn_url   = get_field( 'ilwu_cta_btn_url' )   ?: 'https://pacificmindhealth.com/new-patient/?hsLang=en';

get_header();
?>

<main class="ilwu-lp" id="main-content">

    <!-- =============================================
         SECTION 1: HERO
         ============================================= -->
    <section class="ilwu-hero" aria-label="Hero">
        <div class="ilwu-hero__bg" style="background-image: url('<?php echo esc_url( $hero_bg_url ); ?>');"></div>
        <div class="ilwu-hero__overlay"></div>
        <div class="ilwu-container ilwu-hero__content">
            <div class="ilwu-hero__text">
                <h1 class="ilwu-hero__headline"><?php echo wp_kses_post( $hero_headline ); ?></h1>
                <div class="ilwu-hero__ctas">
                    <a href="<?php echo esc_url( $hero_cta1_url ); ?>" class="ilwu-btn ilwu-btn--white"><?php echo esc_html( $hero_cta1_label ); ?></a>
                </div>
            </div>
        </div>
        <div class="ilwu-hero__wave" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 70" preserveAspectRatio="none">
                <path d="M0,35 C360,70 1080,0 1440,35 L1440,70 L0,70 Z" fill="#ffffff"/>
            </svg>
        </div>
    </section>


    <!-- =============================================
         SECTION 2b: INTRO / ABOUT
         ============================================= -->
    <section class="ilwu-intro" aria-label="About Pacific Mind Health ILWU care">
        <div class="ilwu-container">
            <h2 class="ilwu-section-title reveal"><?php echo esc_html( $intro_title ); ?></h2>
        </div>
        <div class="ilwu-container ilwu-intro__inner">
            <div class="ilwu-intro__image reveal">
                <img src="<?php echo esc_url( $intro_img_url ); ?>" alt="<?php echo esc_attr( $intro_img_alt ); ?>" loading="lazy">
            </div>
            <div class="ilwu-intro__body reveal">
                <?php echo wp_kses_post( $intro_body ); ?>
                <a href="<?php echo esc_url( $intro_cta_url ); ?>" class="ilwu-btn ilwu-btn--primary ilwu-intro__cta"><?php echo esc_html( $intro_cta_label ); ?></a>
            </div>
        </div>
    </section>

    <!-- =============================================
         SECTION 3: INSURANCE / COVERAGE
         ============================================= -->
    <section class="ilwu-insurance" aria-label="ILWU insurance coverage">
        <div class="ilwu-container">
            <h2 class="ilwu-section-title reveal"><?php echo esc_html( $insurance_title ); ?></h2>
            <p class="ilwu-section-intro reveal"><?php echo wp_kses_post( $insurance_intro ); ?></p>
            <ul class="ilwu-insurance__grid" role="list">
                <?php if ( $insurance_logos ) : ?>
                    <?php foreach ( $insurance_logos as $row ) :
                        $logo = $row['ilwu_logo_img'];
                        if ( ! $logo ) continue; ?>
                    <li><span class="ilwu-insurance__logo"><img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" loading="lazy"></span></li>
                    <?php endforeach; ?>
                <?php else : ?>
                    <li><span class="ilwu-insurance__logo"><img src="<?php echo esc_url( home_url( '/wp-content/uploads/anthem-logo.png.webp' ) ); ?>" alt="Anthem Blue Cross" loading="lazy"></span></li>
                    <li><span class="ilwu-insurance__logo"><img src="<?php echo esc_url( home_url( '/wp-content/uploads/blue-cross-blue-shield-1-logo-png-transparent.png.webp' ) ); ?>" alt="BlueCross BlueShield" loading="lazy"></span></li>
                    <li><span class="ilwu-insurance__logo"><img src="<?php echo esc_url( home_url( '/wp-content/uploads/Blue_Shield_of_California_logo.png.webp' ) ); ?>" alt="Blue Shield of California" loading="lazy"></span></li>
                    <li><span class="ilwu-insurance__logo"><img src="<?php echo esc_url( home_url( '/wp-content/uploads/aetna-logo.png.webp' ) ); ?>" alt="Aetna" loading="lazy"></span></li>
                    <li><span class="ilwu-insurance__logo"><img src="<?php echo esc_url( home_url( '/wp-content/uploads/United-Healthcare-Logo-2.png.webp' ) ); ?>" alt="United Healthcare" loading="lazy"></span></li>
                    <li><span class="ilwu-insurance__logo"><img src="<?php echo esc_url( home_url( '/wp-content/uploads/OPTUM-logo.png.webp' ) ); ?>" alt="Optum" loading="lazy"></span></li>
                    <li><span class="ilwu-insurance__logo"><img src="<?php echo esc_url( home_url( '/wp-content/uploads/US-TRICARE-Logo.png.webp' ) ); ?>" alt="TRICARE" loading="lazy"></span></li>
                    <li><span class="ilwu-insurance__logo"><img src="<?php echo esc_url( home_url( '/wp-content/uploads/ucla-health-logo.png.webp' ) ); ?>" alt="UCLA Health" loading="lazy"></span></li>
                    <li><span class="ilwu-insurance__logo"><img src="<?php echo esc_url( home_url( '/wp-content/uploads/carelon_sm_h_rgb_c.jpg.webp' ) ); ?>" alt="Carelon" loading="lazy"></span></li>
                    <li><span class="ilwu-insurance__logo"><img src="<?php echo esc_url( home_url( '/wp-content/uploads/MHSA_LogoBLU1E.png.webp' ) ); ?>" alt="MHSA" loading="lazy"></span></li>
                    <li><span class="ilwu-insurance__logo"><img src="<?php echo esc_url( home_url( '/wp-content/uploads/mhnlogo.png.avif' ) ); ?>" alt="MHN" loading="lazy"></span></li>
                    <li><span class="ilwu-insurance__logo"><img src="<?php echo esc_url( home_url( '/wp-content/uploads/Cigna-Logo-1.png.webp' ) ); ?>" alt="Cigna" loading="lazy"></span></li>
                    <li><span class="ilwu-insurance__logo"><img src="<?php echo esc_url( home_url( '/wp-content/uploads/2560px-Oscar_Health_logo.svg.png.webp' ) ); ?>" alt="Oscar" loading="lazy"></span></li>
                    <li><span class="ilwu-insurance__logo"><img src="<?php echo esc_url( home_url( '/wp-content/uploads/Medicare-Logo-500x281-1.png.webp' ) ); ?>" alt="Medicare" loading="lazy"></span></li>
                <?php endif; ?>
            </ul>
            <p class="ilwu-insurance__coming-soon">Kaiser Permanente — Coming Soon!</p>
        </div>
    </section>

    <!-- =============================================
         SECTION 4: WHY ILWU FAMILIES CHOOSE PMH
         ============================================= -->
    <section class="ilwu-why" aria-label="Why ILWU families choose Pacific Mind Health">
        <div class="ilwu-container">
            <h2 class="ilwu-section-title reveal"><?php echo esc_html( $why_title ); ?></h2>
            <p class="ilwu-section-intro reveal"><?php echo esc_html( $why_intro ); ?></p>

            <div class="ilwu-why__grid">
                <?php foreach ( $why_cards as $i => $card ) :
                    $icon = $why_icons[ $i ] ?? $why_icons[0]; ?>
                <div class="ilwu-why-card reveal">
                    <div class="ilwu-why-card__icon-wrap" aria-hidden="true">
                        <?php echo $icon; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped — trusted SVG ?>
                    </div>
                    <div>
                        <h3 class="ilwu-why-card__title"><?php echo wp_kses_post( $card['ilwu_why_card_title'] ); ?></h3>
                        <p class="ilwu-why-card__body"><?php echo esc_html( $card['ilwu_why_card_body'] ); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="ilwu-coverage-note reveal">
                <svg class="ilwu-coverage-note__icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div><?php echo wp_kses_post( $coverage_note ); ?></div>
            </div>
        </div>
    </section>

    <!-- =============================================
         SECTION 5: ILWU TREATMENT OPTIONS (CONDITIONS)
         ============================================= -->
    <section class="ilwu-conditions" aria-label="Conditions and treatment options">
        <div class="ilwu-conditions__bg" style="background-image: url('<?php echo esc_url( $cond_bg_url ); ?>');"></div>
        <div class="ilwu-conditions__overlay"></div>
        <div class="ilwu-wave ilwu-wave--into-teal" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
                <path d="M0,30 C480,60 960,0 1440,30 L1440,0 L0,0 Z" fill="#ffffff"/>
            </svg>
        </div>
        <div class="ilwu-container ilwu-conditions__inner">
            <div class="ilwu-conditions__content">
                <h2 class="ilwu-conditions__headline reveal"><?php echo esc_html( $cond_headline ); ?></h2>
                <p class="ilwu-conditions__intro reveal"><?php echo esc_html( $cond_intro ); ?></p>
                <ul class="ilwu-conditions__tags reveal" role="list">
                    <?php foreach ( $cond_tags as $tag ) :
                        $tag_url   = ! empty( $tag['ilwu_ctag_url'] ) ? $tag['ilwu_ctag_url'] : '';
                        $tag_label = $tag['ilwu_ctag_label'];
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
                <p class="ilwu-conditions__online reveal">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                        <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10A15.3 15.3 0 0 1 12 2z" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    <?php echo esc_html( $cond_online ); ?>
                </p>
            </div>
            <div class="ilwu-conditions__image reveal">
                <img src="<?php echo esc_url( $cond_img_url ); ?>" alt="<?php echo esc_attr( $cond_img_alt ); ?>" loading="lazy">
            </div>
        </div>
        <div class="ilwu-wave ilwu-wave--out-of-teal" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
                <path d="M0,30 C480,0 960,60 1440,30 L1440,60 L0,60 Z" fill="#ffffff"/>
            </svg>
        </div>
    </section>

    <!-- =============================================
         SECTION 7: UNIQUE CHALLENGES
         ============================================= -->
    <section class="ilwu-challenges" aria-label="Unique mental health challenges for longshoremen">
        <div class="ilwu-container">
            <h2 class="ilwu-section-title reveal"><?php echo wp_kses_post( $chall_title ); ?></h2>
            <p class="ilwu-section-intro reveal"><?php echo esc_html( $chall_intro ); ?></p>
            <div class="ilwu-challenges__grid">
                <?php foreach ( $chall_cards as $i => $card ) :
                    $icon = $challenge_icons[ $i ] ?? $challenge_icons[0]; ?>
                <div class="ilwu-challenge-card reveal">
                    <div class="ilwu-challenge-card__icon" aria-hidden="true">
                        <?php echo $icon; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped — trusted SVG ?>
                    </div>
                    <div>
                        <h3 class="ilwu-challenge-card__title"><?php echo wp_kses_post( $card['ilwu_chall_title'] ); ?></h3>
                        <p class="ilwu-challenge-card__body"><?php echo esc_html( $card['ilwu_chall_body'] ); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="ilwu-challenges__bottom reveal">
                <div class="ilwu-challenges__image">
                    <img src="<?php echo esc_url( $chall_bimg_url ); ?>" alt="<?php echo esc_attr( $chall_bimg_alt ); ?>" loading="lazy">
                </div>
                <div class="ilwu-challenges__note">
                    <p><?php echo esc_html( $chall_note ); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- =============================================
         SECTION 7b: TREATMENT SERVICES
         ============================================= -->
    <section class="ilwu-treatments" aria-label="Our treatment services">
        <div class="ilwu-container">
            <div class="ilwu-treatments__header reveal">
                <p class="ilwu-treatments__eyebrow"><?php echo esc_html( $treat_eyebrow ); ?></p>
                <h3 class="ilwu-treatments__heading"><?php echo esc_html( $treat_heading ); ?></h3>
            </div>
            <div class="ilwu-treatments__grid">
                <?php foreach ( $treat_cards as $card ) :
                    $t_img   = $card['ilwu_treat_image'];
                    $t_url   = $t_img ? $t_img['url'] : '';
                    $t_alt   = $t_img ? $t_img['alt'] : '';
                    $t_lurl  = ! empty( $card['ilwu_treat_link_url'] )   ? $card['ilwu_treat_link_url']   : '';
                    $t_llbl  = ! empty( $card['ilwu_treat_link_label'] ) ? $card['ilwu_treat_link_label'] : 'Learn More &rarr;';
                ?>
                <article class="ilwu-treatment-card reveal">
                    <?php if ( $t_url ) : ?>
                    <div class="ilwu-treatment-card__image">
                        <img src="<?php echo esc_url( $t_url ); ?>" alt="<?php echo esc_attr( $t_alt ); ?>" loading="lazy">
                    </div>
                    <?php endif; ?>
                    <div class="ilwu-treatment-card__body">
                        <h4 class="ilwu-treatment-card__title"><?php echo wp_kses_post( $card['ilwu_treat_title'] ); ?></h4>
                        <p class="ilwu-treatment-card__desc"><?php echo esc_html( $card['ilwu_treat_desc'] ); ?></p>
                        <?php if ( $t_lurl ) : ?>
                        <a href="<?php echo esc_url( $t_lurl ); ?>" class="ilwu-treatment-card__link"><?php echo wp_kses_post( $t_llbl ); ?></a>
                        <?php endif; ?>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>

            <div class="ilwu-locations__cta reveal">
                <a href="<?php echo esc_url( $cta_btn_url ); ?>" class="ilwu-btn ilwu-btn--primary">Schedule Now</a>
            </div>
        </div>
    </section>

    <!-- =============================================
         SECTION 8: TESTIMONIALS
         ============================================= -->
    <section class="ilwu-testimonials" aria-label="Patient testimonials">
        <div class="ilwu-container">
            <h2 class="ilwu-section-title reveal"><?php echo esc_html( $test_title ); ?></h2>
            <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
        </div>
    </section>

    <!-- =============================================
         SECTION 6: OUR LOCATIONS
         ============================================= -->
    <section class="ilwu-locations" aria-label="Our locations">
        <div class="ilwu-container">

            <h2 class="ilwu-section-title reveal"><?php echo esc_html( $loc_title ); ?></h2>
            <p class="ilwu-section-intro reveal"><?php echo esc_html( $loc_intro ); ?></p>

            <div class="ilwu-locations__grid">
                <?php foreach ( $loc_cards as $loc ) :
                    $loc_directions_url = 'https://maps.google.com/maps?daddr=' . urlencode( wp_strip_all_tags( $loc['ilwu_loc_address'] ) );
                ?>
                <div class="ilwu-location-card reveal">
                    <iframe
                        class="ilwu-location-card__map"
                        src="<?php echo esc_url( $loc['ilwu_loc_map_url'] ); ?>"
                        title="<?php echo esc_attr( $loc['ilwu_loc_name'] ); ?> location"
                        loading="lazy"
                        allowfullscreen
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="ilwu-location-card__info">
                        <h3 class="ilwu-location-card__name">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1 1 12 6a2.5 2.5 0 0 1 0 5.5z" fill="currentColor"/></svg>
                            <?php echo esc_html( $loc['ilwu_loc_name'] ); ?>
                        </h3>
                        <p class="ilwu-location-card__address"><?php echo wp_kses_post( $loc['ilwu_loc_address'] ); ?></p>
                        <div class="ilwu-location-card__hours">
                            <p class="ilwu-location-card__hours-label">Opening Hours</p>
                            <div class="ilwu-location-card__hours-row"><span>Monday &ndash; Friday</span><span><?php echo wp_kses_post( $loc['ilwu_loc_hrs_weekday'] ); ?></span></div>
                            <div class="ilwu-location-card__hours-row"><span>Saturday</span><span><?php echo esc_html( $loc['ilwu_loc_hrs_saturday'] ); ?></span></div>
                            <div class="ilwu-location-card__hours-row"><span>Sunday</span><span><?php echo esc_html( $loc['ilwu_loc_hrs_sunday'] ); ?></span></div>
                        </div>
                        <a href="<?php echo esc_url( $loc_directions_url ); ?>" target="_blank" rel="noopener noreferrer" class="ilwu-location-card__directions">Get Directions</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <!-- =============================================
         SECTION 9: CLOSING CTA BANNER
         ============================================= -->
    <section class="ilwu-cta-banner" aria-label="Call to action">
        <div class="ilwu-container ilwu-cta-banner__content">
            <h2 class="ilwu-cta-banner__headline reveal"><?php echo esc_html( $cta_headline ); ?></h2>
            <div class="ilwu-cta-banner__subtext reveal"><?php echo wp_kses_post( $cta_subtext ); ?></div>
            <div class="ilwu-cta-banner__buttons reveal">
                <a href="<?php echo esc_url( $cta_btn_url ); ?>" class="ilwu-btn ilwu-btn--white"><?php echo esc_html( $cta_btn_label ); ?></a>
            </div>
        </div>
    </section>

</main>

<script>
(function () {
    var els = document.querySelectorAll('.ilwu-lp .reveal');
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
