<?php
/**
 * Homepage template.
 *
 * @package PacificMindHealth
 */

get_header();
?>

<!-- ===================== HERO ===================== -->
<section class="relative flex items-center justify-center text-white overflow-hidden" style="min-height: 90vh;">
    <video
        class="absolute inset-0 w-full h-full object-cover"
        autoplay muted loop playsinline
        poster="<?php echo esc_url(content_url('/uploads/pacificmindocean.webp')); ?>"
    >
        <source src="<?php echo esc_url(content_url('/uploads/PMH-ocean-video.mp4')); ?>" type="video/mp4">
    </video>
    <div class="absolute inset-0" style="background: rgba(0,0,0,0.30);"></div>
    <div class="relative z-10 container mx-auto text-center px-4 py-24">
        <p class="text-base md:text-lg uppercase tracking-widest mb-4" style="color: rgba(255,255,255,0.85);">A Modern Approach to Mental Health</p>
        <h2 class="text-4xl md:text-6xl font-bold leading-tight mb-4 text-white">Feel better. Live Better.</h2>
        <h1 class="text-lg md:text-2xl font-normal mb-10 max-w-3xl mx-auto" style="color: rgba(255,255,255,0.90);">
            Psychiatry and TMS Therapy in Los Angeles, Orange County, and Long Beach, California
        </h1>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="/new-patient/" class="inline-block text-white font-semibold px-8 py-3 rounded-full transition" style="background-color: #52BFCF;">Get Started</a>
            <a href="/treatments/transcranial-magnetic-stimulation/" class="inline-block text-white font-semibold px-8 py-3 rounded-full border-2 border-white transition hover:bg-white" style="--hover-color: #1a4a5a;">TMS Therapy</a>
            <a href="/treatments/spravato-therapy/" class="inline-block text-white font-semibold px-8 py-3 rounded-full border-2 border-white transition">Spravato</a>
        </div>
    </div>
</section>

<!-- ===================== TREATMENTS INTRO ===================== -->
<section class="py-20 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-3" style="color: #1a4a5a;">Your Mental Health Journey Is Unique.</h2>
        <h3 class="text-2xl font-medium mb-8" style="color: #3395ac;">Your Treatment Should Be Too.</h3>
        <p class="text-lg mb-8 mx-auto" style="color: #4b5563; max-width: 760px;">
            At Pacific Mind Health, we believe everyone should have access to compassionate and effective care. We offer modern and traditional evidence-based mental health treatment that is tailored to meet your needs.
        </p>
        <ul class="grid grid-cols-2 md:grid-cols-3 gap-3 mb-10 text-left max-w-2xl mx-auto">
            <?php
            $treatments = ['Transcranial Magnetic Stimulation (TMS)', 'Spravato® (esketamine)', 'ADHD Treatment', 'Psychiatry', 'Therapy', 'Genetic Testing'];
            foreach ($treatments as $t) : ?>
                <li class="flex items-center gap-2" style="color: #374151;">
                    <span style="color: #3395ac; font-weight: bold;">✓</span>
                    <?php echo esc_html($t); ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="/treatments/" class="inline-block text-white font-semibold px-8 py-3 rounded-full transition" style="background-color: #52BFCF;">Learn More</a>
    </div>
</section>

<!-- ===================== FEATURED TREATMENTS ===================== -->
<section class="py-20" style="background-color: #f2f6f8;">
    <div class="container mx-auto">
        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white rounded-2xl overflow-hidden" style="box-shadow: 0 2px 12px rgba(0,0,0,0.07);">
                <img src="<?php echo esc_url(content_url('/uploads/1G1A7340-scaled.jpg')); ?>"
                     alt="TMS Therapy" class="w-full object-cover" style="height: 220px;">
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-3" style="color: #1a4a5a;">Transcranial Magnetic Stimulation (TMS)</h2>
                    <p class="text-sm mb-5" style="color: #6b7280;">One of the most innovative mental health treatments we offer. TMS delivers magnetic pulses to stimulate underactive nerve cells in the parts of the brain that control mood. FDA-approved and non-invasive.</p>
                    <a href="/treatments/transcranial-magnetic-stimulation/" class="font-semibold" style="color: #3395ac;">Read More →</a>
                </div>
            </div>

            <div class="bg-white rounded-2xl overflow-hidden" style="box-shadow: 0 2px 12px rgba(0,0,0,0.07);">
                <img src="<?php echo esc_url(content_url('/uploads/1G1A7318-scaled.jpg')); ?>"
                     alt="Psychiatry" class="w-full object-cover" style="height: 220px;">
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-3" style="color: #1a4a5a;">Psychiatry &amp; Telepsychiatry</h2>
                    <p class="text-sm mb-5" style="color: #6b7280;">Psychiatry is a medical specialty focused on diagnosing, treating, and preventing disorders related to mood and behavior. Our psychiatrists develop personalized health plans for each patient.</p>
                    <a href="/treatments/telepsychiatry-services/" class="font-semibold" style="color: #3395ac;">Read More →</a>
                </div>
            </div>

            <div class="bg-white rounded-2xl overflow-hidden" style="box-shadow: 0 2px 12px rgba(0,0,0,0.07);">
                <img src="<?php echo esc_url(content_url('/uploads/Spravato-Image.jpg')); ?>"
                     alt="Spravato Therapy" class="w-full object-cover" style="height: 220px;">
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-3" style="color: #1a4a5a;">Spravato Therapy</h2>
                    <p class="text-sm mb-5" style="color: #6b7280;">Also known as esketamine, Spravato® provides rapid and long-lasting relief from treatment-resistant depression. Self-administered with a nasal spray under professional supervision.</p>
                    <a href="/treatments/spravato-therapy/" class="font-semibold" style="color: #3395ac;">Read More →</a>
                </div>
            </div>

        </div>
        <div class="text-center mt-10">
            <a href="/treatments/" class="inline-block font-semibold px-8 py-3 rounded-full border-2 transition"
               style="border-color: #3395ac; color: #3395ac;">View More Treatments</a>
        </div>
    </div>
</section>

<!-- ===================== CTA BANNER ===================== -->
<section class="py-16 text-white text-center" style="background-color: #1a4a5a;">
    <div class="container mx-auto">
        <h3 class="text-2xl md:text-3xl font-bold mb-8">Begin Your Journey Toward Wellness</h3>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:+13104253881"
               class="inline-block font-semibold px-8 py-3 rounded-full transition"
               style="background-color: #fff; color: #1a4a5a;">310-425-3881</a>
            <a href="/new-patient/"
               class="inline-block font-semibold px-8 py-3 rounded-full border-2 border-white text-white transition">Request A Consultation</a>
        </div>
    </div>
</section>

<!-- ===================== LED BY SCIENCE ===================== -->
<section class="py-20 bg-white">
    <div class="container mx-auto">
        <div class="md:grid md:grid-cols-2 md:gap-16 items-center">
            <div>
                <p class="text-sm font-semibold uppercase tracking-widest mb-2" style="color: #3395ac;">Led by Science and Compassion</p>
                <h2 class="text-3xl font-bold mb-6" style="color: #1a4a5a;">Quality Mental Health Care for Every Patient</h2>
                <p class="mb-4" style="color: #4b5563;">At Pacific Mind Health, our goal is to provide quality, science-based mental health care. We want all of our patients to live happier, more fulfilling lives.</p>
                <p class="mb-4" style="color: #4b5563;">Our experienced team of psychiatrists, psychiatric nurse practitioners, physician assistants, and therapists work together to customize a treatment plan just for you.</p>
                <p class="mb-8" style="color: #4b5563;">We know suffering from a mental health disorder can feel frustrating, confusing, and even scary. You are not alone. Pacific Mind Health is here to guide you on your mental health journey.</p>
                <a href="/conditions/" class="inline-block text-white font-semibold px-8 py-3 rounded-full transition" style="background-color: #52BFCF;">View Conditions We Treat</a>
            </div>
            <div class="mt-10 md:mt-0">
                <img src="<?php echo esc_url(content_url('/uploads/1G1A7642-scaled.jpg')); ?>"
                     alt="Pacific Mind Health Clinic" class="w-full rounded-2xl object-cover"
                     style="box-shadow: 0 4px 24px rgba(0,0,0,0.10);">
            </div>
        </div>
    </div>
</section>

<!-- ===================== WHAT TO EXPECT ===================== -->
<section class="py-20" style="background-color: #f2f6f8;">
    <div class="container mx-auto">
        <div class="md:grid md:grid-cols-2 md:gap-16 items-center">
            <div class="mb-10 md:mb-0">
                <img src="<?php echo esc_url(content_url('/uploads/josh-from-pacific-1.jpg')); ?>"
                     alt="Pacific Mind Health Team" class="w-full rounded-2xl object-cover"
                     style="box-shadow: 0 4px 24px rgba(0,0,0,0.10);">
            </div>
            <div>
                <h2 class="text-3xl font-bold mb-6" style="color: #1a4a5a;">What To Expect</h2>
                <p class="mb-4" style="color: #4b5563;">Pacific Mind Health is committed to creating an intake process that is smooth and efficient. We know filling out paperwork can be time-consuming, but it's the quickest way to get you care. Our staff is trained to assist with any insurance and referral requirements.</p>
                <p class="mb-8" style="color: #4b5563;">Once complete, your Pacific Mind Health clinician will conduct a comprehensive exam that considers you as a whole person. They will take the time to explain our diagnosis and answer any questions you may have. Together, you and your clinician will create a treatment plan that works for you.</p>
                <a href="/about/" class="inline-block text-white font-semibold px-8 py-3 rounded-full transition" style="background-color: #52BFCF;">About Us</a>
            </div>
        </div>
    </div>
</section>

<!-- ===================== TEAM ===================== -->
<section class="py-20 bg-white">
    <div class="container mx-auto text-center">
        <p class="text-sm font-semibold uppercase tracking-widest mb-2" style="color: #3395ac;">Our Health Team</p>
        <h2 class="text-3xl font-bold mb-12" style="color: #1a4a5a;">Meet Our Health Professionals</h2>
        <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-8">
            <?php
            $team_query = new WP_Query([
                'post_type'      => 'team',
                'posts_per_page' => 4,
                'post_status'    => 'publish',
            ]);
            while ($team_query->have_posts()) : $team_query->the_post(); ?>
                <div class="text-center">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="w-32 h-32 rounded-full overflow-hidden mx-auto mb-4">
                            <?php the_post_thumbnail('medium', ['class' => 'w-full h-full object-cover']); ?>
                        </div>
                    <?php else : ?>
                        <div class="w-32 h-32 rounded-full mx-auto mb-4 flex items-center justify-center" style="background-color: #f2f6f8;">
                            <span style="color: #3395ac; font-size: 2rem;">👤</span>
                        </div>
                    <?php endif; ?>
                    <h3 class="font-semibold" style="color: #1a4a5a;"><?php the_title(); ?></h3>
                    <?php
                    $title_field = get_post_meta(get_the_ID(), 'job_title', true);
                    if ($title_field) : ?>
                        <p class="text-sm" style="color: #6b7280;"><?php echo esc_html($title_field); ?></p>
                    <?php endif; ?>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <div class="mt-10">
            <a href="/provider/" class="inline-block font-semibold px-8 py-3 rounded-full border-2 transition"
               style="border-color: #3395ac; color: #3395ac;">View All Providers</a>
        </div>
    </div>
</section>

<!-- ===================== INSURANCE ===================== -->
<section class="py-24 text-white text-center relative" style="
    background-image: url('/wp-content/uploads/sandy-sea-bottom-underwater-background-underwater-blue-ocean-1.jpg');
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
">
    <div class="absolute inset-0" style="background: rgba(26,74,90,0.65);"></div>
    <div class="container mx-auto relative z-10">
        <h3 class="text-2xl md:text-3xl font-bold">We're In-Network with Every Major Insurance</h3>
    </div>
</section>

<!-- ===================== LOCATIONS ===================== -->
<section class="py-20" style="background-color: #f2f6f8;">
    <div class="container mx-auto text-center">
        <p class="text-lg mb-10 mx-auto" style="color: #4b5563; max-width: 640px;">
            We offer in-person appointments at our Long Beach, West Los Angeles, and Orange County offices and convenient online appointments for patients throughout California.
        </p>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
            <?php
            $location_query = new WP_Query([
                'post_type'      => 'location',
                'posts_per_page' => -1,
                'post_status'    => 'publish',
                'orderby'        => 'title',
                'order'          => 'ASC',
            ]);
            while ($location_query->have_posts()) : $location_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>"
                   class="bg-white rounded-xl py-3 px-4 font-semibold transition text-sm"
                   style="color: #1a4a5a; box-shadow: 0 1px 4px rgba(0,0,0,0.06);">
                    <?php the_title(); ?>
                </a>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<!-- ===================== REVIEWS ===================== -->
<section class="py-20 bg-white">
    <div class="container mx-auto">
        <?php echo do_shortcode('[trustindex data-widget-id="8a53eaa2775901942c7629b0164"]'); ?>
    </div>
</section>

<!-- ===================== BLOG ===================== -->
<section class="py-20" style="background-color: #f2f6f8;">
    <div class="container mx-auto">
        <h3 class="text-2xl md:text-3xl font-bold text-center mb-12" style="color: #1a4a5a;">Support Your Mental Health At Home</h3>
        <div class="grid md:grid-cols-3 gap-8">
            <?php
            $blog_query = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
            ]);
            while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                <article class="bg-white rounded-2xl overflow-hidden text-left"
                         style="box-shadow: 0 2px 12px rgba(0,0,0,0.07);">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium_large', ['class' => 'w-full object-cover', 'style' => 'height:200px;']); ?>
                        </a>
                    <?php endif; ?>
                    <div class="p-6">
                        <h4 class="font-bold mb-3">
                            <a href="<?php the_permalink(); ?>" style="color: #1a4a5a;"><?php the_title(); ?></a>
                        </h4>
                        <p class="text-sm" style="color: #6b7280;"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                    </div>
                </article>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
