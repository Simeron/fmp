<?php
/**
 * Template Name: Product filter correctors
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
        <p><a href="<?php echo home_url(); ?>/product/bobbi-brown-creamy-corrector/">Bobbi Brown Creamy Corrector</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/correctors/bobbi-brown-corrector.jpg">
      </div>

       <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/m·a·c-prep-prime-highlighter/">M·A·C Prep & Prime Highlighter</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/correctors/mac-Highlighter.jpg">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/maxfactor-correctors/">Maxfactor Correctors</a></p>
       <img src="<?php echo get_template_directory_uri(); ?>/images/correctors/max-factor-corrector.jpg">
      </div>

      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/maybelline-eraser-eye-concealer/">Maybelline Eraser Eye Concealer</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/correctors/Maybelline_Eraser_Eye_Concealer.jpg">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/nyx-3c-palette-conceal-correct-contour/">NYX 3c palette conceal correct contour</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/correctors/nyx-colour-corrector.jpg">
      </div>

      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/smashbox-colour-corrector-primer/">Smashbox Colour Corrector Primer</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/correctors/smashbox-purple-corrector.jpg">
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