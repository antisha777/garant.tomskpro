<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://vk.com/dmitry_itdoctor
 *
 * @package garant
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="гарант, томск, ремонт, запчасти, сотовые, ремонт, apple, samsung, xiaomi, huawei, meizu, asus">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/assests/img/favicon.png">
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assests/img/favicon.png" type="image/png">
    <script src="<?php echo get_template_directory_uri() ?>/assests/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();
    for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
    k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(95170203, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
    });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/95170203" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
        <!-------------------------section heade------------------------->
        <header class="header">
            <div class="cifra-fon">
                <div class="cifra-fon__overflay"></div>
                <div class="cifra-fon__overflay-bottom"></div>
                <img src="<?php echo get_template_directory_uri() ?>/assests/img/cifra02.jpg" alt="">
            </div>
            <div class="container">
                <div class="header__top">

                    <div class="black-stripe">
                        <div id="bar" class="bar-menu"></div>
                    </div>

                    <div class="header__menu">
                        <?php the_custom_logo (); ?>
                        <div class="header__service header__service_page"><a href="<?php bloginfo('url')?>" class="logo header__logo">
                            <img src="<?php echo get_template_directory_uri() ?>/assests/img/Гарантбелый.png"><span class="header__logo-text">Гарант</span></a>
                        </div>

                        <div itemscope itemtype="http://schema.org/SiteNavigationElement" class="header__navmenu">
                            <!-- <nav itemprop="about" itemscope itemtype="http://schema.org/ItemList" id="nav" class="navigation  header__nav header__nav_none">
                                <ul class="navigation__list">
                                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList" class="navigation__item"><a href="<?php echo get_home_url() ?>/repair" itemprop="<?php echo get_home_url() ?>/repair" class="navigation__link">Ремонт</a><meta itemprop="name" content="Ремонт"/></li>
                                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList" class="navigation__item"><a href="<?php echo get_home_url() ?>/add-services" itemprop="<?php echo get_home_url() ?>/add-services" class="navigation__link">Дополнительные услуги</a><meta itemprop="name" content="Дополнительные услуги"/></li>
                                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList" class="navigation__item"><a href="<?php echo get_home_url() ?>/information" itemprop="<?php echo get_home_url() ?>/information" class="navigation__link">Информация</a><meta itemprop="name" content="Информация"/></li>
                                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList" class="navigation__item"><a href="<?php echo get_home_url() ?>/faq" itemprop="<?php echo get_home_url() ?>/faq" class="navigation__link-mobile">Отзывы и Faq</a><meta itemprop="name" content="Отзывы и Faq"/></li>
                                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList" class="navigation__item"><a href="<?php echo get_home_url() ?>/contacts" itemprop="<?php echo get_home_url() ?>/contacts" class="navigation__link">Контакты</a><meta itemprop="name" content="Контакты"/></li>
                                </ul>
                            </nav> -->
                            <?php wp_nav_menu( array (
                                            // 'theme_location'  => '',
                                            // 'menu'            => '',
                                            'container'       => 'div',
                                            'container_class' => 'menu-menu-1-container',
                                            'menu_class'      => 'menu-menu-1-container',
                                            'menu_id'         => '',
                                            'echo'            => true,
                                            'fallback_cb'     => 'wp_page_menu',
                                            'before'          => '',
                                            'after'           => '',
                                            'link_before'     => '',
                                            'link_after'      => '',
                                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                            'depth'           => 0,
                                            'walker'          => '',

                                    ) ); ?>
                        </div>

                        <div class="header__navmenu-buttom">
                            <a href="" class="header__navmenu-wrapper">
                                <span></span>
                            </a>  
                        </div>

                        <nav class="navigation header__navmenu-mobile">
                            <!-- <li class="navigation__item-mobile"><a href="<?php echo get_home_url() ?>/repair" class="navigation__link-mobile">Ремонт</a></li>
                            <li class="navigation__item-mobile"><a href="<?php echo get_home_url() ?>/add-services" class="navigation__link-mobile">Дополнительные услуги</a></li>
                            <li class="navigation__item-mobile"><a href="<?php echo get_home_url() ?>/information" class="navigation__link-mobile">Информация</a></li>
                            <li class="navigation__item-mobile"><a href="<?php echo get_home_url() ?>/faq" class="navigation__link-mobile">Отзывы и Faq</a></li>
                            <li class="navigation__item-mobile"><a href="<?php echo get_home_url() ?>/contacts" class="navigation__link-mobile">Контакты</a></li> -->

                            <?php wp_nav_menu( array (
                                            // 'theme_location'  => '',
                                            // 'menu'            => '',
                                            'container'       => 'div',
                                            'container_class' => 'menu-menu-1-mobile',
                                            'menu_class'      => 'menu-menu-1-container-mobile',
                                            'menu_id'         => '',
                                            'echo'            => true,
                                            'fallback_cb'     => 'wp_page_menu',
                                            'before'          => '<div class="mobile-sub-menu-btn"><a href="" class="mobile-sub-menu-btn__wrap"><span></span></a></div>',
                                            'after'           => '',
                                            'link_before'     => '',
                                            'link_after'      => '',
                                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                            'depth'           => 0,
                                            'walker'          => '',

                                    ) ); ?>

                            <li class="navigation__item-mobile">
                                <a href="https://vk.com/dmitry_itdoctor" class="navigation__link-mobile">
                                    <div class="navigation__site">
                                        <div id="marquee" class="marquee-site">
                                            <div id='mylist' class='garage-title'>разработка сайтов  тут  создание сайтов  тут</div>
                                            <div id='mylist' class='garage-title'>разработка сайтов  тут  создание сайтов  тут</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </nav>

                    </div> 

                </div>
                <div class="header__content">
                    <div class="hero header__hero">

                        <h1 class="wow fadeIn hero__title" data-wow-delay="1s">
                            <div class="hero__title-wrap">Ремонт <span>ц</span><span>и</span><span>ф</span><span>р</span><span>о</span><span>в</span><span>о</span><span>й</span> техники
                            </div>
                        </h1>
                        
                        <div class="hero__prezentation">
                            
                            <div class="hero__prezentation_left">
                                <div class="hero__subtitle"><h2><span style="background: linear-gradient(74deg,#00ffff -36%,#00ffff -22%,#3bbeb1 4%,#43ca71 104%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Все обещают завтра, а мы делаем<span><span style="background: #fff; -webkit-background-clip: text;-webkit-text-fill-color: transparent;">&nbsp;сегодня!</span></h2></div>
                                <div class="hero__wrap-item-desktop">
                                    <div class="hero__item wow fadeInUp"><span>01</span>Починим при Вас от 5 минут</div>
                                    <div class="hero__item wow fadeInUp" data-wow-delay=".5s"><span>02</span>Комплектующие класса "Original"</div>
                                    <div class="hero__item wow fadeInUp" data-wow-delay="1s"><span>03</span>100% Гарантия</div>
                                </div>
                            </div>
                            <div class="hero__prezentation_right">
                                <div class="hero__box">
                                    <video data-v-4e7c03c7="" playsinline="" muted="muted" autoplay="autoplay" loop="loop" src="<?php echo get_template_directory_uri() ?>/assests/img/garant-pr.mp4" class="project-card-small__image" style=""></video>
                                </div>
                                
                            </div>
                            <div class="hero__wrap-item-mobile">
                                    <div class="hero__item wow fadeInUp"><span>01</span>Быстро</div>
                                    <div class="hero__item wow fadeInUp" data-wow-delay=".5s"><span>02</span>Качественно</div>
                                    <div class="hero__item wow fadeInUp" data-wow-delay="1s"><span>03</span>Гарантия</div>
                                </div>
                        </div>
                        
                        <button data-fancybox data-src="#form-glow"  class="btn btn_large but-effect">
                            <div class="btn__large">
                                <div class="rectangle-runner-button__text blink-2">Перезвонить мне</div>
                                <div class="go-up-button rectangle-runner-button__icon right">
                                    <div class="go-up-button__runner is-white"></div>
                                </div>
                            </div>
                        </button>

                    </div>
                </div>
            </div>
            </header>