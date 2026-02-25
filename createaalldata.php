<?php

include  "japan.inc";

    $starlat='';
    $starlon='';
$checked=array();
echo " var markers = [ ";
    $query=mysqli_query($japansql ,"select   longitude, latitude ,ename,jname,address ,stations.id as id , stations.line_id as lineid, company_id, line_name  from stations inner join japan.jplines jp  on  stations.line_id =jp.line_id where  active =1 and latitude!='0' ");
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){

    $startlat=$result['longitude'];
    $startlon=$result['latitude'];
    $locationlat=$result['latitude'];
    $locationlong=$result['longitude'];
    $result['ename']=ucwords(strtolower($result['ename'])) ." ".$result['jname']."";
 $companysite=$GLOBALS['TRAINCO'][$result['company_id']]['company_link'];
    // print_r( $result['company_id']);
$result['address']=str_replace(","," ",$result['address']);
    $directions="";##<form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value =".$result['id']." ><input type=hidden name=stationlocation value=1 ><input type=hidden name=longitude value =".$result['longitude']." ><input type=hidden name=latitude value =".$result['latitude']." ><input type =hidden name=id value =".$result['id']." ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\"><img src =images/direct.png width=22></button></form>";
    $website=$companysite; #   "<a href =\'".$companysite."\' target =_blank title=\'WebSite\' ><img src =images/link.png width=22></a>";
    $diplay=""; #<table width=100%> <tr><td>". $directions."</td><td> </td> <td>".$website."</td><td> </td></tr></table>";
#    $result['address']=str_replace("Japan","",$result['address']);
#    $result['address']=str_replace("japan","",$result['address']);
#    $result['address']=str_replace(",","<br>",$result['address']);



    if(isset($_GET['id'])) {
        $idlatlon=$result['latitude'].",".$result['longitude']."";
    }

    if(!array_key_exists($result['latitude'],$checked)){
		$checked[$result['latitude']]=array('latitude'=>$result['latitude'], 'longitude'=> $result['longitude'],'read'=>0.01);;

    if(strlen($data)>0)
        $data.= ",[".$result['latitude'].",".$result['longitude'].", '".$result['ename']."','','0', '".$result['address']."','". $result['lineid']."','". $result['line_name']."',0  ]\n";
    else
	$data= "[".$result['latitude'].",".$result['longitude'].", '".$result['ename']."','','0', '".$result['address']."','". $result['lineid']."','". $result['line_name']."',0  ]\n";
	}

else{
 $result['latitude']." 111  ".$result['longitude']."\n";
$checked[$result['latitude']]['read']+=0.01;
$checked[$result['latitude']]['read']."\n";
	$result['latitude']=$result['latitude']+$checked[$result['latitude']]['read'];
	$result['longitude']=$result['longitude']+$checked[$result['latitude']]['read'];

	 $result['latitude']." 222  ".$result['longitude']."\n";
	$checked[$result['latitude']]=array('latitude'=>$result['latitude'], 'longitude'=> $result['longitude'],'read'=>0.01);

	$data.= ",[".$result['latitude'].",".$result['longitude'].", '".$result['ename']."','','0', '".$result['address']."','". $result['lineid']."','". $result['line_name']."',0  ]\n";


}

}

$query=mysqli_query($japansql ,"select    id, location_name , latitude, longitude, description,  web_page, marker, type,traintype from locations where  active =1 and latitude!='0'  and type !='station'");
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
    $startlat=$result['longitude'];
    $startlon=$result['latitude'];
    $locationlat=$result['latitude'];
    $locationlong=$result['longitude'];
    $result['ename']=$result['location_name'] ;
     $companysite=$result['web_page'];;
    // print_r( $result['company_id']);
$result['address']=str_replace(","," ",$result['address']);
    $directions="";#<form method=POST action=directions.php title =\'Walking Directions\'><input type=hidden name=id value =".$result['id']." ><input type=hidden name=stationlocation value=0 ><input type=hidden name=longitude value =".$result['longitude']." ><input type=hidden name=latitude value =".$result['latitude']." ><input type=hidden name=initial value =1 ><button class=\"btn  btn-outline-light text-info btn-sm\"><img src =images/direct.png width=22></button></form>";
    $website=$companysite;#."\' target =_blank title=\'WebSite\' ><img src =images/link.png width=22></a>";
    $diplay="";#<table width=100%> <tr><td>". $directions."</td><td> </td> <td>".$website."</td><td> </td></tr></table>";
    $result['description']=str_replace("Japan","",$result['description']);
    $result['description']=str_replace("japan","",$result['description']);
    $result['description']=str_replace(",","",$result['description']);
   $data.=  ",[".$result['latitude'].",".$result['longitude'].",'".$result['ename']."','','0','".$result['description']."','". $result['type']."','".$result['traintype']."','". $result['marker']."']\n";
}


echo $data;
echo " ]; ";

 

