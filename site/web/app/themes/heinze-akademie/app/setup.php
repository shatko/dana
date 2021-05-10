<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('sage/main.css', asset_path('styles/main.css'), false, null);
    wp_enqueue_script('sage/main.js', asset_path('scripts/main.js'), ['jquery'], null, true);

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}, 100);

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from Soil when plugin is activated
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil-clean-up');
    add_theme_support('soil-jquery-cdn');
    add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');

    /**
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
        'footer_navigation' => __('Footer Navigation', 'sage'),
    ]);

    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Use main stylesheet for visual editor
     * @see resources/assets/styles/layouts/_tinymce.scss
     */
    add_editor_style(asset_path('styles/main.css'));
}, 20);

/**
 * Register sidebars
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ];
    register_sidebar([
        'name'          => __('Primary', 'sage'),
        'id'            => 'sidebar-primary'
    ] + $config);
    register_sidebar([
        'name'          => __('Footer', 'sage'),
        'id'            => 'sidebar-footer'
    ] + $config);
});

/**
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action('the_post', function ($post) {
    sage('blade')->share('post', $post);
});

/**
 * Setup Sage options
 */
add_action('after_setup_theme', function () {
    /**
     * Add JsonManifest to Sage container
     */
    sage()->singleton('sage.assets', function () {
        return new JsonManifest(config('assets.manifest'), config('assets.uri'));
    });

    /**
     * Add Blade to Sage container
     */
    sage()->singleton('sage.blade', function (Container $app) {
        $cachePath = config('view.compiled');
        if (!file_exists($cachePath)) {
            wp_mkdir_p($cachePath);
        }
        (new BladeProvider($app))->register();
        return new Blade($app['view']);
    });

    /**
     * Create @asset() Blade directive
     */
    sage('blade')->compiler()->directive('asset', function ($asset) {
        return "<?= " . __NAMESPACE__ . "\\asset_path({$asset}); ?>";
    });
});


/**
 * Additional head Scripts
 */
add_action('wp_head', function() {
    ?>
    <link rel="apple-touch-icon" sizes="180x180" href="/app/themes/heinze-akademie/resources/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/app/themes/heinze-akademie/resources/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/app/themes/heinze-akademie/resources/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/app/themes/heinze-akademie/resources/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="/app/themes/heinze-akademie/resources/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <?php
});

add_action('admin_head', function() {
    ?>
    <link rel="apple-touch-icon" sizes="180x180" href="/app/themes/heinze-akademie/resources/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/app/themes/heinze-akademie/resources/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/app/themes/heinze-akademie/resources/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/app/themes/heinze-akademie/resources/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="/app/themes/heinze-akademie/resources/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <?php
});


/*
 * Back-End Personalization
 */
add_action('login_head', function() {
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/wortwerkstatt-login/wortwerkstatt-login-styles.css" />';
});

/**
 * Sets Default Gutenberg Blocks
 */
add_filter( 'allowed_block_types', function ( $allowed_blocks ) {
    return array(
        // assets
        'acf/button',
        'acf/gradient-text',

        // sections
        'acf/home-header',
        'acf/list-teasers',
        'acf/two-column-content',
        'acf/starttermine',
        'acf/events',
        'acf/call-back-form',
    );
});

remove_theme_support('core-block-patterns');

/**
 * Sets Custom Block Categories
 */
add_filter( 'block_categories', function( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'assets',
                'title' => __( 'Assets', 'assets' ),
            ),
            array(
                'slug' => 'sections',
                'title' => __( 'Sections', 'sections' ),
            ),
        )
    );
}, 10, 2);

/**
 * Sets ACF Options
 */
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' 	=> 'Heinze Starttermine',
        'menu_title'	=> 'Heinze Starttermine',
        'menu_slug' 	=> 'heinze-starttermine',
        'capability'	=> 'edit_posts',
        'redirect'		=> true
    ));

    acf_add_options_page(array(
        'page_title' 	=> 'Heinze Events',
        'menu_title'	=> 'Heinze Events',
        'menu_slug' 	=> 'heinze-events',
        'capability'	=> 'edit_posts',
        'redirect'		=> true
    ));

	acf_add_options_page(array(
		'page_title' 	=> 'Heinze General Settings',
		'menu_title'	=> 'Heinze Settings',
		'menu_slug' 	=> 'heinze-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Marquee Settings',
		'menu_title'	=> 'Marquee Settings',
		'parent_slug'	=> 'heinze-general-settings',
	));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Header Settings',
        'menu_title'	=> 'Header Settings',
        'parent_slug'	=> 'heinze-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Footer Settings',
        'menu_title'	=> 'Footer Settings',
        'parent_slug'	=> 'heinze-general-settings',
    ));
}

/**
 * Sets img title if the alt text is missing
 */
add_filter('wp_get_attachment_image_attributes', function ($attr, $attachment = null) {
    $img_title = trim(strip_tags($attachment->post_title));

    if (empty($attr['alt'])) {
        $attr['alt'] = $img_title;
        $attr['title'] = $img_title;
    }
    return $attr;
}, 10, 2);
