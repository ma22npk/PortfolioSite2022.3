<!-- ヘッダーPHP -->
<?php get_header('ul'); ?>
<!-- サイドバーPHP -->
<?php get_sidebar('ul'); ?>

<div class="two_column-inner">
  <!-- [START]ページ -->
  <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
  ?>
      <article class="entry">
        <!-- [START]親カテゴリー名を表示するエリア -->
        <div class="entry-category-parent">
          <?php
          $cats = get_the_category();
          $cat = $cats[0];
          if ($cat->parent) {
            $parent = get_category($cat->parent);
            echo $parent->cat_name;
          } else {
            echo $cat->cat_name;
          }
          ?>
        </div>
        <!-- [END]親カテゴリー名を表示するエリア -->
        <!-- [START]サムネイル、タイトル、本文のエリア -->
        <div class="entry-content">
          <div class="entry-tmb">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('large');
            }
            ?>
          </div>
          <div class="entry-category-child">
            <?php
            $categories = get_the_category();
            foreach ($categories as $category) {
              // カテゴリーIDを取得
              $cat_id = $category->term_id;
              // 子孫タームのIDを配列で取得
              $cat_child = get_term_children($cat_id, 'category');
              // 子孫タームのIDがない場合
              if (!$cat_child) {
                echo '' . $category->name . '';
                break;
              }
            }
            ?>
          </div>
          <!-- タイトル -->
          <h1 class="entry-ttl">
            <?php the_title(); ?>
          </h1>
          <!-- ローンチ日 -->
          <?php if (get_field('launch-date')) : ?>
            <p class="launch-date">
              <?php the_field('launch-date'); ?>
            </p>
          <?php endif; ?>
          <!-- 投稿記事 -->
          <div class="entry-body">
            <?php
            //本文の表示
            the_content(); ?>
            <?php
            //改ページを有効にするための記述
            wp_link_pages(
              array(
                'before' => '<nav class="entry-links">',
                'after' => '</nav>',
                'link_before' => '',
                'link_after' => '',
                'next_or_number' => 'number',
                'separator' => '',
              )
            );
            ?>
          </div>
          <!-- [START]外部リンクURL -->
          <p class="external-link">
            <a class="hover-opacity" target="_blank" href="
                <?php if (get_field('link-url')) : ?>
                  <?php the_field('link-url'); ?>
                  <?php endif; ?>
                ">
              <!-- 外部リンクの見出し -->
              <?php if (get_field('link-ttl')) : ?>
                <?php the_field('link-ttl'); ?>
              <?php endif; ?>
            </a>
          </p>
          <!-- [END]外部リンクURL -->
        </div>
        <!-- [END]サムネイル、タイトル、本文のエリア -->
        <!-- [START]ページネーション -->
        <?php the_posts_navigation(); ?>
        <div class="pagenation__btn-wrapper">
          <!-- 新しい記事があったら -->
          <?php next_post_link('%link', '<div class="pagenation-prev">PREV</div>', 'true'); ?>
          <!-- 以前の記事があったら -->
          <?php previous_post_link('%link', '<div class="pagenation-next">NEXT</div>', 'true'); ?>
        </div>
        <!-- [END]ページネーション -->
      </article>
      <!-- [END]ページ -->
  <?php
    endwhile;
  endif;
  ?>
</div>
<!-- [END]２カラムのインナー -->


<!-- [START]フッター（黒） -->
<?php get_footer('br'); ?>
<!-- [END]フッター（黒） -->
