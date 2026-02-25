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
	    <b><H1>Tanners Stations</H1></b> <br>
 <a href=\"https://www.youtube.com/@tanners.videos/videos\" target='_blank' class='text-blue'  style='text-decoration: none;' >


        <p><img src=\"".$GLOBALS['URLOCATION']."/images/tanner.webp\"    class=\"desktop-only\"   width =1000px     alt='Tanner from YouTube'></p>
    <p><img src=\"".$GLOBALS['URLOCATION']."/images/tanner.webp\"  class=\"mobile-only\" width =350px   alt='Tanner form YouTube'></p>
   
	      Tanner runs a <a href=\"https://www.youtube.com/@tanners.videos/videos\" target='_blank' class='text-blue'  style='text-decoration: none;' > YouTube</a> chanel devoted the Railways and Stations primarily in Japan .<br> <br>
	      Whilst I am not a train spotter I do enjoy a train , a station and a map.He goes to some out of the way places that are quite interesting , and to places that I would have never discovered or thought it worth the trip.
	       <br>The locations are well of the beaten track and there is still enough mystery around each location to make it worth a look. <br>There are no curated images  , I avoid using google maps , I find there is too much detail , reviews ratings that take away form the enjopyment of exploring somewhere sight unseeen. <br>I know a YouTube chanel is the opposite of what I sprouting but its realy good jumping off point  , as Tanner is more about the Journey , the trains and the staions and not so much about the destintation 
	    </div>
	</div>
  </div>
</div>

<div class=\"container-fluid text-center\">
  
     <div class=\"col\"><center><br>
        <div class=\"card\" style=\"width: 18rem;\"><center><br>
          <a href='tannermap.php'  class=\"text\" >  <img  src=\"images/donutmap.png\" style=' ;width:250px; '  alt=\"mrdonut\"></a>
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='tannermap.php'  class=\"text\" >Tanners Station Map</a></p>
             
         </div>
	  </div>

   ";





include BASEPATH ."/docs/footer.php";
