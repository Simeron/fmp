<?php
/**
 * Template Name: Product Profile
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

    <?php while ( have_posts() ) : the_post(); ?>

    <div class="row">
      <div class="one-half column profile" style="margin-top: 5%"> <!-- use to be 25% -->
        <?php the_post_thumbnail( 'medium' ); ?>
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/no7-primer.jpeg"> -->
      </div>

      <div class="one-half column profile" style="margin-top: 5%"> <!-- use to be 25% -->
        <h5> <?php the_title(); ?> <!-- No.7 Air Brush Away Primer --> </h5>
        <div><?php the_content(); ?></div>
        <!-- <p>Primer - This is a product which can be used as a base for makeup. Or you can also wear it alone, to hide pores and leave you skins with a soft velvety finish. Perfect for all skin types, from dry to oily, and also doesn't block pores. This primer inparticular also has skin care properties, so will also help with fine lines, creases and wrinkes.</p> -->
        
        <strong><?php the_field('size'); ?> <!-- 30mls --></strong>
        <br>
        <strong><?php the_field('price_range'); ?> <!-- £16.50 - £20.00 --></strong>
      
      </div>
    </div> 


    <?php endwhile; ?>

    

    <hr>


    <div class="row">
      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <h5>Customer Reviews</h5>
        <hr>
      </div>

      <div class="one-half column " style="margin-top: 5%"> <!-- use to be 25% -->
        <h5>Expert Reviews</h5>
        <hr>
      </div>

    </div> 

    


    <!-- <div class="row"> -->
      <!-- <div class="two columns" style="margin-top: 5%"> <!-- use to be 25% -->
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/benefit-mascara-theyre-real.jpg"> -->
    
      <!-- </div> -->

      <div class="twelve columns text" style="margin-top: 5%"> <!-- use to be 25% -->
         <!-- <h6><strong>There real mascara</strong></h6> -->
        <!-- <p>I just wanted to write this review about this product, which is the Benefit they're real mascara. It has a really nice wand a and the mascara itself lasts a long time, it is also quite a stubborn to take off as well, when though it's not waterproof. </p> -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <h6><?php the_title(); ?></h6>
        <?php wp_list_cats('sort_column'); ?>
    <?php the_post_thumbnail('thumbnail'); ?>
    <?php the_excerpt(); ?>
<?php endwhile; else: ?>
    <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
<?php endif; ?>

  


    <!-- <div class="row"> -->
      <!-- <div class="two columns" style="margin-top: 5%"> <!-- use to be 25% --> 
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/benefit-mascara-theyre-real.jpg"> -->
      <!-- </div> -->

      <div class="twelve columns text" style="margin-top: 5%"> <!-- use to be 25% -->
        <!-- <h6><strong>There real mascara</strong></h6> -->
        <!-- <p>I just wanted to write this review about this product, which is the Benefit they're real mascara. It has a really nice wand a and the mascara itself lasts a long time, it is also quite a stubborn to take off as well, when though it's not waterproof. </p> -->
      
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
        <h6><?php the_title(); ?></h6>
    <?php the_post_thumbnail('thumbnail'); ?>
    <?php the_excerpt(); ?>
<?php endwhile; else: ?>
    <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
<?php endif; ?> 
      </div>
    </div> 

    <br>

  </div> 

 </div>
</div> 

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>