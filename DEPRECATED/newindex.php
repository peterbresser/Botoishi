<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


echo "
<title>Explore Japan</title>";
;
echo"  <style>
  img.test {
   max-width: 100%;
 
    min-width: 300px;
    min-height: 250px;
    max-height:100%;
}
.carousel-item{
    min-height:550px;
}
</style>

</head>
<body>
";

include BASEPATH ."/docs/menu.php";

echo"

 
 
    <div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
        <!-- Carousel indicators -->
        <ol class=\"carousel-indicators\">
            <li data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\" class=\"active\"></li>
            <li data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\"></li>
            <li data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\"></li>
              <li data-bs-target=\"#myCarousel\" data-bs-slide-to=\"3\"></li>
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
    <h1 class=\"card-title text-white\">Explore Japan</h1>
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

";




include BASEPATH ."/docs/footer.php";
