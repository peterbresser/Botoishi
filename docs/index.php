<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";

echo"<style >
 
    @media only screen and (min-width: 1025px) {
        .mobile-only {
            display:none !important;
        }
    }
    @media only screen and (max-width: 1026px) {
        .desktop-only {
            display:none !important;
        }
    }
</style>
 

  <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"  integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


 <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>   
       <script language=\"javascript\" src =\"js/min.teststations.js\"></script> 
 
 <body >
 




<main>
<div id=\"myCarousel\" class=\"carousel slide text-bg-light \" data-bs-ride=\"carousel\" data-bs-interval=\"5000\" >
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
    <div class=\"carousel-item active  \">

    <p><img src=\" ".$GLOBALS['URLOCATION']."/images/japanheader3.webp\"    class=\"desktop-only text-center\"   width =1926px   height =720px   alt=\"On the Kumano Trail at   Nakahechicho Chikatsuyu\"></p>
    <p><img src=\" ".$GLOBALS['URLOCATION']."/images/japanheader3.webp\"  class=\"mobile-only\"  width =500px  height =260px alt=\"On the Kumano-Kodo trail at Hiki river bridge in Wakayama prefecture  \"></p>
    <div class=\"card-img-overlay\"><br>
        <h1 class=\"card-title text-white\"><img src='".$GLOBALS['URLOCATION']."/images/spacer.gif' alt=\"spacer\" width=5>  Explore Japan</h1>
        <p class=\"card-text text-white\"><img src='".$GLOBALS['URLOCATION']."/images/spacer.gif' alt=\"spacer\" width=5> A simple guide to traveling in Japan.</p>

    </div>
</div>

<div class=\"carousel-item\">
    <p><img src=\" ".$GLOBALS['URLOCATION']."/images/japanheader2.webp\"    class=\"desktop-only\"   alt=\"spacer\" width =1926px    height =720px  alt=\"Noto Peninisula outdside of Wajima in a small cafe Pi_chan (ぴーちゃん)\"></p>
    <p><img src=\" ".$GLOBALS['URLOCATION']."/images/japanheader2.webp\"  class=\"mobile-only\" alt=\"spacer\"  width =500px  height =260px alt=\"Noto Peninisula outdside of Wajima in a small cafe Pi_chan (ぴーちゃん)\"></p>
    <div class=\"card-img-overlay\"><br>
        <h1 class=\"card-title text-dark\"><img src='".$GLOBALS['URLOCATION']."/images/spacer.gif' alt=\"spacer\" width=5>Explore Japan</h2>
        <p class=\"card-text text-dark\"><img src='".$GLOBALS['URLOCATION']."/images/spacer.gif' alt=\"spacer\"  width=5> A simple guide to traveling in Japan.</p>
    </div>
</div>
<div class=\"carousel-item\">
    <p><img src=\"".$GLOBALS['URLOCATION']."/images/koyasan2.webp\"    class=\"desktop-only\"   width =1926px    height =720px   alt=\"Looking out the window of the cable car up to Mount Koyason \"></p>
    <p><img src=\"".$GLOBALS['URLOCATION']."/images/japanheader4.webp\"  class=\"mobile-only\"  width =500px  height =260px alt=\"Looking out the window of the cable car up to Mount Koyason \"></p>
    <div class=\"card-img-overlay\"><br>
        <h1 class=\"card-title text-danger\"><img src='".$GLOBALS['URLOCATION']."/images/spacer.gif' alt=\"spacer\" width=5>Explore Japan</h2>
        <p class=\"card-text text-danger\"> <img src='".$GLOBALS['URLOCATION']."/images/spacer.gif' alt=\"spacer\" width=5>A simple guide to traveling in Japan.</p>
    </div>
</div>
<div class=\"carousel-item\">
    <p><img src=\"".$GLOBALS['URLOCATION']."/images//hammatsu.webp\"    class=\"desktop-only\"    height =720px     width =1956px  alt=\"Sunset view of Take Isalnd to the Yaotomi Shrine  near  Toyahashi \"></p>

    <p><img src=\" ".$GLOBALS['URLOCATION']."/images/hammatsu.webp\"  class=\"mobile-only\"  width =500px  height =260px  alt=\"Sunset view of Take Isalnd to the Yaotomi Shrine  near  Toyahashi \"></p>
    <div class=\"card-img-overlay\">                 <br>

     <h1 class=\"card-title text-dark\"><img src='".$GLOBALS['URLOCATION']."/images/spacer.gif' alt=\"spacer\" width=5>Explore Japan</h2>
        <p class=\"card-text text-dark\"><img src='".$GLOBALS['URLOCATION']."/images/spacer.gif' alt=\"spacer\" width=5> A simple guide to traveling in Japan.</p>
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

<div class=\" container-fluid text-center  bg-light\"    style=\" margin-bottom: 0;\">

<div class=\"container-fluid text-center bg-light\">
<div class=\"row\">
    <div class=\"col\"><center><br>
    <header>
            <p class=\"card-text text-dark   \">Explore Japan, a simple guide to traveling in Japan.<br>There are no ratings,stars or reviews .
            </header> 
            <main>
    <section>
            There are lots of maps and markers of places we found interesting, stations and hotels. With routable directions are available when in Japan.
<br>Go off the beaten track , beyond the tourist hot-spots and explore !<br>
            We have attempted to provide directions but not to give and with some explanation but not dilute the exploration . 
            <br>Not curated or culitivated by Ai , based on real events and places . 
          </section>
</main>
             </p>

    </div>


</div> </main>";




#include BASEPATH ."/docs/footer.php";
