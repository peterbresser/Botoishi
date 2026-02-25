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
$GLOBALS['NOW']=strtotime("now");

    if(isset($_POST['id'])) {
        $query = mysqli_query($japansql, "select  *  from locations where id=" . $_POST['id'] . "  ");
        if($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $endlat=$result['latitude'];
            $endlon=$result['longitude'];
             $getmykarker=$result['marker'];
             $marketdata=$result['location_name'];
        }
    }

    echo "map.setView([".$endlat.",".$endlon."],15);
    \n\n



    let marker,circle,zoomed;
    let mylatitude,mylongitude ;
    let route;
    let foundroute=0;
    let intialroute=[];
    let routedarray=[];    
    
    var request = new XMLHttpRequest();
     navigator.geolocation.watchPosition(success,error);
     
         function success(position) {  
             const latitiude=position.coords.latitude;
             const longitude=position.coords.longitude;
             const accuracy=position.coords.accuracy;
                mylatitude= latitiude;
                mylongitude= longitude;
             
               if(marker){
                map.removeLayer(marker);
                 map.removeLayer(circle);
             
             }
                          
              marker=L.marker([latitiude, longitude]).addTo(map);
              circle = L.circle([latitiude, longitude], { radius:accuracy }).addTo(map);
     
             if(!zoomed){
                    zoomed=map.fitBounds(circle.getBounds());
            }
             
		                map.setView([latitiude, longitude],12);

         
         
   
 
var akitapolyline = new L.Polyline(routedarray, {
color: '#ed2100',
weight: 5,
opacity: 0.9,
smoothFactor: 1
});
 
 akitapolyline.addTo(map);
 var marker;
 filename ='notwhathefuck';
 highlightFeature('in');
var markerLocation = new L.LatLng(".$endlat.",".$endlon.");
 
             
}
     createRoute();
 
 async function createRoute () {
 
    try {
  
        const response = await fetch('https://botoishi.com.au:5001/api?start='+mylongitude+','+mylatitude+'?&end=$endlon,$endlat');
        const data = await response.json();    
        const json = data['data'];
        const obj = JSON.parse(json)
        routedarray=[];
        intialroute=[];
        
        
        var route =obj['features'][0]['geometry']['coordinates'];
        var temparray=[];
        var arrayLength = route.length;
        var arraycount=0;
        route.forEach(function (item, index) {
             temparray=[item[1],item[0]];  
             routedarray.push(temparray);
                 arraycount=arraycount+1;
                        
          });
        
         if(intialroute.length==0){
             intialroute =routedarray;
             
  
         var lastelemt =arraycount-1;
        var  routedistance= getDistanceFromLatLonInKm(routedarray[0][0],routedarray[0][1],routedarray[lastelemt][0],routedarray[lastelemt][1]);
          if(routedistance>25){
                     var answer = window.confirm(\"Route Distance exceeds 25 KM?\");
                    if (answer) {
                       window.location.href = \"https://botoishi.com.au/wollongong.php\";
                    }
                else {
                    window.location.href = \"https://botoishi.com.au/wollongong.php\";
                }
             }
          }
                 
                 
                 
                } catch (error) {
        alert('Waiting for route to load');
    }
             
             showroute(routedarray); 
}


function  showroute(routedarray)
{
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
function error(error) {        
              switch(error.code) {
              case error.PERMISSION_DENIED:
                    alert('User denied the request for Geolocation.');
                    break;
                case error.TIMEOUT:
                    alert('The request to get user location timed out.');
                    break;
                case error.UNKNOWN_ERROR:
                    alert('An unknown error occurred.');
                    break;
            }
        }
         

    
    
    
    
    
   
 

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
elseif($getmykarker == 'building')
    echo "   marker = new L.Marker(markerLocation, {icon:BuildingIcon} )";
elseif($getmykarker == 'onsen')
    echo "   marker = new L.Marker(markerLocation, {icon:OnsenIcon} )";
elseif($getmykarker == 'ryokan')
    echo "   marker = new L.Marker(markerLocation, {icon:RyokanIcon} )";
elseif($getmykarker == 'walk')
    echo "   marker = new L.Marker(markerLocation, {icon:WalkIcon} )";





else
    echo "   marker = new L.Marker(markerLocation, {icon:markerIcon} )";

echo "
          
   
            var popupText = \"$marketdata\";
       
             var mycon = '';                     
              map.addLayer(marker);
             var customOptions = {
                    'maxWidth': '700',
                    'className': 'custom',
                    closeButton: true,
                    closeOnClick : true,
                    autoClose: true
            }
        marker.bindPopup(popupText,customOptions);
        marker.on('click', function(e){ 
        map.setView([e.latlng.lat, e.latlng.lng],7);
});
 
      
            
 
 
 
 
}

   
";



include BASEPATH ."/docs/css/maykers.inc";


echo "
</script>

</head>
<body  >
<center>
 <table border =1 width=95% height=75% ><tr><td>  <div id=\"map\" style=\"height: 83vh;\"></div></td></tr></table>";


echo "<p id=\"locationmap\"></p>
 
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";



include BASEPATH ."/docs/footer.php";
