<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package manicure
 */

?>

</main>

<footer class="footer" id="footer">
    <div class="container-fluid">
        <div class="footer_container">
            <?php if (get_field('footer-logo')): ?>
                <div class="footer_logo">
                    <a href="#hero" class="footer_link"> <img src="<?php the_field('footer-logo') ?>" alt="logo"
                                                              class="footer_img">
                        <?php the_field('footer-logo-text') ?>
                    </a>
                </div>
            <?php endif; ?>
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
                <?php if (get_field('footer-menu-text')): ?>
                    <div class="footer_copy-text"><?php the_field('footer-menu-text') ?></div>
                    <?php if (get_field('footer-menu-text')): ?>
                        <a href="<?php the_field('link_web') ?>" target="_blank"
                           class="footer_link-web"><?php the_field('link_web_text') ?></a>
                    <?php endif; ?>
                    <?php if (get_field('dates-link')): ?>
                        <a href="<?php echo get_template_directory_uri() ?>/assets/pdf/dates.pdf" target="_blank"
                           class="footer_link-web"><?php the_field('dates-link') ?></a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <?php if (have_rows('footer-list')): ?>
                <div class="footer_social">
                    <?php while (have_rows('footer-list')):
                        the_row(); ?>
                        <a href="<?php the_sub_field('footer-link'); ?>"><img
                                    src="<?php the_sub_field('footer-icon'); ?>" alt="icon"></a>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>


        </div>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
