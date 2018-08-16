<?php
/**
 * The template for displaying taxonomy product type. 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


  <div class="products-section-wrapper">

		<?php if ( have_posts() ) : ?>

		<header class="shop-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
			?>
		</header><!-- .shop-header -->


	<!-- loop over terms and echo them to the screen -->
			<?php
	 			$terms = get_terms (array( 
				'taxonomy' => 'product_type',
	 			));
			?>

			<?php foreach ( $terms as $term ):  ?>
		 	
				<a href= " <?php echo ' . esc_url( $term_link ) . $term->name>' ?>" </a>
	
			<?php endforeach; ?>



			<?php /* Start the Loop on products */ ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php if ( has_post_thumbnail() ) : ?>
						<a href=<?php echo get_post_permalink() ?>><?php the_post_thumbnail( 'medium' ); ?></a>
						<?php endif; ?>
											
						<div class="product-related-info">

						<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
						<span>.................</span>
						<span class="price"><?php echo CFS()->get( 'price' ); ?></span>

						</div>

				</article>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

    </div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
