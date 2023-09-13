<?php 
  $uri = get_theme_file_uri();
?>
<footer class="footer01">
    <div class="innerFooter">
        <div class="footerHead">
            <img src="<?=$uri?>/img/common/logo_wh.svg" class="logo" alt="logo">
            <ul class="footerNavi">
                <li><a href="<?=$site_url;?>" class="">HOME</a></li>
                <li><a href="<?=$site_url;?>/post" class="">POST</a></li>
                <li><a href="<?=$site_url;?>/contact" class="">CONTACT</a></li>
            </ul>
        </div>
        <div class="footerMain">
            <div class="companyDetail">
                <h4>会社名・店舗名</h4>
                <div class="tabFlex">
                    <p>
                        [ 本社 ]<br />
                        〒000-0000　住所<br />
                        ビル名<br />
                        TEL 000-000-0000　/　FAX 000-000-0000
                    </p>
                    <p>
                        [ 支社 ]<br />
                        〒000-0000　住所<br />
                        ビル名<br />
                        TEL 000-000-0000　/　FAX 000-000-0000
                    </p>
                </div>

                <!-- SPのサイトマップ（開閉付き） -->
                <div class="spSitemap">
                    <button class="sitemapMore"></button>
                    <div class="sitemapHide">
                        <ul>
                            <li>
                                <img src="<?= $uri ?>/img/common/triangle.svg" class="icon" alt="icon" />
                                <a href="<?=$site_url;?>/">HOME</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <img src="<?= $uri ?>/img/common/triangle.svg" class="icon" alt="icon" />
                                <a href="<?=$site_url;?>/post">POST</a>
                            </li>
                        </ul>
                        <ul class="lastList">
                            <li>
                                <img src="<?= $uri ?>/img/common/triangle.svg" class="icon" alt="icon" />
                                <a href="<?=$site_url;?>/contact">CONTACT</a>
                            </li>
                            <li>
                                <img src="<?= $uri ?>/img/common/empty_triangle.svg" class="icon emptyIcon" alt="icon" />
                                <a href="<?=$site_url;?>/contact">お問い合わせ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- PCのサイトマップ -->
            <div class="pcSitemap">
                <div class="flexSitemap">
                    <ul>
                        <li>
                            <img src="<?= $uri ?>/img/common/triangle.svg" class="icon" alt="icon" />
                            <a href="<?=$site_url;?>/">HOME</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <img src="<?= $uri ?>/img/common/triangle.svg" class="icon" alt="icon" />
                            <a href="<?=$site_url;?>/post">POST</a>
                        </li>
                    </ul>
                </div>
                <div class="flexSitemap">
                    <ul>
                        <li>
                            <img src="<?= $uri ?>/img/common/triangle.svg" class="icon" alt="icon" />
                            <a href="<?=$site_url;?>/contact">CONTACT</a>
                        </li>
                        <li>
                            <img src="<?= $uri ?>/img/common/empty_triangle.svg" class="icon emptyIcon" alt="icon" />
                            <a href="<?=$site_url;?>/contact">お問い合わせ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <p class="copyright"><span>©</span><?=date('Y') ?> copyright</p>
    </div>
</footer>