<!doctype html>
<html lang="bn">

<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo get_the_title( get_the_ID() ); ?> - <?php bloginfo("name"); ?></title>
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
    <meta name="description" content="<?php echo get_the_title( get_the_ID() ); ?> - <?php bloginfo("name"); ?>">
    <meta name="keywords" content="<?php echo get_bloginfo("name"); ?>, bangla news, current News, bangla newspaper, bangladesh newspaper, online paper, bangladeshi newspaper, bangla news paper, bangladesh newspapers, newspaper, all bangla news paper, bd news paper, news paper, bangladesh news paper, daily, bangla newspaper, daily news paper, bangladeshi news paper, bangla paper, all bangla newspaper, bangladesh news, daily newspaper, অনলাইন, পত্রিকা, বাংলাদেশ, আজকের পত্রিকা, আন্তর্জাতিক, অর্থনীতি, খেলা, বিনোদন, ফিচার, বিজ্ঞান ও প্রযুক্তি, চলচ্চিত্র, ঢালিউড, বলিউড, হলিউড, বাংলা গান, মঞ্চ, টেলিভিশন, কম্পিউটার, মোবাইল ফোন, অটোমোবাইল, মহাকাশ, গেমস, মাল্টিমিডিয়া, রাজনীতি, সরকার, অপরাধ, দুর্নীতি, আইন ও বিচার, পরিবেশ, দুর্ঘটনা, সংসদ, রাজধানী, শেয়ার বাজার, বাণিজ্য, পোশাক শিল্প, ক্রিকেট, ফুটবল, লাইভ স্কোর">
    <meta property="og:site_name" content="<?php echo strtoupper(get_bloginfo("name")); ?> | <?php echo esc_html(get_theme_mod('site_title_bn')); ?>">
    <meta property="og:title" content="<?php echo get_the_title( get_the_ID() ); ?> - <?php bloginfo("name"); ?>">
    <meta property="og:description" content="<?php echo get_the_title( get_the_ID() ); ?> - <?php bloginfo("name"); ?>">
    <meta property="og:url" content="<?php echo get_permalink(); ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri() . "/frontend/media/common/logo-fb.png"); ?>">
    <meta property="og:locale" content="en_US">

    <meta name="twitter:domain" content="<?php echo esc_url(home_url("/")); ?>" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="<?php echo strtoupper(get_bloginfo("name")); ?> | <?php echo esc_html(get_theme_mod('site_title_bn')); ?>">
    <meta name="twitter:title" content="<?php echo get_the_title( get_the_ID() ); ?> - <?php bloginfo("name"); ?>">
    <meta name="twitter:description" content="<?php echo get_the_title( get_the_ID() ); ?> - <?php bloginfo("name"); ?>">
    <meta name="twitter:image" content="<?php echo esc_url(get_template_directory_uri() . "/frontend/media/common/logo-fb.png"); ?>">
    <meta name="twitter:site" content="<?php echo esc_attr(get_theme_mod("social_twitter_url")); ?>" />

    <link rel="image_src" href="<?php echo esc_url(get_template_directory_uri() . "/frontend/media/common/logo-fb.png"); ?>">
    <link rel="canonical" href="<?php echo esc_url(home_url("/")); ?>">
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


    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() . "/frontend/common/css/SolaimanLipi.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() . "/frontend/common/css/Kiron.css"); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() . "/frontend/common/css/eMythMakers.css?t=2"); ?>">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr(get_theme_mod(" ga4_id")); ?>" type="text/javascript"></script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', '<?php echo esc_attr(get_theme_mod(" ga4_id")); ?>');
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
                                    <?php
$menu_name = 'mega_menu';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object($locations[$menu_name]);
$menu_items = wp_get_nav_menu_items($menu->term_id);

$columns = 5; // number of columns you want
$chunks = array_chunk($menu_items, ceil(count($menu_items)/$columns));
?>

<div class="dropdown-menu megamenu" role="menu">
    <div class="row w-100">
        <?php foreach ($chunks as $column): ?>
            <div class="col-md-3" style="flex: 0 0 20%; max-width: 20%;">
                <ul class="nav flex-column">
                    <?php foreach ($column as $item): ?>
                        <li>
                            <a class="dropdown-item" href="<?php echo esc_url($item->url); ?>">
                                <?php echo esc_html($item->title); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
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
                            <form name="frmSearch" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                                <div class="search_logo display-flex">
                                    <input type="text" name="s" id="search" class="form-control" value="" placeholder="অনুসন্ধান করুন">
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
                                <span><?php echo strtr(strftime('%A, %d %B %Y'), ['Saturday'=>'শনিবার','Sunday'=>'রবিবার','Monday'=>'সোমবার','Tuesday'=>'মঙ্গলবার','Wednesday'=>'বুধবার','Thursday'=>'বৃহস্পতিবার','Friday'=>'শুক্রবার','January'=>'জানুয়ারি','February'=>'ফেব্রুয়ারি','March'=>'মার্চ','April'=>'এপ্রিল','May'=>'মে','June'=>'জুন','July'=>'জুলাই','August'=>'আগস্ট','September'=>'সেপ্টেম্বর','October'=>'অক্টোবর','November'=>'নভেম্বর','December'=>'ডিসেম্বর','0'=>'০','1'=>'১','2'=>'২','3'=>'৩','4'=>'৪','5'=>'৫','6'=>'৬','7'=>'৭','8'=>'৮','9'=>'৯']); ?></span>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="MobileDateArea">
                            <div class="MobileTopBtn">
                           <?php if ( $btn1_label && $btn1_url ) : ?>
        <a href="<?php echo esc_url( $btn1_url ); ?>" target="_blank">
            <?php echo esc_html( $btn1_label ); ?>
        </a>
    <?php endif; ?>

    <?php if ( $btn2_label && $btn2_url ) : ?>
        <a href="<?php echo esc_url( $btn2_url ); ?>" target="_blank">
            <?php echo esc_html( $btn2_label ); ?>
        </a>
    <?php endif; ?>

<?php if ( $btn3_label && $btn3_url ) : ?>
    <a href="<?php echo esc_url( $btn3_url ); ?>" target="_blank">
        <?php echo esc_html( $btn3_label ); ?>
    </a>
<?php endif; ?>

                            </div>
                        </div>
                    </li>


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
                echo '<li class="parent">';
                echo '<a href="' . esc_url( $children[0]->url ) . '">' . esc_html( $parent_item->title ) . '</a>';
                echo '<ul class="SubMenuM">';
                foreach ( $children as $child ) {
                    echo '<li><a href="' . esc_url( $child->url ) . '">' . esc_html( $child->title ) . '</a></li>';
                }
                echo '</ul>';
                echo '</li>';
            } else {
                echo '<li><a href="' . esc_url( $parent_item->url ) . '">' . esc_html( $parent_item->title ) . '</a></li>';
            }
        }
    }
}
?>
                    <li class="parent">
                        <a href="#">অন্যান্য</a>
                        <ul class="SubMenuM">
                        <?php foreach ($menu_items as $item): ?>
                            <li><a href="<?php echo esc_url($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
                        <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="DSinglePageT">
                        <h1><?php echo get_the_title( get_the_ID() ); ?></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="DSinglePageSec">
                        <?php echo apply_filters('the_content', get_post_field('post_content', get_the_ID())); ?>
                    </div>
                </div>
            </div>
        </div>

    </main>


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
                            <p><a href="/privacy">PRIVACY POLICY</a></p>
                            <p><a href="/terms">TERMS OF USE</a></p>
                            <p><a href="/"><?php echo strtoupper( get_bloginfo('name') ); ?> ALL RIGHTS RESERVED</a></p>
                        </div>
                        <div class="col-lg-4 col-12">
                            <?php echo wp_kses_post( get_theme_mod('editorsline') ); ?>
                        </div>
                        <div class="col-lg-4 col-12">
                            <h2 class="FSocialHeadLine">ফলো করুন <span><?php echo esc_html(get_theme_mod('site_title_bn')); ?></span>-এর খবর</h2>
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
                            <h2 class="FCopyRight">© ২০০৫ - ২০২৬ <a href="<?php echo esc_url( home_url('/') ); ?>"><?php echo esc_html(get_theme_mod('site_title_bn')); ?></a> কর্তৃক সর্বসত্ব ® সংরক্ষিত</h2>
                            <p class="d-none"><a href="<?php echo esc_url( home_url('/') ); ?>" rel="nofollow" target="_blank">উন্নয়নে <?php echo esc_html(get_theme_mod('site_title_bn')); ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="back_to_top" class="back_to_top on"><span class="go_up"><i class="fa-solid fa-arrow-up"></i></span></div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri() . "/frontend/common/js/eMythMakers.js"); ?>"></script>
</body>

</html>