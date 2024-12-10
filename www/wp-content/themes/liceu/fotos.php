<?php
session_start();
require 'facebook-php-sdk/src/facebook.php';

$appId = '232539487084320';
$secret = 'f4e3c26715bf8265ebe1904cad3c2866';
$pageid = '257224097629494';

$facebook = new Facebook(array('appId'  => $appId,'secret' => $secret));

function base64_url_encode($input) {
    return strtr(base64_encode($input), '+/=', '-_~');
}

function base64_url_decode($input) {
    return base64_decode(strtr($input, '-_~', '+/='));
}

/**
 * Template Name: Facebook Albuns
 */

?>

<?php get_header(); ?>

    <section id="main" class="page">
        <div class="container">
            <div class="row gutters">
                <div class="col s12">

                    <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" class="facebook-photo-gallery" <?php //post_class(); ?>>
                        <?php if(!$_GET['interna']) { ?>
                            <div class="entry-header">
                                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                            </div>
                        <?php } ?>

                        <div class="entry-content">
                            <?php the_content(); ?>

                            <?php
                        if($_GET['interna']) {
                            echo '<script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>';
                            echo '<script>jQuery(window).on("load", function() {jQuery(".grid").masonry({gutter: 10, itemSelector: ".grid-item", columnWidth: 290});});</script>';


                            try {
                                $album = $facebook->api('/' . $_GET['interna'] . '?fields=name,description,link');

                                echo '<a class="all" href="' . get_permalink() . '">ver todos os albuns</a>';
                                echo '<div class="photo-gallery-header">';
                                echo '<h1 class="entry-title">' . $album['name'] . '</h1>';
                                echo '<p>' . $album['description'];
                                echo '<a href="' . $album['link'] . '" target="_blank">ver no Facebook</a></p>';
                                echo '</div>';

                                if($_GET['cmd']){
                                    $pics = $facebook->api(base64_url_decode($_GET['cmd']));
                                } else {
                                    $pics = $facebook->api('/' . $_GET['interna'] . '/photos?fields=source,picture,link,name');
                                }

                                echo '<div class="grid">';
                                foreach ($pics['data'] as $pic){
                                    echo '<div class="grid-item" style="width: 290px; margin-bottom: 10px;"><a data-rel="lightbox" class="simplelightbox" href="' . $pic['source'] . '"><img title="' . $pic['name'] . '" src="' . $pic['source'] .'" alt="" style="width: 100%"></a></div>';
                                }
                                echo '</div>';

                                echo '<div class="navigation">';
                                if($pics['paging']['previous']){
                                    $puroLink = $pics['paging']['previous'];
                                    $link = str_replace ('https://graph.facebook.com/v2.5', '', $puroLink);
                                    echo '<a class="previous" href="?cmd=' . base64_url_encode($link) . '&interna=' . $_GET['interna'] . '">Anterior</a>';
                                }
                                if($pics['paging']['next']){
                                    $puroLink = $pics['paging']['next'];
                                    $link = str_replace ('https://graph.facebook.com/v2.5', '', $puroLink);
                                    echo '<a class="next" href="?cmd=' . base64_url_encode($link) . '&interna=' . $_GET['interna'] . '">Próxima</a>';
                                }
                                echo '</div>';
                            } catch (FacebookApiException $e) {
                                var_dump($e);
                                //error_log($e);
                            }

                        } else {

                            try {
                                if($_GET['cmd']){
                                    $albums = $facebook->api(base64_url_decode($_GET['cmd']));
                                } else {
                                    $albums = $facebook->api('/' . $pageid .'/albums');
                                }

                                echo '<ul class="grid-text clearfix">';
                                foreach ($albums['data'] as $album){
                                    // Exceção de Timeline e Capas
                                    if($album['id'] != 571841349501099 && $album['id'] != 397413020277267) {
                                        $pics = $facebook->api('/'.$album['id'].'/photos?fields=source,picture&limit=5');
                                        $pic = $pics['data'][2]['source'];
                                        $date = date_create($album['created_time']);
                                        $dia = date_format($date, 'd/m/Y');

                                        if(count($pics['data']) > 0) {
                                            echo '<li><a href="?interna=' . $album['id'] . '"><div class="img" style="background-image: url(' . $pic .');"></div><div class="caption"><span class="titulo">' . $album['name'] .'</span><span>' . $dia . '</span></div></a></li>';
                                        }
                                    }
                                }
                                echo '</ul>';

                                echo '<div class="navigation">';
                                if($albums['paging']['previous']){
                                    $puroLink = $albums['paging']['previous'];
                                    $link = str_replace ('https://graph.facebook.com/v2.5', '', $puroLink);
                                    echo '<a class="previous" href="?cmd=' . base64_url_encode($link) . '">Anterior</a>';
                                }
                                if($albums['paging']['next']){
                                    $puroLink = $albums['paging']['next'];
                                    $link = str_replace ('https://graph.facebook.com/v2.5', '', $puroLink);
                                    echo '<a class="next" href="?cmd=' . base64_url_encode($link) . '">Próxima</a>';
                                }
                                echo '</div>';
                            } catch (FacebookApiException $e) {
                                var_dump($e);
                                //error_log($e);
                            }
                        }
                        ?>
                        </div>
                    </article>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>