<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
  <?php wp_body_open(); ?>
  <header>
    <div class="header-top">
      <div class="wrapper">
        <a href="<?php echo home_url();?>" class="logo">
          <img src="<?php echo get_template_directory_uri().'/img/logo1.png';?>" alt="">
        </a>
        <!-- <nav>
          <ul>
            <li><a href="#">ホーム</a></li>
            <li><a href="#">レッスン</a></li>
            <li><a href="#">スタジオ</a></li>
            <li><a href="#">ご予約</a></li>
          </ul>
        </nav> -->
        <?php if (has_nav_menu('global')):?>
          <?php wp_nav_menu(array(
            'theme_location' => 'global',
            'menu_id' => 'global-menu',
            'container' => 'nav',
            'container_class' => 'global-menu',
          ))?>
        <?php endif; ?>
        <div id="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <?php if (has_nav_menu('hamburger')):?>
      <?php wp_nav_menu(array(
        'theme_location' => 'hamburger',
        'menu_id' => 'hamburger-menu',
        'container' => 'nav',
        'container_class' => 'hamburger-menu',
      ))?>
    <?php endif; ?>
  </header>
  <div id="index"></div>