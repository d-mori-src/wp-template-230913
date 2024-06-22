<?php
    $uri = get_theme_file_uri(); 
    $site_url = site_url();
?>

<?php get_header(); ?>

<main class="underPage contact">
    <div class="intro">
        <ul>
            <li class="active"><div class="icon"></div><div class="text">入力<div></li>
            <li class="border"></li>
            <li class=""><div class="icon"></div><div class="text">確認<div></li>
            <li class="border"></li>
            <li class=""><div class="icon"></div><div class="text">完了<div></li>
        </ul>
    </div>

    <section class="form">
        <?php echo do_shortcode('[contact-form-7 id="cfd2f65" title="お問い合わせ"]'); ?>
    </section>
</main>

<?php get_footer(); ?>