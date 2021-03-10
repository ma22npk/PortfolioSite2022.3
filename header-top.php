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
    <meta property="og:title" content="FUSION" />
    <!-- ディスクリプションはサイトの説明文。 -->
    <meta name="description" content="サイトの説明の文章がはいります。サイトの説明の文章がはいります。">
    <meta property="og:site_name" content="FUSION" />
    <meta property="og:image" content=" サムネイル画像の URL" />
    <!-- スマホやタブレットで表示をするビューポートの記述 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- WoWJs CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Font awesome CDN -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <!-- ユーザーエージェントCSS打ち消し -->
    <!-- functionsからCSS読み込み -->
    <?php wp_head(); ?>
    <!-- slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <title>FUSION</title>
  </head>

<body id="body">
  <!-- [START]トップページ用ヘッダー -->
  <header id="header-top" class="header">
    <div class="header__inner">
    </div>
  </header>
  <!-- [END]トップページ用ヘッダー -->
  <!-- ヘッダーロゴ -->
  <?php get_template_part('template-parts/headerlogo-wh'); ?>
  <!-- ハンバーガー -->
  <?php get_template_part('template-parts/menu-burgerTop'); ?>
