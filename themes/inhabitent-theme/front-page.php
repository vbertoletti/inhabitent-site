<?php get_header(); ?>

<div class="hero-banner">

<div class="main-logo-container">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/inhabitent-logo-full.svg">			
</div> 

</div>


<?php
   $args = array( 
		 'post_type' => 'post', 
		 'order' => 'DSC',
		 'numberposts' => 3
		);
   $product_posts = get_posts( $args ); // returns an array of posts
?>
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

<div class="home-posts-container">

<div class="home-image-container">
	<?php	 the_post_thumbnail( 'large' ); ?>
</div>

<div class="home-meta-container"> 
	<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
</div>

<div class="journal-content">
	<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
</div>

<div class="home-readmore">
<a href="<?php the_permalink(); ?>">Read Entry</a>
</div>

</div> <!-- end of .home-posts-container -->
			
<?php endforeach; wp_reset_postdata(); ?>


<?php get_footer(); ?>