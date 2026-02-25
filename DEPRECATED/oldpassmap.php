<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";
$GLOBALS['mypassroute']='';

  echo " <head> 
 
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

  
    .stylePopup .leaflet-popup-content-wrapper,
    .stylePopup .leaflet-popup-tip {
        background-color: #ffffff;
       text-align: center;
          border-radius: 5px;
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
   <script src=\"css/leaflet.js\"></script>
   <script language=\"javascript\">
 
	function init() {
              

        

         var tokyo = new L.LatLng(".$GLOBALS['zoompoint']."); 
	 map.setView(tokyo,3);
";



include BASEPATH ."/docs/css/maykers.inc";

 $mapmarker='';
 $locationtype = " ";
$traintype='';
$chain='';
if(isset($_GET['chain'])){
    if($_GET['chain']=='all')
        $chain = " ";
    else
        $chain =" and marker='".$_GET['chain']."'";

}
if( $_GET['island']) {
    if ($_GET['island'] == 'all')
        $locationtype = " ";
    else
        $locationtype = " and island ='" . $_GET['island'] . "' ";
}
else
    $locationtype = " ";


if( $_GET['pass']) {
    if ($_GET['pass'] == 'all')
        $passname = " ";
    else
        $passname = " and passmapid ='" . $_GET['pass'] . "' ";
}
else
    $passname = " ";


$data='';
$counter=0;


 echo "
 


 var markers = [";

$query=mysqli_query($japansql ,"select  locations.id as sid, location_name, latitude, longitude, description,traintype, web_page, marker,island
from locations inner join jrpassmap on locations.id=location_id where type is not NUll ".$locationtype."  ".$passname." and active =1   ");

$numrows=((mysqli_num_rows($query))/1);

while($result=mysqli_fetch_assoc($query)){
    $hotelstartlat=$result['latitude']+.3;
    $hotelstartlon=$result['longitude']+.3;
    $hotelendlat=$result['latitude']-.3;
    $hotelendlon=$result['longitude']-.3;

    $stationid=$result['sid'];

    $result['location_name']=ucwords(strtolower($result['location_name']));


    $hotelquery=mysqli_query($japansql ,"select  id, location_name, latitude, longitude, description, web_page, marker  from locations   where type ='hotel' ".$chain."  and  (latitude between ".$hotelendlat." and ".$hotelstartlat." ) and (longitude  between ".$hotelendlon." and ".$hotelstartlon ." )   ");
    while($hotelresult=mysqli_fetch_assoc($hotelquery))
        $stationhotels[]=$hotelresult;

    if(strlen($GLOBALS['mypassroute'])>0)
        $GLOBALS['mypassroute'].= ",[".$result['longitude'].",".$result['latitude']."]";
    else
         $GLOBALS['mypassroute'].= "[".$result['longitude'].",".$result['latitude']."]";
   // if($counter==$numrows)
        $zoompoint="'".$result['latitude']."','".$result['longitude']."'";
        if($result['web_page']=='')
            $result['web_page']="#";
    $directions="<form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value =".$result['id']." ><input type=hidden name=timestamp value=".strtotime("now")." ><input type=hidden name=longitude value =".$result['longitude']." ><input type=hidden name=latitude value =".$result['latitude']." ><input type =hidden name=id value =".$result['id']." ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\"><img src =images/direct.avif width=22></button></form>";
    $website="<a href =\'".$result['web_page']."\' target =_blank title=\'WebSite\' ><img src =images/link.avif width=22></a>";
    $diplay="<table width=100%> <tr><td>". $directions."</td><td> </td> <td>".$website."</td><td> </td></tr></table>";
    if(strlen($data)>0)
        $data.= ",[".$result['latitude'].",".$result['longitude'].",'<div class=\"text-center \">" . $result['location_name'] . "</div>','". $diplay."','". $result['passmap']."' ,'". $result['island'] . "' ]";
    else
        $data=   "[".$result['latitude'].",".$result['longitude'].",'<div class=\"text-center \">" . $result['location_name'] . "</div>','". $diplay."','". $result['passmap']."','". $result['island'] . "' ]";


    
    
    $counter++;
}


echo $data;
echo " ];";


if(isset($_GET['chain'])) {
    echo "var hotelmarkers = [";
    $hotelmarkerdata = '';
    foreach ($stationhotels as $id => $hoteldata) {
        $hoteldirections="<form method=POST action=directions.php><input type=hidden name=id value =".$id." ><input type=hidden name=timestamp value=".strtotime("now")." ><input type=hidden name=longitude value =".$hoteldata['longitude']." ><input type=hidden name=latitude value =".$hoteldata['latitude']." ><input type =hidden name=id value =".$hoteldata['id']." ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\">Show Route</button></form>";
        $website="<br><a href =\"".$hoteldata['web_page']."\"   class=\"btn btn-outline-light text-info  btn-sm\"   role=\"button\"> Web Page </a><br><br>";
        $diplay="<br><table width=100%> <tr><td>". $directions."</td> <td>".$website."</td><td> </td></tr></table>";
        $hoteldata['description']=str_replace("Japan","",$hoteldata['description']);
        $hoteldata['description']=str_replace("japan","",$hoteldata['description']);
        $hoteldata['description']=str_replace(",","",$hoteldata['description']);
        $hoteldata['location_name']=ucwords(strtolower($hoteldata['location_name']));
        if (strlen($hotelmarkerdata) > 0)
            $hotelmarkerdata .= ",[" . $hoteldata['latitude'] . "," . $hoteldata['longitude'] . ",'<div class=\"text-center \">" . $hoteldata['location_name'] . "</div><br>" . $hoteldata['description'] ."','". $diplay."','". $hoteldata['marker'] . "','" . $hoteldirections . "' ]";
        else
            $hotelmarkerdata = "[" . $hoteldata['latitude'] . "," . $hoteldata['longitude'] . ",'<div class=\"text-center \">" . $hoteldata['location_name'] . "</div><br>" . $hoteldata['description'] ."','". $diplay."','". $hoteldata['marker'] . "','" . $hoteldirections . "' ]";

    }

    echo $hotelmarkerdata;
    echo " ];\n";

    include BASEPATH ."/docs/css/maykers.inc";

    if (strlen($hotelmarkerdata) > 0) {
        echo " 
       
        
        for (var j=0; j<hotelmarkers.length; j++) {
            var lon = hotelmarkers[j][1];
            var lat = hotelmarkers[j][0];
            var popupText = hotelmarkers[j][2]+hotelmarkers[j][3]+hotelmarkers[j][5];
            var mycon = hotelmarkers[j][4];
             var marker ='';
             var markerLocation = new L.LatLng(lat, lon);
             console.log(markerLocation);
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
  'maxWidth': '300',
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


echo "


  var bounds;
   var nelat= 0;
    var nelng= 0;
    var selat =0;
    var selng =0;
     var mapincrementor=1;
    var markerGroup = L.layerGroup().addTo(map);

        bounds = map.getBounds();
        nelat =bounds['_northEast']['lat'];
        nelng= bounds['_northEast']['lng'];
        selat =bounds['_southWest']['lat'];
        selng =bounds['_southWest']['lng'];
        map . on('moveend', function (e) {     
        map.removeLayer(markerGroup);
        markerGroup =new  L.layerGroup().addTo(map);
       
        var  i=0;
        zoomlevel=map.getZoom();
     
         if (zoomlevel >=3) {
             
                
                 for (i=0; i<markers.length; i++) {
                     var lat = markers[i][0];
                     var lon = markers[i][1];
                     var markerLocation = new L.LatLng(lat, lon);
                     var mycon =markers[i][5];
                     
         
                   
                     pointToCheck= L.latLng(lat, lon);
               
                    if((markers[2].length)>0)
                      var  popupText=markers[i][2]+markers[i][3];//+markers[i][7];
                     if(map.getBounds().contains(pointToCheck)){
            
                        
                         window['marker'+1]=new L.Marker([lat, lon]);
                          var checkmarker=markers[i][5].toLowerCase();   

                           ";
include "css/maykers.inc";

echo "  if(mycon=='honshu'){
                    window['marker'+1]=new L.Marker([lat, lon], {icon:HorrurikuStationIcon}).addTo(markerGroup);;  
                      }
          
           if(mycon=='hokkaido'){
               window['marker'+1]=new L.Marker([lat, lon], {icon:HokkaidoStationIcon}).addTo(markerGroup);;  
                     
          }      
       
            if(mycon=='shikoku'){
               window['marker'+1]=new L.Marker([lat, lon], {icon:ShikokuStationIcon}).addTo(markerGroup);;  
                     
          }      
       
        if(mycon=='kyushu'){
           window['marker'+1]=new L.Marker([lat, lon], {icon:KyushuStationIcon}).addTo(markerGroup);;  
             
          }   
                      window['marker'+1]. setLatLng([lat, lon]).bindPopup(popupText ,{'maxWidth': '140',
                      'className': 'stylePopup' ,
                        offset: [-100,30],
                        closeButton: true,
                        closeOnClick : true,
                        autoClose: true });;   
                   window['marker'+1]. setLatLng([lat, lon]).bindPopup(popupText ,{'maxWidth': '140',  'className': 'stylePopup' ,    offset: [-100,30], closeButton: true, closeOnClick : true,  autoClose: true });;   
                    window['marker'+1].on('onmouseover', function (e) {
                     clearTimeout(popupTimeout); 
                      popupTimeout = setTimeout(() => {   this.openPopup(); }, 500);  });  
                         window['marker'+1].on('mouseout', function (e) {   closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);});  
                window['marker'+1].on('onclick', function (e) {   closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);});               
                    }
                }
             }
             
             
             
             
             else{
               
                 map.removeLayer(markerGroup);
                 markerGroup =new  L.layerGroup().addTo(map);
             }
         });
         
           ";





if(isset($_GET['pass'])) {
     if ($_GET['pass'] == '5' ){
        include BASEPATH . "/docs/js/pass5.js";
          }
    if ($_GET['pass'] == '1' ){
        include BASEPATH . "/docs/js/pass1.js";
          }

    if ($_GET['pass'] == '2'){
        include BASEPATH . "/docs/js/pass2.js";

  }
    if ($_GET['pass'] == '3'){
        include BASEPATH . "/docs/js/pass3.js";
          }
    if ($_GET['pass'] == '4'){
        include BASEPATH . "/docs/js/pass4.js";
          }
    if ($_GET['pass'] == '7'){
        include BASEPATH . "/docs/js/pass7.js";
          }
    if ($_GET['pass'] == '8'){
        include BASEPATH . "/docs/js/pass8.js";
          }
    if ($_GET['pass'] == '9'){
        include BASEPATH . "/docs/js/pass9.js";
          }
    if ($_GET['pass'] == '10'){
        include BASEPATH . "/docs/js/pass10.js";
          }

    if ($_GET['pass'] == '11'){
        include BASEPATH . "/docs/js/pass11.js";
          }
        if ($_GET['pass'] == '12'){
        include BASEPATH . "/docs/js/pass12.js";
          }
    if ($_GET['pass'] == '13')
        include BASEPATH . "/docs/js/pass13.js";
      }
    if ($_GET['pass'] == '14') {
        include BASEPATH . "/docs/js/pass14.js";

    }
     if ($_GET['pass'] == '15'){
        include BASEPATH . "/docs/js/pass15.js";
}
if ($_GET['pass'] == '16'){
    include BASEPATH . "/docs/js/pass16.js";
}
if ($_GET['pass'] == '17'){
    include BASEPATH . "/docs/js/pass17.js";
}
if ($_GET['pass'] == '18'){
    include BASEPATH . "/docs/js/pass18.js";
}
if ($_GET['pass'] == '19'){
    include BASEPATH . "/docs/js/pass19.js";
}
if ($_GET['pass'] == '20'){
    include BASEPATH . "/docs/js/pass20.js";
}
if ($_GET['pass'] == '21'){
    include BASEPATH . "/docs/js/pass21.js";
}
if ($_GET['pass'] == '22'){
    include BASEPATH . "/docs/js/pass22.js";
}

if ($_GET['pass'] == '23'){
    include BASEPATH . "/docs/js/pass23.js";
}
if ($_GET['pass'] == '24'){
    include BASEPATH . "/docs/js/pass24.js";
}
if ($_GET['pass'] == '25'){
    include BASEPATH . "/docs/js/pass25.js";
}

if ($_GET['pass'] == '26'){
    include BASEPATH . "/docs/js/pass26.js";
}



if ($_GET['pass'] == '27'){
    include BASEPATH . "/docs/js/pass27.js";
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
<center><br>
       
 <table border =1 width=95% height=75% ><tr><td>  <div id=\"map\" style=\"height: 83vh;\"></div></td></tr></table>";
echo "<p id=\"locationmap\"></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";





include BASEPATH ."/docs/footer.php";
