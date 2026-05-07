<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);

	if ( is_page_template( [
		'template-lp-ilwu.php',
		'template-lp-general-ad.php',
		'template-lp-tms-guide.php',
		'template-flexible-landing-page.php',
	] ) ) {
		wp_enqueue_style(
			'pmh-tailwind',
			get_stylesheet_directory_uri() . '/css/tailwind.css',
			[],
			'1.0.0'
		);
	}
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );



// Register Custom Post Type Team

function create_team_cpt() {

    $labels = array(
        'name' => _x( 'Team Members', 'Post Type General Name', 'textdomain' ),
        'singular_name' => _x( 'Team', 'Post Type Singular Name', 'textdomain' ),
        'menu_name' => _x( 'Team Members', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar' => _x( 'Team', 'Add New on Toolbar', 'textdomain' ),
        'archives' => __( 'Team', 'textdomain' ),
        'attributes' => __( 'Team', 'textdomain' ),
        'parent_item_colon' => __( 'Team', 'textdomain' ),
        'all_items' => __( 'All Team Members', 'textdomain' ),
        'add_new_item' => __( 'Add New Team', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'new_item' => __( 'New Team', 'textdomain' ),
        'edit_item' => __( 'Edit Team', 'textdomain' ),
        'update_item' => __( 'Update Team', 'textdomain' ),
        'view_item' => __( 'View Team', 'textdomain' ),
        'view_items' => __( 'View Team Members', 'textdomain' ),
        'search_items' => __( 'Search Team', 'textdomain' ),
        'not_found' => __( 'Not found', 'textdomain' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
        'featured_image' => __( 'Featured Image', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item' => __( 'Insert into Team', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Team', 'textdomain' ),
        'items_list' => __( 'Team Members list', 'textdomain' ),
        'items_list_navigation' => __( 'Team Members list navigation', 'textdomain' ),
        'filter_items_list' => __( 'Filter Team Members list', 'textdomain' ),
    );
    
    $args = array(
        'label' => __( 'Team', 'textdomain' ),
        'description' => __( 'Holds team members', 'textdomain' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-appearance',
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'taxonomies' => array(),
        'hierarchical' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'has_archive' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'show_in_nav_menus' => true,
        'menu_position' => 5,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );
    
    register_post_type( 'team', $args );

}
add_action( 'init', 'create_team_cpt', 0 );



// Register Custom Post Type Treatment
// Post Type Key: Treatment
function create_treatment_cpt() {

    $labels = array(
        'name' => _x( 'Treatments', 'Post Type General Name', 'treatments' ),
        'singular_name' => _x( 'Treatment', 'Post Type Singular Name', 'treatments' ),
        'menu_name' => _x( 'Treatments', 'Admin Menu text', 'treatments' ),
        'name_admin_bar' => _x( 'Treatment', 'Add New on Toolbar', 'treatments' ),
        'archives' => __( 'Treatment', 'treatments' ),
        'attributes' => __( 'Treatment', 'treatments' ),
        'parent_item_colon' => __( 'Treatment', 'treatments' ),
        'all_items' => __( 'All Treatments', 'treatments' ),
        'add_new_item' => __( 'Add New Treatment', 'treatments' ),
        'add_new' => __( 'Add New', 'treatments' ),
        'new_item' => __( 'New Treatment', 'treatments' ),
        'edit_item' => __( 'Edit Treatment', 'treatments' ),
        'update_item' => __( 'Update Treatment', 'treatments' ),
        'view_item' => __( 'View Treatment', 'treatments' ),
        'view_items' => __( 'View Treatments', 'treatments' ),
        'search_items' => __( 'Search Treatment', 'treatments' ),
        'not_found' => __( 'Not found', 'treatments' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'treatments' ),
        'featured_image' => __( 'Featured Image', 'treatments' ),
        'set_featured_image' => __( 'Set featured image', 'treatments' ),
        'remove_featured_image' => __( 'Remove featured image', 'treatments' ),
        'use_featured_image' => __( 'Use as featured image', 'treatments' ),
        'insert_into_item' => __( 'Insert into Treatment', 'treatments' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Treatment', 'treatments' ),
        'items_list' => __( 'Treatments list', 'treatments' ),
        'items_list_navigation' => __( 'Treatments list navigation', 'treatments' ),
        'filter_items_list' => __( 'Filter Treatments list', 'treatments' ),
    );
    
    $args = array(
        'label' => __( 'Treatment', 'treatments' ),
        'description' => __( 'List of all the services', 'treatments' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-page',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
        'taxonomies' => array(),
        'hierarchical' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'has_archive' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'show_in_nav_menus' => true,
        'menu_position' => 5,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );
    
    register_post_type( 'treatments', $args );

}
add_action( 'init', 'create_treatment_cpt', 0 );



// Register Custom Post Type Location 
// Post Type Key: Location 
function create_location__cpt() {

    $labels = array(
        'name' => _x( 'Locations', 'Post Type General Name', 'locations' ),
        'singular_name' => _x( 'Location ', 'Post Type Singular Name', 'locations' ),
        'menu_name' => _x( 'Locations', 'Admin Menu text', 'locations' ),
        'name_admin_bar' => _x( 'Location ', 'Add New on Toolbar', 'locations' ),
        'archives' => __( 'Location ', 'locations' ),
        'attributes' => __( 'Location ', 'locations' ),
        'parent_item_colon' => __( 'Location ', 'locations' ),
        'all_items' => __( 'All Locations', 'locations' ),
        'add_new_item' => __( 'Add New Location ', 'locations' ),
        'add_new' => __( 'Add New', 'locations' ),
        'new_item' => __( 'New Location ', 'locations' ),
        'edit_item' => __( 'Edit Location ', 'locations' ),
        'update_item' => __( 'Update Location ', 'locations' ),
        'view_item' => __( 'View Location ', 'locations' ),
        'view_items' => __( 'View Locations', 'locations' ),
        'search_items' => __( 'Search Location ', 'locations' ),
        'not_found' => __( 'Not found', 'locations' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'locations' ),
        'featured_image' => __( 'Featured Image', 'locations' ),
        'set_featured_image' => __( 'Set featured image', 'locations' ),
        'remove_featured_image' => __( 'Remove featured image', 'locations' ),
        'use_featured_image' => __( 'Use as featured image', 'locations' ),
        'insert_into_item' => __( 'Insert into Location ', 'locations' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Location ', 'locations' ),
        'items_list' => __( 'Locations list', 'locations' ),
        'items_list_navigation' => __( 'Locations list navigation', 'locations' ),
        'filter_items_list' => __( 'Filter Locations list', 'locations' ),
    );
    
    $args = array(
        'label' => __( 'Location ', 'locations' ),
        'description' => __( 'List of all the locations ', 'locations' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-page',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
        'taxonomies' => array(),
        'hierarchical' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'has_archive' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'show_in_nav_menus' => true,
        'menu_position' => 5,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );
    
    register_post_type( 'location', $args );

}
add_action( 'init', 'create_location__cpt', 0 );



add_filter('use_block_editor_for_post_type', '__return_false');

function add_image_insert_override( $sizes ){
    unset( $sizes[ 'thumbnail' ]);
    unset( $sizes[ 'medium' ]);
    unset( $sizes[ 'medium_large' ] );
    unset( $sizes[ 'large' ]);
    unset( $sizes[ 'full' ] );
    return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'add_image_insert_override' );

function shortcode_post_content($atts) {
    $atts = shortcode_atts(array(
        'id' => get_the_ID(), // By default, get the current post's ID
    ), $atts, 'post_content');

    $post_content = get_post_field('post_content', $atts['id']);
    return apply_filters('the_content', $post_content); // Apply standard content filters, e.g., for auto-adding paragraphs
}

add_shortcode('post_content', 'shortcode_post_content');

function add_archive_to_site_reviews( $args, $post_type ) {

    // Check if the post type is 'site-review' or whatever the actual post type is.
    if ( 'site-review' === $post_type ) {
        $args['has_archive'] = true; // Enable the archive.
        
        // Optionally, you can also control the rewrite slug for the archive:
        $args['rewrite'] = array( 'slug' => 'reviews-archive' ); // Set your desired slug here.
    }

    return $args;
}

add_filter( 'register_post_type_args', 'add_archive_to_site_reviews', 10, 2 );


function forcefav() {
    echo '<link rel="icon" href="https://pacificmindhealth.com/wp-content/uploads/cropped-pmh-logo-web_3-1-32x32.png" sizes="32x32" />
          <link rel="icon" href="https://pacificmindhealth.com/wp-content/uploads/cropped-pmh-logo-web_3-1-192x192.png" sizes="192x192" />
          <link rel="apple-touch-icon" href="https://pacificmindhealth.com/wp-content/uploads/cropped-pmh-logo-web_3-1-180x180.png" />
          <meta name="msapplication-TileImage" content="https://pacificmindhealth.com/wp-content/uploads/cropped-pmh-logo-web_3-1-270x270.png" />';
}

// Hook the function to the wp_head action with priority 0
add_action("wp_head", "forcefav", 0);

function add_featured_image_to_rss($content) {
    global $post;
    if (has_post_thumbnail($post->ID)) {
        $thumbnail = get_the_post_thumbnail($post->ID, 'medium', array('style' => 'margin-bottom:10px;'));
        $content = $thumbnail . $content;
    }
    return $content;
}

add_filter('the_excerpt_rss', 'add_featured_image_to_rss');

function mytheme_print_callrail_in_head() {
    ?>
    <script type="text/javascript" src="https://cdn.callreports.com/companies/762717621/c6ca0b7368d95c7f013f/12/swap.js"></script>
    <?php
}
add_action( 'wp_head', 'mytheme_print_callrail_in_head' );


/**
 * Convert a YouTube or Vimeo watch URL to an embeddable iframe src.
 */
function pmh_video_embed_url( string $url ): string {
	if ( preg_match( '/youtube\.com\/watch\?v=([^&]+)/', $url, $m ) ) {
		return 'https://www.youtube.com/embed/' . $m[1];
	}
	if ( preg_match( '/youtu\.be\/([^?]+)/', $url, $m ) ) {
		return 'https://www.youtube.com/embed/' . $m[1];
	}
	if ( preg_match( '/vimeo\.com\/(\d+)/', $url, $m ) ) {
		return 'https://player.vimeo.com/video/' . $m[1];
	}
	return $url;
}