<?php
/*
Template Name: Page app page
*/
?>

<?php get_header(); ?>
	<div class="u-gridContainer Content-wrap">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<div class="Content-entry">
<div class="app-text">
Nu kan er ook gemakkelijk naar informatie over ons bedrijf worden gezocht via de mobiele website van Evertse Administraties! De app is beschikbaar in Google Play voor Android apparaten en als webapp voor IOS (de smartphone van Apple).

Voor Apple iPhone gebruikers: scan de QR-code of surf naar <a href="http://evertse.lokaalgevonden.nl">www.evertse.nl</a>, je krijgt dan een melding ‘plaats deze link naar deze mobiele site’. Tik op ‘zet in de je beginscherm’.
</div>

<div class="app-iphone">
	<a href="#">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iphone.png" alt="" />
	</a>
</div>

<div class="app-google">
	<a href="#">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/googleplay.jpg" alt="" />
	</a>
</div>

<img src="#" alt="" />


					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>