<?php
$news = get_field('home_slide_news');
$newsItems = $news['news_items'];
 ?>

<section id="news" class="news-section">

  <div class="w-container">
    <h1 class="header-1 centered"><?= $news['news_title']; ?></h1>

    <div class="news-swiper">
      <div id="news-swiper" class="swiper-container">

     <?php if( $newsItems ): ?>
      <div class="swiper-wrapper">

        <?php foreach( $newsItems as $post): ?>
         <?php setup_postdata($post); ?>

         <div class="swiper-slide">
             <?php if( have_rows('news_items') ): ?>
               <?php while( have_rows('news_items') ): the_row();

              // vars
              $image = get_sub_field('news_item_image');
              $link = get_sub_field('news_item_link');

              ?>
              <?php if( $image ): ?>
                    <a href="<?php echo $link; ?>" target="_blank">
                      <div class="swiper-content">
                        <div class="news-image-container" style="background-image: url('<?php echo $image['url']; ?>')">
                          <div class="news-category">
                            <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>
                          </div>
                        </div>
                        <div class="swiper-link"><?php the_title(); ?></div>
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
</section>
