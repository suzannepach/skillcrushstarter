<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="social-btns">
					<!-- <a href="" class="soc-icon tw" target="_blank" rel="noopener noreferrer"><span class="screen-reader-text">Twitter</span></a> -->
					<!-- <a href="" class="soc-icon fb" target="_blank" rel="noopener noreferrer"><span class="screen-reader-text">Facebook</span></a> -->
					<a href="https://www.linkedin.com/in/suzannepach/" class="soc-icon ln" target="_blank" rel="noopener noreferrer"><span class="screen-reader-text" >LinkedIn</span></a>
					<!-- <a href="" class="soc-icon db" target="_blank" rel="noopener noreferrer"><span class="screen-reader-text">Dribble</span></a> -->
					<a href="https://github.com/suzannepach" class="soc-icon gh" target="_blank" rel="noopener noreferrer"><span class="screen-reader-text">GitHub</span></a>
					<!-- <a href="" class="soc-icon in" target="_blank" rel="noopener noreferrer"><span class="screen-reader-text">Instagram</span></a> -->
				</div>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
