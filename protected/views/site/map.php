<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 18.07.15
 * Time: 11:10
 */


echo 'ole-ole';
?>

<!DOCSTYLE HTML>
<html>
<head>
    <title>Страница с картой</title>
	<link rel="stylesheet" type="text/css" href="style.css" ><link rel="stylesheet" type="text/css" href="style.css" >
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<meta charset="utf-8">
	<style>
html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript">
	function initialize() {
        var latlng = new google.maps.LatLng(50.045081, 36.278076);
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
		content: 'Hello, Ualera!'
	});
	var marker = new google.maps.Marker({
		position: latlng,
		map: map,
		title: '"Маркер!"'
	});
	google.maps.event.addListener(marker, 'click', function() {infowindow.open(map,marker);
    });
	}
	</script>
</head>
</head>
<body onload="initialize()">
<h1>Let's begin..</h1>
<div id="map_canvas" style="width:640px; height:480px"></div>
</body>
<p>Всякая ерунда, для проверки. </br>
 </p>
</body>
</html>