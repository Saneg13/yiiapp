<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 06.10.15
 * Time: 12:09
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
    <script type="text/javascript" src="/js/markerclusterer.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#map").css({
                height: 600,
                width: 800
            });
            var myLatLng = new google.maps.LatLng(49.988106, 36.229169);
            xMAP.init('#map', myLatLng, 13);

            $("#showmarkers").click(function(e){
                xMAP.placeMarkers('/js/markers2.xml');
            });
        });

        var xMAP = {
            map: null,
            bounds: null
            }

        xMAP.init = function(selector, latLng, zoom) {
            var myOptions = {
                zoom:zoom,
                center: latLng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            this.map = new google.maps.Map($(selector)[0], myOptions);
            this.bounds = new google.maps.LatLngBounds();
        }

        xMAP.placeMarkers = function (filename) {
            $.get(filename, function(xml){
                $(xml).find("marker").each(function(){
                    // find fields 'name' in 'markers2.xml'
                    var name = $(this).find('name').text();
                    var address = $(this).find('address').text();

                    // define source for images
                    var pathSrc = '/images/icons/Food&Rest/';
                    var img = $(this).find('image').text();
                    var src;
                    var DEFAULT_IMAGE = '/images/icons/avatar-default-icon.png';
                    if (img !='')
                    {
                        src = pathSrc+img;
                    }
                    else
                    {
                        src = DEFAULT_IMAGE;
                    }

                    var image1 = '<div><IMG SRC='+src+' WIDTH="200" HEIGHT="160"></div>';
                    console.log(src);

                    // create a new LatLng point for the marker
                    var lat = $(this).find('lat').text();
                    var lng = $(this).find('lng').text();
                    var point = new google.maps.LatLng(parseFloat(lat),parseFloat(lng));
                    // some debug info
                    // console.log(src); // отладка в JS -- вывод всех значений поля 'SRC+img'

                    // extend the bounds to include the new point
                    xMAP.bounds.extend(point);

                    var markers = [];
                    var marker = new google.maps.Marker({
                        position: point,
                        map: xMAP.map
                    });

                    markers.push(marker);


                    /*var markerCluster = new MarkerClusterer(xMAP.map, markers,
                     {
                     maxZoom: 5,
                     gridSize: 50,
                     styles: null
                     });*/

                    var infoWindow = new google.maps.InfoWindow();

                    console.log(src); // отладка в JS -- вывод всех значений поля 'somefield'*/

                    // all content in string
                    var html='<strong>'+name+'</strong.><br />'+address+'<br />'+image1;

                    google.maps.event.addListener(marker, 'click', function() {
                        //set content
                        infoWindow.setContent(html);
                        // and output markers on map
                        infoWindow.open(xMAP.map, marker);
                    });
                    xMAP.map.fitBounds(xMAP.bounds);
                });
            });
        }
        /*{
            console.log("Code Log"); // выводит "Code Log" в панель консоли
        }*/
    </script>
</head>
<body>
<h1>Second Google map..</h1>
<div id="map">Second Google map</div>
<div ><input type="button" id="showmarkers" value="Показать маркеры" /></div>
</body>
</html>