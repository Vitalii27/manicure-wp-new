<section class="section licenses">
    <div class="container-fluid">
        <?php if (get_field('licenses-title')): ?>
            <h3 class="title"><?php the_field('licenses-title') ?></h3>
        <?php endif; ?>
        <div class="licenses_images">
            <?php if (have_rows('licenses-list')): ?>
                <?php while (have_rows('licenses-list')): the_row(); ?>
                    <div class="licenses_single-img js-pop-up-img">
                        <a href="<?php the_sub_field('licenses-img'); ?>" > <img
                                    src="<?php the_sub_field('licenses-img'); ?>" alt="img"></a>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>