<?php
    $uri = get_theme_file_uri(); // ルートpath
    $site_url = site_url(); // サイトURL
    $server_uri = $_SERVER['REQUEST_URI'];
    $server_uri_trimed = substr($server_uri, 0, strcspn($server_uri,'?')); 
?>
<header class="header02">
    <div class="innerHeader">
        <div class="left">
            <a href="<?=$site_url;?>">
                <img src="<?=$uri?>/img/common/logo.svg" class="logo" alt="">
            </a>
            <ul>
                <li><a href="<?=$site_url;?>" class="<?=$active = ($server_uri === '/') ? 'active' : ''; ?>">HOME</a></li>
                <li><a href="<?=$site_url;?>/post/" class="<?=$active = ($server_uri === '/post/') ? 'active' : ''; ?>">POST</a></li>
                <li><a href="<?=$site_url;?>/contact" class="<?php echo isset($post) && $post->post_name === 'contact' ? 'active' : ''; ?>">CONTACT</a></li>
            </ul>
        </div>
        <div class="right">
            <a href="tel:078000000" class="link"><span><img src="<?=$uri?>/img/header/header02/phone.svg" alt=""></span>078-000-000</a>
            <a href="" class="link"><span><img src="<?=$uri?>/img/header/header02/user.svg" alt=""></span>ログイン</a>
            <a href="" class="btn gradation">資料ダウンロード<span><img src="<?=$uri?>/img/header/header02/arrow_wh.svg" alt=""></span></a>
            <a href="" class="btn">お問い合わせ<span><img src="<?=$uri?>/img/header/header02/arrow.svg" alt=""></span></a>
        </div>
    </div>
</header>