<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
function gt_footer_customizer( $wp_customize ) {
	$wp_customize->add_section(
		'gt_footer_section',
		[
			'title'    => __( 'Gotham Air Footer', 'gotham-air-child' ),
			'priority' => 170,
		]
	);
	/*
	|--------------------------------------------------------------------------
	| Footer Backgrounds
	|--------------------------------------------------------------------------
	*/
	$wp_customize->add_setting( 'gt_footer_top_bg' );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'gt_footer_top_bg',
			[
				'label'   => 'Footer Top Background',
				'section' => 'gt_footer_section',
			]
		)
	);
	$wp_customize->add_setting( 'gt_footer_bottom_bg' );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'gt_footer_bottom_bg',
			[
				'label'   => 'Footer Bottom Background',
				'section' => 'gt_footer_section',
			]
		)
	);
	/*
	|--------------------------------------------------------------------------
	| CTA
	|--------------------------------------------------------------------------
	*/
	$wp_customize->add_setting(
		'gt_footer_cta_title',
		[
			'default' => 'READY TO GET STARTED?',
		]
	);
	$wp_customize->add_control(
		'gt_footer_cta_title',
		[
			'label'   => 'CTA Title',
			'section' => 'gt_footer_section',
			'type'    => 'text',
		]
	);
	$wp_customize->add_setting( 'gt_footer_newsletter_shortcode' );
	$wp_customize->add_control(
		'gt_footer_newsletter_shortcode',
		[
			'label'   => 'Newsletter Shortcode',
			'section' => 'gt_footer_section',
			'type'    => 'textarea',
		]
	);
	/*
	|--------------------------------------------------------------------------
	| Widget Titles
	|--------------------------------------------------------------------------
	*/
	$titles = [
		'services'    => 'Services',
		'quicklinks'  => 'Quick Links',
		'hours'       => 'Working Hours',
		'certificate' => 'Certifications',
	];
	foreach ( $titles as $key => $default ) {
		$wp_customize->add_setting(
			'gt_footer_' . $key . '_title',
			[
				'default' => $default,
			]
		);
		$wp_customize->add_control(
			'gt_footer_' . $key . '_title',
			[
				'label'   => ucfirst( $key ) . ' Title',
				'section' => 'gt_footer_section',
				'type'    => 'text',
			]
		);
	}
	/*
	|--------------------------------------------------------------------------
	| Working Hours
	|--------------------------------------------------------------------------
	*/
	for ( $i = 1; $i <= 4; $i++ ) {
		$wp_customize->add_setting( 'gt_footer_hours_day_' . $i );
		$wp_customize->add_control(
			'gt_footer_hours_day_' . $i,
			[
				'label'   => 'Day ' . $i,
				'section' => 'gt_footer_section',
				'type'    => 'text',
			]
		);
		$wp_customize->add_setting( 'gt_footer_hours_time_' . $i );
		$wp_customize->add_control(
			'gt_footer_hours_time_' . $i,
			[
				'label'   => 'Time ' . $i,
				'section' => 'gt_footer_section',
				'type'    => 'text',
			]
		);
	}
	/*
	|--------------------------------------------------------------------------
	| IMAGEN CERTIFICADO
	|--------------------------------------------------------------------------
	*/
	$wp_customize->add_setting( 'gt_footer_certificate_image' );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'gt_footer_certificate_image',
			[
				'label'   => 'Certificate Image',
				'section' => 'gt_footer_section',
			]
		)
	);
	/*
	|--------------------------------------------------------------------------
	| Socials
	|--------------------------------------------------------------------------
	*/
	$socials = [
		'facebook',
		'instagram',
		'linkedin',
		'google',
		'youtube',
	];
	foreach ( $socials as $social ) {
		$wp_customize->add_setting( 'gt_footer_' . $social );
		$wp_customize->add_control(
			'gt_footer_' . $social,
			[
				'label'   => ucfirst( $social ) . ' URL',
				'section' => 'gt_footer_section',
				'type'    => 'url',
			]
		);
	}
	/*
	|--------------------------------------------------------------------------
	| Copyright
	|--------------------------------------------------------------------------
	*/
	$wp_customize->add_setting(
		'gt_footer_copyright_text',
		[
			'default' => 'Copyright © ' . date('Y') . ' Gotham Air. All Rights Reserved.',
		]
	);
	$wp_customize->add_control(
		'gt_footer_copyright_text',
		[
			'label'   => 'Copyright Text',
			'section' => 'gt_footer_section',
			'type'    => 'text',
		]
	);
	$wp_customize->add_setting(
		'gt_footer_developer_text',
		[
			'default' => 'Designed By',
		]
	);
	$wp_customize->add_control(
		'gt_footer_developer_text',
		[
			'label'   => 'Developer Label',
			'section' => 'gt_footer_section',
			'type'    => 'text',
		]
	);
	$wp_customize->add_setting(
		'gt_footer_developer_name',
		[
			'default' => 'Venz Media',
		]
	);
	$wp_customize->add_control(
		'gt_footer_developer_name',
		[
			'label'   => 'Developer Name',
			'section' => 'gt_footer_section',
			'type'    => 'text',
		]
	);
	$wp_customize->add_setting(
		'gt_footer_developer_url',
		[
			'default' => '#',
		]
	);
	$wp_customize->add_control(
		'gt_footer_developer_url',
		[
			'label'   => 'Developer URL',
			'section' => 'gt_footer_section',
			'type'    => 'url',
		]
	);
  /*
  |--------------------------------------------------------------------------
  | Footer Internal Content
  |--------------------------------------------------------------------------
  */
  $wp_customize->add_setting( 'gt_footer_internal_logo' );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'gt_footer_internal_logo',
      [
        'label'   => 'Internal Footer Logo',
        'section' => 'gt_footer_section',
      ]
    )
  );
  $wp_customize->add_setting(
    'gt_footer_internal_phone_title',
    [
      'default' => 'Call any time 24/7',
    ]
  );
  $wp_customize->add_control(
    'gt_footer_internal_phone_title',
    [
      'label'   => 'Internal Phone Title',
      'section' => 'gt_footer_section',
      'type'    => 'text',
    ]
  );
  $wp_customize->add_setting( 'gt_footer_internal_phone' );
  $wp_customize->add_control(
    'gt_footer_internal_phone',
    [
      'label'   => 'Internal Phone',
      'section' => 'gt_footer_section',
      'type'    => 'text',
    ]
  );
  $wp_customize->add_setting( 'gt_footer_internal_phone_icon' );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'gt_footer_internal_phone_icon',
      [
        'label'   => 'Internal Phone Icon',
        'section' => 'gt_footer_section',
      ]
    )
  );
}
add_action( 'customize_register', 'gt_footer_customizer' );