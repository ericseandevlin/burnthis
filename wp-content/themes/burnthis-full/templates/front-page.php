<?php
/*
* Template Name: Front Page
* Template Post Type: page
*/
 ?>

<?php get_header(); ?>

  <div class="push-footer">
    <div class="main-wrapper">

    </div>
    <div class="footer-wrapper">
      <div class="social-wrapper"><a href="<?php the_field('facebook_link', 'option') ?>" class="social-link w-inline-block" target="_blank"><img src="<?= get_template_directory_uri(); ?>/_images/icon_fb.svg" height="35" alt="Burn This Broadway Facebook" width="34.5" class="fb-img"></a>

      <a href="<?php the_field('twitter_link', 'option') ?>" class="social-link w-inline-block" target="_blank"><img src="<?= get_template_directory_uri(); ?>/_images/icon_tw.svg" height="28" alt="Burn This Broadway Twitter" width="91" class="twitter-img"></a>


      <a href="<?php the_field('instagram_link', 'option') ?>" class="social-link w-inline-block" target="_blank"><img src="<?= get_template_directory_uri(); ?>/_images/icon_ig.svg" height="35" alt="Burn This Broadway Instagram" width="75" class="insta-img"></a>


</div>
 <div class="privacy-link"><a href="privacy" class="link-3">Privacy policy</a></div>
      <div class="amex-wrapper"><img src="<?= get_template_directory_uri(); ?>/_images/amex_lockup.png" width="175" alt="American Express Proud Partner of Burn This" class="amex-img"></div>
    </div>
  </div>

<?php get_footer(); ?>
