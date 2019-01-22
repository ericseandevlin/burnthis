<?php
/*
* Template Name: Privacy Page
* Template Post Type: page
*/
 ?>

<?php get_header(); ?>

<div class="main-content">

    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

      <h1 class="privacy-title"><?php the_title(); ?></h1>
<div class="privacy-wrapper">
      <?php the_content(); ?>
</div>

    <?php endwhile; endif; ?>


</div>

<?php get_footer(); ?>
