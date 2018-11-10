<?php $action = get_option('action2'); ?>
<section class="section action">
    <div class="container-fluid">
        <div class="action_content shadow-text--light">
<!--            --><?php //if (!empty($action['action-top'])) {
                ?>
                <div class="action_content-top">

                    <h2><strong><span style="color: #ff0000;">Акция</span>, т</strong><strong>олько
                            с&nbsp;</strong><strong><span style="color: #800080;"><span
                                        style="color: #ff0000;"> <?php echo $action['action-top']; ?></span>&nbsp;<span
                                        style="color: #000000;">по</span> <span
                                        style="color: #ff0000;"><?php echo $action['action-po']; ?></span>&nbsp;<span
                                        style="color: #000000;"><?php echo $action['action-section-month']; ?></span></span>!</strong>
                    </h2>
                </div>
<!--            --><?php //} ?>

<!--            --><?php //if (!empty($action['action-center'])) {
                ?>
                <div class="action_content-period">
                    <h2><strong><span style="color: #000000;">Полный курс «</span><span style="color: #ff0000;">Vip Мастер — Универсал</span><span
                                    style="color: #000000;">»</span></strong></h2>
                    <h2><strong><span style="color: #000000;"> всего за</span> <span style="color: #00ff00;"><span
                                        style="color: #339966;"><?php echo $action['action-old-price']; ?></span> <span
                                        style="color: #000000;">₽</span></span>&nbsp;<span style="color: #000000;">вместо</span>
                            <span style="color: #ff0000;"><?php echo $action['action-new-price']; ?> <span style="color: #000000;">₽</span>!</span></strong>
                    </h2>
                    <p>&nbsp;</p>
                    <h3><span style="color: #000000;"><strong>Без Доплат. Срок обучения Месяц. </strong></span></h3>
                    <h3><span style="color: #ff0000;"><strong>Диплом. Трудоустройство!</strong></span></h3>
                    <p>&nbsp;</p>
                    <p><span style="color: #000000;"><strong>Спешите!</strong></span></p>


                </div>
<!--            --><?php //} ?>

            <?php if (!empty($action['action-year'])) {
                ?>
                <div class="action_content-time">
                    <!--                    --><?php //the_field('action-remained') ?>
                    <div id="js-timer" class="action_content-timer"></div>
                </div>
            <?php } ?>

        </div>
        <?php if (!empty($action['action-form'])) {
            ?>
            <div class="action_form">
                <?php echo do_shortcode($action['action-form']); ?>
            </div>
        <?php } ?>

        <div class="action_bottom-text shadow-text--super-light">
            <p> Нажимая на кнопку, вы даёте согласие на обработку персональных данных и соглашаетесь с

                <a href="<?php echo get_template_directory_uri() ?>/assets/pdf/privacy-policy.pdf"
                   target="_blank">политикой обработки персональных данных.</a>

            </p>
        </div>


    </div>
    <!--    --><?php //if (get_field('action-img')): ?>
    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/08/action.png" alt="img" class="action_bg">
    <!--    --><?php //endif; ?>
</section>

<script>
    <?php if (!empty($action['action-year'])) {
    ?>
    var yearData =  <?php echo $action['action-year']; ?>;
    <?php } ?>
    <?php if (!empty($action['action-month'])) {   ?>
    var monthData = <?php echo $action['action-month']; ?>;
    <?php } ?>
    <?php if (!empty($action['action-day'])) {
    ?>
    var dayData = <?php echo $action['action-day']; ?>;
    <?php } ?>
    <?php if (!empty($action['action-hour'])) {
    ?>
    var hoursData = <?php echo $action['action-hour']; ?>;
    <?php } ?>
    <?php if (!empty($action['action-minute'])) {
    ?>
    var minutesData = <?php echo $action['action-minute']; ?>;
    <?php } ?>
    <?php if (!empty($action['action-second'])) {
    ?>
    var secondsData = <?php echo $action['action-second']; ?>;
    <?php } ?>
</script>