<!-- [START]フッター(黒) -->
<footer class="footer">
  <div class="two_column-inner">
    <div class="footer__contents-wrapper">
      <h1 class="footer__logo">
        <a href="<?php echo home_url() ?>">
          <img id="footer__logo" src="<?php echo get_template_directory_uri() ?>/images/fusionlogo_wh.png" alt="FUSION" class="footer__logo-img">
        </a>
      </h1>
      <?php
      wp_nav_menu(
        //.header-listを置き換えて、PC用メニューを動的に表示する
        array(
          'depth' => 1,
          'theme_location' => 'underlayer', //グローバルメニューをここに表示すると指定
          'container' => 'false',
          'menu_class' => 'footer__lists',
        )
      );
      ?>
    </div>
    <div class="copyright">Copyright-Kota Matsumoto, 2021 All Rights Reserved</div>
  </div>
</footer>
<!-- [END]フッター(黒) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<!-- functionPHPの読み込み -->
<?php wp_footer(); ?>

</body>

</html>
