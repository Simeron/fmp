<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span> |
				<a href="#">Made by Simeron</a> |
				<a href="<?php echo home_url(); ?>/terms-and-conditions">T&C's</a>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>

	<!--  LOAD JS SCRIPTS HERE -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

	<?php 

		// echo ('is_front_page()? ' . is_front_page());
		if (is_front_page()): 

	?>
	
	<script>
	$(document).ready(function()
	{

	  	var bgImageArray = ["/images/home/eyeshadow.jpg", "/images/home/lipstick.jpg", "/images/home/foundation5.jpg", "/images/home/MakeupBrushes.jpg"],
	  		baseURL = "<?php echo get_template_directory_uri(); ?>",
	  		secs = 4;

	  	bgImageArray.forEach(function(img)
	  	{
	      	new Image().src = baseURL + img; 
	      	// caches images, avoiding white flash between background replacements
	  	});

		function backgroundSequence() 
		{
			window.clearTimeout();
			var k = 0;
			for (i = 0; i < bgImageArray.length; i++) 
			{
			  setTimeout(function()
			  { 
			    document.documentElement.style.backgroundImage = "url(" + baseURL + bgImageArray[k] + ")";        
			    if ((k + 1) === bgImageArray.length) 
			    { 
			      setTimeout(function() { backgroundSequence() }, (secs * 1000))
			    } 
			    else  k++;      
			  }, (secs * 1000) * i) 
			}
		}
		backgroundSequence();

	});
	</script>
	<?php endif; ?>


</body>
</html>
