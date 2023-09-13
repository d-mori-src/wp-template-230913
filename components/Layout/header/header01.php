<?php
    $uri = get_theme_file_uri(); // ルートpath
    global $post;
    $slug = $post->post_name;
    $site_url = site_url(); // サイトURL
    $server_uri = $_SERVER['REQUEST_URI'];
    $server_uri_trimed = substr($server_uri, 0, strcspn($server_uri,'?')); 
?>
<header class="header01">
    <div class="innerHeader">
        <a href="<?=$site_url;?>" class="logo">
            <img src="<?=$uri?>/img/common/logo.svg" class="logo" alt="logo">
        </a>
        <ul>
            <li><a href="<?=$site_url;?>" class="<?=$active = ($server_uri === '/') ? 'active' : ''; ?>">HOME</a></li>
            <li><a href="<?=$site_url;?>/post" class="<?=$active = ($server_uri === '/post/') ? 'active' : ''; ?>">POST</a></li>
            <li><a href="<?=$site_url;?>/contact" class="<?=$active = ($slug === 'contact') ? 'active' : ''; ?>">CONTACT</a></li>
        </ul>
    </div>
</header>