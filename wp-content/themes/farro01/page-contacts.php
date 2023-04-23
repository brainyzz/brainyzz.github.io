<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package farro01
 */

get_header();


?>
    <main class="main inner">
<section class="contacts">
    <div class="container">
        <div class="contacts__wrapper">
            <div class="contacts__info">
                <h2 class="contacts__title subtitle">
                    Контакты
                </h2>
                <address class="contacts__address">
                    <?php the_field("address"); ?>
                </address>
                <a href="tel:<?php the_field("tel"); ?>" class="contacts__tel"><?php the_field("tel"); ?></a>
                <a href="mailto:<?php the_field("email"); ?>" class="contacts__email"><?php the_field("email"); ?></a>
            </div>
        </div>
        <div style="height: 500px;" id="map" class="contacts__map"></div>
    </div>
</section>


    <script src="https://api-maps.yandex.ru/2.1/?apikey=4e58c3ee-b1a3-41de-998a-5d459241b6d6&lang=ru_RU" type="text/javascript"></script>
    <script>
        ymaps.ready(function () {
            var myMap = new ymaps.Map('map', {
                    center: [55.765391020362415,37.608072053407604],
                    zoom: 15
                }, {
                    searchControlProvider: 'yandex#search'
                }),
                myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                    // hintContent: 'Москва!',
                    // balloonContent: 'Столица России'
                }, {
                    iconLayout: 'default#image',
                    iconImageHref: '<?=get_template_directory_uri()?>/farro/app/img/logo_fire.svg',
                    iconImageSize: [40, 62],
                    iconImageOffset: [-5, -38]
                });

            myMap.geoObjects.add(myPlacemark);
        });
    </script>

    </main>
<?php
get_footer();
