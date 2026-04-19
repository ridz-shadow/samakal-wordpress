<footer>
    <div class="container">
        <div class="row">
            <div class="footerTopSection">
                <ul>
                <?php
                    $menu_name = 'footer_menu';
                    $locations = get_nav_menu_locations();
                    $menu = wp_get_nav_menu_object($locations[$menu_name]);
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                    foreach ($menu_items as $item): 
                ?>
                    <li><a href="<?php echo esc_url($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
                <?php endforeach; ?>
                </ul>
            </div>
            <div class="footerMiddleSection">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <p><a href="/privacy">Privacy Policy</a></p>
                        <p><a href="/terms">Terms of Use</a></p>
                        <p><a href="/"><?php echo get_bloginfo('name'); ?> All Rights Reserved</a></p>
                    </div>
                    <div class="col-lg-4 col-12">
                        <?php echo wp_kses_post( get_theme_mod('editorsline') ); ?>
                    </div>
                    <div class="col-lg-4 col-12">
                        <!-- <h2 class="FSocialHeadLine">ফলো করুন <span><?php echo esc_html(get_theme_mod('site_title_bn')); ?></span>-এর খবর</h2> -->
                        <div class="FSocialShare">
                            <ul>
                                <li><a href="<?php echo esc_attr(get_theme_mod("social_facebook_url")); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="<?php echo esc_attr(get_theme_mod("social_twitter_url")); ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="<?php echo esc_attr(get_theme_mod("social_linkedin_url")); ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                                <li><a href="<?php echo esc_attr(get_theme_mod("social_youtube_url")); ?>?sub_confirmation=1" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="<?php echo esc_attr(get_theme_mod("social_instagram_url")); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <a href="" class="Flogo" rel="home">
                        <img src="<?php echo esc_url( ( function_exists('get_custom_logo') && has_custom_logo() ) ? wp_get_attachment_image_url( get_theme_mod('custom_logo'), 'full' ) : get_template_directory_uri() . '/images/logo.png' ); ?>"
                            title="<?php the_title(); ?>"
                            alt="<?php the_title(); ?>" class="img-fluid img100">
                    </a>
                        <h2 class="FCopyRight">© ২০২৩ - ২০২৬ <a href="<?php echo esc_url( home_url('/') ); ?>"><?php echo esc_html(get_theme_mod('site_title_bn')); ?></a> কর্তৃক সর্বসত্ব ® সংরক্ষিত</h2>
                        <p class="d-none"><a href="<?php echo esc_url( home_url('/') ); ?>" rel="nofollow" target="_blank">উন্নয়নে <?php echo esc_html(get_theme_mod('site_title_bn')); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>