<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/*
|--------------------------------------------------------------------------
| Elementor Category
|--------------------------------------------------------------------------
*/
function gt_add_elementor_widget_categories( $elements_manager ) {
	$elements_manager->add_category(
		'gotham-air',
		[
			'title' => esc_html__( 'Gotham Air', 'gotham-air-child' ),
			'icon'  => 'fa fa-plug',
		]
	);
}
add_action(
	'elementor/elements/categories_registered',
	'gt_add_elementor_widget_categories'
);
/*
|--------------------------------------------------------------------------
| Register Widgets
|--------------------------------------------------------------------------
*/
function gt_register_elementor_widgets( $widgets_manager ) {
	require_once __DIR__ . '/widgets/gt-hero.php';
	$widgets_manager->register(
		new \GT_Hero_Widget()
	);
	require_once __DIR__ . '/widgets/gt-about-us.php';
	$widgets_manager->register(
			new \GT_About_Us_Widget()
	);
	require_once __DIR__ . '/widgets/gt-brands.php';
	$widgets_manager->register(
			new \GT_Brands_Widget()
	);
	require_once __DIR__ . '/widgets/gt-services.php';
	$widgets_manager->register(
			new \GT_Services_Widget()
	);
	require_once __DIR__ . '/widgets/gt-faqs.php';
	$widgets_manager->register(
			new \GT_FAQS_Widget()
	);
	require_once __DIR__ . '/widgets/gt-cta.php';
	$widgets_manager->register(
			new \GT_CTA_Widget()
	);
	require_once __DIR__  . '/widgets/gt-banner-page.php';
	$widgets_manager->register(
			new \GT_Banner_Page_Widget()
	);
	require_once __DIR__ . '/widgets/gt-content-about-us.php';
	$widgets_manager->register(
		new \GT_Content_About_Us_Widget()
	);
	require_once __DIR__ . '/widgets/gt-description.php';
	$widgets_manager->register(
		new \GT_Description_Widget()
	);
	require_once __DIR__ . '/widgets/gt-faqs-full.php';
	$widgets_manager->register(
		new \GT_FAQS_FULL_Widget()
	);
	require_once __DIR__ . '/widgets/gt-about-us-2.php';
	$widgets_manager->register(
		new \GT_About_Us_2_Widget()
	);
	require_once __DIR__ . '/widgets/gt-reviews.php';
	$widgets_manager->register(
		new \GT_Reviews_Widget()
	);
	require_once __DIR__ . '/widgets/gt-why-choose.php';
	$widgets_manager->register(
			new \GT_Why_Choose_Widget()
	);
	require_once __DIR__ . '/widgets/gt-contact-us.php';
	$widgets_manager->register(
			new \GT_Contact_Us_Widget()
	);
	require_once __DIR__ . '/widgets/gt-map.php';
	$widgets_manager->register(
			new \GT_Map_Widget()
	);
	require_once __DIR__ . '/widgets/gt-our-values.php';
	$widgets_manager->register(
			new \GT_Our_Values_Widget()
	);
	require_once __DIR__ . '/widgets/gt-team.php';
	$widgets_manager->register(
			new \GT_Team_Widget()
	);
	require_once __DIR__ . '/widgets/class-gt-posts-blog-widget.php';
	$widgets_manager->register(
		new \GT_Posts_Blog_Widget()
	);
	require_once __DIR__ . '/widgets/gt-services-carousel.php';
	$widgets_manager->register(
		new \GT_Services_Carousel_Widget()
	);
}
/**
 * ==================================================
 * GT POSTS BLOG
 * ==================================================
 */
/**
 * Registrar Scripts
 */
function gt_posts_blog_scripts() {
	wp_register_script(
		'gt-posts-blog',
		get_stylesheet_directory_uri() . '/assets/js/gt-posts-blog.js',
		['jquery'],
		time(),
		true
	);
	wp_localize_script(
		'gt-posts-blog',
		'gtPostsBlog',
		[
			'ajaxurl' => admin_url('admin-ajax.php'),
			'nonce'   => wp_create_nonce('gt_posts_blog_nonce')
		]
	);
}
add_action('wp_enqueue_scripts', 'gt_posts_blog_scripts');
/**
 * AJAX Logged Users
 */
add_action(
	'wp_ajax_gt_load_more_posts',
	'gt_load_more_posts'
);
/**
 * AJAX Guests
 */
add_action(
	'wp_ajax_nopriv_gt_load_more_posts',
	'gt_load_more_posts'
);
/*
|--------------------------------------------------------------------------
| Register Resources for Elementor
|--------------------------------------------------------------------------
*/
add_action('elementor/widgets/register', 'gt_register_elementor_widgets');
function gt_register_widget_assets() {
	wp_register_script('gt-hero', get_stylesheet_directory_uri() . '/inc/elementor/assets/js/gt-hero.js', ['jquery'], '1.0.0', true);
	wp_register_script('gt-services', get_stylesheet_directory_uri() . '/inc/elementor/assets/js/gt-services.js', ['jquery'], '1.0.0', true);
}
add_action('elementor/frontend/after_register_scripts', 'gt_register_widget_assets');