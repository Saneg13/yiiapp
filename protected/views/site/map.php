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
    <script src="/js/my_map.js" async></script>
</head>
<!--Run first script-->
<body onload="initialize()">
<h1>My first map..</h1>
<div id="map_canvas" style="width:640px; height:480px"></div>
<p>Всякая ерунда, для проверки. </br> </p>
</body>
</html>