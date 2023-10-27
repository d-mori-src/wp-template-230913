<?php
    $uri = get_theme_file_uri(); // ルートpath
    global $post;
    $slug = $post->post_name;
    $site_url = site_url(); // サイトURL
    $server_uri = $_SERVER['REQUEST_URI'];
    $server_uri_trimed = substr($server_uri, 0, strcspn($server_uri,'?')); 
?>
<header class="header04">
    <div class="innerHeader">
        <div class="left">
            <a href="<?=$site_url;?>">
                <img src="<?=$uri?>/img/common/logo_wh.svg" class="logo" alt="">
            </a>
        </div>
        <ul class="center">
            <li><a href="<?=$site_url;?>" class="<?=$active = ($server_uri === '/') ? 'active' : ''; ?>">トップ</a></li>
            <li><a href="<?=$site_url;?>/post" class="<?=$active = ($server_uri === '/post/') ? 'active' : ''; ?>">最新情報</a></li>
            <li class="parent_menu">
                <a tabindex="-1">ホバーするメガメニュー</a>
                <div class="child_menu">
                    <div class="inner_child_menu">
                        <ul>
                            <li class="heding"><a href="">見出し<span>→</span></a></li>
                            <li class="subheading"><a href="">小見出し</a></li>
                            <li><a href="">メニュー</a></li>
                            <li><a href="">メニュー</a></li>
                        </ul>
                        <ul>
                            <li class="heding"><a href="">見出し<span>→</span></a></li>
                            <li class="subheading"><a href="">小見出し</a></li>
                            <li><a href="">メニュー</a></li>
                            <li><a href="">メニュー</a></li>
                            <li class="subheading"><a href="">小見出し</a></li>
                            <li><a href="">メニュー</a></li>
                            <li><a href="">メニュー</a></li>
                        </ul>
                        <ul>
                            <li class="heding"><a href="">見出し<span>→</span></a></li>
                            <li class="subheading"><a href="">小見出し</a></li>
                            <li><a href="">メニュー</a></li>
                            <li><a href="">メニュー</a></li>
                            <li class="subheading"><a href="">小見出し</a></li>
                            <li><a href="">メニュー</a></li>
                            <li><a href="">メニュー</a></li>
                        </ul>
                        <ul>
                            <li class="heding"><a href="">見出し<span>→</span></a></li>
                            <li class="subheading"><a href="">小見出し</a></li>
                            <li><a href="">メニュー</a></li>
                            <li><a href="">メニュー</a></li>
                            <li class="subheading"><a href="">小見出し</a></li>
                            <li><a href="">メニュー</a></li>
                            <li><a href="">メニュー</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li><a href="<?=$site_url;?>/contact" class="<?=$active = ($slug === 'contact') ? 'active' : ''; ?>">お問い合わせ</a></li>
        </ul>
        <div class="right">
            <a href="" class="btn">予約する<span>→</span></a>
        </div>
    </div>
</header>