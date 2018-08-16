<?php
/**
 * The template for displaying product archive page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<header class="shop-header">
			<h1> shop stuff </h1>
		</header><!-- .shop-header -->


  <div class="products-section-wrapper">

		<?php if ( have_posts() ) : ?>

	<!-- loop over terms and echo them to the screen -->
			<?php
	 			$terms = get_terms (array( 
				'taxonomy' => 'product_type',
	 			));
			?>

			<?php foreach ( $terms as $term ):  ?>
				 
				<section class="terms-container">
				<a href="#">
				<p><?php echo $term->name; ?></p>
				</a>
			
			<?php endforeach; ?>
			</section>
			</div>
	
			<?php /* Start the Loop on products */ ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php if ( has_post_thumbnail() ) : ?>
						<a href=<?php echo get_post_permalink() ?>><?php the_post_thumbnail( 'medium' ); ?></a>
						<?php endif; ?>
											
						<div class="product-related-info">

						<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		
						<p class="price"> ................. <?php echo CFS()->get( 'price' ); ?></p>

						</div>

				</article>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

    </div> <!-- .products-section-wrapper -->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

