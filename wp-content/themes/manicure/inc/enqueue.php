<?php

function get_css() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
//    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('plyr', 'https://cdn.plyr.io/3.4.3/plyr.css');

    wp_enqueue_style( 'slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );
    wp_enqueue_style( 'slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css' );
    wp_enqueue_style('magnific', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css');
//    wp_enqueue_style('select', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');
}

add_action('wp_enqueue_scripts', 'get_css');


function get_js() {

    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/vendors/modernizr-2.8.3.min.js', null, false, false);
    wp_enqueue_script('jquery', 'http://code.jquery.com/jquery-1.12.0.min.js', null, false, false);
    wp_enqueue_script('magnific', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', null, false, true);
    wp_enqueue_script('device-js', get_template_directory_uri() . '/assets/vendors/device.js', null, false, true);
    wp_enqueue_script('plyr-polyfill', 'https://cdn.polyfill.io/v2/polyfill.min.js?features=es6,Array.prototype.includes,CustomEvent,Object.entries,Object.values,URL', null, false, true);
    wp_enqueue_script('plyr-js', 'https://cdn.plyr.io/3.3.12/plyr.js', null, false, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/vendors/waypoints/waypoints.min.js', array('jquery'), false, true);
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), false, true);
//    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), false, true);
//    wp_enqueue_script('select', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js', array('jquery'), false, true);
//    wp_enqueue_script('select-2', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js', array('jquery'), false, true);
    wp_enqueue_script('yandex-map', '//api-maps.yandex.ru/2.1/?lang=ru_RU', array('jquery'), false, true);
    wp_enqueue_script('theme-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, true);
}

add_action('wp_enqueue_scripts', 'get_js');