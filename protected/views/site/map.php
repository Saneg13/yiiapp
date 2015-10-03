<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 18.07.15
 * Time: 11:10
 */
var_dump($data4);
?>

<!DOCSTYLE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Страница с картой</title>
	<link rel="stylesheet" type="text/css" href="/css/my_css.css" ><link rel="stylesheet" type="text/css" href="/css/my_css.css" >
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style>
html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <!--<script type="text/javascript" src="/js/my_map.js" async></script>-->
    <script type="text/javascript">
        function initialize() {
            var latlng = new google.maps.LatLng(
                <?php print $data7; ?>,
                <?php print $data8; ?>);
            var settings = {
                zoom: 15,
                center: latlng,
                mapTypeControl: true,
                mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                navigationControl: true,
                navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(
                document.getElementById("map_canvas"), settings
            );
            var infowindow = new google.maps.InfoWindow({
                /*content: ' Hello, Ualera! '*/
                content:
            '<?php
            print $data5.'<br />';
            print $data6.'<br />';
            ?>'
            });
            var marker = new google.maps.Marker({
                position: latlng,
                map: map,
                title: 'Жмакни здесь!'
            });
            google.maps.event.addListener(marker, 'click', function() {infowindow.open(map,marker);
            });
        }
        </script>
        </head>
<!--Run first script-->
<body onload="initialize()">
<h1>My first map..</h1>
<div id="map_canvas" style="width:640px; height:480px"></div>
<p>Всякая ерунда, для проверки. </br>
    <?php foreach($data1 as $key => $value) {
        echo $value['name'], ' ', $value['age'], '<br />';
    } ?>
</p>
<p>Эт-с, еще проверочка. </br>
    <?php foreach($data2 as $key => $value) {
        echo $value['name'], ' ', $value['age'], '<br />';
    } ?>
</p>
<p>Еще немного.. </br>
    <?php
    foreach($data3 as $key => $value) {
        echo $value['user_name'], ' ', $value['user_address'], '<br />';
    }
    print $data7.'<br />';
    echo $data8.'<br />';
    ?>
</p>
</body>
</html>