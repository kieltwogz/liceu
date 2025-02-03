<?php

loadCSS("i-description");

$texto = get_sub_field("texto", true, true);
?>

<section class="i-description">
	<h3><?= $texto ?></h3>
</section>