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
            <?php if( $social['facebook'] ) : ?>
              <a href="<?= $social['facebook'] ?>" class="cast-modal-social-icon w-inline-block" target="_blank" rel="noopener">
                <img class="cast-modal-social-icon-img" src="<?= get_template_directory_uri() ?>/_images/icon_fb.svg">
              </a>
            <?php endif ?>
            <?php if( $social['twitter'] ) : ?>
              <a href="<?= $social['twitter'] ?>" class="cast-modal-social-icon w-inline-block" target="_blank" rel="noopener">
                <img class="cast-modal-social-icon-img" src="<?= get_template_directory_uri() ?>/_images/icon_tw.svg">
              </a>
            <?php endif ?>
            <?php if( $social['instagram'] ) : ?>
              <a href="<?= $social['instagram'] ?>" class="cast-modal-social-icon w-inline-block" target="_blank" rel="noopener">
                <img class="cast-modal-social-icon-img" src="<?= get_template_directory_uri() ?>/_images/icon_ig.svg">
              </a>
            <?php endif ?>
            <?php if( $social['website'] ) : ?>
              <a href="<?= $social['website'] ?>" class="cast-modal-social-icon w-inline-block" target="_blank" rel="noopener">
                <img class="cast-modal-social-icon-img" src="<?= get_template_directory_uri() ?>/img/icon_website.svg">
              </a>
            <?php endif; ?>
        </div>
      <?php endwhile; else : ?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
        <a href="<?= home_url(); ?>/#cast" class="link-block w-inline-block">
          <div>&lt; Back</div>
        </a>
      </div>
    </div>
<?php get_footer(); ?>
