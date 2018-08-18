<?php
/**
 * The template for displaying taxonomy product_type.
 *
 * @package Inhabitent_Theme
 */


get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : ?>

        <header class="taxonomy-header-box">
          <h1><?php
            	single_term_title( $prefix = '', $display = true );?></h1>

           	 <?php
            the_archive_description( '<p>', '</p>' );?>
				</header>
				


        <div class="taxonomy-products-box">
                
					<?php while ( have_posts() ) : the_post(); ?>
                
        	<div class="product-description-box">
           
              <a href=<?php echo get_post_permalink() ?>><?php the_post_thumbnail( 'medium' ); ?></a>
              
            <div class="product-related-info">

						<?php the_title( '<p class="entry-title">', '</p>' ); ?>
						
              <span>............</span>
              <span><?php echo CFS()->get( 'price' ); ?></span>
              </div> <!--product-related-info-->
							</div> <!--product-description-box-->
							
            <?php endwhile; ?>
            </div><!--taxonomy-products-box-->

        	<?php else : ?>
           	<?php get_template_part( 'template-parts/content', 'none' ); ?>
        	<?php endif; ?>

    </main><!-- #main -->

  </div><!-- #primary -->

<?php get_footer(); ?>

