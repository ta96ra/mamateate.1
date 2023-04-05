<?php get_header() ?>
  <main>
    <!-- メインコンテンツ -->
    <div class="contents">
   
      <!-- 固定ページをループで表示 -->
      <?php for($i = 1; $i <= 10; $i++):?>
        <!-- front_page_content_1~10で保存されている場合 -->
        <?php if(get_theme_mod('front_page_content_'. $i)): ?>

          <!-- 設定した固定ページを取得 -->
          <?php
          $post = get_post(get_theme_mod('front_page_content_'. $i));
          setup_postdata($post);  
          ?>
            <!-- 表示するレッスン一覧(投稿一覧)の場合 -->
            <?php
            $blog_posts_page_id = get_the_ID();//フロントページコンテンツとして設定された固定ページIDを取得
            if($blog_posts_page_id === (int) get_option('page_for_posts')):  //固定フロントページの投稿ページのIDを取得
            ?>

            <!-- レッスン一覧のサブループ（各投稿ページ） -->
            <?php
            $blog_posts = new WP_Query(array(
              'posts_per_page' => 6,
              'post_status' => 'publish',
              'no_found_rows' => true,
            ));
            ?>
            <div class="wrapper">
              <section id="lessons">  
                <h2><?php the_title(); ?></h2>
                
                <?php if($blog_posts->have_posts()):?>
                <ul>
                  <?php while($blog_posts->have_posts()):?>
                  <?php $blog_posts->the_post();?>
                  <li>
                    <a class="image-button" href="<?php the_permalink();?>">
                      <?php if(has_post_thumbnail()):?>
                        <?php the_post_thumbnail('mamateate1-thumbnail');?>
                      <?php endif; ?>  
                      <div class="black-shadow"></div>
                      <h3><?php the_title(); ?></h3>
                      <p><?php the_excerpt(); ?></p>
                    </a>
                  </li>
                  <?php endwhile;?>
                </ul>
                <?php else: ?>
                  <p>レッスンはありません</p>
                <?php endif; ?> 
              </section>  
            </div>
            <!-- 表示するページがレッスン一覧以外の場合 --> 
            <?php else:?>
            <section>
              <!-- <h2><?php the_title(); ?></h2> -->
              <div>
                <?php the_content();?>
              </div> 
            </section>
        <?php endif;?>
        <?php endif;?>
      <?php endfor;?>
      <?php wp_reset_postdata()?>
    </div>
    <div class="bottom-contents">
      
    </div>
  </main>
  <?php get_footer(); ?>