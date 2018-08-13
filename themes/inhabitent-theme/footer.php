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
				<h3>CONTACT INFO</h3>
			<p>
				<a href="#">info@inhabitent.com</a>
			</p>
			<p>778-456-7891</p>

			</div><!-- .site-info -->

			<div class="business-hours">
			<h3>BUSINESS HOURS</h3>
			<p><b>Monday-Friday:</b> 9am to 5pm</p>
			<p><b>Saturday:</b> 10am to 12pm</p>
			<p><b>Sunday:</b> Closed</p>
		</div>
		<div class="footer-logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/inhabitent-logo-text.svg">
		</div>

		</section>

		<div class="copyright">
		<?php $current_year = date("Y");
		echo ('copyright ' . '&copy; ' . $current_year . ' inhabitent');?>
	</div>

		</footer><!-- #colophon -->
	</div><!-- #page -->

		<?php wp_footer();?>

	</body>
</html>
