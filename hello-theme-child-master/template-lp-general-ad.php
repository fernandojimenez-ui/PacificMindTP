<?php
/**
 * Template Name: LP - General Ad
 * Pacific Mind Health — General Ad Landing Page
 */

@ini_set( 'display_errors', 0 );
error_reporting( 0 );

wp_enqueue_style( 'pmh-lp-ilwu',       get_stylesheet_directory_uri() . '/css/template-lp-ilwu.css',       [],              '1.0.0' );
wp_enqueue_style( 'pmh-lp-general-ad', get_stylesheet_directory_uri() . '/css/template-lp-general-ad.css', ['pmh-lp-ilwu'], '1.0.0' );

get_header();
?>

<main class="ilwu-lp gad-lp" id="main-content">

    <!-- =============================================
         SECTION 1: HERO
         ============================================= -->
    <section class="ilwu-hero" aria-label="Hero">
        <div class="ilwu-hero__bg" style="background-image: url('https://pacificmindhealth.com/wp-content/uploads/Gemini_Generated_Image_mav8hmmav8hmmav8-2-scaled.png');"></div>
        <div class="ilwu-hero__overlay"></div>
        <div class="ilwu-container ilwu-hero__content">
            <div class="ilwu-hero__text">
                <h1 class="ilwu-hero__headline">A Modern Approach to Mental Health</h1>
                <h2>Feel better. Live better.©</h2>
                <p class="gad-hero__body">Your journey is unique, and your treatment should be, too. At Pacific Mind Health, we combine science with compassion to offer traditional and innovative evidence-based care. Whether you are seeking relief from treatment-resistant symptoms or managing complex conditions, our team is here to guide you.</p>
                <div class="ilwu-hero__ctas">
                    <a href="https://pacificmindhealth.com/new-patient/?hsLang=en" class="ilwu-btn ilwu-btn--white">Get Started</a>
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
         SECTION 2: COMPREHENSIVE OFFERINGS
         ============================================= -->
    <section class="ilwu-treatments" aria-label="Our comprehensive offerings">
        <div class="ilwu-container">
            <div class="ilwu-treatments__header reveal">
                <p class="ilwu-treatments__eyebrow">What We Offer</p>
                <h2 class="ilwu-treatments__heading">Our Comprehensive Offerings</h2>
                <p class="gad-treatments__intro">We provide a full spectrum of mental health services, from specialized treatments to traditional talk therapy.</p>
            </div>

            <div class="ilwu-treatments__grid">

                <!-- Psychiatry -->
                <article class="ilwu-treatment-card reveal">
                    <div class="ilwu-treatment-card__image">
                        <img src="<?php echo esc_url( home_url( '/wp-content/uploads/image_change_1_720.png.avif' ) ); ?>" alt="Psychiatry and Medication Management" loading="lazy">
                    </div>
                    <div class="ilwu-treatment-card__body">
                        <h3 class="ilwu-treatment-card__title">Psychiatry &amp; Medication Management</h3>
                        <p class="ilwu-treatment-card__desc">Our board-certified psychiatrists and psychiatric providers offer thoughtful, collaborative care. With a focus on diagnosing and treating the root cause of your symptoms, we use tools like pharmacogenomic testing to find the right medication with less trial and error.</p>
                        <a href="<?php echo esc_url( home_url( '/treatments/psychiatry/' ) ); ?>" class="ilwu-treatment-card__link">Learn More &rarr;</a>
                    </div>
                </article>

                <!-- TMS -->
                <article class="ilwu-treatment-card reveal">
                    <div class="ilwu-treatment-card__image">
                        <img src="<?php echo esc_url( home_url( '/wp-content/uploads/1G1A7318-2048x1365.jpg.avif' ) ); ?>" alt="Transcranial Magnetic Stimulation" loading="lazy">
                    </div>
                    <div class="ilwu-treatment-card__body">
                        <h3 class="ilwu-treatment-card__title">Transcranial Magnetic Stimulation (TMS)</h3>
                        <p class="ilwu-treatment-card__desc">This non-invasive, drug-free outpatient procedure uses focused magnetic pulses to stimulate specific areas of the brain that control mood. We offer a variety of treatment options to suit your schedule and needs.</p>
                        <ul class="gad-sub-list">
                            <li><strong>Standard TMS</strong> &mdash; Daily 20-minute sessions produce results in as little as six weeks</li>
                            <li><strong>3-Minute TMS</strong> &mdash; Uses effective theta burst stimulation to shorten session times</li>
                            <li><strong>Accelerated TMS</strong> &mdash; Condenses a full course of treatment into as little as one week</li>
                            <li><strong>One-Day TMS</strong> &mdash; Delivers multiple treatment sessions in a single day</li>
                        </ul>
                        <a href="<?php echo esc_url( home_url( '/treatments/transcranial-magnetic-stimulation/' ) ); ?>" class="ilwu-treatment-card__link">Learn More &rarr;</a>
                    </div>
                </article>

                <!-- Spravato & Ketamine -->
                <article class="ilwu-treatment-card reveal">
                    <div class="ilwu-treatment-card__image">
                        <img src="<?php echo esc_url( home_url( '/wp-content/uploads/Spravato.jpg' ) ); ?>" alt="Spravato and Ketamine Therapy" loading="lazy">
                    </div>
                    <div class="ilwu-treatment-card__body">
                        <h3 class="ilwu-treatment-card__title">Spravato&reg; &amp; Ketamine Therapy</h3>
                        <p class="ilwu-treatment-card__desc">Rapid-acting treatments for treatment-resistant depression and suicidal ideation.</p>
                        <ul class="gad-sub-list">
                            <li><strong>Spravato (esketamine)</strong> &mdash; An FDA-approved nasal spray administered in-office under medical supervision.</li>
                            <li><strong>Ketamine</strong> &mdash; Evidence-based protocols include intranasal treatments to reset neural pathways and promote neuroplasticity.</li>
                        </ul>
                        <a href="<?php echo esc_url( home_url( '/treatments/spravato-therapy/' ) ); ?>" class="ilwu-treatment-card__link">Learn More &rarr;</a>
                    </div>
                </article>

            </div>

            <div class="ilwu-locations__cta reveal">
                <a href="https://pacificmindhealth.com/new-patient/?hsLang=en" class="ilwu-btn ilwu-btn--primary">Get Started Today</a>
            </div>
        </div>
    </section>

    <!-- =============================================
         SECTION 3: WE TREAT (CONDITIONS)
         ============================================= -->
    <section class="ilwu-conditions" aria-label="Conditions we treat">
        <div class="ilwu-conditions__bg" style="background-image: url('<?php echo esc_url( home_url( '/wp-content/uploads/pexels-flo-dahm-458917.jpg.webp' ) ); ?>');"></div>
        <div class="ilwu-conditions__overlay"></div>
        <div class="ilwu-wave ilwu-wave--into-teal" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
                <path d="M0,30 C480,60 960,0 1440,30 L1440,0 L0,0 Z" fill="#ffffff"/>
            </svg>
        </div>
        <div class="ilwu-container gad-conditions__inner">
            <h2 class="ilwu-conditions__headline reveal">We Treat</h2>
            <p class="ilwu-conditions__intro reveal">Beyond standard depression, we offer treatments for a wide range of conditions, available in-person and online across all of California.</p>
            <ul class="ilwu-conditions__tags reveal" role="list">
                <li class="ilwu-conditions__tag"><a href="<?php echo esc_url( home_url( '/what-we-treat/depression-treatments/' ) ); ?>">Depression</a></li>
                <li class="ilwu-conditions__tag"><a href="<?php echo esc_url( home_url( '/what-we-treat/anxiety-treatments/' ) ); ?>">Anxiety</a></li>
                <li class="ilwu-conditions__tag"><a href="<?php echo esc_url( home_url( '/what-we-treat/adhd/' ) ); ?>">ADHD</a></li>
                <li class="ilwu-conditions__tag"><a href="<?php echo esc_url( home_url( '/what-we-treat/bipolar-disorder/' ) ); ?>">Bipolar Disorder</a></li>
                <li class="ilwu-conditions__tag"><a href="<?php echo esc_url( home_url( '/what-we-treat/sleep-disorder/' ) ); ?>">Insomnia</a></li>
                <li class="ilwu-conditions__tag">Panic Disorder</li>
                <li class="ilwu-conditions__tag"><a href="<?php echo esc_url( home_url( '/what-we-treat/ocd/' ) ); ?>">OCD</a></li>
                <li class="ilwu-conditions__tag"><a href="<?php echo esc_url( home_url( '/what-we-treat/trauma-ptsd/' ) ); ?>">PTSD / Trauma</a></li>
                <li class="ilwu-conditions__tag"><a href="<?php echo esc_url( home_url( '/what-we-treat/' ) ); ?>">Chronic Pain</a></li>
                <li class="ilwu-conditions__tag"><a href="<?php echo esc_url( home_url( '/what-we-treat/' ) ); ?>">Postpartum Depression</a></li>
                <li class="ilwu-conditions__tag"><a href="<?php echo esc_url( home_url( '/what-we-treat/substance-use-disorder/' ) ); ?>">Addiction</a></li>
                <li class="ilwu-conditions__tag">Life Stressors</li>
            </ul>
            <p class="ilwu-conditions__online reveal">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                    <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10A15.3 15.3 0 0 1 12 2z" stroke="currentColor" stroke-width="2"/>
                </svg>
                Online: Available anywhere in California
            </p>
        </div>
        <div class="ilwu-wave ilwu-wave--out-of-teal" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
                <path d="M0,30 C480,0 960,60 1440,30 L1440,60 L0,60 Z" fill="#ffffff"/>
            </svg>
        </div>
    </section>

    <!-- =============================================
         SECTION 4: MODERN PSYCHIATRY / WHY
         ============================================= -->
    <section class="ilwu-why" aria-label="Modern psychiatry, human connection">
        <div class="ilwu-container">
            <h2 class="ilwu-section-title reveal">Modern Psychiatry. Human Connection.</h2>
            <div class="ilwu-why__grid">

                <div class="ilwu-why-card reveal">
                    <div class="ilwu-why-card__icon-wrap" aria-hidden="true">
                        <img src="https://pacificmindhealth.com/wp-content/uploads/Insurance-Coverage.png" alt="" style="width:100%;height:100%;object-fit:contain;">
                    </div>
                    <div>
                        <h3 class="ilwu-why-card__title">Most Insurances Accepted</h3>
                        <p class="ilwu-why-card__body">We are in-network with most major providers, including Aetna, Anthem Blue Cross, Blue Shield, Cigna, Optum, UnitedHealthcare, Medicare, TriWest, and TRICARE.</p>
                    </div>
                </div>

                <div class="ilwu-why-card reveal">
                    <div class="ilwu-why-card__icon-wrap" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="color:#3395ac;">
                            <rect x="2" y="5" width="20" height="14" rx="2" stroke="currentColor" stroke-width="2"/>
                            <path d="M2 10h20" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="ilwu-why-card__title">Flexible Payment Plans</h3>
                        <p class="ilwu-why-card__body">We partner with financing services like Advance Care to offer manageable payment options, ensuring cost is never a barrier to your wellness.</p>
                    </div>
                </div>

                <div class="ilwu-why-card reveal">
                    <div class="ilwu-why-card__icon-wrap" aria-hidden="true">
                        <img src="https://pacificmindhealth.com/wp-content/uploads/Online-Telehealth.png" alt="" style="width:100%;height:100%;object-fit:contain;">
                    </div>
                    <div>
                        <h3 class="ilwu-why-card__title">Online Scheduling &amp; Telehealth</h3>
                        <p class="ilwu-why-card__body">Book your evaluation in seconds. We offer in-person care at our clinics and online appointments for patients throughout California.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =============================================
         SECTION 5: TESTIMONIALS
         ============================================= -->
    <section class="ilwu-testimonials" aria-label="What our patients say">
        <div class="ilwu-container">
            <h2 class="ilwu-section-title reveal">What Our Patients Say</h2>
            <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
        </div>
    </section>

    <!-- =============================================
         SECTION 6: CLOSING CTA BANNER
         ============================================= -->
    <section class="ilwu-cta-banner" aria-label="Call to action">
        <div class="ilwu-container ilwu-cta-banner__content">
            <h2 class="ilwu-cta-banner__headline reveal">Begin Your Journey Toward Healing</h2>
            <div class="ilwu-cta-banner__subtext reveal">
                <p>Join the thousands of Californians who have found relief through our technology-forward, compassionate approach.</p>
            </div>
            <div class="ilwu-cta-banner__buttons reveal">
                <a href="https://pacificmindhealth.com/new-patient/?hsLang=en" class="ilwu-btn ilwu-btn--white">Book Your Appointment</a>
                <a href="tel:3105715041" class="ilwu-btn ilwu-btn--outline-white">Call Us: 310-571-5041</a>
            </div>
        </div>
    </section>

</main>

<script>
(function () {
    var els = document.querySelectorAll('.gad-lp .reveal');
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
