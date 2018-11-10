<section class="section numbers" style="background-image: url(<?php the_field('numbers_bg') ?>)">
    <div class="container-fluid">
        <?php if (get_field('numbers-title')): ?>
            <div class="numbers_content shadow-text">
                <p><?php the_field('numbers-title') ?></p>
            </div>
        <?php endif; ?>
        <?php if (have_rows('numbers-list')): ?>
            <ul class="numbers_list">
                <?php while (have_rows('numbers-list')): the_row(); ?>
                    <li class="numbers_item">
                        <?php if (get_sub_field('numbers-count')): ?>
                            <div class="numbers_count js-counter shadow-text">
                                <?php the_sub_field('numbers-count'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (get_sub_field('numbers-desc')): ?>
                            <div class="numbers_desc shadow-text">
                                <?php the_sub_field('numbers-desc'); ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>