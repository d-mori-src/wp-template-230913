<?php
    $uri = get_theme_file_uri(); 
    $site_url = site_url();
?>

<?php get_header(); ?>
    <main class="underPage notfoundPage">
        <section class="notfound">
            <h1>404 NOT FOUND<span>ページが見つかりませんでした</span></h1>
            <ul>
                <li><span>・</span>お探しのページはいずれかの理由により見つかりませんでした</li>
                <li><span>・</span>ページのURLが変更された可能性があります</li>
                <li><span>・</span>ページが削除された可能性があります</li>
                <li><span>・</span>アドレス(URL)をタイプミスしている可能性があります</li>
            </ul>
        </section>
        <a class="btn" href="<?=$site_url;?>">TOPに戻る</a>
    </main>
<?php get_footer(); ?>