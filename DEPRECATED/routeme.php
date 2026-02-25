<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";
$_POST['id']=205;

echo "

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
 .custom-popup .leaflet-popup-content-wrapper {
      background: #2c3e50;
      color: #fff;
      font-size: 16px;
      line-height: 24px;
      border-radius: 0px;
    }
    .custom-popup .leaflet-popup-content-wrapper a {
      color: rgba(255, 255, 255, 0.1);
    }
    .custom-popup .leaflet-popup-tip-container {
      width: 30px;
      height: 15px;
    }
    .custom-popup .leaflet-popup-tip {
      background: transparent;
      border: none;
      box-shadow: none;
    }
    /* css to customize Leaflet default styles  */
    .custom .leaflet-popup-tip,
    .custom .leaflet-popup-content-wrapper {
      background: #0b3654;
      color: #ffffff;
    }
</style>
 <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"  integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


 <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>   ";
 $display="";
$description='';
$endlat='';
$endlon='';
$location_name='';
$GLOBALS['NOW']=strtotime("now");

if(isset($_POST['id'])) {
    $query = mysqli_query($japansql, "select  *  from locations where id=" . $_POST['id'] . "  ");
    if($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
        $endlat=$result['latitude'];
        $endlon=$result['longitude'];
        $getmykarker=$result['marker'];
        $location_name=$result['location_name'];
        $description=$result['description'];
        $directions="".$result['location_name']."<br>".$description."";
        $website="<a href =\"".$result['web_page']."\"   class=\"btn btn-outline-light text-info  btn-sm\"  target =_blank role=\"button\"> Web Page </a><br><br>";
          $display="<br><table width=100%> <tr><td>". $directions."</td><td><tr><tr></tr> </td> <td>".$website."</td><td> </td></tr></table>";

    }
}


echo "
      
   <script language=\"javascript\">
     let marker,circle,zoomed;
    let mylatitude,mylongitude ;
    let route;
    let intialroute=[];
     
    let routedarray=[];
    let currentlat;
    currentlat=mylatitude;
    let currentroute=[];
    var akitapointList=[];
    var intial_lat=0;
    var intial_lon=0;
    var changeflag=0;
  var markerLocation = new L.LatLng('-34.4491483','150.8235785');
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
              //detect a change in postion 
              if(!intial_lat){
                    intial_lat=latitiude;
                    intial_lon=longitude;
                    makeRequest(mylatitude,mylongitude);
        
                 }
               if(marker){
                map.removeLayer(marker);
                 map.removeLayer(circle);
             
             }
             map.setView([latitiude, longitude],15);
              marker=L.marker([latitiude, longitude]).addTo(map);
              circle = L.circle([latitiude, longitude], { radius:accuracy }).addTo(map);
     
             if(!zoomed){
                    zoomed=map.fitBounds(circle.getBounds());
            }
             
		    map.setView([latitiude, longitude],15);
		 
		   // calroute=checkposition(mylatitude,mylongitude,intialroute);
		    
            
         }
         
       

         
  async function makeRequest () {
 
 
 try {
  
      const response = await fetch('https://routing.botoishi.com.au/route?json={\"locations\":[{\"lat\":'+mylatitude+',\"lon\":'+mylongitude+'},{\"lat\":".$endlat.",\"lon\":".$endlon."}],\"costing\":\"auto\"}');

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
          if(routedistance>50){
                     var answer = window.confirm(\"Route Distance exceeds 50 KM?\");
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

function checkposition(mylatitude,mylongitude){


   if((routedarray.length)>0){
    for (let i = 0;i<(routedarray.length -1)  ; i++) {
 
var next=i+1;


 


//console.log(routedarray[i][0]+'  '+routedarray[i][1]+'  '+routedarray[next][0]+'  '+routedarray[next][1]);

var  routedistance= getDistanceFromLatLonInKm(routedarray[i][0],routedarray[i][1],routedarray[next][0],routedarray[next][1]);
routedistance =routedistance.toFixed(5);
///var routebearing=bearings(routedarray[i][0],routedarray[i][1],routedarray[next][0],routedarray[next][1]);
var routebearing=bearings( routedarray[i][0],routedarray[i][1],routedarray[next][0],routedarray[next][1]);
var travelbearing=bearings(routedarray[next][0],routedarray[next][1],mylatitude,mylongitude);

console.log(travelbearing+'  '+(routebearing));


//calculate the moved distance  
var  moveddistance = getDistanceFromLatLonInKm(routedarray[i][0],routedarray[i][1],mylatitude,mylongitude);
 moveddistance =moveddistance.toFixed(5);
  
 // calculate distance between position  and node0
var  distancetomove= getDistanceFromLatLonInKm(mylatitude,mylongitude,routedarray[next][0],routedarray[next][1]);
distancetomove =distancetomove.toFixed(5);

//calulate the estimated distance of route 
var calculatedisance=parseFloat(moveddistance) + parseFloat( distancetomove);
//console.log(routedarray[i][0]+'  '+routedarray[i][1]+'  '+ routedarray[next][0]+'  '+ routedarray[next][1]+'  '+ mylatitude+'  '+  mylongitude);
console.log((moveddistance + distancetomove)+'  '+routedistance+'   '+calculatedisance +'  '+routedistance);

//calulate the estimated distance of route 
var calculatedisance=parseFloat(moveddistance) + parseFloat( distancetomove);

 //if chnage  is more than two , moved off route , allow for vagriancies of the route
  if( changeflag==2){
    alert('change route 2');
    aroutedarray=[];
    changeflag=0;
    makeRequest();
    return 1;
 }
 
 if(calculatedisance <= routedistance){
             changeflag=0;
                return 1; 
                }
  if(calculatedisance > routedistance){
             changeflag=changeflag+1
                return 1; 
                }
 
  if((travelbearing-routebearing)>30){
                if(changeflag<2)
                         changeflag=changeflag+1;
   
                      //if chnage  is more than two , moved off route , allow for vagriancies of the route   
                if( changeflag==2){
    alert('change route 1 ');
    aroutedarray=[];
    changeflag=0;
    makeRequest();
    return 1;
 }     
               
                return 1; 
                }
// if we moved back upo the route  and  the esitmated route disnce is greater  
    if((calculatedisance > routedistance) ){
            var variation=parseFloat(calculatedisance)-parseFloat(routedistance);
             console.log('THERE');
             changeflag=0;
              aroutedarray.shift();
                showroute(aroutedarray);
             //i++;
            return 1;
                 
                }            
                }
        }
    }
    
    
     function calculateBearing(lat1, lng1, lat2, lng2) {
     var longdistance=lng2-lng1;
             if(longdistance<0)
        longdistance=longdistance*-1;
     
                const y = Math.sin((longdistance) * (Math.PI / 180)) * Math.cos(lat2 * (Math.PI / 180));
                const x =
                    Math.cos(lat1 * (Math.PI / 180)) * Math.sin(lat2 * (Math.PI / 180)) -
                    Math.sin(lat1 * (Math.PI / 180)) * Math.cos(lat2 * (Math.PI / 180)) * Math.cos((lng2 - lng1) * (Math.PI / 180));
                let bearing = (Math.atan2(y, x) * 180) / Math.PI;
                return (bearing + 360) % 360;
            }
   function bearings(lat1,lon1,lat2,lon2){
   
 const y = Math.sin(lon2-lon1) * Math.cos(lat2);
const x = Math.cos(lat1)*Math.sin(lat2) -
          Math.sin(lat1)*Math.cos(lat2)*Math.cos(lon2-lon1);
const tempxy = Math.atan2(y, x);
const bearings = (tempxy*180/Math.PI + 360) % 360; // in degrees
return  bearings;
   }
 
function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
  var R = 6371; // Radius of the earth in km
  var dLat = deg2rad(lat2-lat1);  // deg2rad below
  var dLon = deg2rad(lon2-lon1); 
  var a = 
    Math.sin(dLat/2) * Math.sin(dLat/2) +
    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
    Math.sin(dLon/2) * Math.sin(dLon/2)
    ; 
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
  var d = R * c; // Distance in km
  return d;
}

function deg2rad(deg) {
  return deg * (Math.PI/180)
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
 
var akitapolyline = new L.Polyline(routedarray, {
color: '#ed2100',
weight: 5,
opacity: 0.9,
smoothFactor: 1
});
 
 akitapolyline.addTo(map);
 var marker;

 
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
            map.addLayer(marker); 
            var popupText='".$display."';
 
       
          var customOptions = {
  'maxWidth': '200',
  'className': 'custom',
  closeButton: true,
  closeOnClick : true,
  autoClose: true
}
             marker.bindPopup(popupText,customOptions);
           //  marker.bindPopup(popupText);
      marker.on('click', function(e){
    map.setView([e.latlng.lat, e.latlng.lng],17);
});
             
  myroute=routedarray;
 
 return routedarray;
 
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
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";



include BASEPATH ."/docs/mapfooter.php";
