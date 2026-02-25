<?php

echo"<!-- Matomo -->
<!-- Matomo -->
 
<!-- End Matomo Code -->

<!-- End Matomo Code -->";

header('Access-Control-Allow-Origin: http://localhost:8002');

#   }
$ch = curl_init();


$startlon="138.7664826";
$startlat="34.6813938";

$endlat="35.6813938";
$endlon="139.7664826";

include "../config.php";
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

</style>
   <script src=\"css/leaflet.js\"></script>

<script language=\"javascript\">
var mylatitidue=-33.8905644;
var mylong=151.2736583;
alert(mylatitidue);
async function makeRequest () {
    try {
        const response = await fetch('http://botoishi.com.au:8001/api?start='+mylong+','+mylatitidue+'?&end=150.8915779,-34.4254646');
        const data = await response.json();
       
        

       
            
   const json = data['data'];
   const obj = JSON.parse(json)

   route =obj['features'][0]['geometry']['coordinates'];
  alert(route);
showroute(route);
    } catch (error) {
console.log(\"Error:\" + error);
    }
}

makeRequest();
//initialise the map
 var map;
 	var lat=0;
	var lon=0;	
	function init() {
          map = new L.Map('map');                       
        
L.tileLayer('https://maptiles.p.rapidapi.com/en/map/v1/{z}/{x}/{y}.png?rapidapi-key=262c853cedmshc09b042805d4cc9p1bf27cjsnb4f1fc1ca57e', {
attribution: 'OSM',
maxZoom: 100
}).addTo(map);
         var tokyo = new L.LatLng(".$GLOBALS['zoompoint']."); 
         map.setView(tokyo, 6);


}";

echo "
let route;
let routedarray=[];
var request = new XMLHttpRequest();

function  showroute(route)
{

    
    var arrayLength = route.length;
    route.forEach(function (item, index) {
    


    var temparray=[item[1],item[0]];  
 
    routedarray.push(temparray);  
  });



  
 var aroutedarray=[[34.681921,138.768397],[34.744982,138.772729,]]
        
var akitapointList =routedarray;


var akitapolyline = new L.Polyline(akitapointList, {
color: '#ed2100',
weight: 5,
opacity: 0.9,
smoothFactor: 1
});





akitapolyline.addTo(map);

}




//;


</script>

<body onLoad=\"javascript:init();\">
<center>
 <table border =1 width=95% height=75% ><tr><td>  <div id=\"map\" style=\"height: 83vh;\"></div></td></tr></table>";
echo "<p id=\"locationmap\"></p>
</body";



