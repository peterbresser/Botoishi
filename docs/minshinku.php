<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";



echo"<body >
 
<center>

<div class=\"container  container-md  border-0 \">
 <div class=\"row p-2  border-0 \">
    <div class=\"col  text-start p-2  border-0 \"
      <center ><h1><center>Guest House</h1><br>
            <div class=\"card-body lh-base text-start text-wrap text text-start  \">  
    <p class=\"text-start lead mt-2\">  <Br> Guest House are similar to BnB ( most are probably on Air BnB)  . We have only stayed at  a few,a lot of the time you will share the space with the owners .It is an affordable way to stay. You will find them mainly in rural areas , they can be difficult to find for westerners.The best way is to go to the local tourist information centere , usually next to the railway staion
      
         </div>
	  </div>
	</div>
   
    
         <br><center>

<div class=\"container-fluid text-center\">
  <div class=\"row\">
    <div class=\"col\"><br><center>
 	<div class=\"card\" style=\"width: 18rem;\"><br><center><br>
            <a href='minshinkumap.php?type=hotel&island=all'  class=\"textnon\" ><img  src=\"images/japan-map-png.png\" style='height:250px;width:250px; '  alt=\"japanguesthouse\">
            <div class=\"card-body\">
                <p class=\"card-text text-dark\">
                 <p class=\"card-text text-dark\">Guest HouseMap</a></p>
            </div>            
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
