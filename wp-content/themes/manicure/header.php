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

    <!-- NT -->
    <script > (function (w, d, s, l, i) {
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
    })(window, document, 'script', 'dataLayer', 'GTM-TZK7BD5');</script>
    <!-- End NT -->

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
    <script src="//st.yagla.ru/js/y.c.js?h=ee7f27a2337c939835e600bed3d1cfe3"></script>
    <script src="https://www.artfut.com/static/tagtag.min.js?campaign_code=7e3fe0f10b" async
            onerror='var self = this;window.ADMITAD=window.ADMITAD||{},ADMITAD.Helpers=ADMITAD.Helpers||{},ADMITAD.Helpers.generateDomains=function(){for(var e=new Date,n=Math.floor(new Date(2020,e.getMonth(),e.getDate()).setUTCHours(0,0,0,0)/1e3),t=parseInt(1e12*(Math.sin(n)+1)).toString(30),i=["de"],o=[],a=0;a<i.length;++a)o.push({domain:t+"."+i[a],name:t});return o},ADMITAD.Helpers.findTodaysDomain=function(e){function n(){var o=new XMLHttpRequest,a=i[t].domain,D="https://"+a+"/";o.open("HEAD",D,!0),o.onload=function(){setTimeout(e,0,i[t])},o.onerror=function(){++t<i.length?setTimeout(n,0):setTimeout(e,0,void 0)},o.send()}var t=0,i=ADMITAD.Helpers.generateDomains();n()},window.ADMITAD=window.ADMITAD||{},ADMITAD.Helpers.findTodaysDomain(function(e){if(window.ADMITAD.dynamic=e,window.ADMITAD.dynamic){var n=function(){return function(){return self.src?self:""}}(),t=n(),i=(/campaign_code=([^&]+)/.exec(t.src)||[])[1]||"";t.parentNode.removeChild(t);var o=document.getElementsByTagName("head")[0],a=document.createElement("script");a.src="https://www."+window.ADMITAD.dynamic.domain+"/static/"+window.ADMITAD.dynamic.name.slice(1)+window.ADMITAD.dynamic.name.slice(0,1)+".min.js?campaign_code="+i,o.appendChild(a)}});'>

    </script>
</head>

<body <?php body_class(); ?>>
<?php $header = get_option('header'); ?>
<script>
    var ipay = new IPAY({api_token: 'rq2cca8actj8ecqd5uvbi767ij'});
</script>
<!-- NT (noscript)-->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZK7BD5"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End NT (noscript) -->

<!-- Google Tag Manager (noscript) -->

<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T64SQT5"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
</noscript>
<div class="header_btn-mobile-pay">
    <a onclick="ipayCheckout({
            amount:  <?php echo $header['header-btn-price']; ?>,
            currency:'RUB',
            order_number:'',
            description:  '<?php echo $header['header-btn-name']; ?>'},
            function(order) { showSuccessfulPurchase(order) },
            function(order) { showFailurefulPurchase(order) })" href="#" class="header_btn-link btn"><img
                src="<?php echo $header['header-btn-mobile']; ?>"
                alt="img"></a>
</div>
<div><a class="arrow-to-up" href="#hero"><i class="fa fa-angle-up" aria-hidden="true"></i></a></div>
<header class="header js-header" id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="header_container">
                <div class="header_logo">
                    <?php if (!empty($header['header-logo'])) {
                        ?>
                        <a href="<?php echo get_home_url(); ?>" class="header_link"> <img
                                    src="<?php echo $header['header-logo']; ?>"
                                    alt="logo"
                                    class="header_img">
                            <p class="shadow-text--super-light">
                                <strong><?php echo $header['header-logo-text']; ?></strong></p>
                        </a>
                    <?php } ?>
                </div>
                <?php get_template_part('./template-parts/blocks/swipe-menu'); ?>   <?php get_template_part('./template-parts/blocks/menu-btn'); ?>
                <div class="header_btn">
                    <a onclick="ipayCheckout({
                            amount:  <?php echo $header['header-btn-price']; ?>,
                            currency:'RUB',
                            order_number:'',
                            description:  '<?php echo $header['header-btn-name']; ?>,'},
                            function(order) { showSuccessfulPurchase(order) },
                            function(order) { showFailurefulPurchase(order) })" href="#" class="header_btn-link btn">Оплатить<br>онлайн</a>
                </div>
                <div class="header_phone">
                    <div class="header_number-wrapp">
                        <?php if (!empty($header['header-logo'])) {
                            ?>
                            <div class="shadow-text--super-light header_top-text"><?php echo $header['header_top-text']; ?></div>
                        <?php } ?>
                        <!--                        --><?php //if (get_field('header_tel')): ?>
                        <div class="header_number"></div>
                        <!--                        --><?php //endif; ?>
                        <?php if (!empty($header['header-logo'])) {
                            ?>
                            <a href="#sing-up"
                               class="header_call js-pop-up"><?php echo $header['header_tel-text']; ?></a>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<main class="main-content">
