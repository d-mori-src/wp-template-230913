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