<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 18.07.15
 * Time: 11:10
 */
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
                <?php print $userLat; ?>,
                <?php print $userLng; ?>);
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
                content:
            '<?php
            print $userName.'<br />';
            print $userAddress.'<br />';
            echo CHtml::image($userIcon);
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
<body onload="initialize()">
<h1>My first map..</h1>
<div id="map_canvas" style="width:640px; height:480px"></div>
<p>Coords.. </br>
    <?php
    print $userLat.'<br />';
    echo $userLng.'<br />';
    ?>
</p>
<p>More, for example.. </br>
    <?php
    $abc = '/images/icons/png/viking-icon.png';
    $abd = '';
    if ($abc !=''){
        echo CHtml::image($abc);
    } else {
        echo "var is null";
    }

    foreach ($inf as $value) {
        echo $value->user_name.' '.$value->user_address.'<br />'.CHtml::image($value->icon).'<br />';
    }

    // var_dump($info);
    // echo $info;

    /*if ($id>0){
        foreach($id as $value2){
            echo $value2['$name'];
        }
    }
    else echo 'ERROOORRRR!!!';*/

    ?>
</p>
</body>
</html>