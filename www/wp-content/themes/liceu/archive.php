<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<section id="main" class="archive">
		<div class="container">
			<div class="row gutters">
				<div class="col s3 mh">
					<div class="side">
						<?php get_sidebar(); ?>
					</div>
				</div>
				<div class="col s9">
					<?php if ( have_posts() ) : ?>
					<div class="page-header">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</div>
					<?php
					while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', get_post_format() );
					endwhile;?>

					<nav class="navigation">
						<div class="prev">
							<?php echo get_next_posts_link( 'Próxima' ); ?>
						</div>
						<div class="next">
							<?php echo get_previous_posts_link( 'Anterior' ); ?>
						</div>
					</nav>

					<?php else :
					get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</div>
			</div>
		</div>
	</section>
	<?php get_footer(); ?>
