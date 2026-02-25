<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";




echo"


 <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"  integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


 <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>   
      
   <script language=\"javascript\">

//initialise the map
	function init() {
       
";





include BASEPATH ."/docs/css/maykers.inc";

if($_GET['show'] =='location') {


    echo "
     
    let locationmarker,circle,zoomed;
    let mylatitude,mylongitude ;
    let route;
    let intialroute=[];
     
    let aroutedarray=[];
    let currentlat;
    currentlat=mylatitude;
    var request = new XMLHttpRequest();
     navigator.geolocation.watchPosition(success,error);
     
         function success(position) {
              const latitiude=position.coords.latitude;
             const longitude=position.coords.longitude;
             const accuracy=position.coords.accuracy;
              
              //detect a change in postion 
      
               if(locationmarker){
                map.removeLayer(locationmarker);
                 map.removeLayer(circle);
             
             }
                          
              locationmarker=L.marker([latitiude, longitude]).addTo(map);
                 locationmarker.on('click', function(e){
                            map.setView([e.latlng.lat, e.latlng.lng],16);
                });
              circle = L.circle([latitiude, longitude], { radius:accuracy }).addTo(map);
     
             if(!zoomed){
                    zoomed=map.fitBounds(circle.getBounds());
                      map.setView([latitiude, longitude],15);
            }
             
		  
		 
	        
             
            
            
         }
         ";
}
$locationlat='';
$locationlong='';


$locationtype = " ";
 $idlatlon='';
$data='';

if(isset($_POST['id']))
    $_GET['id']=$_POST['id'];
echo "
 var markers = [";
if(isset($_GET['id'])) {
    $query=mysqli_query($japansql ,"select   id, location_name, latitude, longitude, description, web_page, marker, type from locations  
where id =".$_GET['id']." and active =1");
}
else
    $query=mysqli_query($japansql ,"select   id, location_name, latitude, longitude, description, web_page, marker,island,type from locations  
where type !='station'  and type !='hotel'   and type !='private'   and marker  ='information'  and active =1 and latitude is not NULL");
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
    if(isset($_POST['closest_station'])) {
        $stationstartlat=$result['latitude']+.2;
        $stationstartlon=$result['longitude']+.2;
        $stationendlat=$result['latitude']-.2;
        $stationendlon=$result['longitude']-.2;
        //echo "select  id, location_name, latitude, longitude, description, web_page, marker  from locations where type ='station' and  (latitude between ".$stationendlat." and ".$stationstartlat." ) and (longitude  between ".$stationendlon." and ".$stationstartlon ." )\n";

        $stationquery=mysqli_query($japansql ,"select  id, location_name, latitude, longitude, description, web_page, marker  from locations   where type ='station'   and  (latitude between ".$stationendlat." and ".$stationstartlat." ) and (longitude  between ".$stationendlon." and ".$stationstartlon ." )");
        while($stationresult=mysqli_fetch_assoc($stationquery))
            $stationstations[]=$stationresult;


    }



    $locationlat=$result['latitude'];
      $locationlong=$result['longitude'];
    $result['location_name']=ucwords(strtolower($result['location_name']));
   // $directions="<br><a href=\"directions.php?id=".$result['id']."\">Show Route</a>";
    $result['description']=str_replace("Japan","",$result['description']);
    $result['description']=str_replace("japan","",$result['description']);
    $result['description']=str_replace(",","<br>",$result['description']);
    $directions="<form method=POST action=directions.php><input type=hidden name=id value =".$result['id']." ><input type=hidden name=timestamp value=".strtotime("now")." ><input type=hidden name=longitude value =".$result['longitude']." ><input type=hidden name=latitude value =".$result['latitude']." ><input type =hidden name=id value =".$result['id']." ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\">Show Route</button></form>";
    $website="<br><a href =\"".$result['web_page']."\"   class=\"btn btn-outline-light text-info  btn-sm\"  target =_blank role=\"button\"> Web Page </a><br><br>";

  if($result['type']!='station')
        $nearstation="<form method=POST action=fullmap.php><input type=hidden name=id value =".$result['id']." ><input type=hidden name=island value=".$result['island']."><input type=hidden name=closest_station value=go><button class=\"btn  btn-outline-light text-info btn-sm\">Find Station</button></form>";

if($result['marker']=='information')
     $diplay="<br><table width=100%> <tr><td>". $directions."</td><td> </td> <td></td><td>".$website."</td></tr></table>";
 else
    $diplay="<br><table width=100%> <tr><td>". $directions."</td><td> </td> <td>".$website."</td><td>".$nearstation."</td></tr></table>";



    if(isset($_GET['id'])) {
        $idlatlon=$result['latitude'].",".$result['longitude']."";
    }
    if(strlen($data)>0)
        $data.= ",[".$result['longitude'].",".$result['latitude'].",'<b>".$result['location_name']."</b><br>".$result['0']."','". $diplay."','".$result['marker']."'  ]";
    else
        $data=   "[".$result['longitude'].",".$result['latitude'].",'<b>".$result['location_name']."</b><br>".$result['0']."','". $diplay."','".$result['marker']."'  ]";

}

echo $data;
echo " ];";



if(isset($_POST['closest_station'])) {
    echo "\n
    
    alert(4);
    var stationmerkers = [";
    $stationmerkerdata = '';
    foreach ($stationstations as $id => $stationdata) {
        $stationdata['description'] = str_replace("Japan", "", $stationdata['description']);
        $stationdata['description'] = str_replace("japan", "", $stationdata['description']);
        $stationdata['description'] = str_replace(",", "<br>", $stationdata['description']);
        $directions="<form method=POST action=directions.php><input type=hidden name=id value =".$stationdata['id']." ><input type=hidden name=timestamp value=".strtotime("now")." ><input type=hidden name=longitude value =".$stationdata['longitude']." ><input type=hidden name=latitude value =".$stationdata['latitude']." ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\">Show Route</button></form>";
        $website="<br><a href =\"".$stationdata['web_page']."\"   class=\"btn btn-outline-light text-info  btn-sm\"  target =_blank role=\"button\"> Web Page </a><br><br>";
        $nearstation="<form method=POST action=fullmap.php><input type=hidden name=id value =".$stationdata['id']." ><input type=hidden name=island value=".$stationdata['island']."><input type=hidden name=closest_station value=go><button class=\"btn  btn-outline-light text-info btn-sm\">Find Station</button></form>";
        $diplay="<br><table width=100%> <tr><td>". $directions."</td><td> </td> <td>".$website."</td><td>".$neggarstation."</td></tr></table>";

        if (strlen($stationmerkerdata) > 0)
            $stationmerkerdata .= ",[" . $stationdata['longitude'] . "," . $stationdata['latitude'] . ",'<b>" . $stationdata['location_name'] . "</b><br>" . $stationdata['description'] . "','" . $diplay . "','" . $stationdata['marker'] . "','" . $hoteldirections . "' ]\n";
        else
            $stationmerkerdata = "[" . $stationdata['longitude'] . "," . $stationdata['latitude'] . ",'<b>" . $stationdata['location_name'] . "</b><br>" . $stationdata['description'] . "','" . $diplay . "','" . $stationdata['marker'] . "','" . $hoteldirections . "' ]\n";
    }

    echo $stationmerkerdata;
    echo " ];\n";

    if (strlen($stationmerkerdata) > 0) {
        echo " 

    
    for (var j=0; j<stationmerkers.length; j++) {
            var lon = stationmerkers[j][0];
            var lat = stationmerkers[j][1];
           var popupText = stationmerkers[j][2]+stationmerkers[j][3]+stationmerkers[j][5];
            var markerLocation = new L.LatLng(lat, lon);
            var mycon = stationmerkers[j][4];
             var stmarker ='';
            	stmarker = new L.Marker(markerLocation, {icon:StationIcon} );
             map.addLayer(stmarker);
             var customOptions = {
             'maxWidth': '200',
              'className': 'custom',
             closeButton: true,
            closeOnClick : true,
            autoClose: true
            }
            stmarker.bindPopup(popupText,customOptions);

     stmarker.on('click', function(e){
           map.setView([e.latlng.lat, e.latlng.lng], 16);
           });
            };    
      ";


    }
}

if(isset($_GET['id'])) {
     echo " var tokyo = new L.LatLng(" . $idlatlon. ");
map.setView(tokyo,6); ";

}

else {
    echo " var tokyo = new L.LatLng(" . $GLOBALS['zoompoint'] . ");
map.setView(tokyo,6); ";
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
            var popupText = markers[i][2]+markers[i][3];
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
 
        marker.bindPopup(popupText,customOptions);
           marker.bindPopup(popupText);
      marker.on('click', function(e){
    map.setView([e.latlng.lat, e.latlng.lng], 18);
});
            } 
         

        
function onMapClick(e) {


  var customOptions = {
  'maxWidth': '300',
  'className': 'custom',
  closeButton: true,
  closeOnClick : true,
  autoClose: true,
  content: '<form method=POST action=directions.php>  <input type=hidden name=id value=free><input type=hidden name=endlatitude value ='+e.latlng.lat+' ><input type=hidden name=endlongitude value ='+e.latlng.lng+' >    <input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\">Show Route</button></form>'
}


 // popup = L.popup(e.latlng, customOptions ).openOn(map);

}
//map.on('click', onMapClick);

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



</script>";
include BASEPATH ."/docs/menu.php";
   

echo "<body onLoad=\"javascript:init();\">
<center>
 <table border =1 width=95% height=75% ><tr><td>  <div id=\"map\" style=\"height: 83vh;\"></div></td></tr></table>";


echo "<p id=\"locationmap\"></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";



include BASEPATH ."/docs/footer.php";
