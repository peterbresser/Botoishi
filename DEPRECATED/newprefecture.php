<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";
$GLOBALS['mypassroute']='';
$prefecturelcordinattes='';
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

$_GET['prefecture']=1;

echo"   </style><script src=\"css/leaflet.js\"></script>
   <script language=\"javascript\">
function mypopup(){
 


}
	function init() {
	
	";
include BASEPATH ."/docs/myjsfunctions.js";
if(isset($_GET['lat'])){

    echo "
var tokyo = new L.LatLng(" .$_GET['lat'].",".$_GET['lon'] ."); 
	 map.setView(tokyo,8);
";

}
else {
    echo "
var tokyo = new L.LatLng(" . $GLOBALS['zoompoint'] . "); 
	 map.setView(tokyo,6);
";
}
if(isset($_GET['prefecture'])) {


    $starlat='';
    $starlon='';
    echo "
     prefectureFeature('".$_GET['prefecture']."');\n
 var markers = [";

    $query=mysqli_query($japansql ,"select   id, location_name, latitude, longitude, description, web_page, marker,island,type from locations  
where type !='station'  and type !='hotel'   and type !='private'   and type !='information'  and active =1 and latitude is not NULL");

    while ($result = mysqli_fetch_assoc($query)) {
        $startlat=$result['latitude'];
        $startlon=ltrim(trim($result['longitude']));
        $result['location_name']=ucwords(strtolower($result['location_name']));
        $directions="<form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value =".$result['id']." ><input type=hidden name=timestamp value=".strtotime("now")." ><input type=hidden name=longitude value =".$result['longitude']." ><input type=hidden name=latitude value =".$result['latitude']." ><input type =hidden name=id value =".$result['id']." ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\"><img src =images/direct.png width=22></button></form>";
        $website="<a href =\'".$result['web_page']."\' target =_blank title=\'WebSite\' ><img src =images/link.png width=22></a>";
        $diplay="<table width=100%> <tr><td>". $directions."</td><td> </td> <td>".$website."</td><td> </td></tr></table>";
        $result['description']=str_replace("Japan","",$result['description']);
        $result['description']=str_replace("japan","",$result['description']);
        $result['description']=str_replace(",","<br>",$result['description']);
        if(strlen($data)>0)
            $data.= ",[".$result['latitude'].",".$result['longitude'].",'<b>".$result['location_name']."</b>','". $diplay."','".$result['marker']."','".$result['traintype']."'  ]";
        else
            $data=   "[".$result['latitude'].",".$result['longitude'].",'<b>".$result['location_name']."</b>','". $diplay."','".$result['marker']."','".$result['traintype']."'  ]";

    }
    echo $data;
    echo "];\n";



}

$jsonString = file_get_contents('japan_prefectures.geojson');
$data = json_decode($jsonString, true);

for($i=0;$i<count($data['features']);$i++){
    $prefecturel=$data['features'][$i]['id']."";
    if(count($data['features'][$i]['geometry']['coordinates'])>1){
        $cords='';
        $cords.= "[";
        for($r=0;$r<count($data['features'][$i]['geometry']['coordinates']);$r++){
            $geocord=$data['features'][$i]['geometry']['coordinates'][$r];

            foreach($geocord as $geoid => $resultln) {
                $nextcord=0;
                $cords.= "[";

                foreach($resultln as $myis=> $latlong){
                    if (strlen($cords)>3){
                        if($nextcord==0)
                            $cords.= "[" . $latlong[1] . "," . $latlong[0] . "]";
                        else
                            $cords.= ",[" . $latlong[1] . "," . $latlong[0] . "]";
                    }
                    else
                        $cords.= "[" . $latlong[1] . "," . $latlong[0] . "]";

                    $prefecturelat= $latlong[1];
                    $prefecturelon=$latlong[0];
                    $geocount++;
                    $nextcord++;
                }
                $nextcord++;
                $cords.= "],";
            }
        }
        $cords=substr($cords,0,-1)."];";
        echo "var ".$prefecturel."msp =".$cords."";
        echo "\n";
        echo "var  polygon" .$prefecturel. " = L.polygon(".$prefecturel."msp, {color: '#5ab46b',fillOpacity:.3, weight:2,opacity:.5,stroke:true}).addTo(map);";
        echo "\n";
        ##               echo $cords."\n";
        $cords='';

        echo " 
 polygon" .$prefecturel. ".on('mouseover', function(e) {
    var layer = e.target;
   
       mouseover:  prefectureFeature('".$prefecturel."');
    layer.setStyle({
        opacity: 1,
        weight:.5,
        stroke:true
    });
});
         


polygon" .$prefecturel. ".on('click', function(e) {

 	var layer = e.target;
     click:  prefectureFeature('".$prefecturel."');
    layer.setStyle({
        color: '#CCCCCC',
        weight: .3
        });

});


        polygon" .$prefecturel. ".on('mouseout', function(e) {

            var layer = e.target;
            mouseout: highlightFeature('out');
            layer.setStyle({
        opacity: 0.5,
        weight: 0

    });
});

 polygon" .$prefecturel. ".addTo(map); ";
    }

    else{

        $cords='';


        for($r=0;$r<count($data['features'][$i]['geometry']['coordinates']);$r++){
            $geocord=$data['features'][$i]['geometry']['coordinates'][$r];


            $cords.= "";
            $nextcord=0;
            foreach($geocord as $geoid => $latlong) {
                $cords.= "";



                #        foreach($resultln as $myis=> $latlong){
                if (strlen($cords)>1){
                    if($nextcord==0)
                        $cords.= "[" . $latlong[1] . "," . $latlong[0] . "]";
                    else
                        $cords.= ",[" . $latlong[1] . "," . $latlong[0] . "]";
                }
                else
                    $cords.= "[[" . $latlong[1] . "," . $latlong[0] . "]";

                $nextcord++;
            }

            $cords.= "],";
#}
        }

        $cords=substr($cords,0,-1).";";
        echo "var ".$prefecturel."msp =".$cords."";
        echo "\n";
        echo "var  polygon" .$prefecturel. " = L.polygon(".$prefecturel."msp, {color: '#5ab46b',fillOpacity:.3, weight:2,opacity:.5,stroke:true}).addTo(map);";
        echo "\n";
        ##               echo $cords."\n";
        $cords='';


        echo " 
 polygon" .$prefecturel. ".on('mouseover', function(e) {
    var layer = e.target;
    var myname='line:Akita Shinkansen'
     mouseover:  prefectureFeature('".$prefecturel."');
    layer.setStyle({
        opacity: 10,
        weight: .3


    });
});
 polygon" .$prefecturel. ".on('click', function(e) {
    var layer = e.target;
    click:  prefectureFeature('".$prefecturel."');
    layer.setStyle({
        color: '#CCCCCC',
        weight: .3
        });
});  
 polygon" .$prefecturel. ".addTo(map); 

        polygon" .$prefecturel. ".on('mouseout', function(e) {

            var layer = e.target;
            mouseout: highlightFeature('out');
            layer.setStyle({
        opacity: 0.9,
        weight: 0

    });
});


function newhighlightFeature(e) {
		const layer = e.target;

		layer.setStyle({
			weight: 5,
			color: '#666',
			dashArray: '',
			fillOpacity: 0.7
		});
layer.bringToFront();

		info.update(layer.feature.properties);
	}

 polygon" .$prefecturel. ".addTo(map); 

";


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
    var  markerGroup = L.layerGroup().addTo(map);
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
       if (markerzoomed>6) {
        console.log(markers);
         result = markers.map(num => {
 
                  var lat = num[0];
                  var lon = num[1];
                  var markerLocation = new L.LatLng(lat,lon);
                  var mycon =num[4];
                  pointToCheck= L.latLng(lat,lon);
                  var  popupText=num[2]+num[3];
                  if(map.getBounds().contains(pointToCheck)){
                   
                    window['marker'+1]=new L.Marker([lat,lon]);   ";
include BASEPATH ."/docs/css/maykers.inc";
include BASEPATH ."/docs/dynamicmarkers.php";
echo " window['marker'+1]. setLatLng([lat,lon]).bindPopup(popupText ,{ autoClose: false,  'className': 'stylePopup' ,    offset: [-100,30], closeButton: true, closeOnClick : true  });;   
                        
                         window['marker'+1].on('onclick', function (e) {   closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);});    
                     }
               });
             }
    
        if (markerzoomed <6) {
          
                  map.removeLayer(markerGroup);
                  markerGroup =new  L.layerGroup().addTo(map);
                    }
                    
                      });
";







echo "}</script>
   
</head>
<body onLoad=\"javascript:init();\">
 

<center><br>
        
 <table border =1 width=95% height=75% ><tr><td>  <div id=\"map\" style=\"height: 73vh;\"></div></td></tr></table> <br> 
 
 
 ";
echo "<p id=\"prefecturemap\"></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>
 
";





include BASEPATH ."/docs/footer.php";