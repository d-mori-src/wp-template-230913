<?php

// テーマのセットアップ
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
// アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );

// 画像パスを出力するショートコード
add_shortcode('img', 'img_func');
  function img_func() {
  return get_template_directory_uri().'/img/';
}

// prevリンク
function add_prev_posts_link_class() {
    return 'class="prevLink"';
}
add_filter( 'previous_posts_link_attributes', 'add_prev_posts_link_class' );

// nextリンク
function add_next_posts_link_class() {
    return 'class="nextLink"';
}
add_filter( 'next_posts_link_attributes', 'add_next_posts_link_class' );

// 「投稿」 アーカイブページの作成
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'post'; //任意のスラッグ名
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

// 本番環境を整合させるための関数
function is_production_environment() {
	return strpos(get_site_url(), 'https//www.example.co.jp') !== false; // 本番環境のURLを指定
}

// 分割したファイルパスを配列に追加
$function_files = [
	'/lib/breadcrumb.php',
];
foreach ($function_files as $file) {
	if ((file_exists(__DIR__ . $file))) {
	locate_template($file, true, true);
	} else {
	trigger_error("`$file`ファイルが見つかりません", E_USER_ERROR);
	}
}

// プラグイン「CPTUI」で作成する場合は不要
// カスタム投稿タイプの追加
// add_action( 'init', 'create_post_type' );
// function create_post_type() {
//     register_post_type( '', // 投稿タイプ名の定義
//         array(
//             'labels' => array(
//             'name' => __( '表示する投稿タイプ名' ), // 表示する投稿タイプ名
//             'singular_name' => __( '表示する投稿タイプ名' )
//             ),
//             'public' => true,
//             'menu_position' => 5,
//         )
//     );

//     // カスタム分類（タクソノミー）
//     register_post_type( 'products', /* カスタム投稿タイプスラッグ */
//         array(
//             'labels' => array( /* 表示させる文字 */
//                 'name' => '製品',
//                 'singular_name' => '製品',
//                 'all_items' => '製品一覧',
//                 'add_new' => '製品追加',
//                 'add_new_item' => '製品の追加',
//                 'edit_item' => '製品の編集',
//                 'new_item' => '製品追加',
//                 'view_item' => '製品を表示',
//                 'search_items' => '製品を検索',
//                 'not_found' =>  '製品が見つかりません',
//                 'not_found_in_trash' => 'ゴミ箱内に製品が見つかりませんでした。',
//                 'parent_item_colon' => ''
//             ),
//             'public' => true, /* 管理画面にメニューを作る */
//             'show_ui' => true, /* 管理画面にメニューを作る */
//             'query_var' => true,
//             'hierarchical' => false, /* 固定ページみたいに記事間の親子関係をつくる */
//             'supports' => array('title','editor','thumbnail'), /* 管理画面で登録できる項目 */
//             'menu_position' =>5, /* 管理画面のメニューの位置（5,10,15・・・） */
//             'has_archive' => true, /* アーカイブページを持つ */
//             'rewrite' => array( /* slug:スラッグ名　with_front:アーカイブページURLに/archive/をつける */
//             'slug' => 'products','with_front' => false)
//         )
//     );
//     register_taxonomy('products_cat','products', array(
//         'hierarchical' => true,
//         'labels' => array( /* 表示させる文字 */
//             'name' => 'カテゴリ',
//             'singular_name' => 'カテゴリ',
//             'search_items' =>  'カテゴリを検索',
//             'all_items' => 'すべてのカテゴリ',
//             'parent_item' => '親分類',
//             'parent_item_colon' => '親分類：',
//             'edit_item' => '編集',
//             'update_item' => '更新',
//             'add_new_item' => 'カテゴリを追加',
//             'new_item_name' => '名前',
//         ),
//         'show_ui' => true, /* 管理画面にメニューを作る */
//         'rewrite' => array(
//             'slug' => 'products','with_front' => true,'hierarchical' => true)
//     ));
// }
    