<?php if (get_field('realy-title-new')): ?>
    <section class="section program realy-study realy-study--second">
        <div class="container-fluid">
            <div class="program_content">
                <?php if (get_field('realy-title-new')): ?>
                    <h3 class="title shadow-text--light"><?php the_field('realy-title-new') ?></h3>
                <?php endif; ?>
                <?php if (have_rows('realy-list-new')): ?>
                    <ul class="program_list">
                        <?php while (have_rows('realy-list-new')): the_row(); ?>

                            <li class="program_item">
                                <?php if (get_sub_field('realy-list-new-bg')): ?>
                                    <div class="program_img js-pop-up-img"  >
                                        <a  href="<?php the_sub_field('realy-list-new-bg'); ?>"><img src="<?php the_sub_field('realy-list-new-bg'); ?>" alt="<?php the_sub_field('realy-list-new-vissible'); ?>"></a>
                                        <div class="program_img-name"><?php the_sub_field('realy-list-new-hidden'); ?></div>

                                    </div>
                                <?php endif; ?>
                                <?php if (get_sub_field('realy-list-new-vissible')): ?>
                                    <div class="program_text shadow-text--super-light">
                                        <div class="program_text-bold"><?php the_sub_field('realy-list-new-vissible'); ?></div>
                                        <!--                                    --><?php //the_sub_field('realy-list-desc'); ?>
                                    </div>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <!--        <div class="action_form">-->
            <!--            --><?php //echo do_shortcode(get_field('action-form')) ?>
            <!--        </div>-->
        </div>
    </section>
<?php endif; ?>