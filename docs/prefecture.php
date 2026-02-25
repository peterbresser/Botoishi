<?php

include $_SERVER['DOCUMENT_ROOT'] . "/header.php";



echo "  


    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\" crossorigin=\"\"/>
    <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\" integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\" crossorigin=\"\"></script>

	<style>


.info { padding: 6px 8px; font: 14px/16px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 15px rgba(0,0,0,0.2); border-radius: 5px; } .info h4 { margin: 0 0 5px; color: #777; }
.legend { text-align: left; line-height: 18px; color: #555; } .legend i { width: 18px; height: 18px; float: left; margin-right: 8px; opacity: 0.7; }</style></style>
	</style>
	";


 echo "
<div id='map'></div>

<script type=\"text/javascript\" src=\"japan_prefectures.geojson\"></script>

<script type=\"text/javascript\">
 function init() {

var tokyo = new L.LatLng(" . $GLOBALS['zoompoint'] . ");
            map.setView(tokyo,7); 

	// control that shows state info on hover
	const info = L.control();

	info.onAdd = function (map) {
		this._div = L.DomUtil.create('div', 'info');
		this.update();
		return this._div;
	};

	info.update = function (props) {
	let jsObject =props;
     var  PREFECTURE ='';
     if(typeof jsObject !=\"undefined\"){
      var  PREFECTURE =(jsObject['nam']);
 
      this._div.innerHTML = '<h4>Japan Prefectures</h4>' +PREFECTURE;
        }
        else{
        
            this._div.innerHTML = '<h4>Japan Prefectures</h4>';
        }
	};

	info.addTo(map);

 
	// get color depending on population density value
	function getColor(d) {
		return  '';
	}

	function style(feature) {
		return {
			weight:0 ,
        opacity: 1.0,
        color: 'black',
        dashArray: '',
        fillOpacity:0
		};
	}

	function highlightFeature(e) {
		const layer = e.target;

		layer.setStyle({
			weight: 2,
			color: 'green',	  
			dashArray: '',
			fillOpacity:0
		});

		layer.bringToFront();

		info.update(layer.feature.properties);
	}

 
	const geojson = L.geoJson(statesData, {
		style,
		onEachFeature
	}).addTo(map);

	function resetHighlight(e) {
		geojson.resetStyle(e.target);
		info.update();
	}

	function zoomToFeature(e) {
		map.fitBounds(e.target.getBounds());
	}

	function onEachFeature(feature, layer) {
		layer.on({
		mouseover: highlightFeature,
			click: highlightFeature,
			mouseout: resetHighlight
		});
	}

	map.attributionControl.addAttribution('');


	const legend = L.control({position: 'bottomright'});

	legend.onAdd = function (map) {
 
		const div = L.DomUtil.create('div', 'info legend');
		const grades = [0, 10, 20, 50, 100, 200, 500, 1000];
		const labels = [];
		let from, to;

		

		div.innerHTML =  '<a href=\'fullmap.php?show=location\' title=\'Show Location\'><img src=images/findme.png></a><br><a href=\'prefecture.php?show=prefectures\' title=\'Show Prefecture\'><img src=images/prefecturemap.png></a><br>';
		return div;
	};

	legend.addTo(map);

";

$starlat='';
$starlon='';
echo "
    
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
   
              result = markers.map(num => {
 
    
                  var lat = num[0];
                  var lon = num[1];
                  var markerLocation = new L.LatLng(lat,lon);
                  var mycon =num[4];
                  pointToCheck= L.latLng(lat,lon);
                  var  popupText=num[2]+num[3];
                  if(map.getBounds().contains(pointToCheck)){

                      window['marker'+1]=new L.Marker([lat,lon]);   
var icoonsize=markerzoomed+5;
if(markerzoomed >16)
    icoonsize=28;";
include BASEPATH ."/docs/css/maykers.inc";
include BASEPATH ."/docs/dynamicmarkers.php";
echo " window['marker'+1]. setLatLng([lat,lon]).bindPopup(popupText ,{autoClose: false,  autoPan:false, 'className': 'stylePopup' ,    offset: [-100,30], closeButton: true, closeOnClick : true  });;   
                        
                         window['marker'+1].on('onclick', function (e) {   closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);});    
     
                   
                   
                     }
              });
             }

          if (markerzoomed <6) {

              map.removeLayer(markerGroup);
              markerGroup =new  L.layerGroup().addTo(map);
          }

      });
 
}

</script>";

include BASEPATH . "/docs/menu.php";


include BASEPATH ."/docs/mapfooter.php";



include BASEPATH ."/docs/footer.php";




