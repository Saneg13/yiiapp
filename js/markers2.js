/**
 * Created by sanek on 03.11.15.
 */
$(document).ready(function() {
    $("#map").css({
        height: 500,
        width: 600
    });

    var myLatLng = new google.maps.LatLng(49.988106, 36.229169);
    xMAP.init('#map', myLatLng, 13);

    $("#showmarkers").click(function(e){
        xMAP.placeMarkers('/test/showusers');
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

xMAP.placeMarkers = function (action) {
    $.get(action, function(response){

        // alert(response);

        var data = JSON.parse(response);
        // alert(data);
        console.log(data);

        $(data).each(function(){
            // find fields
            var name = data.user_name;
            var address = data.user_address;
            // console.log(name);
            //
            // define source for images
            var pathSrc = '/images/icons/png/';
            var img = data.icon;
            var src;
            var DEFAULT_IMAGE = '/images/icons/avatar-default-icon.png';
            if (img !='')
            {src = img; }
            else {src = DEFAULT_IMAGE; }
            //
            var image1 = '<div><IMG SRC='+src+' WIDTH="160" HEIGHT="160"></div>';
            // create a new LatLng point for the marker
            var lat = data.lat;
            var lng = data.lng;
            var point = new google.maps.LatLng(parseFloat(lat),parseFloat(lng));

            // extend the bounds to include the new point
            xMAP.bounds.extend(point);

            var markers = [];
            var marker = new google.maps.Marker({
                position: point,
                map: xMAP.map,
                title: name
            });

            markers.push(marker);

            /*var markerCluster = new MarkerClusterer(this.ajax, markers,
             {
             maxZoom: 5,
             gridSize: 50,
             styles: null
             });
             console.log(markerCluster);*/

            var infoWindow = new google.maps.InfoWindow();

            // console.log(src); // отладка в JS -- вывод всех значений поля 'somefield'*/

            // all content in string
            //var html='<strong>'+name+'</strong.><br />'+address;
            var html='<strong>'+name+'</strong.><br />'+address+'<br />'+image1;

            google.maps.event.addListener(marker, 'click', function() {
                //set content
                infoWindow.setContent(html);
                // and output markers on ajax
                infoWindow.open(xMAP.map, marker);
            });
            xMAP.map.fitBounds(xMAP.bounds);
        });
    });
}