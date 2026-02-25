<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";
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
    .stylePopup .leaflet-popup-content-wrapper,
    .stylePopup .leaflet-popup-tip {
        background-color: #ffffff;
       text-align: center;
         border-radius:5px;
         box-shadow: none;
          padding: 1px;
         border: none !important;
         border: 6px solid transparent;
       
    }
 .leaflet-popup-tip {
    display: none;
}
    .leaflet-tooltip.my-labels {
  background-color: transparent;
  border: transparent;
  box-shadow: none;
  box-shadow: none !important;
  font-weight: none;
  font-size: 15px;
    border: 0px;
  }
    /* css to customize Leaflet default styles  */
 
    bottom: 0px;
     
    }
</style>
 <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"  integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


 <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>   
      
   <script language=\"javascript\">

//initialise the map
	function init() {
       
var tokyo = new L.LatLng(".$GLOBALS['zoompoint'].");
map.setView(tokyo, 6);";


include BASEPATH ."/docs/css/maykers.inc";



if(isset($_GET['maptype'])) {
    if ($_GET['maptype'])
        $maptype = " where type='" . $_GET['maptype'] . "'";
    else
        $maptype = "where type is NOT NULL ";
}
if(isset($_GET['island'])) {

    if ($_GET['island']) {
        if ($_GET['island'] == 'all')
            $locationtype = " ";
        else
            $locationtype = " and island ='" . $_GET['island'] . "' ";
    }
}
else
    $locationtype = " ";

$data='';
echo "
 var markers = [";

$query=mysqli_query($japansql ,"select id,location_name, latitude, longitude, description, web_page, marker from locations where type ='hotel' and marker ='minshinku'  ". $locationtype." ");
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){

    $hotelstartlat=$result['latitude']+.2;
    $hotelstartlon=$result['longitude']+.2;
    $hotelendlat=$result['latitude']-.2;
    $hotelendlon=$result['longitude']-.2;
    //echo "select  id, location_name, latitude, longitude, description, web_page, marker  from locations where type ='hotel' and  (latitude between ".$hotelendlat." and ".$hotelstartlat." ) and (longitude  between ".$hotelendlon." and ".$hotelstartlon ." )\n";

    $hotelquery=mysqli_query($japansql ,"select  id, location_name, latitude, longitude, description, web_page, marker  from locations   where type ='station'   and  (latitude between ".$hotelendlat." and ".$hotelstartlat." ) and (longitude  between ".$hotelendlon." and ".$hotelstartlon ." )");
    while($hotelresult=mysqli_fetch_assoc($hotelquery))
        $stationhotels[]=$hotelresult;




    $result['description']=str_replace("Japan","",$result['description']);
    $result['description']=str_replace("japan","",$result['description']);
    $result['description']=str_replace(",","<br>",$result['description']);
    $directions="<form method=POST action=directions.php><input type=hidden name=id value =".$result['id']." ><input type=hidden name=timestamp value=".strtotime("now")." ><input type=hidden name=longitude value =".$result['longitude']." ><input type=hidden name=latitude value =".$result['latitude']." ><input type =hidden name=id value =".$result['id']." ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\"><img src =images/direct.png width=22></button></form>";

    $website="<a href =\'".$result['web_page']."\' target =_blank title=\'WebSite\' ><img src =images/link.png width=22></a>";
    $diplay="<table width=100%> <tr><td>". $website."</td><td> </td> <td>".$directions."</td><td> </td></tr></table>";   if(isset($_GET['id'])) {
        $idlatlon=$result['latitude'].",".$result['longitude']."";
    }
    if(strlen($data)>0)
        $data.= ",[".$result['latitude'].",".$result['longitude'].",'<div class=\"text-center \">".$result['location_name']."</div>','". $diplay."','".$result['marker']."'  ]";
    else
        $data=   "[".$result['latitude'].",".$result['longitude'].",'<div class=\"text-center \">".$result['location_name']."</div>','". $diplay."','".$result['marker']."'  ]";

}

echo $data;
echo " ];";

if(isset($_GET['stations'])) {
    echo "var stationmerkers = [";
    $stationmerkerdata = '';
    foreach ($stationhotels as $id => $stationdata) {
        $result['description'] = str_replace("Japan", "", $result['description']);
        $result['description'] = str_replace("japan", "", $result['description']);
        $result['description'] = str_replace(",", "<br>", $result['description']);
        $directions = "<form method=POST action=directions.php><input type=hidden name=id value =" . $result['id'] . " ><input type=hidden name=timestamp value=" . strtotime("now") . " ><input type=hidden name=longitude value =" . $result['longitude'] . " ><input type=hidden name=latitude value =" . $result['latitude'] . " ><input type =hidden name=id value =" . $result['id'] . " ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\">Show Route</button></form>";
        $website = "<br><a href =\"" . $result['web_page'] . "\"   class=\"btn btn-outline-light text-info  btn-sm\"  target =_blank role=\"button\"> Web Page </a><br><br>";
        // $nearstation="<form method=POST action=fullmap.php><input type=hidden name=id value =".$result['id']." ><input type=hidden name=island value=".$result['island']."><input type=hidden name=closest_station value=go><button class=\"btn  btn-outline-light text-info btn-sm\">Find Station</button></form>";
        $diplay = "<br><table width=100%> <tr><td>" . $directions . "</td><td> </td> <td>" . $website . "</td><td>" . $nearstation . "</td></tr></table>";

        if (strlen($stationmerkerdata) > 0)
            $stationmerkerdata .= ",[" . $stationdata['latitude'] . "," . $stationdata['longitude'] . ",'<div class=\"text-center \">" . $stationdata['location_name'] . "</div><br>" . $stationdata['description'] . "','" . $diplay . "','" . $stationdata['marker'] . "','" . $hoteldirections . "' ]";
        else
            $stationmerkerdata = "[" . $stationdata['latitude'] . "," . $stationdata['longitude'] . ",'<div class=\"text-center \">" . $stationdata['location_name'] . "</div><br>" . $stationdata['description'] . "','" . $diplay . "','" . $stationdata['marker'] . "','" . $hoteldirections . "' ]";
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
if($_GET['location']==2){
    echo "var watchID;
         var geoLoc;
      ";

}
include BASEPATH ."/docs/myjsfunctions.js";
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


        var bounds;
        var nelat= 0;
        var nelng= 0;
        var selat =0;
        var selng =0;
       
        var mapincrementor=1;
        var ifmoved =0;
        var markerGroup = L.layerGroup().addTo(map);
        var popupTimeout=500;
        bounds = map.getBounds();
        nelat =bounds['_northEast']['lat'];
        nelng= bounds['_northEast']['lng'];
        selat =bounds['_southWest']['lat'];
        selng =bounds['_southWest']['lng'];
     
        map . on('moveend', function (e) {
              var  i=0;
               var modlevel=10;
             if (map.getZoom() >=1) {
               i=0;
               var result = markers.map(num => {
                         i++;
                   var lon = num[0];
                     var lat =num[1];
                     var markerLocation = new L.LatLng(lon,lat);
                     var mycon =num[4];
                  pointToCheck= L.latLng(lon,lat ); 
                  if(map.getBounds().contains(pointToCheck)){
                      
                 if(map.getZoom() < 11)
                        modlevel=32;
                if(map.getZoom() >=10  && map.getZoom() < 13)
                        modlevel=5;      
               if(map.getZoom() >=13  && map.getZoom() < 15)
                        modlevel=1;   
                if(map.getZoom() >=15  && map.getZoom() < 17)
                        modlevel=1;   
                      
                   if(map.getZoom() >=17  && map.getZoom() < 22)
                        modlevel=1;      
       
                  
                    if((num[2].length)>0)
                      var  popupText=num[2]+num[3]; 
                      
                   
                         window['marker'+1]=new L.Marker([lon, lat]);
                    var checkmarker=num[4].toLowerCase();
                    ;  
                 
                           ";
include "css/maykers.inc";
include BASEPATH ."/docs/dynamicmarkers.php";
echo " 
                  
                      window['marker'+1]. setLatLng([lon, lat]).bindPopup(popupText ,{'maxWidth': '140',
                      'className': 'stylePopup' ,
                        offset: [-100,30],
                        closeButton: true,
                        closeOnClick : true,
                        autoClose: true });;   
                         window['marker'+1]. setLatLng([lon, lat]).bindPopup(popupText ,{'maxWidth': '140',autoClose: false, autoClose: false, 'className': 'stylePopup' ,    offset: [-100,30], closeButton: true, closeOnClick : true  });;   
                        
                         window['marker'+1].on('onclick', function (e) {   closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);});  
                    
                    }
                });
             }
                    
             else{
               
                  map.removeLayer(markerGroup);
                 markerGroup =new  L.layerGroup().addTo(map);
             }
         });
  map.whenReady(function(e) {
  
   var  i=0;
               var modlevel=10;
             if (map.getZoom() >=1) {
               i=0;
               var result = markers.map(num => {
                         i++;
                   var lon = num[0];
                     var lat =num[1];
                     var markerLocation = new L.LatLng(lon,lat);
                     var mycon =num[4];
                  pointToCheck= L.latLng(lon,lat ); 
                  if(map.getBounds().contains(pointToCheck)){
                      
                 if(map.getZoom() < 11)
                        modlevel=32;
                if(map.getZoom() >=10  && map.getZoom() < 13)
                        modlevel=5;      
               if(map.getZoom() >=13  && map.getZoom() < 15)
                        modlevel=1;   
                if(map.getZoom() >=15  && map.getZoom() < 17)
                        modlevel=1;   
                      
                   if(map.getZoom() >=17  && map.getZoom() < 22)
                        modlevel=1;      
       
                  
                    if((num[2].length)>0)
                      var  popupText=num[2]+num[3]; 
                      
                   
                         window['marker'+1]=new L.Marker([lon, lat]);
                    var checkmarker=num[4].toLowerCase();
                    ;  
                 
                           ";
include "css/maykers.inc";
include BASEPATH ."/docs/dynamicmarkers.php";
echo " 
                  
                      window['marker'+1]. setLatLng([lon, lat]).bindPopup(popupText ,{'maxWidth': '140',
                      'className': 'stylePopup' ,
                        offset: [-100,30],
                        closeButton: true,
                        closeOnClick : true,
                        autoClose: true });;   
                         window['marker'+1]. setLatLng([lon, lat]).bindPopup(popupText ,{'maxWidth': '140',autoClose: false, autoClose: false, 'className': 'stylePopup' ,    offset: [-100,30], closeButton: true, closeOnClick : true  });;   
                        
                         window['marker'+1].on('onclick', function (e) {   closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);});  
                    
                    }
                });
             }
  });




 }
 
";



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
<body onLoad=\"javascript:init();\">
<center>
 <table border =1 width=95% height=75% ><tr><td>  <div id=\"map\" style=\"height: 83vh;\"></div></td></tr></table>";
echo "<p id=\"locationmap\"></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";





include BASEPATH ."/docs/mapfooter.php";

include BASEPATH ."/docs/footer.php";
