<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";
header('Access-Control-Allow-Origin: http://localhost:5001');
echo "
<!-- Matomo -->
<!-- Matomo -->

<style>
.info {
    padding: 6px 8px;
    font: 14px/16px Arial, Helvetica, sans-serif;
    background: white;
    background: rgba(255,255,255,0.8);
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
    border-radius: 5px;
}
.info h4 {
    margin: 0 0 5px;
    color: #777;
}

</style>

<style>
.custom-popup .leaflet-popup-content-wrapper {
    background: #2c3e50;
    color: #fff;
    font-size: 16px;
      line-height: 24px;
      border-radius: 0px;
    }
    .custom-popup .leaflet-popup-content-wrapper a {
    color: rgba(255, 255, 255, 0.1);
}
    .custom-popup .leaflet-popup-tip-container {
    width: 30px;
      height: 15px;
    }
    .custom-popup .leaflet-popup-tip {
    background: transparent;
    border: none;
    box-shadow: none;
    }
    /* css to customize Leaflet default styles  */
    .custom .leaflet-popup-tip,
    .custom .leaflet-popup-content-wrapper {
    background: #0b3654;
    color: #ffffff;
}
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

print_r($_POST);
$endlongitude=$_POST['longitude'];
$endlatitude= $_POST['latitude'];




include BASEPATH ."/docs/myjsfunctions.js";

include BASEPATH . "/docs/testdirectionlist.php";




echo "}


</script>
   
</head>
<body onLoad=\"javascript:init();\">
<center><br>
       
 <table border =1 width=95% height=75% ><tr><td>  <div id=\"map\" style=\"height: 83vh;\"></div></td></tr></table>";
echo "<p id=\"locationmap\"></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";





include BASEPATH ."/docs/footer.php";
