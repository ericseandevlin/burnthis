<?php
/*
* Template Name: Cast Page
* Template Post Type: cast
*/
 ?>

<?php get_header(); ?>
    <div id="about" class="cast-page-holder">
      <div class="cast-page-content">
        <a href="<?= home_url(); ?>/#cast" class="link-block w-inline-block">
          <div>&lt; Back</div>
        </a>
        <h1 class="cast-bio-title"><?php the_title(); ?></h1>
        <h2 class="cast-bio-subtitle"><?php the_field('role'); ?></h2>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="bio-text"><?php the_content(); ?>

        </div>
      <?php endwhile; else : ?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
          <?php
          $social = get_field('social');
           ?>
        <div class="cast-social-wrapper">
          <?php if( $social['facebook'] ) : ?>
            <a href="<?= $social['facebook'] ?>" class="social-link w-inline-block" target="_blank" rel="noopener">
              <img src="<?= get_template_directory_uri() ?>/_images/icon_fb.png" class="fb-img">
            </a>
          <?php endif ?>
          <?php if( $social['twitter'] ) : ?>
            <a href="<?= $social['twitter'] ?>" class="social-link w-inline-block" target="_blank" rel="noopener">
              <img class="twitter-img" src="<?= get_template_directory_uri() ?>/_images/icon_tw.png" class="twitter-img">
            </a>
          <?php endif ?>
          <?php if( $social['instagram'] ) : ?>
            <a href="<?= $social['instagram'] ?>" class="social-link w-inline-block" target="_blank" rel="noopener">
              <img class="insta-img" src="<?= get_template_directory_uri() ?>/_images/icon_ig.png" class="insta-img">
            </a>
          <?php endif ?>
          <?php if( $social['website'] ) : ?>
            <a href="<?= $social['website'] ?>" class="social-link w-inline-block" target="_blank" rel="noopener">
              <img src="<?= get_template_directory_uri() ?>/_images/icon_website.png" class="website-img">
            </a>
          <?php endif; ?>
        </div>
        <a href="<?= home_url(); ?>/#cast" class="link-block w-inline-block">
          <div>&lt; Back</div>
        </a>
      </div>
    </div>
<?php get_footer(); ?>
