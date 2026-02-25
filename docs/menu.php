<?php


#$_SERVER['PHP_SELF']
$GLOBALS['SEARCHPAGE']="searchme.php";
echo "<style>
        .dropdown-toggle::after {
    display:none;
}


.nav-link{
    padding: 12px 2px;
    font: 18px Arial, Helvetica, sans-serif;
}

.card{
    padding: 2px 2px;
    font: 16px Arial, Helvetica, sans-serif;
}


</style>";

echo "<body> <header> ";
echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light border-top-0 \">
  <div class=\"container-fluid border-top-0\">
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
           <a href=\"/map.php\" class=\"nav-link navbar-brand border-0 navbar-light bg-light caret-off dropdown-toggle \" >Map</a>
        </li> 
        </li>
      </ul>
        <li class=\"nav-item dropdown\">
          <button class=\"nav-link navbar-brand border-0 navbar-light bg-light caret-off dropdown-toggle \" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
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
  <div class=\"collapse navbar-collapse\" id=\"navbarNavDarkDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item dropdown\">
          <button class=\"nav-link navbar-brand border-0 navbar-light bg-light caret-off dropdown-toggle \" 
          data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Traveling
          </button>
          <ul class=\"dropdown-menu dropdown-menu-light\">
        <li><a href=\"/travelling.php\" class=\"dropdown-item  nav-link navbar-brand\" ><b>Trains</b></a></li>

            <li><a href=\"/shinkansen.php\" class=\"dropdown-item nav-link navbar-brand\">Shinkansen</a></li>
                <li><a href=\"/newstations.php\" class=\"dropdown-item  nav-link navbar-brand\">Station Map</a></li>
                 <li><a href=\"https://www.hyperdia.com\" class=\"dropdown-item  nav-link navbar-brand\">Train Timetables</a></li>
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
          <button class=\"nav-link navbar-brand border-0 navbar-light bg-light caret-off dropdown-toggle \" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
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
          <button class=\"nav-link navbar-brand border-0 navbar-light bg-light caret-off dropdown-toggle \" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Other  
          </button>
          <ul class=\"dropdown-menu dropdown-menu-light\">



  <li><a href=\"/exchangerates.php\" class=\"dropdown-item nav-link navbar-brand\">Exchange Rates</a></li>
          <li><a href=\"/gettingby.php\" class=\"dropdown-item nav-link navbar-brand\">Getting By </a></li>
                <li><a href=\"/things.php\" class=\"dropdown-item nav-link navbar-brand\">Things to do </a></li>";
      echo "      <li><a href=\"/tanner.php\" class=\"dropdown-item nav-link navbar-brand\">Tanners Stations</a></li>";
echo "    <li><a href=\"/destinations/tokyometrogame.php\" class=\"dropdown-item nav-link navbar-brand\" >Tokyo Metro - The Underground Mysteries </a></li>
     <li><a href=\"/projectoilet.php\" class=\"dropdown-item   nav-link navbar-brand\">Tokyo Toilet Project</a></li>
                    <li><a href=\"/mrdonut.php\" class=\"dropdown-item   nav-link navbar-brand\">Mister Donut</a></li>
                      <li><a href=\"/soupstock.php\" class=\"dropdown-item   nav-link navbar-brand\">Soup Stock Tokyo</a></li>
                    
     <li><a href=\"/fullmap.php\" class=\"dropdown-item nav-link navbar-brand\">Interesting Map</a></li>
  <li><a href=\"/randomlocator.php\" class=\"dropdown-item nav-link navbar-brand\">Random Station Locator</a></li>


 <li><a href=\"/ramen.php\" class=\"dropdown-item nav-link navbar-brand\">Ramen</a></li>
            
          </ul>
        </li>
        </li>
      </ul>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDarkDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item dropdown\">
           <li class=\"nav-item\">
           <a href=\"/myforum.php\"class=\"nav-link navbar-brand border-0 navbar-light bg-light caret-off dropdown-toggle \">Forum</a></li>
  </ul>
  
        </li>
       
      </ul>
         <div class=\"collapse navbar-collapse\" id=\"navbarNavDarkDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item dropdown\">
           <li class=\"nav-item\">
           <a href=\"/aboutus.php\" class=\"nav-link navbar-brand border-0 navbar-light bg-light caret-off dropdown-toggle \"  >About</a>
        </li> 
        </li>
      </ul>";

if($_SERVER['REMOTE_ADDR']=='111.220.139.253' or  $_SERVER['REMOTE_ADDR']=='127.0.0.1' ) {
    echo "
<div class=\"collapse navbar-collapse\" id=\"navbarNavDarkDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item dropdown\">
           <li class=\"nav-item\">
           <a href=\"/wollongong.php\" class=\"nav-link navbar-brand border-0 navbar-light bg-light caret-off dropdown-toggle \" >Wollongong</a>
        </li> 
        </li>
      </ul> 
      <div class=\"collapse navbar-collapse\" id=\"navbarNavDarkDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item dropdown\">
           <li class=\"nav-item\">
           <a href=\"/easylife/admin.php\" class=\"nav-link navbar-brand border-0 navbar-light bg-light caret-off dropdown-toggle \" >Admin</a>
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
 
</nav></header>";
