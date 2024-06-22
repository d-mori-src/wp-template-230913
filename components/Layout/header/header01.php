<?php
    $uri = get_theme_file_uri(); // ルートpath
    $site_url = site_url(); // サイトURL
    $server_uri = $_SERVER['REQUEST_URI'];
    $server_uri_trimed = substr($server_uri, 0, strcspn($server_uri,'?')); 
?>
<header class="header01">
    <div class="innerHeader">
        <a href="<?=$site_url;?>" class="logo">
            <img src="<?=$uri?>/img/common/logo.svg" alt="logo">
        </a>
        <ul>
            <li><a href="<?=$site_url;?>" class="<?=$active = ($server_uri === '/') ? 'active' : ''; ?>">HOME</a></li>
            <li><a href="<?=$site_url;?>/post/" class="<?=$active = ($server_uri === '/post/') ? 'active' : ''; ?>">POST</a></li>
            <li><a href="<?=$site_url;?>/contact" class="<?php echo isset($post) && $post->post_name === 'contact' ? 'active' : ''; ?>">CONTACT</a></li>
            <li><a href="<?=$site_url;?>/wpcf7-contact" class="<?php echo isset($post) && $post->post_name === 'wpcf7-contact' ? 'active' : ''; ?>">CONTACT FORM7</a></li>
        </ul>
    </div>
</header>