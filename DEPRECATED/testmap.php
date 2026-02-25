<?php

include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";

echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <base target=\"_top\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
   <script language=\"javascript\">";


echo " </script>
    <title>Layers Control Tutorial - Leaflet</title>

    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"docs/images/favicon.ico\" />

  <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"  integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


 <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>   
       <script language=\"javascript\" src =\"js/stations.js\"></script> 
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        .leaflet-container {
            height: 800px;
            width: 2000px;
            max-width: 100%;
            max-height: 100%;
        }
    </style>


</head>
<body>

<div id='map'></div>";

include BASEPATH ."/docs/css/newmaykers.inc";
 
echo  "<script>
      var HighLiteIcon= L.icon({
         iconUrl: 'images/bike.png',
         shadowUrl: 'images/bike.png',
         iconSize:    [22,22],
         shadowSize:   [22,22]
                }); 
        const layer1 = L.layerGroup();
        const layer2 = L.layerGroup();  
        const layer3 = L.layerGroup();
        const layer4 = L.layerGroup();
        const layer5 = L.layerGroup();
        const layer6 = L.layerGroup();
    const osm = L.tileLayer('https://tile.openstreetmap.de/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
    });
 

    const map = L.map('map', {
        center: [35.4131226,136.5103287],
        zoom:7,
        renderer: L.canvas(),
        layers: [osm]
    });

    const baseLayers = {
        'OpenStreetMap': osm

    };

    const overlays = {
        'Layer1': layer1,
        'Layer2': layer2,
        'Layer3': layer3,
        'Layer4': layer4,
        'Layer5': layer5,
        'Layer6': layer6
    };

  //  const layerControl = L.control.layers(baseLayers, overlays).addTo(map);



        stationS.features.forEach(function(feature) {
        const coords = feature.geometry.coordinates; 
        var markerid = feature.properties.id;
         var popupText='';
         var linename=feature.properties.line_name;
        if(linename==0)
               linename='';  
          if(feature.properties.visibility ==12){
                  if(feature.properties.marker=='station'){
                      popupText='<center>'+feature.properties.ename+'<br>'+feature.properties.display+'<br>'+linename+'</center>';
                    const markerid = L.marker([coords[0], coords[1]], {icon:StationIcon}).bindPopup(popupText).addTo(layer1);
                 }
            
            }
        
         if(  feature.properties.visibility ==13){
                  if(feature.properties.marker=='station'){
                      popupText='<center>'+feature.properties.ename+'<br>'+feature.properties.display+'<br>'+linename+'</center>';
                    const markerid = L.marker([coords[0], coords[1]], {icon:StationIcon}).bindPopup(popupText).addTo(layer2);
                 }
            
            }
        
                
         if(feature.properties.visibility ==13 ){
                  if(feature.properties.marker=='station'){
                      popupText='<center>'+feature.properties.ename+'<br>'+feature.properties.display+'<br>'+linename+'</center>';
                    const markerid = L.marker([coords[0], coords[1]], {icon:StationIcon}).bindPopup(popupText).addTo(layer3);
                 }
            
            }
        
                 if( feature.properties.visibility ==14 ){
                  if(feature.properties.marker=='station'){
                      popupText='<center>'+feature.properties.ename+'<br>'+feature.properties.display+'<br>'+linename+'</center>';
                    const markerid = L.marker([coords[0], coords[1]], {icon:StationIcon}).bindPopup(popupText).addTo(layer4);
                 }
            
            }
        
      
     
               if (feature.properties.visibility ==15){
                  if(feature.properties.marker=='station'){
                      popupText='<center>'+feature.properties.ename+'<br>'+feature.properties.display+'<br>'+linename+'</center>';
                    const markerid = L.marker([coords[0], coords[1]], {icon:StationIcon}).bindPopup(popupText).addTo(layer5);
                 }
            
            }
                            if (feature.properties.visibility ==16){
                  if(feature.properties.marker=='station'){
                      popupText='<center>'+feature.properties.ename+'<br>'+feature.properties.display+'<br>'+linename+'</center>';
                    const markerid = L.marker([coords[0], coords[1]], {icon:StationIcon}).bindPopup(popupText).addTo(layer6);
                 }
            
            }  
         
            });
     
    ";


echo "




 

 
    
    var  zoomlevel =0;;
     map . on('moveend', function (e) { 
     zoomlevel = map . getZoom();
    console.log(zoomlevel);
    if(zoomlevel<11){
         map.removeLayer(layer1);
    }
       if(zoomlevel>=11){
         map.addLayer(layer1); 
           map.addLayer(layer2); 
               map.addLayer(layer6); 
     }
      if(zoomlevel<11){
         map.removeLayer(layer2);
    }
       if(zoomlevel>=11){
         map.addLayer(layer2); 
    }  
 
    });
 map.whenReady(function(e) {
  
     });
     
     
     
  //  layerControl.addBaseLayer(openTopoMap, 'OpenTopoMap');
   // layerControl.addOverlay(parks, 'Parks');
</script>



</body>
</html>
";