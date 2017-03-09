<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BonnJoel
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container" id="contact">
			<div class="row">
				<div class="col-sm-2">
					<div class="footer-logo">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-logo.png" alt="">
					</div>					
				</div>
				<div class="col-sm-5">
					<div class="footer-widget-1">
						<h3>Get in touch</h3>
						<p>Email:<br>
						info@ambitapp.com</p> 
					</div>
				</div>
				<div class="col-sm-5">
					<div class="footer-widget-2">
						<ul class="list-inline list-unstyled footer-social">
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="" class="fa fa-facebook-official"></a></li>
							<li><a href="" class="fa fa-instagram"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="site-info">
				<p>© 2016 Ambit. All rights reserved. Ambit is a trademark of Ambit Technologies Ltd </p>
			</div><!-- .site-info -->
		</div>		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
