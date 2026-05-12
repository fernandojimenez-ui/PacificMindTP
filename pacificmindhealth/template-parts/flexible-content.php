<?php
/**
 * Flexible content renderer.
 * Usage: get_template_part( 'template-parts/flexible-content' );
 */

if ( ! have_rows( 'page_modules' ) ) {
	return;
}

while ( have_rows( 'page_modules' ) ) :
	the_row();

	$layout   = get_row_layout();
	$template = get_template_directory() . '/template-parts/modules/module-' . str_replace( '_', '-', $layout ) . '.php';

	if ( file_exists( $template ) ) {
		include $template;
	}

endwhile;
