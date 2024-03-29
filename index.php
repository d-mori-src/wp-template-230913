<?php
    $uri = get_theme_file_uri(); 
    $site_url = site_url();
?>

<?php get_header(); ?>

<?php // get_template_part('components/parts/splash/splash01'); ?>

<!-- Page mainクラス込み -->
<?php // get_template_part('components/Page/page01/page01'); ?>

<main class="top">
    <?php // get_template_part('components/parts/mega/mega01'); ?>
    <?php // get_template_part('components/parts/mega/mega02'); ?>
    <?php // get_template_part('components/parts/card/card01'); ?>
    <?php // get_template_part('components/parts/card/card02'); ?>
    <?php // get_template_part('components/parts/circle_menu/circle_menu01'); ?>
    <?php // get_template_part('components/parts/slide/slide01'); ?>
    <?php // get_template_part('components/parts/tab/tab01'); ?>
    <?php // get_template_part('components/parts/tab/tab02'); ?>
    <?php // get_template_part('components/parts/grid/grid01'); ?>
    <?php // get_template_part('components/parts/gallery/gallery01'); ?>
    <?php //get_template_part('components/parts/acordion/acordion01'); ?>
    <?php // get_template_part('components/parts/sticky/sticky01'); ?>
    <?php // get_template_part('components/parts/swiper/swiper01'); ?>
    <?php //get_template_part('components/parts/swiper/swiper02'); ?>

    <!-- sass練習用(保留) -->
    <!-- <div class="box boxA">トップページが入ります。</div>
    <div class="box boxB"><h2>トップページが入ります。</h2></div>
    <div class="conditionBoxA">トップページが入ります。</div>
    <div class="conditionBoxB">トップページが入ります。</div> -->
</main>

<?php get_footer(); ?>