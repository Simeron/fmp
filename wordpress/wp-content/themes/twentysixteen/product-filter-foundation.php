<?php
/**
 * Template Name: Product filter
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
        <p>Mac studio fix fluid</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/foundation/MACStudioFixFluid.jpg">
      </div>

       <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Rimmel stay matte foundation</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/foundation/rimmel-stay-matte-foundation.jpg">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Maybelline fit me foundation</p>
       <img src="<?php echo get_template_directory_uri(); ?>/images/foundation/maybelline-fit-me.jpg">
      </div>

      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p>L'oreal true match foundation</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/foundation/true-match.jpeg">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Nars sheer glow</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/foundation/nars-sheer-glow.jpg">
      </div>

      <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Bobbi brown foundation stick</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/foundation/bobbie-brown-foundation-stick.jpg">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Charlotte tilbury magic foundation</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/foundation/ct-magic-foundation.jpg">
      </div>

      <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Estee lauder double wear foundation</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/foundation/double-wear.jpg">
      </div>
    </div> 

    <br>

  </div> 

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>