<section class="section photo">
    <div class="container-fluid">
        <div class="photo_content">
            <?php if (get_field('photo-title')): ?>
                <div class="title"><?php the_field('photo-title') ?></div>
            <?php endif; ?>
            <?php if (have_rows('photo-list')): ?>
                <div class="photo_slider js-photo-slider">
                    <?php while (have_rows('photo-list')):
                        the_row(); ?>
                        <div class="photo_slider-elem">
                            <div class="photo_slider-wrapp">
                                <img src="<?php the_sub_field('photo-image'); ?>" class="photo_img"
                                     alt="photo">
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

</section>