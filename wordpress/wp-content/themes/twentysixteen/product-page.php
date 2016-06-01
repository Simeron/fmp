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
      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p>prep and prime</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/MAC-main-banner-PrepPrime.jpg">
      </div>

       <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Pimers</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/MAC-main-banner-PrepPrime.jpg">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Concealer</p>
       <img src="<?php echo get_template_directory_uri(); ?>/images/MAC-main-banner-PrepPrime.jpg">
      </div>

      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Foundation</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/MAC-main-banner-PrepPrime.jpg">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Correctors</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/MAC-main-banner-PrepPrime.jpg">
      </div>

      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Lipstick</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/MAC-main-banner-PrepPrime.jpg">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Eyes</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/MAC-main-banner-PrepPrime.jpg">
      </div>

      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <p>Mascara</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/MAC-main-banner-PrepPrime.jpg">
      </div>
    </div> 

    <br>

  </div> 

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>