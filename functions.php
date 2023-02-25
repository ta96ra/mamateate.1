<?php 
// -------------------------
//  css.javascriptの読み込み
// -------------------------
function mamateate1_scripts(){
  wp_enqueue_style('style-css',get_stylesheet_uri()); //style.cssの読み込み
  wp_enqueue_style('hoge-css',get_template_directory_uri().'/css/hoge.css'); //hoge.cssの読み込み
  wp_enqueue_script('main-js',get_template_directory_uri().'/js/main.js','','','true'); // main.jsの読み込み
  }
  add_action('wp_enqueue_scripts','mamateate1_scripts');

// -------------------------
// 様々な機能
// -------------------------
function mamateate1_setup(){
  add_theme_support('title-tag');  //タイトルの指定
  add_theme_support('post-thumbnails');   //サムネイルの指定
  add_image_size('mamateate1-thumbnail',290,290,true);  //レッスン一覧のサムネイルサイズ
  add_image_size('mamateate1-hero',1200,600,true);   //レッスンのメインビジュアルサイズ
  register_nav_menus(array(
    'global' => 'Global Menu',  //「Global Menu」というナビゲーションの設定
  ));
  register_nav_menus(array(
    'hamburger' => 'Hamburger Menu',  //「Hamburger Menu」というナビゲーションの設定
  ));
  register_nav_menus(array(
    'footer' => 'Footer Menu',  //「Footer Menu」というナビゲーションの設定
  ));


}
add_action('after_setup_theme','mamateate1_setup');

// ------------------------
// excerpt(抜粋)の設定
// ------------------------
function new_excerpt_mblength($length) {
  return 50; //抜粋する文字数を50文字に設定
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');

// -------------------------
// テーマカスタマイザー
// -------------------------
// アクションの定義、フックの登録
function mamateate1_customize_register($wp_customize){
  $wp_customize->add_section('theme_options',array(
    'title' => 'Theme Options',
    'priority' => 130,
  ));
  for($i = 1; $i <= 10; $i++){
    $wp_customize->add_setting('front_page_content_' . $i,array(
      'default' => false,
      'sanitize_callback' => 'absint',
    ));
    //コントロールの追加
    $wp_customize->add_control('front_page_content_' . $i,array(
      'label' => 'Front Page Content ' .$i,
      'section' => 'theme_options',
      'type' => 'dropdown-pages',
      'allow_addition' => true,
    ));
  }
}
add_action('customize_register','mamateate1_customize_register');
//セッティングの追加

// フロントページが最新の投稿の場合index.phpを利用
function mamateate1_front_page_template($template){
  return is_home() ? '' : $template;
}
add_filter('frontpage_template','mamateate1_front_page_template');

?>




