<section class="section section reviews" id="reviews">
    <div class="container-fluid">
        <div class="reviews_content">
            <?php if (get_field('review-title')): ?>
                <div class="title"><?php the_field('review-title'); ?></div>
            <?php endif; ?>
            <?php if (have_rows('review-list')): ?>
                <div class="reviews_slider js-review-slider">
                    <?php while (have_rows('review-list')):
                        the_row(); ?>
                        <div class="reviews_wrapp">
                            <div class="reviews_block">
                                <div class="reviews_inform">
                                    <?php if (get_sub_field('reviews-avatar')): ?>
                                        <div class="reviews_avatar">
                                            <img src="<?php the_sub_field('reviews-avatar'); ?>" alt="avatar"
                                                 class="reviews_img">
                                        </div>
                                    <?php endif; ?>
                                    <div class="reviews_name">
                                        <?php if (get_sub_field('reviews-name')): ?>
                                            <div><?php the_sub_field('reviews-name'); ?>.</div>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('reviews-data')): ?>
                                            <p><?php the_sub_field('reviews-data'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if (get_sub_field('review-desc')): ?>
                                    <div class="reviews_desc">
                                        <?php the_sub_field('review-desc'); ?>
                                        <?php if (get_sub_field('review-place')): ?>
                                            <div class="reviews_link-block">
                                                <p> <?php the_sub_field('review-place'); ?>
                                                </p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
