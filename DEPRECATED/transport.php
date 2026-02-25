<?php

include "../config.php";
include BASEPATH ."/msdb.inc";

$GLOBALS['JAPAN']=$japansql;


echo "

		<!DOCTYPE html>
<html lang=\"en\">
  <head>
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT\" crossorigin=\"anonymous\">

 


  ";


include BASEPATH."/docs/css/mymaper.php";


echo "</head>";


date_default_timezone_set('Australia/Sydney');
$now=strtotime("now")-(2*60*60);
;
echo "<body>
</div>

<center>";
	$active ='';



include "myheader.php";


echo "<script src=\https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO\" crossorigin=\"anonymous\"></script>
</body>
";

?>

