<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package manicure
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-T64SQT5');</script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="b59cc5f407bab4a7"/>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://securepayments.sberbank.ru/payment/docsite/assets/js/ipay.js"></script>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<script>
    var ipay = new IPAY({api_token: 'rq2cca8actj8ecqd5uvbi767ij'});
</script>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T64SQT5"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div><a class="arrow-to-up" href="#hero"><i class="fa fa-angle-up" aria-hidden="true"></i></a></div>
<header class="header js-header" id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="header_container">
                <div class="header_logo">
                    <?php if (get_field('header_logo')): ?>
                        <a href="#hero" class="header_link"> <img src="<?php the_field('header_logo') ?>"
                                                                  alt="logo"
                                                                  class="header_img">
                            <?php the_field('logo_text') ?>
                        </a>
                    <?php endif; ?>
                </div>
                <?php get_template_part('./template-parts/blocks/swipe-menu'); ?>   <?php get_template_part('./template-parts/blocks/menu-btn'); ?>
                <div class="header_btn">
                    <a onclick="ipayCheckout({
                            amount:  <?php the_field('header-btn-price') ?>,
                            currency:'RUB',
                            order_number:'',
                            description:  '<?php the_field('header-btn-name') ?>'},
                            function(order) { showSuccessfulPurchase(order) },
                            function(order) { showFailurefulPurchase(order) })" href="#" class="header_btn-link btn">Оплатить<br>онлайн</a>
                </div>
                <div class="header_phone">
                    <div class="header_number-wrapp">
                        <?php if (get_field('header_top-text')): ?>
                            <div class="header_top-text"><?php the_field('header_top-text') ?></div>
                        <?php endif; ?>
                        <?php if (get_field('header_tel')): ?>
                            <div class="header_number"><?php the_field('header_tel') ?></div>
                        <?php endif; ?>

                        <a href="#sing-up" class="header_call js-pop-up"><?php the_field('header_tel-text') ?></a>

                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<main class="main-content">
