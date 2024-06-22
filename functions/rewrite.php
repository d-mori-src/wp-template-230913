<?php

/* ------------------------------------ 投稿記事リライトルール ------------------------------------ */
// post
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'post'; //任意のスラッグ名
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

function add_article_post_permalink( $permalink ) {
    $permalink = '/post' . $permalink;
    return $permalink;
}
add_filter( 'pre_post_link', 'add_article_post_permalink' );
 
function add_article_post_rewrite_rules( $post_rewrite ) {
    $return_rule = array();
    foreach ( $post_rewrite as $regex => $rewrite ) {
        $return_rule['post/' . $regex] = $rewrite;
    }
    return $return_rule;
}
add_filter( 'post_rewrite_rules', 'add_article_post_rewrite_rules' );


// news
function news_post_type_link( $link, $post ){
	if ( $post->post_type === 'news' ) {
		return home_url( '/news/' . $post->ID . '/' );
	} else {
		return $link;
	}
}
add_filter( 'post_type_link', 'news_post_type_link', 1, 2 );

function news_rewrite_rules_array( $rules ) {
	$new_rewrite_rules = array( 
		'news/([0-9]+)/?$' => 'index.php?post_type=news&p=$matches[1]',
	);
	return $new_rewrite_rules + $rules;
}
add_filter( 'rewrite_rules_array', 'news_rewrite_rules_array' );

/* ----------------------------------------------------------------------------------------------- */
