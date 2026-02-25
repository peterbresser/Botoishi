<?php


echo "";

echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <title>Bootstrap Example</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
  <style>
.navbar {
    margin: 0px; !important
    padding: 0px; !important
}

.container {
      padding: 0px; !important
     border: 0px; !important
}
       .custom-toggler.navbar-toggler {
            border-color: white;
              background-color:white;
        }
#nav-toggle-button{
    background-color:white;
}

.dropdown-toggle.caret-off::after {
    display: inline-block;
}

 h1 {
 
  font-size: 32px !important;
  font-weight: bold;
  color: #222222;
}
 
</style>
</head>
<body>

<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
   
<a class=\"navbar-brand\" href=\"index.php\"><img src=\"favicon.png\"  class=\"img-rounded\" width =40 height =40 ></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDarkDropdown\" aria-controls=\"navbarNavDarkDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    
    
    
    <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
      <ul class=\"navbar-nav\">
   <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"map.php\">Map</a>
        </li>
        
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\">Accomodation</a>
          <ul class=\"dropdown-menu\">
          <li><a class=\"dropdown-item\" href=\"accomodation.php\">Accomodation</a></li>

            <li><hr class=\"dropdown-divider\" /></li>
         <li><a class=\"dropdown-item\" href=\"businesshotels.php\">Business Hotel</a></li>
                <li><a class=\"dropdown-item\" href=\"chainhotels.php\">Chains</a></li>
            <li><a class=\"dropdown-item \" href=\"ryokan.php\">Ryokan</a></li>
            <li><a class=\"dropdown-item \" href=\"minshinku.php\">Guest House</a></li>
  <li><a class=\"dropdown-item\" href=\"hotels.php?island=all\">Hotel Map</a></li>
          </ul>
        </li>
        
        
                <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\">Travelling</a>
          <ul class=\"dropdown-menu\">
          <li><a class=\"dropdown-item    \" href=\"travelling.php\">Trains</a></li>

            <li><hr class=\"dropdown-divider\" /></li>
    <li><a class=\"dropdown-item \" href=\"shinkansen.php\">Shinkansen</a></li>
                <li><a class=\"dropdown-item \" href=\"stations.php\">Station Map</a></li>
            <li><a class=\"dropdown-item  \" href=\"jrpass.php\">JRPass</a></li>
	      <li><a class=\"dropdown-item\" href=\"exchange.php\">JR Pass Exchange </a></li>
 <li><a class=\"dropdown-item \" href=\"icards.php\">IC Cards [Travel Cards]</a></li>
            <li><a class=\"dropdown-item  \" href=\"railheat.php\">Rail Heat map</a></li>
          <li><a class=\"dropdown-item  \" href=\"busses.php\">Busses</a></li>
           <li><a class=\"dropdown-item  \" href=\"taxis.php\">Taxis</a></li> 
            <li><a class=\"dropdown-item  \" href=\"carhire.php\">Car Hire</a></li>   
            
            <li><a class=\"dropdown-item nav-link navbar-brand\" href=\"locals.php\"></a></li>
          </ul>
        </li>
        
                
        
                <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\">Tourist Information</a>
          <ul class=\"dropdown-menu\">
          <li><a class=\"dropdown-item    \" href=\"touristinfo.php\">Tourist Information Center Map</a></li>

            <li><hr class=\"dropdown-divider\" /></li>
 <li><a class=\"dropdown-item\" href=\"infocenter.php\">Center Facilities</a></li>
          <li><a class=\"dropdown-item\" href=\"prefecture.php\">Prefectures</a></li>
 
     <li><a class=\"dropdown-item\" href=\"fullmap.php\">Interesting Map</a></li>
          </ul>
        </li>
        
          <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\">Other Stuff</a>
          <ul class=\"dropdown-menu\">
          <li><a class=\"dropdown-item    \" href=\"touristinfo.php\">Tourist Information Center Map</a></li>
            <li><hr class=\"dropdown-divider\" /></li>
               <li><a class=\"dropdown-item\" href=\"gettingby.php\">Getting By </a></li>
                <li><a class=\"dropdown-item \" href=\"things.php\">Things to do </a></li>
               <li><a class=\"dropdown-item\" href=\"fullmap.php\">Interesting Map</a></li>
              </ul>
            </li>
        
        
        
        
                <li class=\"nav-item\">
          <a class=\"nav-link\"  \"href=\"myforum.php\">Forum</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"aboutus.php\">About</a>
        </li>";

if($_SERVER['REMOTE_ADDR']=='111.220.139.253' or  $_SERVER['REMOTE_ADDR']=='127.0.0.1' ) {
    echo "
    <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"easylife/admin.php\">Admin</a>
        </li>
    <li class=\"nav-item\">
          <a class=\"nav-link\"   href=\"wollongong.php\">Wollongong</a>
        </li>
      
      ";
}

echo "  </ul> <div class=\"collapse navbar-collapse\" id=\"navbarNavDarkDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item dropdown\">
           <li class=\"nav-item\">
          <form class=\"d-flex input-group w-auto   form-control-sm\" method =post action=".$GLOBALS['SEARCHPAGE'].">  <span class=\"input-group-text border-0  bg-light\" id=\"search-addon\">
    <input   type=\"text\" name='search'   class=\"form-control  bg-light\"  placeholder=\"Search   \"    />
    <button class=\"btn btn-outline-success my-1 my-sm-1 border-white text-white  bg-secondary \" type=\"submit\">Search</button>
    </span>
  </form> 
        </li> 
        </li>
      </ul>
    </div>
        
        
      </ul>
    </div>
  </div>
</nav>


 ";
