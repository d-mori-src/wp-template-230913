<?php 
  $uri = get_theme_file_uri(); // ルートpath
  global $post;
  $slug = $post->post_name;
  $site_url = site_url(); // サイトURL
  $server_uri = $_SERVER['REQUEST_URI'];
  $server_uri_trimed = substr($server_uri, 0, strcspn($server_uri,'?'));
?>

<div class="drawer03">
  <div class="openbtn">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <div class="menu">
    <div class="innerMenu">
      <ul>
          <li class="title"><a href="">トップページ</a></li>
          <li><a href="">Menu Item 1</a></li>
          <li><a href="">Menu Item 2</a></li>
          <li><a href="">Menu Item 3</a></li>
          <li><a href="">Menu Item 4</a></li>
          <li class="title"><a href="">概要</a></li>
          <li><a href="">Menu Item 5</a></li>
          <li><a href="">Menu Item 6</a></li>
      </ul>
      <ul>
          <li class="title"><a href="">商品紹介</a></li>
          <li><a href="">Menu Item 1</a></li>
          <li><a href="">Menu Item 2</a></li>
          <li class="title"><a href="">商品紹介</a></li>
          <li><a href="">Menu Item 3</a></li>
          <li><a href="">Menu Item 4</a></li>
      </ul>
      <ul>
          <li class="title"><a href="">プロダクト紹介</a></li>
          <li><a href="">Menu Item 1</a></li>
          <li><a href="">Menu Item 2</a></li>
      </ul>
      <ul>
          <li class="title"><a href="">お問い合わせ</a></li>
          <li><a href="">Menu Item 1</a></li>
          <li><a href="">Menu Item 2</a></li>
      </ul>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const openBtn = document.querySelector('.openbtn');
    const menu = document.querySelector('.menu');

    openBtn.addEventListener('click', function () {
        this.classList.toggle('active');
        menu.classList.toggle('menuOpen');
    });
  });
</script>

<!--
// jQueryの場合
$(function() {
  $('.openbtn').on('click', function () {
    $(this).toggleClass('active');
    $('.menu').toggleClass('menuOpen');
  });
});
-->