<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
function gt_header_customizer( $wp_customize ) {
	$wp_customize->add_section(
		'gt_header_section',
		[
			'title'    => __( 'GT Header', 'gotham-air-child' ),
			'priority' => 30,
		]
	);
	/*
	|--------------------------------------------------------------------------
	| LOGOS
	|--------------------------------------------------------------------------
	*/
	$logos = [
		'gt_header_logo'        => 'Header Logo',
		'gt_header_sticky_logo' => 'Sticky Logo',
		'gt_header_mobile_logo' => 'Mobile Logo',
	];
	foreach ( $logos as $setting => $label ) {
		$wp_customize->add_setting(
			$setting,
			[
				'sanitize_callback' => 'esc_url_raw',
			]
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				$setting,
				[
					'label'   => __( $label, 'gotham-air-child' ),
					'section' => 'gt_header_section',
				]
			)
		);
	}
	/*
	|--------------------------------------------------------------------------
	| TOP BAR
	|--------------------------------------------------------------------------
	*/
	$wp_customize->add_setting(
		'gt_top_phone',
		[
			'sanitize_callback' => 'sanitize_text_field',
		]
	);
	$wp_customize->add_control(
		'gt_top_phone',
		[
			'label'   => __( 'Phone', 'gotham-air-child' ),
			'section' => 'gt_header_section',
			'type'    => 'text',
		]
	);
	$wp_customize->add_setting(
		'gt_top_email',
		[
			'sanitize_callback' => 'sanitize_email',
		]
	);
	$wp_customize->add_control(
		'gt_top_email',
		[
			'label'   => __( 'Email', 'gotham-air-child' ),
			'section' => 'gt_header_section',
			'type'    => 'email',
		]
	);
	$wp_customize->add_setting(
		'gt_top_address',
		[
			'sanitize_callback' => 'sanitize_text_field',
		]
	);
	$wp_customize->add_control(
		'gt_top_address',
		[
			'label'   => __( 'Address', 'gotham-air-child' ),
			'section' => 'gt_header_section',
			'type'    => 'text',
		]
	);
	/*
	|--------------------------------------------------------------------------
	| SOCIALS
	|--------------------------------------------------------------------------
	*/
	$socials = [
		'facebook',
		'google',
		'linkedin',
		'instagram',
	];
	foreach ( $socials as $social ) {
		$wp_customize->add_setting(
			'gt_' . $social,
			[
				'sanitize_callback' => 'esc_url_raw',
			]
		);
		$wp_customize->add_control(
			'gt_' . $social,
			[
				'label'   => ucfirst( $social ) . ' URL',
				'section' => 'gt_header_section',
				'type'    => 'url',
			]
		);
	}
	/*
	|--------------------------------------------------------------------------
	| CTA BUTTON
	|--------------------------------------------------------------------------
	*/
	$wp_customize->add_setting(
		'gt_header_button_text',
		[
			'default' => 'Get A Quote',
			'sanitize_callback' => 'sanitize_text_field',
		]
	);
	$wp_customize->add_control(
		'gt_header_button_text',
		[
			'label'   => __( 'Button Text', 'gotham-air-child' ),
			'section' => 'gt_header_section',
			'type'    => 'text',
		]
	);
	$wp_customize->add_setting(
		'gt_header_button_url',
		[
			'default' => '#',
			'sanitize_callback' => 'esc_url_raw',
		]
	);
	$wp_customize->add_control(
		'gt_header_button_url',
		[
			'label'   => __( 'Button URL', 'gotham-air-child' ),
			'section' => 'gt_header_section',
			'type'    => 'url',
		]
	);
}
add_action( 'customize_register', 'gt_header_customizer' );