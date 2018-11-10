<section class="section program teachers">
    <div class="container-fluid">
        <div class="program_content">
            <?php if (get_field('teacher-title')): ?>
                <h3 class="title shadow-text--light"><?php the_field('teacher-title') ?></h3>
            <?php endif; ?>
            <?php if (have_rows('teacher-list')): ?>
                <ul class="program_list">
                    <?php while (have_rows('teacher-list')): the_row(); ?>

                        <li class="program_item shadow-text--super-light">
                            <?php if (get_sub_field('teacher-bg')): ?>
                                <div class="program_img"
                                     style="background-image: url(<?php the_sub_field('teacher-bg'); ?>)">
                                    <div class="program_img-name"><?php the_sub_field('teacher_img-name'); ?></div>

                                </div>

                            <?php endif; ?>
                            <?php if (get_sub_field('teacher-name')): ?>
                                <div class="program_text">
                                    <div class="program_text-bold"><?php the_sub_field('teacher-name'); ?></div>
                                    <?php the_sub_field('teacher-desc'); ?>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

        </div>
    </div>
</section>