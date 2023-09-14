<?php get_header(); ?>

<main class="post">
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <p><?php the_time(get_option('date_format')); ?></p>
        <?php endwhile; ?>
    <?php else: ?>
        <p>まだ投稿がありません。</p>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

    <a href="<?=$site_url;?>/post">一覧へ戻る</a>
</main>

<?php get_footer(); ?>