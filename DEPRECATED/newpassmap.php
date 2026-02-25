<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";
$GLOBALS['mypassroute']='';

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
</style>
   <script src=\"css/leaflet.js\"></script>
    <script language=\"javascript\" src =\"js/statiobslst.js\"></script>   
   <script language=\"javascript\">

 function init(){
 
    var tokyo = new L.LatLng(" . $GLOBALS['zoompoint'] . ");
            map.setView(tokyo,9);
            console.log(99999999);  
var results = [];
var searchField = 7;
var searchVal = \"JR Joetsu Line\";
for (var i=0 ; i < markers.length ; i++)
{
    if (markers[i][7] == searchVal) {
        console.log(markers[i][7]);
        results.push([markers[i][0],markers[i][1]]);
    }
 }
 
    console.log(results); 
    
    var sanyopolyline = new L.Polyline(results, {
color: '#9d5053',
weight: 5,
opacity: 0.9,
smoothFactor: 1

});

sanyopolyline.addTo(map);
}
        </script> 
        
        </head>
<body onLoad=\"javascript:init();\">
<center><br>
       
 <table border =1 width=95% height=75% ><tr><td>  <div id=\"map\" style=\"height: 83vh;\"></div></td></tr></table>";
echo "<p id=\"locationmap\"></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";



include BASEPATH ."/docs/mapfooter.php";



include BASEPATH ."/docs/footer.php";

