// コード内に存在する潜在的な問題を早期に発見しやすくなります。
// strictモードのコードは高速に実行することができる場合がある（JSエンジンによる最適化処理を困難にする誤りを修正するため
("use strict");
{
  // // トップページのローダー
  $(window).on("load", function () {
      $(".mv__container").addClass("is-load");
  });
  /* ハンバーガーメニュー ==========================*/

  $(function () {
    $(
      ".btn-trigger,  .header-overlay, #top_sidebar_right-items > ul > li > a"
    ).on("click", function () {
      $(".btn-trigger").toggleClass("active");
      $(".sidebar-right").toggleClass("active");
      $(".header-overlay").toggleClass("open");
      return false;
    });
  });
  // スリック実装 ===========================

  // スリック実装 ===========================
  //htmlが完全に読み込まれてからでないと、jQueryやJavaScriptは正しく機能しない事がおおい
  $(".csr_slider").slick({
    accessibility: true,
    autoplay: false, //スライド/フェードアニメーションの速度を設定。
    autoplaySpeed: 5000, //自動再生のスライド切り替えまでの時間をミリ秒で設定。
    speed: 400,
    appendArrows: $(".csr_slider-btn-wrapper"), //スライドの左右の矢印ボタンを挿入する場所を変更する。セレクタ、htmlString、配列、要素、jQueryオブジェクト
    dots: false, // ドットインジケーターを表示するか。
    slidesToShow: 1, // 表示するスライドの数
    slidesToScroll: 1, //一度にスライドする数
    infinite: false, // スライドのループを有効にするか。
    edgeFriction: 0.2, // infinite:falseのときに最初と最後のスライドをスワイプした時のフリクション値を設定。
    prevArrow: "<div class=”slick-prev”>PREV</div>",
    nextArrow: "<div class=”slick-next”>NEXT</div>",
    variableWidth: true,
    // スライドを中心に表示して部分的に前後のスライドが見えるように設定。 奇数番号のスライドに使用。
    // centerMode:true,
    //センターモード時のサイドパディング。見切れるスライドの幅。’px’または’％’。
    centerPadding: "10%",
    swipe: true,
    touchMove: true,
    touchThreshold: 5,
    // レスポンシブ
    responsive: [
      {
        breakpoint: 767,
        settings: {
          centerPadding: "0",
          centerMode: true, //要素を中央へ
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  //アコーディオン(キャリア)
  $(".career__accordion-header").on("click", function () {
    $(this).find(".career__accordion-switch").toggleClass("is-active");
    $(this).next().slideToggle();
  });
  //アコーディオン（スキル）
  $(".skills__info-header").on("click", function () {
    $(this).find("span").toggleClass("is-active");
    $(this).next().slideToggle();
  });

  // スムーススクロール
  jQuery('a[href^="#"]').click(function () {
    let header = jQuery(".header").innerHeight();
    let speed = 300;
    let id = jQuery(this).attr("href");
    let target = jQuery("#" == id ? "html" : id);
    let position = jQuery(target).offset().top - header;
    if ("fixed" !== jQuery(".header").css("position")) {
      position = jQuery(target).offset().top;
    }
    if (0 > position) {
      position = 0;
    }
    jQuery("html, body").animate(
      {
        scrollTop: position,
      },
      speed
    );
    return false;
  });

  /* スクロール時のアニメーション ---------------------------*/
  $(window).on("scroll", function () {
    //データフェードイン右をHTMLに付与する
    $("[chunk]").each(function (index, el) {
      if ($(window).scrollTop() > $(el).offset().top - $(window).height() / 2) {
        $(el).find("[bg-hidden]").addClass("is-over");
        $(el).find("[bg-hidden-bl]").addClass("is-over");
        $(el).find("[data-fadeIn]").addClass("is-over");
        $(el).find("[data-fadeIn-b]").addClass("is-over");
        $(el).find("[data-fadeIn-r]").addClass("is-over");
        $(el).find("[data-fadeIn-l]").addClass("is-over");
      }
    });

    // スクロールアローの挙動 ===========================
    // is-overは
    if ($(window).scrollTop() > 10) {
      //画面を少しスクロールしたら隠す
      $(".scroll__arrow-wrapper").addClass("is-hidden");
    }
    if ($(window).scrollTop() > 200) {
      // サイドバーを半転色対応にする
      $("#sidebar-top").addClass("is-active");
    } else {
      // それ以外はクラスをつける(表示)
      $(".scroll__arrow-wrapper").removeClass("is-hidden");
      $("#sidebar-top").removeClass("is-active");
    }
    // スクロールアローの挙動 ===========================

    var elem = $(".sc-anime-wrapper");
    $(".sc-anime-wrapper").css({
      overflow: "hidden",
    });
    $(".sc-anime").css({
      transform: "translateY(100%)",
      transition: ".5s",
    });
    $(".sc-anime-active").css({
      transform: "translateY(0)",
      transition: ".5s",
    });
    $(".sc-anime-toggle").css({
      transform: "translateY(-100%)",
      transition: ".5s",
    });
    var scrollPos = $(window).scrollTop();
    var winHeight = $(window).height();
    elem.each(function () {
      var elemOffset = $(this).offset().top;
      var scrollPos = $(window).scrollTop();
      var winHeight = $(window).height();
      if (
        elemOffset - winHeight + winHeight / 2 < scrollPos &&
        scrollPos <= elemOffset - winHeight + winHeight / 1.2
      ) {
        $(this).find(".sc-anime").addClass("sc-anime-active");
        $(this).find(".sc-anime").removeClass("sc-anime-toggle");
      } else if (scrollPos > elemOffset - winHeight + winHeight / 1.2) {
        $(this).find(".sc-anime").addClass("sc-anime-toggle");
      } else if (elemOffset - winHeight + winHeight / 2 >= scrollPos) {
        $(this).find(".sc-anime").removeClass("sc-anime-toggle");
        $(this).find(".sc-anime").removeClass("sc-anime-active");
      }
    });
  });

  $(function () {
    var secArr = new Array();
    var current = -1;
    /* ここに背景色を順に記述する*/
    let btnColorBlack = "#000";
    let btnColorWhite = "#fff";
    var btnColorArray = new Array(
      btnColorWhite,
      btnColorBlack,
      btnColorWhite,
      btnColorBlack,
      btnColorWhite,
      btnColorBlack,
      btnColorWhite,
      btnColorBlack
    );
    $(".block").each(function (i) {
      secArr[i] = $(this).offset().top;
    });
    function chengeBG(secNum) {
      if (secNum != current) {
        current = secNum;
        $("#menu-btn-top > span").css({ background: btnColorArray[current] });
      }
    }
    $(window).on("load scroll resize", function () {
      for (var i = secArr.length - 1; i >= 0; i--) {
        if ($(window).scrollTop() > secArr[i]) {
          chengeBG(i);
          break;
        }
      }
    });
  });

  // スクロールでロゴの大きさ変更
  jQuery(window).on("scroll", function () {
    if (100 < jQuery(this).scrollTop()) {
      jQuery("#header__logo-top").addClass("is-scroll");
    } else {
      jQuery("#header__logo-top").removeClass("is-scroll");
    }
  });

  // コンタクトフォームのローダー
  // $("#contact-btn-submit, #contact-btn-confirm").on("click", function () {
  //   //ローダーを表示させ、２秒経ったらローダーを消す
  //   jQuery("#lorder-mask").addClass("is-show");
  //   setTimeout(endLoader, 2000);
  // });

  // ローダーを消す関数
  function endLoader() {
    jQuery("#lorder-mask").removeClass("is-show");
  }

  var ctx = document.getElementById("myChart").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "radar",
    data: {
      // 項目ラベルを指定
      labels: [
        "HTML",
        "CSS(Sass)",
        "JavaScript",
        "Java",
        "Vue.js",
        "WordPress",
        "SQL",
      ],
      datasets: [
        {
          // 凡例とツールチップに表示される値を指定
          label: "学習期間 (時間)",
          // データの値を設定
          data: [500, 500, 300, 300, 200, 300, 200],
          // グラフの背景色を設定
          backgroundColor: ["rgba(255, 159, 64, 0.2)"],
          // グラフ周りの線を設定
          borderColor: ["rgba(255, 159, 64, 1)"],
          // グラフ周りの線の太さを設定
          borderWidth: 1,
          // 各データ値の点の背景色を設定（先端の丸部分）
          pointBackgroundColor: "rgba(255,159,64,1)",
          // 各データ値の点の線の色を設定（先端の丸部分）
          pointBorderColor: "#fff",
          // Hover時の各データ値の点の背景色を設定（先端の丸部分）
          pointHoverBackgroundColor: "#fff",
          // Hover時の各データ値の点の線の色を設定（先端の丸部分）
          pointHoverBorderColor: "rgba(255,159,64,1)",
          // 各データ値の点の周りにマウスイベント反応範囲を指定（単位：px）
          pointHitRadius: 5,
        },
        // {
        //   label: 'モンスターB',
        //   data: [20, 100, 10, 25, 100, 30],
        //   backgroundColor: ['rgba(0,115,168,0.2)'],
        //   borderColor: ['rgba(0,115,168,1)'],
        //   borderWidth: 1,
        //   pointBackgroundColor: 'rgba(0,115,168,1)',
        //   pointBorderColor: '#fff',
        //   pointHoverBackgroundColor: '#fff',
        //   pointHoverBorderColor: 'rgba(0,115,168,1)',
        //   pointHitRadius	: 5
        // }
      ],
    },
    options: {
      // レスポンシブ指定
      responsive: true,
      scale: {
        ticks: {
          // 最小値の値を0指定
          beginAtZero: true,
          min: 0,
          // 最大値を指定
          max: 500,
        },
      },
    },
  });
}
