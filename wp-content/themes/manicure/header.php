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
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

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
                    <a href="#" class="header_btn-link btn">Оплатить<br>онлайн</a>
                </div>
                <div class="header_phone">
                    <div class="header_number">
                        <?php if (get_field('header_tel')): ?>
                            <div><?php the_field('header_tel') ?></div>
                        <?php endif; ?>
                        <?php if (get_field('header_tel-text')): ?>
                            <a href="#sing-up" class="header_call js-pop-up"><?php the_field('header_tel-text') ?></a>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<main class="main-content">
