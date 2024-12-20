<?php
define('ASSETS_VERSION','1');

/**
 * Remove a barra de administração no front-end
 */
add_filter("show_admin_bar", "__return_false");

/**
 * Desativa o editor de blocos "Gutenberg"
 */
add_filter("use_block_editor_for_post_type", "__return_false");

/**
 * Adiciona suporte para imagens destacadas
 */
add_theme_support("post-thumbnails");

function loadCSS(string $file) {
    wp_register_style($file, get_stylesheet_directory_uri() . "/assets/css/page-modules/" . $file . ".css", array(), ASSETS_VERSION, "screen");
    wp_enqueue_style($file);
}

function loadJS(string $file) {
    wp_register_script($file, get_stylesheet_directory_uri() . "/assets/js/page-modules/" . $file . ".js", array(), ASSETS_VERSION, true);
    wp_enqueue_script($file);
}

function useSplide() {
	wp_register_style("splide", get_stylesheet_directory_uri() . "/assets/js/splide.min.css", array(), ASSETS_VERSION, "screen");
    wp_enqueue_style("splide");
	wp_register_script("splide", get_stylesheet_directory_uri() . "/assets/js/splide.min.js", array(), ASSETS_VERSION, true);
    wp_enqueue_script("splide");
}
?>
