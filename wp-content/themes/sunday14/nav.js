
$(window).load(function () {
    "use strict";
    if ($(".multi-pages").length > 0) {
        var navHeight = $(".multi-pages").outerHeight();
        $(".content .byline").css("margin-bottom", navHeight);
        var rem = $("body").width() / 100,
            winHeight = $(window).height(),
            navPos = $(".multi-pages").offset().top,
            contentPos = $(".content").offset().top,
            contentHeight = $(".content").outerHeight(),
            contentBotPos = contentPos + contentHeight,
            breakPoint = contentBotPos - winHeight;
        
        var sticky = function () {
            var scrollPos = $(window).scrollTop();
            if (scrollPos >= navHeight) {
                $(".multi-pages").addClass("fixed-bottom");
            }
            if (scrollPos < navHeight) {
                $(".multi-pages").removeClass("fixed-bottom");
            }
            
            if (scrollPos >= breakPoint) {
                $(".multi-pages").removeClass("fixed-bottom").addClass("absolute-bottom");
            }
            if (scrollPos < breakPoint && scrollPos >= navHeight) {
                $(".multi-pages").removeClass("absolute-bottom").addClass("fixed-bottom");
            }
        };
        sticky();
        $(window).scroll(sticky);
    }
});
