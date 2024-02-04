const swiper1 = new Swiper('.swiper01', {
    slidesPerView: 1,
    loop: true,
    autoplay: {
        delay: 3000,
    },
    mousewheel: true,
    effect: 'fade',
    speed: 1000,
    pagination: {
        el: '.swiper-pagination',
    },
});

const swiper2 = new Swiper('.swiper02', {
    slidesPerView: 3,
    spaceBetween: 10,
    loop: true,
    spaceBetween: 40,
    navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev'
	},
    // autoplay: {
    //     delay: 5000,
    // },
    mousewheel: false,
    speed: 1000,
});