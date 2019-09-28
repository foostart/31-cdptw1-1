$(document).ready(function(){
                // All
                $(".tabsframesearch>ul>li:nth-child(1)").click(function(){
                    $(".tabsframesearch>ul>li>a").removeClass("active");
                    $(".tabsframesearch>ul>li:nth-child(1)>a").addClass("active");
                    $(".tabcontent>div:nth-child(2)").css({'display':'block'});
                    $(".tabcontent>div:nth-child(3)").css({'display':'none'});
                    $(".tabsframecontent:nth-child(4)").css({'display':'none'});
                });

                // Rent
                $(".tabsframesearch>ul>li:nth-child(2)").click(function(){
                    
                    $(".tabsframesearch>ul>li>a").removeClass("active");
                    $(".tabsframesearch>ul>li:nth-child(2)>a").addClass("active");    
                    $(".tabcontent>div:nth-child(2)").css({'display':'none'});
                    $(".tabcontent>div:nth-child(3)").css({'display':'block'});
                    $(".tabsframecontent:nth-child(4)").css({'display':'none'});
                });

                // Sale
                $(".tabsframesearch>ul>li:nth-child(3)").click(function(){
                    
                    $(".tabsframesearch>ul>li>a").removeClass("active");
                    $(".tabsframesearch>ul>li:nth-child(3)>a").addClass("active");  
                    $(".tabcontent>div:nth-child(2)").css({'display':'none'});
                    $(".tabcontent>div:nth-child(3)").css({'display':'none'});
                    $(".tabsframecontent:nth-child(4)").css({'display':'block'});
                });
            });