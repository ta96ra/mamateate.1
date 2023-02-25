<?php get_header() ?>
  <main>
  <?php while (have_posts()):?>
    <?php the_post();?>
    
    <div class="contents">
      <div class="wrapper">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>      
    </div>
    <?php endwhile ?> 
  </main>
  <?php get_footer(); ?>