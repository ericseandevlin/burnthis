<?php
$news = get_field('home_slide_news');
$newsItems = $news['news_item'];
 ?>

<section id="news" class="news-section">
  <div class="news-content-holder">
  <h1 class="section-title">news<br>‍<span class="black">/</span> updates</h1>

  <div class="w-container">

    <div class="news-swiper">
      <div id="news-swiper" class="swiper-container">

     <?php if( $newsItems ): ?>
      <div class="swiper-wrapper">

        <?php foreach( $newsItems as $post): ?>
         <?php setup_postdata($post); ?>

         <div class="swiper-slide">
             <?php if( have_rows('news_item') ): ?>
               <?php while( have_rows('news_item') ): the_row();

              // vars
              $image = get_sub_field('news_item_image');
              $link = get_sub_field('news_item_link');

              ?>
              <?php if( $image ): ?>
                    <a href="<?php echo $link; ?>" target="_blank">
                      <div class="swiper-content">
                        <div class="news-image-container" style="background-image: url('<?php echo $image['url']; ?>')">
                          <div class="news-overlay">
                            <div class="news-title"><?php the_title(); ?></div>
                          </div>
                        </div>
                      </div>
                    </a>

              <?php endif; ?>

          <?php endwhile; ?>
        <?php endif; ?>


        </div>
        <?php endforeach; ?>
      </div>


      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>

         <!-- Add Pagination -->
         <div class="pagination-holder">
           <div class="swiper-pagination"></div>
        </div>
         <!-- Add Arrows -->

      </div>


      <div class="swiper-button-next">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M27,22L27,22L5,44l-2.1-2.1L22.8,22L2.9,2.1L5,0L27,22L27,22z"></svg>
      </div> <div class="swiper-button-prev">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M0,22L22,0l2.1,2.1L4.2,22l19.9,19.9L22,44L0,22L0,22L0,22z"></svg>
          </div>
    </div>
  </div>
</div>
</section>
