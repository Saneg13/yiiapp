<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 02.11.15
 * Time: 20:49
 */
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <title>Добавление маркеров на карту - API Google Maps v3 и jQuery</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="/js/jquery-1.4.1.min.js"></script>
    <!--<script type="text/javascript" src="/js/markerclusterer.js"></script>-->
    <script type="text/javascript" src="/js/markers2.js"></script>
</head>
<body>
<?php
/*echo '<br />'.'В response одна запись из таблицы. Скорее всего проблема в способе вывода массива. '.
    '<br />'.'model - /protected/models/Info.php'.
    '<br />'.'controller - /protected/controllers/AjaxController.php'.
    '<br />'.'view - /protected/views/ajax/example2.php. <br /><br />';*/
?>
<h3>Google Maps API + MySQL</h3>
<div ><input type="button" id="showmarkers" value="Показать маркер" /></div>
<div id="map"></div>
</body>
</html>
