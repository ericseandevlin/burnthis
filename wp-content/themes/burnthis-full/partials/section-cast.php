<?php
  $cast = get_field('cast');
  $cast_members = $cast['cast_members'];
  $creative_members = $cast['creative_members'];
  $cast_row_counter = 0;
  $creative_row_counter = 0;
 ?>

<div id="cast" class="cast-section">
  <div class="cast-content-holder">

      <?php // CAST LOOP ?>
      <?php if( $cast_members ): ?>

        <?php
          $counter = 0;
          $length = count($cast_members);
           ?>

        <?php foreach( $cast_members as $post): ?>
          <?php setup_postdata($post); ?>
          <?php
    				$status = get_field('status');
    				$position = get_field('position');
  				?>
  				<?php if( $status == 'active' && $position[0] == 'cast' ) : ?>

            <?php
              $cast_row_counter++;
              if( $cast_row_counter == 1 || $cast_row_counter % 4 == 1 ) {
                echo '<div class="cast-block-holder">';
              }
            ?>

                <div class="cast-block">
                <div class="cast-image-holder">

                    <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'cast-image  cast-image-hover', 'alt' => 'Image of cast member ' . get_the_title()) ); ?>

                </div>

                <h3 class="cast-name"><?php the_title(); ?></h3>
                <h4 class="cast-role"><?php the_field('role'); ?></h4>
              </div>
            <?php if( $cast_row_counter % 6 == 0 || $counter == ($length - 1) ){  echo '</div>';
            }
              $counter++;
            ?>

              <?php endif; ?>
            <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>

    </div>
    <div class="container w-container creative-part">

      <div class="cast-spacer"></div>

      <?php // CREATIVE LOOP ?>
      <?php if( $creative_members ): ?>
        <?php foreach( $creative_members as $post): ?>
          <?php setup_postdata($post); ?>

          <?php
            $status = get_field('status');
            $position = get_field('position');
          ?>
          <?php if( $status == 'active' && $position[0] == 'creative' ) : ?>

            <?php
              $creative_row_counter++;
              if( $creative_row_counter == 1 || $creative_row_counter % 3 == 1 ) {
                echo '<div class="creative-row w-row">';
              }
            ?>

              <?php get_template_part('partials/loop-content/member-creative'); ?>

              <?php if( $creative_row_counter % 3 == 0 ) {
                echo '</div>'; }?>

              <?php endif; ?>
            <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>

      </div>

  </div>
</div>
