<section class="section hero" id="hero">
    <?php if (get_field('hero_img-phone')): ?>
        <div class="hero_img">
            <img src="<?php the_field('hero_img-phone') ?>" alt="img">
        </div>
    <?php endif; ?>
    <div class="container-fluid">
        <div class="hero_content">
            <?php if (get_field('hero_title')): ?>
                <h1 class="hero_title"><?php the_field('hero_title') ?></h1>
            <?php endif; ?>
            <?php if (get_field('hero_subtitle')): ?>
                <div class="hero_subtitle"><?php the_field('hero_subtitle') ?></div>
            <?php endif; ?>
            <?php if (have_rows('icon-hero-reap')): ?>
                <ul class="hero_list">
                    <?php while (have_rows('icon-hero-reap')): the_row(); ?>
                        <li class="hero_item">
                            <?php if (get_sub_field('icon-img-hero')): ?>
                                <div class="hero_item-block">
                                    <img src="<?php the_sub_field('icon-img-hero'); ?>" alt="icon"
                                         class="hero_icon">
                                </div>
                            <?php endif; ?>
                            <?php the_sub_field('icon-hero-text'); ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

        </div>
    </div>

</section>
