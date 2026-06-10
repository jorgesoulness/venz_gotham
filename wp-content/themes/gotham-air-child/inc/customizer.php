<?php
/**
 * CRF Foot & Ankle Theme Customizer
 *
 * @package Gotham_Air_Child
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gotham_air_child_customize_register($wp_customize){
   // SECTION
  $wp_customize->add_section('header_info', [
    'title' => 'Header Info'
  ]);
  // Phone Number
  $wp_customize->add_setting('title_phone', [
    'default' => 'More information'
  ]);
  $wp_customize->add_control('title_phone', [
    'label' => 'Phone Title',
    'section' => 'header_info',
    'type' => 'text'
  ]);
  $wp_customize->add_setting('phone_number', [
    'default' => '1-800-123-4560'
  ]);
  $wp_customize->add_control('phone_number', [
    'label' => 'Phone Number',
    'section' => 'header_info',
    'type' => 'text'
  ]);
  // CTA Button
  $wp_customize->add_setting('title_button', [
    'default' => 'Book Consultation'
  ]);
  $wp_customize->add_control('title_button', [
    'label' => 'CTA Button Title',
    'section' => 'header_info',
    'type' => 'text'
  ]);
  $wp_customize->add_setting('button_link', [
    'default' => '#'
  ]);
  $wp_customize->add_control('button_link', [
    'label' => 'CTA Button Link',
    'section' => 'header_info',
    'type' => 'text'
  ]);
}

add_action('customize_register', 'gotham_air_child_customize_register');
