<?php get_header() ?>
  <main>
  <?php while (have_posts()):?>
    <?php the_post();?>
    <div class="mainvisual-sub">

      <!-- <img src="<?php echo get_template_directory_uri().'/img/mainvisual.jpg';?>" alt=""> -->
      
      <?php if(has_post_thumbnail()):?>
        <?php the_post_thumbnail('mamateate1-hero');?>
      <?php endif;?>
      <h1 class="lesson-title"><?php the_title(); ?></h1>
    </div>
    <div class="contents">
        <?php the_content(); ?>     
    </div>
    <?php endwhile ?> 
<!-- 予約する -->
    <div class="bottom-contents">
      <div class="form">
        <img src="<?php echo get_template_directory_uri().'/img/mainvisual.jpg';?>" alt="">
        <div class="text" ontouchstart="">
          <h3>ご予約はこちらから</h3>
          <p>レッスンのご予約・質問・ご相談などお気軽にお問い合わせください。</p>
          <a class="button" href="<?php echo get_template_directory_uri().'/contact';?>">予約する</a>
        </div>
      </div>
    </div>
  </main>
  <?php get_footer(); ?>