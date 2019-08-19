<?php

/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-footer-container">
		<div class="site-footer-contact-info">
			<div class="contact">
				<h3>Contact Info</h3>
				<p>
					<i class="fa fa-envelope"></i>
					<a href="mailto:adham_elnewihy@gmail.com">info@inhabitent.com</a>
				</p>
				<p>
					<i class="fa fa-phone"></i>
					<a href="">733-013-1313</a>
				</p>
				<p>
					<span><i class="fab fa-facebook-square"></i></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
				</p>
			</div>
		</div>
		<div class="site-footer-business-hours">
			<h3>Business Hours</h3>
			<p><span class="day-of-week">Monday-Friday:</span>&nbsp 9am to 5pm</p>
			<p><span class="day-of-week">Saturday:</span>&nbsp 10am to 2pm</p>
			<p><span class="day-of-week">Sunday:</span>&nbsp Closed</p>
		</div>
		<div class="site-footer-logo-container">
			<div class="site-footer-logo">
				<a href="http://localhost:3000/inhabitent/home" rel="home">
					<img class="site-footer-logo-image" src="/inhabitent/wp-content/themes/inhabitent/images/logos/inhabitent-logo-text.svg" alt="Inhabitent logo with text">
				</a>
			</div>
		</div>

		<div class="site-footer-info">
			<a href="<?php echo esc_url('https://redacademy.com/'); ?>"><?php printf(esc_html('COPYRIGHT &copy; 2019 %s'), 'INHABITENT'); ?></a>
		</div><!-- .site-info -->
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>