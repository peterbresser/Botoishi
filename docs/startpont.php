<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";




echo "
 
 <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"  integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


 <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>

 
<link rel = \"stylesheet\" href = \"css/leaflet.css\" />
<style>
.info {
    padding: 6px 8px;
    font: 14px/16px Arial, Helvetica, sans-serif;
    background: white;
    background: rgba(255,255,255,0.8);
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
    border-radius: 5px;
}
.info h4 {
    margin: 0 0 5px;
    color: #777;
}

</style>
   <script src=\"css/leaflet.js\"></script>
   <script language=\"javascript\">
//initialise the map
	function init() {
         var map = new L.Map('map');                       

         var greenIcon = L.icon({
         iconUrl: 'marker-icon.png',
         shadowUrl: 'marker-icon.png'
                });";


include BASEPATH ."/docs/css/maykers.inc";



$locationtype = " ";

$data='';
echo "
 var markers = [";

$query=mysqli_query($japansql ,"select location_name, latitude, longitude, description, web_page, marker from locations  ");
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
    $directions="<br><a href=\"test2.php?route=".$result['longitude']."X".$result['latitude']."\">Show Route</a>";
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
        var lat=0;
        var lon=0; ";

}

if($_GET['location']!=100) {
    echo "

const x = document.getElementById(\"locationmap\");
	 var watchID;
         var geoLoc;
	var mylat=0;
	var mylon=0;	 
 
getLocation();


function getLocation() {
const options = {
  enableHighAccuracy: true,
  timeout: 5000,
  maximumAge: 0,
};


if(mylon==0){


navigator.geolocation.getCurrentPosition(success, error, options);
}
	else{
  	if (navigator.geolocation) {
  	  navigator.geolocation.watchPosition(success, error);
  	} else { 
  	  x.innerHTML = \"Geolocation is not supported by this browser.\";
  	}
	}
}
 
function success(position) {

     mylon=position.coords.longitude; 
     mylat=position.coords.latitude;
      var markerLocation = new L.LatLng(mylat,mylon);
        locationmarker = new L.Marker(markerLocation, {icon:locationIcon} ); 
     var mycon = '';                     
        map.addLayer(locationmarker);
	    var somepos = new L.LatLng(mylat,mylon); 
         map.setView(somepos, 14);

 for (var i=0; i<markers.length; i++) {
           
            var lon = markers[i][0];
            var lat = markers[i][1];
      
            
            
var popupText= markers[i][2]+'<br>'+markers[i][3]+'<br><br><a href=test2.php?startlat='+mylat+'&startlon='+mylon+'&endlon='+markers[i][0]+'&endlat='+markers[i][1]+'>Show Route</a>';;
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
         
}

";
}
include BASEPATH ."/docs/myjsfunctions.js";

echo "}

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
<body onLoad=\"javascript:init();\">
<center>
 <table border =1 width=95% height=75% ><tr><td>  <div id=\"map\" style=\"height: 83vh;\"></div></td></tr></table>";
echo "<p id=\"locationmap\"></p>";





include BASEPATH ."/docs/footer.php";
