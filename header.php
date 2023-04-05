<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <img src="<?php echo get_template_directory_uri().'/img/logo.jpg
        ';?>" alt="">
        <?php if (has_nav_menu('hamburger')):?>
          <?php wp_nav_menu(array(
            'theme_location' => 'hamburger',
            'menu_id' => 'hamburger-menu',
            'container' => 'nav',
            'container_class' => 'hamburger-menu',
          ))?>
        <?php endif; ?>
        <a class="reserve" href="<?php echo get_template_directory_uri().'/reserve';?>">ご予約お問い合わせはこちらから</a>
        <p class="hours">営業日：毎週XX曜日xx:xx~xx:xx</p>
      </div>
    </div>
  </header>
  <div id="index"></div>