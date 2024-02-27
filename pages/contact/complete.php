<?php
    $uri = get_theme_file_uri(); 
    $site_url = site_url();
?>

<?php get_header(); ?>

<main class="contact">
    <section class="intro">
        <ul>
            <li class=""><div class="icon"></div><div class="text">入力<div></li>
            <li class="border"></li>
            <li class=""><div class="icon"></div><div class="text">確認<div></li>
            <li class="border"></li>
            <li class="active"><div class="icon"></div><div class="text">完了<div></li>
        </ul>
    </section>
    <section class="complete">
        <h2>お問い合わせ<span>contact</span></h2>
        <p>
            お問い合わせありがとうございました。<br />
            確認ために、お客様に自動返信メールをお送りしています。<br />
            万が一、自動返信メールが届かない場合は、<br />
            お手数ですがお電話にてお問い合わせください。
        </p>
        <a href="<?=$site_url?>">トップページへ戻る</a>
    </section>
</main>

<?php get_footer(); ?>