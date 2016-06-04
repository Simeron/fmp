<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css">

	<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<!-- <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a> -->

		<div class="row">
	      <div class="twelve columns">
	      	<a href="<?php echo home_url(); ?>/home">
	        <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/retouch-reviews-logo-final.png" width="221">
	        </a>
	        <nav>
	          <ul>
	            <li>
	            	<form id="search">
						<input type="search" placeholder="Search">
					</form>
				</li>

				<li><a href="<?php echo home_url(); ?>/product">PRODUCT</a></li>

	           	<?php if ( is_user_logged_in() ) : ?>

	            	<li><a href="<?php echo home_url(); ?>/profile">PROFILE</a></li>
	          	<?php else: ?>

	            	<li><a href="<?php echo home_url(); ?>/login">LOGIN</a></li>
	            	<li><a href="<?php echo home_url(); ?>/sign up">SIGN UP</a></li>

	           	<?php endif; ?>

	            
	            <!-- <li><a href="<?php echo home_url(); ?>">HOME</a></li> -->
	          </ul>
	        </nav>
	      </div>
	  </div>

		<div id="content" class="site-content">

