<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

echo "
 <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"
     integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


       <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"
     integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>   
     
     </head>
     <style>
     #map { height: 850px; }
</style>
     <body>
    
    <h1>Map user location</h1>
      <div id=\"map\"></div>
     
    </body>
    <script>
    var map = L.map('map');
    map.setView([51.505, -0.09],5);
    
    
    
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
}).addTo(map);

     let marker,circle,zoomed;
     navigator.geolocation.watchPosition(success,error);
         function success(position) {
             const latitiude=position.coords.latitude;
             const longitude=position.coords.longitude;
             const accuracy=position.coords.accuracy;
             if(marker){
              
                 map.removeLayer(marker);
                 map.removeLayer(circle);
             }
             
              marker=L.marker([latitiude, longitude]).addTo(map);
              circle=L.circle([latitiude, longitude], {radius:accuracy }).addTo(map);
            
              if(!zoomed){
                zoomed=map.fitBounds(circle.getBounds());
             }
              
               map.setView([latitiude, longitude]);
         }
         function error(error) {
             
              switch(error.code) {
    case error.PERMISSION_DENIED:
      alert('User denied the request for Geolocation.');
      break;
    //case error.POSITION_UNAVAILABLE:
      alert('Location information is unavailable.');
      break;
    case error.TIMEOUT:
      alert('The request to get user location timed out.');
      break;
    case error.UNKNOWN_ERROR:
       alert('An unknown error occurred.');
      break;
  }
         }
         
</script>
   
    
     
     

";