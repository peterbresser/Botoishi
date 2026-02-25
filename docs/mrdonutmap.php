<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";
header('Access-Control-Allow-Origin:https://tile.openstreetmap.de');
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

 
 <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"  integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


 <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>   
       <script language=\"javascript\" src =\"js/min.teststations.js\"></script> 
 

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
        map.removeLayer(markerGroup);
                  markerGroup =new  L.layerGroup().addTo(map);
 mapBounds = map.getBounds();
      zoomlevel = map . getZoom();
 
 ifmoved=1;
    stationS.features.forEach(function(feature) {
   
    if (feature.geometry.type === \"Point\" && feature.properties.marker==\"mrdonut\") {
    

 const coords = feature.geometry.coordinates; // [longitude, latitude]
 

        const latLng = L.latLng(coords[0], coords[1]);
        const pointBounds = L.latLngBounds(latLng, latLng); // Create bounds for a single point
       var visibility=feature.properties.visibility;
        
     if (mapBounds.intersects(pointBounds)) {
       
       ifmoved=1;
       visibility=visibility-5;
        if(visibility <=zoomlevel){
                 var linename=feature.properties.line_name;
                if(linename==0)
                     linename='';   
                    var newdisplay=  '<form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value ='+feature.properties.id+' ><input type=hidden name=stationlocation value='+feature.properties.stationlocation+' ><input type=hidden name=longitude value ='+coords[1]+' ><input type=hidden name=latitude value ='+coords[0]+' ><input type=hidden name=initial value =1 ><button class=\'btn  btn-outline-light text-info btn-sm\'><img src =images/direct.png width=22></button></form>'; 
                          var popupText='<center><table border =0><tr><td colspan=2 align=center>'+feature.properties.ename+'</td><td ></tr><tr><td align=center>'+feature.properties.display+'</td><td align=right colspan =1>'+newdisplay+'</td><tr><td colspan=2 align =center>'+linename+'</td></tr></table>'
                     ; 
                          window['marker'+1]=new L.Marker([coords[0], coords[1]]);  
                           
      if(zoomlevel <=7)
      var icoonsize=7;
 if(zoomlevel >=8)
      var icoonsize=zoomlevel+2;
 if(zoomlevel >=9  && zoomlevel <11 )
      var icoonsize=zoomlevel+5;
 if(zoomlevel >=11  && zoomlevel <13 )
      var icoonsize=zoomlevel+5;
  if(zoomlevel >=13  && zoomlevel <15 )
      var icoonsize=zoomlevel+5;
  if(zoomlevel >=15  && zoomlevel <17 )
        var icoonsize=zoomlevel+5;
 if(zoomlevel >=17  && zoomlevel <21 )
        var icoonsize=32;
                   
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
                    window['marker'+1]. setLatLng([lat,lon ]).bindPopup(popupText ,{ autoClose: false,   'className': 'stylePopup' ,  closeButton: true, closeOnClick : true  });;                         
                 window['marker'+1].on('onclick', function (e) {   closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);}); 
         }
      }
   }";
if(isset($_GET['id'])) {
    echo "";#markerGroup =new  L.layerGroup().addTo(map);";

}
else{
    echo " 
      if ( zoomlevel <9) {
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
 
      
            const latLng = L.latLng(coords[0], coords[1]);
            const pointBounds = L.latLngBounds(latLng, latLng); // Create bounds for a single point

            if (mapBounds.intersects(pointBounds)) {
      
                ifmoved=1;
       
          //   if(feature.properties.visibility <=zoomlevel){
                  
                    var linename=feature.properties.line_name;
                    if(linename==0)
                            linename='';   
                           var newdisplay=  '<form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value ='+feature.properties.id+' ><input type=hidden name=stationlocation value='+feature.properties.stationlocation+' ><input type=hidden name=longitude value ='+coords[1]+' ><input type=hidden name=latitude value ='+coords[0]+' ><input type=hidden name=initial value =1 ><button class=\'btn  btn-outline-light text-info btn-sm\'><img src =images/direct.png width=22></button></form>'; 
                          var popupText='<center><table border =0><tr><td colspan=2 align=center>'+feature.properties.ename+'</td><td ></tr><tr><td align=center>'+feature.properties.display+'</td><td align=right colspan =1>'+newdisplay+'</td><tr><td colspan=2 align =center>'+linename+'</td></tr></table>'
                     ; 
                 
                        window['marker'+1]=new L.Marker([coords[0], coords[1]]);     
                        var icoonsize=32;
                        var lat=coords[0];
                        var lon =coords[1];
                        var checkmarker=feature.properties.marker.toLowerCase();  
                        
                        
           
                        if(feature.properties.marker!='0'){
                           checkmarker=feature.properties.marker.toLowerCase();
                            }
                           window['marker'+1]=new L.Marker([coords[0], coords[1] ], {icon:HighLiteIcon}).addTo(markerGroup);;
                            
                            ";

include BASEPATH ."/docs/newdynamicstationmarkers.php";
echo


"    
                   
                    window['marker'+1]. setLatLng([coords[0], coords[1] ]).bindPopup(popupText ,{closeOnClick: false,autoClose: false,  autoPan:false, 'className': 'stylePopup' ,    offset: [1,1], closeButton: true, 'closeOnClick' : true  });;                         
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
