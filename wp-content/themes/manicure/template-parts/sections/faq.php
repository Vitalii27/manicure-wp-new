<section class="section faq shadow-text--light">
    <?php if (get_field('faq_top-image')): ?>
        <img src="<?php the_field('faq_top-image') ?>" alt="img" class="faq_top">
    <?php endif; ?>
    <?php if (get_field('faq_bottom-image')): ?>
        <img src="<?php the_field('faq_bottom-image') ?>" alt="img" class="faq_bottom">
    <?php endif; ?>
    <div class="container-fluid">
        <?php if (get_field('faq_title')): ?>
            <h3 class="title"><?php the_field('faq_title') ?></h3>
        <?php endif; ?>
        <?php if (have_rows('faq_list')): ?>
            <ul class="faq_list js-accordions">
                <?php while (have_rows('faq_list')): the_row(); ?>
                    <li class="faq_item accordion ">
                        <div class="faq_item_content js-open-down">
                            <div class="faq_item_wrapp">
                                <div class="faq_item-icon"></div>
                                <?php if (get_sub_field('faq_list_title')): ?>
                                    <span class="faq_triangle "><?php the_sub_field('faq_list_title'); ?></span>
                                <?php endif; ?>
                            </div>

                            <?php if (get_sub_field('faq_list_desc')): ?>
                                <div class="faq_acco_content accordion_content">
                                    <?php the_sub_field('faq_list_desc'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>