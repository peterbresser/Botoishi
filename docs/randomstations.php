<?php


include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH."/docs/menu.php";

echo "

 
 <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"  integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


 <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>   
       <script language=\"javascript\" src =\"js/min.teststations.js\"></script> 
 
";
echo "<center> <span class=text-information><h3>Find a random station in Japan to visit</H3></span>";

if(!$_POST['framed_ip']){

	    echo"<bR><span text-danger>iBad  request per day is permitted</span>";
        exit();




}
 $tewntryfour=strtotime("-1 day");
$chkq=mysqli_query($japansql,"select * from radomstaions where framed_ip ='".$_SERVER['REMOTE_ADDR']."' and actioned > $tewntryfour");
if($checkres=mysqli_fetch_assoc($chkq)){


#	echo"<bR><span class=\"text-danger\">Only 1 request per day is permitted</span>";
#	echo"<br><span class=\"text-imporant\">maybe try <a href=\"tanner.php\" style=\"text-decoration:none;text-align:right;\"  >Tanners Stations</span>";
#	exit();

}
else
	mysqli_query($japansql,"insert into radomstaions (actioned,framed_ip) values (".strtotime("now").",'".$_SERVER['REMOTE_ADDR']."')");





 $query=mysqli_query($japansql,"select  stations.id as stationsid , stations.line_id as line_id ,ename, jname, line_name,latitude,longitude  from stations   inner join japan.jplines jp  on  stations.line_id =jp.line_id   ORDER BY RAND()");
 $result=mysqli_fetch_assoc($query);

echo "
 <script language=\"javascript\" >
 
function init(){
   markerGroup =new  L.layerGroup().addTo(map);
var tokyo = new L.LatLng(".$result['latitude'].",".$result['longitude'].");
            map.setView(tokyo,15);

//console.log(".$result['latitude'].",".$result['longitude'].");

 var marker =new L.Marker([".$result['latitude'].",".$result['longitude']."]);  
 
    var TravelIcon = L.icon({
         iconUrl: 'images/selectIcon.png',
         shadowUrl: 'images/selectIcon.png',
         iconSize:    [22,22],
         shadowSize:   [22,22]
                });
    marker=new L.Marker([".$result['latitude'].",".$result['longitude']."], {icon:TravelIcon}).addTo(markerGroup);
    
     var newdisplay=  '<form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value ='+".$result['stationsid']."+'><input type=hidden name=stationlocation value=1 ><input type=hidden name=longitude value ='+".$result['latitude']."+'  ><input type=hidden name=latitude value ='+".$result['longitude']."+' ><input type=hidden name=initial value =1 ><button class=\'btn  btn-outline-light text-info btn-sm\'><img src =images/direct.png width=22></button></form>'; 
                           var linedescription='<form method=POST action=newstations.php title =\'Line Map\'>  <input type=hidden name=stationid value=".$result['stationsid']." >  <input type=hidden name=lineid value=".$result['line_id']."><button class=\'btn  btn-outline-light text-primary btn-sm\'>".$result['line_name']."</button></form>';
                          var popupText='<center><table border =0><tr><td colspan=2 align=center>".$result['ename']."<br>".$result['jname']."</td><td ></tr><tr><td align=center></td><td align=center colspan =1>'+newdisplay+'</td><tr><td colspan=2 align =center>'+linedescription+'</td></tr></table>'
                     ; 

                  
                  
                    marker. setLatLng([".$result['latitude'].", ".$result['longitude']." ]).bindPopup(popupText ,{autoClose: false,  autoPan:false, 'className': 'stylePopup' ,    offset: [-100,30], closeButton: true, closeOnClick : true  });;   
                 
          marker.on('onclick', function (e) {  alert(9); closePopupTimeout = setTimeout(() => { this.closePopup();}, 1500);}); 
}</script>
<body>

 ";




include BASEPATH ."/docs/mapfooter.php";



include BASEPATH ."/docs/footer.php";

