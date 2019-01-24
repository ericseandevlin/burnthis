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
           $mobile = get_sub_field( 'hero_mobile');
          ?>

        <img src="<?= $desktop ?>" alt="" class="hero-desktop">
        <img src="<?= $mobile ?>" alt="" class="hero-mobile">

      <?php endwhile; endif; ?>
      </div>


      <div class="content-wrapper">
        <div class="main-content">

          <p class="limited-line"><?php the_field( 'limited_line' ); ?></p>

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
                $amex = get_sub_field( 'amex_presale' );
                $aud = get_sub_field( 'aud_rewards' );
                $gensale = get_sub_field( 'gen_sale' );
        ?>
            <p class="presale-line"><?= $amex ?></p>

          <?php if ( have_rows( 'tickets_button' ) ) : ?>
                <div class="tickets-button-wrapper">
              <?php while ( have_rows( 'tickets_button' ) ) : the_row();
                      $text = get_sub_field( 'button_label' );
                      $link = get_sub_field( 'button_url' );
               ?>
                  <a href="<?= $link ?>" target="_blank" class="tickets-button">
                      <?= $text ?>
                  </a>
                <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <p class="presale-line"><?= $aud ?></p>
            <p class="presale-line"><?= $gensale ?></p>

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
                 $address = get_sub_field( 'theater_address' );                 $logo = get_sub_field( 'theater_logo' );

          ?>
            <a href="<?= $link ?>" target="_blank" class="link link-2">        <img src="<?= $logo ?>" alt="Hudson Theatre" class="theater-logo">
            <p class="theater-line"><?= $address ?></p></a>
        <?php endwhile; ?>
          </div>
      <?php endif; ?>
        </div>
      </div>
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
