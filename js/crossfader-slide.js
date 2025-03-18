// スライドショーの設定
const sliderConfig = {
    titles: [
        '<span>This is sub catch</span>メインキャッチ<br />入ります',
        '<span>This is sub catch</span>メインキャッチ<br />入ります',
        '<span>This is sub catch</span>メインキャッチ<br />入ります',
    ],
    duration: 4000,
    autoplay: true,
    swipe: false,
    dots: false,
    arrows: false,
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
    const current = sliderConfig.defaultIndex; // 現在のインデックスを保持

    sliderConfig.elInner[current].classList.remove('is-visible');
    setTimeout(() => {
        sliderConfig.elInner[next].classList.add('is-visible');
        updateTitle(next);
        sliderConfig.defaultIndex = next; // アニメーション完了後にインデックスを更新
        if (sliderConfig.autoplay) {
            startAutoplay();
        }
        if (sliderConfig.dots) {
            updateDots(next); // dotsの状態を更新
        }
    }, 100); // アニメーション時間に合わせて調整
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

/**
 * スワイプ処理
 */
const initSwipe = () => {
    let touchStartX = 0;
    let touchEndX = 0;

    elCrossfader.addEventListener('touchstart', (e) => {
        touchStartX = e.touches[0].clientX;
        stopAutoplay();
    });
    elCrossfader.addEventListener('touchmove', (e) => {
        touchEndX = e.touches[0].clientX;
    });
    elCrossfader.addEventListener('touchend', () => {
        handleSwipe();
    });
    elCrossfader.addEventListener('mousedown', (e) => {
        touchStartX = e.clientX;
        stopAutoplay();
    });
    elCrossfader.addEventListener('mousemove', (e) => {
        if (touchStartX) {
            touchEndX = e.clientX;
        }
    });
    elCrossfader.addEventListener('mouseup', () => {
        handleSwipe();
    });

    const handleSwipe = () => {
        if (touchStartX && touchEndX) {
            const diffX = touchEndX - touchStartX;
            if (diffX > 50) { // 右スワイプ
                let next = (sliderConfig.defaultIndex - 1 + sliderConfig.elInner.length) % sliderConfig.elInner.length;
                switchImage(next);
            } else if (diffX < -50) { // 左スワイプ
                let next = (sliderConfig.defaultIndex + 1) % sliderConfig.elInner.length;
                switchImage(next);
            }
            touchStartX = 0;
            touchEndX = 0;
        }
        if (sliderConfig.autoplay) {
            startAutoplay();
        }
    };
};

/**
 * dots要素の生成とイベントリスナーの設定
 */
const initDots = () => {
    const dotsContainer = document.createElement('div');
    dotsContainer.classList.add('dots-container');
    elCrossfader.parentElement.appendChild(dotsContainer);

    sliderConfig.titles.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        dot.addEventListener('click', () => {
            switchImage(index);
        });
        dotsContainer.appendChild(dot);
    });

    updateDots(sliderConfig.defaultIndex);
};

/**
 * アクティブなdotsを更新
 */
const updateDots = (index) => {
    const dots = document.querySelectorAll('.dot');
    dots.forEach((dot, i) => {
        if (i === index) {
            dot.classList.add('is-active');
        } else {
            dot.classList.remove('is-active');
        }
    });
};

/**
 * prev/nextボタンの生成とイベントリスナーの設定
 */
const initArrows = () => {
    const prevButton = document.createElement('div');
    prevButton.classList.add('arrow', 'prev');
    prevButton.innerHTML = '＜'; // 左矢印
    prevButton.addEventListener('click', () => {
        let next = (sliderConfig.defaultIndex - 1 + sliderConfig.elInner.length) % sliderConfig.elInner.length;
        switchImage(next);
    });
    elCrossfader.parentElement.appendChild(prevButton);

    const nextButton = document.createElement('div');
    nextButton.classList.add('arrow', 'next');
    nextButton.innerHTML = '＞'; // 右矢印
    nextButton.addEventListener('click', () => {
        let next = (sliderConfig.defaultIndex + 1) % sliderConfig.elInner.length;
        switchImage(next);
    });
    elCrossfader.parentElement.appendChild(nextButton);
};

// ページ読み込み時の処理
window.onload = () => {
    switchImage(sliderConfig.defaultIndex);
    if (sliderConfig.swipe) initSwipe();
    if (sliderConfig.dots) initDots();
    if (sliderConfig.arrows) initArrows();
};