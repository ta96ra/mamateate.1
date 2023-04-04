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
      <div class="header-left">
      </div> 
      <div class="header-right">
        <a href="<?php echo get_template_directory_uri().'/reserve';?>">ご予約お問い合わせはこちらから</a>
        <div id="hamburger">
          <span></span>
          <span></span>
          <p>MENU</p>
        </div>
      </div> 
    </div>
    <div id="modal-window">
      <div class="black-window"></div>
      <div class="white-window">
        <?php if (has_nav_menu('hamburger')):?>
          <?php wp_nav_menu(array(
            'theme_location' => 'hamburger',
            'menu_id' => 'hamburger-menu',
            'container' => 'nav',
            'container_class' => 'hamburger-menu',
          ))?>
        <?php endif; ?>
      </div>
    </div>
  </header>
  <div id="index"></div>