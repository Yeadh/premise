<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package premise
 */

?>
<!-- Start Footer -->
	<footer class="footer-area text-center">
		<div class="container">
			<div class="footer-social-area wow animated slideInUp">
				<ul>
					<?php premise_social_share(); ?>
				</ul>
			</div><!-- .footer-social-area -->
			<div class="copyright wow animated slideInUp">
				<p><?php footer_text_copyright(); ?></p>
			</div><!-- .copyright -->
			<a href="#" id="scroll-to-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
		</div><!-- .container -->
	</footer>
	<!-- End Footer -->
	<!-- Scripts -->
	<?php wp_footer(); ?>
</body>
</html>