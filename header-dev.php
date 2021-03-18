<!-- トップ用ヘッダー -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- 日本語サイトであることの宣言 -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<!--
♡ ━━━━━━ ╭╯━━┓
╟┈┈╱▔╭╯▔╲┈┈┈┫
╟┈▕╲▂▂▂▂╱▏┈┈┫
╟┈┈▏┊┊┊┊▕━╮┈┫
╟┈┈▏┊┊┊┊▕┈┃┈┫
╟┈┈▏┊┊┊┊▕━╯┈┫
╙━━╲▂▂▂▂╱━━━♡
お忙しい中ご覧いただき、ありがとうございます。
-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <meta http-equiv="Content-Script-Type" content="text/javascript" />
  <!-- 管理画面の「設定」→「一般」のキャッチフレーズを表示するためにbloginfo('description');を使用する。 -->
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <!--WordPressの管理画面では、metaタグ内のkeywords入力欄が存在しない。そのため、ここはテンプレタグを使わずに直接記述する必要がある。また、もしページ毎にkeywordsを変更したいならば、if文とテンプレタグを駆使する。もしくはプラグインを利用する。-->
  <meta name="keywords" content="ポートフォリオサイト" />
  <!-- style.cssまでの絶対パスを出力するテンプレタグ bloginfo('stylesheet_url'); -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
  <!--WordPressのコメント欄で使用するJavaScriptファイルを読み込む記述。-->
  <?php if (is_singular()) wp_enqueue_script("comment-reply"); ?>

  <!--wp_head();を忘れずに</head>の前に記述する。■wp_head();の解説プラグインを使用する際などに必要な記述-->
  <!-- slick CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
  <!-- functionsからCSS読み込み -->
  <?php wp_head(); ?>
  <!--サイト名を出力するテンプレタグは bloginfo('name');■wp_title( '|', true, 'right' );の解説wp_title();は各ページのタイトル名を出力するテンプレタグ。もしタイトル名を出力しないといけないページの場合、タイトル名と一緒に「right」（右）に「|」を出力する。-->
  <title>
    <?php wp_title('|', true, 'right');
    bloginfo('name'); ?>
  </title>
</head>

<body id="body">
  <!-- [START]トップページ用ヘッダー -->
  <header id="header-top" class="header">
    <div class="header__inner">
    </div>
  </header>
  <!-- [END]トップページ用ヘッダー -->
