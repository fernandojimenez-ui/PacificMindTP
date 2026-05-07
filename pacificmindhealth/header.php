<?php
/**
 * Theme header template.
 *
 * @package PacificMindHealth
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-white text-zinc-900 antialiased'); ?>>
<?php do_action('tailpress_site_before'); ?>

<div id="page" class="min-h-screen flex flex-col">
    <?php do_action('tailpress_header'); ?>

    <header id="site-header" class="bg-white sticky top-0 z-50" style="box-shadow: 0 1px 4px rgba(0,0,0,0.08);">
        <div class="container mx-auto flex items-center justify-between" style="height: 80px;">

            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex-shrink-0 site-logo">
                <img src="<?php echo esc_url(content_url('/uploads/pmh-logo-web_3.png')); ?>"
                     alt="<?php bloginfo('name'); ?>">
            </a>

            <!-- Desktop nav + CTAs -->
            <div class="hidden md:flex items-center gap-2">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => 'nav',
                    'container_id'   => 'primary-menu',
                    'menu_class'     => 'pmh-nav flex items-center',
                    'fallback_cb'    => false,
                ]);
                ?>
                <div class="flex items-center gap-2 ml-4">
                    <a href="/new-patient/"
                       class="inline-block text-white text-sm font-semibold px-5 py-2.5 rounded transition"
                       style="background-color: #3395ac;">Get a Consultation</a>
                    <a href="tel:+13106264607"
                       class="inline-block text-white text-sm font-semibold px-5 py-2.5 rounded transition"
                       style="background-color: #3395ac;">310-626-4607</a>
                </div>
            </div>

            <!-- Mobile hamburger -->
            <button id="primary-menu-toggle" class="md:hidden p-2" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:28px;height:28px;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>

        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t" style="border-color: #e5e7eb;">
            <div class="container mx-auto py-4">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => 'nav',
                    'menu_class'     => 'flex flex-col',
                    'fallback_cb'    => false,
                ]);
                ?>
                <div class="flex flex-col gap-2 mt-4">
                    <a href="/new-patient/"
                       class="text-center text-white text-sm font-semibold px-5 py-3 rounded"
                       style="background-color: #3395ac;">Get a Consultation</a>
                    <a href="tel:+13106264607"
                       class="text-center text-white text-sm font-semibold px-5 py-3 rounded"
                       style="background-color: #3395ac;">310-626-4607</a>
                </div>
            </div>
        </div>
    </header>

    <div id="content" class="site-content grow">
        <?php do_action('tailpress_content_start'); ?>
        <main>
