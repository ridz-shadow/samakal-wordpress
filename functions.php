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
        'label'    => __('Site Title (বাংলা)', 'mytheme'),
        'section'  => 'title_tagline',
        'settings' => 'site_title_bn',
        'type'     => 'text',
    ));

    $wp_customize->add_setting( 'google_site_verification', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control( 'google_site_verification_control', array(
        'label'    => __( 'Google Site Verification Code' ),
        'section'  => 'title_tagline',
        'settings' => 'google_site_verification',
        'type'     => 'text',
    ));

    
    $wp_customize->add_setting( 'fb_app_id', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control( 'fb_app_id_control', array(
        'label'    => __( 'Facebook App ID' ),
        'section'  => 'title_tagline',
        'settings' => 'fb_app_id',
        'type'     => 'text',
    ));

    
    
    $wp_customize->add_setting( 'fb_pages', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control( 'fb_pages_control', array(
        'label'    => __( 'Facebook Pages' ),
        'section'  => 'title_tagline',
        'settings' => 'fb_pages',
        'type'     => 'text',
    ));

    
    
    $wp_customize->add_setting( 'twitter_site_handle', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control( 'twitter_site_handle_control', array(
        'label'    => __( 'Twitter Username' ),
        'section'  => 'title_tagline',
        'settings' => 'twitter_site_handle',
        'type'     => 'text',
    ));
    

    
    
    $wp_customize->add_setting( 'ga4_id', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control( 'ga4_id_control', array(
        'label'    => __( 'Google Analytics 4 ID' ),
        'section'  => 'title_tagline',
        'settings' => 'ga4_id',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting( 'fb_pixel_id', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control( 'fb_pixel_id_control', array(
        'label'    => __( 'Facebook Pixel ID' ),
        'section'  => 'title_tagline',
        'settings' => 'fb_pixel_id',
        'type'     => 'text',
    ));

    // Define platforms and default URLs
    $platforms = array(
        'facebook'  => 'https://www.facebook.com/',
        'twitter'   => 'https://x.com/',
        'linkedin'  => 'https://www.linkedin.com/',
        'youtube'   => 'https://www.youtube.com/',
        'instagram' => 'https://www.instagram.com/',
        'whatsapp'  => 'https://www.whatsapp.com/',
    );

    // Loop through each platform and add setting + control
    foreach ( $platforms as $key => $default_url ) {

        $wp_customize->add_setting( "social_{$key}_url", array(
            'default'           => $default_url,
            'sanitize_callback' => 'esc_url_raw',
        ) );

        $wp_customize->add_control( "social_{$key}_url_control", array(
            'label'    => ucfirst($key) . ' URL',
            'section'  => 'title_tagline',
            'settings' => "social_{$key}_url",
            'type'     => 'url',
        ) );
    }

    // ---------------------------
    // Header Button 1 (label + URL)
    // ---------------------------
    $wp_customize->add_setting( 'header_button_1_label', array(
        'default'           => 'ই-পেপার',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'header_button_1_label_control', array(
        'label'    => __('Button 1 Label', 'samakal'),
        'section'  => 'title_tagline',
        'settings' => 'header_button_1_label',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'header_button_1_url', array(
        'default'           => 'https://epaper.samakal.com/',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'header_button_1_url_control', array(
        'label'    => __('Button 1 URL', 'samakal'),
        'section'  => 'title_tagline',
        'settings' => 'header_button_1_url',
        'type'     => 'url',
    ) );

    // ---------------------------
    // Header Button 2 (label + URL)
    // ---------------------------
    $wp_customize->add_setting( 'header_button_2_label', array(
        'default'           => 'English',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'header_button_2_label_control', array(
        'label'    => __('Button 2 Label', 'samakal'),
        'section'  => 'title_tagline',
        'settings' => 'header_button_2_label',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'header_button_2_url', array(
        'default'           => 'https://en.samakal.com/',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'header_button_2_url_control', array(
        'label'    => __('Button 2 URL', 'samakal'),
        'section'  => 'title_tagline',
        'settings' => 'header_button_2_url',
        'type'     => 'url',
    ) );

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

function mytheme_register_menus() {
    register_nav_menus( array(
        'main_menu'   => __( 'Main Menu', 'mytheme' ),
        'mega_menu'   => __( 'Mega Menu', 'mytheme' ),
        'footer_menu' => __( 'Footer Menu', 'mytheme' ),
    ) );
}
add_action( 'after_setup_theme', 'mytheme_register_menus' );