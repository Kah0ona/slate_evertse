	<div class="Footer">
		<div class="u-gridContainer">
			<div class="Footer-inner">
				<div class="widget two">
					<h4>Heerjansdam</h4>
					<p>Kromme Nering 24</p>
					<p>2995 BH Heerjansdam</p>
					<p>(T) 078-6772440</p>
					<p>E-mail: info@evertse.nl</p>
				</div>
				
				<div class="widget one">
					<h4>Numansdorp</h4>
					<p>Chopinstraat 1</p>
					<p>3281 TA Numansdorp</p>
					<p>(T) 0186-680870</p>
					<p>E-mail: info@evertse.nl</p>
				</div>
				
				
				
				<div class="widget three">
			      <h4>Sitemap</h4>
			      <?php include 'includes/sitemap.php'; ?>

				  <div class="footer-icons-wrap">
				      <div class="footer-app-logo">
						  <a href="/app-page/">
							  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app-logo.png"></a>
				      </div>
			      
				      <div class="footer-fb-icon"> 
						  <a target="_blank" href="https://www.facebook.com/pages/Evertse-Administraties/262467593813154?ref_type=bookmark">
						  	<svg class="Icon Icon--alone" viewBox="0 0 128 128">
						  		<use xlink:href="#icon-facebook2"></use>
						  	</svg>
						  </a>
				      </div>
				  </div>
				</div>
			</div>
		</div>
	</div>

	<!-- Copyright info -->
	<div class="copyright-info">
		<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door <a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden</a> - <a href="/files/2014/06/voorwaarden.pdf">Algemene Voorwaarden</a></p> 
	</div>
	
  <!-- Load jquery from google CDN if possible, with fallback to local version -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/standalone/jquery.min.js"><\/script>')</script>

	<!-- Footer javascript below here -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>