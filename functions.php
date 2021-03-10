<?php
/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');
// セットアップの書き方の型
// function custom_theme_setup() {
// add_theme_support( $feature, $arguments );
// }
// add_action( 'after_setup_theme', 'custom_theme_setup' );

/**
* CSSとJavaScriptの読み込み
*
* @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
*/
function my_script_init()
{
wp_enqueue_style('animatecss', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css', array(), '3.7.0', 'all');
wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
//wp_enqueue_style()はwp_haad()で読み込むcssを追加するための関数
wp_enqueue_style('cssreset', 'http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css', array('context'), '3.18.1', 'all');
wp_enqueue_style('context', 'http://yui.yahooapis.com/3.18.1/build/cssreset-context/cssreset-context-min.css', array('reset'), '3.18.1', 'all');
wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');
wp_enqueue_style('wowanime', get_template_directory_uri() . '/css/animate.css');
wp_enqueue_style('myanime', get_template_directory_uri() . '/css/animation.css', array('wowanime'));
wp_enqueue_style('atoms', get_template_directory_uri() . '/css/style.css', array('reset'));
wp_enqueue_style('molecules', get_template_directory_uri() . '/css/molecules.css', array('atoms'));
wp_enqueue_style('organisms', get_template_directory_uri() . '/css/organisms.css', array('molecules'));
wp_enqueue_style('templates', get_template_directory_uri() . '/css/templates.css', array('organisms'));
wp_enqueue_style('pages', get_template_directory_uri() . '/css/pages.css', array('organisms'));
wp_enqueue_style('laymanage', get_template_directory_uri() . '/css/layerManagement.css', array('pages'));

//wp_enqueue_script()はwp_footer()で読み込むjsを追加するための関数
wp_enqueue_script('my', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js', array());
}
add_action('wp_enqueue_scripts', 'my_script_init');


//footerにタグを追加
add_action( 'wp_footer', 'add_meta_to_footer' );
function add_meta_to_footer() {
echo '
<!-- WOWの宣言 -->
<script>
  new WOW().init();
</script>
';
}

/**
* メニューの登録
*
* 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
*/
function my_menu_init()
{
register_nav_menus(
array(
'global' => 'ヘッダーメニュー',
'drawer' => 'ドロワーメニュー',
'leftside' => '左サイドバーメニュー',
'footer' => 'フッターメニュー',
'underlayer' => '下層ページ用メニュー'
)
);
}
add_action('init', 'my_menu_init');


add_filter('wpcf7_validate_text', 'wpcf7_validate_post', 11, 2);
add_filter('wpcf7_validate_text*', 'wpcf7_validate_post', 11, 2);
function wpcf7_validate_post($result,$tag){
$tag = new WPCF7_Shortcode($tag);
$name = $tag->name;
$value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";
//$nameはContactForm7のフォーム要素(input等)のname="この部分"
//$valueはユーザーが入力した(選択した)値

//ここから一つ一つのフォーム項目にバリデーションを追加します。
if ($name === "your-name-rubi") {
  //your-emailという名前のフォームに対して
  if(!preg_match("/^[ぁ-ん]+$/u", $value)) {
  //if(!この部分はPHPで指定)は指定したい条件に当てはまらない(!)場合は
  if (method_exists($result, 'invalidate')) {
  $result->invalidate( $tag,"全角ひらがなの形式で入力してください");
  //"メールアドレスを入力してください"はエラーが出たときに表示される文言
  } else {
  $result['valid'] = false;
  $result['reason'][$name] = '全角ひらがなの形式で入力してください';
  //'メールアドレスを入力してください'エラー時の文言をここにも書いておく。
  }
  //ここまでがContactForm7で入力エラーを出すための部分
  }
  }
  //ここまでが一つのフォーム項目に対して適用させるかたまり。


//ここから一つ一つのフォーム項目にバリデーションを追加します。
if ($name === "your-name") {
//your-emailという名前のフォームに対して
if(preg_match("/^[[:graph:]|[:space:]]+$/i", $value)) {
//if(!この部分はPHPで指定)は指定したい条件に当てはまらない(!)場合は
if (method_exists($result, 'invalidate')) {
$result->invalidate( $tag,"お名前の形式で入力してください");
//"お名前の形式で入力してください"はエラーが出たときに表示される文言
} else {
$result['valid'] = false;
$result['reason'][$name] = 'お名前の形式で入力してください';
//'お名前の形式で入力してください'エラー時の文言をここにも書いておく。
}
//ここまでがContactForm7で入力エラーを出すための部分
}
}
//ここまでが一つのフォーム項目に対して適用させるかたまり。


return $result;
}
//最後にこの部分が来るようにする。


//==============================================================================
//
//	「記事、固定ページ」固有のCSS,JavaScriptを記述できるカスタムフィールドを作成する
//
//==============================================================================
//--------------------------------------------------------------
//	アクションフックに登録：管理画面にカスタムボックスをエントリー
//--------------------------------------------------------------
add_action(
	'add_meta_boxes',
	function(){
		$screens = array('post', 'page');	//投稿ページと固定ページに表示
		foreach($screens as $scrn){
			add_meta_box(
				'peralab-custombox-css-internal', 	//編集画面セクションのHTML ID
				'この記事限定のCSS, JavaScript', 	//メタボックスのタイトル
				'PeralabCssInternal_CustomBoxCreate', 	//入力フォーム作成で呼び出されるコールバック
				$scrn, 								//表示するページ
				'normal', 							//メタボックス表示箇所(advanced, normal, side)
				'default', 							//表示優先度(high, core, default, low)
				null);								//コールバック時に渡す引数があれば指定
		}
	}
);

//--------------------------------------------------------------
//	メタボックスを作成
//--------------------------------------------------------------
function PeralabCssInternal_CustomBoxCreate($post){	//$postには現在の投稿記事データが入っています
	//入力済みのデータを取得
	$data_str = get_post_meta($post->ID, "metakey_css", true);
	$jsext_str = get_post_meta($post->ID, "metakey_jsext", true);
	$jshead_str = get_post_meta($post->ID, "metakey_jshead", true);
	$jsbody_str = get_post_meta($post->ID, "metakey_jsbody", true);
	//初回の場合、データが入っていないので空チェック
	//get_post_metaの第３引数がtrue指定の場合、データが無い時は空文字列になっています
	//このウィジェットは空文字列のままで問題ないので特にチェックはしません。
	//if($data_str == ''){}

	//nonce作成
	wp_nonce_field('action-noncekey-css-internal', 'noncename-css-internal');

	?>
	<div>

	<p><label>CSS, JavaScript外部参照<br />　例）&lt;link href=&quot;//domain/wp-content/css/mystyle.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;<br />　　　&lt;script src=&quot;//domain/wp-content/js/myscript.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;<br />
	<textarea id="id-metabox_jsext_textarea" name="name-metabox_jsext_textarea" rows="2" cols="30" style="width:100%;"><?php echo esc_attr($jsext_str); ?></textarea>
	</label></p>

	<p><label>CSS内部参照（head要素内に出力）<br />
	<textarea id="id-metabox_css_textarea" name="name-metabox_css_textarea" rows="5" cols="30" style="width:100%;"><?php echo esc_attr($data_str); ?></textarea>
	</label></p>

	<p><label>JavaScript内部参照（head要素内に出力）<br />
	<textarea id="id-metabox_jshead_textarea" name="name-metabox_jshead_textarea" rows="5" cols="30" style="width:100%;"><?php echo esc_attr($jshead_str); ?></textarea>
	</label></p>

	<p><label>JavaScript内部参照（/bodyタグの真上に出力）<br />
	<textarea id="id-metabox_jsbody_textarea" name="name-metabox_jsbody_textarea" rows="5" cols="30" style="width:100%;"><?php echo esc_attr($jsbody_str); ?></textarea>
	</label></p>

	</div>
	<?php
}

//--------------------------------------------------------------
//	カスタムボックス内のフィールド値更新処理
//--------------------------------------------------------------
add_action(
	'save_post',
	function($post_id){
		//nonceを確認
		if(isset($_POST['noncename-css-internal']) == false
				|| wp_verify_nonce($_POST['noncename-css-internal'], 'action-noncekey-css-internal') == false) {
			return;	//nonceを認証できなかった
		}

		//自動保存ルーチンかどうかチェック。そうだった場合はフォームを送信しない(何もしない)
		if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
			return;
		}

		//パーミッション確認
		if(isset($_POST['post_type'])){
			if($_POST['post_type'] == 'page'){
				if(!current_user_can('edit_page', $post_id)){
					return;	//固定ページを編集する権限がない
				}
			}
			else{
				if(!current_user_can('edit_post', $post_id)){
					return;	//記事を編集する権限がない
				}
			}
		}

		//== 確認ここまで ==


		//予約投稿時は、データが有るにも関わらず$_POSTからデータ取得ができないので、
		//issetでデータ確認が出来るときのみ値の更新処理を行います。
		if(isset($_POST['name-metabox_css_textarea'])){
			update_post_meta($post_id, "metakey_css", $_POST['name-metabox_css_textarea']);
		}
		if(isset($_POST['name-metabox_jsext_textarea'])){
			update_post_meta($post_id, "metakey_jsext", $_POST['name-metabox_jsext_textarea']);
		}
		if(isset($_POST['name-metabox_jshead_textarea'])){
			update_post_meta($post_id, "metakey_jshead", $_POST['name-metabox_jshead_textarea']);
		}
		if(isset($_POST['name-metabox_jsbody_textarea'])){
			update_post_meta($post_id, "metakey_jsbody", $_POST['name-metabox_jsbody_textarea']);
		}
	}
);

//--------------------------------------------------------------
//	出力用のアクションフックを登録
//--------------------------------------------------------------
add_action(
	'wp_head',
	function(){
		if(is_single() == false && is_page() == false){
			return;	//投稿記事でも固定ページでもないので何もせずに終了
		}

		$data_str = get_post_meta(get_the_ID(), "metakey_css", true);
		if($data_str != '' && ctype_space($data_str) == false){	//空文字チェック
			echo '<style type="text/css">' . PHP_EOL . $data_str . PHP_EOL . '</style>' . PHP_EOL;
		}

		$data_str = get_post_meta(get_the_ID(), "metakey_jsext", true);
		if($data_str != '' && ctype_space($data_str) == false){	//空文字チェック
			echo $data_str . PHP_EOL;
		}

		$data_str = get_post_meta(get_the_ID(), "metakey_jshead", true);
		if($data_str != '' && ctype_space($data_str) == false){	//空文字チェック
			echo '<script type="text/javascript">' . PHP_EOL . $data_str . PHP_EOL . '</script>' . PHP_EOL;
		}
	},
	1000	//実行プライオリティ。テーマデフォルトのCSSに上書きされないように後ろで実行する
);

add_action(
	'wp_footer',
	function(){
		if(is_single() == false && is_page() == false){
			return;	//投稿記事でも固定ページでもないので何もせずに終了
		}

		$data_str = get_post_meta(get_the_ID(), "metakey_jsbody", true);
		if($data_str != '' && ctype_space($data_str) == false){	//空文字チェック
			echo '<script type="text/javascript">' . PHP_EOL . $data_str . PHP_EOL . '</script>' . PHP_EOL;
		}
	},
	1000	//実行プライオリティ
);
