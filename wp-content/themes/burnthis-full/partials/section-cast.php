<?php
  $cast = get_field('cast');
  $cast_members = $cast['cast_members'];
  $creative_members = $cast['creative_members'];
  $cast_row_counter = 0;
  $creative_row_counter = 0;
 ?>

<div id="cast" class="cast-section">
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
              if( $cast_row_counter == 1 || $cast_row_counter % 6 == 1 ) {
                echo '<div class="cast-row w-row">';
              }
            ?>

            <div class="column w-col w-col-2 w-col-tiny-4 w-col-small-4">
              <div class="cast-column">
                <div class="cast-image-holder">
                  <div class="cast-image-circle"></div>
                  <div class="cast-hover">
                    <p class="cast-hover-text">VIEW<br>BIO</p>
                  </div>

                    <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'cast-image  cast-image-hover', 'alt' => 'Image of cast member ' . get_the_title()) ); ?>

                </div>

                <p class="cast-name"><?php the_title(); ?></p>

              </div>
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

<!--
<div id="cast" class="cast-section">
  <div class="cast-content-holder">
    <h1 class="section-title">cast<br>   <span class="gold">/</span> creative</h1>
    <div class="cast-block-holder">
      <div class="cast-block"><a href="#" class="cast-photo w-inline-block"><img src="images/287.jpeg" width="300" alt="" class="image"></a>
        <div class="cast-bio-holder">
          <h3 class="cast-name">Adam Driver</h3>
          <h4 class="cast-role">pale</h4>
        </div>
      </div>
      <div class="cast-block"><a href="#" class="cast-photo w-inline-block"><img src="images/287.jpeg" width="300" alt="" class="image"></a>
        <div class="cast-bio-holder">
          <h3 class="cast-name">keri russell</h3>
          <h4 class="cast-role">anna mann</h4>
        </div>
      </div>
      <div class="cast-block"><a href="#" class="cast-photo w-inline-block"><img src="images/287.jpeg" width="300" alt="" class="image"></a>
        <div class="cast-bio-holder">
          <h3 class="cast-name">david furr</h3>
          <h4 class="cast-role">burton</h4>
        </div>
      </div>
      <div class="cast-block"><a href="#" class="cast-photo w-inline-block"><img src="images/287.jpeg" width="300" alt="" class="image"></a>
        <div class="cast-bio-holder">
          <h3 class="cast-name">brandon<br>uranowitz</h3>
          <h4 class="cast-role">larry</h4>
        </div>
      </div>
    </div>
    <div class="creative-block-holder">
      <div class="creative-block"><a href="#" class="cast-photo w-inline-block"></a>
        <h3 class="creative-name">people person</h3>
        <h4 class="creative-role">role</h4>
      </div>
      <div class="creative-block"><a href="#" class="cast-photo w-inline-block"></a>
        <h3 class="creative-name">people person</h3>
        <h4 class="creative-role">role</h4>
      </div>
      <div class="creative-block"><a href="#" class="cast-photo w-inline-block"></a>
        <h3 class="creative-name">people person</h3>
        <h4 class="creative-role">role</h4>
      </div>
      <div class="creative-block"><a href="#" class="cast-photo w-inline-block"></a>
        <h3 class="creative-name">people person</h3>
        <h4 class="creative-role">role</h4>
      </div>
      <div class="creative-block"><a href="#" class="cast-photo w-inline-block"></a>
        <h3 class="creative-name">people person</h3>
        <h4 class="creative-role">role</h4>
      </div>
      <div class="creative-block"><a href="#" class="cast-photo w-inline-block"></a>
        <h3 class="creative-name">people person</h3>
        <h4 class="creative-role">role</h4>
      </div>
      <div class="creative-block"><a href="#" class="cast-photo w-inline-block"></a>
        <h3 class="creative-name">people person</h3>
        <h4 class="creative-role">role</h4>
      </div>
      <div class="cast-block"><a href="#" class="cast-photo w-inline-block"></a></div>
      <div class="cast-block"><a href="#" class="cast-photo w-inline-block"></a></div>
      <div class="cast-block"><a href="#" class="cast-photo w-inline-block"></a></div>
    </div>
  </div>
</div> -->
