<section class="section super-action shadow-text--super-light">
    <?php if (get_field('section-pink-red')): ?>
        <div class="super-action_red">
            <h3><?php the_field('section-pink-red') ?></h3>
        </div>
    <?php endif; ?>
    <div class="container-fluid">

        <div class="super-action_content">

            <?php if (get_field('section-pink-subtitle-top')): ?>
                <div class="section-pink_subtitle"><?php the_field('section-pink-subtitle-top') ?></div>
            <?php endif; ?>
            <?php if (get_field('section-pink-title')): ?>
                <h3 class="title"><?php the_field('section-pink-title') ?> </h3>
            <?php endif; ?>
            <?php if (get_field('section-pink-subtitle')): ?>
                <div class="section-pink_subtitle section-pink_subtitle--pink"><?php the_field('section-pink-subtitle') ?></div>
            <?php endif; ?>
        </div>
        <?php if (have_rows('super-action-list')): $count = 0; ?>
            <ul class="super-action_list">
                <?php while (have_rows('super-action-list')): the_row(); ?>
                    <li class="super-action_item">
                        <?php if (get_sub_field('super-action-bg')): ?>
                            <div class="super-action_img"
                                 style="background-image: url(<?php the_sub_field('super-action-bg'); ?>)">
                                <div class="super-action_name-image"><?php the_sub_field('super-action-bg-name'); ?></div>
                                <?php if (get_sub_field('super-action_new-price')): ?>
                                    <div class="super-action_prices">
                                        <div class="super-action_old-price"><?php the_sub_field('super-action_old-price'); ?></div>
                                        <div class="super-action_new-price"><?php the_sub_field('super-action_new-price'); ?></div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (get_sub_field('section-pink-list-desc')): ?>
                            <div class="super-action_text">
                                <?php the_sub_field('section-pink-list-desc'); ?>

                            </div>
                        <?php endif; ?>
                        <?php if (get_sub_field('section-pink_popup_link')): ?>
                            <div class="program_btn">
                                <a href="#popup<?php echo $count; ?>i"
                                   class="js-pop-up btn program_link_link"><?php the_sub_field('section-pink_popup_link'); ?></a>
                            </div>
                        <?php endif; ?>
                        <?php if (get_sub_field('section-pink_content')): ?>
                            <div class="program_popup-block popup">

                                <div class="pop-up_content program_popup-content"
                                     id="popup<?php echo $count; ?>i">

                                    <?php the_sub_field('section-pink_content'); ?>

                                </div>
                            </div>
                        <?php endif;
                        $count++ ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
    <img src=" <?php the_field('section-pink_bottom-img'); ?>" alt="img" class="super-action_bottom-img">
</section>