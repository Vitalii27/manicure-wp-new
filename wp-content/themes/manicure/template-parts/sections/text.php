<?php if (get_field('text-section')): ?>
    <section class="section text">
        <div class="container-fluid">

            <div class="text_content">
                <?php the_field('text-section') ?>
            </div>
        </div>
    </section>

<?php endif; ?>

