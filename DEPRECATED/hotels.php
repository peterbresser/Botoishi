<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";

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
 
   


    .stylePopup .leaflet-popup-content-wrapper,
    .stylePopup .leaflet-popup-tip {
        background-color: #ffffff;
        border: 0;
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
   <script src=\"css/leaflet.js\"></script>
   <script language=\"javascript\">
//initialise the map
	function init() {
                       

         ";








if(isset($_GET['chain'])) {
    if ($_GET['chain']) {
        if ($_GET['chain'] == 'all')
            $locationtype = " ";
        elseif  ($_GET['chain'] == 'others')
              $locationtype = "  and marker ='hotel' ";
        else
         e  $locationtype = " and marker ='" . $_GET['chain'] . "' ";
    }
}
else
    $locationtype = " ";
  $maptype = "";


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


$hotelid='';
if(isset($_POST['id'])) {
    $_GET['id']=$_POST['id'];
}
if(isset($_GET['id'])){
    if($_GET['id']=='all')
        $hotelid = " ";
    else
        $hotelid =" and id ='".$_GET['id']."'";

}

include BASEPATH ."/docs/myjsfunctions.js";
$data='';

 var markers = [";

$query=mysqli_query($japansql ,"select id,location_name, latitude, longitude, description, web_page, marker,island,type from locations where type ='hotel' ".$locationtype."  ".$maptype."  ".$hotelid." ");
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
    if(isset($_POST['closest_station'])) {
        $stationstartlat=$result['latitude']+.2;
        $stationstartlon=$result['longitude']+.2;
        $stationendlat=$result['latitude']-.2;
        $stationendlon=$result['longitude']-.2;
      //echo "select  id, location_name, latitude, longitude, description, web_page, marker  from locations where type ='station' and  (latitude between ".$stationendlat." and ".$stationstartlat." ) and (longitude  between ".$stationendlon." and ".$stationstartlon ." )\n";
       // $stationquery=mysqli_query($japansql ,"select  id, location_name, latitude, longitude, description, web_page, marker,island,type  from locations
      // where type ='station'   and  (latitude between ".$stationendlat." and ".$stationstartlat." ) and (longitude  between ".$stationendlon." and ".$stationstartlon ." )");

        $stationquery=mysqli_query($japansql ,"select  id, ename as location_name, latitude,longitude as  longitude, address as description  from stations    
       where   (longitude between ".$stationendlat." and ".$stationstartlat." ) and (latitude  between ".$stationendlon." and ".$stationstartlon ." )");
        while($stationresult=mysqli_fetch_assoc($stationquery))
            $stationstations[]=$stationresult;


    }


	if(substr(strtolower($result['location_name']),0,4)=='hotel')
	$result['location_name']=substr($result['location_name'],4);
    $result['location_name']=ucwords(strtolower($result['location_name']));
    $directions="<form method=POST action=directions.php><input type=hidden name=id value =".$result['id']." ><input type=hidden name=timestamp value=".strtotime("now")." ><input type=hidden name=longitude value =".$result['longitude']." ><input type=hidden name=latitude value =".$result['latitude']." ><input type =hidden name=id value =".$result['id']." ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\"><img src =images/direct.avif width=22></button></form>";

    $website="<a href =\'".$result['web_page']."\' target =_blank title=\'WebSite\' ><img src =images/link.avif width=22></a>";
   // $diplay="<table width=100%> <tr><td>". $directions."</td><td> </td> <td>".$website."</td><td> </td></tr></table>";
    $result['description']=str_replace("Japan","",$result['description']);
    $result['description']=str_replace("japan","",$result['description']);
    $result['description']=str_replace(",","<br>",$result['description']);


    $nearstation= "<form method=POST action=map.php><input type=hidden name=id value =" .$result['id']." ><input type=hidden name=island value=".$result['island']."><input type=hidden name=closest_station value=go><button class=\"btn  btn-outline-light text-info btn-sm\"><img src =images/stations.avif width=22></button></form>";

    if($result['marker']=='information')
        $diplay="<br><center><table width=100% border =0> <tr><td>". $directions."</td><td> </td> <td></td><td>".$website."</td></tr></table>";
    else
        $diplay="<br><center><table width=100%  border =0> <tr><td>". $directions."</td><td> </td> <td>".$website."</td><td>".$nearstation."</td></tr></table>";

    if(strlen($data)>0)
        $data.= ",[".$result['longitude'].",".$result['latitude'].", '<div class=\"text-center \">".$result['location_name']."</div>','". $diplay."','".$result['marker']."', '".$result['description']."' ]";
    else
        $data=   "[".$result['longitude'].",".$result['latitude'].",'<div class=\"text-center \">".$result['location_name']."</div>','". $diplay."','".$result['marker']."','".$result['description']."'  ]";



   // $diplay="<br><table width=100%> <tr><td>". $directions."</td><td> </td> <td>".$website."</td><td> </td></tr></table>";
    if(isset($_GET['id'])) {
        $idlatlon=$result['latitude'].",".$result['longitude']."";
    }
    if(strlen($data)>0)
        $data.= ",[".$result['latitude'].",".$result['longitude'].",'<div class=\"text-center \">".$result['location_name']."</b>','". $diplay."','".$result['marker']."'  ]";
    else
        $data=   "[".$result['latitude'].",".$result['longitude'].",'<div class=\"text-center \">".$result['location_name']."</b>','". $diplay."','".$result['marker']."'  ]";

}

echo $data;


echo " ];

";


if(isset($_POST['closest_station'])) {
    echo "\nvar stationmerkers = [";
    $stationmerkerdata = '';
    foreach ($stationstations as $id => $stationdata) {
        $stationdata['description'] = str_replace("Japan", "", $stationdata['description']);
        $stationdata['description'] = str_replace("japan", "", $stationdata['description']);
        $stationdata['description'] = str_replace(",", "<br>", $stationdata['description']);
        $directions = "<form method=POST action=directions.php><input type=hidden name=id value =" . $stationdata['id'] . " ><input type=hidden name=timestamp value=" . strtotime("now") . " ><input type=hidden name=longitude value =" . $stationdata['longitude'] . " ><input type=hidden name=latitude value =" . $stationdata['latitude'] . " ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\">Show Route</button></form>";
        $website = "";##<br><a href =\"" . $stationdata['web_page'] . "\"   class=\"btn btn-outline-light text-info  btn-sm\"  target =_blank role=\"button\"> Web Page </a><br><br>";
        $nearstation = "<form method=POST action=map.php><input type=hidden name=id value =" . $stationdata['id'] . " ><input type=hidden name=island value=" . $stationdata['island'] . "><input type=hidden name=closest_station value=go><button class=\"btn  btn-outline-light text-info btn-sm\">Find Station</button></form>";
        $diplay = "<br><table width=100%> <tr><td>" . $directions . "</td><td> </td> <td>" . $website . "</td><td>" . $neggarstation . "</td></tr></table>";

        if (strlen($stationmerkerdata) > 0)
            $stationmerkerdata .= ",[" . $stationdata['latitude'] . "," . $stationdata['longitude'] . ",'<b><center>" . $stationdata['location_name'] . "</b><br>" . $stationdata['description'] . "','" . $diplay . "','" . $stationdata['marker'] . "','" . $hoteldirections . "' ]\n";
        else
            $stationmerkerdata = "[" . $stationdata['latitude'] . "," . $stationdata['longitude'] . ",'<b><center>" . $stationdata['location_name'] . "</b><br>" . $stationdata['description'] . "','" . $diplay . "','" . $stationdata['marker'] . "','" . $hoteldirections . "' ]\n";
    }

    echo $stationmerkerdata;
    echo " ];\n
  
    ";

}
    if(isset($_POST['island']))
        $_GET['island']= $_POST['island'];
    if(isset($_GET['island'])) {
        if ($_GET['island'] == 'all') {
           echo "  	var tokyo = new L.LatLng(" .$GLOBALS['zoompoint'].");
	           map.setView(tokyo, 5);";
        }
      if ($_GET['island'] == 'hokkaido') {
        echo "  	var hokkaido = new L.LatLng(" . $GLOBALS['hokkaido'] . ");
	         map.setView(hokkaido, 5);";
       }
        if ($_GET['island'] == 'honshu') {
            echo "  	var honshu = new L.LatLng(" . $GLOBALS['honshu'] . ");
	            map.setView(honshu, 5);";
        }
        if ($_GET['island'] == 'kyushu') {
            echo "  	var kyushu = new L.LatLng(" . $GLOBALS['kyushu'] . ");
	            map.setView(kyushu, 5);";
        }
        if ($_GET['island'] == 'shikoku') {
            echo "  	var shikoku = new L.LatLng(" . $GLOBALS['shikoku'] . ");
	            map.setView(shikoku, 5);";
        }
    }
    if (strlen($stationmerkerdata) > 0) {
        echo " 
 var smallStationIcon = L.icon({
         iconUrl: 'images/locationIcon.avif',
         shadowUrl: 'images/locationIcon.avif',
         iconSize:     [18, 18],
         shadowSize:   [18,18]
                });
      
    
    for (var j=0; j<stationmerkers.length; j++) {
            var lon = stationmerkers[j][0];
            var lat = stationmerkers[j][1];
           var popupText = stationmerkers[j][2]+stationmerkers[j][3]+stationmerkers[j][5];
            var markerLocation = new L.LatLng(lat, lon);
            var mycon = stationmerkers[j][4];
             var stmarker ='';
            	stmarker = new L.Marker(markerLocation, {icon:smallStationIcon} );
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
     
           map.setView([e.latlng.lat, e.latlng.lng], 17);
           });
            };    
      ";


    }


if(!isset($_GET['island'])) {
 echo " var tokyo = new L.LatLng(" . $GLOBALS['zoompoint'] . ");map.setView(tokyo,8);";
}


if(isset($_GET['chain'])){

    echo "var makezoom=1;";

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
       var  zoomlevel=map.getZoom();

       if (zoomlevel >=7) {
             for (i=0; i<markers.length; i++) {
                   var lat = markers[i][0];
                   var lon = markers[i][1];
                   var markerLocation = new L.LatLng(lat, lon);
                   var mycon =markers[i][4];
                   pointToCheck= L.latLng(lat, lon );
                   if((markers[2].length)>0)
                      var  popupText=markers[i][2]+markers[i][3];//+markers[i][7];
                   if(map.getBounds().contains(pointToCheck)){
                       var checkmarker=markers[i][4].toLowerCase();   
                      
console.log(zoomlevel);
                         if(zoomlevel >=7)
                              var icoonsize=5;
                         if(zoomlevel >=9  && zoomlevel <11 )
                              var icoonsize=10;
                         if(zoomlevel >=11  && zoomlevel <13 )
                              var icoonsize=12;
                          if(zoomlevel >=13  && zoomlevel <15 )
                              var icoonsize=22;
                          if(zoomlevel >=15  && zoomlevel <17 )
                                var icoonsize=22;
                           if(zoomlevel >=17  && zoomlevel <19 )
                                var icoonsize=25;
                         if(zoomlevel >=18  && zoomlevel <21 )
                                var icoonsize=32; 
                                                  
console.log(zoomlevel);                              
                                                          ";
                        include "css/maykers.inc";
                        include BASEPATH ."/docs/dynamicmarkers.php";
                        echo "                      window['marker'+1]. setLatLng([lat, lon ]).bindPopup(popupText ,{ autoClose: false,  'className': 'stylePopup' ,    offset: [-100,30], closeButton: true, closeOnClick : true  });;   
                                         window['marker'+1].on('onclick', function (e) {   closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);});                    
                    }
                }
             }
          if (zoomlevel <7) {

                  map.removeLayer(markerGroup);
               markerGroup =new  L.layerGroup().addTo(map);
                    }
           
                    
         });
         
            
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
