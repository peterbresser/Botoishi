<?php

include  "japan.inc";
           $query=mysqli_query($japansql ,"select  *   from company    ");
                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {

                    $GLOBALS['TRAINCO'][$result['company_id']]=array('company_id'=>$result['company_id'],'company_link'=>$result['company_link']);
                }


    $starlat='';
    $starlon='';
$checked=array();
echo  'const stationS = {
"type": "FeatureCollection",
 "features":[';
    $query=mysqli_query($japansql ,"select   longitude, latitude ,ename,jname,address ,stations.id as id , stations.line_id as lineid, company_id, line_name,zoomlevel,linked  from stations inner join japan.jplines jp  on  stations.line_id =jp.line_id where  active =1 and latitude!='0' and LENGTH(address) >1 and ename='Fukaya'");
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
    $startlat=$result['longitude'];
    $startlon=$result['latitude'];
    $locationlat=$result['latitude'];
    $locationlong=$result['longitude'];

	 $marker='station';
  if(substr_count(strtolower($result['line_name']),"jr ")>0)
	$marker='jrstation';
  if(substr_count(strtolower($result['line_name']),"metro ")>0)
        $marker='metro';
  if(substr_count(strtolower($result['line_name']),"subway ")>0)
        $marker='subway';
   if(substr_count(strtolower($result['line_name']),"port line")>0)
        $marker='tram';
  if(substr_count(strtolower($result['line_name']),"tram ")>0)
        $marker='tram';
   if(substr_count(strtolower($result['line_name']),"pier ")>0)
        $marker='tram';
  if(substr_count(strtolower($result['line_name'])," lrt")>0)
        $marker='tram';
   if(substr_count(strtolower($result['line_name'])," higashida main line")>0)
        $marker='tram';



 if(substr_count($result['ename'],"-")>0)
        $result['ename']=str_replace("-","<br>",$result['ename']);
 
#e#cho $result['ename']."  ".$marker."\n";
    $result['ename']=ucwords(strtolower($result['ename'])) ."    <br> ".$result['jname']."";


 $companysite=$GLOBALS['TRAINCO'][$result['company_id']]['company_link'];
    // print_r( $result['company_id']);
$result['address']=str_replace(","," ",$result['address']);
	 $website="<a href ='".$companysite."' target =_blank title=\'WebSite\' id='link".$result['id']."' ><img src =images/link.png width=22></a>";
##$website="<a href ='".$companysite."' target =_blank title=\'WebSite\' id='link".$result['id']."' ><img src =https://";echo '".$GLOBALS[\'URLOCATION\']."'; echo "/images/link.png width=22></a>";    
    $display="".$website."";
    $result['address']=str_replace("Japan","",$result['address']);
    $result['address']=str_replace("japan","",$result['address']);
    $result['address']=str_replace(",","<br>",$result['address']);

if(substr_count($result['line_name'],"(")>0)
	$result['line_name']=str_replace("(","<br>(",$result['line_name']);

    if(isset($_GET['id'])) {
        $idlatlon=$result['latitude'].",".$result['longitude']."";
    }

    if(array_key_exists($result['latitude'],$checked)){
		$checked[$result['latitude']]=array('latitude'=>$result['latitude'], 'longitude'=> $result['longitude'],'read'=>0.000001);;

    if(strlen($data)>0)
    		  $data.= '
,{ "type": "Feature",
"geometry": {"type": "Point", "coordinates":['.$result['latitude'].','.$result['longitude'].']},
"properties": {"ename":"'.$result['ename'].'", "jname":"'.$result['jname'].'","address":"'.$result['address'].'", "lineid":"'.$result['lineid'].'","line_name":"'.$result['line_name'].'","display":"'.$display.'","marker":"'.$marker.'","mtype":"0","traintype":"0","visibility":"'.$result['zoomlevel'].'","id":"'.$result['id'].'","stationlocation":"1","linkedto":"'.$result['linked'].'"}
}';
	else
		  $data= '
{ "type": "Feature",
"geometry": {"type": "Point", "coordinates":['.$result['latitude'].','.$result['longitude'].']},
"properties": {"ename":"'.$result['ename'].'", "jname":"'.$result['jname'].'","address":"'.$result['address'].'", "lineid":"'.$result['lineid'].'","line_name":"'.$result['line_name'].'","display":"'.$display.'","marker":"'.$marker.'","mtype":"0","traintype":"0","visibility":"'.$result['zoomlevel'].'","id":"'.$result['id'].'","stationlocation":"1","linkedto":"'.$result['linked'].'"}
}';


	}

else{

print_r($checked);
$checked[$result['latitude']]['read']+=0.00001;

#$checked[$result['latitude']]['read']+=0.0;;
        $result['latitude']=$result['latitude']+$checked[$result['latitude']]['read'];
        $result['longitude']=$result['longitude']+$checked[$result['latitude']]['read'];


	#$checked[$result['latitude']]=array('latitude'=>$result['latitude'], 'longitude'=> $result['longitude'],'read'=>0.01);
$result['address']=str_replace(","," ",$result['address']);
#$website="<a href ='".$companysite."' target =_blank title=\'WebSite\' id='link".$result['id']."' ><img src =https://";echo '".$GLOBALS[\'URLOCATION\']."'; echo "/images/link.png width=22></a>";
    $website="<a href ='".$companysite."' target =_blank title=\'WebSite\' id='link".$result['id']."' ><img src =images/link.png width=22></a>";
    $display="".$website."";

	 $checked[$result['latitude']]=array('latitude'=>$result['latitude'], 'longitude'=> $result['longitude'],'read'=>0.000001);


    $data.= '
,{ "type": "Feature",
"geometry": {"type": "Point", "coordinates":['.$result['latitude'].','.$result['longitude'].']},
"properties": {"ename":"'.$result['ename'].'", "jname":"'.$result['jname'].'","address":"'.$result['address'].'", "lineid":"'.$result['lineid'].'","line_name":"'.$result['line_name'].'","display":"'.$display.'","marker":"'.$marker.'","type":"0","traintype":"0","id":"'.$result['id'].'","stationlocation":"1","linkedto":"'.$result['linked'].'"}
}';


}

}

echo $data; 


exit();
$query=mysqli_query($japansql ,"select    id, location_name , latitude, longitude, description as address,  web_page, marker, type,traintype,island,zoomlevel,linked from locations where  active in( 0,1) and latitude!='0'  and type not in ('private','station') and LENGTH(description) >1" );
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
    $startlat=$result['longitude'];
    $startlon=$result['latitude'];
    $locationlat=$result['latitude'];
    $locationlong=$result['longitude'];
    $result['ename']=$result['location_name'] ;
     $companysite=$result['web_page'];;
    // print_r( $result['company_id']);
$result['address']=str_replace(","," ",$result['address']);

if(substr_count($result['location_name'],"Hotel Metropolitan")>0)
                 $result['location_name']=str_replace("Hotel Metropolitan","Hotel Metropolitan<br>",$result['location_name']);
elseif(substr_count($result['location_name'],"Hotel Mystays")>0)
                 $result['location_name']=str_replace("Hotel Mystays","Hotel Mystays<br>",$result['location_name']);
elseif(substr_count($result['location_name'],"Hotel Route-Inn")>0)
                 $result['location_name']=str_replace("Hotel Route-Inn","Hotel Route-Inn<br>",$result['location_name']);
else if(substr_count($result['location_name'],"Toyoko Inn")>0)
                  $result['location_name']=str_replace("Toyoko Inn","Toyoko Inn<br>",$result['location_name']);
else if(substr_count($result['location_name'],"APA Hotel ")>0)
                  $result['location_name']=str_replace("APA Hotel","APA Hotel<br>",$result['location_name']);
else if(substr_count($result['location_name'],"Candeo Hotels")>0)
                  $result['location_name']=str_replace("Candeo Hotels","Candeo Hotel<br>",$result['location_name']);
else if(substr_count($result['location_name'],"Dormy Inn")>0)
                  $result['location_name']=str_replace("Dormy Inn","Dormy Inn<br>",$result['location_name']);
else if(substr_count($result['location_name'],"Onyado")>0)
                  $result['location_name']=str_replace("Onyado Nono","Onyado Nono<br>",$result['location_name']);
else if(substr_count($result['location_name'],"Hoshino Resorts")>0)
                  $result['location_name']=str_replace("Hoshino Resorts","Hoshino Resorts<br>",$result['location_name']);
else if(substr_count($result['location_name'],"Grantia")>0)
                  $result['location_name']=str_replace("Grantia","Grantia<br>",$result['location_name']);

else if(substr_count($result['location_name'],"Hotel Granvia")>0)
                  $result['location_name']=str_replace("Granvia","Granvia<br>",$result['location_name']);

else if(substr_count($result['location_name'],"Super Hotel")>0){
                 $result['location_name']=str_replace("Super Hotel","Super Hotel<br>",$result['location_name']);
}
#ielse
#$result['location_name']=str_replace("Hotel","",$result['location_name']);

	

#$result['e_name']=ucwords(strtolower($result['e_name']));

#    $website="<a href ='".$companysite."' target =_blank title=\'WebSite\' id='link".$result['id']."' ><img src =https://";echo '".$GLOBALS[\'URLOCATION\']."'; echo "/images/link.png width=22></a>";
	$website="<a href ='".$result['web_page']."' target =_blank title='WebSite' id='link".$result['id']."' ><img src =images/link.png width=22></a>";
    $display="".$website." ";
    $result['address']=str_replace("Japan","",$result['address']);
    $result['address']=str_replace("japan","",$result['address']);
    $result['address']=str_replace(",","<br>",$result['address']);
 #   if($result['type']!='station'){
#$nreaset ="<form method=POST action=fullmap.php><input type=hidden name=id value =".$result['id']." ><input type=hidden name=island value=".$result['island']."><input type=hidden name=closest_station value=go><button class='btn  btn-outline-light text-info btn-sm'><img src =images/stations.png width=22></button></form>";

#	$display.=$nreaset;
#}
#else
#	$display.="";



$result['location_name']=ucwords(strtolower($result['location_name']));

if(substr_count($result['location_name'],"Soup Stock Tokyo")>0)
	$result['location_name']=str_replace("Soup Stock Tokyo","Soup Stock Tokyo<br>",$result['location_name']);

# if(substr_count($result['location_name'],"-")>0)
 #       $result['location_name']=str_replace("-","<br>",$result['location_name']);
if($result['type']=='travel')
	$result['type']=$result['marker'];
$data.= '
,{ "type": "Feature",
"geometry": {"type": "Point", "coordinates":['.$result['latitude'].','.$result['longitude'].']},
"properties": {"ename":"'.$result['location_name'].'", "jname":"","address":"'.$result['address'].'", "lineid":"0","line_name":"0","display":"'.$display.'","marker":"'.$result['type'].'","mtype":"'.$result['marker'].'","traintype":"'.$result['traintype'].'","visibility":"'.$result['zoomlevel'].'","nearestation":"'.$nreaset.'","id":"'.$result['id'].'","stationlocation":"0","linkedto":"'.$result['linked'].'"}
}';

}














echo $data;




echo " 		
	]
}; ";


