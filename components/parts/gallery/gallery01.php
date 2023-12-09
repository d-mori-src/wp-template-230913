<div class="gallery01">
    <div class="categoryList">
        <button class="active" onclick="showAll()">全て表示</button>
        <button onclick="filterCategory('gallery1')">カテゴリ1</button>
        <button onclick="filterCategory('gallery2')">カテゴリ2</button>
        <button onclick="filterCategory('gallery3')">カテゴリ3</button>
    </div>
    <ul class="galleryList">
        <li><a href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-1/img/01.jpg" data-category="gallery3" data-lightbox="gallery3" data-title="グループ3キャプション"><img src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-1/img/01.jpg" alt=""><h3>キャプション文字が入ります</h3></a></li>
        <li><a href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-1/img/02.jpg" data-category="gallery1" data-lightbox="gallery1" data-title="グループ1キャプション"><img src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-1/img/02.jpg" alt=""><h3>キャプション文字が入ります</h3></a></li>
        <li><a href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-1/img/03.jpg" data-category="gallery1" data-lightbox="gallery1" data-title="グループ1キャプション"><img src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-1/img/03.jpg" alt=""><h3>キャプション文字が入ります</h3></a></li>
        <li><a href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-1/img/04.jpg" data-category="gallery1" data-lightbox="gallery1" data-title="グループ1キャプション"><img src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-1/img/04.jpg" alt=""><h3>キャプション文字が入ります</h3></a></li>
        <li><a href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-1/img/15.jpg" data-category="gallery2" data-lightbox="gallery2" data-title="グループ2キャプション"><img src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-1/img/15.jpg" alt=""><h3>キャプション文字が入ります</h3></a></li>
        <li><a href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-1/img/25.jpg" data-category="gallery2" data-lightbox="gallery2" data-title="グループ2キャプション"><img src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-1/img/25.jpg" alt=""><h3>キャプション文字が入ります</h3></a></li>
        <li><a href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-1/img/26.jpg" data-category="gallery2" data-lightbox="gallery2" data-title="グループ2キャプション"><img src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-1/img/26.jpg" alt=""><h3>キャプション文字が入ります</h3></a></li>
        <li><a href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-1/img/27.jpg" data-category="gallery3" data-lightbox="gallery3" data-title="グループ3キャプション"><img src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-1/img/27.jpg" alt=""><h3>キャプション文字が入ります</h3></a></li>
    </ul>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        showAll();
    });
    function filterCategory(category) {
        const galleryItems = document.querySelectorAll('.galleryList li');

        galleryItems.forEach(function(item) {
            const searchCategory = item.querySelector('a').dataset.category;
            if (searchCategory === category) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }
    function showAll() {
        const galleryItems = document.querySelectorAll('.galleryList li');

        galleryItems.forEach(function(item) {
            item.style.display = 'block';
        });
    }
</script>

<!-- jQueryの場合 -->
<!-- 
    $(function() {
        showAll();
    });
    function filterCategory(category) {
        $('.galleryList li').each(function() {
            if ($(this).find('a').data('category') === category) {
                $(this).fadeIn(2000);
            } else {
                $(this).fadeOut(500);
            }
        });
    }
    function showAll() {
        $('.galleryList li').show();
    }
-->