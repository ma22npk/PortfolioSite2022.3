<?php
/*
Template Name: form
*/
?>
<!-- ヘッダーPHP -->
<?php get_header('ul'); ?>
<!-- トップページサイドバー -->
<?php get_template_part('sidebar/sidebar-ul'); ?>

<!-- [START]２カラムのインナー -->
<div class="two_column-inner">
  <!-- [START]エントリー -->
  <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
  ?>
      <article class="entry page-form">
        <div class="entry-category-parent">
          <?php the_title(); ?>
        </div>
        <article class="entry-content">
          <div class="entry-body">
            <?php
            //本文の表示
            the_content(); ?>
            <?php
            //改エントリーを有効にするための記述
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
        </article>

      </article>
      <!-- [END]ページ -->
  <?php
    endwhile;
  endif;
  ?>
</div>
<!-- [END]２カラムのインナー -->

<!-- [START]フッター（黒） -->
<?php get_footer('ul'); ?>
<!-- [END]フッター（黒） -->
