<section class="section section-info">
    <div class="section-info_content ">
        <div class="section-info_left section-info-block shadow-text--super-light">
            <div class="section-info_wrap-left">
            <?php if (get_field('info-left-img')): ?>
                <img src="<?php the_field('info-left-img') ?>" alt="img">
            <?php endif; ?>
            <div class="section-info_text">
                <?php if (get_field('info-left-title')): ?>
                    <h3 class="section-info_title"><?php the_field('info-left-title') ?></h3>
                <?php endif; ?>
                <?php if (get_field('info-left-desc')): ?>
                    <div class="section-info_desc"><?php the_field('info-left-desc') ?></div>
                <?php endif; ?>
            </div>
            </div>
        </div>
        <div class="section-info_right section-info-block">
            <div class="section-info_wrap-right">
            <?php if (get_field('info-right-img')): ?>
                <img src="<?php the_field('info-right-img') ?>" alt="img">
            <?php endif; ?>
            <div class="section-info_text">
                <?php if (get_field('info-right-title')): ?>
                    <h3 class="section-info_title"><?php the_field('info-right-title') ?></h3>
                <?php endif; ?>
                <?php if (get_field('info-right-desc')): ?>
                    <div class="section-info_desc"><?php the_field('info-right-desc') ?></div>
                <?php endif; ?>
            </div>

        </div>
    </div>


</section>