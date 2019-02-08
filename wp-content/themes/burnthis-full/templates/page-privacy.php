<?php
/*
* Template Name: Privacy Page
* Template Post Type: page
*/
 ?>

<?php get_header(); ?>
    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>


      <div class="privacy">
        <div class="main-container w-container">
          <div class="privacy-list">
            <h1 class="section-title-2"><?php the_title(); ?></h1>
            <br>
            <?php the_content(); ?>
          </div>
        </div>
      </div>

    <?php endwhile; endif; ?>
<?php get_footer(); ?>
