<!-- [START]左サイドバー -->
<aside class="sidebar-left" id="sidebar-left">
  <div class="sidebar_left_items">
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
<!-- [END]左サイドバー -->
