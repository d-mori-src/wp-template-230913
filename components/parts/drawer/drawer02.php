<?php 
  $uri = get_theme_file_uri(); // ルートpath
  global $post;
  $slug = $post->post_name;
  $site_url = site_url(); // サイトURL
  $server_uri = $_SERVER['REQUEST_URI'];
  $server_uri_trimed = substr($server_uri, 0, strcspn($server_uri,'?'));
?>

<!-- モバイルのみドロワーメニュー -->
<input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
<label for="openSidebarMenu" class="sidebarIconToggle">
<div class="spinner diagonal part-1"></div>
<div class="spinner horizontal"></div>
<div class="spinner diagonal part-2"></div>
</label>
<div id="sidebarMenu02">
<ul class="majorHeading">
  <li class="majorHeadingItem">
    <a href="<?=$site_url;?>">ホーム<span>→</span></a>
  </li>
  <li class="majorHeadingItem">
    <a href="<?=$site_url;?>/post">投稿<span>→</span></a>
    <ul class="subHeading">
      <li class="subHeadingItem"><a href="">サブメニュー<span>→</span></a></li>
      <li class="subHeadingItem"><a href="">サブメニュー<span>→</span></a></li>
      <li class="subHeadingItem"><a href="">サブメニュー<span>→</span></a></li>
    </ul>
  </li>
  <li class="majorHeadingItem">
    <a href="<?=$site_url;?>/contact">お問い合わせ</a>
  </li>
</ul>
</div><!-- /モバイルのみドロワーメニュー -->