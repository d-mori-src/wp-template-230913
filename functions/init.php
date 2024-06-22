<?php

// 本番環境を整合させるための関数
function is_production_environment() {
	// 本番環境のURLを指定
	// 本番サーバーでもテスト環境のままにしたければ適当なURLを入れておく
	return strpos(get_site_url(), 'https//www.example.co.jp') !== false;
}

/* ------------------------------------ 全権限 ------------------------------------ */

//【管理画面】投稿メニューを非表示
function remove_menus () {
	global $menu;
	// remove_menu_page('edit.php'); // 投稿を非表示
	remove_menu_page('edit-comments.php'); // コメントを非表示
	remove_menu_page('tools.php'); // ツールを非表示
}
add_action('admin_menu', 'remove_menus');

// 管理画面上部メニューを非表示
function remove_admin_bar_menus( $wp_admin_bar ) {
	$wp_admin_bar->remove_menu( 'comments' ); // コメント.
	$wp_admin_bar->remove_menu( 'updates' ); // 更新.
	$wp_admin_bar->remove_menu( 'comments' ); // コメント.
	$wp_admin_bar->remove_menu( 'new-content' ); // 新規投稿.
	$wp_admin_bar->remove_menu( 'new-post' ); // 新規投稿 / 投稿.
	$wp_admin_bar->remove_menu( 'new-media' ); // 新規投稿 / メディア.
	$wp_admin_bar->remove_menu( 'new-page' ); // 新規投稿 / 固定.
	$wp_admin_bar->remove_menu( 'new-user' ); // 新規投稿 / ユーザー.
}
add_action( 'admin_bar_menu', 'remove_admin_bar_menus', 999 );


/* ------------------------------------ 管理者以外 ------------------------------------ */

// 「新規追加」を非表示にする
function custom_edit_newpost_delete($hook) {
	if($hook == 'edit.php' || $hook == 'post.php'){
		if ( !current_user_can( 'administrator' ) ) {
			echo '<style>.wrap .wp-heading-inline + .page-title-action{display: none;}</style>';
		}
	}
}
add_action('admin_enqueue_scripts', 'custom_edit_newpost_delete');

//「編集」「クイック編集」「ゴミ箱」「プレビュー」の項目を非表示にする
function custom_action_row($actions, $post){
	if ( !current_user_can( 'administrator' ) ) {
		unset($actions['edit']); //編集
		unset($actions['inline hide-if-no-js']); //クイック編集
		unset($actions['trash']); //ゴミ箱
		unset($actions['view']); //プレビュー
	}
	return $actions;
}
add_filter('post_row_actions','custom_action_row', 10, 2);

// 管理画面サイドメニューを非表示
function editor_remove_menus () {
	if (!current_user_can('administrator')) { //管理者ではない場合
		// remove_submenu_page('edit.php?post_type=entry', 'post-new.php?post_type=entry'); // 編集者から新規作成不可
		// remove_submenu_page('edit.php?post_type=employee', 'post-new.php?post_type=employee'); // 編集者から新規作成不可
		// remove_menu_page('edit.php?post_type=interview'); // 追加オプション契約されたらこの行をコメントアウトする
		remove_menu_page('wpcf7');
	}
}
add_action('admin_menu', 'editor_remove_menus');