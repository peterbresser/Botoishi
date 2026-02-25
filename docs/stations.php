<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

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
    echo " var tokyo = new L.LatLng(" . $idlatlon . ");
            map.setView(tokyo,16); 
              ";

    if (isset($_GET['id'])) {
        $query = mysqli_query($japansql, "select   id, location_name, latitude, longitude, description, web_page, marker, type,traintype from locations  
where id =" . $_GET['id'] . " and active =1");
        if ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $idlatlon = $result['latitude'] . "," . $result['longitude'] . "";
        }
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



echo "

 

var whoami='fullmap';
 var popupTimeout=500;
  var  markerGroup = L.layerGroup().addTo(map);
var markerzoomed=''
           
           
map . on('moveend', function (e) {

map.removeLayer(markerGroup);
markerGroup =new  L.layerGroup().addTo(map);
mapBounds = map.getBounds();
      markerzoomed = map . getZoom();
    zoomlevel = map . getZoom();
    stationS.features.forEach(function(feature) {
    
    if (feature.geometry.type === \"Point\" && ( feature.properties.marker==\"station\" ||  feature.properties.marker==\"jrstation\"   ||  feature.properties.marker==\"subway\"    ||  feature.properties.marker==\"metro\" ) ) {
        const coords = feature.geometry.coordinates; // [longitude, latitude]
    
 
        const latLng = L.latLng(coords[0], coords[1]);
        const pointBounds = L.latLngBounds(latLng, latLng); // Create bounds for a single point

        if (mapBounds.intersects(pointBounds)) {
       var visibility=feature.properties.visibility;
       ifmoved=1;
         visibility=visibility-2;
     if(visibility <=zoomlevel){
     zoomlevel=markerzoomed;
               window['marker'+1]=new L.Marker([coords[0], coords[1]]);           
               
           
        
                mycon =feature.properties.line_name;
 
                var linename=feature.properties.line_name;
                if(linename==0)
                     linename='';   
                        var newdisplay=  '<form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value ='+feature.properties.id+' ><input type=hidden name=stationlocation value='+feature.properties.stationlocation+' ><input type=hidden name=longitude value ='+coords[1]+' ><input type=hidden name=latitude value ='+coords[0]+' ><input type=hidden name=initial value =1 ><button class=\'btn  btn-outline-light text-info btn-sm\'><img src =images/direct.png width=22></button></form>'; 
                          var popupText='<center><table border =0><tr><td colspan=2 align=center>'+feature.properties.ename+'</td><td ></tr><tr><td align=center>'+feature.properties.display+'</td><td align=right colspan =1>'+newdisplay+'</td><tr><td colspan=2 align =center>'+linename+'</td></tr></table>'
                     ; 
     
                    
  if(zoomlevel <=7)
      var icoonsize=7;
 if(zoomlevel >=8)
      var icoonsize=zoomlevel+2;
 if(zoomlevel >=9  && zoomlevel <11 )
      var icoonsize=zoomlevel+2;
 if(zoomlevel >=11  && zoomlevel <13 )
      var icoonsize=zoomlevel+2;
  if(zoomlevel >=13  && zoomlevel <15 )
      var icoonsize=zoomlevel+2;
  if(zoomlevel >=15  && zoomlevel <17 )
        var icoonsize=zoomlevel+2;
 if(zoomlevel >=17  && zoomlevel <21 )
        var icoonsize=32;
        var lat=coords[0];
        var lon =coords[1];
        var checkmarker=mycon.toLowerCase();
 
        
        if(feature.properties.marker!='0'){
            checkmarker=feature.properties.marker.toLowerCase();
       
            }
     ";
include BASEPATH ."/docs/css/maykers.inc";
include BASEPATH ."/docs/newdynamicstationmarkers.php";
echo
"
      
               window['marker'+1]. setLatLng([coords[0], coords[1] ]).bindPopup(popupText ,{autoClose: false,  autoPan:false, 'className': 'stylePopup' ,    offset: [-100,30], closeButton: true, closeOnClick : true  });;   
                        
                 window['marker'+1].on('onclick', function (e) {  alert(9); closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);}); 
                    //   window['marker'+1].on('click', function(e){
   // map.setView([e.latlng.lat, e.latlng.lng], 15);}); 
                         }
        }
    }
            if (markerzoomed <10) {
          
                  map.removeLayer(markerGroup);
                  markerGroup =new  L.layerGroup().addTo(map);
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

include BASEPATH ."/docs/menu.php";




include BASEPATH ."/docs/mapfooter.php";


 echo "
  </body>
</html>";
