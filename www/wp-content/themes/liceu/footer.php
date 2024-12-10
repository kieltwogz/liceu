		<footer>
			<div id="cross" class="container">
				<div id="social">
					<a href="https://www.facebook.com/liceucontemporaneo/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/facebook.jpg" alt="Facebook">
					</a>
				</div>

				<ul id="menuF">
					<?php dynamic_sidebar( 'footer-1' ); ?>
					<?php dynamic_sidebar( 'footer-2' ); ?>
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</ul>

				<div id="address">
					<p>R. Paraíso, 369 - Vila Tiberio, Ribeirão Preto, 14050-440 - (16) 3633-0028</p>
				</div>
			</div>
			<div id="copy">
				<div class="container row">
					<div class="col s6"><p>© 2015 - Todos os direitos reservados.</p></div>
					<div class="col s6"><p class="designer"><a href="http://guilhermevini.com/">guilhermevini.com</a></p></div>
				</div>
			</div>
		</footer>

		<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/scripts/jquery.maskedinput.min.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/scripts/respond.min.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/scripts/main.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/vendor/swiper/js/swiper.jquery.min.js'; ?>"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2129623-32', 'auto');
  ga('send', 'pageview');

</script>
		<?php wp_footer(); ?>
	</body>
</html>
