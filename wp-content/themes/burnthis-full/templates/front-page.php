<?php
/*
* Template Name: Front Page
* Template Post Type: page
*/
 ?>

<?php get_header(); ?>
    <div id="home" class="header-section">
      <div class="w-embed"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 100 100" preserveaspectratio="none" style=" position: absolute;
      bottom: 0;
      width: 100%;
      height: 10vw;">
      <polygon fill="#000000" points="0 100,0 0,100 100,0 100">
      </polygon></svg>
      </div>
    </div>

    <?php include(locate_template('partials/section-about.php')); ?>

      <div class="image-section-1" style="background-image: url('<?php the_field('image_section_1'); ?>');">
      <div class="html-embed w-embed"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 100 100" preserveaspectratio="none" style=" position: absolute;
      top: 0;
      width: 100%;
      height: 10vw;">
      <polygon fill="#000000" points="0 0, 0 0, 100 0 ,100 100">
      </polygon></svg></div>
      <div class="w-embed"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 100 100" preserveaspectratio="none" style=" position: absolute;
      bottom: 0;
      width: 100%;
      height: 10vw;">
      <polygon fill="#000000" points="0 100,0 0,100 100,0 100">
      </polygon></svg></div>
      </div>

    <?php include(locate_template('partials/section-tickets.php')); ?>

      <div class="image-section-2" style="background-image: url('<?php the_field('image_section_2'); ?>');">
      <div class="html-embed w-embed"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 100 100" preserveaspectratio="none" style=" position: absolute;
      top: 0;
      width: 100%;
      height: 10vw;">
      <polygon fill="#000000" points="0 0, 0 0, 100 0 ,100 100">
      </polygon></svg></div>
      <div class="w-embed"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 100 100" preserveaspectratio="none" style=" position: absolute;
      bottom: 0;
      width: 100%;
      height: 10vw;">
      <polygon fill="#000000" points="0 100,0 0,100 100,0 100">
      </polygon></svg></div>
      </div>

    <?php include(locate_template('partials/section-cast.php')); ?>

      <div class="image-section-3" style="background-image: url('<?php the_field('image_section_3'); ?>');">
      <div class="html-embed w-embed"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 100 100" preserveaspectratio="none" style=" position: absolute;
      top: 0;
      width: 100%;
      height: 10vw;">
      <polygon fill="#000000" points="0 0, 0 0, 100 0 ,100 100">
      </polygon></svg></div>
      <div class="w-embed"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 100 100" preserveaspectratio="none" style=" position: absolute;
      bottom: 0;
      width: 100%;
      height: 10vw;">
      <polygon fill="#dca826" points="0 100,0 0,100 100,0 100">
      </polygon></svg></div>
      </div>

    <?php include(locate_template('partials/section-news.php')); ?>

      <div class="blank-section section-8">
      <div class="html-embed w-embed"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 100 100" preserveaspectratio="none" style=" position: absolute;
      top: 0;
      width: 100%;
      height: 10vw;">
      <polygon fill="#dca826" points="0 0, 0 0, 100 0 ,100 100">
      </polygon></svg></div>
      <div class="w-embed"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 100 100" preserveaspectratio="none" style=" position: absolute;
      bottom: 0;
      width: 100%;
      height: 10vw;">
      <polygon fill="#000000" points="0 100,0 0,100 100,0 100">
      </polygon></svg></div>
      </div>

    <?php include(locate_template('partials/section-faq.php')); ?>

<?php get_footer(); ?>
