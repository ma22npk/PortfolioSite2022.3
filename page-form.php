<?php
/*
Template Name: form
*/
?>

<!-- ヘッダーPHP -->
<?php get_header('ul'); ?>
<!-- サイドバーPHP -->
<?php get_sidebar('ul'); ?>
<!-- ローダー -->
<?php get_template_part('template-parts/lorder'); ?>

<!-- [START]２カラムのインナー -->
<div class="two_column-inner">
  <!-- [START]エントリー -->
  <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
  ?>
      <div class="entry page-form">
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

      </div>
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
