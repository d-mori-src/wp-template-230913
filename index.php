<?php
    $uri = get_theme_file_uri(); 
    $site_url = site_url();
?>

<?php get_header(); ?>

<main class="top">
    <?php get_template_part('components/parts/mega/mega01'); ?>
    <?php get_template_part('components/parts/card/card01'); ?>
    <!-- <div class="box boxA">トップページが入ります。</div>
    <div class="box boxB"><h2>トップページが入ります。</h2></div>
    <div class="conditionBoxA">トップページが入ります。</div>
    <div class="conditionBoxB">トップページが入ります。</div> -->
</main>

<?php get_footer(); ?>