<section class="section advantages">
    <div class="container-fluid">
        <div class="advantages_content ">
            <?php if (get_field('advantages-title')): ?>
                <h3 class="title shadow-text--light"><?php the_field('advantages-title') ?></h3>
            <?php endif; ?>
            <?php if (have_rows('advantages-list')): ?>
                <ul class="advantages_list shadow-text--super-light">
                    <?php while (have_rows('advantages-list')): the_row(); ?>

                        <li class="advantages_item">
                            <?php if (get_sub_field('advantages-icon')): ?>
                                <div class="advantages_icon-block">
                                    <img src="<?php the_sub_field('advantages-icon'); ?>" alt="icon"
                                         class="advanyages_icon">
                                </div>
                            <?php endif; ?>
                            <?php if (get_sub_field('advantages-title-item')): ?>
                                <div class="advantages_item-title"><?php the_sub_field('advantages-title-item'); ?></div>
                            <?php endif; ?>
                            <?php if (get_sub_field('advantages-desc-item')): ?>
                                <div class="advantages_item-desc">
                                    <?php the_sub_field('advantages-desc-item'); ?>
                                </div>
                            <?php endif; ?>
                        </li>

                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>