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

		<!-- Preconnect para carregar mais rápido as fontes do Google -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

		<!-- Preload das fontes customizadas Biko -->
		<link rel="preload" href="<?= get_stylesheet_directory_uri() ?>/assets/fonts/biko/Biko_Black.otf" as="font" type="font/otf" crossorigin="anonymous" />
		<link rel="preload" href="<?= get_stylesheet_directory_uri() ?>/assets/fonts/biko/Biko_Bold.otf" as="font" type="font/otf" crossorigin="anonymous" />
		<link rel="preload" href="<?= get_stylesheet_directory_uri() ?>/assets/fonts/biko/Biko_Regular.otf" as="font" type="font/otf" crossorigin="anonymous" />

		<!-- Carregamento correto do Google Fonts (CSS) -->
		<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:wght@400;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100..900;1,100..900&family=Poppins:wght@400;700&display=swap" rel="stylesheet" />

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
						<img width="190" height="69"
                            src="<?= esc_url(get_stylesheet_directory_uri() . '/assets/img/liceu_logo.svg'); ?>"
                            alt="Liceu Contemporâneo">
                        <img width="190" height="69"
                            src="<?= esc_url(get_stylesheet_directory_uri() . '/assets/img/liceu_logo.svg'); ?>"
                            alt="Liceu Contemporâneo">
                    </picture>
                </h1>
            </a>
            <button class="header__m-button" aria-label="Menu Hambúrguer">
                <span></span>
            </button>
            <div class="header__m-menu">
				<?php
					$header = get_field("header", "option");

					foreach ($header as $index => $item) {
						if ($index == 0) { ?>
							<nav class="header__menu">
						<?php }

						$ultimo = $index + 1 == count($header);

						if ( ! $ultimo) {
							if ($item["acf_fc_layout"] == "link") { ?>
								<a
									href="<?= $item["link"]["url"] ?>"
									target="<?= $item["link"]["target"] ?>"
									title="<?= $item["link"]["title"] ?>"
								>
									<?= $item["link"]["title"] ?>
								</a>
							<?php } else if ($item["acf_fc_layout"] == "search") { ?>
								<button type="button" aria-label="Pesquisar" data-search></button>
								<input type="text" name="search" placeholder="<?= $item["texto"] ?>" />
							<?php } else { ?>
								<a
									href="#"
									class="<?= "m0" . $index ?> pointer"
								>
									<?= $item["titulo"] ?>
								</a>
								<ul class="drop" data-ref="<?= "m0" . $index ?>" data-identifier="sub-menu" data-menu-top="ref-t + ref-h + 1.6rem"
									data-menu-left="ref-l + ((ref-w / 2) - (men-w / 2))">
									<li class="drop-item">
										<?php foreach ($item["links"] as $link) { ?>
											<a
											href="<?= $link["link"]["url"] ?>"
											target="<?= $link["link"]["target"] ?>"
											title="<?= $link["link"]["title"] ?>"
											>
												<?= $link["link"]["title"] ?>
											</a>
										<?php } ?>
									</li>
								</ul>
							<?php }
						} else { ?>
							</nav>
							<div class="header__last">
								<a
									href="<?= $item["link"]["url"] ?>"
									target="<?= $item["link"]["target"] ?>"
									title="<?= $item["link"]["title"] ?>"
								>
									<?= $item["link"]["title"] ?>
								</a>
							</div>
						<?php }
					} ?>
            </div>
        </div>

    </header>

	<div class="transition">
		<?php render_img(get_field("logo_trans", "option")); ?>
	</div>

    <main>