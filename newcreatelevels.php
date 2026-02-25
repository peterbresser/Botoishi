<?php 


include  "japan.inc";
   $markersall=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103);
$markers3=array(1,3,5,7,9,11,13,15,17,19,21,23,25,27,29,31,33,35,37,39,41,43,45,47,49,51,53,55,57,59,61,63,65,67,69,71,73,75,77,79,81,83,85,87,89,91,93,95,97,99,101,103,105,107,109);
$markers4=array(1,4,8,12,16,20,24,28,32,36,40,44,48,52,56,60,64,68,72,76,80,84,88,92,96,100);
$markers5=array(1,5,10,15,20,25,30,35,40,45,50,55,60,65,70,75,80,85,90,95);
$markers10=array(1,10,20,30,40,50,60,70,80,90,100,110,120,130);

    $starlat='';
    $starlon='';
$checked=array();
    $query=mysqli_query($japansql ,"select   distinct  stations.line_id  from stations  inner join jplines on stations.line_id =jplines.line_id ");
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){

	$lineid[$result['line_id']]=$result['line_id'];
}

foreach($lineid as $line){
    $squery=mysqli_query($japansql ,"select  count(line_id) as stations ,line_id from   stations where line_id ='".$line."' group by line_id  ");
$linecount=mysqli_num_rows($squery);
if($sresult=mysqli_fetch_array($squery,MYSQLI_ASSOC)){
$scounter=0;
if($sresult['stations']<5){
	 $bquery=mysqli_query($japansql ,"select  * from   stations where line_id ='".$line."'   ");
	$smallcounter=1;
        while($bresult=mysqli_fetch_array($bquery,MYSQLI_ASSOC)){
		if($smallcounter==1)
			 mysqli_query($japansql ,"update stations set zoomlevel= 12 where id =".$bresult['id']." "); 
		if($smallcounter==$endcount)
                         mysqli_query($japansql , "update stations set zoomlevel= 12 where id =".$bresult['id']."");


		$smallcounter++;
		}
	}
else{
	$scounter=1;
	echo  $line." ----> ". $sresult['stations']."\n";
	$aquery=mysqli_query($japansql ,"select  * from   stations where line_id ='".$line."'   ");
    echo    "---------------------------> ".$endcount=mysqli_num_rows($aquery)."<----\n";

	while($aresult=mysqli_fetch_array($aquery,MYSQLI_ASSOC)){

	 if(in_array($scounter,$markersall)){
	mysqli_query($japansql ,"update stations set zoomlevel= 16 where id =".$aresult['id']."");	
			 ECHO $scounter."  ".$aresult['id']."  ".$aresult['line_id']."\n";
				}
	 if(in_array($scounter,$markers3)){
        		mysqli_query($japansql ,"update stations set zoomlevel= 15 where id =".$aresult['id']."");
                         ECHO $scounter."  ".$aresult['id']."  ".$aresult['line_id']."\n";
                                }
	 if(in_array($scounter,$markers4)){
           mysqli_query($japansql , "update stations set zoomlevel= 14 where id =".$aresult['id']."");
                         ECHO $scounter."  ".$aresult['id']."  ".$aresult['line_id']."\n";
                                }
	if(in_array($scounter,$markers5)){
           mysqli_query($japansql , "update stations set zoomlevel= 13 where id =".$aresult['id']."");
                         ECHO $scounter."  ".$aresult['id']."  ".$aresult['line_id']."\n";
                        }
        if(in_array($scounter,$markers10)){
           mysqli_query($japansql , "update stations set zoomlevel= 12 where id =".$aresult['id']."");
                         ECHO $scounter."  ".$aresult['id']."  ".$aresult['line_id']."\n";

                        }
  $scounter++;

if($endcount==$scounter){

	echo "+++++++++++++++++++  ".$endcount." ++++++++++++++++++++++\n\n";
}





	}
##exit();
	##echo $scounter."\n";
	}
	}
}
