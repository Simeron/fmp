<?php
/**
 * Template Name: Product filter lipstick
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

<!-- 		go into the skeleton css and copy over any CSS in relation to the container tag, that might be why everything is so big and stretches to each side of the page.  -->
		
   <div class="container">
    <div class="row">
      <div class="twelve columns">
        <p>Explore the product category of your choice</p>
      </div> 
    </div> 
    
    <div class="row">
      <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/rimmel-lasting-finish-lipstick/">Rimmel Lasting Finish Lipstick</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/rimmell-lipstick.jpg">
      </div>

       <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/bobbi-brown-creamy-matte-lip-color/">Bobbi Brown Creamy Matte Lip Color</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/lipstick/bobbi-brown-matte-lipstick.jpg">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/burberry-lip-velvet-military/">Burberry LIP VELVET MILITARY</a></p>
       <img src="<?php echo get_template_directory_uri(); ?>/images/lipstick/burberry-velvet.jpg">
      </div>

      <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/max-factor-colour-effect-flipstick/">Max Factor Colour Effect Flipstick</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/lipstick/max-factor-flipstick.jpg">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/shiseido-lacquer-rouge-lipstick-sunburn/">Shiseido Lacquer Rouge Lipstick, Sunburn</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/lipstick/shiseido-rouge.jpg">
      </div>

      <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/topshop-lipstick/">Topshop lipstick</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/lipstick/topshop-lipstick.jpg">
      </div>
    </div> 


    <!-- <div class="row"> -->
      <!-- <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% --> 
        <!-- <p>YSL concealer</p> -->
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/concealer/ysl-concealer.jpg"> -->
      <!-- </div> -->

      <!-- <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% --> 
        <!-- <p>Estee lauder double wear foundation</p> -->
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/concealer/double-wear.jpg"> -->
      <!-- </div> -->
    <!-- </div>  -->

    <br>

  </div> 

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>