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
    <title>My first map..</title>
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
                title: '<?php print $userName; ?>'
            });
            google.maps.event.addListener(marker, 'click', function() {infowindow.open(map,marker);
            });
        }
        </script>
        </head>
<body onload="initialize()">
<h3>My first map..</h3>
<div id="map_canvas" style="width:640px; height:480px"></div>
<p>Coords.. </br>
    <?php
    print $userLat.'<br />';
    echo $userLng.'<br />';
    // var_dump($inf);
    ?>
</p>
<p>More, for example.. </br>
    <?php
    $DEFAULT_IMAGE = '/images/icons/avatar-default-icon.png';
    foreach ($inf as $value) {

        if ($value->icon =='')
        {
            $value->icon = $DEFAULT_IMAGE;
        }
        echo '<div><b>User: '.$value->user_name.'</b><br />Who live in <u>'.$value->user_address.'</u><br />'.CHtml::image($value->icon).'<br /></div>';

        /*echo $value->user_name.' '.$value->user_address.'<br />'.CHtml::image($value->icon).'<br />';*/
    }


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