<!-- ヘッダーPHP -->
<?php get_header('top'); ?>
<!-- サイドバーPHP -->
<?php get_template_part('sidebar/sidebar-top'); ?>

<!-- [START] MV-->
<section id="top-mv" class="section__mv block">
  <div class="hero-view__inner inner">
    <div class="hero-view__bg">
      <div class="bg__cont"></div>
      <div class="img-slider">
        <img class="img-slider-base" src="<?php echo get_template_directory_uri() ?>/images/mv_logo-big.png" alt="FUSION">
        <img class="img-slider-moving" src="<?php echo get_template_directory_uri() ?>/images/mv_logo-big.png" alt="FUSION">
        <img class="img-slider-moving" src="<?php echo get_template_directory_uri() ?>/images/mv_logo-big.png" alt="FUSION">
        <img class="img-slider-moving" src="<?php echo get_template_directory_uri() ?>/images/mv_logo-big.png" alt="FUSION">
        <img class="img-slider-moving" src="<?php echo get_template_directory_uri() ?>/images/mv_logo-big.png" alt="FUSION">
        <img class="img-slider-moving" src="<?php echo get_template_directory_uri() ?>/images/mv_logo-big.png" alt="FUSION">
        <img class="img-slider-moving" src="<?php echo get_template_directory_uri() ?>/images/mv_logo-big.png" alt="FUSION">
        <img class="img-slider-moving" src="<?php echo get_template_directory_uri() ?>/images/mv_logo-big.png" alt="FUSION">
      </div>
      <!-- /.img-slider -->
    </div>
    <!-- /.bg__cont -->
  </div>
  <!-- /.hero-view__bg -->
  </div>
  <!-- /.hero-view__inner inner -->
</section>
<!-- [END] MV-->
<!-- [START]ポートフォリオセクション -->
<section id="top-portfolio" class="section__portfolio block">
  <!-- [START]インナー -->
  <div class="two_column-inner">
    <h2 class="section__ttl" bg-hidden>Portfolio</h2>
    <div class="card-items">
      <?php $args = array(
        'numberposts' => 6, //表示したい記事の数
        'post_type' => 'portfolio' //カスタム投稿で作成した投稿タイプ
      );
      $customPosts = get_posts($args);
      if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
      ?>
          <!-- [START]カードアイテム -->
          <div class="card">
            <p class="card-tmb">
              <?php
              if (has_post_thumbnail()) {
                // アイキャッチ画像が設定されてれば大サイズで表示
                the_post_thumbnail('large');
              } else {
                // なければnoimage画像をデフォルトで表示
                echo '<img src="' . esc_url(get_template_directory_uri()) . '/images/dummy_img_360x200.png" alt="ポートフォリオ">';
              }
              ?>
            </p>
            <h2 class="card-ttl">
              <?php the_title(); //タイトルを表示
              ?>
            </h2>
            <div class="card-desc">
              <?php
              //本文の表示
              the_content(); ?>
            </div>
          </div>
          <!-- [END]カードアイテム -->
        <?php endforeach; ?>
      <?php else : //記事が無い場合
      ?>
        <p>portfolioの記事がありません。</p>
      <?php endif;
      wp_reset_postdata(); //クエリのリセット
      ?>
    </div>
  </div>
  <!-- [END]インナー -->
</section>
<!-- [END]ポートフォリオセクション -->

<!-- [START]ワークスセクション -->
<section id="top-works" class="section__pf block">
  <div class="two_column-inner">
    <!-- [START]Worksのタイトルとスライダーボタンのセットのエリア -->
    <div class="slider__section__ttl-area">
      <h2 class="section__ttl" bg-hidden>Works</h2>
      <!-- [START]スライダーボタン -->
      <div class="slider__btn-wrapper works_slider-btn-wrapper">
        <!-- プレビューボタン -->
        <!-- ネクストボタン -->
      </div>
      <!-- [END]スライダーボタン -->
    </div>
    <!-- [END]Worksのタイトルとスライダーボタンのセットのエリア -->
    <p class="section__lead" data-fadeIn>自分の経歴です。</p>
    <!-- [START]スライダー -->
    <ul class="slider works_slider">
      <?php $posts = get_posts('numberposts=10&category=2');
      global $post; ?>
      <?php if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
          <!-- [START]スライダーアイテム -->
          <li>
            <a href="<?php the_permalink(); //記事のリンクを表示
                      ?>">
              <div class="slider_list-inner">
                <!-- [START]サムネイル -->
                <div class="slide_tmb">
                  <div class="slide_tmb-mask">
                  </div>
                  <div class="background-image" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)">
                  </div>
                </div>
                <!-- [END]サムネイル -->
                <!-- [START]Worksの情報表示エリア -->
                <div class="info-wrapper-pc">
                  <p class="info-category">
                    <?php
                    $categories = get_the_category();
                    foreach ($categories as $category) {
                      // カテゴリーIDを取得
                      $cat_id = $category->term_id;
                      // 子孫タームのIDを配列で取得
                      $cat_child = get_term_children($cat_id, 'category');
                      // 子孫タームのIDがない場合
                      if (!$cat_child) {
                        echo '<div class="info-category"><a href="' . get_category_link($id) . '">' . $category->name . '</a></div>';
                        break;
                      }
                    }
                    ?>
                  </p>
                  <h3 class="info-ttl">
                    <?php the_title(); //タイトルを表示
                    ?>
                  </h3>
                  <a href="<?php the_permalink(); //記事のリンクを表示
                            ?>" class="btn-more" id="btn-more-works">
                    More</a>
                </div>
                <!-- [END]Worksの情報表示エリア -->
              </div>

          </li>
          <!-- [END]スライダーアイテム -->
      <?php endforeach;
      endif; ?>
    </ul>
    <!-- [END]スライダー -->
  </div>

</section>
<!-- [END]ワークスセクション -->
<!-- [START]CSRセクション -->
<section id="top-csr" class="section__pf block">
  <div class="two_column-inner">
    <!-- [START]csrのタイトルとスライダーボタンのセットのエリア -->
    <div class="slider__section__ttl-area">
      <h2 class="section__ttl" bg-hidden>CSR</h2>
      <!-- [START]スライダーボタン -->
      <div class="slider__btn-wrapper csr_slider-btn-wrapper">
        <!-- プレビューボタン -->
        <!-- ネクストボタン -->
      </div>
      <!-- [END]スライダーボタン -->
    </div>
    <!-- [END]csrのタイトルとスライダーボタンのセットのエリア -->
    <p class="section__lead" data-fadeIn>自分の経歴です。</p>
    <!-- [START]スライダー -->
    <ul class="slider csr_slider">
      <?php $args = array(
        'numberposts' => 5, //表示したい記事の数
        'post_type' => 'csr' //カスタム投稿で作成した投稿タイプ
      );
      $customPosts = get_posts($args);
      if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
      ?>
          <!-- [START]スライダーアイテム -->
          <li>
            <div class="slider_list-inner">
              <!-- [START]サムネイル -->
              <div class="slide_tmb slide_tmb-mask">
                <!-- <div class="slide_tmb-mask"></div> -->
                <div class="background-image" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)"></div>
              </div>
              <!-- [END]サムネイル -->
              <!-- [START]PC画面のcsrの情報表示エリア -->
              <div class="info-wrapper-pc">
                <p class="info-category">
                  <?php
                  $terms = get_the_terms($post->ID, 'csr');
                  if ($terms) {
                    echo $terms[1]->name;
                  }
                  ?>
                </p>
                <h3 class="info-ttl">
                  <?php the_title(); //タイトルを表示
                  ?>
                </h3>
              </div>
              <!-- [END]PC画面のcsrの情報 -->
              <!-- [START]csrの情報表示エリア -->
            </div>
          </li>
          <!-- [END]スライダーアイテム -->
        <?php endforeach; ?>
      <?php else : //記事が無い場合
      ?>
        <p>カスタム投稿記事がありません。</p>
      <?php endif;
      wp_reset_postdata(); //クエリのリセット
      ?>
    </ul>
    <!-- [END]スライダー -->
  </div>
</section>
<!-- [END]CSRセクション -->

<!-- [START] ニュースセクション -->
<section id="top-news" class="section__news block">
  <div class="two_column-inner">
    <h2 class="section__ttl" bg-hidden>News</h2>
    <p class="section__lead" data-fadeIn>自分の経歴です。</p>
    <!-- [START]ニュースアイテムス -->
    <div class="news__items">
      <?php $args = array(
        'numberposts' => 5, //表示したい記事の数
        'post_type' => 'news' //カスタム投稿で作成した投稿タイプ
      );
      $customPosts = get_posts($args);
      if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
      ?>
          <!-- [START]関連URLの開始タグ -->
          <?php if (get_field('news_url')) : ?>
            <a target="_blank" class="top_news-link" href="<?php the_field('news_url'); ?>">
            <?php endif; ?>
            <!-- [END]関連URLの開始タグ -->
            <!-- [START]ニュースアイテム -->
            <article class="news__item">
              <!-- ニュースの日付 -->
              <?php if (get_field('news_date')) : ?>
                <time class="news__item-date">
                  <?php the_field('news_date'); ?>
                </time>
              <?php endif; ?>
              <div class="news__item-txt-wrapper">
                <!-- ニュースタイトル -->
                <h2 class="news__item-ttl">
                  <?php the_title(); //タイトルを表示
                  ?>
                </h2>
                <!-- ニュースの説明文 -->
                <?php if (get_field('news_desc')) : ?>
                  <p class="news__item-desc">
                    <?php the_field('news_desc'); ?>
                  </p>
                <?php endif; ?>
              </div>
            </article>
            <!-- [END]ニュースアイテム -->
            <!-- [START]関連URLの閉じタグ -->
            <?php if (get_field('news_url')) : ?>
            </a>
          <?php endif; ?>
          <!-- [END]関連URLの閉じタグ -->
        <?php endforeach; ?>
      <?php else : //記事が無い場合
      ?>
        <p>カスタム投稿記事がありません。</p>
      <?php endif;
      wp_reset_postdata(); //クエリのリセット
      ?>
    </div>
    <!-- [END]ニュースアイテムス -->
</section>
<!-- [END] ニュースセクション -->

<!-- [START]カンパニーセクション -->
<section id="top-profile" class="section__profile block">
  <div class="two_column-inner">
    <h2 class="section__ttl" bg-hidden>profile</h2>
    <!-- [START]会社情報のエリア -->
    <ul class="profile__infos">
      <!-- 会社名 -->
      <li class="profile__info">
        <div class="profile__info-ttl">会社名</div>
        <div class="profile__info_desc">
          <p class="info_desc-primary">
            株式会社FUSION
          </p>
        </div>
      </li>
      <!-- 所在地 -->
      <li class="profile__info profile__info-location">
        <div class="profile__info-ttl">所在地</div>
        <div class="profile__info_desc">
          <p class="info_desc-primary">東京都渋谷区富ヶ谷1丁目45番13号<br class="br-sp">
            スプリングビル3階</p>
          <div class="info_desc-secondary">
            東京メトロ千代田線 代々木公園駅 1番出口から徒歩4分<br>
            小田急線 代々木八幡駅 南口から徒歩5分
          </div>
          <!-- マップボタン -->
          <a class="btn-map" id="btn-map" target="_blank" href="https://www.google.com/maps/place/%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BEFUSION/@35.6654408,139.6834708,15.27z/data=!3m1!5s0x6018f34cc22af617:0xa62e652391b4c253!4m5!3m4!1s0x6018f36b4b22d24d:0x7da24e9dae7c1b63!8m2!3d35.6677723!4d139.6900137">Map
          </a>
        </div>
      </li>
      <li class="profile__info">
        <div class="profile__info-ttl">役員</div>
        <div class="profile__info_desc">
          <p class="info_desc-primary">
            代表取締役 前田遼介
          </p>
          <div class="info_desc-secondary">
            サイバーエージェント入社後、若年層向けマーケティング子会社CA Young Labの設立に参画。<br>
            2018年株式会社新R25との統合により、株式会社CyberNowボード・セールスマネージャーに就任。<br>
            2019年株式会社チョコレイト入社。2020年3月株式会社FUSIONを設立、代表取締役に就任。
          </div>
          <p class="info_desc-primary">取締役 廣瀬聡</p>
          <div class="info_desc-secondary">
            サイバーエージェント入社後、アカウントプランナーとして大手IT企業の複数ポートフォリオを担当し、売上最大化・ユーザー数増加のためのプロモーション企画に従事。<br>
            2020年株式会社FUSIONを設立、取締役に就任。
          </div>
        </div>
      </li>
      <li class="profile__info">
        <div class="profile__info-ttl">設立</div>
        <div class="profile__info_desc">
          <p class="info_desc-primary">2020年3月9日</p>
        </div>
      </li>
      <li class="profile__info">
        <div class="profile__info-ttl">事業内容</div>
        <div class="profile__info_desc">
          <p class="info_desc-primary">
            デジタルマーケティング事業
          </p>
        </div>
      </li>
      <li class="profile__info">
        <div class="profile__info-ttl">従業員</div>
        <div class="profile__info_desc">
          <p class="info_desc-primary">10名(業務委託含む)</p>
        </div>
      </li>
    </ul>
    <!-- [END]会社情報のエリア -->
  </div>
</section>
<!-- [END]カンパニーセクション -->

<!-- [START]リクルートセクション -->
<section id="top-career" class="section__career block">
  <!-- [START]２カラムのインナー -->
  <div class="two_column-inner">
    <h2 class="section__ttl" bg-hidden>Career</h2>
    <p class="section__lead" data-fadeIn>自分の経歴です。</p>
    <h3 class="career_sub_ttl">募集職種</h3>
    <!-- [START]募集要項のアコーディオンの集まり -->
    <div class="career__accordion-items">

      <?php $args = array(
        'numberposts' => 5, //表示したい記事の数
        'post_type' => 'career' //カスタム投稿で作成した投稿タイプ
      );
      $customPosts = get_posts($args);
      if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
      ?>
          <!-- アコーディオン本体 -->
          <div class="career__accordion">
            <!-- アコーディオン上部 （常に表示）-->
            <dt class="career__accordion-header">
              <h2 class="career__accordion-ttl">
                <?php the_title(); //タイトルを表示
                ?>
              </h2>
              <label class="career__accordion-switch"><span></span></label>
            </dt>
            <!-- アコーディオン解答部（開く場所） -->
            <dd class="career__accordion_body">
              <!-- アコーディオンユニット -->
              <?php if (get_field('duty_detail')) : ?>
                <div class="career__content-unit">
                  <h3 class="career__content-ttl">職務内容</h3>
                  <p class="career__content-txt"><?php the_field('duty_detail'); ?></p>
                </div>
              <?php endif; ?>
              <!-- アコーディオンユニット -->
              <?php if (get_field('working_place')) : ?>
                <div class="career__content-unit">
                  <h3 class="career__content-ttl w-location">勤務地: <?php the_field('working_place'); ?></h3>
                </div>
              <?php endif; ?>
              <!-- アコーディオンユニット -->
              <?php if (get_field('qualification')) : ?>
                <div class="career__content-unit">
                  <h3 class="career__content-ttl">応募資格</h3>
                  <p class="career__content-txt"><?php the_field('qualification'); ?></p>
                </div>
              <?php endif; ?>
              <!-- アコーディオンユニット -->
              <?php if (get_field('character')) : ?>
                <div class="career__content-unit">
                  <h3 class="career__content-ttl">求める人物像</h3>
                  <p class="career__content-txt"><?php the_field('character'); ?></p>
                </div>
              <?php endif; ?>
              <?php if (get_field('duty_detail')) : ?>
                <div class="career__content-unit">
                  <h3 class="career__content-ttl">待遇</h3>
                  <div class="career__content">
                    <!-- 雇用形態のユニット -->
                    <?php if (get_field('employment_status')) : ?>
                      <div class="treatment-unit">
                        <p class="treatment-ttl">雇用形態: </p>
                        <span class="treatment-txt"><?php the_field('employment_status'); ?></span>
                      </div>
                    <?php endif; ?>
                    <!-- 雇用形態のユニット -->
                    <?php if (get_field('salary')) : ?>
                      <div class="treatment-unit">
                        <p class="treatment-ttl">社員給与: <span class="treatment-txt"><?php the_field('salary'); ?></span></p>

                      </div>
                    <?php endif; ?>
                    <!-- 雇用形態のユニット -->
                    <?php if (get_field('working_times')) : ?>
                      <div class="treatment-unit">
                        <p class="treatment-ttl">勤務時間: <span class="treatment-txt"><?php the_field('working_times'); ?></span></p>

                      </div>
                    <?php endif; ?>
                    <!-- 雇用形態のユニット -->
                    <?php if (get_field('leave')) : ?>
                      <div class="treatment-unit">
                        <p class="treatment-ttl">休暇・休日: <span class="treatment-txt"><?php the_field('leave'); ?></span></p>

                      </div>
                    <?php endif; ?>
                    <!-- 雇用形態のユニット -->
                    <?php if (get_field('insurance')) : ?>
                      <div class="treatment-unit">
                        <p class="treatment-ttl">保険: <span class="treatment-txt"><?php the_field('insurance'); ?></span></p>

                      </div>
                    <?php endif; ?>
                    <!-- 雇用形態のユニット -->
                    <?php if (get_field('allowance')) : ?>
                      <div class="treatment-unit">
                        <p class="treatment-ttl">保険: <span class="treatment-txt"><?php the_field('allowance'); ?></span></p>

                      </div>
                    <?php endif; ?>
                    <!-- 雇用形態のユニット -->
                    <?php if (get_field('allowance')) : ?>
                      <div class="treatment-unit">
                        <p class="treatment-ttl">諸手当<span class="treatment-txt"><?php the_field('allowance'); ?></span></p>

                      </div>
                    <?php endif; ?>
                    <!-- 雇用形態のユニット -->
                    <?php if (get_field('system')) : ?>
                      <div class="treatment-unit">
                        <p class="treatment-ttl">制度<span class="treatment-txt"><?php the_field('system'); ?></span></p>

                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              <?php endif; ?>
            </dd>
            <!-- アコーディオン解答部（開く場所） -->
          </div>
          <!-- アコーディオン本体 -->
        <?php endforeach; ?>
      <?php else : //記事が無い場合
      ?>
        <p>リクルートの記事がありません。</p>
      <?php endif;
      wp_reset_postdata(); //クエリのリセット
      ?>
    </div>
    <!-- [END]募集要項のアコーディオンの集まり -->

    <!-- [START]エントリーボタン -->
    <div class="button-entry-wrapper">
      <!-- エントリーボタン -->
      <a target="_blank" href="<?php echo home_url('career-entry-form'); ?>" id="entry-btn-top" class="button-entry">
        ENTRY
      </a>
      <!-- エントリーボタン -->
    </div>
    <!-- [END]エントリーボタン -->
  </div>

  <!-- [END]２カラムのインナー -->
</section>
<!-- [END]リクルートセクション -->

<!-- [START]コンタクトアスボタンエリア -->
<div id="section__skills" class="section__skills block">
  <!-- コンタクトアスボタン -->
  <a target="_blank" href="<?php echo home_url('contact-form'); ?>" class="button-entry contact_us-btn-top" id="contact_us-btn-top">
    CONTACT US
  </a>
</div>
</div>
<!-- [END]コンタクトアスボタンエリア -->

<!-- フッターPHP -->
<?php get_footer('top'); ?>
