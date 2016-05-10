<?php get_header(); ?>

<?php get_sidebar(); ?>

 <div class="container">

 	<?php if (have_posts()) : ?>
 	<?php while (have_posts()) : the_post(); ?>

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


  </div>
</div>

<?php get_footer(); ?>

<!-- from the example I am working from I don't think I need this much stuff as I only have three options on the page so I don't need anything else coming though  -->