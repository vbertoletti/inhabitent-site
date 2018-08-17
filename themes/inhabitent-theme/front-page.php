<?php get_header();?>

<section> <!-- front-page section -->

	<div class="hero-banner">

		<div class="main-logo-container">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/inhabitent-logo-full.svg">
		</div>

	</div> <!-- end of .hero-banner -->

	<div class="home-shop-stuff">
		<h2> shop stuff </h2>
	</div>

	<?php
		$terms = get_terms(array(
    'taxonomy' => 'product_type',
		));
	?>

		<section class="home-shop-stuff-wrapper">
			<?php foreach ($terms as $term): ?>
			<div class="home-terms-container">

			<img src="<?php echo get_template_directory_uri() ?>/assets/images/<?php echo $term->name ?>.svg">


			<p><?php echo $term->description; ?></p>

				<a href="#"><?php echo $term->name . " stuff"; ?></a>

			</div> <!-- end of .home-terms-container -->

			<!-- <?php print_r($term)?> shows what my options are-->

			<?php endforeach;?>
		</section>


		<div class="home-shop-stuff">
			<h2> inhabitent journal </h2>
		</div>


		<?php
			$args = array(
    		'post_type' => 'post',
    		'order' => 'DSC',
    		'numberposts' => 3,
			);
			$product_posts = get_posts($args); // returns an array of posts
		?>


<section class="main-blog-wrapper">
			<?php foreach ($product_posts as $post): setup_postdata($post);?>
		<div class="home-blog-posts-wrapper">


			<?php	the_post_thumbnail();?>
	
			<span class="meta-data-journal">
			<?php inhabitent_posted_on();?> / <?php comments_number('0 Comments', '1 Comment', '% Comments');?>
			</span>

			<h3 class="journal-content">
				<a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>"><?php the_title();?></a>
			</h3>
			
			<span class="read-entry">
			<a href="<?php the_permalink();?>">Read Entry</a>
			</span>

			</div>
		<?php endforeach;
		wp_reset_postdata();?>







<?php get_footer();?>
