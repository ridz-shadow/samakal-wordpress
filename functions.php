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

function add_subtitle_meta_box() {
    add_meta_box('post_subtitle', 'Subtitle', 'subtitle_callback', 'post', 'normal', 'high');
}
add_action('add_meta_boxes', 'add_subtitle_meta_box');

function subtitle_callback($post) {
    $subtitle = get_post_meta($post->ID, '_post_subtitle', true);
    echo '<input type="text" style="width:100%" name="post_subtitle" value="'.esc_attr($subtitle).'">';
}

function save_subtitle($post_id) {
    if (array_key_exists('post_subtitle', $_POST)) {
        update_post_meta($post_id, '_post_subtitle', sanitize_text_field($_POST['post_subtitle']));
    }
}
add_action('save_post', 'save_subtitle');
