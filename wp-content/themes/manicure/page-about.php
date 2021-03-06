<?php
/**
 * Template Name: About Page
 *
 * This is the Home page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package homeful
 */
get_header(); ?>
<?php get_template_part( './template-parts/sections/about' ); ?>
<?php get_template_part( './template-parts/sections/licenses' ); ?>
<?php get_template_part( './template-parts/sections/photo-study-class' ); ?>
<?php get_template_part( './template-parts/sections/text' ); ?>
<?php get_template_part( './template-parts/sections/contacts' ); ?>

<?php get_footer();?>
<?php get_template_part( './template-parts/blocks/popup' ); ?>
<?php get_template_part( './template-parts/blocks/alert' ); ?>
</body>

</html>

