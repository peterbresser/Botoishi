<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";

echo"<body >
 <center>

<div class=\"container-fluid text-center\">
  <div class=\"row\">
  <div class=\"col\"><br><center>
 	<div class=\"card\" style=\"width: 18rem;\"><br><center>
            <img  src=\"images/japan-map-png.png\" style='height:250px;width:250px; '  alt=\"hokaidoryokan\">
            <div class=\"card-body\">
              
                 <p class=\"card-text text-dark\"><a href='stationmap.php?island=all'  class=\"text\" >Full Map</a></p>
             
            </div>            
         </div>
	</div>
    <div class=\"col\"><br><center>
 	<div class=\"card\" style=\"width: 18rem;\"><br><center>
            <img  src=\"images/hokkaido.png\" style='height:250px;width:250px; '  alt=\"hokaidoryokan\">
            <div class=\"card-body\">
              
                 <p class=\"card-text text-dark\"><a href='stationmap.php?island=hokkaido'  class=\"text\" >Hokkaido Map</a></p>
           
            </div>            
         </div>
	</div>
 <div class=\"col\"><br><center>
        <div class=\"card\" style=\"width: 18rem;\"><br><center>
            <img  src=\"images/honshu.png\" style='height:250px;width:250px; '  alt=\"ryokans\">
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='stationmap.php?island=honshu'  class=\"text\" >Honshu Map</a></p>
                         
            </div>            
         </div>
        </div>
      

     <div class=\"col\"><br><center>
        <div class=\"card\" style=\"width: 18rem;\"><center><br>
            <img  src=\"images/kyushu.png\" style='height:250px;width:250px; '  alt=\"businesshotel\">
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='stationmap.php?island=kyushu' class=\"text\" >Kyushu Map</a></p>
               
         </div>
	  </div>
	</div>
  </div>
</div>
</div>
 
    <div class=\"container-fluid  \">
  <div class=\"row\">
  
  </div><div></div>
     
  <div class=\"col\"><center><br>
        <div class=\"card\" style=\"width: 100%;\"><center><br>
        <span class=h3>Stations</span>
            <div class=\"card-body lh-base text-start text-wrap text text-center  \">  
   The stations in these maps are not all stations    , they are the stations on Shinkansen routes, JR Passes ( not every station)  , and a few in interseting ones
          </div>
	  </div>
	</div>
   

     

";

echo "<p id=\"locationmap\" style='margin-top: 0;'></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";



include BASEPATH ."/docs/footer.php";
