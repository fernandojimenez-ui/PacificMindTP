<?php
/**
 * Homepage template.
 *
 * @package PacificMindHealth
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'template-parts/flexible-content' ); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
