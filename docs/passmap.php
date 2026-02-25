<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";
$GLOBALS['mypassroute']='';

echo " 

 
 <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"  integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


 <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>

 
   <script language=\"javascript\">
 
	function init() {
              

        

         var tokyo = new L.LatLng(".$GLOBALS['zoompoint']."); 
	 map.setView(tokyo,8);
";

$mapmarker='';
$locationtype = " ";
$traintype='';
$chain='';

if(isset($_GET['chain']))
    $_POST['chain']=$_GET['chain'];

if(isset($_POST['chain'])){
    if($_POST['chain']=='all')
        $chain = " ";
    else
        $chain =" and marker='".$_POST['chain']."'";

}
if(isset($_GET['island']))
    $_POST['island']=$_GET['island'];

if( $_POST['island']) {
    if ($_POST['island'] == 'all')
        $locationtype = " ";
    else
        $locationtype = " and island ='" . $_POST['island'] . "' ";
}
else
    $locationtype = " ";

if(isset($_GET['pass']))
    $_POST['pass']=$_GET['pass'];
if( $_POST['pass']) {
    if ($_POST['pass'] == 'all')
        $passname = " ";
    else
        $passname = " and passmapid ='" . $_POST['pass'] . "' ";
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
    $hotelstartlat=$result['latitude']+.1;
    $hotelstartlon=$result['longitude']+.2;
    $hotelendlat=$result['latitude']-.1;
    $hotelendlon=$result['longitude']-.2;

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
    $directions="<form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value =".$result['sid']." ><input type=hidden name=timestamp value=".strtotime("now")." ><input type=hidden name=longitude value =".$result['longitude']." ><input type=hidden name=latitude value =".$result['latitude']." ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\"><img src =images/direct.png width=22></button></form>";
    $website="<a href =\'".$result['web_page']."\' target =_blank title=\'WebSite\' ><img src =images/link.png width=22></a>";
    $diplay="<table width=100%> <tr><td>". $directions."</td><td> </td> <td>".$website."</td><td> </td></tr></table>";
    if(strlen($data)>0)
        $data.= ",[".$result['latitude'].",".$result['longitude'].",'<div class=\"text-center \">" . $result['location_name'] . "</div>','". $diplay."','". $result['marker']."' ,'". $result['island'] . "' ]";
    else
        $data=   "[".$result['latitude'].",".$result['longitude'].",'<div class=\"text-center \">" . $result['location_name'] . "</div>','". $diplay."','". $result['marker']."','". $result['island'] . "' ]";




    $counter++;
}


echo $data;
echo " ];";


if(isset($_POST['chain'])) {
    echo "var hotelmarkers = [";
    $hotelmarkerdata = '';
    foreach ($stationhotels as $id => $hoteldata) {

        $directions="<form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value =".$id." ><input type=hidden name=stationlocation value=1 ><input type=hidden name=longitude value =".$hoteldata['longitude']." ><input type=hidden name=latitude value =".$hoteldata['latitude']." ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\"><img src =images/direct.png width=22></button></form>";
          $website="<a href =\'".$hoteldata['web_page']."\' target =_blank title=\'WebSite\' ><img src =images/link.png width=22></a>";
        $diplay="<table width=100%> <tr><td>". $directions."</td><td> </td> <td>". $website."</td><td> </td></tr></table>";
        $hoteldata['description']=str_replace("Japan","",$hoteldata['description']);
        $hoteldata['description']=str_replace("japan","",$hoteldata['description']);
        $hoteldata['description']=str_replace(",","",$hoteldata['description']);
        $hoteldata['location_name']=ucwords(strtolower($hoteldata['location_name']));
        if (strlen($hotelmarkerdata) > 0)
            $hotelmarkerdata .= ",[" . $hoteldata['latitude'] . "," . $hoteldata['longitude'] . ",'<div class=\"text-center \">" . $hoteldata['location_name'] . "</div> ','". $diplay."','". $hoteldata['marker'] . "','" . $hoteldirections . "' ]";
        else
            $hotelmarkerdata = "[" . $hoteldata['latitude'] . "," . $hoteldata['longitude'] . ",'<div class=\"text-center \">" . $hoteldata['location_name'] . "</div> ','". $diplay."','". $hoteldata['marker'] . "','" . $hoteldirections . "' ]";

    }

    echo $hotelmarkerdata;
    echo " ];\n";



    if (strlen($hotelmarkerdata) > 0) {
        echo " 
  
         map . on('moveend', function (e) {
        for (var j=0; j<hotelmarkers.length; j++) {
            var lon = hotelmarkers[j][1];
            var lat = hotelmarkers[j][0];
            var popupText = hotelmarkers[j][2]+hotelmarkers[j][3]+hotelmarkers[j][5];
            var mycon = hotelmarkers[j][4];
             var marker ='';
             var markerLocation = new L.LatLng(lat, lon);
             
             
 


if (typeof icoonsize == 'undefined') {
    var icoonsize=22;
    }

 var icoonsize=22;
  var zoomlevel=map . getZoom();

if(zoomlevel >17 &&  zoomlevel <21)
       icoonsize=zoomlevel+3;

if(zoomlevel >=15 &&  zoomlevel <17)
       icoonsize=zoomlevel + 8;

if(zoomlevel >=13 &&  zoomlevel <15)
       icoonsize=zoomlevel+ 8;

if(zoomlevel >=11 &&  zoomlevel <13)
       icoonsize=zoomlevel+ 8;

if(zoomlevel >=9 &&  zoomlevel <11)
       icoonsize=zoomlevel+ 8;

if(zoomlevel >=6 &&  zoomlevel <9)
       icoonsize=zoomlevel+ 8;

if(zoomlevel >=5 &&  zoomlevel <7)
       icoonsize=zoomlevel+ 8;

if(zoomlevel >0 &&  zoomlevel <6)
       icoonsize=0;
   
   var HotelIcon = L.icon({
         iconUrl: 'images/hotelIcon.png',
         shadowUrl: 'images/hotelIcon.png',
         iconSize:    [icoonsize,icoonsize],
         shadowSize:   [icoonsize,icoonsize]
                });
                          marker = new L.Marker(markerLocation, {icon:HotelIcon} ); 
                         
             map.addLayer(marker);
             var customOptions = {
  'maxWidth': '300',
  'className': 'stylePopup',
  closeButton: true,
  closeOnClick : true,
  autoClose: true
}
             marker.bindPopup(popupText,customOptions);

     // marker.on('click', function(e){
   // map.setView([e.latlng.lat, e.latlng.lng], 16);
//});
             };    
   });   ";


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

echo "   
       
      window['marker'+1]=new L.Marker([lat,lon], {icon:JRIcon}).addTo(markerGroup);  
      
      
        
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





if(isset($_POST['pass'])) {
    if ($_POST['pass'] == '5' ){
        include BASEPATH . "/docs/js/pass5.js";
    }
    if ($_POST['pass'] == '1' ){
        include BASEPATH . "/docs/js/pass1.js";
    }

    if ($_POST['pass'] == '2'){
        include BASEPATH . "/docs/js/pass2.js";

    }
    if ($_POST['pass'] == '3'){
        include BASEPATH . "/docs/js/pass3.js";
    }
    if ($_POST['pass'] == '4'){
        include BASEPATH . "/docs/js/pass4.js";
    }
    if ($_POST['pass'] == '7'){
        include BASEPATH . "/docs/js/pass7.js";
    }
    if ($_POST['pass'] == '8'){
        include BASEPATH . "/docs/js/pass8.js";
    }
    if ($_POST['pass'] == '9'){
        include BASEPATH . "/docs/js/pass9.js";
    }
    if ($_POST['pass'] == '10'){
        include BASEPATH . "/docs/js/pass10.js";
    }

    if ($_POST['pass'] == '11'){
        include BASEPATH . "/docs/js/pass11.js";
    }
    if ($_POST['pass'] == '12'){
        include BASEPATH . "/docs/js/pass12.js";
    }
    if ($_POST['pass'] == '13')
        include BASEPATH . "/docs/js/pass13.js";
}
if ($_POST['pass'] == '14') {
    include BASEPATH . "/docs/js/pass14.js";

}
if ($_POST['pass'] == '15'){
    include BASEPATH . "/docs/js/pass15.js";
}
if ($_POST['pass'] == '16'){
    include BASEPATH . "/docs/js/pass16.js";
}
if ($_POST['pass'] == '17'){
    include BASEPATH . "/docs/js/pass17.js";
}
if ($_POST['pass'] == '18'){
    include BASEPATH . "/docs/js/pass18.js";
}
if ($_POST['pass'] == '19'){
    include BASEPATH . "/docs/js/pass19.js";
}
if ($_POST['pass'] == '20'){
    include BASEPATH . "/docs/js/pass20.js";
}
if ($_POST['pass'] == '21'){
    include BASEPATH . "/docs/js/pass21.js";
}
if ($_POST['pass'] == '22'){
    include BASEPATH . "/docs/js/pass22.js";
}

if ($_POST['pass'] == '23'){
    include BASEPATH . "/docs/js/pass23.js";
}
if ($_POST['pass'] == '24'){
    include BASEPATH . "/docs/js/pass24.js";
}
if ($_POST['pass'] == '25'){
    include BASEPATH . "/docs/js/pass25.js";
}

if ($_POST['pass'] == '26'){
    include BASEPATH . "/docs/js/pass26.js";
}



if ($_POST['pass'] == '27'){
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
   
 
<body onLoad=\"javascript:init();\">";

include BASEPATH ."/docs/menu.php";
echo"
<center><br>
       
 <table border =1 width=95% height=75% ><tr><td>  <div id=\"map\" style=\"height: 83vh;\"></div></td></tr></table>";
echo "<p id=\"locationmap\"></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";


include BASEPATH ."/docs/mapfooter.php";


include BASEPATH ."/docs/footer.php";
