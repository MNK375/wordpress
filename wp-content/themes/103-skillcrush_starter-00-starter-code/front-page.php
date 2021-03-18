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
				<div class="social-btns">  <!-- populate or remove as many of these as you want -->					
										<a href="https://www.linkedin.com/in/minako-polat-952b541b8/" class="soc-icon ln"><span class="screen-reader-text">LinkedIn</span></a>		
					<a href="https://github.com/MNK375/Simple-html-css-website2" class="soc-icon gh"><span class="screen-reader-text">GitHub</span></a>
					<a href="https://www.instagram.com/" class="soc-icon in"><span class="screen-reader-text">Instagram</span></a>
				</div>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>

        <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                 <div id="secondary" class="widget-area" role="complementary">
	      <?php dynamic_sidebar( 'sidebar-2' ); ?>
                 </div>
             <?php endif; ?>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
