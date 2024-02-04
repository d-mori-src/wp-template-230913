<?php 
  $uri = get_theme_file_uri();
?>
      <!-- 使いたいフッターパターンを適宜読み込み -->
      <?php // get_template_part('components/Layout/footer/footer05'); ?>
    </div>

    <script src="<?= $uri ?>/js/jquery.3.4.1.js"></script>
    <script src="<?= $uri ?>/js/main.js"></script>

    <!-- slick関係 -->
    <link href="<?= $uri ?>/js/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="<?= $uri ?>/js/slick.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?= $uri ?>/js/slick.min.js"></script>
    <script src="<?= $uri ?>/js/thumb_slide.js"></script>

    <!-- Lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>

    <!-- ローディング関係 -->
    <script src="<?= $uri ?>/js/vivus.min.js"></script>
    <script src="<?= $uri ?>/js/particles.min.js"></script>
    <script src="<?= $uri ?>/js/particles.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.4/vivus.min.js"></script> -->
    <!-- <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> -->

    <!-- swiper -->
    <script src="<?= $uri ?>/js/swiper-bundle.min.js"></script>
    <script src="<?= $uri ?>/js/swiper.js"></script>
  <?php wp_footer(); ?>
  </body>
</html>