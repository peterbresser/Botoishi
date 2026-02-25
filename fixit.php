<?php




include "japan.inc";



$query=mysqli_query($japansql,"select * from locations where type ='hotel' and location_name like '%apa %'");
while($resul=mysqli_fetch_assoc($query)){
	$location_name=strtolower($resul['location_name']);
		$newlocationname=ucwords(strtolower($resul['location_name']));
		$newlocationname=str_replace('Apa ',"APA ",$newlocationname);

	mysqli_query($japansql,"update locations set location_name ='".$newlocationname."' where id= ".$resul['id']."");
			    	   echo"update locatons set location_name ='".$newlocationname."' where id ".$resul['id']." \n";

}
