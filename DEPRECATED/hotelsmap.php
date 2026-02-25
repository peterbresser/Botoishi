<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";

if(isset($_POST['location'])) {
    $_GET['location']=$_POST['location'];
}

if(isset($_POST['route'])) {
    $_GET['route']=$_POST['route'];
}

echo "

 <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"  integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


 <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>   
      
   <script language=\"javascript\">

//initialise the map
	function init() {
       }
";





include BASEPATH ."/docs/css/maykers.inc";


ECHO "
</script>
   
</head>
<body>
 
 ";

echo"
 
 
<center>

 
<div class=\"container-fluid text-center\">
  <div class=\"row\">
  <div class=\"col\"><br><center>
 	<div class=\"card\" style=\"width: 18rem;\"><br><center><br>
            <a href='hotels.php?island=all'  class=\"text\" ><img  src=\"images/japan-map-png.png\" style='height:250px;width:250px; '  alt=\"hotelall\"></a>
            <div class=\"card-body\">
              
                 <p class=\"card-text text-dark\"><a href='hotels.php?island=all'  class=\"text\" >Full Map</a></p>
                       
            </div>            
         </div>
	</div>
    <div class=\"col\"><br><center>
 	<div class=\"card\" style=\"width: 18rem;\"><br><center><br>
            <a href='hotels.php?island=hokkaido'  class=\"text\" ><img  src=\"images/hokkaido.png\" style='height:250px;width:250px; '  alt=\"hokaidohotel\"></a>
            
            <div class=\"card-body\">
              
                 <p class=\"card-text text-dark\"><a href='hotels.php?island=hokkaido'  class=\"text\" >Hokkaido Map</a></p>
                  
            </div>            
         </div>
	</div>
 <div class=\"col\"><br><center>
        <div class=\"card\" style=\"width: 18rem;\"><br><center><br>
            ><a href='hotels.php?island=honshu'  class=\"text\" ><img  src=\"images/honshu.png\" style='height:250px;width:250px; '  alt=\"honshuhotel\"></a>
            
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='hotels.php?island=honshu'  class=\"text\" >Honshu Map</a></p>
                       
            </div>            
         </div>
        </div>
      
 <div class=\"col\"><br><center>
        <div class=\"card\" style=\"width: 18rem;\"><br><center><br>
           <a href='hotels.php?island=shikoku'  class=\"text\" > <img  src=\"images/shikoku.png\" style='height:250px;width:250px; '  alt=\"shikokuhotel\"></a>
           
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='hotels.php?island=shikoku'  class=\"text\" >Shikoku Map</a></p>
                       
            </div>            
         </div>
        </div>
     <div class=\"col\"><br><center>
        <div class=\"card\" style=\"width: 18rem;\"><center><br>
            <a href='hotels.php?island=kyushu' class=\"text\" ><img  src=\"images/kyushu.png\" style='height:250px;width:250px; '  alt=\"kyushuhotel\"></a>
            
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='hotels.php?island=kyushu' class=\"text\" >Kyushu Map</a></p>
           
         </div>
	  </div>
	</div>
  </div>
</div>


";

echo "<p id=\"locationmap\" style='margin-top: 0;'></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";




include BASEPATH ."/docs/mapfooter.php";


include BASEPATH ."/docs/footer.php";
