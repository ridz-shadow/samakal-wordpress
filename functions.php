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

    $wp_customize->add_setting('site_title_bn', array(
        'default'           => 'সমকাল',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('site_title_bn_control', array(
        'label'    => __('site_title_bn', 'mytheme'),
        'section'  => 'title_tagline',
        'settings' => 'site_title_bn',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'mytheme_customize_register');

add_action('edit_form_after_title', function($post) {
    $shoulder = get_post_meta($post->ID, '_post_shoulder', true);
    $subHead = get_post_meta($post->ID, '_post_subHead', true);
    echo '<div style="margin-bottom:10px;"><input type="text" name="post_shoulder" value="'.esc_attr($shoulder).'" style="width:100%; font-size:16px; padding:4px;" placeholder="Shoulder"></div>';
    echo '<div style="margin-bottom:10px;"><input type="text" name="post_subHead" value="'.esc_attr($subHead).'" style="width:100%; font-size:16px; padding:4px;" placeholder="Sub head"></div>';
});

add_action('save_post', function($post_id) {
    if (array_key_exists('post_shoulder', $_POST)) {
        update_post_meta($post_id, '_post_shoulder', sanitize_text_field($_POST['post_shoulder']));
    }
    if (array_key_exists('post_subHead', $_POST)) {
        update_post_meta($post_id, '_post_subHead', sanitize_text_field($_POST['post_subHead']));
    }
});

add_action('after_setup_theme', function() {
    add_theme_support('post-thumbnails');
});

add_action('add_meta_boxes', function() {
    add_meta_box(
        'post_reporter',
        'Reporter',
        function($post) {
            wp_nonce_field('save_post_reporter', 'post_reporter_nonce');
            $value = get_post_meta($post->ID, 'post_reporter', true);
            echo '<input type="text" name="post_reporter" value="'.esc_attr($value).'" style="width:100%" required>';
        },
        'post',
        'side',
        'high'
    );
});

add_action('save_post', function($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!isset($_POST['post_reporter_nonce']) || !wp_verify_nonce($_POST['post_reporter_nonce'], 'save_post_reporter')) return;

    if (array_key_exists('post_reporter', $_POST)) {
        $value = sanitize_text_field($_POST['post_reporter']);
        if (!empty($value)) {
            update_post_meta($post_id, 'post_reporter', $value);
        } else {
            wp_die('Reporter field is required. <a href="javascript:history.back()">Go Back</a>');
        }
    }
});
