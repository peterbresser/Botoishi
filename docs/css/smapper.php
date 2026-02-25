<?php


echo "     <script       src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyC1FeKeHBJG2Yz1_Na_oprN3XIbbMvdmQ0&callback=initMap&v=weekly\"       defer     ></script>";

echo "  <style>

html, body {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
#map {
      height: 100%;
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
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
      </style>";

#echo "    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyC1FeKeHBJG2Yz1_Na_oprN3XIbbMvdmQ0\"></script>";


#echo " <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyC1FeKeHBJG2Yz1_Na_oprN3XIbbMvdmQ0&callback=initMap&v=weekly\"       defer     ><script>"

echo " <script>
function initMap() {

       const map = new google.maps.Map(document.getElementById('map'), {
       center: { lat: 35.68, lng:139.76 },
       zoom: 12,
  });

const flightPlanCoordinates = [
{lat: 35.677420, lng: 139.765816},
{lat: 35.676173, lng: 139.764883},
{lat: 35.673977, lng: 139.762126},
{lat: 35.673080, lng: 139.761096},
{lat: 35.672453, lng: 139.760575},
{lat: 35.671976, lng: 139.760278},
{lat: 35.669487, lng: 139.758888},
{lat: 35.668580, lng: 139.758468},
{lat: 35.665334, lng: 139.758602},
{lat: 35.663222, lng: 139.758802},
{lat: 35.661218, lng: 139.758764},
{lat: 35.659502, lng: 139.758411},
{lat: 35.656527, lng: 139.757770},
{lat: 35.652450, lng: 139.756556},
{lat: 35.651689, lng: 139.756260},
{lat: 35.650307, lng: 139.755503},
{lat: 35.649626, lng: 139.754992},
{lat: 35.649171, lng: 139.754526},];

  const flightPath = new google.maps.Polyline({
    path: flightPlanCoordinates,
    geodesic: true,
    strokeColor: \"BLUE\",
    strokeOpacity: 1.0,
    strokeWeight: 8,
  });

  flightPath.setMap(map);
        }


window.initMap = initMap();

</script>
";

?>
