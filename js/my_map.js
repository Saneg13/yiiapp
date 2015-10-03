/**
 * Created by sanek on 14.08.15.
 */
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
        content: ' Hello, Ualera! '
        /*content: '<?php echo 'Hello, Ualera! '. $fightersWeapon ?>'*/
    });
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title: 'Жмакни здесь!'
    });
    google.maps.event.addListener(marker, 'click', function() {infowindow.open(map,marker);
    });
}