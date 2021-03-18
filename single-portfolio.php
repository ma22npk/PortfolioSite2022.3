<!-- ヘッダーPHP -->
<?php get_header('ul'); ?>
<!-- トップページサイドバー -->
<?php get_template_part('sidebar/sidebar-ul'); ?>
<!-- ポートフォリオ掲載用ページ -->
<main>
  <!-- [START]２カラムのインナー -->
  <div class="two_column-inner">
    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
    ?>
        <!-- [START]エントリー -->
        <article <?php post_class(array('entry', 'entry-pf')); ?>>
          <!-- [START]投稿タイプのラベルを表示 -->
          <div class="entry-category-parent">
            <?php echo esc_html(get_post_type_object(get_post_type())->label); ?>
          </div>
          <!-- [END]投稿タイプのラベルを表示 -->
          <!-- [START]サムネイル -->
          <div class="entry-tmb">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('large');
            }
            ?>
          </div>
          <!-- [END]サムネイル -->
          <h1 class="entry-ttl">
            <?php the_title(); ?>
          </h1>
          <!-- [START]記事の本文 -->
          <div class="entry-body">
            <!-- [START]本文 -->
            <?php
            //本文の表示
            the_content(); ?>
            <!-- [END]本文 -->

            <table class="pf-table">
              <tbody>
                <!-- [START]外部URL -->
                <?php if (get_field('external_url')) : ?>
                  <tr>
                    <td class="ttl">URL</td>
                    <td class="desc">
                      <a><?php the_field('external_url'); ?></a>
                    </td>
                  </tr>
                <?php endif; ?>
                <!-- [END]外部URL -->
                <!-- [START]製作期間 -->
                <tr>
                  <?php if (get_field('period')) : ?>
                    <td class="ttl">製作期間</td>
                    <td class="desc">
                      <?php the_field('period'); ?>
                    </td>
                  <?php endif; ?>
                </tr>
                <!-- [END]製作期間 -->
                <!-- [START]担当ポジション -->
                <tr>
                  <?php if (get_field('position')) : ?>
                    <td class="ttl">ポジション</td>
                    <td class="desc">
                      <?php the_field('position'); ?>
                    </td>
                  <?php endif; ?>
                </tr>
                <!-- [END]担当ポジション -->
                <!-- [START]使用スキル -->
                <tr>
                  <?php if (get_field('using_skill')) : ?>
                    <td class="ttl">使用スキル</td>
                    <td class="desc">
                      <?php the_field('using_skill'); ?>
                    </td>
                  <?php endif; ?>
                </tr>
                <!-- [END]使用スキル -->
                <!-- [START]プロジェクト人数 -->
                <tr>
                  <?php if (get_field('pj_count')) : ?>
                    <td class="ttl">人数</td>
                    <td class="desc">
                      <?php the_field('pj_count'); ?>
                    </td>
                  <?php endif; ?>
                </tr>
                <!-- [END]プロジェクト人数 -->
                <!-- [START]OS / DB -->
                <tr>
                  <?php if (get_field('osdb')) : ?>
                    <td class="ttl">OS / DB</td>
                    <td class="desc">
                      <?php the_field('osdb'); ?>
                    </td>
                  <?php endif; ?>
                </tr>
                <!-- [END]OS / DB -->
                <!-- [START]FW / ツール -->
                <tr>
                  <?php if (get_field('fw_tool')) : ?>
                    <td class="ttl">FW / ツール</td>
                    <td class="desc">
                      <?php the_field('fw_tool'); ?>
                    </td>
                  <?php endif; ?>
                </tr>
                <!-- [END]FW / ツール -->
                <!-- [START]備考 -->
                <tr>
                  <?php if (get_field('note')) : ?>
                    <td class="ttl">備考</td>
                    <td class="desc">
                      <?php the_field('note'); ?>
                    </td>
                  <?php endif; ?>
                </tr>
                <!-- [END]備考 -->
              </tbody>
            </table>
          </div>
          <!-- [END]記事の本文 -->
        </article>
        <!-- [END]エントリー -->
    <?php
      endwhile;
    endif;
    ?>
  </div>
  <!-- [END]２カラムのインナー -->
</main>
<!-- [START]フッター（黒） -->
<?php get_footer('ul'); ?>
<!-- [END]フッター（黒） -->
