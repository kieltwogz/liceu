<?php
define('ASSETS_VERSION','1');

/**
 * Remove a barra de administração no front-end
 */
add_filter("show_admin_bar", "__return_false");

/**
 * Adiciona suporte para títulos (Yoast SEO)
 */
add_theme_support( 'title-tag' );

/**
 * Desativa o editor de blocos "Gutenberg"
 */
function remove_gutenberg() {
    add_filter('use_block_editor_for_post', '__return_false', 10);
    add_filter('use_block_editor_for_post_type', '__return_false', 10);
}
add_action('init', 'remove_gutenberg');

/**
 * Adiciona suporte para imagens destacadas
 */
add_theme_support("post-thumbnails");

function remove_unwanted_meta_boxes() {
    // Campos personalizados
    remove_meta_box('postcustom', ['post', 'page'], 'normal');
    // Slug
    remove_meta_box('slugdiv', ['post', 'page'], 'normal');
    // Discussão
    remove_meta_box('commentstatusdiv', ['post', 'page'], 'normal');
    // Comentários
    remove_meta_box('commentsdiv', ['post', 'page'], 'normal');
    // Autor
    remove_meta_box('authordiv', ['post', 'page'], 'normal');
	// Trackbacks
    remove_meta_box('trackbacksdiv', ['post', 'page'], 'normal');
}
add_action('admin_menu', 'remove_unwanted_meta_boxes');

function remove_comments_menu() {
    remove_menu_page('edit-comments.php'); // Remove o menu de Comentários
}
add_action('admin_menu', 'remove_comments_menu');

function define_excerpt_length() {
	return 25;
}
add_filter( 'excerpt_length', 'define_excerpt_length' );

function accepted_text_formats($settings) {
    $settings['block_formats'] = 'Parágrafo=p; Título 1=h2; Título 2=h3; Título 3=h4';
    return $settings;
}
add_filter('tiny_mce_before_init', 'accepted_text_formats');

function remove_editor_buttons($buttons) {
    $remove = array('blockquote', 'wp_more');
    return array_diff($buttons, $remove);
}
add_filter('mce_buttons', 'remove_editor_buttons');

function remove_edition_sections($wp_customize) {
    // Remove a seção de CSS adicional
    $wp_customize->remove_section('custom_css');
	// Remove a seção de configurações da página inicial
    $wp_customize->remove_section('static_front_page');
}
add_action('customize_register', 'remove_edition_sections', 15);

function remove_patterns() {
	// Remove o botão "Padrões" da lista de temas
    remove_submenu_page('themes.php', 'site-editor.php?path=/patterns');
}
add_action('admin_menu', 'remove_patterns');

function remove_tags() {
    // Remove a taxonomia "post_tag" (tags)
    unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'remove_tags');

function remove_jquery() {
    // Desregistra o jQuery do WordPress
    wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'remove_jquery');

function remove_editor() {
    global $post;

    if (!$post) return;

    $modelos_sem_editor = [
        'modules.php',
        'noticias.php',
    ];

    if (in_array(get_page_template_slug($post->ID), $modelos_sem_editor)) {
        remove_post_type_support('page', 'editor');
    }
}
add_action('add_meta_boxes', 'remove_editor');

function remove_featured_image_home() {
    $screen = get_current_screen();

    if ($screen->id === 'page' && get_option('page_on_front') == get_the_ID()) {
        remove_meta_box('postimagediv', 'page', 'side');
    }
}
add_action('add_meta_boxes', 'remove_featured_image_home', 10);

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

function get_recent_posts(int $posts_per_page = 3) {
    $recent_posts = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => $posts_per_page,
        'orderby'        => 'date',
        'order'          => 'DESC'
	));

    $posts_data = array();

    if ($recent_posts->have_posts()) {
        while ($recent_posts->have_posts()) { $recent_posts->the_post();
            $post_data = array(
                'title'    => get_the_title(),
                'excerpt'  => get_the_excerpt(),
                'img'      => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                'date'     => get_the_date('j \d\e F \d\e Y'),
                'url'      => get_permalink(),
				'alt'	   => get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true),
				'category' => get_the_category()[0]->name
            );

            array_push($posts_data, $post_data);
        }

        wp_reset_postdata();
	}

    return $posts_data;
}

function render_img(int $id, array $classes = array()) {
    $imagem_data = wp_get_attachment_image_src($id, 'full');
    $alt = get_post_meta($id, '_wp_attachment_image_alt', true);
    $title = get_the_title($id);

    if ($imagem_data) {
        $srcset = wp_get_attachment_image_srcset($id);
        $sizes = wp_get_attachment_image_sizes($id);

        ?>
        <img
            src="<?= esc_url($imagem_data[0]); ?>"
            width="<?= esc_attr($imagem_data[1]); ?>"
            height="<?= esc_attr($imagem_data[2]); ?>"
            alt="<?= esc_attr($alt); ?>"
            title="<?= esc_attr($title); ?>"
            class="<?= implode(" ", $classes); ?>"
            srcset="<?= esc_attr($srcset); ?>"
            sizes="<?= esc_attr($sizes); ?>"
        >
    <?php }
}

function get_recent_posts_rest(WP_REST_Request $request) {
    $posts_per_page = $request->get_param('per_page') ?: 3;
    $offset = $request->get_param('offset') ?: 0;

    $recent_posts = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => $posts_per_page,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'offset'         => $offset
    ));

    $posts_data = array();
	$total_posts = wp_count_posts()->publish;

    if ($recent_posts->have_posts()) {
        while ($recent_posts->have_posts()) {
            $recent_posts->the_post();
            $post_data = array(
                'title'    => get_the_title(),
                'excerpt'  => get_the_excerpt(),
                'img'      => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                'date'     => get_the_date('j \d\e F \d\e Y'),
                'url'      => get_permalink(),
                'alt'      => get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true),
                'category' => get_the_category()[0]->name ?? ''
            );

            array_push($posts_data, $post_data);
        }
        wp_reset_postdata();
    }

    return new WP_REST_Response([
        'posts' => $posts_data,
        'total_posts' => $total_posts
    ], 200);
}

function register_custom_rest_routes() {
    register_rest_route('custom/v1', '/recent-posts', array(
        'methods'  => 'GET',
        'callback' => 'get_recent_posts_rest',
        'permission_callback' => '__return_true'
    ));
}
add_action('rest_api_init', 'register_custom_rest_routes');

// Google Form shortcode, example: [google_form url="https://docs.google.com/forms/d/e/1FAIpQLSc8Kk1ntNONh_TtyTO62Vd7qU2P-kEo1CrevC0q47gZUl4img/viewform?usp=dialog"]
function embed_google_form($atts) {
    $atts = shortcode_atts(
        array('url' => ''),
        $atts,
        'google_form'
    );

    if (empty($atts['url'])) {
        return '';
    }

    return '<iframe src="' . esc_url($atts['url']) . '" width="100%" height="800px" style="border: none;"></iframe>';
}
add_shortcode('google_form', 'embed_google_form');

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
}
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
