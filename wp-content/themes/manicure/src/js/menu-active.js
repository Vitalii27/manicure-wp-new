jQuery(document).ready(function() {
    jQuery('#side-menu ul li a').each(function() {
        var location = window.location.href;
        var link = this.href;
        if (location == link) {
            jQuery(this).addClass('active');
        }
    });

});