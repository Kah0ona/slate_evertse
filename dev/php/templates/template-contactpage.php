<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<h2><?php the_title(); ?></h2>
				<div class="Content-text">

						<hr>

					<div class="u-gridRow">					
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<p>Kromme Nering 24</p>
								<p>2995 BH Heerjansdam</p>
								<p>(T) 078-6772440</p>  
								<p>Email: info@evertse.nl</p>
							</div>
						</div>					
						<div class="adress-map u-gridCol8">
							<div id="map_canvas2"></div>
						</div>
					</div> <!-- /gridRow -->


						<hr>

					<div class="u-gridRow">					
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<p>Chopinstraat 1</p>
								<p>3281 TA Numansdorp</p>
								<p>(T) 0186-680870</p>
								<p>Email: info@evertse.nl</p>
							</div>
						</div>					
						<div class="adress-map u-gridCol8">
							<div id="map_canvas"></div>
						</div>
					</div> <!-- /gridRow -->

						<hr>

					<div class="u-gridRow">						
						<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
						<a class="aangifte-checklist twee" href="/vacatures/">Vacatures</a>
						<?php the_content(); ?>
					
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>