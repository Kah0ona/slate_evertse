<?php
/*
Template Name: Page w/o sidebar
*/
?>

<?php get_header(); ?>
	<div class="u-gridContainer Content-wrap">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<div class="Content-entry">
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>