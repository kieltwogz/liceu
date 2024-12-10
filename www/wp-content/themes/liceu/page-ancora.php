<?php /* Template Name: Menu Ancora */ ?>

<?php get_header(); ?>

<?php
global $post;
$slug = get_post( $post )->post_name;
?>
	<section id="main" class="page <?php echo $slug; ?>">
		<div class="container">
			<div class="row gutters">
				<div class="col s3 mh">
					<div class="side">
						<div class="widget">
							<ul>
								<!-- Constroi Ancora -->
								<li class="pb10"><a href="#">Início</a></li>
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

	<script type="text/javascript">
		var sideP;
		jQuery(window).scroll(function (event) {
			var scroll = jQuery(window).scrollTop();

			if(scroll > sideP) {
				jQuery('.side').addClass('fixed');
			} else {
				jQuery('.side').removeClass('fixed');
			}
		});

		jQuery(document).ready(function(){
			sideP = jQuery('.side').offset().top - 20;
			jQuery( ".page .entry-content h2" ).each(function( index ) {
				var text = jQuery( this ).text();
				jQuery('.side ul').append('<li><a href="' + index + '" class="ancora">' + text + '</a></li>');
			});
		});

		jQuery( ".side ul" ).on( "click", ".ancora", function() {
			event.preventDefault();

			var link = jQuery(this).attr('href');
			var offset = jQuery( ".page .entry-content h2" ).eq( link ).offset().top;

			jQuery('html,body').animate({scrollTop: offset }, 800);
		});

	</script>

<?php get_footer(); ?>
