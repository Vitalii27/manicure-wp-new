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
<?php
get_header(); ?>
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

<?php get_footer(); ?>