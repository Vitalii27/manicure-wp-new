<div class="popup" role="dialog">

    <div class="pop-up_content callback" id="sing-up">
        <?php if (get_field('popup-title')): ?>
            <div class="title"><?php the_field('popup-title') ?></div>
        <?php endif; ?>
        <?php if (get_field('popup-subtitle')): ?>
            <div class="pop-up_subtitle"><?php the_field('popup-subtitle') ?></div>
        <?php endif; ?>
        <?php echo do_shortcode(get_field('popup-shortcode')) ?>
        <?php if (get_field('popup-link-text')): ?>
            <div class="pop-up_link">
                <p><?php the_field('popup-link-text') ?><a target="_blank" href="<?php echo get_template_directory_uri() ?>/assets/pdf/privacy-policy.pdf"><?php the_field('popup-link') ?></a></p>
            </div>
        <?php endif; ?>
    </div>

</div>
<!-- pop-up