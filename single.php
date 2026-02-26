<!doctype html>
<html lang="bn">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php the_title(); ?></title>
    <meta http-equiv="refresh" content="">
    <meta name="author" content="<?php bloginfo("name"); ?>">
    <meta name="Developer" content="<?php echo esc_attr(wp_get_theme()->get("Author")); ?>">
    <meta name="resource-type" content="document">
    <meta name="contact" content="<?php echo esc_attr(get_option("admin_email")); ?>">
    <meta name="copyright" content="Copyright (c) <?php echo date("Y"); ?>. All Rights &reg; Reserved by <?php echo esc_url(home_url("/")); ?>">
    <meta name="google-site-verification" content="<?php echo esc_attr(get_theme_mod("google_site_verification")); ?>" />
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="googlebot-news" content="index, follow">
    <meta name="msnbot" content="index, follow">
    <meta property="fb:app_id" content="<?php echo esc_attr(get_theme_mod("fb_app_id")); ?>">
    <meta property="fb:pages" content="<?php echo esc_attr(get_theme_mod("fb_pages")); ?>">
    <meta name="description" content="<?php echo esc_attr(wp_strip_all_tags(get_the_excerpt())); ?>">
    <meta name="keywords" content="<?php echo esc_attr(get_post_meta(get_the_ID(), "keywords", true)); ?>">
    <meta property="og:site_name" content="<?php bloginfo("name"); ?>">
    <meta property="og:title" content="<?php the_title(); ?>">
    <meta property="og:description" content="<?php echo esc_attr(wp_strip_all_tags(get_the_excerpt())); ?>">
    <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), "full")); ?>">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:domain" content="<?php echo esc_url(home_url("/")); ?>" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@<?php echo esc_attr(get_theme_mod("twitter_site_handle")); ?>">
    <meta name="twitter:title" content="<?php the_title(); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr(wp_strip_all_tags(get_the_excerpt())); ?>">
    <meta name="twitter:url" content="<?php echo esc_url(get_permalink()); ?>">
    <meta name="twitter:image" content="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), "full")); ?>">
    <meta name="twitter:creator" content="@<?php echo esc_attr(get_theme_mod("twitter_site_handle")); ?>">
    <link rel="image_src" href="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), "full")); ?>">
    <link rel="canonical" href="<?php echo esc_url(get_permalink()); ?>">
    <link type="image/x-icon" rel="shortcut icon" href="<?php echo esc_url(get_site_icon_url()); ?>">
    <link type="image/x-icon" rel="icon" href="<?php echo esc_url(get_site_icon_url()); ?>">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url(get_site_icon_url(57)); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url(get_site_icon_url(60)); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url(get_site_icon_url(72)); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url(get_site_icon_url(76)); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url(get_site_icon_url(114)); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url(get_site_icon_url(120)); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url(get_site_icon_url(144)); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url(get_site_icon_url(152)); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_site_icon_url(180)); ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo esc_url(get_site_icon_url(192)); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(get_site_icon_url(32)); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo esc_url(get_site_icon_url(96)); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(get_site_icon_url(16)); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">


    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style>
        div#contentDetails img {
            max-width: 100%;
        }

        div#contentDetails p>a {
            color: blue;
        }

        .dCaption p {
            margin-top: 5px;
            font-size: 14px !important;
            font-style: italic;
        }

        .DModalAddSec {
            margin-top: 5px;
        }

        .DModalAddSec img {
            border: 1px solid #555;
        }

        .CrossBtn {
            position: absolute;
            top: 0;
            right: 0;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #fff !important;
            background-color: #ff8c00;
            width: 30px;
            height: 30px;
            opacity: 1;
            border-radius: 0;
            text-align: center;
            line-height: 30px;
            cursor: pointer;
        }

        .dateAndTime p {
            font-size: 12px;
        }

        .DNewsImg {
            position: relative;
        }

        .detol {
            bottom: 25px !important;
        }

        /*sticky footer ads*/

        .T4Tutorials {
            position: fixed;
            bottom: 0px;
            height: auto;
            left: 0;
            right: 0;
            background: #f0f0f082;
            transition: opacity 500ms;
            visibility: visible;
            opacity: 1;
            z-index: 9999;
        }

        .T4Tutorials:target {
            visibility: hidden;
            opacity: 0;
            display: none
        }

        .T4Tutorials_UP {
            margin: 0 auto;
            padding: 0px;
            background: #fff;
            border-radius: 5px;
            width: 72%;
            position: relative;
        }

        .T4Tutorials_UP h2 {
            margin-top: 0;
            color: green;
            font-family: Tahoma, Arial, sans-serif;
        }

        .T4Tutorials_UP .Exit {
            position: absolute;
            top: -20px;
            right: -15px;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
            background-color: #e80000;
            width: 30px;
            height: 30px;
            opacity: 0.6;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            cursor: pointer;
        }

        .T4Tutorials_UP .Exit:hover {
            color: #fff;
            background-color: #e80000;
            opacity: 1;
        }

        .T4Tutorials_UP .Main_Content {
            max-height: 30%;
            overflow: auto;
        }

        @media screen and (max-width:991px) {
            .DModalAddSec {
                margin-top: 100px;
            }
            .CrossBtn {
                font-size: 30px;
                width: 30px;
                height: 30px;
                line-height: 30px;
                top: 0;
                right: 0;
                border-radius: 0;
            }
            .dNewsDesc img {
                width: 100% !important;
            }
            .T4Tutorials {
                height: auto;
                bottom: 0px;
            }
            .T4Tutorials_UP {
                width: 75%;
                margin: 0 auto;
            }
        }

        .DModalAddSec .modal-content {
            width: max-content;
        }

        @media (min-width: 992px) {
            .DModalAddSec .modal-lg,
            .modal-xl {
                max-width: max-content;
            }
        }

        @media (min-width: 320px) {
            .DModalAddSec .modal-dialog {
                max-width: max-content;
                margin: 5rem auto;
            }
        }

        /* fullscreen public html ad overlay */

        .ad-fullscreen {
            position: fixed;
            inset: 0;
            z-index: 10000;
        }

        .ad-fullscreen__backdrop {
            position: absolute;
            inset: 0;
            background: transparent;
        }

        .ad-fullscreen__frame {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            border: 0;
            background: transparent;
        }
    </style>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() . "/frontend/common/css/SolaimanLipi.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() . "/frontend/common/css/Kiron.css"); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() . "/frontend/common/css/eMythMakers.css?t=2"); ?>">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "<?php echo esc_url( home_url('/') ); ?>"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "বাংলাদেশ",
                    "item": "https://samakal.com/bangladesh"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "<?php the_title(); ?>",
                    "item": "<?php echo esc_url(get_permalink()); ?>"
                }
            ]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsArticle",
            "url": "<?php echo esc_url(get_permalink()); ?>",
            "articleBody": "<?php echo esc_attr(wp_strip_all_tags(get_the_excerpt())); ?>",
            "articleSection": "বাংলাদেশ",
            "keywords": "",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "name": "<?php the_title(); ?>",
                "@id": "<?php echo esc_url(get_permalink()); ?>"
            },
            "headline": "<?php the_title(); ?>",
            "image": {
                "@type": "ImageObject",
                "url": "<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), "full")); ?>",
                "height": 800,
                "width": 450
            },
            "datePublished": "2026-02-25 12:49:27",
            "dateModified": "",
            "author": {
                "@type": "Person",
                "name": "<?php echo esc_html(get_post_meta(get_the_ID(), 'post_reporter', true)); ?>"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Samakal",
                "logo": {
                    "@type": "ImageObject",
                    "url": "<?php echo esc_url( ( function_exists('get_custom_logo') && has_custom_logo() ) ? wp_get_attachment_image_url( get_theme_mod('custom_logo'), 'full' ) : get_template_directory_uri() . '/images/logo.png' ); ?>",
                    "width": 301,
                    "height": 47
                }
            },
            "description": "<?php echo esc_attr(wp_strip_all_tags(get_the_excerpt())); ?>"
        }
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr(get_theme_mod("ga4_id")); ?>" type="text/javascript"></script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', '<?php echo esc_attr(get_theme_mod("ga4_id")); ?>');
    </script>

    <!-- Facebook Pixel Code -->
    <script type="text/javascript">
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?php echo esc_attr(get_theme_mod("fb_pixel_id")); ?>');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo esc_attr(get_theme_mod("fb_pixel_id")); ?>&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

</head>

<body>
    <header>
        <div class="DHeaderTop2 MobileHide">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 d-flex align-items-center">
                        <div class="DateTimeBn">
                            <p class="date"><i class="fa-solid fa-location-dot"></i> <?php echo esc_html(get_theme_mod('namedlocation', 'ঢাকা')); ?> <i class="fa-sharp fa-solid fa-calendar-days"></i> <?php echo strtr(strftime('%A, %d %B %Y'), ['Saturday'=>'শনিবার','Sunday'=>'রবিবার','Monday'=>'সোমবার','Tuesday'=>'মঙ্গলবার','Wednesday'=>'বুধবার','Thursday'=>'বৃহস্পতিবার','Friday'=>'শুক্রবার','January'=>'জানুয়ারি','February'=>'ফেব্রুয়ারি','March'=>'মার্চ','April'=>'এপ্রিল','May'=>'মে','June'=>'জুন','July'=>'জুলাই','August'=>'আগস্ট','September'=>'সেপ্টেম্বর','October'=>'অক্টোবর','November'=>'নভেম্বর','December'=>'ডিসেম্বর','0'=>'০','1'=>'১','2'=>'২','3'=>'৩','4'=>'৪','5'=>'৫','6'=>'৬','7'=>'৭','8'=>'৮','9'=>'৯']); ?>
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-4 col-12 d-flex justify-content-center align-items-center">
                        <div class="DLogo">
                            <a href="<?php echo esc_url( home_url('/') ); ?>" class="DLogo" rel="home"><img src="<?php echo esc_url( ( function_exists('get_custom_logo') && has_custom_logo() ) ? wp_get_attachment_image_url( get_theme_mod('custom_logo'), 'full' ) : get_template_directory_uri() . '/images/logo.png' ); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" class="img-fluid img100"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 d-flex justify-content-end align-items-center">
                        <div class="row">
                            <div class="col-sm-12 m-auto">
                                <div class="SocialSearch">
                                    <div class="HeaderTopSocial">
                                        <div class="DSocialLink d-inline-block">
                                            <ul>
                                            <?php 
    $social_platforms = array(
        'facebook'  => 'fa-facebook-f',
        'twitter'   => 'fa-x-twitter',
        'linkedin'  => 'fa-linkedin-in',
        'youtube'   => 'fa-youtube',
        'instagram' => 'fa-instagram',
        'whatsapp'  => 'fa-whatsapp',
    );

    foreach ( $social_platforms as $platform => $icon_class ) :
        $url = get_theme_mod( "social_{$platform}_url" ); // get URL from customizer
        if ( $url ) : ?>
            <li>
                <a href="<?php echo esc_url( $url ); ?>" target="_blank">
                    <i class="fa-brands <?php echo esc_attr( $icon_class ); ?>"></i>
                </a>
            </li>
        <?php endif;
    endforeach;
    ?>
                                            </ul>
                                        </div>
                                        <div class="HeaderVersionBtn d-inline-block">
                                        <?php 
    $btn1_label = get_theme_mod( 'header_button_1_label', '' );
    $btn1_url   = get_theme_mod( 'header_button_1_url', '' );

    $btn2_label = get_theme_mod( 'header_button_2_label', '' );
    $btn2_url   = get_theme_mod( 'header_button_2_url', '' );

    if ( $btn1_label && $btn1_url ) : ?>
        <a href="<?php echo esc_url( $btn1_url ); ?>" target="_blank">
            <?php echo esc_html( $btn1_label ); ?>
        </a>
    <?php endif; ?>

    <?php if ( $btn2_label && $btn2_url ) : ?>
        <a href="<?php echo esc_url( $btn2_url ); ?>" target="_blank">
            <?php echo esc_html( $btn2_label ); ?>
        </a>
    <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search_block Hide">
            <div class="container">
                <div class="col-lg p-0">
                    <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" role="form">
                        <div class="search_logo display-flex">
                            <input type="text" name="s" placeholder="এখানে খুঁজুন...">
                            <button><i class="fa-solid fa-magnifying-glass"></i></button>
                            <a href="" class="close-search"><i class="fa-solid fa-xmark"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="myHeader" class="MobileHide">
            <div class="DHeaderNav">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a href="<?php echo esc_url( home_url('/') ); ?>" class="StickyLogo" rel="home">
                        <img src="<?php echo esc_url( ( function_exists('get_custom_logo') && has_custom_logo() ) ? wp_get_attachment_image_url( get_theme_mod('custom_logo'), 'full' ) : get_template_directory_uri() . '/images/logo.png' ); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" class="img-fluid img100">
                    </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <?php
$menu_name = 'main_menu';
$locations = get_nav_menu_locations();

if ( isset( $locations[ $menu_name ] ) ) {
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
    $menu_items = wp_get_nav_menu_items( $menu->term_id );

    // Organize items by parent
    $items_by_parent = array();
    foreach ( $menu_items as $item ) {
        $items_by_parent[ $item->menu_item_parent ][] = $item;
    }

    // Loop through top-level items
    if ( ! empty( $items_by_parent[0] ) ) {
        foreach ( $items_by_parent[0] as $parent_item ) {
            $children = isset( $items_by_parent[ $parent_item->ID ] ) ? $items_by_parent[ $parent_item->ID ] : array();

            if ( $children ) {
                echo '<li class="nav-item dropdown">';
                echo '<a class="nav-link dropdown-toggle" href="' . esc_url( $children[0]->url ) . '" id="navbarDropdown' . $parent_item->ID . '" role="button" data-hover="dropdown" aria-expanded="false">' . esc_html( $parent_item->title ) . '</a>';
                echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown' . $parent_item->ID . '">';
                foreach ( $children as $child ) {
                    echo '<li><a class="dropdown-item" href="' . esc_url( $child->url ) . '">' . esc_html( $child->title ) . '</a></li>';
                }
                echo '</ul>';
                echo '</li>';
            } else {
                echo '<li class="nav-item"><a class="nav-link" href="' . esc_url( $parent_item->url ) . '">' . esc_html( $parent_item->title ) . '</a></li>';
            }
        }
    }
}
?>
                                <li class="nav-item dropdown has-megamenu">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">অন্যান্য</a>
                                    <div class="dropdown-menu megamenu" role="menu">
                                        <div class="row w-100 ">
                                            <div class="col-md-3" style="flex: 0 0 20%;max-width: 20%;">
                                                <ul class="nav flex-column">
                                                    <li><a class="dropdown-item" href="/sub/chaturango">চতুরঙ্গ</a></li>
                                                    <li><a class="dropdown-item" href="/sub/womensday">নারী দিবস</a></li>
                                                    <li><a class="dropdown-item" href="/sahitto-o-sangskriti">সাহিত্য ও
                                                        সংস্কৃতি</a></li>
                                                    <li><a class="dropdown-item" href="/photogallery">ছবি</a></li>
                                                    <li><a class="dropdown-item" href="/probas">প্রবাস</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3" style="flex: 0 0 20%;max-width: 20%;">
                                                <ul class="nav flex-column">
                                                    <li><a class="dropdown-item" href="/life-struggle">জীবন সংগ্রাম</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="/travel">ভ্রমণ</a></li>
                                                    <li><a class="dropdown-item" href="/feature">ফিচার</a></li>
                                                    <li><a class="dropdown-item" href="/sub/education">শিক্ষা</a></li>
                                                    <li><a class="dropdown-item" href="/special-samakal">বিশেষ সমকাল</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3" style="flex: 0 0 20%;max-width: 20%;">
                                                <ul class="nav flex-column">
                                                    <li><a class="dropdown-item" href="/economics/industry-trade">শিল্প-বাণিজ্য</a></li>
                                                    <li><a class="dropdown-item" href="/interview">সাক্ষাৎকার</a></li>
                                                    <li><a class="dropdown-item" href="/technology">প্রযুক্তি</a></li>
                                                    <li><a class="dropdown-item" href="/priyochattogram">প্রিয়
                                                        চট্টগ্রাম</a></li>
                                                    <li><a class="dropdown-item" href="/feature/kaler-kheya">কালের
                                                        খেয়া</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3" style="flex: 0 0 20%;max-width: 20%;">
                                                <ul class="nav flex-column">
                                                    <li><a class="dropdown-item" href="/sub/stock-market">শেয়ারবাজার</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="/samakal-investigation">সমকাল
                                                        অনুসন্ধান</a></li>
                                                    <li><a class="dropdown-item" href="/offbit">অফবিট</a></li>
                                                    <li><a class="dropdown-item" href="/archive">আর্কাইভ</a></li>

                                                </ul>
                                            </div>
                                            <div class="col-md-3" style="flex: 0 0 20%;max-width: 20%;">
                                                <ul class="nav flex-column">
                                                    <li><a class="dropdown-item" href="/opinion">মতামত</a></li>
                                                    <li><a class="dropdown-item" href="/chakri">চাকরি </a></li>
                                                    <li><a class="dropdown-item" href="/shilpomoncho">শিল্পমঞ্চ</a></li>
                                                    <li><a class="dropdown-item" href="/special-ayojon">বিশেষ আয়োজন</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                        </li>
                        <li class="nav-item menu-search">
                            <a class="nav-link nav-link-search" href="#">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                        </li>
                        </ul>
                </div>
                </nav>
            </div>
        </div>
        <div id="myHeader2">
            <div id="mobile-nav" class="MobileMenu MobileShow">
                <div class="DMLogo d-flex h-100 align-items-center justify-content-center"><a href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo esc_url( ( function_exists('get_custom_logo') && has_custom_logo() ) ? wp_get_attachment_image_url( get_theme_mod('custom_logo'), 'full' ) : get_template_directory_uri() . '/images/logo.png' ); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" class="img-fluid img100"></a></div>
                <div class="d-flex  align-items-center justify-content-start"><span onclick="if (!window.__cfRLUnblockHandlers) return false; myMenuBtnChng()" id="menu-button" class="menu-button fas fa-bars" data-cf-modified-308d0d4576f1f362b9bffb9b-=""></span></div>
                <div class=" d-flex h-100 align-items-center justify-content-end">
                    <div class="menu-search">
                        <a class="nav-link-search" href="">
                        <i class="fa fa-search"></i>
                    </a>
                    </div>
                </div>
                <div class="search_block Hide">
                    <div class="container">
                        <div class="col-xl p-0">
                            <form name="frmSearch" action="https://www.google.com" target="_blank" method="get">
                                <div class="search_logo display-flex">
                                    <input type="hidden" name="cx" value="d540ac00b35dc4da6">
                                    <input type="hidden" name="gsc.sort" value="date">
                                    <input type="hidden" name="ie" value="utf-8">
                                    <input type="text" name="q" id="search" class="form-control" value="" placeholder="অনুসন্ধান করুন">
                                    <button><i class="fa fa-search"></i></button>
                                    <a href="" class="close-search"><i class="fa fa-times"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <ul>
                    <li>
                        <div class="MobileDateArea">
                            <p class="date">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <span>বুধবার, ২৫ ফেব্রুয়ারি ২০২৬</span>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="MobileDateArea">
                            <div class="MobileTopBtn">
                                <a href="https://en.samakal.com/" target="_blank">English</a>
                                <a href="#">লাইভ</a>
                                <a href="https://epaper.samakal.com/" target="_blank">ই-পেপার</a>
                            </div>
                        </div>
                    </li>

                    <li><a href="/latest/news">সর্বশেষ</a></li>
                    <li><a href="/bangladesh">বাংলাদেশ</a></li>
                    <li><a href="/politics">রাজনীতি</a></li>
                    <li><a href="/economics">অর্থনীতি</a></li>
                    <li><a href="/international">বিশ্ব</a></li>
                    <li><a href="/sports">খেলা</a></li>
                    <li><a href="/entertainment">বিনোদন</a></li>
                    <li class="parent">
                        <a href="/whole-country">সারাদেশ</a>
                        <ul class="SubMenuM">
                            <li><a href="https://samakal.com/divisions/dhaka">ঢাকা</a></li>
                            <li><a href="https://samakal.com/divisions/chattogram">চট্টগ্রাম</a></li>
                            <li><a href="https://samakal.com/divisions/rajshahi">রাজশাহী</a></li>
                            <li><a href="https://samakal.com/divisions/khulna">খুলনা</a></li>
                            <li><a href="https://samakal.com/divisions/barishal">বরিশাল</a></li>
                            <li><a href="https://samakal.com/divisions/sylhet">সিলেট</a></li>
                            <li><a href="https://samakal.com/divisions/rangpur">রংপুর</a></li>
                            <li><a href="https://samakal.com/divisions/mymensingh">ময়মনসিংহ</a></li>
                        </ul>
                    </li>
                    <li><a href="/crime">অপরাধ</a></li>
                    <li><a href="/techlife">টেকলাইফ</a></li>
                    <li><a href="/capital">রাজধানী</a></li>
                    <li><a href="/lifestyle">লাইফস্টাইল</a></li>
                    <li><a href="/feature/shoili">শৈলী</a></li>
                    <li><a href="/feature/kaler-kheya">কালের খেয়া</a></li>
                    <li class="parent">
                        <a href="#">অন্যান্য</a>
                        <ul class="SubMenuM">
                            <li><a href="/sub/chaturango">চতুরঙ্গ</a></li>
                            <li><a href="/sub/womensday">নারী দিবস</a></li>
                            <li><a href="/sahitto-o-sangskriti">সাহিত্য ও সংস্কৃতি </a></li>
                            <li><a href="/life-struggle">জীবন সংগ্রাম</a></li>
                            <li><a href="/travel">ভ্রমণ</a></li>
                            <li><a href="/feature">ফিচার</a></li>
                            <li><a href="/probas">প্রবাস</a></li>
                            <li><a href="/sub/industry-trade/">শিল্প-বাণিজ্য</a></li>
                            <li><a href="/interview">সাক্ষাৎকার</a></li>
                            <li><a href="/technology">প্রযুক্তি</a></li>
                            <li><a href="/sub/stock-market">শেয়ারবাজার</a></li>
                            <li><a href="/sub/education">শিক্ষা</a></li>
                            <li><a href="/samakal-investigation">সমকাল অনুসন্ধান</a></li>
                            <li><a href="/opinion">মতামত</a></li>
                            <li><a href="/chakri">চাকরি</a></li>
                            <li><a href="/shilpomoncho">শিল্পমঞ্চ</a></li>
                            <li><a href="/special-ayojon">বিশেষ আয়োজন</a></li>
                            <li><a href="/special-samakal">বিশেষ সমকাল</a></li>
                        </ul>
                    </li>
                    <li><a href="/photogallery">ছবি</a></li>
                    <li><a href="/video-gallery">ভিডিও</a></li>
                    <li><a href="/archive">আর্কাইভ</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row MobileHide">
                <div class="col-12">
                    <div class="d-flex justify-content-center mt-4">
                        <!-- /21871422770/DNA_Leaderboard -->
                        <div id='div-gpt-ad-1697888274364-0' style='min-width: 970px; min-height: 90px;'>
                            <script type="text/javascript">
                                googletag.cmd.push(function() {
                                    googletag.display('div-gpt-ad-1697888274364-0');
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row MobileShow">
                <div class="col-12">
                    <div class="d-flex justify-content-center mt-4">
                        <!-- /21871422770/Leaderboard_mna -->
                        <div id='div-gpt-ad-1698673325064-0' style='min-width: 320px; min-height: 100px;'>
                            <script type="text/javascript">
                                googletag.cmd.push(function() {
                                    googletag.display('div-gpt-ad-1698673325064-0');
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="details-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb" class="breadcrumbs large-font">
                            <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>" role="button" tabindex="0"><i class="fas fa-home"></i></a></li>

    <?php
    $categories = get_the_category();
    if ($categories) {
        $category = $categories[0]; // take the first category
        $ancestors = get_ancestors($category->term_id, 'category');
        $ancestors = array_reverse($ancestors);
        foreach ($ancestors as $ancestor_id) {
            $ancestor = get_category($ancestor_id);
            echo '<li class="breadcrumb-item"><a href="'.esc_url(get_category_link($ancestor)).'">'.esc_html($ancestor->name).'</a></li>';
        }
        echo '<li class="breadcrumb-item"><a href="'.esc_url(get_category_link($category)).'">'.esc_html($category->name).'</a></li>';
    }
    ?>
</ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row detailsBodyRowGutter">
                    <div class="col-lg-9">
                        <div class="dheading">
                            <h2 class="DShoulder"><?php echo esc_html(get_post_meta(get_the_ID(), '_post_shoulder', true)); ?></h2>
                            <h1><?php the_title(); ?></h1>
                            <h2 class="DsubHead"><?php echo esc_html(get_post_meta(get_the_ID(), '_post_subHead', true)); ?></h2>
                        </div>
                        <div class="row MobileShow">
                            <div class="col-12">
                                <div class="d-flex justify-content-center mt-4 mb-2">
                                    <!-- /21871422770/BeforeImage -->
                                    <div id='div-gpt-ad-1709441391296-0' style='min-width: 320px; min-height: 100px;'>
                                        <script type="text/javascript">
                                            googletag.cmd.push(function() {
                                                googletag.display('div-gpt-ad-1709441391296-0');
                                            });
                                        </script>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="DNewsImg">
                            <img class="img-fluid w-100" id="adf-overlay" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/thumb-bg.gif"); ?>" id="adf-overlay" alt="<?php the_title(); ?>"
                                title="<?php the_title(); ?>">
                            <p><?php echo esc_html(wp_get_attachment_caption(get_post_thumbnail_id(get_the_ID()))); ?></p>
                        </div>
                        <div class="row MobileShow">
                            <div class="col-12">
                                <div class="d-flex justify-content-center mt-4">

                                    <!-- /21871422770/after_image -->
                                    <div id='div-gpt-ad-1698673852249-0' style='min-width: 320px; min-height: 100px;'>
                                        <script type="text/javascript">
                                            googletag.cmd.push(function() {
                                                googletag.display('div-gpt-ad-1698673852249-0');
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 d-flex">
                                <div class="align-self-stretch justify-content-center">
                                    <div class="writter">
                                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'post_reporter', true)); ?></p>
                                    </div>
                                    <div class="dateAndTime">
                                        <p><i class="fa-regular fa-clock"></i> প্রকাশ: <?php 
echo strtr(get_the_date('d F Y').' | '.get_the_time('H:i'), ['0'=>'০','1'=>'১','2'=>'২','3'=>'৩','4'=>'৪','5'=>'৫','6'=>'৬','7'=>'৭','8'=>'৮','9'=>'৯']);
?> </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 d-flex">
                                <div class="sharethis-wrap d-flex align-self-stretch justify-content-center">
                                    <!-- AddToAny BEGIN -->
                                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                        <a class="a2a_button_facebook"></a>
                                        <a class="a2a_button_x"></a>
                                        <a class="a2a_button_whatsapp"></a>
                                        <a class="a2a_button_linkedin"></a>
                                        <a class="a2a_button_telegram"></a>
                                        <a class="a2a_button_facebook_messenger"></a>
                                        <a class="a2a_button_email"></a>
                                        <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                    </div>
                                    <script async src="https://static.addtoany.com/menu/page.js" type="text/javascript"></script>
                                    <!-- AddToAny END -->
                                </div>
                            </div>
                            <div class="col-lg-2 d-flex">
                                <div class="DTextZoom d-flex align-self-stretch justify-content-end">
                                    <button id="btnDecrease">-</button>
                                    <button id="btnOriginal">অ</button>
                                    <button id="btnIncrease">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="dNewsDesc" id="contentDetails"><?php the_content(); ?></div>
                        <div class="DContentAdd">
                            <div class="row mt-3 mb-3 MobileHide">
                                <div class="col-md-12">
                                    <div class="DetailsAdd d-flex justify-content-center">
                                        <!-- /21871422770/DNA_ArticleMiddle_1 -->
                                        <div id='div-gpt-ad-1697888616961-0' style='min-width: 300px; min-height: 250px;'>
                                            <script type="text/javascript">
                                                googletag.cmd.push(function() {
                                                    googletag.display('div-gpt-ad-1697888616961-0');
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 mb-3 MobileShow">
                                <div class="col-md-12">
                                    <div class="DetailsAdd d-flex justify-content-center">
                                        <!-- /21871422770/article_middle -->
                                        <div id='div-gpt-ad-1711866792759-0' style='min-width: 300px; min-height: 250px;'>
                                            <script type="text/javascript">
                                                googletag.cmd.push(function() {
                                                    googletag.display('div-gpt-ad-1711866792759-0');
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 mb-3 ">
                                <div class="col-md-12">
                                    <div class="DetailsAdd d-flex justify-content-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="DContentAdd2">
                            <div class="row mt-3 mb-3 MobileShow">
                                <div class="col-md-12">
                                    <div class="DetailsAdd d-flex justify-content-center">
                                        <!-- /21871422770/article_middle2 -->
                                        <div id='div-gpt-ad-1757935077396-0' style='min-width: 300px; min-height: 250px;'>
                                            <script type="text/javascript">
                                                googletag.cmd.push(function() {
                                                    googletag.display('div-gpt-ad-1757935077396-0');
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 mb-3 MobileHide">
                                <div class="col-md-12">
                                    <div class="DetailsAdd d-flex justify-content-center">
                                        <script id="ADL1022300250" type="text/javascript">
                                            (function(uniqueid, sizex, sizey, element, document, jslink, adplaceid, siteid) {
                                                var l = document.createElement(element);
                                                l.setAttribute("src", jslink);
                                                l.setAttribute("async", 'true');
                                                l.setAttribute("type", "text/javascript");
                                                var x = document.getElementById(uniqueid);
                                                x.id = Math.random().toString(36).substr(2, 9);
                                                x.appendChild(l, x);
                                                l.onload = function() {
                                                    ServeAdvertisement(siteid, adplaceid, x, sizex, sizey);
                                                }
                                            })("ADL1022300250", 300, 250, "script", document, "https://bangladesh-static.adfinix.com/adfinix.js", 605, 1022)
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tagArea">
                            <ul>
                                <li>বিষয় :</li>
                                <?php
                                $post_tags = get_the_tags();
                                foreach ( $post_tags as $tag ) {
                                    echo '<li><a href="'.esc_url(get_tag_link($tag->term_id)).'">'.esc_html($tag->name).'</a></li>';
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="sharethis-wrap mt-4">
                            <div class="sharethis-inline-share-buttons"></div>
                        </div>
                        <?php
$categories = wp_get_post_categories(get_the_ID());
if ($categories) {
    $related = new WP_Query(array(
        'category__in'   => $categories,
        'post__not_in'   => array(get_the_ID()),
        'posts_per_page' => 4,
        'orderby'        => 'date',
        'order'          => 'DESC',
    ));

    if ($related->have_posts()) { ?>
                        <section class="CatNewsListArea">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="catSectionHeading">
                                        <h2>আরও পড়ুন</h2>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="CatNewsListWrap">
                                <div class="row gx-5">
                                    <?php 
        while ($related->have_posts()) : $related->the_post(); ?>
                                    <div class="col-lg-6 CatBr">
                                        <a href="<?php echo get_permalink(); ?>">
                                            <div class="CatNewsListContent">
                                                <div class="row">
                                                    <div class="col-lg-5 col-5">
                                                        <div class="CatNewsListImg">
                                                            <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="https://samakal.com/media/common/thumb-sm.gif" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>"
                                                                class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 col-7">
                                                        <div class="CatNewsLisText">
                                                            <div class="Desc">
                                                                <h3 class="Title2"><?php echo get_the_title(); ?></h3>
                                                                <span class="PublishTime"><i
                                                                        class="fa-regular fa-clock"></i>
                                                                    আপডেট
                                                                    <?php echo strtr(get_the_date('d F Y').' | '.get_the_time('H:i'), ['0'=>'০','1'=>'১','2'=>'২','3'=>'৩','4'=>'৪','5'=>'৫','6'=>'৬','7'=>'৭','8'=>'৮','9'=>'৯']); ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php
        endwhile;
        echo '</ul>';
        wp_reset_postdata();
    }
}
?>
                                </div>
                            </div>
                        </section>
                        <div class="row MobileHide">
                            <div class="col-12">
                                <div class="d-flex justify-content-center mb-5">
                                    <div id='div-gpt-ad-1697889656858-0' style='min-width: 728px; min-height: 90px;'>
                                        <script type="text/javascript">
                                            googletag.cmd.push(function() {
                                                googletag.display('div-gpt-ad-1697889656858-0');
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row MobileShow">
                            <div class="col-12">
                                <div class="d-flex justify-content-center mb-5">
                                    <div id='div-gpt-ad-1698675198540-0' style='min-width: 300px; min-height: 250px;'>
                                        <script type="text/javascript">
                                            googletag.cmd.push(function() {
                                                googletag.display('div-gpt-ad-1698675198540-0');
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="dAddImg-wrap">
                            <div class="DRightSideAdd MobileHide mt-4">
                                <div id='div-gpt-ad-1697888394875-0' style='min-width: 300px; min-height: 250px;'>
                                    <script type="text/javascript">
                                        googletag.cmd.push(function() {
                                            googletag.display('div-gpt-ad-1697888394875-0');
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="dAddImg-wrap mt-4 MobileHide">
                            <div class="DRightSideAdd">
                                <div id='div-gpt-ad-1697888851115-0' style='min-width: 300px; min-height: 250px;'>
                                    <script type="text/javascript">
                                        googletag.cmd.push(function() {
                                            googletag.display('div-gpt-ad-1697888851115-0');
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="DRightSideAdd mt-4 mb-2 MobileHide">
                            <div id='div-gpt-ad-1697889007257-0' style='min-width: 300px; min-height: 250px;'>
                                <script type="text/javascript">
                                    googletag.cmd.push(function() {
                                        googletag.display('div-gpt-ad-1697889007257-0');
                                    });
                                </script>
                            </div>
                        </div>
                        

                        <div class="DlastNews">
                            <div class="dlastHead">
                                <a href="/latest/news">
                                    <h3>সর্বশেষ</h3>
                                </a>
                            </div>
                            <div class="dAllListWrap">
                            <?php
$latest_news = new WP_Query(array(
    'posts_per_page' => 8,
    'orderby'        => 'date',
    'order'          => 'DESC',
));

    while ($latest_news->have_posts()) : $latest_news->the_post(); ?>

    
                                <div class="DlastNews-list">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <div class="row gx-2">
                                            <div class="col-5">
                                                <div class="dLastNewsImg">
                                                    <img class="img-fluid" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="https://samakal.com/media/common/thumb-sm.gif" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="dLastNewsText">
                                                    <h5><?php echo get_the_title(); ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                
    <?php endwhile;
    wp_reset_postdata();
?>
                            </div>
                            <div class="DreadMoreBtn">
                                <a href="https://samakal.com/latest/news">আরও পড়ুন <i
                                    class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="T4Tutorials_UP11" class="T4Tutorials">
            <div class="T4Tutorials_UP">
                <a class="Exit" id="T4Tutorials_UP11_Close">×</a>
                <div class="Main_Main_Content">
                    <div class="AdvertClass MobileHide text-center">
                        <div id='div-gpt-ad-1707909428660-0' style='min-width: 970px; min-height: 90px;'>
                            <script type="text/javascript">
                                googletag.cmd.push(function() {
                                    googletag.display('div-gpt-ad-1707909428660-0');
                                });
                            </script>
                        </div>
                    </div>
                    <div class="AdvertClass MobileShow text-center">
                        <div id='div-gpt-ad-1707909632051-0' style='min-width: 320px; min-height: 50px;'>
                            <script type="text/javascript">
                                googletag.cmd.push(function() {
                                    googletag.display('div-gpt-ad-1707909632051-0');
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <!--Modal Code Welcome Advert-->

    <footer>
        <div class="container">
            <div class="row">
                <div class="footerTopSection">
                    <ul>
                        <li><a href="/special-ayojon">বিশেষ আয়োজন</a></li>
                        <li><a href="/sub/kaler-kheya">কালের খেয়া</a></li>
                        <li><a href="#">ফেসবুক লাইভ</a></li>
                        <li><a href="/advertise">বিজ্ঞাপন মূল্য তালিকা</a></li>
                        <li><a href="/converter" target="_blank">ইউনিকোড কনভার্টার</a></li>
                        <li><a href="/feature">ফিচার</a></li>
                        <li><a href="/archive">আর্কাইভ</a></li>
                        <li><a href="/photogallery">ছবি</a></li>
                        <li><a href="/video-gallery">ভিডিও</a></li>
                        <li><a href="https://epaper.samakal.com/">ই-পেপার</a></li>
                    </ul>
                </div>
                <div class="footerMiddleSection">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <p><a href="/privacy">PRIVACY POLICY</a></p>
                            <p><a href="/terms">TERMS OF USE</a></p>
                            <p><a href="/">SAMAKAL ALL RIGHTS RESERVED</a></p>
                        </div>
                        <div class="col-lg-4 col-12">
                            <h5>সম্পাদক : শাহেদ মুহাম্মদ আলী</h5>
                            <h5>প্রকাশক : আবুল কালাম আজাদ</h5>
                            <p>ফোন : <a href="tel:55029832-38">৫৫০২৯৮৩২-৩৮</a></p>
                            <p>বিজ্ঞাপন : <a href="tel:+8801714080378">+৮৮০১৭১৪০৮০৩৭৮</a></p>
                            <p>ই-মেইল: <a href="mailto:samakalad@gmail.com">samakalad@gmail.com</a>,
                                <a href="mailto:marketingonline@samakal.com">marketingonline@samakal.com</a>
                            </p>
                            <address>টাইমস মিডিয়া ভবন (৫ম তলা), ৩৮৭ তেজগাঁও শিল্প এলাকা, ঢাকা - ১২০৮</address>
                        </div>
                        <div class="col-lg-4 col-12">
                            <h2 class="FSocialHeadLine">ফলো করুন <span><?php echo esc_html(get_theme_mod('site_title_bn', 'সমকাল')); ?></span>-এর খবর</h2>
                            <div class="FSocialShare">
                                <ul>
                                    <li><a href="<?php echo esc_attr(get_theme_mod("fb_page_url")); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/samakaltw" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="<?php echo esc_attr(get_theme_mod("linkedin_url")); ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                    <li><a href="https://www.youtube.com/channel/UCnetEdV8EwzGn36f3pq50ZA?sub_confirmation=1" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="<?php echo esc_attr(get_theme_mod("instagram_url")); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <a href="" class="Flogo" rel="home">
                            <img src="<?php echo esc_url( ( function_exists('get_custom_logo') && has_custom_logo() ) ? wp_get_attachment_image_url( get_theme_mod('custom_logo'), 'full' ) : get_template_directory_uri() . '/images/logo.png' ); ?>"
                                title="<?php the_title(); ?>"
                                alt="<?php the_title(); ?>" class="img-fluid img100">
                        </a>
                            <h2 class="FCopyRight">© ২০০৫ - ২০২৬ <a href="https://samakal.com"><?php echo esc_html(get_theme_mod('site_title_bn', 'সমকাল')); ?></a> কর্তৃক সর্বসত্ব ® সংরক্ষিত</h2>
                            <p class="d-none"><a href="https://www.emythmakers.com/" rel="nofollow" target="_blank">উন্নয়নে ইমিথমেকারস.কম</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="back_to_top" class="back_to_top on"><span class="go_up"><i class="fa-solid fa-arrow-up"></i></span></div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


    <script type="text/javascript">
        var ContentID = '340205';
        if (ContentID == '239727') {
            $(document).ready(function() {
                $(document).on("contextmenu", function(e) {
                    return false;
                });
                $('body').on('selectstart dragstart', function(e) {
                    e.preventDefault();
                    return false;
                });
            });
        }
    </script>
    <script type="text/javascript">
        // Footer Sticky Ads
        jQuery(document).ready(function(e) {
            jQuery('#T4Tutorials_UP11_Close').click(function() {
                jQuery('#T4Tutorials_UP11').hide();
            })
        });
    </script>
    <script type="text/javascript">
        $(window).load(function() {
            $("main img").each(function(index) {
                $(this).attr('src', $(this).attr('data-src'))
            });
        });
    </script>







    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" type="text/javascript"></script>
    <script type="text/javascript" src="https://samakal.com/frontend/common/js/eMythMakers.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#btnIncrease").click(function() {
                $(".dNewsDesc").children().each(function() {
                    var size = parseInt($(this).css("font-size"));
                    size = size + 1 + "px";
                    $(this).css({
                        'font-size': size
                    });
                });
            });
        });
        $(function() {
            $("#btnOriginal").click(function() {
                $(".dNewsDesc").children().each(function() {
                    $(this).css({
                        'font-size': '20px'
                    });
                });
            });
        });
        $(function() {
            $("#btnDecrease").click(function() {
                $(".dNewsDesc").children().each(function() {
                    var size = parseInt($(this).css("font-size"));
                    size = size - 1 + "px";
                    $(this).css({
                        'font-size': size
                    });
                });
            });
        });
        $(".DContentAdd").insertAfter($("#contentDetails p:nth-child(2)"));
        $(".DContentAdd2").insertAfter($("#contentDetails p:nth-child(5)"));
        $(".DContentAdd3").insertAfter($("#contentDetails p:nth-child(4)"));
        $('#contentDetails img').each(function() {
            var float = '';
            var data = $(this).attr('alt');

            if ($(this).attr('style')) {
                var style = $(this).attr('style').split(';');
                $.each(style, function(index, value) {
                    if (value.indexOf("float") >= 0) {
                        float = value;
                    }
                });
            }
            if (float != '') {
                if (data.length > 100) {
                    $(this).wrap("<div class='dCaption' style='" + float + "'></div>")
                        .parent('.dCaption')
                        .append('<p class="text-justify img-caption">' + data + '</p>');
                    $(document).ready(function() {
                        $("#contentDetails:not(.writer_div)");
                    });
                } else {
                    $(this).wrap("<div class='dCaption' style='" + float + "'></div>")
                        .parent('.dCaption')
                        .append('<p class="text-center img-caption">' + data + '</p>');
                }
            } else {
                // console.log(float);
                if (data.length > 100) {
                    $(this).wrap("<div class='dCaption'></div>")
                        .parent('.dCaption')
                        .append('<p class="text-justify img-caption">' + data + '</p>');
                } else {
                    $(this).wrap("<div class='dCaption'></div>")
                        .parent('.dCaption')
                        .append('<p class="text-center img-caption">' + data + '</p>');
                }
            }
        });
    </script>
    <!--Modal script Code Welcome Advert-->
    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="308d0d4576f1f362b9bffb9b-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"97e9a538c9914fdd98360a02932c1edf","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>

</html>