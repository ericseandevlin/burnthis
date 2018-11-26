<?php
/*
* Template Name: Front Page
* Template Post Type: page
*/
 ?>

<?php get_header(); ?>

  <div class="push-footer">
    <div class="main-wrapper">
      <div class="header-wrapper"><img src="<?= get_template_directory_uri(); ?>/_images/burnthis_hero_image_desktop_zoom.jpg" alt="" class="hero-desktop"><img src="<?= get_template_directory_uri(); ?>/_images/burnthis_hero_image_mobile.jpg" alt="" class="hero-mobile"></div>
      <div class="content-wrapper">
        <div class="main-content">
          <div class="preview-wrapper">
            <p class="preview-line"><span class="pre-bold">PREVIEWS BEGIN</span> MARCH 15, 2019</p>
            <p class="preview-line"><span class="pre-bold">OPENS</span> APRIL 15, 2019</p>
          </div>
          <div class="presale-wrapper">
            <p class="presale-line"><span class="bold text-span">american express presale<br></span>nov 28 10:00 am - nov 30 9:59 am</p>
            <p class="presale-line"><span class="bold text-span">AUDIENCE REWARDS PRESALE<br>‍</span>nov 30 10:00 am - dec 2 9:59 am</p>
            <p class="presale-line"><span class="bold text-span">General Onsale<br></span>dec 2 10:00 am</p>
          </div>
          <div class="signup-wrapper">
            <div class="form-wrapper w-form">
            	<?php
        				include(locate_template('partials/signup.php'));
        		 ?>
            </div>
          </div>
          <div class="theater-wrapper">
            <p class="theater-line"><a href="https://goo.gl/maps/fsF2jfZkZbk" target="_blank" class="link link-2"><span class="bold text-span-2">HUDSON THEATRE</span></a> 141 W 44TH ST, NEW YORK, NY 10036</p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-wrapper">
      <div class="social-wrapper"><a href="<?php the_field('facebook_link', 'option') ?>" class="social-link w-inline-block"><img src="<?= get_template_directory_uri(); ?>/_images/icon_fb.svg" height="35" alt="Burn This Broadway Facebook" width="34.5" class="fb-img"></a>

      <a href="<?php the_field('twitter_link', 'option') ?>" class="social-link w-inline-block"><img src="<?= get_template_directory_uri(); ?>/_images/icon_tw.svg" height="28" alt="Burn This Broadway Twitter" width="91" class="twitter-img"></a>


      <a href="<?php the_field('instagram_link', 'option') ?>" class="social-link w-inline-block"><img src="<?= get_template_directory_uri(); ?>/_images/icon_ig.svg" height="35" alt="Burn This Broadway Instagram" width="75" class="insta-img"></a>


</div>
      <div class="amex-wrapper"><img src="<?= get_template_directory_uri(); ?>/_images/amex_lockup.png" width="175" alt="American Express Proud Partner of Burn This" class="amex-img"></div>
    </div>
  </div>

<?php get_footer(); ?>
