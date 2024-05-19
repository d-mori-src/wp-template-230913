<?php 
  $uri = get_theme_file_uri(); // ルートpath
  global $post;
  $site_url = site_url(); // サイトURL
  $server_uri = $_SERVER['REQUEST_URI'];
  $server_uri_trimed = substr($server_uri, 0, strcspn($server_uri,'?'));
?>

<div class="drawer01">
  <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
  <label for="openSidebarMenu" class="sidebarIconToggle">
  <div class="spinner diagonal part-1"></div>
  <div class="spinner horizontal"></div>
  <div class="spinner diagonal part-2"></div>
  </label>
  <div id="sidebarMenu">
    <ul>
      <li>
        <img src="<?= $uri ?>/img/common/triangle.svg" class="icon" alt="icon" />
        <a href="<?=$site_url;?>">HOME</a>
      </li>
      <li>
        <img src="<?= $uri ?>/img/common/triangle.svg" class="icon" alt="icon" />
        <a href="<?=$site_url;?>/post">POST</a>
      </li>
      <li>
        <img src="<?= $uri ?>/img/common/triangle.svg" class="icon" alt="icon" />
        <a href="<?=$site_url;?>/contact">CONTACT</a>
      </li>
    </ul>
  </div>
</div>
