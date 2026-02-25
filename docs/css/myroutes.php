<?php



echo "  <style>
    html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
</style>

<style>
         #googleMap { width: 100%; height: 400px; top: 0; left: 0; right: 0; bottom: 0; }

        /*style the link*/
        .gm-style div div div div div div div div a {
            color: blue;
            font-weight: none;
        }
 /* unvisited link grey */
#top-menu a:link {
	color: #006600;
}
/* visited link grey */
#top-menu a:visited {
	color: #003300;
}
/* mouse over link blue */
#top-menu a:hover {
	color: red;
}
/* selected link blue */
#top-menu a:active {
	color: #336600;
}
/* !IMPORTANT ONLY ADD THIS CLASS TO YOUR ACTIVE PAGE LINK ( Color Blue )*/
.activePage a {
	color: #0CF !important
}
      </style>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyC1FeKeHBJG2Yz1_Na_oprN3XIbbMvdmQ0\"></script>
<script>
function initialize() {
   	var mapCanvas = document.getElementById('map-canvas');
	var mapOptions = {
		 center: new google.maps.LatLng(38.70261,139.4677074),
                zoom:6

  	}
  	map = new google.maps.Map(document.getElementById('map-canvas','mymarker'), mapOptions);\n\n";
	$mymakers=array();
	$locationsMy='';
	$mywpts='';
	include BASEPATH ."/docs/css/maykers.inc";


	echo "
function calcRoute(map) {
  var start = new google.maps.LatLng(41.850033, -87.6500523);
  var end = new google.maps.LatLng(37.3229978, -122.0321823);
  var request = {
    origin: start,
    destination: end,
    travelMode: 'DRIVING'
  };

  directionsService.route(request, function(response, status) {
    if (status == 'OK') {
      directionsDisplay.setDirections(response);
    } else {
      alert(\"directions request failed, status=\" + status)
    }
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
";

?>
