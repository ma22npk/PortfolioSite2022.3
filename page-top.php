<?php
/*
Template Name: top
*/
?>
<!-- ヘッダーPHP -->
<?php get_header('dev'); ?>
<!-- トップページサイドバー -->
<?php get_template_part('sidebar/sidebar-top'); ?>
<!-- スクロールを促す矢印 -->
<?php get_template_part('template-parts/scrollarrowtop'); ?>

<!-- [START] MV-->
<section id="top-mv" class="section__mv block" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/top_bg3.png);">
  <div class="mv__container is-load">
    <h1 class="mv__ttl">
      <?php get_template_part('template-parts/mvlogo'); ?>
    </h1>
    <p class="mv__catch">
      お忙しい中ご覧いただきありがとうございます。<br>
      ぜひ、最後まで見ていただけると嬉しいです。
    </p>
  </div>
</section>
<!-- [END] MV-->
<!-- [START]プロフィールセクション -->
<section id="top-profile" class="section__profile block">
  <div class="two_column-inner">
    <!-- [START]要素のチャンク -->
    <div chunk>
      <h2 class="section__ttl" bg-hidden>Profile</h2>
      <p class="section__lead" data-fadeIn>私のプロフィールです。<br>
        私は飲食業界に10年以上携わっていた経験から、現在コロナ禍で苦しむ業界や仲間の力になれるような人材になりたいと考えております。<br>
      </p>
      <div class="profile__container">
        <div class="profile__img-wrapper" data-fadeIn-l>
          <!-- プロフィールのイメージ画像 -->
          <p class="profile__avatar">
            <img src="<?php echo get_template_directory_uri() ?>/images/profile_img.png" alt="松本昂大">
          </p>
          <div class="profile__sns-wrapper">
            <!-- GitHub -->
            <a class="profile__sns" href="https://github.com/ma22npk" target=”_blank”><i class="fab fa-github"></i></i></a>
            <!-- ツイッター -->
            <a class="profile__sns" href="https://twitter.com/takahirocook" target=”_blank”><i class="fab fa-twitter"></i></a>
            <!-- ブログ -->
            <a class="profile__sns" href="https://ko-matsumoto.com/" target=”_blank”><i class="fas fa-blog"></i></a>
          </div>
        </div>
        <!-- [START]自分の情報のエリア -->
        <ul class="profile__infos" data-fadeIn-b>
          <!-- 名前 -->
          <li class="profile__info">
            <div class="profile__info-ttl">名前</div>
            <div class="profile__info_desc">
              <p class="info_desc-primary">
                松本 昂大 ( まつもと こうた )
              </p>
            </div>
          </li>
          <!-- 誕生日 -->
          <li class="profile__info">
            <div class="profile__info-ttl">生年月日</div>
            <div class="profile__info_desc">
              <p class="info_desc-primary">
                1986年 5/26
              </p>
            </div>
          </li>
          <!-- 血液型 -->
          <li class="profile__info">
            <div class="profile__info-ttl">血液型</div>
            <div class="profile__info_desc">
              <p class="info_desc-primary">
                A型
              </p>
            </div>
          </li>
          <!-- 出身地 -->
          <li class="profile__info">
            <div class="profile__info-ttl">出身地</div>
            <div class="profile__info_desc">
              <p class="info_desc-primary">
                長野県 長野市
              </p>
            </div>
          </li>
          <!-- 居住地 -->
          <li class="profile__info">
            <div class="profile__info-ttl">居住地</div>
            <div class="profile__info_desc">
              <p class="info_desc-primary">
                千葉県 松戸市
              </p>
            </div>
          </li>
          <!-- 学習言語 -->
          <li class="profile__info">
            <div class="profile__info-ttl">学習言語</div>
            <div class="profile__info_desc">
              <p class="info_desc-primary">
                Sass, HTML, CSS, JavaScript ,Java, SQL
              </p>
            </div>
          </li>
          <!-- 体重 -->
          <li class="profile__info">
            <div class="profile__info-ttl">FW
            </div>
            <div class="profile__info_desc">
              <p class="info_desc-primary">
                jQuery, Vue.js, Bootstrap, WordPress
              </p>
            </div>
          </li>
          <!-- ツール -->
          <li class="profile__info">
            <div class="profile__info-ttl">ツール</div>
            <div class="profile__info_desc">
              <p class="info_desc-primary">
                Git, AdobeXD, Slack, Backlog, ChatWork, Trello等
              </p>
            </div>
          </li>
          <!-- 特技 -->
          <li class="profile__info">
            <div class="profile__info-ttl">特技</div>
            <div class="profile__info_desc">
              <p class="info_desc-primary">料理、サイト制作、ゲーム実況</p>
            </div>
          </li>
          <!-- 資格 -->
          <li class="profile__info">
            <div class="profile__info-ttl">資格</div>
            <div class="profile__info_desc">
              <p class="info_desc-primary">
                調理師免許、普通自動車免許
              </p>
            </div>
          </li>
          <!-- 趣味 -->
          <li class="profile__info">
            <div class="profile__info-ttl">趣味</div>
            <div class="profile__info_desc">
              <p class="info_desc-primary">
                料理、ゲーム、音楽(邦ロック, 洋楽ポップス, Nightcore)
              </p>
            </div>
          </li>
        </ul>
        <!-- [END]情報のエリア -->
      </div>
    </div>
    <!-- [END]要素のチャンク -->
    <!-- [START]要素のチャンク -->
    <div chunk>
      <!-- [START]レジュメ -->
      <ul class="profile__resumes">
        <!-- 1. SUMMARY（要約） -->
        <dl class="profile__resume">
          <dt class="resume__ttl" bg-hidden>
            職務要約
          </dt>
          <dd class="resume__data" data-fadeIn-b>
            2008年に調理師学校卒業後から 12年間 飲食業界で調理師としての活動しておりました。<br>
            料理長として就任した鉄板焼加屋で、Excel等のツールを用いた現場の改善と仕組み化を実施。<br>
            1年でクレーム数を1/4 に削減、新人教育の 2ヶ月間から2週間に短縮 などを達成。<br>
            その経験から「ITやソフトウェアの力で家族や飲食産業を豊かにする」と目標を掲げ、ITの道を志しました。<br>
            2020年10月 株式会社blue入社。Java、PostgreSQL等の半年分のカリキュラムを約2ヶ月で完了。<br>
            現在、コロナウイルスの影響により休業し、得意であったWeb制作をしながら生計を立てております。
          </dd>
        </dl>
        <!-- OBJECTIVE（希望職種） -->
        <dl class="profile__resume">
          <dt class="resume__ttl" bg-hidden>
            希望職種
          </dt>
          <dd class="resume__data" data-fadeIn-b>
            フロントエンドエンジニアを目指して転職活動中です。<br>
            現在 副業でWeb制作をしており、また経験前職ででメニューやチラシのデザインをしていた経験から、UIUXに強い興味を持っております。<br>
          </dd>
        </dl>
        <dl class="profile__resume">
          <dt class="resume__ttl" bg-hidden>
            将来のビジョン
          </dt>
          <dd class="resume__data" data-fadeIn-b>
            <p class="lead">
              私の夢は、前職で与えていた以上の価値を人に与えたいと考えています。
              そのために、クライアントに多くの提案や柔軟な対応ができる技能を持つ人材を目指します。
              自分にできる事を貪欲に増やし、クライアントや仲間に信頼されるような人材になります。
            </p>
          </dd>
        </dl>
        <!-- ビジョン -->
        <dl class="profile__resume">
          <ul class="future_visions">
            <li class="future_vision">
              <p class="future_vision-ttl" bg-hidden>
                短期的な目標
              </p>
              <p class="future_vision-desc" data-fadeIn-b>
                クライアントにより多く質の良い価値をを提供出来る人材になりたいと考えています。<br>
                理由は、私が初めてWeb制作のお仕事をした際、自身の技術力の低さから納期に間に合わせることに精一杯になってしまた経験がとても悔しかったからです。<br>
                私はその経験から、自身の成長より成果の質と提案の量に拘るように反省し、そのために高い技能をつけたいと強く思いました。<br>
                そのため、普段の業務ではコミュニケーション能力とタスク管理能力向上に重きを置いて携わりつつ、勉強会や自身のブログでのアウトプットを通じて技術のキャッチアップをしていきます。
              </p>
            </li>
            <li class="future_vision">
              <p class="future_vision-ttl" bg-hidden>
                長期的な目標
              </p>
              <p class="future_vision-desc" data-fadeIn-b>
                3年以内を目処にマネジメント方面に進み、個人の限界を超えた価値を生みたい考えております。<br>
                そのためには、高いレベルのビジネスの感性が不可欠だと考えており、ヒューマンスキルだけでなくマーケティングの感性も磨き、「あなたに頼んでよかった！」と言われる人材を目指します。<br>
                また、新しいノウハウを生むことや仕組みを考えることに強い興味を持っているため、新たな自社サービスの立ち上げと運用に携わり、成果を挙げることが目標です。
              </p>
            </li>
          </ul>
        </dl>
      </ul>
      <!-- [END]レジュメ -->
    </div>
    <!-- [END]要素のチャンク -->
  </div>
</section>
<!-- [END]プロフィールセクション -->
<!-- [START]キャリアセクション -->
<section id="top-career" class="section__career block">
  <!-- [START]２カラムのインナー -->
  <div class="two_column-inner">
    <!-- [START]要素のチャンク -->
    <div chunk>
      <h2 class="section__ttl" bg-hidden>Career</h2>
      <p class="section__lead" data-fadeIn>私の経歴です。<br>
        学生時代に「先輩と飲食店を経営する」ことを夢見て調理師を志し、2016年に夢が叶えることができました。<br>
        現在は「コロナ禍で苦しむ仲間たちを助けるような人材になりたい」と考え、転職活動をしております。
      </p>
      <!-- [START]前職の写真エリア -->
      <ul class="career__imges">
        <!-- [START]キャリアの写真 -->
        <li class="career__imges-item">
          <div class="career__imge" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/career_balling.png)" data-fadeIn-l></div>
          <span class="caption" data-fadeIn>
            社内ボーリング大会中にサプライズで誕生日のお祝いをしてもらいました。
          </span>
        </li>
        <!-- [END]キャリアの写真 -->
        <!-- [START]キャリアの写真 -->
        <li class="career__imges-item">
          <div class="career__imge" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/nishika_seiki.png)" data-fadeIn-l></div>
          <span class="caption" data-fadeIn>
            ずっとお店を支えてくれたスタッフの送別会です。<br>
            コロナ禍で大きな打撃を受けている業界にも影響を与えるエンジニアになりたいと考えています。
          </span>
        </li>
        <!-- [END]キャリアの写真 -->
      </ul>
    </div>
    <!-- [END]前職の写真エリア -->
    <!-- [START]要素のチャンク -->
    <div chunk>
      <h3 class="career_sub_ttl" bg-hidden>職歴</h3>
      <!-- [START]募集要項のアコーディオンの集まり -->
      <div class="career__accordion-items">
        <?php $args = array(
          'numberposts' => 10, //表示したい記事の数
          'post_type' => 'career' //カスタム投稿で作成した投稿タイプ
        );
        $customPosts = get_posts($args);
        if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
        ?>
            <!-- アコーディオン本体 -->
            <div class="career__accordion">
              <!-- アコーディオン上部 （常に表示）-->
              <dt class="career__accordion-header" data-fadeIn-b>
                <h2 class="career__accordion-ttl">
                  <?php if (get_field('period')) : ?>
                    <span class="treatment-txt">
                      <?php the_field('period'); ?>
                    </span>
                    <?php the_title(); //企業名を表示
                    ?>
                  <?php endif; ?>
                </h2>
                <label class="career__accordion-switch"><span></span></label>
              </dt>
              <!-- アコーディオン解答部（開く場所） -->
              <dd class="career__accordion_body">
                <?php if (get_field('position')) : ?>
                  <div class="treatment-unit">
                    <p class="treatment-ttl">部署・ポジション: <span class="treatment-txt"><?php the_field('position'); ?></span></p>
                  </div>
                <?php endif; ?>
                <!-- 雇用形態のユニット -->
                <!-- 雇用形態のユニット -->
                <?php if (get_field('post')) : ?>
                  <div class="treatment-unit">
                    <p class="treatment-ttl">役職: <span class="treatment-txt"><?php the_field('post'); ?></span></p>
                  </div>
                <?php endif; ?>
                <!-- 雇用形態のユニット -->
                <?php if (get_field('main_responsible')) : ?>
                  <div class="treatment-unit">
                    <p class="treatment-ttl">主な担当: <span class="treatment-txt"><?php the_field('main_responsible'); ?></span></p>
                  </div>
                <?php endif; ?>
                <!-- アコーディオンユニット -->
                <?php if (get_field('task')) : ?>
                  <div class="career__content-unit">
                    <h3 class="career__content-ttl">課題と要因</h3>
                    <p class="career__content-txt"><?php the_field('task'); ?></p>
                  </div>
                <?php endif; ?>
                <!-- アコーディオンユニット -->
                <?php if (get_field('activity')) : ?>
                  <div class="career__content-unit">
                    <h3 class="career__content-ttl">問題解決のための行動</h3>
                    <p class="career__content-txt"><?php the_field('activity'); ?></p>
                  </div>
                <?php endif; ?>
                <!-- アコーディオンユニット -->
                <?php if (get_field('achievement')) : ?>
                  <div class="career__content-unit">
                    <h3 class="career__content-ttl">行動の結果・功績</h3>
                    <p class="career__content-txt"><?php the_field('achievement'); ?></p>
                  </div>
                <?php endif; ?>
                <!-- アコーディオンユニット -->
                <?php if (get_field('supplement')) : ?>
                  <div class="career__content-unit">
                    <h3 class="career__content-ttl">備考欄</h3>
                    <p class="career__content-txt"><?php the_field('supplement'); ?></p>
                  </div>
                <?php endif; ?>
              </dd>
              <!-- アコーディオン解答部（開く場所） -->
            </div>
            <!-- アコーディオン本体 -->
          <?php endforeach; ?>
        <?php else : //記事が無い場合
        ?>
          <p>自分の経歴がありません。</p>
        <?php endif;
        wp_reset_postdata(); //クエリのリセット
        ?>
      </div>
      <!-- [END]募集要項のアコーディオンの集まり -->
    </div>
    <!-- [END]要素のチャンク -->
  </div>
  <!-- [END]２カラムのインナー -->
</section>
<!-- [END]キャリアセクション -->

<!-- [START]ポートフォリオセクション -->
<section id="top-pf" class="section__pf">
  <div class="two_column-inner">
    <!-- [START]要素のチャンク -->
    <div chunk>
      <!-- [START]csrのタイトルとスライダーボタンのセットのエリア -->
      <div class="slider__section__ttl-area">
        <h2 class="section__ttl" bg-hidden-bl>Portfolio</h2>
        <!-- [START]スライダーボタン -->
        <div class="slider__btn-wrapper csr_slider-btn-wrapper" data-fadeIn-b>
          <!-- プレビューボタン -->
          <!-- ネクストボタン -->
        </div>
        <!-- [END]スライダーボタン -->
      </div>
      <!-- [END]csrのタイトルとスライダーボタンのセットのエリア -->
      <p class="section__lead" data-fadeIn>
        私が過去に製作したポートフォリオです。<br>
        家族や仲間の役に立つものを作りたいと考え、Web制作を中心にアプリ開発やデザインなども挑戦してきました。
      </p>
      <!-- [START]スライダー -->
      <ul class="slider csr_slider" data-fadeIn-b>
        <?php $args = array(
          // 'numberposts' => 7, //表示したい記事の数
          'post_type' => 'create-website' //カスタム投稿で作成した投稿タイプ
        );
        $customPosts = get_posts($args);
        if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
        ?>Gunjoo64
            <!-- [START]スライダーアイテム -->
            <li>
              <div class="slider_list-inner">
                <!-- [START]サムネイル -->
                <div class="slide_tmb">
                  <div class="slide_tmb-mask">
                  </div>
                  <div class="background-image" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)">
                  </div>
                </div>
                <!-- [END]サムネイル -->
                <!-- [START]PC画面のcsrの情報表示エリア -->
                <div class="info-wrapper-pc">
                  <p class="info-category">
                    <?php
                    $terms = get_the_terms($post->ID, 'portfolio');
                    if ($terms) {
                      echo $terms[0]->name;
                    }
                    ?>
                  </p>
                  <h3 class="info-ttl">
                    <?php the_title(); //タイトルを表示
                    ?>
                  </h3>
                  <a href="<?php the_permalink(); //記事のリンクを表示
                      ?>" id="btn-more-pf" class="btn-more-br btn-more">
                    MORE
                  </a>
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
    <!-- [END]要素のチャンク -->
  </div>
</section>
<!-- [END]ポートフォリオセクション -->

<!-- [START]ポートフォリオ(第２セクション) -->
<section id="top-pf2" class="section__services block">
  <!-- [START]インナー -->
  <div class="two_column-inner slide-up before-load">

    <div class="card-items">
      <?php $posts = get_posts('numberposts=10&category=5');
      global $post; ?>
      <?php if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
          <!-- [START]カードアイテム -->
          <div class="card">
            <p class="card-tmb">
              <?php
              if (has_post_thumbnail()) {
                // アイキャッチ画像が設定されてれば大サイズで表示
                the_post_thumbnail('large');
              } else {
                // なければnoimage画像をデフォルトで表示
                echo '<img src="' . esc_url(get_template_directory_uri()) . '/images/dummy_img_360x200.png" alt="FUSIONのサービス">';
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
      <?php endforeach;
      endif; ?>
    </div>
  </div>
  <!-- [END]インナー -->
</section>
<!-- [END]ポートフォリオ(第２セクション) -->

<!-- [START] PastActivities(活動実績)セクション -->
<section id="top-activities" class="section__news block" chunk>
  <div class="two_column-inner">
    <h2 class="section__ttl" bg-hidden bg-hidden>Activities</h2>
    <p class="section__lead" data-fadeIn>これまでの主な活動です。
      エンジニアを志てから積極的に勉強会に参加しております。<br>
      多くの失敗と絶望を経験しましたが、「見逃し三振より空振り三振」の精神でこれからも挑戦を続けて行こうと思います。
    </p>
    <!-- [START]PastActivitiesアイテムス -->
    <ul class="news__items">
      <?php $args = array(
        'numberposts' => 7, //表示したい記事の数
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
            <!-- [START]PastActivitiesアイテム -->
            <li class="news__item" data-fadeIn-b>
              <!-- PastActivitiesの日付 -->
              <?php if (get_field('news_date')) : ?>
                <time class="news__item-date">
                  <?php the_field('news_date'); ?>
                </time>
              <?php endif; ?>
              <div class="news__item-txt-wrapper">
                <!-- PastActivitiesタイトル -->
                <h2 class="news__item-ttl">
                  <?php the_title(); //タイトルを表示
                  ?>
                </h2>
                <!-- PastActivitiesの説明文 -->
                <?php if (get_field('news_desc')) : ?>
                  <p class="news__item-desc">
                    <?php the_field('news_desc'); ?>
                  </p>
                <?php endif; ?>
              </div>
            </li>
            <!-- [END]PastActivitiesアイテム -->
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
    </ul>
    <!-- [END]PastActivitiesアイテムス -->
</section>
<!-- [END] PastActivities(活動実績)セクション -->

<!-- [START]スキル -->
<section id="section__skills" class="section__skills block">
  <div class="two_column-inner">
    <!-- [START]スキルの説明 -->
    <div class="skills__item-wrapper" chunk>
      <!-- [START]セクションタイトルラッパー -->
      <div class="section__ttl-wrapper">
        <h2 class="section__ttl" bg-hidden>Skills</h2>
        <p class="section__lead" data-fadeIn>私が学習した技術などはこちらです。<br>
          2020年 2月 ~ 現在まで1日も休む事なく継続して学習を続けています。
        </p>
      </div>
      <!-- [END]セクションタイトルラッパー -->
      <!-- [START]スキルグラフのラッパー -->
      <!-- <div class="skills__item-grph-wrapper">
        <canvas id="myChart"></canvas>
      </div> -->
      <!-- [END]スキルグラフのラッパー -->
    </div>
    <!-- [END]スキルの説明 -->
    <ul class="skills__infos">
      <?php $args = array(
        'numberposts' => 10, //表示したい記事の数
        'post_type' => 'skills' //カスタム投稿で作成した投稿タイプ
      );
      $customPosts = get_posts($args);
      if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
      ?>
          <!-- スキルアイテム -->
          <!-- [START]スキルアイテム -->
          <dl class="skills__info">
            <!-- [START]スキルアイテムヘッダー -->
            <dt class="skills__info-header">
              <div class="skills__info-ttl">
                <?php the_title(); //スキル名を表示
                ?>
              </div>
              <!-- [START]スキルバー -->
              <?php if (get_field('skill_rating')) : ?>
                <div class="skill_rating skillbar" data-percent="<?php the_field('skill_rating'); ?>">
                  <!-- <span class="skillbar-title" style="background: #2980b9;">Level</span> -->
                  <p class="skillbar-bar"></p>
                  <span class="skill-bar-percent"></span>
                </div>
              <?php endif; ?>
              <!-- [END]スキルバー -->
              <!-- [START]スキル説明 -->
              <?php if (get_field('skill_desc')) : ?>
                <div class="skills__info-desc">
                  <?php the_field('skill_desc'); ?>
                </div>
              <?php endif; ?>
              <!-- [END]スキル説明 -->
              <div class="skill__info-switch"><span><i class="fas fa-angle-double-right"></i></span>
                <p>もっとみる</>
              </div>
            </dt>
            <dd class="skill__info-body">
              <!-- [START]学習方法 -->
              <p class="skill__info-subTtl">学習方法</p>
              <?php if (get_field('about_method')) : ?>
                <div class="skills__info-desc">
                  <?php the_field('about_method'); ?>
                </div>
              <?php endif; ?>
              <!-- [END]学習方法 -->
            </dd>
            <!-- [END]スキルアイテムヘッダー -->
          </dl>
          <!-- [END]スキルアイテム -->
        <?php endforeach; ?>
      <?php else : //記事が無い場合
      ?>
        <p>スキルがありません。</p>
      <?php endif;
      wp_reset_postdata(); //クエリのリセット
      ?>
    </ul>
  </div>
</section>
<!-- [END]スキル -->

<!-- フッターPHP -->
<?php get_footer('top'); ?>
