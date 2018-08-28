<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

	</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<section class="company-info">

				<div class="site-info">

					<h3>contact info</h3>

					<p> 
						<a href="mailto:info@inhabitent.com">
						<i class="fa fa-envelope"></i>
							info@inhabitent.com 
						</a> 
					</p>

					<p><i class="fa fa-phone"></i>778-456-7891</p>

					<div class="social-media-icons">
						<i class="fab fa-facebook-square"></i>
						<i class="fab fa-twitter-square"></i>
						<i class="fab fa-google-plus-square"></i>
					</div>

				</div><!-- .site-info -->

				<div class="business-hours">
					<h3>business hours</h3>
					<p><b>Monday-Friday:</b> 9am to 5pm</p>
					<p><b>Saturday:</b> 10am to 12pm</p>
					<p><b>Sunday:</b> Closed</p>
				</div>

				<div class="footer-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/inhabitent-logo-text.svg">
				</div>

			</section> <!-- end of .company-info -->
		
			<div class="copyright">
				<?php $current_year = date("Y");
				echo ('copyright ' . '&copy; ' . $current_year . ' inhabitent');?>
			</div>

		</footer><!-- #colophon -->
	
	</div><!-- #page -->

		<?php wp_footer();?>


	</body>
</html>
