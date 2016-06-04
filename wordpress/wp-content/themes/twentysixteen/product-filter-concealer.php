<?php
/**
 * Template Name: Product filter concealer
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
        <p><a href="<?php echo home_url(); ?>/product/bobbi-brown-creamy-concealer-kit/">Bobbi Brown concealer</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/concealer/bobbi-concealer.jpg">
      </div>

       <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/mac-cosmetics-studio-finish-concealer/">Mac cosmetics studio finish concealer</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/concealer/mac-concealer.jpg">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/urban-decay-naked-skin-weightless-complete-coverage-concealer/">Urban decay naked skin weightless complete coverage concealer</a></p>
       <img src="<?php echo get_template_directory_uri(); ?>/images/concealer/naked.jpg">
      </div>

      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/nars-cosmetics-radiant-creamy-concealer/">Nars cosmetics radiant creamy concealer</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/concealer/nars-concealer.jpg">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/charlotte-tilbury-the-retoucher-conceal/">Charlotte-tilbury-the-retoucher-conceal</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/concealer/tilbury-concealer.jpg">
      </div>

      <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product/yves-saint-laurent-radiance-concealer/"> YVES saint laurent radiance concealer</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/concealer/ysl-concealer.jpg">
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