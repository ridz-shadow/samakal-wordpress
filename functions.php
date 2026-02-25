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

add_action('edit_form_before_title', function($post) {
    $subtitle = get_post_meta($post->ID, '_post_subtitle', true);
    echo '<div style="margin-bottom:10px;"><input type="text" name="post_subtitle" value="'.esc_attr($subtitle).'" style="width:100%; font-size:16px; padding:4px;" placeholder="Subtitle"></div>';
});

add_action('save_post', function($post_id) {
    if (array_key_exists('post_subtitle', $_POST)) {
        update_post_meta($post_id, '_post_subtitle', sanitize_text_field($_POST['post_subtitle']));
    }
});
