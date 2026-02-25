<?php


include $_SERVER['DOCUMENT_ROOT'] . '/../config.php';
include BASEPATH ."/japan.inc";

include BASEPATH ."/docs/css/maykers.inc";
$longtitude='';
$latitude='';
$getmykarker='';
$endlat='';
$endlon='';
$marketdata='';

    if(isset($_GET['id'])) {
        $query = mysqli_query($japansql, "select  *  from locations where id=" . $_GET['id'] . "  ");
        if($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $endlat=$result['latitude'];
            $endlon=$result['longitude'];
             $getmykarker=$result['marker'];
             $marketdata=$result['location_name'];
        }
    }


    echo "map.setView([".$endlat.",".$endlon."],12);
    \n\n

    let marker,circle,zoomed;
    let mylatitude,mylongitude ;
    let route;
    let currentlat;
    currentlat=mylatitude;
    let currentroute=[];
    var akitapointList=[];
  
var akitapolyline = [];
akitapolyline = new L.Polyline(akitapointList, {
color: '#ed2100',
weight: 5,
opacity: 0.9,
smoothFactor: 1
});
;
var request = new XMLHttpRequest();
     navigator.geolocation.watchPosition(success,error);
     
     
         function success(position) {
     
     
             const latitiude=position.coords.latitude;
             const longitude=position.coords.longitude;
             const accuracy=position.coords.accuracy;
                 mylatitude =latitiude;
                 mylongitude=longitude;
               if(marker){
                map.removeLayer(marker);
                 map.removeLayer(circle);
             
             }
                          
              marker=L.marker([latitiude, longitude]).addTo(map);
              circle = L.circle([latitiude, longitude], { radius:accuracy }).addTo(map);
     
             if(!zoomed){
                    zoomed=map.fitBounds(circle.getBounds());
            }
             
		map.setView([latitiude, longitude]);
		makeRequest();
  
         }
         
         
         
         
 async function makeRequest () {
 
 
 
    try {
        
   
   
   
   
        const response = await fetch('https://botoishi.com.au:5001/api?start='+mylongitude+','+mylatitude+'?&end=$endlon,$endlat');
        const data = await response.json();    
      

        const json = data['data'];
        const obj = JSON.parse(json)
       route =obj['features'][0]['geometry']['coordinates'];
        showroute(route);
     } catch (error) {
        alert('Waiting for route to load');

    }
}
    
	  function error(error) {
             
              switch(error.code) {
    case error.PERMISSION_DENIED:
      alert('User denied the request for Geolocation.');
      break;
    //case error.POSITION_UNAVAILABLE:
      alert('Location information is unavailable.');
      break;
    case error.TIMEOUT:
      alert('The request to get user location timed out.');
      break;
    case error.UNKNOWN_ERROR:
       alert('An unknown error occurred.');
      break;
  }
         }
         
       
 
";




echo "

 
// var temparray=[mylatitude,mylongitude];  
 akitapointList =[];
temparray=[];





function  showroute(route)
{
    routedarray=[];
    var arrayLength = route.length;
    route.forEach(function (item, index) {
    var temparray=[item[1],item[0]];  
     routedarray.push(temparray);  
  });

 console.log(routedarray.length);
  m=map;
  for(i in m._layers) {
        if(m._layers[i]._path != undefined) {
            try {
                m.removeLayer(m._layers[i]);
            }
            catch(e) {
                console.log(\"problem with \" + e + m._layers[i]);
            }
        }
    }
 
 
var akitapolyline = new L.Polyline(routedarray, {
color: '#ed2100',
weight: 5,
opacity: 0.9,
smoothFactor: 1
});
 
    
             
        
 
 akitapolyline.addTo(map);
 
var marker;

var markerLocation = new L.LatLng(".$endlat.",".$endlon.");
";


if($getmykarker == 'mymarker')
    echo "   marker = new L.Marker(markerLocation, {icon:markerIcon} );";
elseif($getmykarker == 'dormyinn')
    echo "   marker = new L.Marker(markerLocation, {icon:DormyInnIcon} );";
elseif($getmykarker == 'toyokoinn')
    echo "   marker = new L.Marker(markerLocation, {icon:toyokoInnIcon} ); ";
elseif($getmykarker == 'routeinn')
    echo "   marker = new L.Marker(markerLocation, {icon:routeInnIcon} ); ";
elseif($getmykarker == 'restaurant')
    echo "   marker = new L.Marker(markerLocation, {icon:RestaurantIcon} ); ";
elseif($getmykarker == 'superhotel')
    echo "   marker = new L.Marker(markerLocation, {icon:superHotelIcon} ); ";
elseif($getmykarker == 'palace')
    echo "   marker = new L.Marker(markerLocation, {icon:PalaceIcon} ); ";
elseif($getmykarker == 'ruins')
    echo "   marker = new L.Marker(markerLocation, {icon:RuinsIcon} ); ";
elseif($getmykarker == 'monument')
    echo "   marker = new L.Marker(markerLocation, {icon:MonumentIcon} );   ";
elseif($getmykarker == 'hotel')
    echo "   marker = new L.Marker(markerLocation, {icon:HotelIcon} ); ";
elseif($getmykarker == 'ryokan')
    echo "   marker = new L.Marker(markerLocation, {icon:RyokanIcon} );  ";
elseif($getmykarker == 'station')
    echo "   marker = new L.Marker(markerLocation, {icon:StationIcon} ); ";
elseif($getmykarker == 'yamagata')
    echo "   marker = new L.Marker(markerLocation, {icon:YamagataStationIcon} ); ";

elseif($getmykarker == 'tokaido')
    echo "   marker = new L.Marker(markerLocation, {icon:TokaidoStationIcon} )";

elseif($getmykarker == 'candeohotel')
    echo "   marker = new L.Marker(markerLocation, {icon:CandeoIcon} )";

elseif($getmykarker == 'sanyo')
    echo "   marker = new L.Marker(markerLocation, {icon:SanyoStationIcon} )";
elseif($getmykarker == 'bar')
    echo "   marker = new L.Marker(markerLocation, {icon:BarIcon} )";

elseif($getmykarker == 'tohoku')
    echo "   marker = new L.Marker(markerLocation, {icon:TohokuStationIcon} )";
elseif($getmykarker == 'walk')
    echo "   marker = new L.Marker(markerLocation, {icon:WalkIcon} )";

elseif($getmykarker == 'akita')
    echo "   marker = new L.Marker(markerLocation, {icon:AkitaStationIcon} )";

elseif($getmykarker == 'hokkaido')
    echo "   marker = new L.Marker(markerLocation, {icon:HokkaidoStationIcon} )";

elseif($getmykarker == 'horruriku')
    echo "   marker = new L.Marker(markerLocation, {icon:HokurikuStationIcon} )";

elseif($getmykarker == 'notes')
    echo "   marker = new L.Marker(markerLocation, {icon:NotesIcon} )";

elseif($getmykarker == 'kyushu')
    echo "   marker = new L.Marker(markerLocation, {icon:KyushuStationIcon} )";
elseif($getmykarker == 'joetsu')
    echo "   marker = new L.Marker(markerLocation, {icon:JoetsuStationIcon} )";
elseif($getmykarker == 'candeo')
    echo "   marker = new L.Marker(markerLocation, {icon:CandeoIcon} )";
elseif($getmykarker == 'sake')
    echo "   marker = new L.Marker(markerLocation, {icon:SakeIcon} )";


else
    echo "   marker = new L.Marker(markerLocation, {icon:markerIcon} )";

echo "
            map.addLayer(marker); var popupText = '".$marketdata."' ;
       
             marker.bindPopup(popupText);
 

 
 
}

 

";


