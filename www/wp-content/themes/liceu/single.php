<?php get_header(); ?>
	<section id="main" class="page">
		<div class="container">
			<div class="row gutters">
				<div class="col s3 mh">

					<div class="side">
						<?php get_sidebar(); ?>
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