<!DOCTYPE html>
<html>
    <head>
<title>Agent Location</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <style>
            html, body{
                height:100%;
} #map{
                height:60%;
            }
        </style>
    </head>
    <body>
        <div id="map"></div>
<script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBO6Cb_4Ml_oUKjvjfj5CWKJWDmqaIqdhQ"></script>
<script>
//set map options
var myLatLng = {lat: 38.9, lng: -77.0}; var mapOptions = {
center: myLatLng,
zoom: 12,
mapTypeId: google.maps.MapTypeId.ROADMAP
};
//create map
var map = new google.maps.Map(document.getElementById('map'),
mapOptions);
//setting the mapTypeId upon construction
map.setMapTypeId(google.maps.MapTypeId.HYBRID); 

var marker1Options = {
position: myLatLng,
map: map,
title: "",
draggable: true,
animation: google.maps.Animation.DROP}

var marker1 = new google.maps.Marker(marker1Options);

var contentString = "<div>This is an InfoWindow</div>";
var infowindow = new google.maps.InfoWindow({ content: contentString,
maxWidth: 100
});
//add lister to the marker to show InfoWindow
marker1.addListener("click", function(){
//ANIMATION
infowindow.open(map, marker1); });


</script>

    </body>
    </html>