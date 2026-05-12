<?php

if (is_file(__DIR__.'/vendor/autoload_packages.php')) {
    require_once __DIR__.'/vendor/autoload_packages.php';
}

function tailpress(): TailPress\Framework\Theme
{
    return TailPress\Framework\Theme::instance()
        ->assets(fn($manager) => $manager
            ->withCompiler(new TailPress\Framework\Assets\ViteCompiler, fn($compiler) => $compiler
                ->registerAsset('resources/css/app.css')
                ->registerAsset('resources/js/app.js')
                ->editorStyleFile('resources/css/editor-style.css')
            )
            ->enqueueAssets()
        )
        ->features(fn($manager) => $manager->add(TailPress\Framework\Features\MenuOptions::class))
        ->menus(fn($manager) => $manager->add('primary', __( 'Primary Menu', 'tailpress')))
        ->themeSupport(fn($manager) => $manager->add([
            'title-tag',
            'custom-logo',
            'post-thumbnails',
            'align-wide',
            'wp-block-styles',
            'responsive-embeds',
            'html5' => [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ]
        ]));
}

tailpress();

// Register Custom Post Type: Treatments
function create_treatment_cpt() {
    $labels = array(
        'name'                  => _x( 'Treatments', 'Post Type General Name', 'treatments' ),
        'singular_name'         => _x( 'Treatment', 'Post Type Singular Name', 'treatments' ),
        'menu_name'             => _x( 'Treatments', 'Admin Menu text', 'treatments' ),
        'name_admin_bar'        => _x( 'Treatment', 'Add New on Toolbar', 'treatments' ),
        'archives'              => __( 'Treatment', 'treatments' ),
        'attributes'            => __( 'Treatment', 'treatments' ),
        'parent_item_colon'     => __( 'Treatment', 'treatments' ),
        'all_items'             => __( 'All Treatments', 'treatments' ),
        'add_new_item'          => __( 'Add New Treatment', 'treatments' ),
        'add_new'               => __( 'Add New', 'treatments' ),
        'new_item'              => __( 'New Treatment', 'treatments' ),
        'edit_item'             => __( 'Edit Treatment', 'treatments' ),
        'update_item'           => __( 'Update Treatment', 'treatments' ),
        'view_item'             => __( 'View Treatment', 'treatments' ),
        'view_items'            => __( 'View Treatments', 'treatments' ),
        'search_items'          => __( 'Search Treatment', 'treatments' ),
        'not_found'             => __( 'Not found', 'treatments' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'treatments' ),
        'featured_image'        => __( 'Featured Image', 'treatments' ),
        'set_featured_image'    => __( 'Set featured image', 'treatments' ),
        'remove_featured_image' => __( 'Remove featured image', 'treatments' ),
        'use_featured_image'    => __( 'Use as featured image', 'treatments' ),
        'insert_into_item'      => __( 'Insert into Treatment', 'treatments' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Treatment', 'treatments' ),
        'items_list'            => __( 'Treatments list', 'treatments' ),
        'items_list_navigation' => __( 'Treatments list navigation', 'treatments' ),
        'filter_items_list'     => __( 'Filter Treatments list', 'treatments' ),
    );

    $args = array(
        'label'               => __( 'Treatment', 'treatments' ),
        'description'         => __( 'List of all the services', 'treatments' ),
        'labels'              => $labels,
        'menu_icon'           => 'dashicons-admin-page',
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
        'taxonomies'          => array(),
        'hierarchical'        => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'has_archive'         => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'can_export'          => true,
        'show_in_nav_menus'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'rewrite'             => array( 'slug' => 'what-we-treat', 'with_front' => false ),
    );

    register_post_type( 'what-we-treat', $args );
}
add_action( 'init', 'create_treatment_cpt', 0 );
