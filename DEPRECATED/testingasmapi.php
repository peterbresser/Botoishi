<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";
include BASEPATH ."/docs/menu.php";

echo "
 <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"  integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>
     <script src='js/mapikey.js'></script>
       <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>   
<body >
  <div id=\"map\" style=\"height: 83vh;\"></div> 
</body>

<script>
const map = L.map('map'); 

map.setView([".$GLOBALS['zoompoint']."], 13); 

";




include BASEPATH ."/docs/css/maykers.inc";

$locationtype = " ";

$data='';
echo "
 var markers = [";

$query=mysqli_query($japansql ,"select location_name, latitude, longitude, description, web_page, marker from locations  ");
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
    $directions="<br><a href=\"directions.php?route=".$result['longitude']."X".$result['latitude']."\">Show Route</a>";
    if(strlen($data)>0)
        $data.= ",[".$result['longitude'].",".$result['latitude'].",'<b>".$result['location_name']."</b><br>".$result['description']."','<br><a href =\"".$result['web_page']."\"> Web Page</a>','".$result['marker']."','".$directions."' ]";
    else
        $data=   "[".$result['longitude'].",".$result['latitude'].",'<b>".$result['location_name']."</b><br>".$result['description']."','<br><a href =\"".$result['web_page']."\"> Web Page</a>','".$result['marker']."','".$directions."' ]";

}

echo $data;
echo " ];";

if($_GET['location']==2){
    echo "var watchID;
         var geoLoc;
      ";

}

if($_GET['location']==1){
    echo "

const x = document.getElementById(\"locationmap\");
	 var watchID;
         var geoLoc;

 


 let locationmarker,circle,zoomed;
     navigator.geolocation.watchPosition(success,error);
         function success(position) {
         
             const latitiude=position.coords.latitude;
             const longitude=position.coords.longitude;
             const accuracy=position.coords.accuracy;
             
          
             if(locationmarker){
              
                 map.removeLayer(locationmarker);
                 map.removeLayer(circle);
                            }
               
              locationmarker=L.marker([latitiude, longitude]).addTo(map);
             
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
 
";


}

echo "


 for (var i=0; i<markers.length; i++) {
           
            var lon = markers[i][0];
            var lat = markers[i][1];
            var popupText = markers[i][2]+markers[i][3]+markers[i][5];
         var marker ='';
             var markerLocation = new L.LatLng(lat, lon);
            var mycon =markers[i][4];
                  	 marker = new L.Marker(markerLocation, {icon:markerIcon} );
             if(mycon == 'mymarker')
                marker = new L.Marker(markerLocation, {icon:markerIcon} );
              if(mycon == 'dormyinn')
                marker = new L.Marker(markerLocation, {icon:DormyInnIcon} );
              if(mycon == 'toyokoinn')
                marker = new L.Marker(markerLocation, {icon:toyokoInnIcon} ); 
                 if(mycon == 'routeinn')
                marker = new L.Marker(markerLocation, {icon:routeInnIcon} ); 
              if(mycon == 'restaurant')
                marker = new L.Marker(markerLocation, {icon:RestaurantIcon} ); 
                  if(mycon == 'superhotel')
                marker = new L.Marker(markerLocation, {icon:superHotelIcon} ); 
                    if(mycon == 'palace')
                marker = new L.Marker(markerLocation, {icon:PalaceIcon} ); 
                     if(mycon == 'ruins')
                marker = new L.Marker(markerLocation, {icon:RuinsIcon} ); 
                          if(mycon == 'monument')
                marker = new L.Marker(markerLocation, {icon:MonumentIcon} );     
                if(mycon == 'hotel')
                marker = new L.Marker(markerLocation, {icon:HotelIcon} ); 
                   if(mycon == 'ryokan')
                marker = new L.Marker(markerLocation, {icon:RyokanIcon} );  
                  if(mycon == 'station')
                marker = new L.Marker(markerLocation, {icon:StationIcon} );                   
                var mycon = '';                     
             map.addLayer(marker);
             marker.bindPopup(popupText);
      
            } 
         


";

include BASEPATH ."/docs/myjsfunctions.js";

echo "

function error(error) {

  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = \"User denied the request for Geolocation.\"
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = \"Location information is unavailable.\"
      break;
    case error.TIMEOUT:
      x.innerHTML = \"The request to get user location timed out.\"
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = \"An unknown error occurred.\"
      break;
  }
}

</script>
   
</head>
</head>
<body onLoad=\"javascript:init();\">
<center>
 <table border =1 width=95% height=75% ><tr><td>  <div id=\"map\" style=\"height: 83vh;\"></div></td></tr></table>";


echo "<p id=\"locationmap\"></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script> 

";



include BASEPATH ."/docs/footer.php";
