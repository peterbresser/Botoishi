<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";
echo " <head> <meta charset=\"UTF-8\">
		<meta name=\"description\" content=\"Map of Japan.\">
		<meta name=\"keywords\" content=\"japan map \">
		<meta name=\"twitter:card\" content=\"summary_large_image\">
		<meta name=\"twitter:site\" content=\"@botoishi\">
		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
		<meta property=\"fb:app_id\" content=\"".$randomid."\">
		<meta property=\"og:description\" content=\"where to  go in japan\">
		<meta property=\"og:title\" content=\"Japan Chain Hotels\">
		<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">
		<meta property=\"og:type\" content=\"website\">
		<meta property=\"og:url\" content=\"https://botoishi.com.au/e/".$_SERVER['PHP_SELF'] .".php\">
 </head>";

if(isset($_POST['location'])) {
    $_GET['location']=$_POST['location'];
}

if(isset($_POST['route'])) {
    $_GET['route']=$_POST['route'];
}

echo "

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
 .custom-popup .leaflet-popup-content-wrapper {
      background: #2c3e50;
      color: #fff;
      font-size: 16px;
      line-height: 24px;
      border-radius: 0px;
    }
    .custom-popup .leaflet-popup-content-wrapper a {
      color: rgba(255, 255, 255, 0.1);
    }
    .custom-popup .leaflet-popup-tip-container {
      width: 30px;
      height: 15px;
    }
    .custom-popup .leaflet-popup-tip {
      background: transparent;
      border: none;
      box-shadow: none;
    }
    /* css to customize Leaflet default styles  */
    .custom .leaflet-popup-tip,
    .custom .leaflet-popup-content-wrapper {
      background: #0b3654;
      color: #ffffff;
    }
</style>
 <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"  integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


 <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>   
      
   <script language=\"javascript\">

//initialise the map
	function init() {
       
";





include BASEPATH ."/docs/css/maykers.inc";

$locationlat='';
$locationlong='';


$locationtype = " ";
 $idlatlon='';
$data='';
echo "
 var markers = [";
if(isset($_GET['id'])) {
    $query=mysqli_query($japansql ,"select   id, location_name, latitude, longitude, description, web_page, marker from locations  
where id =".$_GET['id']."  and active =1");
}
else
    $query=mysqli_query($japansql ,"select   id, location_name, latitude, longitude, description, web_page, marker,island from locations  
where type !='station'  and type !='hotel'   and type !='private'  and active =1");
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
    $locationlat=$result['latitude'];
      $locationlong=$result['longitude'];
    $result['location_name']=ucwords(strtolower($result['location_name']));
   // $directions="<br><a href=\"directions.php?id=".$result['id']."\">Show Route</a>";
    $result['description']=str_replace("Japan","",$result['description']);
    $result['description']=str_replace("japan","",$result['description']);
    $result['description']=str_replace(",","<br>",$result['description']);
    $directions="<form method=POST action=directions.php><input type=hidden name=id value =".$result['id']." ><input type=hidden name=timestamp value=".strtotime("now")." ><input type=hidden name=longitude value =".$result['longitude']." ><input type=hidden name=latitude value =".$result['latitude']." ><input type =hidden name=id value =".$result['id']." ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\">Show Route</button></form>";
    $website="<br><a href =\"".$result['web_page']."\"   class=\"btn btn-outline-light text-info  btn-sm\"  target =_blank role=\"button\"> Web Page </a><br><br>";
    $nearstation="<form method=POST action=fullmap.php><input type=hidden name=id value =".$result['id']." ><input type=hidden name=island value=".$result['island']."><input type=hidden name=closest_station value=go><button class=\"btn  btn-outline-light text-info btn-sm\">Find Station</button></form>";
    $diplay="<br><table width=100%> <tr><td>". $directions."</td><td> </td> <td>".$website."</td><td>".$nearstation."</td></tr></table>";
    if(isset($_GET['id'])) {
        $idlatlon=$result['latitude'].",".$result['longitude']."";
    }
    if(strlen($data)>0)
        $data.= ",[".$result['longitude'].",".$result['latitude'].",'<b>".$result['location_name']."</b><br>".$result['description']."','". $diplay."','".$result['marker']."'  ]";
    else
        $data=   "[".$result['longitude'].",".$result['latitude'].",'<b>".$result['location_name']."</b><br>".$result['description']."','". $diplay."','".$result['marker']."'  ]";

}

echo $data;
echo " ];";



if(isset($_POST['closest_station'])) {
    if($_POST['closest_station']=='go') {
        $stationdistance=0;
        $stationlat=0;
        $stationlong=0;

echo "\n\n
var closestmarkers = [";

$squery=mysqli_query($japansql ,"select id, latitude, longitude from locations  where type ='station' and active =1   ");


while($sresult=mysqli_fetch_array($squery,MYSQLI_ASSOC)) {
    $calculatedstationdistance = getDistanceFromLatLonInKm($locationlat, $locationlong, $latitude, $longitude);

    if ($stationdistance == 0) {
    $stationdistance = $calculatedstationdistance;
    $stationlat=$sresult['latitude'];
    $stationlong=$sresult['longitude'];

    }
        else{
        if($calculatedstationdistance < $stationdistance ){
                    $stationlat=$sresult['latitude'];
                    $stationlong=$sresult['longitude'];
                    $stationdistance =$calculatedstationdistance;
                       }
                     }
            }
echo "[".$stationlat.",".$stationlong."]";


 echo "];\n\n";
    }
}


function getDistanceFromLatLonInKm($lat1,$lon1,$lat2,$lon2) {
    $R = 6371; // Radius of the earth in km
    $dLat = mydeg2rad($lat2-$lat1);  // deg2rad below

    $dLon = mydeg2rad($lon2-$lon1);
    $a =(sin($dLat/2) * sin($dLat/2)) + ( cos(mydeg2rad($lat1))) * (cos(mydeg2rad($lat2))) *  ( sin($dLon/2) * sin($dLon/2));
    ;
     $c = 2 * atan2(sqrt($a),sqrt(1-$a));
    $distance = $R * $c; // Distance in km
    return $distance;
}

function mydeg2rad($deg) {
    return $deg * (pi()/180);
}


if(isset($_GET['id'])) {
     echo " var tokyo = new L.LatLng(" . $idlatlon. ");
map.setView(tokyo,8); ";

}

else {
    echo " var tokyo = new L.LatLng(" . $GLOBALS['zoompoint'] . ");
map.setView(tokyo,8); ";
}

if(isset($_GET['location'])) {
if($_GET['location']==2){
    echo "var watchID;
         var geoLoc;
      ";

}
}


echo "


 for (var i=0; i<markers.length; i++) {
           
            var lon = markers[i][0];
            var lat = markers[i][1];
            var popupText = markers[i][2]+markers[i][3];//+markers[i][5];
         var marker ='';
             var markerLocation = new L.LatLng(lat, lon);
            var mycon =markers[i][4];
             ";
               include BASEPATH ."/docs/markers.php";
               echo"  var mycon = '';                     
             map.addLayer(marker);
                    var customOptions = {
  'maxWidth': '300',
  'className': 'custom',
  closeButton: true,
  closeOnClick : true,
  autoClose: true
}
//marker.on('mouseover',function(ev) {
//  ev.target.openPopup();
//});
             marker.bindPopup(popupText,customOptions);
           //  marker.bindPopup(popupText);
      marker.on('click', function(e){
    map.setView([e.latlng.lat, e.latlng.lng], 17);
});
            } 
     for (var i=0; i<closestmarkers.length; i++) {   
     
            var clon = closestmarkers[i][0];
            var clat = closestmarkers[i][1];
          
            var dtaionpopupText ='clsest';
            var clostestmarkerLocation = new L.LatLng(clat,clon);
      map.addLayer(marker);
  

                    map.setView(clat, clong,12);
                   
  
}
";

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


echo "<p id=\"locationmap\"></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";



include BASEPATH ."/docs/footer.php";
