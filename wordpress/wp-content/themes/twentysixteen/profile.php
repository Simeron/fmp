<?php
/**
 * Template Name: Profile
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

    <?php if ( is_user_logged_in() ) : ?>
              
    <div class="row">
      <div class="one-half column profile" style="margin-top: 5%"> <!-- use to be 25% -->
       <img src="<?php echo get_template_directory_uri(); ?>/images/persona.png">

        <form action="upload.php" method="post" enctype="multipart/form-data">
          <input type="file" name="fileToUpload" id="fileToUpload">
          <input type="submit" value="Upload Image" name="submit">
        </form>
      </div>

      <div class="one-half column profile" style="margin-top: 5%"> <!-- use to be 25% -->
        <p>JANE <br> 25, normal skin <br> yellow undertones <br> 15 reviews</p>
      </div>
    </div> 

    <hr>


    <div class="row">
      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <h5>Your Reviews</h5>
        <hr>
      </div>
    </div> 


    <div class="row">
      <div class="one-half column text" style="margin-top: 5%"> <!-- use to be 25% -->
        <h6><strong>There real mascara</strong></h6>
        <p>I just wanted to write this review about this product, which is the Benefit they're real mascara. It has a really nice wand a and the mascara itself lasts a long time, it is also quite a stubborn to take off as well, when though it's not waterproof. </p>
    
      </div>

      <div class="one-half column image" style="margin-top: 5%"> <!-- use to be 25% -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/benefit-mascara-theyre-real.jpg">
      </div>
    </div> 


    <div class="row">
      <div class="one-half column text" style="margin-top: 5%"> <!-- use to be 25% -->
        <h6><strong>Sleek Contour Kit</strong></h6>
        <p>I just wanted to write this review about this product, which is the Benefit they're real mascara. It has a really nice wand a and the mascara itself lasts a long time, it is also quite a stubborn to take off as well, when though it's not waterproof. </p>
    
      </div>

      <div class="one-half column image" style="margin-top: 5%"> <!-- use to be 25% -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/sleek-contour-kit.jpg">
      </div>
    </div> 

    <br>

    <a href="<?php echo home_url(); ?>/?a=logout" class="btn logout">Log out</a>

    <?php else: ?>

    <p>You need to be logged in to view this page.</p>

    <a href="<?php echo home_url(); ?>/login">LOGIN</a>
    <a href="<?php echo home_url(); ?>/sign up">SIGN UP</a>

    <?php endif; ?>

  </div> 


	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>