<div class="section section diplom">
    <div class="container-fluid">
        <div class="diplom_content">
            <div class="diplom_left">
                <?php if (get_field('diplom-title')): ?>
                    <div class="diplom_title">
                        <?php the_field('diplom-title') ?>
                    </div>
                <?php endif; ?>
                <?php if (have_rows('diplom-list')): ?>
                    <ul class="diplom_list">
                        <?php while (have_rows('diplom-list')): the_row(); ?>
                            <?php if (get_sub_field('diplom-item')): ?>
                                <li class="diplom_item">
                                    <?php the_sub_field('diplom-item'); ?>
                                </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <?php if (get_field('diplom-img')): ?>
                <div class="diplom_right">
                    <img src="<?php the_field('diplom-img') ?>" alt="img">
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>