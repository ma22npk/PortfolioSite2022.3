<!-- トップ用ヘッダー -->
<!DOCTYPE html>
<!-- 日本語サイトであることの宣言 -->
<html lang="ja">

<head>
  <!-- 文字コードはutf-8を指定 -->
  <meta charset="UTF-8">

  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/ fb# prefix属性: http://ogp.me/ns/ prefix属性#">
    <meta property="og:url" content="ページの URL" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="KameBlog" />
    <!-- ディスクリプションはサイトの説明文。 -->
    <meta name="description" content="主にプログラミング(フロントエンド寄り)の学習などのアウトプットをしております。">
    <meta property="og:site_name" content="KameBlog" />
    <meta property="og:image" content=" サムネイル画像の URL" />
    <!-- スマホやタブレットで表示をするビューポートの記述 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- functionsからCSS読み込み -->
    <?php wp_head(); ?>
    <!-- slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <title>KameBlog</title>
  </head>

<body id="body">
  <!-- [START]ヘッダーオーバーレイ -->
  <div id="header-overlay" class="header-overlay"></div>
  <!-- [END]ヘッダーオーバーレイ -->
  <!-- [START]ヘッダー -->
  <header id="header-top" class="header">
    <div class="header__inner">
      <h1 class="header__logo" id="header__logo-top">
        <a href="<?php echo home_url() ?>">
          <img id="header-logo-bl" src="<?php echo get_template_directory_uri() ?>/images/fusionlogo_bl.png" alt="FUSION" class="header-logo-img">
        </a>
      </h1>
      <!-- [START]右サイドバー(アイコンで出現) -->
      <aside class="sidebar-right">
        <div class="sidebar_right_items">
          <?php
          wp_nav_menu(
            //.header-listを置き換えて、PC用メニューを動的に表示する
            array(
              'depth' => 1,
              'theme_location' => 'drawer', //グローバルメニューをここに表示すると指定
              'container' => 'false',
              'menu_class' => 'aside__lists',
            )
          );
          ?>
        </div>
      </aside>
      <!-- [END]右サイドバー(アイコンで出現) -->
      <!-- [START]ハンバーガーメニュー -->
      <div class="menu-trigger-wrapper">
        <div class="btn-trigger" id="nav_menu-btn">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <!-- [END] ハンバーガーメニュー -->
    </div>
  </header>

  <!-- [END]ヘッダー -->
