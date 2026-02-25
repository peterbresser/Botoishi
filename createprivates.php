<?php

include  "japan.inc";
           $query=mysqli_query($japansql ,"select  *   from company    ");
                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {

                    $GLOBALS['TRAINCO'][$result['company_id']]=array('company_id'=>$result['company_id'],'company_link'=>$result['company_link']);
                }

print_r($GLOBALS['TRAINCO']);
    $starlat='';
    $starlon='';
$checked=array();
echo  'const stationS = {
"type": "FeatureCollection",
 "features":[';
$query=mysqli_query($japansql ,"select * from jplines   inner join company   on jplines.company_id= company.company_id where line_name not like 'JR%' ");

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
	echo "\n\n".$result['line_name']."  ".$result['company_name']."\n";
$lquery=mysqli_query($japansql ,"select * from stations where line_id ='".$result['line_id']."' ");
while($sresult=mysqli_fetch_assoc($lquery))
echo $sresult['ename']."  ".$sresult['latitude']."  ".$sresult['longitude']."  ".$sresult['address']."  ".$sresult['jname']."\n";

}

/*
 * [0] => 9992804
    [id] => 9992804
    [1] => 関門海峡めかり
    [jname] => 関門海峡めかり
    [2] => Near the Kanmon Strait
    [ename] => Near the Kanmon Strait
    [3] => 33.960627
    [latitude] => 33.960627
    [4] => 130.967347
    [longitude] => 130.967347
    [5] => 40
    [prefecture] => 40
    [6] => Moji, Moji Ward, Kitakyushu City, Fukuoka Prefecture
    [address] => Moji, Moji Ward, Kitakyushu City, Fukuoka Prefecture
    [7] => 1
    [active] => 1
    [8] => 99928
    [line_id] => 99928
    [9] => 1
    [zoomlevel] => 1

select   longitude, latitude ,ename,jname,address ,stations.id as id , stations.line_id as lineid, company_id, line_name  from stations inner join japan.jplines jp  on  stations.line_id =jp.line_id where  active =1 and latitude!='0' ");
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){

    $startlat=$result['longitude'];
    $startlon=$result['latitude'];
    $locationlat=$result['latitude'];
    $locationlong=$result['longitude'];
    $result['ename']=ucwords(strtolower($result['ename'])) ."    <br> ".$result['jname']."";
 $companysite=$GLOBALS['TRAINCO'][$result['company_id']]['company_link'];
    // print_r( $result['company_id']);
$result['address']=str_replace(","," ",$result['address']);
    $directions="<form method=POST action=directions.php title ='Walking Directions'><input type=hidden name=id value =".$result['id']." ><input type=hidden name=stationlocation value=1 ><input type=hidden name=longitude value =".$result['longitude']." ><input type=hidden name=latitude value =".$result['latitude']." ><input type=hidden name=initial value =1 ><button class='btn  btn-outline-light text-info btn-sm'><img src =images/direct.png width=22></button></form>";
    $website="<a href ='".$companysite."' target =_blank title=\'WebSite\' ><img src =images/link.png width=22></a>";
    $display="<table width=100%> <tr><td>". $directions."</td><td> </td> <td>".$website."</td><td> </td></tr></table>";
    $result['address']=str_replace("Japan","",$result['address']);
    $result['address']=str_replace("japan","",$result['address']);
    $result['address']=str_replace(",","<br>",$result['address']);

if(substr_count($result['line_name'],"(")>0)
	$result['line_name']=str_replace("(","<br>(",$result['line_name']);

    if(isset($_GET['id'])) {
        $idlatlon=$result['latitude'].",".$result['longitude']."";
    }

    if(!array_key_exists($result['latitude'],$checked)){
		$checked[$result['latitude']]=array('latitude'=>$result['latitude'], 'longitude'=> $result['longitude'],'read'=>0.01);;

    if(strlen($data)>0)
    		  $data.= '
,{ "type": "Feature",
"geometry": {"type": "Point", "coordinates":['.$result['latitude'].','.$result['longitude'].']},
"properties": {"ename":"'.$result['ename'].'", "jname":"'.$result['jname'].'","address":"'.$result['address'].'", "lineid":"'.$result['lineid'].'","line_name":"'.$result['line_name'].'","display":"'.$display.'","marker":"0","mtype":"0","traintype":"0"}
}';
	else
		  $data= '
{ "type": "Feature",
"geometry": {"type": "Point", "coordinates":['.$result['latitude'].','.$result['longitude'].']},
"properties": {"ename":"'.$result['ename'].'", "jname":"'.$result['jname'].'","address":"'.$result['address'].'", "lineid":"'.$result['lineid'].'","line_name":"'.$result['line_name'].'","display":"'.$display.'","marker":"0","mtype":"0","traintype":"0"}
}';


	}

else{
 $result['latitude']." 111  ".$result['longitude']."\n";
$checked[$result['latitude']]['read']+=0.01;
$checked[$result['latitude']]['read']."\n";
	$result['latitude']=$result['latitude']+$checked[$result['latitude']]['read'];
	$result['longitude']=$result['longitude']+$checked[$result['latitude']]['read'];
	 $result['latitude']." 222  ".$result['longitude']."\n";
	$checked[$result['latitude']]=array('latitude'=>$result['latitude'], 'longitude'=> $result['longitude'],'read'=>0.01);
$result['address']=str_replace(","," ",$result['address']);
    $directions="<form method=POST action=directions.php title ='Walking Directions'><input type=hidden name=id value =".$result['id']." ><input type=hidden name=stationlocation value=1 ><input type=hidden name=longitude value =".$result['longitude']." ><input type=hidden name=latitude value =".$result['latitude']." ><input type=hidden name=initial value =1 ><button class='btn  btn-outline-light text-info btn-sm'><img src =images/direct.png width=22></button></form>";
    $website="<a href ='".$companysite."' target =_blank title=\'WebSite\' ><img src =images/link.png width=22></a>";
    $display="<table width=100%> <tr><td>". $directions."</td><td> </td> <td>".$website."</td><td> </td></tr></table>";


    $data.= '
,{ "type": "Feature",
"geometry": {"type": "Point", "coordinates":['.$result['latitude'].','.$result['longitude'].']},
"properties": {"ename":"'.$result['ename'].'", "jname":"'.$result['jname'].'","address":"'.$result['address'].'", "lineid":"'.$result['lineid'].'","line_name":"'.$result['line_name'].'","display":"'.$display.'","marker":"0","type":"0","traintype":"0"}
}';


}

}

$query=mysqli_query($japansql ,"select    id, location_name , latitude, longitude, description as address,  web_page, marker, type,traintype from locations where  active =1 and latitude!='0'  and type !='station'");
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
    $startlat=$result['longitude'];
    $startlon=$result['latitude'];
    $locationlat=$result['latitude'];
    $locationlong=$result['longitude'];
    $result['ename']=$result['location_name'] ;
     $companysite=$result['web_page'];;
    // print_r( $result['company_id']);
$result['address']=str_replace(","," ",$result['address']);

    $directions="<form method=POST action=directions.php title ='Walking Directions'><input type=hidden name=id value =".$result['id']." ><input type=hidden name=stationlocation value=0 ><input type=hidden name=longitude value =".$result['longitude']." ><input type=hidden name=latitude value =".$result['latitude']." ><input type=hidden name=initial value =1 ><button class='btn  btn-outline-light text-info btn-sm'><img src =images/direct.png width=22></button></form>";
    $website="<a href ='".$resul['web_page']."' target =_blank title='WebSite' ><img src =images/link.png width=22></a>";
    $display="<table width=100%> <tr><td>". $directions."</td><td> </td> <td>".$website."</td><td> </td></tr></table>";
    $result['address']=str_replace("Japan","",$result['address']);
    $result['address']=str_replace("japan","",$result['address']);
    $result['address']=str_replace(",","<br>",$result['address']);


 $data.= '
,{ "type": "Feature",
"geometry": {"type": "Point", "coordinates":['.$result['latitude'].','.$result['longitude'].']},
"properties": {"ename":"'.$result['location_name'].'", "jname":"'.$result['jname'].'","address":"'.$result['address'].'", "lineid":"0","line_name":"0","display":"'.$display.'","marker":"'.$result['marker'].'","mtype":"'.$result['type'].'","traintype":"'.$result['traintype'].'"}
}';

}














echo $data;




echo " 		
	]
}; ";

 */

