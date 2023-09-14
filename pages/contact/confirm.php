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
            <li class="active"><div class="icon"></div><div class="text">確認<div></li>
            <li class="border"></li>
            <li class=""><div class="icon"></div><div class="text">完了<div></li>
        </ul>
    </section>
</main>

<?php get_footer(); ?>