<div class="section section partners">
    <div class="container-fluid">
        <?php if (get_field('partners-title')): ?>
            <div class="partners_title shadow-text--light">
                <?php the_field('partners-title') ?>
            </div>
        <?php endif; ?>
        <?php if (have_rows('partners-reap')): ?>
            <div class="partners_slider js-slider-partners">
                <?php while (have_rows('partners-reap')): the_row(); ?>
                    <?php if (get_sub_field('partners-reap-img')): ?>
                        <div class="partners_slider-elem">
                            <img src="<?php the_sub_field('partners-reap-img'); ?>" alt="<?php the_sub_field('partners-reap-img-alt'); ?>">
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>