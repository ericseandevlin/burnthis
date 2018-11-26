<?php
/*
* Template Name: Front Page
* Template Post Type: page
*/
 ?>

<?php get_header(); ?>

  <div class="push-footer">
    <div class="main-wrapper">
      <div class="header-wrapper">
    <?php if ( have_rows( 'hero_image' ) ) : ?>
         <?php
         while ( have_rows( 'hero_image' ) ) : the_row();
           $desktop = get_sub_field( 'hero_desktop' );
           $mobile = get_sub_field( 'hero_mobile', false, false );
          ?>

        <img src="<?= $desktop ?>" alt="" class="hero-desktop">
        <img src="<?= $mobile ?>" alt="" class="hero-mobile">

      <?php endwhile; endif; ?>
      </div>


      <div class="content-wrapper">
        <div class="main-content">
      <?php if ( have_rows( 'preview_lines' ) ) : ?>
          <div class="preview-wrapper">
             <?php
             while ( have_rows( 'preview_lines' ) ) : the_row();
                    $preview = get_sub_field( 'preview_line' );
            ?>
            <p class="preview-line"><?= $preview ?></p>
        <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if ( have_rows( 'presale_lines' ) ) : ?>
          <div class="presale-wrapper">
         <?php
         while ( have_rows( 'presale_lines' ) ) : the_row();
                $presale = get_sub_field( 'presale_line' );
        ?>
            <p class="presale-line"><?= $presale ?></p>
        <?php endwhile; ?>
          </div>
        <?php endif; ?>

          <div class="signup-wrapper">
            <div class="form-wrapper w-form">
            	<?php
        				include(locate_template('partials/signup.php'));
        		 ?>
            </div>
          </div>
      <?php if ( have_rows( 'theater_info' ) ) : ?>
          <div class="theater-wrapper">
          <?php
          while ( have_rows( 'theater_info' ) ) : the_row();
                 $name = get_sub_field( 'theater_name' );
                 $link = get_sub_field( 'theater_link' );
                 $address = get_sub_field( 'theater_address' );
          ?>
            <p class="theater-line">
            <a href="<?= $link ?>" target="_blank" class="link link-2"><span class="bold text-span-2"><?= $name ?></span></a> <?= $address ?></p>
        <?php endwhile; ?>
          </div>
      <?php endif; ?>
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
