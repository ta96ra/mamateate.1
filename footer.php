  <footer>
    <div class="sns">
      <ul class="wrapper">
        <li><a href="https://www.instagram.com/hramyoga">Instagramはこちら</a></li>
        <li><a href="https://lin.ee/4AbY2ZB">LINEはこちら</a></li>
        <li><a href="http://ameblo.jp/yoga-therapy-h/">Amebroはこちら</a></li>
      </ul>
    </div>
    <div class="links">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri().'/img/logo1.png';?>" alt="">
      </div>
      <div class="footer-nav">
        <?php if (has_nav_menu('footer')):?>
          <?php wp_nav_menu(array(
            'theme_location' => 'footer',
            'menu_id' => 'footer-menu',
            'container' => 'nav',
            'container_class' => '',
          ))?>
        <?php endif; ?>
      </div>
    </div>
    <small>&copy;mamateate. All Rights Reserved</small>
  </footer>
  <div id="to-top">
    <div>
      <span><</span>
      <span>Top</span>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>
</html>