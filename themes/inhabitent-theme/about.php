<?php
/**
 * Template Name: About Page
 * The template for displaying the About page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="about-content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		
				<?php the_content(); ?>
				<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
				) );
			?>
	
		</div><!-- .entry-content -->
		</article><!-- #post-## -->


			<?php endwhile; ?>


		</main> 
	</div>

<?php get_footer(); ?>
