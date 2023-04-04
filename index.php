<?php get_header() ?>
  <main>
    <div class="mainvisual">
      <img src="<?php echo get_template_directory_uri().'/img/mainvisual.jpg';?>" alt="">
      <h1><?php bloginfo('name') ?></h1>
    </div>
    <div class="contents">
      <div class="wrapper">
        <section id="lessons">
          <h2>MENU</h2>
          <?php if(have_posts()):?>
          <ul>
            <?php while(have_posts()):?>
            <?php the_post();?>
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
            <p>MENUはありません</p>
          <?php endif; ?> 
        </section>
      </div>
    </div>
    <div class="bottom-contents">
      
    </div>

  </main>
  <?php get_footer(); ?>