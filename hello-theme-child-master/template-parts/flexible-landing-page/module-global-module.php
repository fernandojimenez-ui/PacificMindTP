<?php
$module_map = [
    'featured_in' => 'global-modules/featured-in',
];

$selected = get_sub_field( 'flp_global_module_select' );

if ( $selected && isset( $module_map[ $selected ] ) ) {
    get_template_part( 'template-parts/' . $module_map[ $selected ] );
}
