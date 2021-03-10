<?php get_header('ul'); ?>
<!-- サイドバーPHP -->
<?php get_sidebar('ul'); ?>

<!-- [START]２カラムのインナー -->
<div class="two_column-inner">
  <!-- [START]ページ -->
  <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
  ?>
      <div class="entry">
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

        <article class="entry-content">
          <div class="entry-tmb">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('large');
            }
            ?>
          </div>
          <h1 class="entry-ttl">
            <?php the_title(); ?>
          </h1>
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
