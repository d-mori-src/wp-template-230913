<?php
    $uri = get_theme_file_uri(); // ルートpath
    global $post;
    $slug = $post->post_name;
    $site_url = site_url(); // サイトURL
    $server_uri = $_SERVER['REQUEST_URI'];
    $server_uri_trimed = substr($server_uri, 0, strcspn($server_uri,'?')); 
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="<?=$site_url?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?=$site_url?>">
    <meta property="og:image" content="<?= $uri ?>/meta/ogp.jpg">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta name="theme-color" content="">
    <link rel="apple-touch-icon" href="<?= $uri ?>/meta/icon.png">
    <link rel="shortcut icon" href="<?= $uri ?>/meta/favicon.ico">

    <link rel="stylesheet" href="<?php echo $uri ?>/js/swiper-bundle.min.css">
    <script type="text/javascript" src="<?php echo $uri ?>/js/swiper-bundle.min.js"></script>

    <!-- safari用フォント -->
    <?php $user_agent = $_SERVER['HTTP_USER_AGENT']; ?>
    <?php if (strpos($user_agent, 'Safari') !== false && strpos($user_agent, 'Chrome') === false): ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <?php endif; ?>

    <!-- スタイルシート -->
    <!-- style -->
    <link rel="stylesheet" href="<?php echo $uri ?>/style.min.css?<?php echo date('YmdHis'); ?>">

    <!-- 各ページ切り分け -->
    <?php if ($server_uri === '/'): ?>
        <title>Top</title>
        <meta property="og:title" content="Top">
        <meta name="description" content="This is top page">
        <meta property="og:description" content="This is top page" />
        <link rel="stylesheet" href="<?php echo $uri ?>/css/top.min.css?<?php echo date('YmdHis'); ?>">
    <?php endif;?>
    <?php if ($server_uri === '/post/'): ?>
        <title>Post</title>
        <meta property="og:title" content="Post">
        <meta name="description" content="This is post page">
        <meta property="og:description" content="This is post page" />
        <link rel="stylesheet" href="<?php echo $uri ?>/css/post.min.css?<?php echo date('YmdHis'); ?>">
    <?php endif;?>
    <?php if (is_singular('post')): ?>
        <title>Post | <?php the_title_attribute(); ?></title>
        <meta property="og:title" content="<?php the_title() ?>">
        <?php
            $content = get_the_content();
            $content = wp_strip_all_tags($content);
            $content = strip_shortcodes($content);
            $content = wp_trim_words($content, 100, '');
        ?>
        <meta name="description" content="<?php echo esc_attr($content); ?>">
        <meta property="og:description" content="<?php echo esc_attr($content); ?>" />
        <link rel="stylesheet" href="<?php echo $uri ?>/css/post.min.css?<?php echo date('YmdHis'); ?>">
    <?php endif; ?>
    <?php if (
        $server_uri === '/contact/' || 
        $server_uri === '/contact/confirm/' || 
        $server_uri === '/contact/thanks/'): 
    ?>
        <title>Contact</title>
        <meta property="og:title" content="Contact">
        <meta name="description" content="This is contact page">
        <meta property="og:description" content="This is contact page" />
        <link rel="stylesheet" href="<?php echo $uri ?>/css/contact.min.css?<?php echo date('YmdHis'); ?>">
    <?php endif;?>

    <!-- Lightbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css" />

    <?php if (!is_production_environment()): ?>
        <!-- 開発・テストサーバー時のみ -->
        <meta name="robots" content="noindex,nofollow" />
    <?php endif;?>

    <?php  if (is_production_environment()): ?>
        <!-- 本番公開時はアナリティクスタグ埋め込み -->
        <!-- Google tag (gtag.js) -->
    <?php endif;?>
    
    <?php wp_head(); ?>
</head>
    <body>
        <?php if (is_production_environment()): ?>
            <!-- 本番公開時はタグマネージャー埋め込み -->
            <!-- Google Tag Manager (noscript) -->      
        <?php endif;?>

        <div class="container">
            <!-- 使いたいヘッダーパターンを適宜読み込み -->
            <?php get_template_part('components/Layout/header/header05'); ?>
            <?php // get_template_part('components/parts/drawer/drawer03'); ?>