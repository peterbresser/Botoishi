<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";


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
.info {
    padding: 6px 8px;
    font: 14px/16px Arial, Helvetica, sans-serif;
    background: white;
    background: rgba(255,255,255,0.8);
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
    border-radius: 0px;
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
 <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"  integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


 <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>   
       <script language=\"javascript\" src =\"js/stations.js\"></script> 
 

   <script language=\"javascript\">
 
 

//initialise the map
function init() {
 
";





$locationlat='';
$locationlong='';
include BASEPATH ."/docs/myjsfunctions.js";

$locationtype = " ";
$idlatlon='';
$data='';

if(isset($_POST['id']))
    $_GET['id']=$_POST['id'];

if(isset($_GET['id'])) {
    if((isset($_GET['stationlocation']) &&  $_GET['stationlocation']==1)) {
        $query = mysqli_query($japansql, "select   longitude, latitude ,ename,jname,address ,stations.id as id , stations.line_id as lineid, company_id, line_name  from stations inner join japan.jplines jp  on  stations.line_id =jp.line_id where  active =1 and latitude!='0' and  stations.id =" . $_GET['id'] . " and active =1" );
             if ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                 $idlatlon = $result['latitude'] . "," . $result['longitude'] . "";
                 $result['location_name'] = ucwords(strtolower($result['location_name']));
                 $directions = "<form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value =" . $result['id'] . " ><input type=hidden name=timestamp value=" . strtotime("now") . " ><input type=hidden name=longitude value =" . $result['longitude'] . " ><input type=hidden name=latitude value =" . $result['latitude'] . " ><input type =hidden name=id value =" . $result['id'] . " ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\"><img src =images/direct.png width=22></button></form>";
                 $website = "<a href =\'" . $result['web_page'] . "\' target =_blank title=\'WebSite\' ><img src =images/link.png width=22></a>";
                 $diplay = "<table width=100%> <tr><td>" . $directions . "</td><td> </td> <td>" . $website . "</td><td> </td></tr></table>";
                 $result['description'] = str_replace("Japan", "", $result['description']);
                 $result['description'] = str_replace("japan", "", $result['description']);
                 $result['description'] = str_replace(",", "<br>", $result['description']);

                 $data = 'const selectedmarker = {
"type": "FeatureCollection",
 "features":[
{ "type": "Feature",
"geometry": {"type": "Point", "coordinates":[' . $result['latitude'] . ',' . $result['longitude'] . ']},
"properties": {"ename":"' . $result['ename'] . '", "jname":"'.$result['ename'].'","address":"' . $result['address'] . '", "lineid":"'.$result['lineid'].'","line_name":"'.$result['line_name'].'","display":"<table width=100%> <tr><td><form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value =' . $result['id'] . ' ><input type=hidden name=stationlocation value= ><input type=hidden name=longitude value =' . $result['longitude'] . '><input type=hidden name=latitude value =' . $result['latitude'] . ' ><input type=hidden name=initial value =1 ><button class=btn  btn-outline-light text-info btn-sm><img src =images/direct.png width=22></button></form></td><td> </td> <td><a href =' . $result['link'] . ' target =_blank title=WebSite><img src =images/link.png width=22></a></td><td> </td></tr></table>","marker":"0","mtype":"0","traintype":"0","highlited":"1"}
        }
    ]
};';

             }
        }
    else{


            $query = mysqli_query($japansql, "select   id, location_name, latitude, longitude, description, web_page, marker, type,traintype from locations  
where id =" . $_GET['id'] . " and active =1");

            if ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                $idlatlon = $result['latitude'] . "," . $result['longitude'] . "";
                $result['location_name'] = ucwords(strtolower($result['location_name']));
                $directions = "<form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value =" . $result['id'] . " ><input type=hidden name=timestamp value=" . strtotime("now") . " ><input type=hidden name=longitude value =" . $result['longitude'] . " ><input type=hidden name=latitude value =" . $result['latitude'] . " ><input type =hidden name=id value =" . $result['id'] . " ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\"><img src =images/direct.png width=22></button></form>";
                $website = "<a href =\'" . $result['web_page'] . "\' target =_blank title=\'WebSite\' ><img src =images/link.png width=22></a>";
                $diplay = "<table width=100%> <tr><td>" . $directions . "</td><td> </td> <td>" . $website . "</td><td> </td></tr></table>";
                $result['description'] = str_replace("Japan", "", $result['description']);
                $result['description'] = str_replace("japan", "", $result['description']);
                $result['description'] = str_replace(",", "<br>", $result['description']);

                $data = 'const selectedmarker = {
"type": "FeatureCollection",
 "features":[
{ "type": "Feature",
"geometry": {"type": "Point", "coordinates":[' . $result['latitude'] . ',' . $result['longitude'] . ']},
"properties": {"ename":"' . $result['location_name'] . '", "jname":"0","address":"' . $result['description'] . '", "lineid":"0","line_name":"0","display":"<table width=100%> <tr><td><form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value =' . $result['id'] . ' ><input type=hidden name=stationlocation value=0 ><input type=hidden name=longitude value =' . $result['longitude'] . '><input type=hidden name=latitude value =' . $result['latitude'] . ' ><input type=hidden name=initial value =1 ><button class=btn  btn-outline-light text-info btn-sm><img src =images/direct.png width=22></button></form></td><td> </td> <td><a href =' . $result['web_page'] . ' target =_blank title=WebSite><img src =images/link.png width=22></a></td><td> </td></tr></table>","marker":"' . $result['marker'] . '","mtype":"' . $result['type'] . '","traintype":"' . $result['traintype'] . '","highlited":"1"}
        }
    ]
};';

            }
        }
    }
echo $data;


if(isset($_GET['id'])) {
    echo " var tokyo = new L.LatLng(" . $idlatlon. ");
            map.setView(tokyo,16); 
              ";
}

else {
    echo " var tokyo = new L.LatLng(" . $GLOBALS['zoompoint'] . ");
            map.setView(tokyo,7); ";
}

echo "var mycon='';
var mapmoved=0;
var  markerGroup = L.layerGroup().addTo(map);";
include BASEPATH ."/docs/css/maykers.inc";
include BASEPATH ."/docs/dynamicmarkers.php";
if(isset($_GET['id'])) {
    echo "
var mapmoved=0;

 selectedmarker.features.forEach(function(feature) {
      var  markerGroup = L.layerGroup().addTo(map);
    if (feature.geometry.type === \"Point\") {
        const coords = feature.geometry.coordinates; // [longitude, latitude]
    mycon =feature.properties.line_name;
          window['marker'+1]=new L.Marker([coords[0], coords[1]]); 
          
         var checkmarker=mycon.toLowerCase();
     
        if(feature.properties.marker!='0'){
            checkmarker=feature.properties.marker.toLowerCase();
       
            }
           
           var lat=coords[0];
            var lon=coords[1];
           checkmarker='highlited';";
    include BASEPATH . "/docs/newdynamicstationmarkers.php";
    echo
    " var linename=feature.properties.line_name;
                if(linename==0)
                     linename='';   
      var popupText='<center>'+feature.properties.ename+'<br>'+feature.properties.display+'<br>'+linename+'</center>';
               window['marker'+1]. setLatLng([coords[0], coords[1] ]).bindPopup(popupText ,{ autoClose: false,  'className': 'stylePopup' ,    offset: [-100,30], closeButton: true, closeOnClick : true  });;   
                        
                 window['marker'+1].on('onclick', function (e) {   closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);}); 
   
                      window['marker'+1].on('click', function(e){
    map.setView([e.latlng.lat, e.latlng.lng], 15);}); 
    
          }         
        });";
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


echo " 
var whoami='fullmap';
 
 
var popupTimeout=500;
  var  StationmarkerGroup = L.layerGroup().addTo(map);
  var  markerGroup = L.layerGroup().addTo(map);
var markerzoomed=''
            
map . on('moveend', function (e) {
mapBounds = map.getBounds();
      markerzoomed = map . getZoom();
      
    
    stationS.features.forEach(function(feature) {
    
    if (feature.geometry.type === \"Point\") {
        const coords = feature.geometry.coordinates; // [longitude, latitude]
        
 
        const latLng = L.latLng(coords[0], coords[1]);
        const pointBounds = L.latLngBounds(latLng, latLng); // Create bounds for a single point

        if (mapBounds.intersects(pointBounds)) {

       ifmoved=1;";

if( isset($_GET['show']) and $_GET['show'] =='location' )
    echo" if (markerzoomed>=13  ) {
   ";
else
    echo "
       if (markerzoomed>=7 &&  feature.properties.marker !='0'  &&  feature.properties.marker !='information' &&  feature.properties.mtype !='station'  &&  feature.properties.mtype !='hotel' &&  feature.properties.marker !='information') {
        ;";

echo " 

     zoomlevel=markerzoomed;
               window['marker'+1]=new L.Marker([coords[0], coords[1]]);           
               
           
               var icoonsize=9;
                mycon =feature.properties.line_name;
                
                var linename=feature.properties.line_name;
                if(linename==0)
                     linename='';   
               var popupText='<center>'+feature.properties.ename+'<br>'+feature.properties.display+'<br>'+linename+'</center>';
                    if(zoomlevel <8)
      var icoonsize=5;                         
 if(zoomlevel >=8)
      var icoonsize=9;
 if(zoomlevel >=9  && zoomlevel <11 )
      var icoonsize=10;
 if(zoomlevel >=11  && zoomlevel <13 )
      var icoonsize=12;
  if(zoomlevel >=13  && zoomlevel <15 )
      var icoonsize=13;
  if(zoomlevel >=15  && zoomlevel <17 )
        var icoonsize=15;
   if(zoomlevel >=17  && zoomlevel <19 )
        var icoonsize=25;
 if(zoomlevel >=18  && zoomlevel <21 )
        var icoonsize=32;
        var lat=coords[0];
        var lon =coords[1];
        var checkmarker=mycon.toLowerCase();
        
        if(feature.properties.marker!='0'){
            checkmarker=feature.properties.marker.toLowerCase();
       
            }
";

include BASEPATH ."/docs/newdynamicstationmarkers.php";
echo
"
      
               window['marker'+1]. setLatLng([coords[0], coords[1] ]).bindPopup(popupText ,{ autoClose: false,  'className': 'stylePopup' ,    offset: [-100,30], closeButton: true, closeOnClick : true  });;   
                        
                 window['marker'+1].on('onclick', function (e) {   closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);}); 
                    
                         }
        }
    }";
if( isset($_GET['show']) and $_GET['show'] =='location' )
    echo"    if (markerzoomed <13) {
    map.removeLayer(StationmarkerGroup);
                  StationmarkerGroup =new  L.layerGroup().addTo(map);
   ";
else
    echo "   if (markerzoomed <7) {";

echo " 
         
          
                  map.removeLayer(markerGroup);
                 markerGroup =new  L.layerGroup().addTo(map);
                    }
                    
    // You would add logic for other geometry types (Polygon, LineString) similarly
            });



 });
    
 if(mapmoved==0){
mapBounds = map.getBounds();
      markerzoomed = map . getZoom();
   console.log(markerzoomed);
    stationS.features.forEach(function(feature) {
    
    if (feature.geometry.type === \"Point\") {
    
    
        const coords = feature.geometry.coordinates; // [longitude, latitude]
            
        const latLng = L.latLng(coords[0], coords[1]);
        const pointBounds = L.latLngBounds(latLng, latLng); // Create bounds for a single point

        if (mapBounds.intersects(pointBounds)) {
      
       ifmoved=1;
   
       if (markerzoomed>=7 &&  feature.properties.marker !='0'  &&  feature.properties.marker !='information' &&  feature.properties.mtype !='station'  &&  feature.properties.mtype !='hotel' &&  feature.properties.marker !='information') {
 
 
     zoomlevel=markerzoomed;
                
               var icoonsize=9;
                mycon =feature.properties.line_name;
                
                var linename=feature.properties.line_name;
           if(linename==0)
                     linename='';   
               var popupText='<center>'+feature.properties.ename+'<br>'+feature.properties.display+'<br>'+linename+'</center>';
 
          var icoonsize=2;                         
         window['marker'+1]=new L.Marker([coords[0], coords[1]]);      
        var lat=coords[0];
        var lon =coords[1];
        var checkmarker=mycon.toLowerCase();
        
        if(feature.properties.marker!='0'){
            checkmarker=feature.properties.marker.toLowerCase();
       
            }
            
         var icoonsize=15;       
";
include BASEPATH ."/docs/css/maykers.inc";
include BASEPATH ."/docs/newdynamicstationmarkers.php";
echo
"
      
               window['marker'+1]. setLatLng([coords[0], coords[1] ]).bindPopup(popupText ,{ autoClose: false,  'className': 'stylePopup' ,    offset: [-100,30], closeButton: true, closeOnClick : true  });;   
                        
                 window['marker'+1].on('onclick', function (e) {    closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);}); 
                   //    window['marker'+1].on('click', function(e){
    //map.setView([e.latlng.lat, e.latlng.lng], 15);}); 
                         }
        }
    }
            if (markerzoomed <7) {
          
                  map.removeLayer(markerGroup);
                  markerGroup =new  L.layerGroup().addTo(map);
                    }
                    
    // You would add logic for other geometry types (Polygon, LineString) similarly
            });



 }

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
   
</head>";



include BASEPATH ."/docs/mapfooter.php";



include BASEPATH ."/docs/footer.php";
