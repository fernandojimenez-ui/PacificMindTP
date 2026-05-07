<?php
/**
 * Minimal header for ILWU Landing Page — no site nav, no theme header bar.
 * Nav is rendered inline inside .ilwu-lp so it can overlay the hero.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'ilwu-lp-page' ); ?>>
<?php wp_body_open(); ?>
