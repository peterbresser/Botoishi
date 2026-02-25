<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";
echo ""
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
</style>";

$query=mysqli_query($japansql ,"select  *   from company    ");
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {

    $GLOBALS['TRAINCO'][$result['company_id']]=array('company_id'=>$result['company_id'],'company_link'=>$result['company_link']);
}

echo "    <script src=\"css/leaflet.js\"></script>
   <script language=\"javascript\">

	function init() {
              

        

         var tokyo = new L.LatLng(".$GLOBALS['zoompoint']."); 
	 map.setView(tokyo,7);
";



include BASEPATH ."/docs/css/maykers.inc";

$mapmarker='';
$locationtype = " ";
$traintype='';

if($_GET['route'])
    $mapmarker= " and   island='".$_GET['route']."'";
else
    $mapmarker= "and  island is NOT NULL ";

if(isset($_GET['traintype'])){
    if ($_GET['traintype'] == 'all')
        $traintype = " ";
    else
        $traintype = " and type  ='private' ";



}

    $locationtype = " ";
#echo "select location_name, latitude, longitude, description, web_page, marker from locations where type ='station'  and traintype ='private' ".$mapmarker."  ";
$data='';
$counter=0;
echo "


 var markers = [";


$query=mysqli_query($japansql ,"select   stations.id,ename  , latitude, longitude as longitude, address as description, line_name  ,company_id   from stations inner join japan.jplines jp  on  stations.line_id =jp.line_id and line_name like '%".$_GET['route']."%'    ");

$numrows=((mysqli_num_rows($query))/1);

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
    $companysite=$GLOBALS['TRAINCO'][$result['company_id']]['company_link'];
    // if($counter==$numrows)
    $zoompoint="'".$result['latitude']."','".$result['longitude']."'";
    $directions="<form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value =".$result['id']." ><input type=hidden name=stationlocation value=1 ><input type=hidden name=longitude value =".$result['longitude']." ><input type=hidden name=latitude value =".$result['latitude']." ><input type =hidden name=id value =".$result['id']." ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\"><img src =images/direct.png width=22></button></form>";
    $website="<a href =\'".$companysite."\' target =_blank title=\'WebSite\' ><img src =images/link.png width=22></a>";
    $diplay="<table width=100%> <tr><td>". $directions."</td><td> </td> <td>".$website."</td><td> </td></tr></table>";
    $result['address']=str_replace("Japan","",$result['address']);
    $result['address']=str_replace("japan","",$result['address']);
    $result['address']=str_replace(",","<br>",$result['address']);

    if(strlen($data)>0)
        $data.= ",[".$result['latitude'].",".$result['longitude'].", '<span class=\'text-small\'  style=\'font-size:13px;align=center;\' >".$result['ename']."</span>','". $diplay."','0', '".$result['address']."','". $result['lineid']."','". $result['line_name']."' ]";
    else
        $data=   "[".$result['latitude'].",".$result['longitude'].",'<span class=\'text-small\' style=\'font-size:13px;align=center;\' >".$result['ename']."</span>','". $diplay."','0','".$result['address']."','". $result['lineid']."','". $result['line_name']."'  ]";
    $counter++;
}

echo $data;
echo " ];

        var bounds;
        var nelat= 0;
        var nelng= 0;
        var selat =0;
        var selng =0;
        var mapincrementor=1;
        var ifmoved =0;
        var StationmarkerGroup = L.layerGroup().addTo(map);
        var popupTimeout=500;
        bounds = map.getBounds();
        nelat =bounds['_northEast']['lat'];
        nelng= bounds['_northEast']['lng'];
        selat =bounds['_southWest']['lat'];
        selng =bounds['_southWest']['lng'];
 
       
 
             if (map.getZoom() >=6) {
               i=0;
                 
             var result = markers.map(num => {
               
                          i++;
                   var lon = num[0];
                     var lat =num[1];
                     var markerLocation = new L.LatLng(lat, lon);
                     var mycon =num[4];
                  pointToCheck= L.latLng(lon,lat ); 
                  if(map.getBounds().contains(pointToCheck)){
                
                        modlevel=1;      
                               
                   // console.log(modlevel+' -->   '+map.getZoom());
                   if (i % modlevel === 0) {
                             
                    if((num[2].length)>0)
                      var  popupText=num[2]+num[3]+num[7];
                      
                  
                         window['marker'+1]=new L.Marker([lon, lat]);
                    var checkmarker=num[7].toLowerCase();
                   " ;
include "css/maykers.inc";
include BASEPATH ."/docs/dynamicstationmarkers.php";
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
                    }
                });
             }
                    
             else{
               
                  map.removeLayer(StationmarkerGroup);
                StationmarkerGroup =new  L.layerGroup().addTo(map);
             }
        ";
if($_GET['island']=='all') {
    echo "        var zoom = new L.LatLng(".$GLOBALS['zoompoint']."); 
	 map.setView(zoom,11);
";
}
else {

    echo "        var zoom = new L.LatLng(" . $zoompoint . "); 
	 map.setView(zoom,11);
";
}

include BASEPATH ."/docs/myjsfunctions.js";
/*
if(isset($_GET['route'])){
    if($_GET['route']=='fujikyu' or  $_GET['route']=='all')
        include BASEPATH ."/docs/js/fujirailway.js";
    }
else{


    include BASEPATH . "/docs/js/fujirailway.js";
}
*/
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
