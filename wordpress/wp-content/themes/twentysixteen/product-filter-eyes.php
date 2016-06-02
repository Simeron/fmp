<?php
/**
 * Template Name: Product filter eyes
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
        <p>Barrym gel liner</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/eyes/barrym-gel-liner.jpg">
      </div>

       <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Bobbi Brown ink liner</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/eyes/bobbi-brown-ink-liner.jpg">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Urban Decay Naked3 Eyeshadow Palette</p>
       <img src="<?php echo get_template_directory_uri(); ?>/images/eyes/Naked3-Eyeshadow-Palette.jpg">
      </div>

      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p>NYX eye primer</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/eyes/nyx-eye-primer.jpg">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Revlon PhotoReady Eye Primer Brightner</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/eyes/revlon-PhotoReady_Eye_Primer_Brightner.png">
      </div>

      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Urban Decay eye primer</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/eyes/urban-decay-eye-primer.jpg">
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