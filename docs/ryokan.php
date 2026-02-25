<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";



echo "

 
<body>
  
         <br><center>

<div class=\"container  container-md  border-0 text-center\">
 <div class=\"row p-2  border-0 \">
    <div class=\"col  text-start p-2  border-0 \">
      <div class=\"card border-0  text-center\"> 
        
		<picture>
		  <source type=\"image/webp\" srcset=\"images/ryokan.webp\">
	 	<img src=\"images/ryokan.webp\"    alt=\"Japanese ryokan with onsen .\"> 
		</picture>
	     	
            <div class=\"card-body lh-base text-start text-wrap text text-start  \">  
          
 
	  </div>
       <h1>  Ryokan</h1><br>
            <div class=\"card-body lh-base text-start text-wrap text text-start   border-0 \">  
    <p class=\"text-start lead mt-2\">  <Br> Ryokan is a traditional Japanese Inn , that typically features tami matted rooms, onsen and  kaiseki, meals (multiple courses and multi dishes of seasonal and regional specialtie) . You will find more traditional ones in rural  and onsen towns . Most are in the traditional Japanese buildings but there are more and more modern style buildings providing the full experience. 
      <br>Rates tend to be more for Ryokan vs Hotel  , and rightly so, the experience is so much more. Ryokans will normally privide yakata , slippers/sandals to where around and out and about the premises
         </div>
	  </div>
	</div>
   
            <br><center>

<div class=\"container-fluid  \">
  <div class=\"row  \">
    <div class=\"col  \">
 	<div class=\"card\" style=\"width: 18rem;\"> 
          <a href='ryokanmap.php?type=hotel&island=all'  class=\"textnon\" ><br>  <img  src=\"images/japan-map-png.png\" style='height:250px;width:250px; '  alt=\"allryokan\">
            <br><center><div class=\"card-body \">
        
       <div class=\"card-footer border-0\" style=\"padding:0!important;\">
      <div class=\"row border-0\" style=\"margin:0!important;\">
        <a href='ryokanmap.php?type=hotel&island=all' class=\"col-sm-6\" style=\"background-color:cccccc;text-decoration:none;text-align:center;\">
                Ryokan Map
              </a>
        <a href='ryokans.php' class=\"col-sm-6\"  style=\"background-color:cccccc;;text-decoration:none;text-align:center;\">
                Ryokan List
              </a>
      </div>
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


/* <div class=\"col\"><br><center>
        <div class=\"card\" style=\"width: 18rem;\"><br><center>
            <img  src=\"images/honshu.png\" style='height:250px;width:250px; '  alt=\"homshuryokan\">
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href=homshuryokan.php'  class=\"textnon\" ></a></p>
                         <p class=\"card-text text-dark\"><a href='ryokanmap.php?type=hotel&island=honshu'  class=\"textnon\" >Honshu Map</a></p>
            </div>
         </div>
        </div>

     <div class=\"col\"><br><center>
        <div class=\"card\" style=\"width: 18rem;\"><br><center>
            <img  src=\"images/shikoku.png\" style='height:250px;width:250px; '  alt=\"shikokuryokan\">
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='shikokuryokan.php'  class=\"textnon\" > </a></p>
              <p class=\"card-text text-dark\"><a href='ryokanmap.php?type=hotel&island=shikoku'  class=\"textnon\" >Shikoku Map</a></p>
            </div>
	  </div>
	</div>
     <div class=\"col\"><br><center>
        <div class=\"card\" style=\"width: 18rem;\"><center><br>
            <img  src=\"images/kyushu.png\" style='height:250px;width:250px; '  alt=\"kyushuryokan\">
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='kyushuryoakan.php'  class=\"textnon\" ></a></p>
                <p class=\"card-text text-dark\"><a href='ryokanmap.php?type=hotel&island=kyushu'  class=\"textnon\" >Kyushu Map</a></p>
         </div>
	  </div>
	</div>*/
