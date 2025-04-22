<?php

loadJS("h-hero");
loadCSS("h-hero");

useSplide();

$whatsapp = get_sub_field("whatsapp", true, true);
$slider = get_sub_field("slider", true, false);
$links = get_sub_field("links", true, true);
?>

<section class="h-hero">
	<div class="h-hero__wrapper wrapper">
		<div
			class="h-hero__slide splide"
			role="group"
			aria-label="Hero Banner"
		>

			<div class="splide__track">
				<ul class="splide__list">
				<?php foreach ($slider as $slide) {
					$only_video = (empty($slide["titulo"])) && ($slide["tipo_de_slide"] != "imagem");
				?>
					<li class="splide__slide <?= $slide["tipo_de_slide"] ?> <?= $only_video ? "video" : "" ?>">
						<?php if (!empty($slide["titulo"])) { ?>
							<div>
								<h2><?= $slide["titulo"] ?></h2>
								<p><?= $slide["subtitulo"] ?? "" ?></p>

								<?php if (!empty($slide["botao"])) { ?>
									<a
										href="<?= $slide["botao"]["url"] ?>"
										target="<?= $slide["botao"]["target"] ?>"
										title="<?= $slide["botao"]["title"] ?>"
									>
										<?= $slide["botao"]["title"] ?>
									</a>
								<?php } ?>
							</div>
						<?php } ?>

						<div>
							<?php if ($slide["tipo_de_slide"] == "imagens") { ?>
								<a
									href="<?= $whatsapp["url"] ?>"
									target="<?= $whatsapp["target"] ?>"
									title="<?= $whatsapp["title"] ?>"
								>
									<?= $whatsapp["title"] ?>
								</a>
								<picture>
									<?php render_img($slide["imagem_de_cima"], array(), false); ?>
								</picture>
								<picture>
									<?php render_img($slide["imagem_da_direita"], array(), false); ?>
								</picture>
								<picture>
									<?php render_img($slide["imagem_da_esquerda"], array(), false); ?>
								</picture>
							<?php } else if ($slide["tipo_de_slide"] == "imagem") { ?>
								<?php render_img($slide["imagem"], array(), false); ?>
							<?php } else if ($slide["tipo_de_slide"] == "video_mobile" || $slide["tipo_de_slide"] == "video_desktop") { ?>
								<div width="500" height="375" class="video__thumbnail" style="background-image: url('https://img.youtube.com/vi/<?= $slide["video"] ?>/hqdefault.jpg');"></div>
								<button id="<?= $slide["video"] ?>" class="video__player" type="button" aria-label="Tocar vídeo"></button>
							<?php } ?>
						</div>
					</li>
				<?php } ?>
				</ul>
			</div>
			<ul class="splide__pagination"></ul>
		</div>
		<div>
			<?php foreach ($links as $link) { ?>
				<a
					class="h-hero__button h-hero__button--<?= $link["icone"] ?>"
					href="<?= $link["link"]["url"] ?>"
					target="<?= $link["link"]["target"] ?>"
					title="<?= $link["link"]["title"] ?>"
				>
					<?= $link["link"]["title"] ?>
				</a>
			<?php } ?>
		</div>
	</div>
</section>