<div class="section section schedule">
    <?php if (get_field('schedule_bg')): ?>
    <img src=" <?php the_field('schedule_bg') ?>" class="schedule_img-bg" alt="img">
    <?php endif; ?>
    <div class="schedule-bg-grad"></div>
    <div class="container-fluid">
        <?php if (get_field('schedule_title')): ?>
            <h3 class="title shadow-text--light">
                <?php the_field('schedule_title') ?>
            </h3>
        <?php endif; ?>
        <?php if (have_rows('schedule_list')): ?>
            <ul class="schedule_list">
                <?php while (have_rows('schedule_list')): the_row(); ?>
                    <li class="schedule_item">
                        <?php if (get_sub_field('schedule_item-title')): ?>
                            <div class="schedule_item-top schedule_item-top--<?php the_sub_field('block-color'); ?>"
                                 style="background-image: url(<?php the_sub_field('schedule_item-bg'); ?>)">
                                <div class="schedule_item-content">
                                    <div class="schedule_item-title shadow-text"><?php the_sub_field('schedule_item-title'); ?>
                                    </div>
                                    <?php if (get_sub_field('schedule_item-icon')): ?>
                                        <div class="schedule_item-icon">
                                            <img src="<?php the_sub_field('schedule_item-icon'); ?>" alt="icon"
                                                 class="schedule_item-img">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (get_sub_field('schedule_item-desc')): ?>
                            <div class="schedule_item-bottom shadow-text--super-light">
                                <?php the_sub_field('schedule_item-desc'); ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        <?php if (get_field('bottom-text-grafic')): ?>
        <div class="schedule_bottom-text shadow-text--super-light">
            <?php the_field('bottom-text-grafic'); ?>
        </div>
        <?php endif; ?>
    </div>
</div>