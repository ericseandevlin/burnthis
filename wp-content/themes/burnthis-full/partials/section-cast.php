<?php
  $cast = get_field('cast');
  $cast_members = $cast['cast_members'];
  $creative_members = $cast['creative_members'];
  $cast_row_counter = 0;
  $creative_row_counter = 0;
 ?>

<div id="cast" class="cast-section">
  <div class="cast-content-holder">
    <h1 class="section-title">cast<br>   <span class="gold">/</span> creative</h1>

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
            <!-- The actual cast item -->
              <div class="cast-block">
            <a href="<?php echo get_permalink(); ?>">

                <img src="<?php the_field('headshot'); ?>">
                <h3 class="cast-name"><?php the_title(); ?></h3>
                <h4 class="cast-role"><?php the_field('role'); ?></h4>
            </a>
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

      <div class="creative-block-holder">

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
              if( $creative_row_counter == 1 || $creative_row_counter % 4 == 1 ) {
                echo '<div class="creative-block-holder">';
              }
            ?>

            <div class="creative-block">
                <a href="<?php echo get_permalink(); ?>">
                <h3 class="creative-name"><?php the_title(); ?></h3>
                <h4 class="creative-role"><?php the_field('role'); ?></h4>
              </a>
              </div>
            </div>

              <?php if( $creative_row_counter % 4 == 0 ) {
                echo '</div>'; }?>

              <?php endif; ?>
            <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>

      </div>

  </div>
</div>
</div>
