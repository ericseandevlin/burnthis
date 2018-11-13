<?php
/*
* Template Name: Privacy Page
* Template Post Type: page
*/
 ?>

<?php get_header(); ?>

<div class="main-content">
  <div class="container w-container">

    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

      <h1 class="privacy-title"><?php the_title(); ?></h1>
      <?php the_content(); ?>

    <?php endwhile; endif; ?>

  </div>

</div>

<?php get_footer(); ?>
