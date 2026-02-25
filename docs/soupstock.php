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
  
  </div><div></div>
     
  <div class=\"col  \"> 
        <div class=\"card border-0  \" ><center> 
	 <source type=\"image/webp\" srcset=\"".$GLOBALS['URLOCATION']."/images/mrsoup1.webp\">
	         <p><img src=\" ".$GLOBALS['URLOCATION']."/images/mrsoup1.webp\"    class=\"desktop-only\"   width =1200px    alt='Soup Stock Tokyo , The place to re-energize during the very cold winter days '></p>
    <p><img src=\"".$GLOBALS['URLOCATION']."/images/mrsoup1.webp\"  class=\"mobile-only \" width =320px   alt='Soup Stock Tokyo , The place to re-energize during the very cold winter days '></p>
  </div>
            <div class=\"card-body lh-base text-start text-wrap text text-start  \">  
                   </div>
	  </div>
	</div>
   
<div class=\"card border-0 \"  ><center><br>   <header>
	    <b><H1>Soup Stock Tokyo</H1></b> <br>
</header>
<main>
	   Soup Stock Tokyo is a chain of soup restaurants generally found in subway station shopping areas and shopping malls
	     <br>The range of soups will entertain all taste buds , from the warm and hearty in winter to the light and refreshing in summer<br>
	     <br>When you are chasing time to get to trains to be somewhere  , this is the place to stop, slow down and drink in their rich and flavorful broths 
	     <br> <br>The place to re-energize during the very cold winter days<br> 
	     
	     </main>
	     </div>
	</div>
  </div>
</div>

<div class=\"container-fluid text-center\">
  
     <div class=\"col\"><center><br>
        <div class=\"card\" style=\"width: 18rem;\"><center><br>
          <a href='mrsoup.php'  class=\"text\" >  <img  src=\"images/donutmap.png\" style=' ;width:250px; '  alt=\"Link to Map of store locations of Stock Coup Tokyo \"></a>
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='mrsoup.php'  class=\"text\" >Soup Stock Tokyo Map</a></p>
             
         </div>
	  </div>

   ";





include BASEPATH ."/docs/footer.php";
