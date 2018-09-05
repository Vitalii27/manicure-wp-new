<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package manicure
 */

//get_header();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header js-header is-fixed" id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="header_container">
                <div class="header_logo">
                    <a href="#hero" class="header_link"> <img src="http://ua-nilson.com.ua/projects/manicure/wp-content/uploads/2018/09/Лого.png" alt="logo" class="header_img">
                        <p><strong>Учебный Центр</strong><br>
                            <strong>Маникюра и Педикюра</strong></p>
                    </a>
                </div>
                <?php get_template_part('./template-parts/blocks/swipe-menu'); ?>   <?php get_template_part('./template-parts/blocks/menu-btn'); ?>

                <div class="header_btn">
                    <a href="#" class="header_btn-link btn">Оплатить<br>онлайн</a>
                </div>
                <div class="header_phone">
                    <div class="header_number">
                        <div>+7 (495) 181-11-21</div>
                        <a href="#sing-up" class="header_call js-pop-up">Заказать Звонок</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
    <section class="section-error" style="background-image: url(../../wp-content/themes/manicure/assets/images/bg/404-bg.png)">
        <div class="container-fluid">
            <div class="section-error_text-opacity">
                404
            </div>
            <div class="section-error_text">
                <div class="section-error_text-title">oops !</div>
                <div class="section-error_text-bottom">Такой страницы не существует!</div>
                <a href="<?php echo home_url() ?>" class="sub-section_link btn">перейти на главную</a>
            </div>

        </div>
    </section>

<footer class="footer" id="footer">
    <div class="container-fluid">
        <div class="footer_container">
            <div class="footer_logo">
                <a href="#hero" class="footer_link"> <img src="http://manicure-wp-new/wp-content/uploads/2018/08/logo.png" alt="logo" class="footer_img">
                    <p>Учебный центр<br>
                        маникюра и педикюра</p>
                </a>
            </div>
            <div class="footer_copy">
                <div class="footer_menu">
                    <?php
                    $args = array(
                        'theme_location' => 'footer',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'menu_class' => '',
                        'walker' => '',
                        'container' => 'ul',

                    );
                    wp_nav_menu($args);

                    ?>
                           </div>
                <div class="footer_copy-text">Школа маникюра и педикюра в Москве © 2018 Все права защищены</div>
                <a href="https://sait-sozdanie.com/" target="_blank" class="footer_link-web">Веб студия</a>
            </div>
            <div class="footer_social">
                <a href=""><img src="http://manicure-wp-new/wp-content/uploads/2018/08/vk.png" alt="icon"></a>
                <a href=""><img src="http://manicure-wp-new/wp-content/uploads/2018/08/fb.png" alt="icon"></a>
                <a href=""><img src="http://manicure-wp-new/wp-content/uploads/2018/08/inst.png" alt="icon"></a>
            </div>


        </div>

    </div>
</footer>
