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
				<?php foreach ($slider as $slide) { ?>
					<li class="splide__slide">
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
							<?php if ($slide["tipo_de_slide"] == "imagem") { ?>
								<a
									href="<?= $whatsapp["url"] ?>"
									target="<?= $whatsapp["target"] ?>"
									title="<?= $whatsapp["title"] ?>"
								>
									<?= $whatsapp["title"] ?>
								</a>
								<picture>
									<?php render_img($slide["imagem_de_cima"]); ?>
								</picture>
								<picture>
									<?php render_img($slide["imagem_da_direita"]); ?>
								</picture>
								<picture>
									<?php render_img($slide["imagem_da_esquerda"]); ?>
								</picture>
							<?php } else { ?>
								<div width="500" height="375" class="video__thumbnail" style="background-image: url('https://img.youtube.com/vi/<?= $slide["video"] ?>/hqdefault.jpg');"></div>
								<button id="<?= $slide["video"] ?>" class="video__player" type="button"></button>
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