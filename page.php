<?php
    /*
        *** 例
        *** 固定ページがcontactの場合
        *** pages/contact/index.php

        *** 固定ページがcontactを親にしてconfirmの場合
        *** pages/contact/confirm.php
        
        *** 固定ページがcontactを親にしてthanksの場合
        *** pages/contact/thanks.php
    */

    // テンプレートがあるかをチェック
    $url = $_SERVER['REQUEST_URI'];
    $url = explode('?', $url);
    $url = '/pages'.$url[0];

    $path = get_template_directory() . substr($url, 0, strlen($url) - 1) . '.php';
    if (file_exists($path)) {
        include($path);
        exit();
    }

    // index.phpを付加して検索
    $path = get_template_directory() . $url . '/index.php';

    if (file_exists($path)) {
        include($path);
        exit();
    }
?>

<!-- テンプレートがなかった場合（管理画面側での出力） -->
<?php get_header(); ?>
<?php if(have_posts()):while(have_posts()):the_post();
$slug = $post->post_name;
?>
<main>
<div class="pageContent">
    <?php the_content(); ?>
</div>
</main>
<?php endwhile;endif; ?>
<?php get_footer(); ?>