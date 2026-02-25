<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


if(isset($_POST['location'])) {
    $_GET['location']=$_POST['location'];
}

if(isset($_POST['route'])) {
    $_GET['route']=$_POST['route'];
}

echo "

</style>
 <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"  integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


 <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>   
      
   <script language=\"javascript\">

//initialise the map
	function init() {
 

";



if(isset($_POST['closest_station'])  or (isset($_GET['stations']) )) {

    $query = mysqli_query($japansql, "select  *   from company    ");
    while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {

        $GLOBALS['TRAINCO'][$result['company_id']] = array('company_id' => $result['company_id'], 'company_link' => $result['company_link']);
    }


}

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
include BASEPATH ."/docs/myjsfunctions.js";

$locationtype = " ";
$idlatlon='';
$data='';
$category="";
if(isset($_GET['cat']))
    $category=" and traintype = ".$_GET['cat']." ";
echo "
 var markers = [";

$query = mysqli_query($japansql, "select * from locations where type is not NUll and type='information'  and active =1  ".$category."  ");

while ($result = mysqli_fetch_assoc($query)) {
    $startlat=$result['latitude'];
    $startlon=ltrim(trim($result['longitude']));
    ##$result['location_name']=ucwords(strtolower($result['location_name']));
    $directions="<form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value =".$result['id']." ><input type=hidden name=timestamp value=".strtotime("now")." ><input type=hidden name=longitude value =".$result['longitude']." ><input type=hidden name=latitude value =".$result['latitude']." ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\"><img src =images/direct.png width=22></button></form>";
    $website="<a href =\'".$result['web_page']."\' target =_blank title=\'WebSite\' ><img src =images/link.png width=22></a>";
    $diplay="<table width=100%> <tr><td>".$website ."</td><td> </td> <td align=\'right\'>".$directions."</td><td> </td></tr></table>";  $result['description']=str_replace("Japan","",$result['description']);
    $result['description']=str_replace("japan","",$result['description']);
    $result['description']=str_replace(",","<br>",$result['description']);
    if(strlen($data)>0)
        $data.= ",[".$result['latitude'].",".$result['longitude'].",'<b><span class=\'text-small\'  style=\'font-size:13px;align=center;\' >".$result['location_name']."</span></b>','". $diplay."','".$result['marker']."','".$result['traintype']."'  ]";
    else
        $data=   "[".$result['latitude'].",".$result['longitude'].",'<b><span class=\'text-small\'  style=\'font-size:13px;align=center;\' >".$result['location_name']."</span></b>','". $diplay."','".$result['marker']."','".$result['traintype']."'  ]";

}
echo $data;
echo "];\n";



 

if(isset($_GET['cat'])) {
    echo " var tokyo = new L.LatLng(" . $GLOBALS['zoompoint']. ");
            map.setView(tokyo,9); 
              ";
}

else {
    echo " var tokyo = new L.LatLng(" . $GLOBALS['zoompoint'] . ");
            map.setView(tokyo,9); ";
}

if(isset($_GET['location'])) {
    if($_GET['location']==2){
        echo "var watchID;
         var geoLoc;";
    }
}


echo "

 

    var whoami='fullmap';
    var ifmoved=0;
    var bounds;
   var nelat= 0;
    var nelng= 0;
    var selat =0;
    var selng =0;
    var  InfomarkerGroup = L.layerGroup().addTo(map);
     var popupTimeout=500;
        bounds = map.getBounds();
        nelat =bounds['_northEast']['lat'];
        nelng= bounds['_northEast']['lng'];
        selat =bounds['_southWest']['lat'];
        selng =bounds['_southWest']['lng'];
        var markerzoomed=''
      map . on('moveend', function (e) {
               markerzoomed = map . getZoom();

                   ifmoved=1;
                     if (markerzoomed>=9) {
                       result = markers.map(num => {
                          var lat = num[1];
                          var lon = num[0];
                          var markerLocation = new L.LatLng(lat, lon);
                          var mycon =num[5];
                          pointToCheck= L.latLng(lon,lat );
                          var  popupText=num[2]+num[3];
                       if(map.getBounds().contains(pointToCheck)){
                              window['marker'+1]=new L.Marker([lon, lat]); ";
                        include BASEPATH ."/docs/css/maykers.inc";
                                echo "
                          window['marker'+1]= new L.Marker(markerLocation, {icon:InfoOneIcon} ).addTo(InfomarkerGroup);
                         if(mycon==1)
                             window['marker'+1]= new L.Marker(markerLocation, {icon:InfoOneIcon} ).addTo(InfomarkerGroup);
                           if(mycon==2)
                                    window['marker'+1]=new L.Marker(markerLocation, {icon:InfoTwoIcon} ).addTo(InfomarkerGroup);
                          if(mycon==3)
                                  window['marker'+1]= new L.Marker(markerLocation, {icon:InfoThreeIcon} ).addTo(InfomarkerGroup);
                           if(mycon==4)
                               window['marker'+1]=  new L.Marker(markerLocation, {icon:InfoFourIcon} ).addTo(InfomarkerGroup);";

                             echo "  window['marker'+1]. setLatLng([lon, lat]).bindPopup(popupText ,{autoClose: false,  autoPan:false, 'className': 'stylePopup' ,    offset: [-100,30], closeButton: true, closeOnClick : true  });;   
                        
                         window['marker'+1].on('onclick', function (e) {   closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);});                   }          
                        });
            
                    }
                   else
                          {       
                        console.log(markerzoomed);
                   
                        map.removeLayer(InfomarkerGroup);
                     InfomarkerGroup =new  L.layerGroup().addTo(map);
                       
                       }      

                    
                      });
                      
                      
                          ";
if(isset($_GET['cat'])) {
    include BASEPATH ."/docs/css/maykers.inc";
    echo "

   map.whenReady(function(e) { 
   ";
include BASEPATH ."/docs/css/maykers.inc";

    echo "
  InfomarkerGroup = L.layerGroup().addTo(map);
   whoami='smallfullmap';

   if(ifmoved==0){
   
 
   
           result = markers.map(num => {
        
                   var lat = num[1];
                  var lon = num[0];
                  var markerLocation = new L.LatLng(lat, lon);
                  var mycon =num[5];
                  pointToCheck= L.latLng(lon,lat );
                  var  popupText=num[2]+num[3];
                 window['marker'+1]=new L.Marker([lon, lat]); 
             

             
 
       
       if(mycon==1)
              window['marker'+1]= new L.Marker(markerLocation, {icon:InfoOneIcon} ).addTo(InfomarkerGroup);
       if(mycon==2)
           window['marker'+1]=new L.Marker(markerLocation, {icon:InfoTwoIcon} ).addTo(InfomarkerGroup);
        if(mycon==3)
             window['marker'+1]=new L.Marker(markerLocation, {icon:InfoThreeIcon} ).addTo(InfomarkerGroup);
        if(mycon==4){
                window['marker'+1]=new L.Marker(markerLocation, {icon:InfoFourIcon} ).addTo(InfomarkerGroup);
                }
 
                 window['marker'+1]. setLatLng([lon, lat]).bindPopup(popupText ,{autoClose: false,  autoPan:false, 'className': 'stylePopup' ,    offset: [-100,30], closeButton: true, closeOnClick : true  });;   
                        
                         window['marker'+1].on('onclick', function (e) {   closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);}); 
                   
                     }); 
                }


            }); 
            
            
    }
  
    
    
    




 


";

}

else
    echo "}";




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
   
 
";

include BASEPATH ."/docs/menu.php";


include BASEPATH ."/docs/mapfooter.php";




include BASEPATH ."/docs/footer.php";
