<section class="section program" id="program">
    <div class="container-fluid">
        <div class="program_content">
            <?php if (get_field('program-title')): ?>
                <h3 class="program_title shadow-text--light"><?php the_field('program-title') ?></h3>
            <?php endif; ?>
            <?php if (get_field('program-subtitle')): ?>
                <div class="program_subtitle shadow-text--light"><?php the_field('program-subtitle') ?></div>
            <?php endif; ?>
            <?php if (have_rows('program-list')): $count = 0; ?>
                <ul class="program_list shadow-text--super-light">
                    <?php while (have_rows('program-list')): the_row(); ?>
                        <?php if (get_sub_field('program-item-bg')): ?>
                            <li class="program_item">
                                <div class="program_img"
                                     style="background-image: url(<?php the_sub_field('program-item-bg'); ?>)">
                                    <div class="program_img-name">
                                        <?php the_sub_field('program-img-name'); ?>
                                    </div>
                                    <?php if (get_sub_field('program-time')): ?>
                                        <div class="program_time"><?php the_sub_field('program-time'); ?></div>
                                    <?php endif; ?>

                                </div>
                                <?php if (get_sub_field('program-title-item')): ?>
                                    <div class="program_text">
                                        <div class="program_text-bold"><?php the_sub_field('program-title-item'); ?></div>
                                        <?php if (get_sub_field('program-desc-item')): ?>
                                            <p class="program_text-desc"><?php the_sub_field('program-desc-item'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <?php if (get_sub_field('program_popup_link')): ?>
                                        <div class="program_btn ">
                                            <a href="#popup<?php echo $count; ?>" class="js-pop-up btn program_link"><?php the_sub_field('program_popup_link'); ?></a>
                                        </div>
                                    <?php endif; ?>


                                    <?php if (get_sub_field('popup_program_content')): ?>
                                        <div class="program_popup-block popup">

                                            <div class="pop-up_content program_popup-content"
                                                 id="popup<?php echo $count; ?>">

                                                <?php the_sub_field('popup_program_content'); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </li>
                        <?php endif;
                        $count++ ?>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            <div class="program_bottom">
                <?php if (get_field('program-bottom-title')): ?>
                    <div class="program_attention shadow-text--light"><?php the_field('program-bottom-title') ?></div>
                <?php endif; ?>
                <?php if (get_field('program-bottom-desc')): ?>
                    <div class="program_bottom-desc shadow-text--light">
                        <?php the_field('program-bottom-desc') ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="action_form">
                <?php echo do_shortcode(get_field('action-form')) ?>
            </div>
        </div>
    </div>
</section>
