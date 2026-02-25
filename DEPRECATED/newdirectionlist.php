<?php


include $_SERVER['DOCUMENT_ROOT'] . '/../config.php';
include BASEPATH ."/japan.inc";

include BASEPATH ."/docs/css/maykers.inc";
$longtitude='';
$latitude='';
$getmykarker='';
$endlat='';
$endlon='';
$location_name='';
$location_address='';
 $location_site='';
$GLOBALS['NOW']=strtotime("now");
$data='';
echo "
 var markers = [";
    if(isset($_POST['id'])) {
        $query = mysqli_query($japansql, "select  *  from locations where id=" . $_POST['id'] . "  ");
        if ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $endlat = $result['latitude'];
            $endlon = $result['longitude'];
            $getmykarker = $result['marker'];
            $location_name = $result['location_name'];
            $directions = "<form method=POST action=directions.php><input type=hidden name=id value =" . $result['id'] . " ><input type=hidden name=timestamp value=" . strtotime("now") . " ><input type=hidden name=longitude value =" . $result['longitude'] . " ><input type=hidden name=latitude value =" . $result['latitude'] . " ><input type =hidden name=id value =" . $result['id'] . " ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\">Show Route</button></form>";
            $website = "<br><a href =\"" . $result['web_page'] . "\"   class=\"btn btn-outline-light text-info  btn-sm\"  target =_blank role=\"button\"> Web Page </a><br><br>";
            $diplay = "<br><table width=100%> <tr><td>" . $directions . "</td><td> </td></tr><tr><td>" . $website . "</td><td> </td></tr></table>";
            $result['description'] = str_replace("Japan", "", $result['description']);
            $result['description'] = str_replace("japan", "", $result['description']);
            $result['description'] = str_replace(",", "<br>", $result['description']);
            if (strlen($data) > 0)
                $data .= ",[" . $result['longitude'] . "," . $result['latitude'] . ",'<b>" . $result['location_name'] . "</b><br>" . $result['description'] . "','" . $diplay . "','" . $result['marker'] . "'  ]";
            else
                $data = "[" . $result['longitude'] . "," . $result['latitude'] . ",'<b>" . $result['location_name'] . "</b><br>" . $result['description'] . "','" . $diplay . "','" . $result['marker'] . "'  ]";

        }

        echo $data;
        echo " ];";

    }

    echo "\n\nmap.setView([".$endlat.",".$endlon."],15);
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
             
		                map.setView([latitiude, longitude],11);
		                
	            if((routedarray.length)<1){	   
	                    createRoute ();    
	                    
	                           
	                }
	            else{
	            
	            
	            
	            }    
            
         }
         
         
   
         
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
 //var marker;
// filename ='whathefuck';
 //highlightFeature('in');
//var markerLocation = new L.LatLng(".$endlat.",".$endlon.");
 
             
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
         
";
    
 include BASEPATH ."/docs/markers.php";
echo "
 

          
            
 for (var i=0; i<markers.length; i++) {
           
            var lon = markers[i][0];
            var lat = markers[i][1];
           var popupText = markers[i][2]+markers[i][3] ;
             var smarker ='';
             var markerLocation = new L.LatLng(".$endlat.",".$endlon.");
            var mycon =markers[i][4];
      smarker = new L.Marker(markerLocation, {icon:markerIcon} );
                var mycon = '';                     
            
             var customOptions = {
  'maxWidth': '300',
  'className': 'custom',
  closeButton: true,
  closeOnClick : true,
  autoClose: true
            }
             smarker.bindPopup(popupText,customOptions);
        
      
             }
         
 
      
 

       
            
     
     ";

    
    
    
