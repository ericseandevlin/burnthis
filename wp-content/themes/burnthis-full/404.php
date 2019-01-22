<?php
/*
* Template Name: 404 Page
* Template Post Type: page
*/
 ?>
 <?php get_header(); ?>

 <div class="main-content">
   <div class="container w-container">
    <div class="_404-wrapper">
         <h1 class="heading">404</h1>

         <div class="_404-content">THE PAGE YOU ARE LOOKING FOR DOESN&#x27;T EXIST OR HAS BEEN MOVED.</div>

         <a href="<?= home_url(); ?>">RETURN HOME</a>
      </div>
   </div>
 </div>

 <?php get_footer(); ?>
