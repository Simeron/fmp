<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main" style="margin-top: 7%;">

	<div class="container">
		<div class="row">
	      <div class="twelve columns"> <!-- use to be 25% -->
	        <form action="demo_form.asp">
	        	<p>Search for a beauty product</p>
	        <h6><input type="text" name="fname" Placeholder="Search for a beauty product"></h6>
	      </div>
	    </div>  <!-- <button type="button" onclick="alert('Hello world!')">Click Me!</button> This is where I got the button code from http://www.w3schools.com/tags/tag_button.asp -->

	    <div class="row">
	      <div class="twelve columns" style="margin-top: 5%"> <!-- use to be 25% -->
	        <h6><button type="button" onclick="alert('get inspired')">Review a beauty product</h6>
	      </div>
	    </div>

	    <div class="row">
	      <div class="twelve columns" style="margin-top: 5%"> <!-- use to be 25% -->
	        <h6><button type="button"><a href="<?php echo home_url(); ?>/Get inspired">Get inspired</a></h6>
	        <!-- <h6><button type="button" onclick="alert('get inspired')">Get inspired</h6> -->
	      </div>
	    </div>
	</div>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>