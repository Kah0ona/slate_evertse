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
						<p>Welkom bij Evertse Administraties</p>
					</div>
					<div class="homepage-text-left"> 
						<img class="homepage-textimg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/homepage-textimg.jpg">
						<?php the_content(); ?>
					</div>
				</div>
			</article>
		<?php endwhile; endif; ?>
		</div>
		
		<div class="Sidebar-wrap">
		<div class="Sidebar-title"><p>Waarom Evertse Administraties?</p></div>
			<div class="Sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>
