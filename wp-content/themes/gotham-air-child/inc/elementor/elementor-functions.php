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
}
/*
|--------------------------------------------------------------------------
| Register Resources for Elementor
|--------------------------------------------------------------------------
*/
add_action('elementor/widgets/register', 'gt_register_elementor_widgets');
function gt_register_widget_assets() {
	wp_register_script(
		'gt-hero',
		get_stylesheet_directory_uri() . '/inc/elementor/assets/js/gt-hero.js',
		[
			'jquery'
		],
		'1.0.0',
		true
	);
}
add_action('elementor/frontend/after_register_scripts', 'gt_register_widget_assets');