<div class="image-wrapper">
    <h1 class="title"></h1>
    <div class="image-crossfader">
        <div class="image-crossfader-inner"></div>
        <div class="image-crossfader-inner"></div>
    </div>
</div>

<script>
    let elInner, duration, defaultIndex, switchImage, elTitle;
    elInner = document.getElementsByClassName('image-crossfader-inner');
    duration = 4000;
    defaultIndex = 0;

    // タイトル切り替え
    elTitle = document.querySelector('.title');
    const titles = [
        '<span>Sholder</span>メインコピー',
        '<span>Sholder</span>メインコピー'
    ];

    switchImage = function (next) {
        const current = next ? (next - 1) : elInner.length - 1;
        elInner[current].classList.remove('is-visible');
        elInner[next].classList.add('is-visible');
        elTitle.innerHTML = titles[next];
        next = (++next < elInner.length) ? next : 0;
        setTimeout(switchImage.bind(this, next), duration);
    };
    window.onload = switchImage.bind(this, defaultIndex);
</script>
