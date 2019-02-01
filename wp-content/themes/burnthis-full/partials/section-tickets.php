<div id="tickets" class="tickets-section">
  <h1 class="section-title">get<br><span class="gold">/</span> tickets</h1>
  <div class="tickets-content-holder">
    <div class="tickets-text">
  <?php

  // check if the flexible content field has rows of data
  if( have_rows('tickets_section') ):

       // loop through the rows of data
      while ( have_rows('tickets_section') ) : the_row();

          if( get_row_layout() == 'header_text' ): ?>

          <h2 class="bullet-title"><?php the_sub_field('header_text'); ?></h2>

          <?php elseif( get_row_layout() == 'body_text' ): ?>

            <div class="ticket-text"><?php the_sub_field('body_text'); ?></div>

          <?php endif; endwhile; else :

      // no layouts found

  endif;
  ?>
  <?php
  if( have_rows('tickets_button') ):
      while ( have_rows('tickets_button') ) : the_row();
      ?>
  <a href="<?php the_sub_field('button_url'); ?>" class="global-button w-inline-block">
    <div class="global-button-text"><?php the_sub_field('button_text'); ?></div>
  </a>

<?php endwhile; endif; ?>

    </div>
       <div class="tickets-map">
          <img src="<?php the_field('tickets_map'); ?>" width="504" alt="">
        </div>
     </div>
</div>
