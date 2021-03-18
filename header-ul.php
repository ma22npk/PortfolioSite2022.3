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
    <meta property="og:title" content="松本昂大ポートフォリオサイト" />
    <!-- ディスクリプションはサイトの説明文。 -->
    <meta name="description" content="当サイトは松本昂大の転職活動用PFサイトです。">
    <meta property="og:site_name" content="松本昂大ポートフォリオサイト" />
    <meta property="og:image" content=" サムネイル画像の URL" />
    <!-- スマホやタブレットで表示をするビューポートの記述 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- WoWJs CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Font awesome CDN -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- functionsからCSS読み込み -->
    <?php wp_head(); ?>
    <title>松本昂大ポートフォリオサイト</title>

  </head>

<body id="body">
  <!-- [START]下層ページ用ヘッダー -->
  <header id="header-ul" class="header">
    <div class="header__inner">
    </div>
  </header>
  <!-- [END]下層ページ用ヘッダー -->
  <!-- 下層ページ用ハンバーガー -->
  <?php get_template_part('burger-menu/menu-burgerul'); ?>
