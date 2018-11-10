<section class="section photo">
    <div class="container-fluid">
        <div class="photo_content">
            <?php if (get_field('title_new-photo')): ?>
                <h3 class="title shadow-text--light"><?php the_field('title_new-photo') ?></h3>
            <?php endif; ?>
            <?php if (have_rows('list-new-photo')): ?>
                <div class="photo_slider js-photo-slider">
                    <?php while (have_rows('list-new-photo')):
                        the_row(); ?>
                        <div class="photo_slider-elem">
                            <div class="photo_slider-wrapp js-pop-up-img">
                                <a href="<?php the_sub_field('list-new-photo-item'); ?>" class="photo_slider-link"> <img
                                        src="<?php the_sub_field('list-new-photo-item'); ?>" class="photo_img"
                                        alt="<?php the_sub_field('list-new-photo-item-name'); ?>">
                                    <?php if (get_sub_field('list-new-photo-item-name')): ?>
                                        <span class="photo_img-name"><?php the_sub_field('list-new-photo-item-name'); ?></span>
                                    <?php endif; ?>
                                </a>

                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

</section>