<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
		<meta name="apple-mobile-web-app-title" content="Liceu Contemporâneo" />
		<link rel="manifest" href="/site.webmanifest" />

		<?php
		wp_register_style("main", get_stylesheet_directory_uri() . "/assets/css/main.css", array(), ASSETS_VERSION, "screen");
		wp_enqueue_style("main");

		wp_register_script("main", get_stylesheet_directory_uri() . '/assets/js/main.js', array(), ASSETS_VERSION, true);
		wp_enqueue_script("main");
		?>

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:wght@400;700&display=swap"
            rel="stylesheet"
        />

        <?php wp_head(); ?>
    </head>
    <body>

	<?php if (get_field("aviso", "option")) { ?>
		<div class="warning">
			<p><?= get_field("aviso", "option") ?></p>
		</div>
	<?php } ?>

    <header class="header <?= is_front_page() ? "header--purple" : ""; ?>">
        <div class="header__wrapper">
            <a href="/" title="Liceu Contemporâneo">
                <h1 class="header__logo">
                    Liceu Contemporâneo
                    <picture>
                        <?php render_img(get_field("logo_colorida", "option")); ?>
                        <?php render_img(get_field("logo_preto_e_branco", "option")); ?>
                    </picture>
                </h1>
            </a>
            <button class="header__m-button">
                <span></span>
            </button>
            <div class="header__m-menu">
                <nav class="header__menu">
                    <a href="/" title="Institucional">Início</a>
                    <a href="#" class="m01 pointer" title="Institucional">
                        Institucional
                    </a>
                    <ul class="drop" data-ref="m01" data-identifier="sub-menu" data-menu-top="ref-t + ref-h + 1.6rem"
                        data-menu-left="ref-l + ((ref-w / 2) - (men-w / 2))">
                        <li class="drop-item">
                            <a href="/historico/" title="Histórico">
                                Histórico
                            </a>
                            <a href="/proposta-pedagogica/" title="Proposta Pedagógica">
                                Proposta Pedagógica
                            </a>
                            <a href="/infraestrutura" title="Infraestrutura">
                                Infraestrutura
                            </a>
                            <a href="/equipe" title="Equipe">
                                Equipe
                            </a>
                            <a href="/nosso-diferencial" title="Nosso Diferencial">
                                Nosso Diferencial
                            </a>
                            <a href="/nossa-filosofia" title="Nossa Filosofia">
                                Nossa Filosofia
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="m02 pointer">Educação</a>
                    <ul class="drop" data-ref="m02" data-identifier="sub-menu" data-menu-top="ref-t + ref-h + 1.6rem"
                        data-menu-left="ref-l + ((ref-w / 2) - (men-w / 2))">
                        <li class="drop-item">
                            <a href="/educacao-infantil/" title="Educação Infantil">
                                Educação Infantil
                            </a>
                            <a href="/ensino-fundamental" title="Educação Fundamental">
                                Educação Fundamental
                            </a>
                            <a href="/ensino-medio" title="Ensino Médio">
                                Ensino Médio
                            </a>
                            <a href="/atividades-complementares" title="Atividades Complementares">
                                Atividades Complementares
                            </a>
                        </li>
                    </ul>
                    <a href="/noticias">Notícias</a>
                </nav>
                <div class="header__last">
                    <a href="/fale-conosco">Contato</a>
                </div>
            </div>

        </div>

    </header>

    <main>