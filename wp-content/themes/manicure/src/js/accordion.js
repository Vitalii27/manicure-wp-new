jQuery(function ($) {
    var date = new Date();
    var timestamp = date.getTime()
    console.log(date);
    // console.log(timestamp);
    var $accrodions = $(".js-accordions");
    var $accrodion = $accrodions.find(".accordion");
    var closeClass = "is-close";
    var speed = 200;
    var isClose = false;
    var btnElem = $('.js-open-down');
    var btnValue;
    function openAccordion() {
        closeAll();
        btnElem.find('span').text(btnValue)
        $(this).removeClass(closeClass);

        $(this).find(".accordion_content").slideDown(speed);
    }

    function closeAccordion() {
        $(this).addClass(closeClass);
        $(this).find(".accordion_content").slideUp(speed);
    }

    function closeAll() {
        $accrodion.each(function (i, el) {
            closeAccordion.call(el);
        });
    }

    if($accrodion.length) {
        $accrodion.each(function (i, el) {
            var btn = $(el).find(".js-open-down");
            // btnValue = btn.find('span').text()
            if(!isClose) {
                // btn.find('span').text(btnValue)
                closeAccordion.call(el);
            }

            btn.on("click", function () {
                // btnElem.removeClass('open-btn')
                if(btnElem.hasClass('open-btn')){
                    btnElem.removeClass('open-btn')
                } else{
                    $(this).addClass('open-btn')
                }

                if($(el).hasClass(closeClass)) {

                    openAccordion.call(el);
                    // $(this).find('span').text('Свернуть')
                } else {
                    closeAccordion.call(el);

                    // btnText =	$(this).find('span').text(btnValue)

                }
            });
        });// end .each()
    }
});