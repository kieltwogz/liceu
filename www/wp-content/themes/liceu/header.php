<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" type="text/css">

        <link href="<?php echo get_template_directory_uri() . '/styles/reset.css'; ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri() . '/styles/responsive.gs.12col.css'; ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri() . '/styles/universal.css'; ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri() . '/styles/responsive.css'; ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css">

        <link href="<?php echo get_template_directory_uri() . '/vendor/swiper/css/swiper.min.css'; ?>" rel="stylesheet" type="text/css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '232539487084320',
              xfbml      : true,
              version    : 'v2.5'
            });
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
        </script>

        <div id="nav-trigger">
            <span>
                <p>Menu Principal</p>
                <img src="<?php echo get_template_directory_uri() . '/images/menu-icon.png'; ?>" />
            </span>
        </div>
        <?php wp_nav_menu(array('container_id' => 'nav-mobile', 'container' => 'nav', 'theme_location'=>'menuM','menu_class'=>'menuMobile')); ?>

        <header>
            <div id="lines">
                <div id="area" class="container row">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo <?php bloginfo( 'name' ); ?>" /></a>

                    <?php wp_nav_menu(array('theme_location'=>'menuT','menu_class'=>'menuTop')); ?>
                    <?php wp_nav_menu(array('theme_location'=>'menuP','menu_class'=>'menu')); ?>

                    <!--<ul id="menuTop">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Portal Educacional</a></li>
                        <li><a href="#">Contato</a></li>
                        <li class="active"><a href="#">Matrículas</a></li>
                    </ul>

                    <ul id="menu">
                        <li><a href="#">Institucional</a></li>
                        <li><a href="#">Ensino</a></li>
                        <li><a href="#">Notícias</a></li>
                        <li><a href="#">Calendário</a></li>
                        <li><a href="#">Fotos</a></li>
                    </ul>-->

                </div>
            </div>
        </header>
        <section id="banner">
                <?php if ( is_page() || is_single()) : ?>
                <div class="swiper-container swiper-limiter">
                <?php else : ?>
                <div class="swiper-container swiper-limiter"><!-- HOME: For full remove swiper-limiter -->
                <?php endif; ?>

                    <div class="swiper-wrapper">
                        <?php if ( is_home() && is_front_page() ) : ?>

                        <?php echo do_shortcode("[metaslider id=355]"); ?>

                        <!--<div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home.jpg" alt="" />
                            <div class="container menuE-container">
                                <ul class="menuE">
                                    <li class="skew ei"><a href="/educacao-infantil/">EDUCAÇÃO INFANTIL</a></li>
                                    <li class="skew ef"><a href="/ensino-fundamental/">ENSINO FUNDAMENTAL</a></li>
                                    <li class="skew em"><a href="/ensino-medio/">ENSINO MÉDIO</a></li>
                                </ul>
                            </div>
                        </div>-->
                        <?php endif; ?>

                        <?php if ( is_page()) : ?>
                        <div class="swiper-slide">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <?php endif; ?>


                        <?php if ( is_single()) : ?>
                        <div class="swiper-slide">
                            <?php the_post_thumbnail('post'); ?>
                        </div>
                        <?php endif; ?>


                    </div>
                </div>
        </section>
