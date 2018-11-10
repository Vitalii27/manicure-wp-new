<?php
/**
 * Template Name: Info Page
 *
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package homeful
 */

get_header(); ?>


<section class="section section-info-page shadow-text--super-light">
    <div class="container-fluid">
        <?php if (get_field('info-title-page')): ?>
            <h3 class="program_title shadow-text--light"><?php the_field('info-title-page') ?></h3>
        <?php endif; ?>
        <?php if (get_field('info-desc-page')): ?>
        <div class="section-info_desc">
            <?php the_field('info-desc-page') ?>
        </div>
        <?php endif; ?>

    <?php
    $args = array(
        'theme_location' => 'stati',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'menu_class' => '',
        'walker' => '',
        'container' => 'ul',

    );
    wp_nav_menu($args);

    ?>
    </div>
</section>


<?php get_footer();?>
<?php get_template_part( './template-parts/blocks/popup' ); ?>
<?php get_template_part( './template-parts/blocks/alert' ); ?>
</body>

</html>

