<?php /* Template Name: Página Inteira - Full */ ?>

<?php get_header(); ?>

<?php
global $post;
$slug = get_post( $post )->post_name;
?>
    <section id="main" class="page <?php echo $slug; ?>">
        <div class="container">
            <div class="row gutters">
                <div class="col s13">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="entry-header">
                                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                            </div>

                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>
                        </article>
                        <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
