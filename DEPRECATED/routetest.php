<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";

$_GET['island']='all';
echo "
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

	function init() {
              

         var greenIcon = L.icon({
         iconUrl: 'marker-icon.png',
         shadowUrl: 'marker-icon.png'
                });


         var tokyo = new L.LatLng(".$GLOBALS['zoompoint']."); 
	 map.setView(tokyo,6);
";

if($_GET['location']==1){
    echo "
const x = document.getElementById(\"locationmap\");
         var watchID;
         var geoLoc;
        var lat=0;
        var lon=0;
getLocation();
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(success, error);
  } else {
    x.innerHTML = \"Geolocation is not supported by this browser.\";
  }
}
function success(position) {
var tester=1;
     lon=position.coords.longitude;
     lat=position.coords.latitude;
 var markerLocation = new L.LatLng(lat,lon);
 locationmarker = new L.Marker(markerLocation, {icon:locationIcon} );
  var mycon = '';
   map.addLayer(locationmarker);
        var somepos = new L.LatLng(lat,lon);
         map.setView(somepos, 14);
}";


}

include BASEPATH ."/docs/css/maykers.inc";

$mapmarker='';
$locationtype = " ";


if($_GET['route'])
    $mapmarker= " and   marker='".$_GET['route']."'";
else
    $mapmarker= "and  type is NOT NULL ";


if( $_GET['island']) {
    if ($_GET['island'] == 'all')
        $locationtype = " ";
    else
        $locationtype = " and island ='" . $_GET['island'] . "' ";
}
else
    $locationtype = " ";

$data='';
echo "
 var markers = [";

$query=mysqli_query($japansql ,"select location_name, latitude, longitude, description, web_page, marker from locations where type ='station'  ".$locationtype." ".$mapmarker."  ");
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){

    if(strlen($data)>0)
        $data.= ",[".$result['longitude'].",".$result['latitude'].",'<bb>".$result['location_name']."</b><br>".$result['description']."','<br><a href =\"".$result['web_page']."\"> Web Page</a>','".$result['marker']."' ]";
    else
        $data=   "[".$result['longitude'].",".$result['latitude'].",'<bb>".$result['location_name']."</b><br>".$result['description']."','<br><a href =\"".$result['web_page']."\"> Web Page</a>','".$result['marker']."' ]";

}

echo $data;
echo " ];
   for (var i=0; i<markers.length; i++) {
           
            var lon = markers[i][0];
            var lat = markers[i][1];
            var popupText = markers[i][2];
            var mycon = markers[i][4];
         var marker ='';
             var markerLocation = new L.LatLng(lat, lon);
              marker = new L.Marker(markerLocation, {icon:StationIcon} );
             
          if(mycon=='tokaido'){
                       marker = new L.Marker(markerLocation, {icon:TokaidoStationIcon} );
          }
          if(mycon=='sanyo'){
                       marker = new L.Marker(markerLocation, {icon:SanyoStationIcon} );
          }
            if(mycon=='tohoku'){
                       marker = new L.Marker(markerLocation, {icon:TohokuStationIcon} );
          }  
             if(mycon=='akita'){
                       marker = new L.Marker(markerLocation, {icon:AkitaStationIcon} );
          }      
           if(mycon=='hokkaido'){
                       marker = new L.Marker(markerLocation, {icon:HokkaidoStationIcon} );
          }        
                var mycon = '';                     
             map.addLayer(marker);
             marker.bindPopup(popupText);
      
         }

";

include BASEPATH ."/docs/myjsfunctions.js";

include BASEPATH ."/docs/routelist.php";


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
<center><br>
       
 <table border =1 width=95% height=75% ><tr><td>  <div id=\"map\" style=\"height: 83vh;\"></div></td></tr></table>";
echo "<p id=\"locationmap\"></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";





include BASEPATH ."/docs/footer.php";
