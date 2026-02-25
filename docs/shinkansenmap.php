<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";

echo "
 
<link rel = \"stylesheet\" href = \"css/leaflet.css\" />
 
   <script src=\"css/leaflet.js\"></script>
   <script language=\"javascript\">

	function init() {
              

        

         var tokyo = new L.LatLng(".$GLOBALS['zoompoint']."); 
	 map.setView(tokyo,7);
";




 $mapmarker='';
 $locationtype = " ";
$traintype='';

if(isset($_GET['route']))
      $_POST['route']=$_GET['route'];


if($_POST['route'])
    $mapmarker= " and   marker='".$_POST['route']."'";
else
    $mapmarker= "and  type is NOT NULL ";

if(isset($_POST['traintype'])){
    if ($_POST['traintype'] == 'all')
        $traintype = " ";
    else
        $traintype = " and traintype  ='" . $_POST['traintype'] . "' ";



}
$chain='';
if(isset($_POST['chain'])){
    if($_POST['chain']=='all')
        $chain = " ";
    else
    $chain =" and marker='".$_POST['chain']."'";

}
if( $_POST['island']) {
    if ($_POST['island'] == 'all')
        $locationtype = " ";
    else
        $locationtype = " and island ='" . $_POST['island'] . "' ";
}
else
    $locationtype = " ";

$data='';
$counter=0;
$stationdata=array();
 echo  "
 
    var markers = [";

$query=mysqli_query($japansql ,"select id, location_name, latitude, longitude, description, web_page, marker from locations where type ='station'  ".$locationtype." ".$mapmarker."  ".$traintype." and active =1 and passmap=0  and traintype is not NULL and traintype !=''");

$numrows=((mysqli_num_rows($query))/1);

while($queryresult=mysqli_fetch_array($query,MYSQLI_ASSOC)) {


    $stationdata[$queryresult['id']]=$queryresult;


}


foreach( $stationdata as $result){



        $hotelstartlat=$result['latitude']+.1;
        $hotelstartlon=$result['longitude']+.1;
        $hotelendlat=$result['latitude']-.1;
        $hotelendlon=$result['longitude']-.1;
 ##echo "select  id, location_name, latitude, longitude, description, web_page, marker  from locations where type ='hotel' and  (latitude between ".$hotelendlat." and ".$hotelstartlat." ) and (longitude  between ".$hotelendlon." and ".$hotelstartlon ." )\n";

       $hotelquery=mysqli_query($japansql ,"select  id, location_name, latitude, longitude, description, web_page, marker  from locations   where type ='hotel' ".$chain."  and  (latitude between ".$hotelendlat." and ".$hotelstartlat." ) and (longitude  between ".$hotelendlon." and ".$hotelstartlon ." )");
       while($hotelresult=mysqli_fetch_assoc($hotelquery))
          $stationhotels[]=$hotelresult;
        $zoompoint="'".$result['latitude']."','".$result['longitude']."'";
    $directions="<form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value =".$result['id']." ><input type=hidden name=timestamp value=".strtotime("now")." ><input type=hidden name=longitude value =".$result['longitude']." ><input type=hidden name=latitude value =".$result['latitude']." ><input type =hidden name=id value =".$result['id']." ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\"><img src =images/direct.png width=22></button></form>";
    $website="<a href =\'".$result['web_page']."\' target =_blank title=\'WebSite\' ><img src =images/link.png width=22></a>";
    $diplay="<table width=100%> <tr><td>". $directions."</td><td> </td> <td>".$website."</td><td> </td></tr></table>";
    $result['description']=str_replace("Japan","",$result['description']);
    $result['description']=str_replace("japan","",$result['description']);
    $result['description']=str_replace(",","<br>",$result['description']);
    if(strlen($data)>0)
        $data.= ",[".$result['longitude'].",".$result['latitude'].",'".$result['location_name']."','". $diplay."','".$result['marker']."'  ]";
    else
        $data=   "[".$result['longitude'].",".$result['latitude'].",'".$result['location_name']."','". $diplay."','".$result['marker']."'  ]";
    $counter++;
}

echo $data;
echo " ];";
if(isset($_POST['chain'])) {
    echo "\n\nvar hotelmarkers = [";
    $hotelmarkerdata = '';
    foreach ($stationhotels as $id => $hoteldata) {
        $hoteldirections="<form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value =".$hoteldata['id']." ><input type=hidden name=stationlocation value=1 ><input type=hidden name=longitude value =".$hoteldata['longitude']." ><input type=hidden name=latitude value =".$hoteldata['latitude']." ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\"><img src =images/direct.png width=22></button></form>";
        $website="<a href =\'".$hoteldata['web_page']."\' target =_blank title=\'WebSite\' ><img src =images/link.png width=22></a>";
        $diplay="<table width=100%> <tr><td>". $directions."</td><td> </td> <td>". $website."</td><td> </td></tr></table>";
        $hoteldata['description']=str_replace("Japan","",$hoteldata['description']);
        $hoteldata['description']=str_replace("japan","",$hoteldata['description']);
        $hoteldata['description']=str_replace(",","<br>",$hoteldata['description']);
        if (strlen($hotelmarkerdata) > 0)
            $hotelmarkerdata .= ",[" . $hoteldata['longitude'] . "," . $hoteldata['latitude'] . ",'" . $hoteldata['location_name'] . " ','". $diplay."','". $hoteldata['marker'] . "' ]\n";
        else
            $hotelmarkerdata = "[" . $hoteldata['longitude'] . "," . $hoteldata['latitude'] . ",'" . $hoteldata['location_name'] . " ','". $diplay."','". $hoteldata['marker'] . "'  ]\n";
    }

    echo $hotelmarkerdata;
    echo " ];\n";
    include BASEPATH ."/docs/css/maykers.inc";

    if (strlen($hotelmarkerdata) > 0) {
        echo " for (var j=0; j<hotelmarkers.length; j++) {
            var lon = hotelmarkers[j][0];
            var lat = hotelmarkers[j][1];
            var popupText = hotelmarkers[j][2]+hotelmarkers[j][3];//+hotelmarkers[j][5];
            var mycon = hotelmarkers[j][4];
             var marker ='';
             var markerLocation = new L.LatLng(lat, lon);
              marker = new L.Marker(markerLocation, {icon:HotelIcon} );
             
                         
             map.addLayer(marker);
             var customOptions = {
  'maxWidth': '300',
  'className': 'stylePopup',
  closeButton: true,
  closeOnClick : true,
  autoClose: true
}
             marker.bindPopup(popupText,customOptions);

    //  marker.on('click', function(e){
  //  map.setView([e.latlng.lat, e.latlng.lng], 16);
//});
             };    
      ";


    }
}


echo "   var bounds;
   var nelat= 0;
    var nelng= 0;
    var selat =0;
    var selng =0;
     var mapincrementor=1;
    var markerGroup = L.layerGroup().addTo(map);
 
        bounds = map.getBounds();
        nelat =bounds['_northEast']['lat'];
        nelng= bounds['_northEast']['lng'];
        selat =bounds['_southWest']['lat'];
        selng =bounds['_southWest']['lng'];
 
         map . on('moveend', function (e) {
        
        map.removeLayer(markerGroup);
                 markerGroup =new  L.layerGroup().addTo(map);
       
            var  i=0;
            zoomlevel=map.getZoom();
           
             if (zoomlevel >=3) {
             
                
                 for (i=0; i<markers.length; i++) {
                   var lat = markers[i][0];
                     var lon = markers[i][1];
                     var markerLocation = new L.LatLng(lat, lon);
                     var mycon =markers[i][4];
                
            
            
           
                   
                     pointToCheck= L.latLng(lon,lat );
                  
                    if((markers[2].length)>0)
                      var  popupText=markers[i][2]+markers[i][3];//+markers[i][7];
                     if(map.getBounds().contains(pointToCheck)){
                     
                         window['marker'+1]=new L.Marker([lon, lat]);
                          var checkmarker=markers[i][4].toLowerCase(); 
                                var mycon =checkmarker;

                          
                          var JRIcon = L.icon({
         iconUrl: 'images/jrrail4.png',
         shadowUrl: 'images/jrrail4.png',
         iconSize:     [12,12],
         shadowSize:  [12,12]
                });
                 
                 window['marker'+1]=new L.Marker([lat,lon], {icon:JRIcon}).addTo(markerGroup);  ";



echo " 
                    
                      window['marker'+1]. setLatLng([lon, lat]).bindPopup(popupText ,{'maxWidth': '140',
                      'className': 'stylePopup' ,
                        offset: [-100,30],
                        closeButton: true,
                        closeOnClick : true,
                        autoClose: true });;   
                     window['marker'+1]. setLatLng([lon, lat]).bindPopup(popupText ,{'maxWidth': '140',  'className': 'stylePopup' ,    offset: [1,1], closeButton: true, closeOnClick : true,  autoClose: true });;   
                    window['marker'+1].on('onmouseover', function (e) {
                     clearTimeout(popupTimeout); 
                      popupTimeout = setTimeout(() => {   this.openPopup(); }, 500);  });  
                         window['marker'+1].on('mouseout', function (e) {   closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);});  
                window['marker'+1].on('onclick', function (e) {   closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);});  
                    }
                }
             }
             
             
             
             
             else{
               
                 map.removeLayer(markerGroup);
                 markerGroup =new  L.layerGroup().addTo(map);
             }
         });

         ";
if($_POST['island']=='all') {
echo "        var zoom = new L.LatLng(".$GLOBALS['zoompoint']."); 
	 map.setView(zoom,5);
";
}
else {

    echo "        var zoom = new L.LatLng(" . $zoompoint . "); 
	 map.setView(zoom,7);
";
}

include BASEPATH ."/docs/myjsfunctions.js";
if(isset($_POST['route'])){
    if($_POST['route']=='tokaido' or  $_POST['route']=='all')
       include BASEPATH ."/docs/js/tokaido.js";
    if($_POST['route']=='tohoku' or  $_POST['route']=='all' )
        include BASEPATH ."/docs/js/tohoku.js";
    if($_POST['route']=='akita' or  $_POST['route']=='all' )
        include BASEPATH . "/docs/js/akita.js";
        if($_POST['route']=='hokkaido' or  $_POST['route']=='all' )
            include BASEPATH . "/docs/js/hokkaido.js";
    if($_POST['route']=='horruriku' or  $_POST['route']=='all' )
        include BASEPATH . "/docs/js/horruriku.js";
    if($_POST['route']=='kyushu' or  $_POST['route']=='all' )
        include BASEPATH . "/docs/js/kyushu.js";
    if($_POST['route']=='joetsu' or  $_POST['route']=='all' )
        include BASEPATH . "/docs/js/joetsu.js";
    if($_POST['route']=='yamagata' or  $_POST['route']=='all' )
        include BASEPATH . "/docs/js/yamagata.js";
    if($_POST['route']=='sanyo' or  $_POST['route']=='all' )
        include BASEPATH . "/docs/js/sanyo.js";

}
elseif(isset($_POST['island'])){

    if($_POST['island']=='honshu' or  $_POST['route']=='all' or  $_POST['island']=='all'  ) {
        include BASEPATH . "/docs/js/tokaido.js";
         include BASEPATH ."/docs/js/tohoku.js";
          include BASEPATH . "/docs/js/akita.js";
           include BASEPATH . "/docs/js/horruriku.js";
           include BASEPATH . "/docs/js/joetsu.js";
           include BASEPATH . "/docs/js/yamagata.js";
           include BASEPATH . "/docs/js/sanyo.js";

    }
    if($_POST['island']=='hokkaido' or  $_POST['route']=='all' or $_POST['island']=='all'  )
        include BASEPATH . "/docs/js/hokkaido.js";
        if($_POST['island']=='kyushu' or  $_POST['route']=='all'  or $_POST['island']=='all' )
        include BASEPATH . "/docs/js/kyushu.js";


}
else{

    include BASEPATH ."/docs/js/tokaido.js";
    include BASEPATH . "/docs/js/hokkaido.js";
    include BASEPATH ."/docs/js/akita.js";
    include BASEPATH ."/docs/js/tohoku.js";
    include BASEPATH ."/docs/js/horruriku.js";
     include BASEPATH . "/docs/js/kyushu.js";
    include BASEPATH . "/docs/js/joetsu.js";
    include BASEPATH . "/docs/js/yamagata.js";
    include BASEPATH . "/docs/js/sanyo.js";
}
echo "}

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

</script>
   
</head>
<body onLoad=\"javascript:init();\">
<center><br>
       
 <table border =1 width=95% height=75% ><tr><td>  <div id=\"map\" style=\"height: 83vh;\"></div></td></tr></table>";
echo "<p id=\"locationmap\"></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";





include BASEPATH ."/docs/mapfooter.php";
include BASEPATH ."/docs/footer.php";
