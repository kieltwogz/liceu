<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row gutters not <?php foreach(get_the_category() as $category) { echo $category->slug . ' ';} ?>">
		<div class="col s3">
			<a href="<? echo get_permalink(); ?>"><?php the_post_thumbnail( 'home-p' ); ?></a>
		</div>
		<div class="col s9">
			<div class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			</div>
			<small><?php the_time( 'd/m/Y' ); ?></small>
			<?php the_excerpt(); ?>
		</div>
	</div>
</article>
