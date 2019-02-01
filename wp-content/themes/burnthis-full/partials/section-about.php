<div id="about" class="about-section">
  <div class="about-content-holder">
    <h1 class="section-title">about<br> <span class="title-slash">/</span> the show<span class="gold"></span></h1>

    <?php
    if( have_rows('about_section') ):
        while ( have_rows('about_section') ) : the_row();
        ?>
  <div class="about-text">
    <?php the_sub_field('about_text'); ?>
  </div>

  <?php endwhile; endif; ?>

  </div>
  </div>
