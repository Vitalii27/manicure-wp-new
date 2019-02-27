<?php
/**
 * Template Name: Info Page Zapis
 *
 * This is the Home page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package homeful
 */

get_header(); ?>

<section class="section section-info-new">
    <div class="container-fluid">
        <div class="section-info-new_content shadow-text--super-light">
            <div class="section-info-new-block ">
                <div class="section-info-new_wrap">
                    <div class="section-info-new_img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/info-img1.jpg" alt="img">

                    </div>
                    <div class="section-info-new_text">
                        <h3 class="section-info-new_title">запись моделей</h3>
                        <div class="section-info-new_desc"><p>Хотите стать Моделью для наших мастеров и получить стильный маникюр или педикюр совершенно бесплатно?</p>
                            <p>Приходите в школу «Золотая Ника» и подчеркните свою красоту и изящество красивыми ноготками!</p>
                            <p>&nbsp;</p>
                            <p><span style="color: #ff0000;"><strong>Ждем ваших заявок по телефону&nbsp;—&nbsp;8-915-494-82-64</strong></span></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

<section class="section contacts" id="contacts">
    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/08/contacts-bg.png" alt="img" class="contacts_bg">
    <div class="container-fluid">
        <div class="contacts_content">
            <div id="map" class="contacts_map map"></div>
            <div class="contacts_text">
                <h3 class="title shadow-text--light">Контакты</h3>
                <div itemscope="" itemtype="http://schema.org/Organization"
                     class="contacts_desc shadow-text--super-light">
                    <p><strong>График работы:</strong></p>
                    <p><strong>Понедельник — Пятница с <span style="color: #ff0000;">12:00 до 18:00</span></strong>
                    </p>
                    <p><strong>Вторник, Среда, Четверг с <span style="color: #ff0000;">12:00 до 22:00</span></strong>
                    </p>
                    <p><strong>Суббота — Воскресенье с <span style="color: #ff0000;">10:00 до 15:00</span></strong>
                    </p>
                    <p itemprop="telephone"><strong>Телефон:</strong>&nbsp;8 (800) 505-46-29</p>
                    <p itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                        <strong>Адрес:&nbsp;</strong> <span itemprop="addressLocality">г. Москва,</span> <span
                            style="color: #ff0000;">м. Красносельская</span> или <span style="color: #ff0000;">м. Бауманская</span>,
                        <span itemprop="streetAddress">ул. Ольховская, д. 22</span></p>
                    <p><strong>Как добраться:</strong></p>
                    <p><span style="color: #ff0000;"> М. Красносельская&nbsp;</span>— выходите,идете вперед,в
                        сторону церкви. Вдоль трамвайных путей до бензозаправки и поворачиваете налево вместе с
                        путями. Метров через 100 пешеходный переход. Переходите, перед Вами ворота и дверь. Улица
                        Ольховская 22. Заходите в дверь, поворачиваете налево, через 30 м. справа подъезд . Этаж 3,
                        вторая дверь по правой стороне «ЗОЛОТАЯ НИКА».</p>
                    <p><span style="color: #ff0000;">М. Баумаская <span style="color: #333333;">— в</span></span>ыходите
                        из дверей направо на ул. Бауманская, переходим на противоположную сторону, идем вдоль
                        трамвайных путей, нумерация на уменьшение, прямо мин 5-7 пешком, никуда не сворачиваем.
                        Доходим до пересечения ул. Бауманская с ул. Ольховская, Т-образный перекрёсток, трамвайные
                        пути поворачивают налево, и мы вместе с ними, проходим остановку, за ней коричневые ворота и
                        дверь с вывеской Ольховская 22.Заходим в дверь, поворачиваем налево, через 30 м справа
                        подъезд . Этаж 3, вторая дверь по правой стороне «Золотая Ника».</p>
                    <p>Будем рады Вас видеть! С уважением.</p>
                </div>
            </div>
        </div>
    </div>

</section>


<?php get_footer(); ?>
<?php get_template_part('./template-parts/blocks/popup'); ?>
<?php get_template_part('./template-parts/blocks/alert'); ?>
</body>

</html>

