<section class="section contacts" id="contacts">
    <?php if (get_field('contacts-image')): ?>
        <img src="<?php the_field('contacts-image') ?>" alt="img" class="contacts_bg">
    <?php endif; ?>
    <div class="container-fluid">
        <div class="contacts_content">
            <div id="map" class="contacts_map map"></div>
            <div class="contacts_text">
                <?php if (get_field('contacts-title')): ?>
                    <div class="title"><?php the_field('contacts-title') ?></div>
                <?php endif; ?>
                <?php if (get_field('contacts-desc')): ?>
                    <div class="contacts_desc">
                        <?php the_field('contacts-desc') ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<script>
    var mapConfig = {
        maps: [{
            id: "map",
            markers: [{
                center: [<?php the_field('contacts-coord') ?>]
            }],
            mapCenter: [<?php the_field('contacts-coord') ?>],
            icon: '<?php the_field('contacts-mark') ?>',
            zoom: <?php the_field('contacts-scale') ?>,

        }]

    }
</script>