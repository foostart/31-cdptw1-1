// $(document).ready(function() {
//     $(".dropdown").hover(
//             function () {
//                 $('.dropdown-menu', this).fadeIn("fast");
//             },
//             function () {
//                 $('.dropdown-menu', this).fadeOut("fast");
//             });

            
// });



$(document).ready(function () {
    
    //initialize swiper when document ready
 var mySwiper = new Swiper ('.swiper-container', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,
      autoplay: {
        delay: 300,
        disableOnInteraction:false
      },
    //         pagination: {
    //   el: '.swiper-pagination',
    // },
    
    slidesPerView: 7,
    // slidesPerGroup: 2,

    spaceBetween: 2,

          navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    });
   


    $(window).resize(function(){
        var ww = $(window).width()
        if (ww>1000) mySwiper.params.slidesPerView = 6;
        if (ww>468 && ww<=1000) mySwiper.params.slidesPerView = 3;
        if (ww<=468) mySwiper.params.slidesPerView = 1;
        // mySwiper.reInit();
      })
      $(window).trigger('resize');

  });

// var mySwiper = new Swiper ('.swiper-container', {
//     // Các Parameters
//     direction: 'vertical',
//     loop: true,

//     // Nếu cần pagination
//     pagination: {
//       el: '.swiper-pagination',
//     },

//     // Nếu cần navigation
//     navigation: {
//       nextEl: '.swiper-button-next',
//       prevEl: '.swiper-button-prev',
//     },

//     // Nếu cần scrollbar
//     scrollbar: {
//       el: '.swiper-scrollbar',
//     },
//   });