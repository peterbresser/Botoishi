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


    echo "map.setView([".$endlat.",".$endlon."],12);
    \n\n



    let marker,circle,zoomed;
    let mylatitude,mylongitude ;
    let route;
    let intialroute=[];
     
    let aroutedarray=[];
    let currentlat;
    currentlat=mylatitude;
    let currentroute=[];
    var akitapointList=[];
    var intial_lat=0;
    var intial_lon=0;
    var changeflag=0;
    
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
                          
              marker=L.marker([latitiude, longitude]).addTo(map);
              circle = L.circle([latitiude, longitude], { radius:accuracy }).addTo(map);
     
             if(!zoomed){
                    zoomed=map.fitBounds(circle.getBounds());
            }
             
		    map.setView([latitiude, longitude]);
		 
	        if(intialroute[0]){
	          	            var firstpos=intialroute[0];
		        var firstlat=firstpos[0];
                var firstlon=firstpos[1];
                var positiontosrat=(getDistanceFromLatLonInKm(intial_lat,intial_lon,firstlat,firstlon)*100);
            
             }
             
             
             if(positiontosrat>.06){
		            calroute=checkposition(mylatitude,mylongitude,intialroute);
		    }
            
         }
         
         

         
  async function makeRequest () {

    try {
     const response = await fetch('https://routing.botoishi.com.au/route?json={\"locations\":[{\"lat\":'+mylatitude+',\"lon\":'+mylongitude+'},{\"lat\":".$endlat.",\"lon\":".$endlon."}],\"costing\":\"auto\"}');

  //    const response = await fetch('https://botoishi.com.au:5001/api?slat='+mylatitude+'&slon='+mylongitude+'&elat=".$endlat."&elon=".$endlon."');
        const repdata = await response.json();
//      const javascriptObject = JSON.parse(repdata);

        if(repdata['error']){
             alert(javascriptObject['error']);
             return 0;
               }

         const json =repdata['trip']['legs'][0]['shape'];
         var returnroute=decodeshape(json);
        
        //console.log(returnroute); 
        routelength= repdata['trip']['legs'][0]['summary']['length']
 
         showdistance(routelength);



        

        aroutedarray=[];
        intialroute=[];
       var route =returnroute; 
       
       //var route =obj['features'][0]['geometry']['coordinates'];
     
        
        
        var temparray=[];
        var arrayLength = route.length;
        route.forEach(function (item, index) {
                temparray=[item[0],item[1]];  
                aroutedarray.push(temparray);  
                if(intialroute.length==0){
                    intialroute =aroutedarray;
                    }
            });
            } catch (error) {
        alert('Waiting for route to load');
    }
  
     showroute(aroutedarray); 
   
           
}


 function decodeshape(str){
 
   var precision=6
    var index = 0,
        lat = 0,
        lng = 0,
        coordinates = [],
        shift = 0,
        result = 0,
        byte = null,
        latitude_change,
        longitude_change,
        factor = Math.pow(10, precision || 6);
    while (index < str.length) 
    {
        byte = null;
        shift = 0;
        result = 0;
        do 
        {
            byte = str.charCodeAt(index++) - 63;
            result |= (byte & 0x1f) << shift;
            shift += 5;
        } while (byte >= 0x20);
        latitude_change = ((result & 1) ? ~(result >> 1) : (result >> 1));
        shift = result = 0;
        do 
        {
            byte = str.charCodeAt(index++) - 63;
            result |= (byte & 0x1f) << shift;
            shift += 5;
        } while (byte >= 0x20);
        longitude_change = ((result & 1) ? ~(result >> 1) : (result >> 1));
        lat += latitude_change;
        lng += longitude_change;
        coordinates.push([lat / factor, lng / factor]);
    }
    return coordinates;
}

function checkposition(mylatitude,mylongitude,aroutedarray){

   if((aroutedarray.length)>0){
    for (let i = 0;i<(aroutedarray.length -1)  ; i++) {
 
var next=i+1;





var  routedistance= getDistanceFromLatLonInKm(aroutedarray[i][0],aroutedarray[i][1],aroutedarray[next][0],aroutedarray[next][1]);
routedistance =routedistance.toFixed(5);
 
var routebearing=calculateBearing( aroutedarray[next][0],aroutedarray[next][1],aroutedarray[i][0],aroutedarray[i][1]);
var travelbearing=calculateBearing(mylatitude,mylongitude,aroutedarray[i][0],aroutedarray[i][1]);

 
 

//calculate the moved distance  
var  moveddistance = getDistanceFromLatLonInKm(aroutedarray[i][0],aroutedarray[i][1],mylatitude,mylongitude);
 moveddistance =moveddistance.toFixed(5);
  
 // calculate distance between position  and node0
var  distancetomove= getDistanceFromLatLonInKm(mylatitude,mylongitude,aroutedarray[next][0],aroutedarray[next][1]);
distancetomove =distancetomove.toFixed(5);

//calulate the estimated distance of route 
var calculatedisance=parseFloat(moveddistance) + parseFloat( distancetomove);
console.log(moveddistance+'  '+routedistance);
 
 console.log(travelbearing+'  '+routebearing);
 //if chnage  is more than two , moved off route , allow for vagriancies of the route
 
 
  if( changeflag>1){
  makeRequest();
 
    aroutedarray=[];
    changeflag=0;
  
    return 1;
 }
 
  if( ((travelbearing-routebearing)>90)  || ((travelbearing-routebearing)<-10) ){
 moveddistance=0;
 changeflag=2;
 } 
 if(moveddistance > routedistance){



             aroutedarray.shift();
             showroute(aroutedarray);
             changeflag=0;
             return 1; 
   }
 if(calculatedisance <= routedistance){
             changeflag=0;
                return 1; 
                }
  if(calculatedisance > routedistance){
                  aroutedarray.shift();
                showroute(aroutedarray);
                 changeflag=changeflag+1
                return 1; 
                }
 
 
       
// if we moved back upo the route  and  the esitmated route disnce is greater  
    if((distancetomove +moveddistance)   >calculatedisance   ){
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
                const y = Math.sin((lng2 - lng1) * (Math.PI / 180)) * Math.cos(lat2 * (Math.PI / 180));
                const x =
                    Math.cos(lat1 * (Math.PI / 180)) * Math.sin(lat2 * (Math.PI / 180)) -
                    Math.sin(lat1 * (Math.PI / 180)) * Math.cos(lat2 * (Math.PI / 180)) * Math.cos((lng2 - lng1) * (Math.PI / 180));
                let bearing = (Math.atan2(y, x) * 180) / Math.PI;
                return (bearing + 360) % 360;
            }
   function bearings(lat1,lon1,lat2,lon2){
   
   var longdistance=lon2-lon1;
   var Y=(   (Math.cos(lat1)*Math.sin(lat2)) -     (Math.sin(lat1)*Math.cos(lat2)*Math.cos(longdistance))  );   
   var X =  Math.sin(longdistance)*Math.cos(lat2);
   var bearing = Math.atan2(X,Y);
   return bearing;
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
            map.addLayer(marker); var popupText = '".$marketdata."' ;
       
       
             marker.bindPopup(popupText);
                marker.on('click', function(e){
    map.setView([e.latlng.lat, e.latlng.lng], 16);
});
            
  myroute=routedarray;
 
 return routedarray;
 
}

  
 function showdistance(length)
{

 

 

     if(filename=='testdirections.php' ) {
        legend.addTo(map);
 }
}


";


