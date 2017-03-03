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
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bonnjoel' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'bonnjoel' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'bonnjoel' ), 'bonnjoel', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<nav id="mobile-menu" class="mobile-menu" role="navigation">
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
</nav><!-- #site-navigation -->

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(function() {
			FastClick.attach(document.body);
		});

		$("#mobile-menu").mmenu({
			"extensions": [
			"pagedim-black",
			"theme-dark"
			],		
			"navbar": {
				"add": false
			},
			"navbars": [		
			{
				"position": "top"
				
			},
			{
				"position": "bottom",
				"content": [				
				"<a class='fa fa-facebook' href='#/' title='Follow Our Facebook'></a>",
				"<a class='fa fa-twitter' href='#/' title='Follow Our Twitter'></a>",			
				"<a class='fa fa-instagram' href='#/' title='Follow Our Instagram'></a>"
				]
			}
			]
		});

		var API = $("#mobile-menu").data( "mmenu" );

		$(".menu-toggle").click(function() {
			API.open();
			$('.mm-panels>.mm-panel').niceScroll({
				zindex : 999999,
				cursorwidth : 10,
				cursorborder : "1px solid #000",
				cursoropacitymax : .7,
				cursorminheight: 5
			});	
		});
	});
</script>

<?php wp_footer(); ?>

</body>
</html>
