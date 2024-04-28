<?php
    $uri = get_theme_file_uri(); // ルートpath
    global $post;
    $slug = $post->post_name;
    $site_url = site_url(); // サイトURL
    $server_uri = $_SERVER['REQUEST_URI'];
    $server_uri_trimed = substr($server_uri, 0, strcspn($server_uri,'?')); 
?>
<header class="header03">
    <div class="innerHeader">
        <div class="left">
            <a href="<?=$site_url;?>">
                <img src="<?=$uri?>/img/common/logo.svg" class="logo" alt="">
            </a>
        </div>
        <ul class="center">
            <li><a href="<?=$site_url;?>" class="<?=$active = ($server_uri === '/') ? 'active' : ''; ?>">HOME</a></li>
            <li><a href="<?=$site_url;?>/post" class="<?php echo isset($post) && $post->post_type === 'post' ? 'active' : ''; ?>">POST</a></li>
            <li><a href="<?=$site_url;?>/contact" class="<?php echo isset($post) && $post->post_name === 'contact' ? 'active' : ''; ?>">CONTACT</a></li>
        </ul>
        <div class="right">
            <a href="" class="dashIcon"><img src="<?=$uri?>/img/header/header03/dash_icon.svg" alt=""></a>
        </div>
    </div>
</header>