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

function customize_register($wp_customize) {
    $wp_customize->add_setting('location', array(
        'default'           => 'ঢাকা',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('location_control', array(
        'label'    => __('Location'),
        'section'  => 'title_tagline',
        'settings' => 'location',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('site_title_bn', array(
        'default'           => 'সমকাল',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('site_title_bn_control', array(
        'label'    => __('Site Title (বাংলা)'),
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

    // ---------------------------
    // Header Button 3 (label + URL)
    // ---------------------------
    $wp_customize->add_setting( 'header_button_3_label', array(
        'default'           => 'লাইভ',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'header_button_3_label_control', array(
        'label'    => __('Button 2 Label', 'samakal'),
        'section'  => 'title_tagline',
        'settings' => 'header_button_3_label',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'header_button_3_url', array(
        'default'           => 'https://en.samakal.com/live',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'header_button_3_url_control', array(
        'label'    => __('Button 2 URL', 'samakal'),
        'section'  => 'title_tagline',
        'settings' => 'header_button_3_url',
        'type'     => 'url',
    ) );

    $wp_customize->add_setting( 'editorsline', array(
        'default'           => '<h5>সম্পাদক : শাহেদ মুহাম্মদ আলী</h5>
    <h5>প্রকাশক : আবুল কালাম আজাদ</h5>
    <p>ফোন : <a href="tel:55029832-38">৫৫০২৯৮৩২-৩৮</a></p>
    <p>বিজ্ঞাপন : <a href="tel:+8801714080378">+৮৮০১৭১৪০৮০৩৭৮</a></p>
    <p>ই-মেইল: 
    <a href="mailto:samakalad@gmail.com">samakalad@gmail.com</a>, 
    <a href="mailto:marketingonline@samakal.com">marketingonline@samakal.com</a>
    </p>
    <address>টাইমস মিডিয়া ভবন (৫ম তলা), ৩৮৭ তেজগাঁও শিল্প এলাকা, ঢাকা - ১২০৮</address>',
        'sanitize_callback' => 'wp_kses_post',
    ) );
    
    $wp_customize->add_control( 'editorsline_control', array(
        'label'    => __("Editor's Line", 'samakal'),
        'section'  => 'title_tagline',
        'settings' => 'editorsline',
        'type'     => 'textarea',
    ) );

}
add_action('customize_register', 'customize_register');

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

function register_menus() {
    register_nav_menus( array(
        'main_menu'   => __( 'Main Menu' ),
        'mega_menu'   => __( 'Mega Menu' ),
        'footer_menu' => __( 'Footer Menu' ),
    ) );
}
add_action( 'after_setup_theme', 'register_menus' );






function theme_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'home_section', array(
        'title'       => __( 'Home' ),
        'priority'    => 30,
        'description' => __( 'Customize Home page settings here.' ),
    ) );

    
$wp_customize->add_setting( 'lead_sidebar_category', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'lead_sidebar_category', array(
    'label'    => 'Lead Sidebar Category',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );




$wp_customize->add_setting( 'after_lead', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'after_lead', array(
    'label'    => 'After Lead Category',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );




$wp_customize->add_setting( 'category_1', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'category_1', array(
    'label'    => 'Category 1',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );

$wp_customize->add_setting( 'category_2', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'category_2', array(
    'label'    => 'Category 2',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );

$wp_customize->add_setting( 'category_3', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'category_3', array(
    'label'    => 'Category 3',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );

$wp_customize->add_setting( 'category_4', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'category_4', array(
    'label'    => 'Category 4',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );

$wp_customize->add_setting( 'category_5', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'category_5', array(
    'label'    => 'Category 5',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );

$wp_customize->add_setting( 'category_6', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'category_6', array(
    'label'    => 'Category 6',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );

$wp_customize->add_setting( 'category_7', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'category_7', array(
    'label'    => 'Category 7',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );

$wp_customize->add_setting( 'category_8', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'category_8', array(
    'label'    => 'Category 8',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );

$wp_customize->add_setting( 'category_9', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'category_9', array(
    'label'    => 'Category 9',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );

$wp_customize->add_setting( 'category_10', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'category_10', array(
    'label'    => 'Category 10',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );

$wp_customize->add_setting( 'category_11', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'category_11', array(
    'label'    => 'Category 11',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );

$wp_customize->add_setting( 'category_12', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'category_12', array(
    'label'    => 'Category 12',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );

$wp_customize->add_setting( 'category_13', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'category_13', array(
    'label'    => 'Category 13',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );

$wp_customize->add_setting( 'category_14', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'category_14', array(
    'label'    => 'Category 14',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );

$wp_customize->add_setting( 'category_15', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'category_15', array(
    'label'    => 'Category 15',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );

$wp_customize->add_setting( 'category_16', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'category_16', array(
    'label'    => 'Category 16',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );

$wp_customize->add_setting( 'category_17', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'category_17', array(
    'label'    => 'Category 17',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );

$wp_customize->add_setting( 'category_18', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'category_18', array(
    'label'    => 'Category 18',
    'section'  => 'home_section',
    'type'     => 'select',
    'choices'  => wp_list_pluck(
        get_categories( array( 'hide_empty' => false ) ),
        'name',
        'term_id'
    ),
) );

}
add_action( 'customize_register', 'theme_customize_register' );


function set_post_views($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);

    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '1');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}