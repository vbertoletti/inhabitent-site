<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header();?>

		<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header>

			<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>

		</header>


		<div class="single-page-content">
		<?php the_title( '<h1 class="entry-title-single">', '</h1>' ); ?>
		<div class="price-container">
		<?php echo CFS()->get( 'price' ); ?>
		</div>

		<?php the_content(); ?>

				<span class="social-media"> <i class="fab fa-facebook"></i> Like </span>
				<span class="social-media"><i class="fab fa-twitter"></i> Tweet </span>
				<span class="social-media"><i class="fab fa-pinterest"></i> Pin </span>


		</div><!-- .entry-content -->
		
		</article><!-- #post-## -->
	

		<?php endwhile; // End of the loop. ?>
	
	</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();?>
