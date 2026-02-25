<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";



echo"<body >
<style>


</style>
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

 

    <div class=\"container-fluid  \">
  <div class=\"row\">
    <div class=\"col\"><center>
        <div class=\"card border-0\" style=\"width: 80%;\"><center> 
        
 
		  	<source type=\"".$GLOBALS['URLOCATION']."/image/mrdonutt.webp\" srcset=\"images/mrdonutt.webp\">
		    <img src=\"".$GLOBALS['URLOCATION']."/images/mrdonutt.webp\"    class=\"desktop-only\"   width =200px    title=\"Mister Donut Mochi donut Pon De Ring Brown Sugar\"  alt=\"Mister Donut Mochi donut Pon De Ring Brown Sugar\"> 
    <img src=\"".$GLOBALS['URLOCATION']."/images/mrdonutt.webp\"  class=\"mobile-only\" width =65px  title=\"Mister Donut Mochi donut Pon De Ring Brown Sugar\"  alt=\"Mister Donut Mochi donut Pon De Ring Brown Sugar\"> 
 
	     			  	<source type=\"".$GLOBALS['URLOCATION']."/image/mrdonut2.webp\" srcset=\"images/mrdonut2.webp\">
		 		   <img src=\"".$GLOBALS['URLOCATION']."/images/mrdonut2.webp\"    class=\"desktop-only\"   width =200px    title=\"Mister Donut Chocolate Fashion\"  alt=\"Mister Donut Chocolate Fashion\">
   <img src=\"".$GLOBALS['URLOCATION']."/images/mrdonut2.webp\"  class=\"mobile-only\" width =65px  title=\"Mister Donut Chocolate Fashion\"  alt=\"Mister Donut Chocolate Fashion\">
    	 
            			<source type=\"".$GLOBALS['URLOCATION']."/image/mrdonut3.webp\" srcset=\"images/mrdonut3.webp\">
  <img src=\"".$GLOBALS['URLOCATION']."/images/mrdonut3.webp\"    class=\"desktop-only\"   width =200px    title=\"Mister Donut Pon De Ring Ganache Chocolate\"  alt=\"Mister Donut Pon De Ring Ganache Chocolate\">
   <img src=\"".$GLOBALS['URLOCATION']."/images/mrdonut3.webp\"  class=\"mobile-only\" width =65px  title=\"Mister Donut Pon De Ring Ganache Chocolate\"  alt=\"Mister Donut Pon De Ring Ganache Chocolate\">

               
           
		         	<source type=\"".$GLOBALS['URLOCATION']."/image/mrdonut4.webp\" srcset=\"images/mrdonut4.webp\">
		 		   <img src=\"".$GLOBALS['URLOCATION']."/images/mrdonut4.webp\"    class=\"desktop-only\"   width =200px    title=\"Mister DonutFrench Cruller\"  alt=\"Mister DonutFrench Cruller\">
   <img src=\"".$GLOBALS['URLOCATION']."/images/mrdonut4.webp\"  class=\"mobile-only\" width =65px  title=\"Mister DonutFrench Cruller\"  alt=\"Mister DonutFrench Cruller\">
 
            <div class=\"card-body lh-base text-start text-wrap text text-start  \">  
          
 
	  </div>
	</div>
   <div class=\"card border-0\" ><center>   <header>
   
   	<source type=\"".$GLOBALS['URLOCATION']."/image/mrdonulogo.webp\" srcset=\"images/mrdonulogo.webp\">
		 		   <img src=\"".$GLOBALS['URLOCATION']."/images/mrdonulogo.webp\"    class=\"desktop-only\"   width =300px    title=\"Mister Donut Logo\"  alt=\"Mister Donut Logo\">
   <img src=\"".$GLOBALS['URLOCATION']."/images/mrdonulogo.webp\"  class=\"mobile-only\" width =115px  title=\"Mister Donut Logo\"  alt=\"Mister Donut Logo\">
 
   
 
	    <br>  <b><H1> <span class='text-white'>Mister Donut</span></H1></b> 
</header>
<main>The best donuts in Japan<br>
	      You will not find a double Expresso Frappe Late , but you will get refills and the best donuts in Japan
	     <br>There are over 1000 stores nationwide, you are never too far away from one
	     <br>We found Mister Donut the first time in Nara(-12C) and have never stopped going back
	     <br> When you are cold & hungry and crave something hot and sweet there is no other place<br> 
	     
	     </main>
	     </div>
	</div>
  </div>
</div>

<div class=\"container-fluid text-center\">
  
     <div class=\"col\"><center><br>
        <div class=\"card\" style=\"width: 18rem;\"><center><br>
          <a href='mrdonutmap.php'  class=\"text\" >  <img  src=\"images/donutmap.png\" style=' ;width:250px; '  alt=\"mrdonut\"></a>
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='mrdonutmap.php'  class=\"text\" >Mister Donut Map</a></p>
             
         </div>
	  </div>

   ";





include BASEPATH ."/docs/footer.php";
