<?php

include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";

header('Access-Control-Allow-Origin: http://localhost:5001');
header('Access-Control-Allow-Origin: https://routing.botoishi.com.au');
echo "
 
      </style>   

   <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"
     integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


       <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"
     integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>  
 


   <script language=\"javascript\">

	function init() {
  ;                       
";


$endlongitude=$_POST['longitude'];
$endlatitude= $_POST['latitude'];




include BASEPATH ."/docs/myjsfunctions.js";

include BASEPATH . "/docs/directionlist.php";




echo "}


</script>";



include BASEPATH ."/docs/mapfooter.php";






include BASEPATH ."/docs/footer.php";
