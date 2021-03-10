      <!-- [START]ハンバーガーメニュー -->
      <div class="menu-trigger-wrapper">
        <div class="btn-trigger" id="nav_menu-btn">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <!-- [END] ハンバーガーメニュー -->
      <!-- [START]右サイドバー(アイコンで出現) -->
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
      <!-- [END]右サイドバー(アイコンで出現) -->
      <!-- [START]ヘッダーオーバーレイ -->
      <div id="header-overlay" class="header-overlay"></div>
      <!-- [END]ヘッダーオーバーレイ -->
