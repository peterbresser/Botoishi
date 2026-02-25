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
if(isset($_GET['island'])) {
    if ($_GET['island'] == 'all') {
        echo "  	var tokyo = new L.LatLng(" . $GLOBALS['zoompoint'] . "); 
	            map.setView(tokyo, 5);";
    }
    if ($_GET['island'] == 'hokkaido') {
        echo "  	var hokkaido = new L.LatLng(" . $GLOBALS['hokkaido'] . "); 
	            map.setView(hokkaido, 7);";
    }
    if ($_GET['island'] == 'honshu') {
        echo "  	var honshu = new L.LatLng(" . $GLOBALS['honshu'] . "); 
	            map.setView(honshu, 7);";
    }
    if ($_GET['island'] == 'kyushu') {
        echo "  	var kyushu = new L.LatLng(" . $GLOBALS['kyushu'] . "); 
	            map.setView(kyushu, 8);";
    }
    if ($_GET['island'] == 'shikoku') {
        echo "  	var shikoku = new L.LatLng(" . $GLOBALS['shikoku'] . "); 
	            map.setView(shikoku, 9);";
    }
}

$stationdata=array();
$locationtype = " ";
 $idlatlon='';
$data='';
if(isset($_GET['island'])) {
    if ($_GET['island']) {
        if($_GET['island']=='all')
            $maptype = "";
        else
            $maptype = " and  island='" . $_GET['island'] . "'";
    }
    else
        $maptype = "and island is NOT NULL ";
}
echo "
 var markers = [";
if(isset($_GET['id'])) {
    $query=mysqli_query($japansql ,"select   id, location_name, latitude, longitude, description, web_page, marker from locations  
where id =".$_GET['id']."  and active =1");
}
else
    $query=mysqli_query($japansql ,"select  distinct  location_name,id, latitude, longitude, description, web_page, marker,island from locations  
where type ='station'  and type !='hotel'  ". $maptype."  and type !='private'  and active =1   and   type='station' ");
while($queryresult=mysqli_fetch_array($query,MYSQLI_ASSOC)) {


    $stationdata[$queryresult['location_name']]=$queryresult;


}


foreach( $stationdata as $result){
    $hotelstartlat=$result['latitude']+.1;
    $hotelstartlon=$result['longitude']+.1;
    $hotelendlat=$result['latitude']-.1;
    $hotelendlon=$result['longitude']-.1;
    $hotelquery=mysqli_query($japansql ,"select  id, location_name, latitude, longitude, description, web_page, marker  from locations   where type ='hotel' ".$chain."  and  (latitude between ".$hotelendlat." and ".$hotelstartlat." ) and (longitude  between ".$hotelendlon." and ".$hotelstartlon ." )");
    while($hotelresult=mysqli_fetch_assoc($hotelquery))
        $stationhotels[]=$hotelresult;


    $locationlat=$result['latitude'];
      $locationlong=$result['longitude'];
    $result['location_name']=ucwords(strtolower($result['location_name']));
   // $directions="<br><a href=\"directions.php?id=".$result['id']."\">Show Route</a>";
    $result['description']=str_replace("Japan","",$result['description']);
    $result['description']=str_replace("japan","",$result['description']);
    $result['description']=str_replace(",","<br>",$result['description']);
    $directions="<form method=POST action=directions.php><input type=hidden name=id value =".$result['id']." ><input type=hidden name=timestamp value=".strtotime("now")." ><input type=hidden name=longitude value =".$result['longitude']." ><input type=hidden name=latitude value =".$result['latitude']." ><input type =hidden name=id value =".$result['id']." ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\">Show Route</button></form>";
    $website="<br><a href =\"".$result['web_page']."\"   class=\"btn btn-outline-light text-info  btn-sm\"  target =_blank role=\"button\"> Web Page </a><br><br>";
   // $nearstation="<form method=POST action=fullmap.php><input type=hidden name=id value =".$result['id']." ><input type=hidden name=island value=".$result['island']."><input type=hidden name=closest_station value=go><button class=\"btn  btn-outline-light text-info btn-sm\">Find Station</button></form>";
    $diplay="<br><table width=100%> <tr><td>". $directions."</td><td> </td> <td>".$website."</td><td>".$nearstation."</td></tr></table>";
    if(isset($_GET['id'])) {

        $idlatlon=$result['latitude'].",".$result['longitude']."";
    }
    //if(  $result['type']!='station')
      //    $result['marker']='station';
    if(strlen($data)>0)
        $data.= ",[".$result['longitude'].",".$result['latitude'].",'<b>".$result['location_name']."</b><br>".$result['descriptionn']."','". $diplay."','".$result['marker']."'  ]";
    else
        $data=   "[".$result['longitude'].",".$result['latitude'].",'<b>".$result['location_name']."</b><br>".$result['descriptionn']."','". $diplay."','".$result['marker']."'  ]";

}

echo $data;
echo " ];";




if(isset($_GET['chain'])) {
    echo "var hotelmarkers = [";
    $hotelmarkerdata = '';
    foreach ($stationhotels as $id => $hoteldata) {
        $directions="<form method=POST action=directions.php><input type=hidden name=id value =".$id." ><input type=hidden name=timestamp value=".strtotime("now")." ><input type=hidden name=longitude value =".$hoteldata['longitude']." ><input type=hidden name=latitude value =".$hoteldata['latitude']." ><input type =hidden name=id value =".$hoteldata['id']." ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\">Show Route</button></form>";
        $website="<br><a href =\"".$result['web_page']."\"   class=\"btn btn-outline-light text-info  btn-sm\"  target =_blank role=\"button\"> Web Page </a><br><br>";
        $diplay="<br><table width=100%> <tr><td>". $directions."</td><td> </td></tr><tr><td>".$website."</td><td> </td></tr></table>";
        $result['description']=str_replace("Japan","",$result['description']);
        $result['description']=str_replace("japan","",$result['description']);
        $result['description']=str_replace(",","<br>",$result['description']);
        if (strlen($hotelmarkerdata) > 0)
            $hotelmarkerdata .= ",[" . $hoteldata['longitude'] . "," . $hoteldata['latitude'] . ",'<bb>" . $hoteldata['location_name'] . "</b><br>" . $hoteldata['description'] ."','". $diplay."','". $hoteldata['marker'] . "','" . $hoteldirections . "' ]";
        else
            $hotelmarkerdata = "[" . $hoteldata['longitude'] . "," . $hoteldata['latitude'] . ",'<bb>" . $hoteldata['location_name'] . "</b><br>" . $hoteldata['description'] ."','". $diplay."','". $hoteldata['marker'] . "','" . $hoteldirections . "' ]";
    }

    echo $hotelmarkerdata;
    echo " ];\n";

    if (strlen($hotelmarkerdata) > 0) {
        echo " for (var j=0; j<hotelmarkers.length; j++) {
            var lon = hotelmarkers[j][0];
            var lat = hotelmarkers[j][1];
            var popupText = hotelmarkers[j][2]+hotelmarkers[j][3]+hotelmarkers[j][5];
            var mycon = hotelmarkers[j][4];
             var marker ='';
             var markerLocation = new L.LatLng(lat, lon);
              marker = new L.Marker(markerLocation, {icon:superHotelIcon} );
               if(mycon == 'dormyinn')
                marker = new L.Marker(markerLocation, {icon:DormyInnIcon} );
                if(mycon == 'onyado')
                marker = new L.Marker(markerLocation, {icon:OnyadoIcon} );
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
		        if(mycon == 'ryokan')
                        marker = new L.Marker(markerLocation, {icon:RyokanIcon} );     
                if(mycon == 'hotel')
                          marker = new L.Marker(markerLocation, {icon:HotelIcon} ); 
                     if(mycon == 'candeo')
                          marker = new L.Marker(markerLocation, {icon:CandeoIcon} ); 
             map.addLayer(marker);
             var customOptions = {
  'maxWidth': '500',
  'className': 'custom',
  closeButton: true,
  closeOnClick : true,
  autoClose: true
}
             marker.bindPopup(popupText,customOptions);

      marker.on('click', function(e){
    map.setView([e.latlng.lat, e.latlng.lng], 16);
});
             };    
      ";


    }
}

if(isset($_GET['location'])) {
if($_GET['location']==2){
    echo "var watchID;
         var geoLoc;
      ";

}
}


echo "
var smallStationIcon = L.icon({
         iconUrl: 'images/locationIcon.png',
         shadowUrl: 'images/locationIcon.png',
         iconSize:     [17, 17],
         shadowSize:   [17,17]
                });
   var bounds;
   var nelat= 0;
    var nelng= 0;
    var selat =0;
    var selng =0;
    var markerGroup = L.layerGroup().addTo(map);

        bounds = map.getBounds();
        nelat =bounds['_northEast']['lat'];
        nelng= bounds['_northEast']['lng'];
        selat =bounds['_southWest']['lat'];
        selng =bounds['_southWest']['lng'];
 
         map . on('moveend', function (e) {

             if (map . getZoom() >=10) {
           
                 for (var  i=0; i<markers.length; i++) {
                   var popupText = markers[i][2]+markers[i][3];//+markers[i][5];  
                     var lat = markers[i][0];
                     var lon = markers[i][1];
                     var markerLocation = new L.LatLng(lat, lon);
                     var mycon =markers[i][4];
                     pointToCheck= L.latLng(lon,lat );
                     console . log(map.getBounds().contains(pointToCheck));
                     
                     if(map.getBounds().contains(pointToCheck)){
                         window['marker'+1]=new L.Marker([lon, lat]);
                     
                         window['marker'+1]=new L.Marker([lon, lat],  {icon:smallStationIcon} );";


                   echo "            
                       window['marker'+1]. setLatLng([lon, lat]);
                        window['marker'+1]. addTo(map);

                    var customOptions = {
                    'maxWidth': '300',
                    'className': 'custom',
                    closeButton: true,
                    closeOnClick : true,
                    autoClose: true
                    }
                      window['marker'+1].bindPopup(popupText,customOptions);
                      window['marker'+1].on('click', function(e){
                           });
            }
         }
       }
             else{
                 console . log(map . getZoom() +'  xx');
                 map.removeLayer(markerGroup);
                 markerGroup =new  L.layerGroup().addTo(map);
             }
         });

         


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
