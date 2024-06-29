<?php
    session_start();
    $uri = get_theme_file_uri(); 
    $site_url = site_url();
?>

<?php get_header(); ?>

<main class="underPage contact-original-01">
    <?php get_template_part('lib/form/form'); ?>
</main>
<?php get_footer(); ?>