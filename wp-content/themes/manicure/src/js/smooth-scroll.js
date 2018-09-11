/* smooth scrolling */
jQuery(function($) {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            // prevent conflict with tabs and other script used hash
            if ($(this).data("ignore-scroll")) return;

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 50
                }, 800);
                return false;
            }
        }
    });
    var lastScrollTop = 0;
    $(window).scroll(function(event){
        var st = $(this).scrollTop();
        if (st > lastScrollTop){

            $('.arrow-to-up').addClass('arrow-vissible')
        } else {
            $('.arrow-to-up').removeClass('arrow-vissible')
        }
        lastScrollTop = st;
    });
});
/* smooth scrolling end*/