<div class="image-wrapper">
    <h1 class="title"></h1>
    <div class="image-crossfader"></div>
</div>

<script>
    // スライドショーの設定
    const sliderConfig = {
        titles: [
            '<span>This is sub catch</span>メインキャッチ<br />入ります',
            '<span>This is sub catch</span>メインキャッチ<br />入ります',
        ],
        duration: 4000,
        autoplay: true,
        elInner: [],
        defaultIndex: 0,
        elTitle: document.querySelector('.title'),
        timer: null,
    };

    // image-crossfader 要素の取得
    const elCrossfader = document.querySelector('.image-crossfader');

    // image-crossfader-inner 要素の自動生成
    sliderConfig.titles.forEach(() => {
        const inner = document.createElement('div');
        inner.classList.add('image-crossfader-inner');
        elCrossfader.appendChild(inner);
        sliderConfig.elInner.push(inner); // 生成した要素を配列に追加
    });

    /**
     * 画像の切り替え処理
     * @param {number} next - 次に表示する画像のインデックス
     */
    const switchImage = (next) => {
        const current = next ? (next - 1) : sliderConfig.elInner.length - 1;

        sliderConfig.elInner[current].classList.remove('is-visible');
        sliderConfig.elInner[next].classList.add('is-visible');

        updateTitle(next);
        sliderConfig.defaultIndex = next;

        if (sliderConfig.autoplay) {
            startAutoplay();
        }
    };

    /**
     * タイトルの更新処理
     * @param {number} index - 表示するタイトルのインデックス
     */
    const updateTitle = (index) => {
        sliderConfig.elTitle.innerHTML = sliderConfig.titles[index];
    };

    /**
     * autoplayの開始
     */
    const startAutoplay = () => {
        clearTimeout(sliderConfig.timer);
        sliderConfig.timer = setTimeout(() => {
            let next = (sliderConfig.defaultIndex + 1) % sliderConfig.elInner.length;
            switchImage(next);
        }, sliderConfig.duration);
    };

    /**
     * autoplayの停止
     */
    const stopAutoplay = () => {
        clearTimeout(sliderConfig.timer);
    };

    // ページ読み込み時の処理
    window.onload = () => {
        switchImage(sliderConfig.defaultIndex);
    };

    // autoplayの切り替え
    const toggleAutoplay = (enable) => {
        sliderConfig.autoplay = enable;
        if (sliderConfig.autoplay) {
            startAutoplay();
        } else {
            stopAutoplay();
        }
    };
</script>