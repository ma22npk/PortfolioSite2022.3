<!-- [START]トップ用左サイドバー（初期から白） -->
<div id="sidebar-top" class="sidebar-left-wrapper">
  <aside class="sidebar-left" id="sidebar-left">
    <div id="sidebar-top-items" class="sidebar_left_items side-left-item">
      <?php
      wp_nav_menu(
        //.header-listを置き換えて、PC用メニューを動的に表示する
        array(
          'depth' => 1,
          'theme_location' => 'leftside', // 左サイドメニューをここに表示すると指定
          'container' => 'false',
          'menu_class' => 'aside__lists top-list',
        )
      );
      ?>
    </div>
  </aside>
  <!-- [END]トップ用左サイドバー（初期から白） -->
</div>
