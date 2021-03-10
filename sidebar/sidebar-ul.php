<!-- [START]下層ページ用用左サイドバー（初期から白） -->
<div class="sidebar-left-wrapper" id="sdebar-ul">
  <aside class="sidebar-left" id="sidebar-left">
    <div class="sidebar_left_items side-left-item">
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
  <!-- [END]下層ページ用用左サイドバー（初期から白） -->
</div>
