<?php
/**
 * Template Name: Signup
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

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>

		</article>

		<?php endwhile; ?>


		</div> 

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>