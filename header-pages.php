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
            <div class="container container_pages">
                <div class="header__top">

                    <div class="black-stripe">
                        <div id="bar" class="bar-menu"></div>
                    </div>

                    <div class="header__menu">
                        <?php the_custom_logo (); ?>
                        <div class="header__service header__service_page"><a href="<?php bloginfo('url')?>" class="logo header__logo">
                            <img src="<?php echo get_template_directory_uri() ?>/assests/img/Гарантбелый.png"><span class="header__logo-text">Гарант</span></a>
                        </div>

                        <div class="header__navmenu">
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
                            
                            <!-- <nav id="nav" class="navigation  header__nav header__nav_none">
                                <ul class="navigation__list">
                                    <li class="navigation__item"><a href="<?php echo get_home_url() ?>/repair" class="navigation__link">Ремонт</a></li>
                                    <li class="navigation__item"><a href="<?php echo get_home_url() ?>/add-services" class="navigation__link">Дополнительные услуги</a></li>
                                    <li class="navigation__item"><a href="<?php echo get_home_url() ?>/information" class="navigation__link">Информация</a></li>
                                    <li class="navigation__item"><a href="<?php echo get_home_url() ?>/faq" class="navigation__link">Отзывы и Faq</a></li>
                                    <li class="navigation__item"><a href="<?php echo get_home_url() ?>/contacts" class="navigation__link">Контакты</a></li>
                                </ul>
                            </nav> -->
                        </div>

                        <div class="header__navmenu-buttom">
                            <a href="" class="header__navmenu-wrapper">
                                <span></span>
                            </a>  
                        </div>

                        <nav class="header__navmenu-mobile">
                            <li class="navigation__item-mobile"><a href="<?php echo get_home_url() ?>/repair" class="navigation__link-mobile">Ремонт</a></li>
                            <li class="navigation__item-mobile"><a href="<?php echo get_home_url() ?>/add-services" class="navigation__link-mobile">Дополнительные услуги</a></li>
                            <li class="navigation__item-mobile"><a href="<?php echo get_home_url() ?>/information" class="navigation__link-mobile">Информация</a></li>
                            <li class="navigation__item-mobile"><a href="<?php echo get_home_url() ?>/faq" class="navigation__link-mobile">Отзывы и Faq</a></li>
                            <li class="navigation__item-mobile"><a href="<?php echo get_home_url() ?>/contacts" class="navigation__link-mobile">Контакты</a></li>
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
                    </div>

                </div>

            </div>
            </header>