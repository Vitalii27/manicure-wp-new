<section class="section section-pink" style="background-image: url(<?php the_field('bg-pink_img') ?>)">
    <div class="container-fluid">
        <div class="section-pink_content shadow-text--super-light">
            <?php if (get_field('section-pink-title')): ?>
                <h3 class="title"><?php the_field('section-pink-title') ?> </h3>
            <?php endif; ?>
            <?php if (get_field('section-pink-subtitle')): ?>
                <div class="section-pink_subtitle"><?php the_field('section-pink-subtitle') ?></div>
            <?php endif; ?>
            <div class="section-pink_wrapp">
                <?php if (have_rows('list_pink')): ?>
                    <ul class="section-pink_list">
                        <?php while (have_rows('list_pink')): the_row(); ?>
                            <li class="section-pink_item section-pink_item--<?php the_sub_field('pink_pos'); ?>">

                                <div class="section-pink_item-icon ">
                                    <?php if (get_sub_field('pink_border')): ?>
                                        <img src="<?php the_sub_field('pink_border'); ?>" alt="img">
                                    <?php endif; ?>
                                    <span><?php the_sub_field('pink_text'); ?><span class="small-text-pink"><?php the_sub_field('text-pink-thousand'); ?></span></span>
                                </div>
                                <div class="section-pink_item-text">
                                    <?php if (get_sub_field('pink_border-title')): ?>
                                        <h4><?php the_sub_field('pink_border-title'); ?></h4>
                                    <?php endif; ?>
                                    <?php the_sub_field('pink_border-desc'); ?>
                                </div>
                            </li>
                        <?php endwhile; ?>

                    </ul>
                <?php endif; ?>
                <?php if (get_field('pink_backround-section')): ?>
                    <img class="section-pink_center-img" src="<?php the_field('pink_backround-section'); ?>" alt="img">
                <?php endif; ?>
            </div>


        </div>
    </div>
    <?php if (get_field('pink_backround-section-left')): ?>
        <img class="section-pink_left-img" src="<?php the_field('pink_backround-section-left'); ?>" alt="img">
    <?php endif; ?>
</section>