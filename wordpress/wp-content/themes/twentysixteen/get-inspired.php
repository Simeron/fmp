<?php
/**
 * Template Name: Get Inspired
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<div class="container">
    <div class="row">
      <div class="twelve columns">
        <p>Pick a product which inspires you</p>
      </div> 
    </div> 
    
    <div class="row">
      <div class="five columns" style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/maybelline-push-up-drama-mascara-very-black/">Maybelline Push Up Drama Mascara Very Black</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/maybelline-push-up.jpg" width="100%";>
      </div>

       <div class="seven columns" style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/sleek-makeup-face-contour-kit/">Sleek makeup face contour kit</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/sleek-contour-kit.jpg" width="100%">
      </div>
    </div> 

    <div class="row">
      <div class="seven columns"style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/urban-decay-naked3-eyeshadow-palette/">Urban Decay Naked3 Eyeshadow Palette</a></p>
       <img src="<?php echo get_template_directory_uri(); ?>/images/naked-urban-decay.jpg" width="100%">
      </div>

      <div class="five columns" style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/rimmel-lasting-finish-lipstick/">Rimmel Lasting Finish Lipstick</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/rimmell-lipstick.jpg" width="100%">
      </div>
    </div> 

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>