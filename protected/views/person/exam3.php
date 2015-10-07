<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 16.09.15
 * Time: 13:50
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Добавление маркеров на карту - API Google Maps v3 и markerCluster</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="/js/markerclusterer.js"></script>
    <script type="text/javascript">
        var map;
        var markers = [];
        var markerClusterer = null;
        function initialize() {
            var mapOptions = {
                zoom: 8,
                center: new google.maps.LatLng(56, 37)
            };
            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            var marker1 = new google.maps.Marker({
                position: new google.maps.LatLng('56', '37')
            });
            markers.push(marker1);

            var marker2 = new google.maps.Marker({
                position: new google.maps.LatLng('56', '37.1')
            });
            markers.push(marker2);

            var marker3 = new google.maps.Marker({
                position: new google.maps.LatLng('56', '37.2')
            });
            markers.push(marker3);

            var marker4 = new google.maps.Marker({
                position: new google.maps.LatLng('56.1', '37')
            });
            markers.push(marker4);

            var marker5 = new google.maps.Marker({
                position: new google.maps.LatLng('56.2', '37')
            });
            markers.push(marker5);

            markerClusterer = new MarkerClusterer(map, markers,
                {
                    maxZoom: 13,
                    gridSize: 50,
                    styles: null
                });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body onload="initialize()">
<!--<body onload="initialize()">-->
<h1>My second map..</h1>
<!--<div id="map_canvas" style="width:640px; height:480px"></div>-->
<!--<div ><input type="button" id="map-canvas" value="Показать маркеры" /></div>-->
<?php echo CHtml::ajaxButton('check', 'exam4'); ?>
</body>
</html>