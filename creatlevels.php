<?php 


include  "japan.inc";

   $markers=array(1,3,6,9,12,15,18,21,24,27,30,33,36,39,42,45,48,51,54,57,60);

   $markers5=array(1,5,10,15,20,25,30,35,40,45,50,55,60);

   $markers10=array(1,10,20,30,40,50,60);

    $starlat='';
    $starlon='';
$checked=array();
    $query=mysqli_query($japansql ,"select   distinct  stations.line_id  from stations  inner join jplines on stations.line_id =jplines.line_id ");
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){

	$lineid[$result['line_id']]=$result['line_id'];
}

foreach($lineid as $line){
    $squery=mysqli_query($japansql ,"select  count(line_id) as stations ,line_id from   stations where line_id ='".$line."' group by line_id  ");
if($sresult=mysqli_fetch_array($squery,MYSQLI_ASSOC)){
$scounter=1;
if($sresult['stations']<5){
	 $bquery=mysqli_query($japansql ,"select  * from   stations where line_id ='".$line."'   ");
	$smallcounter=1;
echo 	$endcount=mysqli_num_rows($bquery);
echo "\n";
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
	while($aresult=mysqli_fetch_array($aquery,MYSQLI_ASSOC)){
		if($scounter==1){
	mysqli_query($japansql ,"update stations set zoomlevel= 11 where id =".$aresult['id']."");	
			 ECHO $scounter."  ".$aresult['id']."  ".$aresult['line_id']." 12\n";
				}
	 if($scounter==2){
        mysqli_query($japansql ,"update stations set zoomlevel= 12 where id =".$aresult['id']."");
                         ECHO $scounter."  ".$aresult['id']."  ".$aresult['line_id']." 13\n";
                                }
	  if($scounter==3){
           mysqli_query($japansql , "update stations set zoomlevel= 13 where id =".$aresult['id']."");
                         ECHO $scounter."  ".$aresult['id']."  ".$aresult['line_id']." 14\n";
                                }
          if($scounter==4){
           mysqli_query($japansql , "update stations set zoomlevel= 14 where id =".$aresult['id']."");
                         ECHO $scounter."  ".$aresult['id']."  ".$aresult['line_id']."   15\n";
                        }

          if($scounter==5){
           mysqli_query($japansql , "update stations set zoomlevel= 15 where id =".$aresult['id']."");
                         ECHO $scounter."  ".$aresult['id']."  ".$aresult['line_id']."   16\n";
                            }

	 if($scounter==6){
           mysqli_query($japansql , "update stations set zoomlevel= 16 where id =".$aresult['id']."");
                         ECHO $scounter."  ".$aresult['id']."  ".$aresult['line_id']."   16\n";
                        $scounter=1;
                            }
		$scounter++;
			}
		

	
##exit();
	##echo $scounter."\n";
	}
	}
}

