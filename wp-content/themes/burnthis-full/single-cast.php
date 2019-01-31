<?php
/*
* Template Name: Cast Page
* Template Post Type: cast
*/
 ?>

<?php get_header(); ?>
    <div id="about" class="cast-page-holder">
      <div class="cast-page-content">
        <a href="#" class="link-block w-inline-block">
          <div>&lt; Back</div>
        </a>
        <h1 class="cast-bio-title">Heading</h1>
        <h2 class="cast-bio-subtitle">Heading</h2>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="about-text"><?php the_content(); ?></div>
      <?php endwhile; else : ?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
        <a href="#" class="link-block w-inline-block">
          <div>&lt; Back</div>
        </a>
      </div>
    </div>
<?php get_footer(); ?>
