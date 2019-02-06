

    <div id="faq" class="faq-section">
      <div class="faq-holder">
          <h1 class="section-title faq">‍<span class="gold bold">/</span> faq</h1>

          <div class="faq-list">

          <?php if ( have_rows( 'faq_list' ) ) : ?>
          <div id="faq-accordion" class="faq-accordion">

               <?php
               while ( have_rows( 'faq_list' ) ) : the_row();

                 $anchor = get_sub_field( 'anchor' );
                 $question = get_sub_field( 'question', false, false );
                 $answer = theme_widont(get_sub_field('answer', false, false)); ?>

               <h4 id="<?= $anchor ?>" class="question"><?= $question ?>
                 <span class="faq-arrow"></span>
               </h4>

               <div>
                 <p class="answer-text"><?= $answer ?></p>
               </div>

               <?php endwhile; ?>

          </div>
        <?php endif; ?>
      </div>
      </div>
    </div>
