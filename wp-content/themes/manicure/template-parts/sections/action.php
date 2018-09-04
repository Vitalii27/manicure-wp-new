<section class="section action">
    <div class="container-fluid">
        <div class="action_content">
            <?php if (get_field('action-top-text')): ?>
                <div class="action_content-top">
                    <?php the_field('action-top-text') ?>
                </div>
            <?php endif; ?>
            <?php if (get_field('action-desc')): ?>
                <div class="action_content-period">
                    <?php the_field('action-desc') ?>
                </div>
            <?php endif; ?>
            <?php if (get_field('action-year')): ?>
                <div class="action_content-time">
                    <?php the_field('action-remained') ?>
                    <div id="js-timer" class="action_content-timer"></div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php if (get_field('action-form')): ?>
    <div class="action_form">
        <?php echo do_shortcode(get_field('action-form')) ?>
    </div>
    <?php endif; ?>
    <?php if (get_field('action-bottom-text')): ?>
        <div class="action_bottom-text">
            <p> <?php the_field('action-bottom-text') ?>
                <?php if (get_field('action-bottom-text-link')): ?>
                    <a href="<?php echo get_template_directory_uri() ?>/assets/pdf/privacy-policy.pdf" target="_blank"><?php the_field('action-bottom-text-link') ?></a>
                <?php endif; ?>
            </p>
        </div>
    <?php endif; ?>

    </div>
    <?php if (get_field('action-img')): ?>
        <img src="<?php the_field('action-img') ?>" alt="img" class="action_bg">
    <?php endif; ?>
</section>
<script>
    <?php if (get_field('action-year')): ?>
    var yearData = <?php the_field('action-year') ?>;
    <?php endif; ?>
    <?php if (get_field('action-month')): ?>
    var monthData = <?php the_field('action-month') ?>;
    <?php endif; ?>
    <?php if (get_field('action-day')): ?>
    var dayData = <?php the_field('action-day') ?>;
    <?php endif; ?>
    <?php if (get_field('action-hour')): ?>
    var hoursData = <?php the_field('action-hour') ?>;
    <?php endif; ?>
    <?php if (get_field('action-minutes')): ?>
    var minutesData = <?php the_field('action-minutes') ?>;
    <?php endif; ?>
    <?php if (get_field('action-seconds')): ?>
    var secondsData = <?php the_field('action-seconds') ?>;
    <?php endif; ?>
</script>