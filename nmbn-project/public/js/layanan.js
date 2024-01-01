let swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 3,
        slideShadows: true,
    },
    loop: false,
    initialSlide: 1,
    pagination: {
        el: ".paginate",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    speed: 1000,
    breakpoints: {
        640: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 2,
        },
        1560: {
            slidesPerView: 3,
        },
    },
});
