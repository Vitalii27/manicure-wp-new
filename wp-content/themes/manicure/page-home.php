<?php
/**
 * Template Name: Home Page
 *
 * This is the Home page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package homeful
 */

get_header(); ?>

<?php get_template_part( './template-parts/sections/hero' ); ?>

<?php get_template_part( './template-parts/sections/sub-section' ); ?>
<?php //get_template_part( './template-parts/sections/section-pink' ); ?>


<?php get_template_part( './template-parts/sections/action' ); ?>



<?php get_template_part( './template-parts/sections/program' ); ?>
<?php //get_template_part( './template-parts/sections/super' ); ?>
<?php get_template_part( './template-parts/sections/video' ); ?>
<?php get_template_part( './template-parts/sections/faq' ); ?>
<?php get_template_part( './template-parts/sections/diplom' ); ?>
<?php get_template_part( './template-parts/sections/sing-up' ); ?>

<?php get_template_part( './template-parts/sections/advantages' ); ?>
<section class="section sub-section sub-section--advantages shadow-text--light" style="background-image: url(<?php the_field('under-advantages') ?>)">
    <div class="container-fluid">
        <?php if (get_field('under-advantages-text')): ?>
            <div class="sub-section_content shadow-text">
                <?php the_field('under-advantages-text') ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php get_template_part( './template-parts/sections/partners' ); ?>

<?php get_template_part( './template-parts/sections/about' ); ?>
<?php get_template_part( './template-parts/sections/licenses' ); ?>
<?php get_template_part( './template-parts/sections/photo-study-class' ); ?>
<?php get_template_part( './template-parts/sections/realy-study' ); ?>

<?php get_template_part( './template-parts/sections/teachers' ); ?>
<?php get_template_part( './template-parts/sections/numbers' ); ?>
<?php get_template_part( './template-parts/sections/reviews' ); ?>
<?php get_template_part( './template-parts/sections/info' ); ?>

<?php get_template_part( './template-parts/sections/photo' ); ?>
<?php //get_template_part( './template-parts/sections/photo2' ); ?>
<?php get_template_part( './template-parts/sections/grafic' ); ?>

<?php get_template_part( './template-parts/sections/text' ); ?>
<?php get_template_part( './template-parts/sections/contacts' ); ?>


<?php get_footer();?>
<?php get_template_part( './template-parts/blocks/popup' ); ?>
<?php get_template_part( './template-parts/blocks/alert' ); ?>
</body>

</html>

