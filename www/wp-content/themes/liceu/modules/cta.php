<?php

loadCSS("cta");

$cta = get_sub_field("cta", true, true);
?>

<section class="cta">
	<a
		href="<?= $cta["url"] ?>"
		target="<?= $cta["target"] ?>"
		title="<?= $cta["title"] ?>"
	>
		<?= $cta["title"] ?>
	</a>
</section>