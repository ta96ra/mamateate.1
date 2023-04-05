  <footer>
    <div class="sns">
      <ul>
        <li><a href="https://www.instagram.com/hramyoga">
        <i class="fa-brands fa-instagram"></i>
        </a></li>
        <li><a href="https://lin.ee/4AbY2ZB">
        <i class="fa-brands fa-line"></i>
        </a></li>
        <li><a href="http://ameblo.jp/yoga-therapy-h/"><i class="fa-solid fa-blog"></i></a></li>
      </ul>
    </div>
    <small class="side-copy">&copy;mamateate. All Rights Reserved</small>
    <div class="footer-content">
      <div class="footer-wrapper">
        <div class="logo">
          <img src="<?php echo get_template_directory_uri().'/img/logo.jpg';?>" alt="">
          <div class="logo-text">
            <p>ママてあて</p>
            <h2>Mamateate.</h2>
          </div>
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
    </div>
    <small class="bottom-copy">&copy;mamateate. All Rights Reserved</small>
    <div id="to-top">PAGE TOP</div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
<script>
  
  
</script>