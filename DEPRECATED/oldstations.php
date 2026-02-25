<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";
$GLOBALS['mypassroute']='';

echo " <head> <meta charset=\"UTF-8\">
		<meta name=\"description\" content=\"JR Pass maps .\">
		<meta name=\"keywords\" content=\"jr pass japan , train travel in japan , trains in japan\">
		<meta name=\"twitter:card\" content=\"summary_large_image\">
		<meta name=\"twitter:site\" content=\"@botoishi\">
		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
		<meta property=\"fb:app_id\" content=\"".$randomid."\">
		<meta property=\"og:description\" content=\"JR Pass maps  Japan.\">
		<meta property=\"og:title\" content=\"JR Pass maps  Japan.\">
		<meta property=\"og:image\" content=\"https://botoishi.com.au/images/jrpass.avif\">
		<meta property=\"og:type\" content=\"website\">
		<meta property=\"og:url\" content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] .".php\">
 <title>Explore Japan</title>
 
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
";

$query=mysqli_query($japansql ,"select  *   from company    ");
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {

    $GLOBALS['TRAINCO'][$result['company_id']]=array('company_id'=>$result['company_id'],'company_link'=>$result['company_link']);
}
print_r( $GLOBALS['TRAINCO']);
$_GET['prefecture']='ALL';
$startlat='';
    $startlon='';
include BASEPATH ."/docs/css/maykers.inc";

echo"   </style><script src=\"css/leaflet.js\"></script>
   <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"  integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


 <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>   
      
   <script language=\"javascript\">";

if(isset($_GET['show'])){
    echo "
      
var request = new XMLHttpRequest();
     navigator.geolocation.watchPosition(success,error);
  zoomed='';
     
         function success(position) {
 
     
             const latitiude=position.coords.latitude;
             const longitude=position.coords.longitude;
             const accuracy=position.coords.accuracy;
             mylatitude =latitiude;
                 mylongitude=longitude;
             
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


	function init() {
	
	";
include BASEPATH ."/docs/myjsfunctions.js";

echo "
var tokyo = new L.LatLng(".$GLOBALS['zoompoint']."); 
	 map.setView(tokyo,6);
";

$stantionbyname='';
$_GET['prefecture']='ALL';
if(isset($_GET['station'])){

    $stantionbyname=" and stations.id= '".$_GET['station']."' ";

}



if(isset($_GET['prefecture'])) {


    $starlat='';
    $starlon='';
    echo "
    //  prefectureFeature('".$_GET['prefecture']."');\n";

echo " var markers = [ ";
    $query=mysqli_query($japansql ,"select   longitude, latitude ,ename,jname,address ,stations.id as id , stations.line_id as lineid, company_id, line_name  from stations inner join japan.jplines jp  on  stations.line_id =jp.line_id where  active =1 and latitude!='0'  ". $stantionbyname."");
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){

    $startlat=$result['longitude'];
    $startlon=$result['latitude'];
    $locationlat=$result['latitude'];
    $locationlong=$result['longitude'];
    $result['ename']=ucwords(strtolower($result['ename'])) ."    <br> ".$result['jname']."";
 $companysite=$GLOBALS['TRAINCO'][$result['company_id']]['company_link'];
    // print_r( $result['company_id']);
$result['address']=str_replace(","," ",$result['address']);
    $directions="<form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value =".$result['id']." ><input type=hidden name=stationlocation value=1 ><input type=hidden name=longitude value =".$result['longitude']." ><input type=hidden name=latitude value =".$result['latitude']." ><input type =hidden name=id value =".$result['id']." ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\"><img src =images/direct.png width=22></button></form>";
    $website="<a href =\'".$companysite."\' target =_blank title=\'WebSite\' ><img src =images/link.png width=22></a>";
    $diplay="<table width=100%> <tr><td>". $directions."</td><td> </td> <td>".$website."</td><td> </td></tr></table>";
    $result['address']=str_replace("Japan","",$result['address']);
    $result['address']=str_replace("japan","",$result['address']);
    $result['address']=str_replace(",","<br>",$result['address']);



    if(isset($_GET['id'])) {
        $idlatlon=$result['latitude'].",".$result['longitude']."";
    }
    if(strlen($data)>0)
        $data.= ",[".$result['latitude'].",".$result['longitude'].", '<center><span class=\'text-small\'  style=\'font-size:13px;align=right;\' >".$result['ename']."</centerspan>','". $diplay."','0', '".$result['address']."','". $result['lineid']."','". $result['line_name']."' ]";
    else
        $data=   "[".$result['latitude'].",".$result['longitude'].",'<center><span class=\'text-small\' style=\'font-size:13px;align=right;\' >".$result['ename']."</span>','". $diplay."','0','".$result['address']."','". $result['lineid']."','". $result['line_name']."'  ]";

}

echo $data;
echo " ]; 

 ";



    if($_GET['show']=='location'){
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
           map.setView([latitiude, longitude], 17);
                
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
        var StationmarkerGroup = L.layerGroup().addTo(map);
        var popupTimeout=500;
        bounds = map.getBounds();
        nelat =bounds['_northEast']['lat'];
        nelng= bounds['_northEast']['lng'];
        selat =bounds['_southWest']['lat'];
        selng =bounds['_southWest']['lng'];
     
        map . on('moveend', function (e) {
          map.removeLayer(StationmarkerGroup);
                 StationmarkerGroup =new  L.layerGroup().addTo(map);
        
            var  i=0;
            
  
            
            var modlevel=10;
             if (map.getZoom() >=9) {
             
                     
               i=0;
                         
             var result = markers.map(num => {
                         i++;
                   var lon = num[0];
                     var lat =num[1];
                     var markerLocation = new L.LatLng(lat, lon);
                     var mycon =num[4];
                       
                  pointToCheck= L.latLng(lon,lat ); 
                  if(map.getBounds().contains(pointToCheck)){
                 if(map.getZoom() < 19)
                        modlevel=50;
                   if(map.getZoom() >=10  && map.getZoom() < 13)
                        modlevel=5;      
               if(map.getZoom() >=13  && map.getZoom() < 15)
                        modlevel=1;   
                if(map.getZoom() >=15  && map.getZoom() < 17)
                        modlevel=1;   
                      
                   if(map.getZoom() >=17  && map.getZoom() < 22)
                        modlevel=1;      ";

                if(isset($_GET['station']))
                    echo "modlevel=1;";
    echo "
                               
                   
          if (i % modlevel === 0) {
                             
                    if((num[2].length)>0)
                      var  popupText=num[2]+num[3]+num[7];
                      
                  
                         window['marker'+1]=new L.Marker([lon, lat]);
                    var checkmarker=num[7].toLowerCase();
                 
                 
                           ";
                         include "css/maykers.inc";
                          include BASEPATH ."/docs/dynamicstationmarkers.php";
                   echo " window['marker'+1]. setLatLng([lat,lon ]).bindPopup(popupText ,{'maxWidth': '140',
              'className': 'stylePopup' ,
               offset: [-100,30],
               closeButton: true,
               closeOnClick : true,
               autoClose: true }) ;;   
            window['marker'+1]. setLatLng([lon, lat]).bindPopup(popupText ,{ autoClose: false,  'className': 'stylePopup' ,    offset: [-100,30], closeButton: true, closeOnClick : true  });;   
                        
                         window['marker'+1].on('onclick', function (e) {   closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);});   
                                
                                }
                    }
                });
             }
                    
             else{
               
                  map.removeLayer(StationmarkerGroup);
                StationmarkerGroup =new  L.layerGroup().addTo(map);
             }
         });
         
            map.whenReady(function(e) {
       if(ifmoved==11110){
 
     var result = markers.map(num => {
              var lon = num[0];
                  var lat = num[1];
                  var markerLocation = new L.LatLng(lat, lon);
                  var mycon =num[4];
                   pointToCheck= L.latLng(lon,lat );
                 var  popupText=num[2]+num[3];
                   var checkmarker=num[4].toLowerCase();
                            if(map.getBounds().contains(pointToCheck)){
                               window['marker'+1]=new L.Marker([lon, lat]);   ";


                                include BASEPATH ."/docs/css/maykers.inc";
                                include BASEPATH ."/docs/dynamicstationmarkers.php";
                                echo "  window['marker'+1]. setLatLng([lat,lon ]).bindPopup(popupText ,{'maxWidth': '140',
              'className': 'stylePopup' ,
               offset: [-100,30],
               closeButton: true,
               closeOnClick : true,
               autoClose: true }) ;;   
               window['marker'+1]. setLatLng([lon, lat]).bindPopup(popupText ,{ autoClose: false,  'className': 'stylePopup' ,    offset: [-100,30], closeButton: true, closeOnClick : true  });;   
               window['marker'+1].on('onclick', function (e) {   closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);});    

                                        }
                                  });
                      
                            }
                         }); 
        
";

    if($_GET['show']=='location'){
        echo "  var local = new L.LatLng(".trim($startlat).",".$startlon."); 
 map.setView(local,13);           ";
    }
      if(isset($_GET['station'])){
        echo "  var local = new L.LatLng(".trim($startlon).",".$startlat."); 
 map.setView(local,13);           ";
    }

     else {


    // echo "  var local = new L.LatLng(".trim($startlat).",".$startlon.");
 //map.setView(local,10);           ";

        }
}









echo "}</script>";



include BASEPATH ."/docs/mapfooter.php";

include BASEPATH ."/docs/footer.php";
