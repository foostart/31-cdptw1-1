// $(document).ready(function() {
//     $(".dropdown").hover(
//             function () {
//                 $('.dropdown-menu', this).fadeIn("fast");
//             },
//             function () {
//                 $('.dropdown-menu', this).fadeOut("fast");
//             });


// });



$(document).ready(function() {

    //initialize swiper when document ready
    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },

        slidesPerView: 7,


        spaceBetween: 2,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

    });


    $(window).resize(function() {
        var ww = $(window).width()
        if (ww > 1000) mySwiper.params.slidesPerView = 6;
        if (ww > 468 && ww <= 1000) mySwiper.params.slidesPerView = 3;
        if (ww <= 468) mySwiper.params.slidesPerView = 1;

    })
    $(window).trigger('resize');

});