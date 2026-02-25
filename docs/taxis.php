<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

echo"<body >";

include BASEPATH ."/docs/menu.php";


echo "

<br>

 <div class=\"container  container-md  \">

 <div class=\"col\"></div> 
 	<div class=\"card  border-0\"><br><center> 
    <div class='text text-center'><h1> <b>Taxis</b></h1></div>
    </div><div></div> 


 
 <div class=\"col\"> 
 	<div class=\"card\"><br><center><br>
  <div class='text text-start card-body '><p>

Taxis are plentiful in the big cities,in the smaller town and rural areas the number of taxis decrease  , but genrally they will be found around the local train station <br>
 
<br>Signs in the front of taxis show if they are available. These are usually displayed in Japanese, but they are color coded.<br>
 Red means the taxi can pick up passengers,
 <br>Green means it is occupied.<br>
 <br>Doors open and close automatically, so don't try to handle them yourself as you enter and exit.
 <br>it is a good idea to have your destination written in Japanese<br>
 <br><b>Taxi Apps</b>
 <br>Download an app to make ordering a taxi in Japan much easier. The following apps offer an English language service once downloaded—S.RIDE, Uber, DiDi, and GO
   
    
 
 

 </div> 
 
 
 </div> ";

echo "<p id=\"locationmap\" style='margin-top: 0;'></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";



include BASEPATH ."/docs/footer.php";
