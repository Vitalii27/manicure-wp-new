<section class="section program realy-study">
    <div class="container-fluid">
        <div class="program_content">
            <?php if (get_field('realy-title')): ?>
                <div class="title"><?php the_field('realy-title') ?></div>
            <?php endif; ?>
            <?php if (have_rows('realy-list')): ?>
                <ul class="program_list">
                    <?php while (have_rows('realy-list')): the_row(); ?>

                        <li class="program_item">
                            <?php if (get_sub_field('realy-bg')): ?>
                            <div class="program_img"
                                 style="background-image: url(<?php the_sub_field('realy-bg'); ?>)">
                                <?php endif; ?>
                            </div>
                            <?php if (get_sub_field('realy-list-title')): ?>
                                <div class="program_text">
                                    <div class="program_text-bold"><?php the_sub_field('realy-list-title'); ?></div>
                                    <?php the_sub_field('realy-list-desc'); ?>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>