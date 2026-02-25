<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";
echo " <body>  ";
include BASEPATH ."/docs/menu.php";
echo  "<br>
	 <div class=\"container  container-md  \">


    <div class='text text-center'> <span class=text><h1> Trains </h1></span></div>


 
 <div class=\"col\"> 
 	<div class=\"card\">
       <div class=\"card-body lh-base text-start text-wrap text text-start  \">  
            Trains, trains and more trains .  Not the only way to travel in Japan but definitely the most effecient and enjoyable. The JR pass if used correctly will be be worthwile, see the  <a href='shinkansen.php'  class='text-blue'style='text-decoration: none;'  >Shinkansen</a> for a few ways to use it.<br>
            <br>For timetables and prices I found <a href=\"https://www.hyperdia.com/\" class='text-blue'style='text-decoration: none;'  >Hyperdia</a> to be highly reliable
            <br>For the big cities invest in an <a href='icards.php' class='text-blue'style='text-decoration: none;'  >IC Card</a>  not only for travel for the buying train snacks. The JR Network covers the whole country (JR Central, JR West, JR East , JR Hokkaido, , JR Kyushu and and JR Shikoku)
            <br>IC Card is used for the private railays and Metro services in the bigger citis that will no be covered by your JR Pass<br>
            <br><b>Train Etiquete</b><br>Eating and drinking are permitted on trains, however where the seat run down the side of the train ,its is not permitted. Where the seat run across the train , two or more abreast then it is considered to be permissable. On very busy trains in the big cities it is considered impolite. Dont eat food with over powering smell
            <br>City stations have lines on the platform for queuing to get on the train, usually not smaller or rural paltforms.
            <br>On the Metro lines take note that there are female only carriages , its is not for male partners.
            <br>Where you backpack at the front on crowded trains.
            <br>Mobile Phones- Dont take calls and turn your sound down
            <br> 
            	  </div>
	</div>
   

<div class=\"container-fluid text-center\">
  <div class=\"row\">
    <div class=\"col\"><center><br>
        <div class=\"card\" style=\"width: 18rem;\"><center><br>
           <a href='shinkansen.php'  class=\"text\" > <img  src=\"images/shinkansen.png\" style='height:250px;width:250px; '  alt=\"shinkansen\"></a>
           
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='shinkansen.php'  class=\"text\" >Shinkansen</a></p>
            </div>            
	  </div>
	</div>
           <div class=\"col\"><center><br>
        <div class=\"card\" style=\"width: 18rem;\"><center><br>
           <a href='jrpass.php'  class=\"text\" > <img  src=\"images/japan-rail-pass-1695136181.avif\" style='height:250px;width:250px; '  alt=\"JR Pass\"></a>
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='jrpass.php'  class=\"text\" >JR Pass</a></p>
            </div>            
	  </div>
	 	</div>
           <div class=\"col\"><center><br>
        <div class=\"card\" style=\"width: 18rem;\"><center><br>
           <a href='icards.php'  class=\"text\" > <img  src=\"images/iccard.png\" style='height:250px;width:250px; '  alt=\"JR Pass\"></a>
           
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='icards.php'  class=\"text\" >IC Cards [Travel Cards]</a></p>
            </div>            
	  </div> 
	 	  
	</div>
  
	
        <div class=\"col\"><center><br>
        <div class=\"card\" style=\"width: 18rem;\"><center><br>
           <a href='stations.php'  class=\"text\" > <img  src=\"images/keio.png\" style='height:250px;width:250px; '  alt=\"railway heat map\"></a>
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='stations.php'  class=\"text\" >Station Map</a></p>
            </div>         

               
	  </div>

</div>
   </div>
		<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">
		<meta property=\"og:type\" content=\"website\">
		<meta property=\"og:url\" content=\"https://botoishi.com.au/e/".$_SERVER['PHP_SELF'] .".php\">
 </head>";


echo "<p id=\"locationmap\" style='margin-top: 0;'></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";
/*
</div>
	   <div class=\"col\"><center><br>
        <div class=\"card\" style=\"width: 18rem;\"><center><br>
            <img  src=\"images/local.png\" style='height:250px;width:250px; '  alt=\"localtrains\">
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='locals.php'  class=\"text\" >Non JR Railways</a></p>

         </div>

  </div>
*/

include BASEPATH ."/docs/footer.php";
