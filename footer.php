<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
		</div>
	</div>
	<!-- #content -->

	<footer class="site-footer" role="contentinfo">
		<div class="site-footer__info">
			<div class="container">
				<div class="site-footer__nav">
					<?php wp_page_menu(); ?>
				</div>
				<div class="site-footer__address">
					<address>
						<strong>Twitter, Inc.</strong><br>
						1355 Market Street, Suite 900<br>
						San Francisco, CA 94103<br>
						<abbr title="Phone">P:</abbr> (123) 456-7890
					</address>
					<address>
						<strong>Full Name</strong><br>
						<a href="mailto:#">first.last@example.com</a>
					</address>
				</div>
			</div>
		</div>
		<div class="site-footer__map" id="footerMap"></div>
		<div class="site-footer__copy">
			<div class="container">
				© 2016 Lorem. All rights reserved.
			</div>
		</div>
		<button class="scrollup"></button>
	</footer>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
	<?php wp_footer(); ?>
	</body>

</html>
