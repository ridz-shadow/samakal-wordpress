<?php

function custom_logo_setup() {
    add_theme_support( 'custom-logo', array(
        'height'      => 47,
        'width'       => 301,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );
}
add_action( 'after_setup_theme', 'custom_logo_setup' );

function mytheme_customize_register($wp_customize) {
    $wp_customize->add_setting('location', array(
        'default'           => 'ঢাকা',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('location_control', array(
        'label'    => __('Location', 'mytheme'),
        'section'  => 'title_tagline',
        'settings' => 'location',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'mytheme_customize_register');