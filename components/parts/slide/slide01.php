<div class="slide01">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="https://picsum.photos/id/237/800/600" alt="" /></div>
        <div class="swiper-slide"><img src="https://picsum.photos/id/238/800/600" alt="" /></div>
        <div class="swiper-slide"><img src="https://picsum.photos/id/239/800/600" alt="" /></div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    
    <script>
        const swiper = new Swiper('.slide01', {
            slidesPerView: 3,
            grabCursor: true,
            centeredSlides: true,
            loop: true,
            speed: 500,
            mousewheel: true,
            autoplay: {
                delay: 2000,
                pauseOnMouseEnter: true,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });
    </script>
</div>