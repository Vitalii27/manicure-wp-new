var PopUpModule = (function ($) {
    // private methods
    var _removalDelay = 150;
    var _scrollBarWidth = detectModule.scrollBarWidth;

    var isOpenPopup = function () {
        // console.log("open pop-up");
        $('body').css('padding-right', _scrollBarWidth + "px");
        $("html").addClass("pop-up-is-showed");
    };

    var isClosePopup = function () {
        // console.log("close pop-up");
        $("html").removeClass("pop-up-is-showed");
        $('body').css('padding-right', 0);
    };


    return {
        // public methods
        initInline: function (selector) {
            $(selector).data("ignore-scroll", true);
            $(selector).magnificPopup({
                type: 'inline',
                preloader: false,
                removalDelay: _removalDelay,
                mainClass: 'mfp-fade',
                overflowY: 'hidden',
                showCloseBtn: true,
                callbacks: {
                    open: isOpenPopup,
                    close: isClosePopup
                }
            });
        },
        initImg: function (selector) {
            $(selector).data("ignore-scroll", true);
            $(selector).magnificPopup({
                delegate: 'a',
                type: 'image',
                dots: true,
                gallery: {
                    enabled: true
                },

                preloader: false,
                removalDelay: _removalDelay,
                mainClass: 'mfp-fade',
                overflowY: 'hidden',
                showCloseBtn: true,
                callbacks: {
                    open: isOpenPopup,
                    close: isClosePopup
                }
            });
        },

        initAjax: function (selector) {
            $(selector).data("ignore-scroll", true);
            var _this = this;
            $(selector).magnificPopup({
                type: 'ajax',
                preloader: true,
                removalDelay: _removalDelay,
                mainClass: 'mfp-fade',
                overflowY: 'hidden',
                showCloseBtn: true,
                callbacks: {
                    open: isOpenPopup,
                    ajaxContentAdded: function () {
                        // FormStyler.initSelect(".select");
                        // console.log(_this);
                        // _this.initAjax(".js-pop-up-ajax");
                    },
                    close: isClosePopup
                }
            });
        },

        open: function (html) {
            $.magnificPopup.close();
            //wait for animation
            setTimeout(function () {
                // Open directly via API
                $.magnificPopup.open({
                    items: {
                        src: html, // can be a HTML string, jQuery object, or CSS selector
                        type: 'inline'
                    },
                    removalDelay: _removalDelay,
                    mainClass: 'mfp-fade',
                    overflowY: 'scroll',
                    showCloseBtn: false,
                    callbacks: {
                        open: function () {
                            isOpenPopup();
                            // FormStyler.initSelect(".select");
                            // ProductSlider.init(".js-product-slider", ".js-product-thumbs");
                        },
                        close: isClosePopup
                    }
                });
            }, _removalDelay);
        },
        openAjax: function (href, setting) {
            var _this = this;
            $.ajax({
                url: href,
                type: 'GET',
                success: function (data) {
                    //console.log(data);
                    _this.open(data);
                }
            });

        }
    }
}(jQuery));

jQuery(function ($) {

    var wpcf7Elm = document.getElementById('wpcf7-f161-o2');
    var wpcf7Elm3 = document.getElementById('wpcf7-f161-o5');
    var wpcf7Elm2 = document.getElementById('wpcf7-f10-o1');

    PopUpModule.initInline(".js-pop-up");
    PopUpModule.initImg(".js-pop-up-img");
    if (wpcf7Elm) {
        wpcf7Elm.addEventListener('wpcf7mailsent', function (event) {
            $.magnificPopup.close();
            alertSucsess.showAlert('<i class="fa fa-info-circle" aria-hidden="true"></i> Ваше сообщение отправлено');

        }, false);
    }
    if (wpcf7Elm3) {
        wpcf7Elm3.addEventListener('wpcf7mailsent', function (event) {
            $.magnificPopup.close();
            alertSucsess.showAlert('<i class="fa fa-info-circle" aria-hidden="true"></i> Ваше сообщение отправлено');

        }, false);
    }
    if (wpcf7Elm2) {
        wpcf7Elm2.addEventListener('wpcf7mailsent', function (event) {

            alertSucsess.showAlert('<i class="fa fa-info-circle" aria-hidden="true"></i> Ваше сообщение отправлено');
        }, false);
    }

}); // ready