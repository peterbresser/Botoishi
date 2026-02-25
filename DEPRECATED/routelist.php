<?php


echo " 

";

if(isset($_GET['route'])){
         $whereto=$_GET['route'];
  $longtitude=substr($whereto,0,strpos($whereto,"X"));
    $latitude=substr($whereto,strrpos($whereto,"X")+1);
    }
$longtitude="139.7664826";
    $latitude="35.6813938";
$ch = curl_init();
$tokyo="139.7664826,35.6813938";

//echo "https://api.openrouteservice.org/v2/directions/driving-car?api_key=5b3ce3597851110001cf62488946ef5ab53a41b8bd2791b40e206222&start=135.4036369,34.677570&end=".$longtitude.",".$latitude."";
curl_setopt($ch, CURLOPT_URL, "https://api.openrouteservice.org/v2/directions/driving-car?api_key=5b3ce3597851110001cf62488946ef5ab53a41b8bd2791b40e206222&start=140.949,38.3413&end=139.7664826,35.6813938");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Accept: application/json, application/geo+json, application/gpx+xml, img/png; charset=utf-8"
));

$response = curl_exec($ch);

curl_close($ch);
$details = json_decode($response, true);
$Rountcount=900001;

$startroutearray=" \n\nvar myroutearray=[";
$routearray="";
foreach ($details['features'][0]['geometry']['coordinates'] as $id => $data)

{

    echo "var point".$Rountcount."= new L.LatLng(".$data[1].",".$data[0].");\n";
    if(strlen($routearray)>0)
        $routearray.=",point".$Rountcount."";
    else
        $routearray.="point".$Rountcount."";

    $Rountcount++;
}
echo "\n\n<script>";
echo $startroutearray."".$routearray."]  ;\n\n";


echo "



var myroutespolyline = new L.Polyline(myroutearray, {
    color: 'green',
    weight: 5,
    opacity: 0.9,
    smoothFactor: 1

});








// method that we will use to update the control based on feature properties passed

function myroutespolyline(e) {
    const details=[];

    if(e=='out'){

        details['name']='';
        mymapinfo.update(details);
    }
    else{


        details['name']='Tohoku Shinkansen';

        mymapinfo.update(details);
    }

}




myroutespolyline.addTo(map);
";