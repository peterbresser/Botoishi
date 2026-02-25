<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";


if(isset($_POST['location'])) {
    $_GET['location']=$_POST['location'];
}

if(isset($_POST['route'])) {
    $_GET['route']=$_POST['route'];
}
if(isset($_GET['id'])) {


    if(!is_numeric($_GET['id'])) {
        $_GET['id']=2699;
    }
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



echo " var tokyo = new L.LatLng(" . $GLOBALS['zoompoint'] . ");
            map.setView(tokyo,5);



var mapmoved=0;
var  markerGroup = L.layerGroup().addTo(map);";

if(isset($_GET['id'])) {
    echo "var myid='".$_GET['id']."'";

}
else
    echo "var myid='';";
echo " 
var whoami='fullmap';
 var ifmoved=0;
var popupTimeout=500;

var zoomlevel=''
            
map . on('moveend', function (e) {
 mapBounds = map.getBounds();
      zoomlevel = map . getZoom();
      console.log(zoomlevel);
 ifmoved=1;
    stationS.features.forEach(function(feature) {
    
    if (feature.geometry.type === \"Point\") {
    

        const coords = feature.geometry.coordinates; // [longitude, latitude]
 
 
        const latLng = L.latLng(coords[0], coords[1]);
        const pointBounds = L.latLngBounds(latLng, latLng); // Create bounds for a single point
       var visibility=feature.properties.visibility;
        if (mapBounds.intersects(pointBounds)) {
      
       ifmoved=1;
       
        if(visibility <=zoomlevel){
 

     
                var linename=feature.properties.line_name;
                if(linename==0)
                     linename='';   
               var popupText='<center>'+feature.properties.ename+'<br>'+feature.properties.display+'<br>'+linename+'</center>';
                          window['marker'+1]=new L.Marker([coords[0], coords[1]]);  
                           
                   var icoonsize=zoomlevel+1;
                   if(zoomlevel >16)
                         icoonsize=28;
                    var lat=coords[0];
                    var lon =coords[1];
                    var checkmarker=feature.properties.marker.toLowerCase();   
             
                    if(feature.properties.marker!='0'){
                        checkmarker=feature.properties.marker.toLowerCase();
                        }
                 ";
include BASEPATH ."/docs/css/maykers.inc";
include BASEPATH ."/docs/newdynamicstationmarkers.php";
echo
"
                window['marker'+1]. setLatLng([coords[0], coords[1] ]).bindPopup(popupText ,{'autoClose': 'false',  'className': 'stylePopup' ,    offset: [-100,30], closeButton: true, closeOnClick : true  });;                         
                 window['marker'+1].on('onclick', function (e) {   closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);}); 
                  }
            }
        }";
if(isset($_GET['id'])) {
    echo "";#markerGroup =new  L.layerGroup().addTo(map);";

}
else{
    echo " 
      if ( zoomlevel <10) {
                map.removeLayer(markerGroup);
                  markerGroup =new  L.layerGroup().addTo(map);
                    }
         ";
}
echo "            
    // You would add logic for other geometry types (Polygon, LineString) similarly
            });
 
 });
map.whenReady(function(e) {
        mapBounds = map.getBounds();
         whoami='smallfullmap';
        stationS.features.forEach(function(feature) {
        if (feature.geometry.type === \"Point\"  &&  feature.properties.id==myid) {
 
            const coords = feature.geometry.coordinates; // [longitude, latitude]
              map.setView([coords[0], coords[1] ],16);  
 console.log(feature.properties.id);
         var HighLiteIcon= L.icon({
         iconUrl: 'images/locationIcon.png',
         shadowUrl: 'images/locationIcon.png',
         iconSize:    [32,32],
         shadowSize:   [32,32]
                }); 
            const latLng = L.latLng(coords[0], coords[1]);
            const pointBounds = L.latLngBounds(latLng, latLng); // Create bounds for a single point

            if (mapBounds.intersects(pointBounds)) {
      
                ifmoved=1;
       
          //   if(feature.properties.visibility <=zoomlevel){
                    //   console.log(feature.properties.ename+'    '+feature.properties.visibility+ '  '+zoomlevel ); 
                    var linename=feature.properties.line_name;
                    if(linename==0)
                            linename='';   
                        var popupText='<center>'+feature.properties.ename+'<br>'+feature.properties.display+'<br>'+linename+'</center>';
                        window['marker'+1]=new L.Marker([coords[0], coords[1]]);     
                        var icoonsize=22;
                        var lat=coords[0];
                        var lon =coords[1];
                        var checkmarker=feature.properties.marker.toLowerCase();  
                        
                        
           
                        if(feature.properties.marker!='0'){
                           checkmarker=feature.properties.marker.toLowerCase();
                            }
                           window['marker'+1]=new L.Marker([coords[0], coords[1] ], {icon:HighLiteIcon}).addTo(markerGroup);;
                            
                            ";

//include BASEPATH ."/docs/newdynamicstationmarkers.php";
echo


"    
                   
                    window['marker'+1]. setLatLng([coords[0], coords[1] ]).bindPopup(popupText ,{closeOnClick: false, autoClose: false,  'className': 'stylePopup' ,    offset: [-100,30], closeButton: true, 'closeOnClick' : true  });;                         
                    window['marker'+1].on('onclick', function (e) {   closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);}); 
           //   }
            }  
          }
                                                           ;
    });
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
   
</head>";



include BASEPATH ."/docs/mapfooter.php";



include BASEPATH ."/docs/footer.php";
