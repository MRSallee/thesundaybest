
$(window).load(function () {
    stickyIni();
});

var stickyIni = function () {
    if ($('.multi-pages').length > 0) {
        var navHeight = $('.multi-pages').outerHeight();
        $('.content .byline').css('margin-bottom', navHeight);
        $('.content').addClass('multi-paged');
        var viewportHeight = $(window).height(),
            heroHeight = $('.hero-container').outerHeight(),
            navPos = $('.multi-pages').offset().top,
            contentHeight = $('.content').outerHeight(),
            contentPos = $('.content').offset().top,
            contentBottomPos = contentPos + contentHeight,
            fixedBottomPos = heroHeight + navHeight - viewportHeight,
            absoluteBottomPos = contentBottomPos - viewportHeight,
            stickyController = function () {
                var scrollPos = $(window).scrollTop();
                if (scrollPos < fixedBottomPos) {
                    $('.multi-pages').removeClass('fixed-bottom absolute-bottom');
                }
                else if (scrollPos >= fixedBottomPos && scrollPos < absoluteBottomPos) {
                    $('.multi-pages').addClass('fixed-bottom').removeClass('absolute-bottom');
                }
                else if (scrollPos >= absoluteBottomPos) {
                    $('.multi-pages').addClass('absolute-bottom').removeClass('fixed-bottom');
                }
                else {
                    
                }
                $('.multi-pages').addClass('visible');
            };
        stickyController();
        $(window).scroll(stickyController);
    }
    else {
        
    }
};