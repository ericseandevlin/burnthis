<?php
/*
* Template Name: 404 Page
* Template Post Type: page
*/
 ?>
 <?php get_header(); ?>

 <div class="main-content">
   <div class="container w-container">
         <h1 class="_404-head">404</h1>

         <div class="_404-text">THE PAGE YOU ARE LOOKING FOR DOESN&#x27;T EXIST OR HAS BEEN MOVED.</div>

         <a href="<?= home_url(); ?>" class="footer-link">RETURN HOME</a>

   </div>
 </div>

 <?php get_footer(); ?>
