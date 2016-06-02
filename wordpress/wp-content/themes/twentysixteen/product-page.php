<?php
/**
 * Template Name: Product page
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
         <p><a href="<?php echo home_url(); ?>/product-filter-face-cream">prep and prime</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/face-cream.jpg">
      </div>

       <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
         <p><a href="<?php echo home_url(); ?>/product-filter-primer">Primers</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/primer-benefit.png">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product-filter-concealer">Concealer</a></p>
       <img src="<?php echo get_template_directory_uri(); ?>/images/concealer-types.jpg">
      </div>

      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product-filter">Foundation</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/foundation.jpg">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product-filter-correctors">Correctors</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/corrector3.jpg">
      </div>

      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product-filter-lipstick">Lipstick</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/lipstick-swatch.jpg">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product-filter-eyes">Eyes</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/eyeshadow.jpg">
      </div>

      <div class="one-half column big" style="margin-top: 5%"> <!-- use to be 25% -->
        <p><a href="<?php echo home_url(); ?>/product-filter-mascara">Mascara</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/mascaras-wands.jpg">
      </div>
    </div> 

    <br>

  </div> 

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>