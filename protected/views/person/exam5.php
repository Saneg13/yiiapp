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
                xMAP.placeMarkers('/Info');
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

        xMAP.placeMarkers = function(filename) {
            $.post(filename, function(json){
                $(json).find("info").each(function(){
                    var name = $(this).find('<?php echo $userName; ?>').text();
                    var address = $(this).find('<?php echo $userAddress; ?>').text();

                    // create a new LatLng point for the marker
                    var lat = $(this).find(<?php print $userLat; ?>).text();
                    var lng = $(this).find(<?php print $userLng; ?>).text();
                    var point = new google.maps.LatLng(parseFloat(lat),parseFloat(lng));

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
                    var html='<strong>'+name+'</strong.><br />'+address;
                    google.maps.event.addListener(marker, 'click', function() {
                        infoWindow.setContent(html);
                        infoWindow.open(xMAP.map, marker);
                    });
                    xMAP.map.fitBounds(xMAP.bounds);
                });
            });
        }
    </script>
</head>
<body><div id="map"></div>
<div ><input type="button" id="showmarkers" value="Показать" /></div>
</body>
</html>