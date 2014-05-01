<?php
/*
Template Name: Hompage-template
*/
?>

<?php get_header(); ?>
	<div class="u-gridContainer Content-wrap">
		<div class="Content Content--withSidebar">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						
				<?php if(!is_front_page()) { ?>
				<h2><?php the_title(); ?></h2>
				<?php } ?>
				
				<div class="Content-entry">
					<div class="HomepageTitle">
						<p>Welkom bij Evertse administratie</p>
					</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

						<div class="homepage-text-left"><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
						<img class="homepage-textimg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/homepage-textimg.jpg">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
		</div>
		
		<div class="Sidebar-wrap">
		<div class="Sidebar-title"><p>Waarom Evertse administratie?</p></div>
			<div class="Sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>
