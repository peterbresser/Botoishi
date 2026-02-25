<?php

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

echo "    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyC1FeKeHBJG2Yz1_Na_oprN3XIbbMvdmQ0\"></script>";


#echo " <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyC1FeKeHBJG2Yz1_Na_oprN3XIbbMvdmQ0&callback=initMap&v=weekly\"       defer     ><script>"

echo " <script>
 function initMap() {
       const map = new google.maps.Map(document.getElementById(\"map\"), {
       center: { lat: 38.68, lng:142.76 },
        zoom: 6,
        mapTypeId: \"terrain\",
  });

";
	$mymakers=array();
	$locationsMy='';
	$mywpts='';

    if($_GET['chain']=='all')
      $hotel = "";
    else
        $hotel =" and marker ='".$_GET['chain']."' ";


	$query=mysqli_query($GLOBALS['JAPAN'],"select location_name, latitude, longitude, description, web_page, marker from locations where type ='hotel' ".$hotel." ");
	while($results=mysqli_fetch_array($query,MYSQLI_NUM))
		$mayday[]=$results;
	include BASEPATH ."/docs/css/maykers.inc";



	foreach($mayday as $id =>  $result){

	if(strlen($locationsMy)==0){
		$locationsMy.="['".$result[0]."',".$result[1].",".$result[2].",'".$result[3]."','<a href =\"".$result[4]."\"  target =_blank>Details</a>',".$result[5]."]\n";
		}
	else	{
		$locationsMy.=",['".$result[0]."',".$result[1].",".$result[2].",'".$result[3]."','<a href =\"".$result[4]."\"  target =_blank>Details</a>',".$result[5]."]\n";
		}
	}
	echo "var MyLocations= [".$locationsMy."];
		setMarkers(map, MyLocations);
}
function setMarkers(map, MyLocations) {
var infowindow = new google.maps.InfoWindow();
for (var i = 0; i < MyLocations.length; i++) {
var beach = MyLocations[i];
var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
var marker = new google.maps.Marker({
position: myLatLng,
draggable: false,
map: map,
icon:MyLocations[i][5],
title: beach[0],
});
var contentString='<div id=\"content\"  style=\"z-index: 1; position:relative; left: 1%; top: 5%; width: 100%; will-change: transform; transform: translate(0px);\">'+
        '<div id=\"siteNotice\"><b>'+MyLocations[i][0]+
      '</b></div>'+
      '<div id=\"bodyContent\">'+
      '<p class =text >'+MyLocations[i][3]+'</div>'+
      '<p class =text >'+MyLocations[i][4]+'</div>'+
      '</div></div>';
 	bindInfoWindow(marker, map, infowindow, contentString);
}
}
function bindInfoWindow(marker, map, infowindow, html, Ltitle) {
    google.maps.event.addListener(marker,'click', function() {
		infowindow.setContent(html);
            	infowindow.open(map, marker);
    });
   google.maps.event.addListener(map, 'click', function() {
                    infowindow.close();
                    marker.open = false;
                });
}

window.initMap = initMap();

</script>
";
?>
