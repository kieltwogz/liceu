<?php get_header(); ?>

	<section id="main" class="page">
		<div class="container">
			<div class="row gutters">
				<div class="col s3 mh">

					<div class="side">
						<div class="widget">
							<ul>
								<?php if($post->post_parent) {
	$parent_link = get_permalink($post->post_parent); ?>
								<li class="voltar"><a href="<?php echo $parent_link; ?>">Voltar</a></li>
								<?php } else { ?>
								<li class="voltar"><a href="/">Voltar</a></li>
								<?php } ?>
								<?php
								$children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
								if ($children) { ?>
								<?php echo $children; ?>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col s9">
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
