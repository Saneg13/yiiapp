<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 03.11.15
 * Time: 9:52
 */
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <title>Добавление маркеров на карту - Yandex Maps API и jQuery</title>
    <link rel="stylesheet" type="text/css" href="/css/my_css.css" >
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
    <script type="text/javascript" src="/js/jquery-1.4.1.min.js"></script>
    <?php echo CHtml::script(""); ?>
    <style>
        html, body, #my_map {
            width: 100%; height: 100%; padding: 0; margin: 0;
        }
    </style>
    <script type="text/javascript">
        ymaps.ready(init);
        var myMap,
            myPlacemark,
            point,
            username,
            user_address,
            user_icon;

        function init(){
            myMap = new ymaps.Map ("my_map", {
                /*center: [49.988106, 36.229169],*/
                center: ['<?php print $userLat; ?>','<?php print $userLng; ?>'],
                zoom: 12,
                behaviors: ['default', 'scrollZoom']
            },{
                searchControlProvider: 'yandex#search'
            });

            point = ['<?php print $userLat; ?>','<?php print $userLng; ?>'];
            username = '<?php print $userName; ?>';
            user_address = '<?php print $userAddress; ?>';
            user_icon  = '<?php echo CHtml::image($userIcon); ?>';
            myPlacemark = new ymaps.Placemark([point], { hintContent: user_icon, balloonContent: username+' live at '+user_address });
            myMap.geoObjects.add(myPlacemark);
        }
    </script>
</head>
<body>
    <h3>Simple Yandex Map API</h3>
    <div id="my_map" style="width: 600px; height: 500px"></div>
</body>
