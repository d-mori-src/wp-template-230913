<?php
    $uri = get_theme_file_uri(); 
    $site_url = site_url();
?>

<?php get_header(); ?>

<main class="underPage contact">
    <div class="intro">
        <ul>
            <li class=""><div class="icon"></div><div class="text">入力<div></li>
            <li class="border"></li>
            <li class=""><div class="icon"></div><div class="text">確認<div></li>
            <li class="border"></li>
            <li class="active"><div class="icon"></div><div class="text">完了<div></li>
        </ul>
    </div>

    <p class="page-lead">
        お問い合わせありがとうございました。<br class="pc" />後日担当者より、メール及びお電話にてご連絡をいたします。<br class="pc" />しばらくお待ちください。
    </p>

    <a class="btn" href="<?=$site_url?>">トップページへ戻る</a>
</main>

<?php get_footer(); ?>