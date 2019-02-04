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

        <div class="bio-text"><?php the_content(); ?></div>
      <?php endwhile; else : ?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
        <a href="<?= home_url(); ?>/#cast" class="link-block w-inline-block">
          <div>&lt; Back</div>
        </a>
      </div>
    </div>
<?php get_footer(); ?>
