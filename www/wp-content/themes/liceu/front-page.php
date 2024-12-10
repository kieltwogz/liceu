<?php
/*
Template Name: Home Page
*/
get_header(); ?>

		<?php if ( have_posts() ) : ?>
		<section id="main">
			<div class="container">

				<div class="row gutters">

					<div class="col s5">
					<?php query_posts(array( 'category_name' => 'noticias', 'posts_per_page' => 1)); ?>
					<?php while (have_posts()) : the_post(); ?>
						<div class="not big <?php foreach(get_the_category() as $category) {
echo $category->slug . ' ';} ?>">
							<a href="<?php the_permalink() ?>">
								<?php the_post_thumbnail( 'home-g' ); ?>
								<h2><?php the_title(); ?></h2>
							</a>
							<small><?php the_time( 'd/m/Y' ); ?></small>
							<?php the_excerpt(); ?>
						</div>
					<?php endwhile; ?>
					</div>

					<div class="col s7">
						<?php query_posts(array( 'category_name' => 'noticias', 'posts_per_page' => 2, 'offset' => 1)); ?>
						<?php while (have_posts()) : the_post(); ?>
						<div class="not <?php foreach(get_the_category() as $category) {
echo $category->slug . ' ';} ?>">
							<a href="<?php the_permalink() ?>">
								<?php the_post_thumbnail( 'home-p' ); ?>
								<h2><?php the_title(); ?></h2>
							</a>
							<small><?php the_time( 'd/m/Y' ); ?></small>
							<?php the_excerpt(); ?>
						</div>
						<?php endwhile; ?>
					</div>


				</div>
			</div>
		</section>
		<?php //else: ?>
		<?php endif; ?>


<?php get_footer(); ?>

