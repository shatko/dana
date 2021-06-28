<?php
namespace App;
add_action( 'init', function() {

    /**
     * Post types
     */
    register_extended_post_type('team', [
        'menu_position' => 6,
        'has_archive' => false,
        'archive' => false,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-businessperson',
        'labels' => [
            'name' => 'Team',
            'menu_name' => 'Team',
        ],
        'archive' => [
            'nopaging' => true,
        ],
        'show_in_rest' => true,
    ], [
        'singular' => 'Team',
        'plural'   => 'Teams',
        'slug'     => 'team',
    ]);

    /**
     * Taxonomies
     */
    register_extended_taxonomy('category-team', 'team', [
        'meta_box' => 'simple',
        'show_admin_column' => true,
    ], [
        'singular' => 'Category',
        'plural'   => 'Categories',
    ]);
});
