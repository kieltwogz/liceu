<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php
		wp_head();

		global $current_user;
		wp_get_current_user();
	?>

    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- Assets -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo esc_url(get_stylesheet_directory_uri() . 'assets/img/favicon/apple-touch-icon.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo esc_url(get_stylesheet_directory_uri() . 'assets/img/favicon/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo esc_url(get_stylesheet_directory_uri() . 'assets/img/favicon/favicon-16x16.png'); ?>">
    <link rel="manifest"
        href="<?php echo esc_url(get_stylesheet_directory_uri() . 'assets/img/favicon/site.webmanifest'); ?>">
    <link rel="mask-icon"
        href="<?php echo esc_url(get_stylesheet_directory_uri() . 'assets/img/favicon/safari-pinned-tab.svg'); ?>"
        color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Gerador de Favicon -->
    <!-- https://realfavicongenerator.net/ -->

    <title><?php echo get_bloginfo('name'); ?></title>
</head>

<body <?php body_class($post->post_name ?? ''); ?>>

    <div class="warning">
        <p>Transformando o Futuro Através da Educação de Excelência</p>
    </div>

    <header class="header header--purple">
        <div class="header__wrapper">
            <a href="/" title="Liceu Comtemporâneo">
                <h1 class="header__logo">
                    Liceu Contemporâneo
                    <picture>
                        <img width="190" height="69"
                            src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/liceu_logo.svg'); ?>"
                            alt="Liceu Contemporâneo">
                        <img width="190" height="69"
                            src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/liceu_logo_black.svg'); ?>"
                            alt="Liceu Contemporâneo">
                    </picture>
                </h1>
            </a>
            <button class="header__m-button">
                <span></span>
            </button>
            <div class="header__m-menu">
                <nav class="header__menu">
                    <a href="/">Início</a>
                    <a href="#" class="m01 pointer" title="Institucional">
                        Institucional
                    </a>
                    <ul class="drop" data-ref="m01" data-identifier="sub-menu" data-menu-top="ref-t + ref-h + 1.6rem"
                        data-menu-left="ref-l + ((ref-w / 2) - (men-w / 2))">
                        <li class="drop-item">
                            <a href="#" title="Histórico">
                                Histórico
                            </a>
                            <a href="#" title="Proposta Pedagógica">
                                Proposta Pedagógica
                            </a>
                            <a href="#" title="Infraestrutura">
                                Infraestrutura
                            </a>
                            <a href="#" title="Equipe">
                                Equipe
                            </a>
                            <a href="#" title="Nosso Diferencial">
                                Nosso Diferencial
                            </a>
                            <a href="#" title="Nossa Filosofia">
                                Nossa Filosofia
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="m02 pointer">Educação</a>
                    <ul class="drop" data-ref="m02" data-identifier="sub-menu" data-menu-top="ref-t + ref-h + 1.6rem"
                        data-menu-left="ref-l + ((ref-w / 2) - (men-w / 2))">
                        <li class="drop-item">
                            <a href="#" title="Educação Infantil">
                                Educação Infantil
                            </a>
                            <a href="#" title="Educação Fundamental">
                                Educação Fundamental
                            </a>
                            <a href="#" title="Ensino Médio">
                                Ensino Médio
                            </a>
                            <a href="#" title="Atividades Complementares">
                                Atividades Complementares
                            </a>
                        </li>
                    </ul>
                    <a href="#">Notícias</a>
                </nav>
                <div class="header__last">
                    <a href="#">Contato</a>
                </div>
            </div>

        </div>

    </header>

    <main>