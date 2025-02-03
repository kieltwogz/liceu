<?php

loadCSS("i-description");

$imagens = get_sub_field("imagens", true, true);

?>

<section class="i-description">
	<?php if (count($imagens) == 1) {
		render_img($imagens[0]["imagem"]);
	} else { ?>
		<section class="i-description__img">
			<?php
				if (count($imagens) < 4) {
					foreach ($imagens as $imagem) {
						render_img($imagem["imagem"], array("img1"));
					}
				} else {
					foreach ($imagens as $indice => $imagem) {
						if ($indice == 0) {
							render_img($imagem["imagem"], array("img5")); ?>

							<div class="img__section">
						<?php } else if ($indice == 3) {
								render_img($imagem["imagem"], array("img8")); ?>

								</div>
						<?php } else {
								render_img($imagem["imagem"], array("img6"));
						}
					}
				} ?>
		</section>
	<?php } ?>
</section>