<?php
    $uri = get_theme_file_uri(); // ルートpath
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
        <ul class="headerMenu">
            <li><a href="<?=$site_url;?>" class="<?=$active = ($server_uri === '/') ? 'active' : ''; ?>">トップ</a></li>
            <li><a href="<?=$site_url;?>/post" class="<?php echo isset($post) && $post->post_type === 'post' ? 'active' : ''; ?>">最新情報</a></li>
            <li class="megaMenu">
                <a href="">ご利用サポート</a>
                <div class="megaMenuSecond">
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
            <li><a href="<?=$site_url;?>/contact" class="<?php echo isset($post) && $post->post_name === 'contact' ? 'active' : ''; ?>">お問い合わせ</a></li>
        </ul>
        <div class="right">
            <a href="" class="btn">予約する<span>→</span></a>
        </div>
    </div>
</header>