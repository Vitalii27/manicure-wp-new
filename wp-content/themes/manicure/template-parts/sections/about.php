<section class="section about-school" id="about">
    <?php if (get_field('about-us-img')): ?>
        <img src=" <?php the_field('about-us-img') ?>" alt="img" class="about-school_bg">
    <?php endif; ?>
    <div class="container-fluid">
        <div class="about-school_content">
            <?php if (get_field('about-us-title')): ?>
                <div class="title"><?php the_field('aabout-us-title') ?></div>
            <?php endif; ?>
            <div class="about-school_video-block">
                <?php if (get_field('about-video')): ?>
                    <div class="about-school_video">
                        <video poster="<?php the_field('about-img-video') ?>" id="video-about-school" muted playsinline
                               preload="auto" loop="loop" controls="controls">
                            <source type="video/mp4" src="<?php the_field('about-video') ?>">
                            <source type="video/webm" src="<?php the_field('about-video') ?>">
                        </video>
                    </div>
                <?php endif; ?>
                <div class="about-school_desc">
                    <?php if (get_field('about-desc-title')): ?>
                        <div class="about-school_desc-title"><?php the_field('about-desc-title') ?></div>
                    <?php endif; ?>
                    <?php if (get_field('about-desc-text')): ?>
                        <div class="about-school_desc-text">
                            <?php the_field('about-desc-text') ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="about-school_icon-block">
                <?php if (have_rows('about-block-icon')): ?>
                <ul class="about-school_list">
                    <?php while (have_rows('about-block-icon')): the_row(); ?>

                    <li class="about-school_item">
                        <?php if (get_sub_field('about-block-icon-img')): ?>
                        <div class="about-school_item-block">
                            <img src=" <?php the_sub_field('about-block-icon-img'); ?>" alt="icon" class="about-school_icon">
                        </div>
                        <?php endif; ?>
                        <?php the_sub_field('about-block-icon-desc'); ?>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>