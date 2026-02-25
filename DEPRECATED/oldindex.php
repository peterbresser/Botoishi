<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


echo "<head>
    <meta charset=\"UTF-8\">
		<meta name=\"description\" content=\"Explore Japan.\">
		<meta name=\"keywords\" content=\"japan, exploring japan , sugestions, japan trains ,japan maps\">
		<meta name=\"twitter:card\" content=\"summary_large_image\">
		<meta name=\"twitter:site\" content=\"@botoishi\">
		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
		<meta property=\"fb:app_id\" content=\"".$randomid."\">
		<meta property=\"og:description\" content=\"Exploring and map  guide for Japan.\">
		<meta property=\"og:title\" content=\"Explore Japan\">
		<meta property=\"og:type\" content=\"website\">
		<meta property=\"og:url\" content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
</head>
<title>Explore Japan</title>";
;
echo"  <style>
 .info {
    padding: 6px 8px;
    font: 14px/16px Arial, Helvetica, sans-serif;
    background: white;
    background: rgba(255,255,255,0.8);
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
    border-radius: 5px;
}
.info h4 {
    margin: 0 0 5px;
    color: #777;
}
 .custom-popup .leaflet-popup-content-wrapper {
      background: #2c3e50;
      color: #fff;
      font-size: 16px;
      line-height: 24px;
      border-radius: 0px;
    }
    .custom-popup .leaflet-popup-content-wrapper a {
      color: rgba(255, 255, 255, 0.1);
    }
    .custom-popup .leaflet-popup-tip-container {
      width: 30px;
      height: 15px;
    }
    .custom-popup .leaflet-popup-tip {
      background: transparent;
      border: none;
      box-shadow: none;
    }
    /* css to customize Leaflet default styles  */
    .custom .leaflet-popup-tip,
    .custom .leaflet-popup-content-wrapper {
      background: #0b3654;
      color: #ffffff;
    }
</style>
 <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"  integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


 <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>   
      
</head>
<body>
";

include BASEPATH ."/docs/menu.php";

echo"

<p id=\"locationmap\"></p>


 
    <div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\" >
        <!-- Carousel indicators -->
        <ol class=\"carousel-indicators\">";

echo "<li data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\"></li>
            <li data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\"  class=\"active\"></li>
            <li data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\"></li>
              <li data-bs-target=\"#myCarousel\" data-bs-slide-to=\"3\"></li>
             ";

echo "
        </ol>
        
        <!-- Wrapper for carousel items -->
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
            <div class=\"card text-bg-dark  \">
                <img src=\" images/japanimg1.png\"  class=\"card-img test \" width=100%  alt=\"Slide 1\">
                <div class=\"card-img-overlay\">
    <h1 class=\"card-title text-dark\">Explore Japan</h1>
    <p class=\"card-text text-danger\"> A simple guide to travelling in Japan.</p>
 
  </div>
</div>
  </div>
            <div class=\"carousel-item\">
            <div class=\"card text-bg-dark  \">
                <img src=\"images/japanimg3.png\" class=\"card-img test \" width=100%  alt=\"Slide 2\">
                 <div class=\"card-img-overlay\">
    <h1 class=\"card-title text-dark\">Explore Japan</h1>
    <p class=\"card-text text-danger\"> A simple guide to travelling in Japan.</p>
   </div>
            </div>   
            </div>
            <div class=\"carousel-item\">
              <div class=\"card text-bg-dark  \">
                <img src=\"images/japanimg2.png\" class=\"card-img test \" width=100%  alt=\"Slide 3\">
                   <div class=\"card-img-overlay\">
    <h1 class=\"card-title text-white\">Explore Japan</h1>
    <p class=\"card-text text-danger\"> A simple guide to travelling in Japan.</p>
   </div>
            </div>
        </div>
           <div class=\"carousel-item\">
              <div class=\"card text-bg-dark  \">
                <img src=\"images/japanimg4.png\" class=\"card-img test \" width=100%  alt=\"Slide 4\">
                   <div class=\"card-img-overlay\">                  
    <h1 class=\"card-title text-dark\">Explore Japan</h1>
    <p class=\"card-text text-danger\"> A simple guide to travelling in Japan.</p>
   </div>
        
        </div>
        </div>
 
        
        <!-- Carousel controls -->
        <a class=\"carousel-control-prev\" href=\"#myCarousel\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\"></span>
        </a>
        <a class=\"carousel-control-next\" href=\"#myCarousel\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\"></span>
        </a>
    </div>
 
 
<div class=\" container-fluid text-center  bg-dark\"    style=\" margin-bottom: 0;\">
 
<div class=\"container-fluid text-center bg-dark\">
  <div class=\"row\">
    <div class=\"col\"><center><br>
        <div class=\"card bg-dark\" style=\"height:20rem;width: 100%\"><center><br>
                  <div class=\"card-body bg-dark\">
                <p class=\"card-text text-white\"> A simple guide to travelling in Japan.There are no ratings,stars or reviews . 
                There are lots of maps and markers of places I found interesting, stations and hotels. With routable directions (for walking) are available when in Japan. 
                 I have attempted to provide directions not to give and provide some explanation but not dilute the exploration .
                  
</a></p>
            </div>            
	  </div>
	</div>
           

</div>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>
";




include BASEPATH ."/docs/footer.php";
