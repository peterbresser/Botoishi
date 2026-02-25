<?php
echo "
<link rel = \"stylesheet\" href = \"css/leaflet.css\" />

   <script src=\"css/leaflet.js\"></script>
   <script language=\"javascript\">

var lat=0;
var lon=0;	 

getLocation();
function getLocation() {
const options = {
  enableHighAccuracy: true,
  timeout: 5000,
  maximumAge: 0,
};


if(lon==0){
navigator.geolocation.getCurrentPosition(success, error, options);
  	if (navigator.geolocation) {
  	  navigator.geolocation.watchPosition(success, error);
  	} else { 
  	  x.innerHTML = \"Geolocation is not supported by this browser.\";
  	}

 }
 }
function success(position) {
     lon=position.coords.longitude; 
     lat=position.coords.latitude;
window.open(\"index.php\",'longitude',lon);

}


function error(error) {

  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = \"User denied the request for Geolocation.\"
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = \"Location information is unavailable.\"
      break;
    case error.TIMEOUT:
      x.innerHTML = \"The request to get user location timed out.\"
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = \"An unknown error occurred.\"
      break;
  }
}
</script>";