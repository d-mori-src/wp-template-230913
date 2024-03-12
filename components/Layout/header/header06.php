<?php
    $uri = get_theme_file_uri(); // ルートpath
    global $post;
    $slug = $post->post_name;
    $site_url = site_url(); // サイトURL
    $server_uri = $_SERVER['REQUEST_URI'];
    $server_uri_trimed = substr($server_uri, 0, strcspn($server_uri,'?')); 
?>
<header class="header06">
    <div class="innerHeader">
        <div class="upper">
            <div class="left">
                <a href="<?=$site_url;?>">
                    <img src="<?=$uri?>/img/common/logo.svg" class="logo" alt="">
                </a>
                <p class="siteName">SRCグループ<?=date('Y')+1 ?>サイト</p>
            </div>
            <div class="center">
                <ul class="navi">
                    <li><a href="">私たちの仕事について</a></li>
                    <li><a href="">SRCで働く人たち</a></li>
                    <li><a href="">SRCミライビジョン</a></li>
                    <li><a href="">NEWS & TOPICS</a></li>
                    <li><a href="">SRC社員インタビュー</a></li>
                    <!-- <li><a href="<?php // echo $site_url;?>/post" class="<?php // echo $active = ($server_uri === '/post/') ? 'active' : ''; ?>">ニュース</a></li> -->
                    <!-- <li><a href="<?php // echo $site_url;?>/contact" class="<?php // echo $active = ($slug === 'contact') ? 'active' : ''; ?>">CONTACT</a></li> -->
                </ul>
            </div>
            <div class="right">
                <a href="<?php echo $site_url;?>/contact" class="pc-headContactBtn">ご応募・お問い合わせ</a>
                <a href="<?php echo $site_url;?>/contact" class="sp-headContactBtn">
                    <img src="<?=$uri?>/img/header/header06/sp-contact.svg" alt="ご応募・お問い合わせ">
                </a>
            </div>
        </div>
        <div class="lower">
            <ul class="navi">
                <li><a href="">私たちの仕事について</a></li>
                <li><a href="">SRCで働く人たち</a></li>
                <li><a href="">SRCミライビジョン</a></li>
                <li><a href="">NEWS & TOPICS</a></li>
                <li><a href="">SRC社員インタビュー</a></li>
                <!-- <li><a href="<?php // echo $site_url;?>/post" class="<?php // echo $active = ($server_uri === '/post/') ? 'active' : ''; ?>">ニュース</a></li> -->
                <!-- <li><a href="<?php // echo $site_url;?>/contact" class="<?php // echo $active = ($slug === 'contact') ? 'active' : ''; ?>">CONTACT</a></li> -->
            </ul>
        </div>
    </div>
</header>