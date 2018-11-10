<section class="section sub-section sub-section--second"
         style="background-image: url( <?php the_field('sing-up-bg') ?>)">
    <div class="container-fluid">
        <?php if (get_field('sing-up-title')): ?>
            <div class="sub-section_content shadow-text">
                <?php the_field('sing-up-title') ?>
                <?php if (get_field('sing-up-sub')): ?>
                    <div class="sub-section--second_desc"><?php the_field('sing-up-sub') ?></div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if (get_field('sing-up-button')): ?>
            <div class="sub-section_btn-block ">
                <a href="#sing-up" class="sub-section_link btn js-pop-up"><?php the_field('sing-up-button') ?></a>
            </div>
        <?php endif; ?>
    </div>
</section>