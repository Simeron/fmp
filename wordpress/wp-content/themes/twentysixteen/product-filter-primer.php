<?php
/**
 * Template Name: Product filter primer
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
      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Chanel primer</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/primer/chanel-primer.jpg">
      </div>

       <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Laura Mercier primer</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/primer/laura-mercier.jpg">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Urban decay primer</p>
       <img src="<?php echo get_template_directory_uri(); ?>/images/primer/urban-decay-primer.jpg">
      </div>

      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p>YSL primer</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/primer/ysl-primer.jpg">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Smashbox primer</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/primer/smashbox-primer.jpg">
      </div>

      <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Mac primer</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/primer/mac-primer.jpg">
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