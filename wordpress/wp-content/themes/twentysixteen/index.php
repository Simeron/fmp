<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<div class="row">
      <div class="twelve columns" style="margin-top: 15%"> <!-- use to be 25% -->
        <form action="demo_form.asp">
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
        <h6><button type="button" onclick="alert('get inspired')">Get inspired</h6>
      </div>
    </div>


			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
