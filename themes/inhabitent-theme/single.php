<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="single-page-main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<div class="single-page-blog-container">

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

				<div class="single-page-social-media">
				<span class="social-media"> <i class="fab fa-facebook"></i> Like </span>
				<span class="social-media"><i class="fab fa-twitter"></i> Tweet </span>
				<span class="social-media"><i class="fab fa-pinterest"></i> Pin </span>
				</div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :

					comments_template();
					
				endif;
			?>


			

		<?php endwhile; // End of the loop. ?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
