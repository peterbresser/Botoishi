<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";



echo"<body >
 
<center>

<div class=\"container  container-md  border-0 \">
 <div class=\"row p-2  border-0 \">
    <div class=\"col  text-start p-2  border-0 \"
      <center ><h1><center>Random Station Locator</h1><br>
            <div class=\"card-body lh-base text-start text-wrap text text-start  \">  
    <p class=\"text-start lead mt-2\">  <Br> Cant work where to go or what see , try our random station Locator  , just like throwning a dart at the map to locate a random station in Japan, One station per IP per day .  
         </div>
	  </div>
	</div>
<div class=\"container-fluid text-center\">
  <div class=\"row\">
    <div class=\"col\"><center>
            <div class=\"card-body border-0\">
             <form method =POST action=randomstations.php  title='Random Station Locator' > 

	<input type=image  src=\"images/local.png\" style='height:500px;width:500px; '  alt=\"Random Station Locator\">
	<input type=hidden name=framed_ip  value=".$_SERVER['REMOTE_ADDR']."  ></form>

   <center>  		<p class=\"card-text text-dark\" align =center>Some Random Station</p>
            </div>            
	</div>
 
	</div>
  </div>
</div>




";

echo "<p id=\"locationmap\" style='margin-top: 0;'></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";



include BASEPATH ."/docs/footer.php";
