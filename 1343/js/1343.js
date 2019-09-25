$(document).ready(function () {
    $(window).bind("scroll", function () {
        paralax(".m1-banner-img");

        var scrollTop = $(window).scrollTop();
        if (scrollTop >= 300) {
            $('.m1-navi-boder').addClass('m1-navi-scrollTop');
        } else {
            $('.m1-navi-boder').removeClass('m1-navi-scrollTop');
        }
    });
    
    var basicScroll = 0;
    $(window).scroll(function(){
        var scrollTop = $(window).scrollTop();
        if(scrollTop > basicScroll){
            $('.m1-navi-boder').slideUp('1000');
        }else{
            $('.m1-navi-boder').slideDown('1000');
        }
        basicScroll = scrollTop;
    });



    function paralax(element) {
        var scrollTop = $(window).scrollTop();
        $(element).css("transform", "translateY(" + (0.5 * scrollTop) + "px)");
    }
});

$(document).ready(function () {
    $('.m1-navi-icon-mobile-btn').click(function () {
        var icon = $(this).children('i');
        if(icon.hasClass("fa-reorder")){
            icon.removeClass('fa-reorder');
            icon.addClass('fa-times');
        }else{
            icon.removeClass('fa-times');
            icon.addClass('fa-reorder');
        }
        $('.m1-navi-menus').toggleClass('toggle-transition');

    });

    $('header').css("opacity", "0");
    $('.layer-0').css("opacity", "0");
    $('.layer-1').css("opacity", "0");
    $('.layer-2').css("opacity", "0");
    
    loadding('header', 0);
    loadding('.layer-0', 500);
    loadding('.layer-1', 1000);
    loadding('.layer-2', 1500);

    function loadding(element, deplay) {
        $(element).each(function () {
            $(this).delay(deplay).animate({'opacity': '1'}, 1000);
        });
    }
    
});

$(document).ready(function(){
    $("#search_icon").click(function(){
        $("#vamtam-overlay-search").fadeIn();
    });
    $("#vamtam-overlay-search-close").click(function(){
        $("#vamtam-overlay-search").fadeOut();
    })
})

$(document).ready(function () {
   
    /*----------------------------------Click Slide Submenu------------*/
															

		//  $("ul li a").on('click',function(){

        //     var target = $(this).parent().children(".sub-menu");
    
        //     $(target).slideToggle(400);
           
        //  });



      
        $('ul .fath-li').click(function() {
            var _this = $(this);
            _this.children(".sub-menu").slideToggle();
           
            $('ul .fath-li').not(_this).children('.sub-menu').slideUp();
            $('ul .fath-li a').css({"display":"block"});
        });

}); 
 function openNav() {
        document.getElementById("mySidenav").style.right= "0px";
        $(".my_overplay").show();
      }
      
      function closeNav() {
        document.getElementById("mySidenav").style.right = "-100%";
        $(".my_overplay").hide();
      }
 
