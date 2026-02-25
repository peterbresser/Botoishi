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
  
     
   
<div class=\"card border-0\"  ><center>
	    <b><H1>The Tokyo Toilet Project</H1></b> <br>



        <p><img src=\"".$GLOBALS['URLOCATION']."/images/tokyotoilet.webp\"    class=\"desktop-only\"   width =1200px     alt='Tanner from YouTube'></p>
    <p><img src=\"".$GLOBALS['URLOCATION']."/images/tokyotoilet.webp\"  class=\"mobile-only\" width =500px   alt='Tanner form YouTube'></p>
           
	       <br>The Tokyo Toilet Project is an urban redevelopment project in Shibuya, Tokyo conceived by entrepreneur Koji Yanai, of Uniqlo and Fast Retailing, and funded by the Nippon Foundation.
	       <br> The toilets are easter eggs in the vastness of the Tokyo landscape,some blend into the urban that make them invisible and others scream out so loud they get ignored.<br>
	       <br>In 2023 Wim Wenders directed The Pefect Days  ,the film centers around  Hirayama a Tokyo toilet cleaner (featuring the toilets in the project ) <br>
	        and his day to day rituals, his precision and patience of doing his job. It is a \"day in the life\" film but with point of intersection.<br>
	          
	    </div>
	</div>
  </div>
</div>

<div class=\"container-fluid text-center\">
  
     <div class=\"col\"><center><br>
        <div class=\"card\" style=\"width: 18rem;\"><center><br>
          <a href='toiletmap.php'  class=\"text\" >  <img  src=\"images/donutmap.png\" style=' ;width:250px; '  alt=\"mrdonut\"></a>
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='toiletmap.php'  class=\"text\" >Tokyo Toilet Project Map</a></p>
             
         </div>
	  </div>

   ";





include BASEPATH ."/docs/footer.php";
