<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";




echo " 
  <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"  integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


 <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>   
       <script language=\"javascript\" src =\"js/min.teststations.js\"></script> 
 
 
 <style>
 
.navbar{
background:transparent !important;
 
}
 
.nav-link{
    padding: 12px 2px;
    font: 18px Arial, Helvetica, sans-serif;
}

.btn-primary-outline {
background:transparent !important;
}


@media (min-width: 500px ) {
.bg-image {
    background: url('images/bground.webp');
  }
}
@media screen and (min-width: 1200px) {
  .bg-image {
    background: url('images/bground.webp');
  }
}
  .bottom-align-text {
    position: absolute;
    bottom: 150px;
    right: 0;
  }
}

</style>
 <body>
 




<main>
   <div class=\"container-fluid  \">

 <div class=\"bg-image\" 
     style=\" height: 90vh;  
     background-repeat:no-repeat; 
     background-size:cover;; 
    background-attachment:fixed;
    background-position: left top;\">
 

        <nav class=\"navbar navbar-expand-lg\">
  <a href=\"/index.php\"  class=\"navbar-brand\"><img src=\"".$GLOBALS['URLOCATION']."/headerimage.png\" alt=\"inde\"  class=\"img-rounded\" width =40 height =40 ></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDarkDropdown\" aria-controls=\"navbarNavDarkDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDarkDropdown\">
      <ul class=\"navbar-nav\">
     
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDarkDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item dropdown\">
           <li class=\"nav-item\">
           <a href=\"/map.php\" class=\"nav-link navbar-brand border-0  caret-off dropdown-toggle \" >Map</a>
        </li> 
        </li>
      </ul>
        <li class=\"nav-item dropdown m\">
          <button class=\"btn btn-outline nav-link navbar-brand border-0  caret-off dropdown-toggle  \" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Accomodation 
            
          </button>
          <ul class=\"dropdown-menu dropdown-menu-light\">
                      <li><a href=\"/accomodation.php\" class=\"dropdown-item nav-link navbar-brand\"><b>Accomodation</b></a></li>

            <li><hr class=\"dropdown-divider\" /></li>

          <li><a href=\"/businesshotels.php\" class=\"dropdown-item nav-link navbar-brand\">Business Hotel</a></li>
                <li><a href=\"/chainhotels.php\" class=\"dropdown-item nav-link navbar-brand\">Chains</a></li>
            <li><a href=\"/ryokan.php\" class=\"dropdown-item nav-link navbar-brand\">Ryokan</a></li>
            <li><a href=\"/minshinku.php\" class=\"dropdown-item nav-link navbar-brand\">Guest House</a></li>
  <li><a href=\"/hotels.php?island=all\" class=\"dropdown-item nav-link navbar-brand\">Hotel Map</a></li>

            
          </ul>
       
        </li>
      </ul>
        
          </ul>
       
        </li>
      </ul>
  <div class=\"collapse navbar-collapse\" id=\"navbarNavDarkDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item dropdown\">
          <button class=\"btn btn-outline nav-link navbar-brand border-0  caret-off dropdown-toggle   \" 
          data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Traveling
          </button>
          <ul class=\"dropdown-menu dropdown-menu-light\">
        <li><a href=\"/travelling.php\" class=\"dropdown-item nav-link navbar-brand\" ><b>Trains</b></a></li>
         <li><hr class=\"dropdown-divider nav-link navbar-brand\" /></li>


            <li><a href=\"/shinkansen.php\" class=\"dropdown-item nav-link navbar-brand\">Shinkansen</a></li>
                <li><a href=\"/stations.php\" class=\"dropdown-item  nav-link navbar-brand\">Station Map</a></li>
            <li><a href=\"/jrpass.php\" class=\"dropdown-item nav-link navbar-brand\" >JRPass</a></li>
            <li><a href=\"/otherpass.php\" class=\"dropdown-item nav-link navbar-brand\" >Other Passes</a></li>
	      <li><a href=\"/exchange.php\" class=\"dropdown-item nav-link navbar-brand\" >JR Pass Exchange </a></li>
 <li><a href=\"/icards.php\" class=\"dropdown-item nav-link navbar-brand\" >IC Cards [Travel Cards]</a></li>
            <li><a   href=\"/railheat.php\" class=\"dropdown-item nav-link navbar-brand\" >Rail Heat map</a></li>
          <li><a href=\"/busses.php\" class=\"dropdown-item nav-link navbar-brand\" >Busses</a></li>
            <li><a href=\"/carhire.php\" class=\"dropdown-item nav-link navbar-brand\" >Car Hire</a></li>   
             <li><a  href=\"/taxis.php\" class=\"dropdown-item nav-link navbar-brand\" >Taxis</a></li>   
           

   
      </ul>
        <li class=\"nav-item dropdown\">
          <button class=\"btn btn-outline nav-link navbar-brand border-0  caret-off dropdown-toggle   \" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Tourist Information   
          </button>
          <ul class=\"dropdown-menu dropdown-menu-light\">
          <li><a href=\"/touristinfo.php\" class=\"dropdown-item  nav-link navbar-brand\"><b>Tourist Information Center Map</b></a></li>
            <li><hr class=\"dropdown-divider\" /></li>

   
           <li><a  href=\"/infocenter.php\" class=\"dropdown-item nav-link navbar-brand\">Center Facilities</a></li>
  <li><a href=\"/prefecture.php\" class=\"dropdown-item nav-link navbar-brand\">Prefectures</a></li>
  
<li class=\"submenu submenu-md dropend\">
                <a class=\"dropdown-item dropdown-toggle  nav-link navbar-brand\" role=\"button\" 
                    data-bs-toggle=\"dropdown\" aria-expanded=\"false\"
                    onclick=\"event.stopPropagation();\">
                    Destinations
                </a>
                <ul class=\"dropdown-menu\">
                    <li><a href =\"/hokkaido\" class=\" nav-link navbar-brand\">Hokkaido</a></li>
                    <li><a href =\"/honshu\" class=\" nav-link navbar-brand\">Honshu</a></li>
                    <li><a href =\"/shikoku\" class=\" nav-link navbar-brand\">Shikoku</a></li>
                   <li><a href =\"/kyushu\" class=\" nav-link navbar-brand\">Kyushu</a></li>
                </ul>
            </li>
  
  
             </ul>
              <li class=\"nav-item dropdown\">
          <button class=\"btn btn-outline nav-link navbar-brand border-0  caret-off dropdown-toggle  \" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Other  
          </button>
          <ul class=\"dropdown-menu dropdown-menu-light\">



  <li><a href=\"/exchangerates.php\" class=\"dropdown-item nav-link navbar-brand\">Exchange Rates</a></li>
          <li><a href=\"/gettingby.php\" class=\"dropdown-item nav-link navbar-brand\">Getting By </a></li>
                <li><a href=\"/things.php\" class=\"dropdown-item nav-link navbar-brand\">Things to do </a></li>";
echo "      <li><a href=\"/tanner.php\" class=\"dropdown-item nav-link navbar-brand\">Tanners Stations</a></li>";
echo "    <li><a href=\"/destinations/tokyometrogame.php\" class=\"dropdown-item nav-link navbar-brand\" >Tokyo Metro - The Underground Mysteries </a></li>

                    <li><a href=\"/mrdonut.php\" class=\"dropdown-item   nav-link navbar-brand\">Mister Donut</a></li>
                      <li><a href=\"/soupstock.php\" class=\"dropdown-item   nav-link navbar-brand\">Soup Stock Tokyo</a></li>
                    
     <li><a href=\"/fullmap.php\" class=\"dropdown-item nav-link navbar-brand\">Interesting Map</a></li>";
##<li><a href=\"/fullmap.php\" class=\"dropdown-item nav-link navbar-brand\">Interesting Map</a></li>

echo "
 <li><a href=\"/ramen.php\" class=\"dropdown-item nav-link navbar-brand\">Ramen</a></li>
            
          </ul>
        </li>
        </li>
      </ul>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDarkDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item dropdown\">
           <li class=\"nav-item\">
           <a href=\"/myforum.php\"class=\"nav-link navbar-brand border-0  caret-off dropdown-toggle \">Forum</a></li>
  </ul>
  
        </li>
       
      </ul>
         <div class=\"collapse navbar-collapse\" id=\"navbarNavDarkDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item dropdown\">
           <li class=\"nav-item\">
           <a href=\"/aboutus.php\" class=\"nav-link navbar-brand border-0  caret-off dropdown-toggle \"  >About</a>
        </li> 
        </li>
      </ul>";

if($_SERVER['REMOTE_ADDR']=='111.220.139.253' or  $_SERVER['REMOTE_ADDR']=='127.0.0.1' ) {
    echo "
<div class=\"collapse navbar-collapse\" id=\"navbarNavDarkDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item dropdown\">
           <li class=\"nav-item\">
           <a href=\"/wollongong.php\" class=\"nav-link navbar-brand border-0  caret-off dropdown-toggle \" >Wollongong</a>
        </li> 
        </li>
      </ul> 
      <div class=\"collapse navbar-collapse\" id=\"navbarNavDarkDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item dropdown\">
           <li class=\"nav-item\">
           <a href=\"/easylife/admin.php\" class=\"nav-link navbar-brand border-0  caret-off dropdown-toggle \" >Admin</a>
        </li> 
        </li>
      </ul> 
      
      ";
}
echo "
  <div class=\"collapse navbar-collapse\" id=\"navbarNavDarkDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item dropdown\">
           <li class=\"nav-item\">
          <form class=\"d-flex input-group w-auto   form-control-sm\" method =post action=\"".$GLOBALS['URLOCATION']."/".$GLOBALS['SEARCHPAGE']."\">  <span class=\"input-group-text border-0  bg-light\" id=\"search-addon\">
    <input   type=\"text\" name='search'   class=\"form-control  bg-light\"  placeholder=\"Search   \"    />
    <button class=\"btn btn-outline-success my-1 my-sm-1 border-white text-white  bg-secondary \" type=\"submit\">Search</button>
    </span>
  </form> 
        </li> 
        </li>
      </ul>
    </div>
 </div> 
</nav>
 
 <div class=\"bottom-align-text col-sm-12 text-dark  aligns-items-center  \">
  <center> <div class=\"card text-center moderat  aligns-items-center\"  style=\"width: 70rem;\"  > 
 
             <H3> Explore Japan, a simple guide to traveling in Japan.</H3><br>There are no ratings,stars or reviews .
     
            <main>
    <section> 
            There are lots of maps and markers of places we found interesting, stations and hotels. With routable directions are available when in Japan.
<br>Go off the beaten track , beyond the tourist hot-spots and explore !<br>
            We have attempted to provide directions but not to give and with some explanation but not dilute the exploration . <br><br>
          </section>
    </div>
   </div>
</main>
</div>
</div>

</body>
";



#include BASEPATH ."/docs/footer.php";
