<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";
echo  "<style>
h1{

    font-size: 22px !important;
    font-weight: normal;
    color: #232323;
}
</style>";
if(isset($_POST['location'])) {
    $_GET['location']=$_POST['location'];
}

if(isset($_POST['route'])) {
    $_GET['route']=$_POST['route'];
}

echo "
  
 <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"  integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


 <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>   
       <script language=\"javascript\" src =\"js/min.teststations.js\"></script> 
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
</style>

   <script language=\"javascript\">
 


//initialise the map
function init() {
 
";





$locationlat='';
$locationlong='';
include BASEPATH ."/docs/myjsfunctions.js";
echo "var chain='';";
$locationtype = " ";
$idlatlon='';
$data='';

if(isset($_POST['chain'])) {
if($_POST['chain']=='others')
        echo " chain = 'hotel';";
    else
        echo " chain = '".$_POST['chain']."';";
}


if(isset($_POST['id']))
    $_GET['id']=$_POST['id'];


if(isset($_GET['id'])) {



        $query = mysqli_query($japansql, "select   id, location_name, latitude, longitude, description, web_page, marker, type,traintype from locations  
where id =" . $_GET['id'] . " and active =1");
        if ($result = mysqli_fetch_assoc($query)) {
            $idlatlon = $result['latitude'] . "," . $result['longitude'] . "";
            echo " var tokyo = new L.LatLng(" . $idlatlon . ");
            map.setView(tokyo,14); 
              ";

        }
}
else {
    echo " var tokyo = new L.LatLng(" . $GLOBALS['zoompoint'] . ");
            map.setView(tokyo,7); ";
}

if(isset($_GET['location'])) {
    if($_GET['location']==2){
        echo "var watchID;
         var geoLoc;";
    }
}

echo "var mycon='';";
include BASEPATH ."/docs/css/maykers.inc";
include BASEPATH ."/docs/dynamicmarkers.php";

echo "

 

var whoami='fullmap';
 var popupTimeout=500;
  var  markerGroup = L.layerGroup().addTo(map);
var zoomlevel=''
           
map . on('moveend', function (e) {
    map.removeLayer(markerGroup);
                  markerGroup =new  L.layerGroup().addTo(map)
mapBounds = map.getBounds();
      zoomlevel = map . getZoom();
    stationS.features.forEach(function(feature) {
    if (feature.geometry.type === \"Point\") {
   ";

if(isset($_POST['chain'])) {
    echo "if(feature.properties.marker==\"hotel\"  && feature.properties.mtype=='".$_POST['chain']."' ){";
}
 else{
    echo "if(feature.properties.marker==\"hotel\" ){";
 }
  echo "

        const coords = feature.geometry.coordinates; // [longitude, latitude]
       
        const latLng = L.latLng(coords[0], coords[1]);
        const pointBounds = L.latLngBounds(latLng, latLng); // Create bounds for a single point
        if (mapBounds.intersects(pointBounds)) {
      
            if (zoomlevel>=6) {
             
               window['marker'+1]=new L.Marker([coords[0], coords[1]]);           
                mycon =feature.properties.marker;
               
                var linename=feature.properties.line_name;
                if(linename==0)
                     linename='';   
               var newdisplay=  '<form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value ='+feature.properties.id+' ><input type=hidden name=stationlocation value='+feature.properties.stationlocation+' ><input type=hidden name=longitude value ='+coords[1]+' ><input type=hidden name=latitude value ='+coords[0]+' ><input type=hidden name=initial value =1 ><button class=\'btn  btn-outline-light text-info btn-sm\'><img src =images/direct.png width=22></button></form>'; 
                          var popupText='<center><table border =0><tr><td colspan=2 align=center>'+feature.properties.ename+'</td><td ></tr><tr><td align=center>'+feature.properties.display+'</td><td align=right colspan =1>'+newdisplay+'</td><tr><td colspan=2 align =center>'+linename+'</td></tr></table>'
                     ; 
                
 
                  
                    
 
  if(zoomlevel <=7)
      var icoonsize=7;
 if(zoomlevel >=8)
      var icoonsize=8;
 if(zoomlevel >=9  && zoomlevel <11 )
      var icoonsize=10;
 if(zoomlevel >=11  && zoomlevel <13 )
      var icoonsize=14;
  if(zoomlevel >=13  && zoomlevel <15 )
      var icoonsize=15;
  if(zoomlevel >=15  && zoomlevel <17 )
        var icoonsize=16;
 if(zoomlevel >=17  && zoomlevel <21 )
        var icoonsize=32;
        var lat=coords[0];
        var lon =coords[1];
        var checkmarker=mycon.toLowerCase();
        
        if(feature.properties.marker!='0'){
            checkmarker=feature.properties.mtype.toLowerCase();
       
            }
         
            
            ";
       
            include "css/maykers.inc";
include BASEPATH ."/docs/newdynamicstationmarkers.php";
echo " 
                

";

echo
"   
               window['marker'+1]. setLatLng([coords[0], coords[1] ]).bindPopup(popupText ,{autoClose: false,   'className': 'stylePopup' ,     closeButton: true, closeOnClick : true  });;          
                 window['marker'+1].on('onclick', function (e) {  alert(9); closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);}); 
                
                  
                         }
        }
    }
            if (zoomlevel <6) {
                  map.removeLayer(markerGroup);
                  markerGroup =new  L.layerGroup().addTo(map);
                    }
               }     

});
 
});
          
                  map.whenReady(function(e) {
 
mapBounds = map.getBounds();
      zoomlevel = map . getZoom();
  
    stationS.features.forEach(function(feature) {
    if (feature.geometry.type === \"Point\") {
    ";

if(isset($_POST['chain'])) {
    echo "if(feature.properties.marker==\"hotel\"  && feature.properties.mtype=='".$_POST['chain']."' ){";
}
else{
    echo "if(feature.properties.mtype==\"hotel\" ){";
}
echo " 
        const coords = feature.geometry.coordinates; // [longitude, latitude]
        const latLng = L.latLng(coords[0], coords[1]);
        const pointBounds = L.latLngBounds(latLng, latLng); // Create bounds for a single point
        
      

        if (mapBounds.intersects(pointBounds)) {
            if (zoomlevel>=2) {     
               window['marker'+1]=new L.Marker([coords[0], coords[1]]);           
                mycon =feature.properties.marker;
                var linename=feature.properties.line_name;
                if(linename==0)
                     linename='';   
                     
       var newdisplay=  '<form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value ='+feature.properties.id+' ><input type=hidden name=stationlocation value='+feature.properties.stationlocation+' ><input type=hidden name=longitude value ='+coords[1]+' ><input type=hidden name=latitude value ='+coords[0]+' ><input type=hidden name=initial value =1 ><button class=\'btn  btn-outline-light text-info btn-sm\'><img src =images/direct.png width=22></button></form>'; 
                          var popupText='<center><table border =0><tr><td colspan=2 align=center>'+feature.properties.ename+'</td><td ></tr><tr><td align=center>'+newdisplay+'</td> </tr><tr><td colspan=2 align =center>'+linename+'</td></tr></table>'
     

        
        var lat=coords[0];
        var lon =coords[1];
        var checkmarker=mycon.toLowerCase();

        if(feature.properties.marker!='0'){
            checkmarker=feature.properties.marker.toLowerCase();
       
            }
            
  var icoonsize=7;
      var HotelIcon = L.icon({
         iconUrl: 'images/redlocationIcon.avif',
         shadowUrl: 'images/redlocationIcon.avif',
         iconSize:    [icoonsize,icoonsize],
         shadowSize:   [icoonsize,icoonsize]
                });
                 window['marker'+1]=new L.Marker([lat,lon], {icon:HotelIcon}).addTo(markerGroup);;";

echo
"
               window['marker'+1]. setLatLng([coords[0], coords[1] ]).bindPopup(popupText ,{autoClose: false,  autoPan:false, 'className': 'stylePopup' ,    offset: [-100,30], closeButton: true, closeOnClick : true  });;          
                 window['marker'+1].on('onclick', function (e) {  alert(9); closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);}); 
                    //   window['marker'+1].on('click', function(e){
   // map.setView([e.latlng.lat, e.latlng.lng], 15);}); 
                         }
        }
    }
            if (zoomlevel <6) {
                  map.removeLayer(markerGroup);
                  markerGroup =new  L.layerGroup().addTo(map);
                    }
               }     

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
   
";



include BASEPATH ."/docs/mapfooter.php";



include BASEPATH ."/docs/footer.php";
