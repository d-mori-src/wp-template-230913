<?php

// 分割したファイルパスを配列に追加
// $function_files = [
// 	'',
// ];
// foreach ($function_files as $file) {
// 	if ((file_exists(__DIR__ . $file))) {
// 		locate_template($file, true, true);
// 	} else {
// 		trigger_error("`$file`ファイルが見つかりません", E_USER_ERROR);
// 	}
// }

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
    