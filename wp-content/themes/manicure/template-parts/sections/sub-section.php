<section class="section sub-section" style="background-image: url(<?php the_field('sub-hero-section') ?>)">
    <div class="container-fluid">
        <?php if (get_field('sub-hero-text')): ?>
            <div class="sub-section_content shadow-text">
                <?php the_field('sub-hero-text') ?>
            </div>
        <?php endif; ?>
    </div>
</section>