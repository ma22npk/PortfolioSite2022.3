      <!-- [START]トップ用ハンバーガーメニュー -->
      <div class="menu-trigger-wrapper">
        <div class="btn-trigger" id="menu-btn-top">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <!-- [END] トップ用ハンバーガーメニュー -->
      <!-- [START]右サイドバー(アイコンで出現) -->
      <aside class="sidebar-right">
        <div class="sidebar_right_items" id="top_sidebar_right-items">
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
      <!-- [START]ヘッダーオーバーレイ -->
      <div id="header-overlay" class="header-overlay"></div>
      <!-- [END]ヘッダーオーバーレイ -->
