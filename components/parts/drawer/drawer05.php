<?php 
  $uri = get_theme_file_uri(); // ルートpath
  global $post;
  $site_url = site_url(); // サイトURL
  $server_uri = $_SERVER['REQUEST_URI'];
  $server_uri_trimed = substr($server_uri, 0, strcspn($server_uri,'?'));
?>

<div class="drawer05">
  <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
  <label for="openSidebarMenu" class="sidebarIconToggle">
  <div class="spinner diagonal part-1"></div>
  <div class="spinner horizontal"></div>
  <div class="spinner diagonal part-2"></div>
  </label>
  <div id="sidebarMenu">
    <div class="naviWrap">
      <ul class="navi">
        <li><a href="<?php echo $site_url;?>">トップ</a></li>
        <li><a href="">私たちの仕事について</a></li>
        <li><a href="">SRCで働く人たち</a></li>
        <li><a href="">NEWS & TOPICS</a></li>
        <li><a href="">SRC社員インタビュー</a></li>
        <!-- <li><a href="<?php // echo $site_url;?>/post">POST</a></li> -->
      </ul>
      <ul class="navi"> 
        <li><a href="">データで見る</a></li>
        <li><a href="">プライベートインタビュー</a></li>
        <li><a href="">社員座談会・対談</a></li>
        <li><a href="">SRCミライビジョン</a></li>
        <li><a href="">学生Q&A</a></li>
      </ul>
    </div>
    <a class="sidebarMenuContactBtn" href="<?php echo $site_url;?>/contact">ご応募・お問い合わせ</a></li>
  </div>
</div>
