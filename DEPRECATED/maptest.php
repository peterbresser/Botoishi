<?php


echo "<!DOCTYPE html>
<html>

<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>map and marker</title>

    <style>
        #mapid {
            height: 800px;
            width: 100%;
            direction: ltr !important;
            position: relative;
        }
    </style>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.2.0/leaflet.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.2.0/leaflet.css\">
</head>
<body>
<h1 id=\"zoomlevel\">zoom level</h1>
<div id=\"mapid\"></div>

<script>
    var mymap = L.map('mapid').setView([35.4131226,136.5103287], 8);


    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png?{foo}', {foo: 'bar'}).addTo(mymap);
var mmarker='';
 var markers = [[35.4131226, 136.5103287],[35.5131226, 136.5103287],[35.5131226, 136.7703287]];
 
var markerGroup = L.layerGroup().addTo(mymap);


   mymap . on('zoomend', function (e) {
 
   
       if (mymap . getZoom() >= 8) {
           for (var  i=0; i<markers.length; i++) {
              var lon = markers[i][0];
              var lat = markers[i][1];
   
              window['marker'+1]= L . marker([lon, lat],{title : 'title popup' }).addTo(markerGroup);;
              console . log(mymap . getZoom());
              window['marker'+1]. setLatLng([lon, lat]);
               window['marker'+1]. addTo(mymap);
          } 
       }
       else{
       mymap.removeLayer(markerGroup);
       markerGroup =new  L.layerGroup().addTo(mymap);
       }
     });
</script>
</body>
</html>";
