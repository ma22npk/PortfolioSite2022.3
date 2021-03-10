      <!-- [START]下層ページ用ハンバーガーメニュー -->
      <div class="menu-trigger-wrapper">
        <div class="btn-trigger" id="menu-btn-ul">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <!-- [END] 下層ページ用ハンバーガーメニュー -->
      <!-- [START]下層ページ用右サイドバー(アイコンで出現) -->
      <aside class="sidebar-right">
        <div class="sidebar_right_items">
          <?php
          wp_nav_menu(
            //.header-listを置き換えて、PC用メニューを動的に表示する
            array(
              'depth' => 1,
              'theme_location' => 'underlayer', // 左サイドメニューをここに表示すると指定
              'container' => 'false',
              'menu_class' => 'aside__lists top-list',
            )
          );
          ?>
        </div>
      </aside>
      <!-- [END]下層ページ用右サイドバー(アイコンで出現) -->
      <!-- [START]ヘッダーオーバーレイ -->
      <div id="header-overlay" class="header-overlay"></div>
      <!-- [END]ヘッダーオーバーレイ -->
