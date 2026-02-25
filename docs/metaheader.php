<?php


include $_SERVER['DOCUMENT_ROOT'] . '/../config.php';
include BASEPATH ."/japan.inc";
$randomid=rand(123456789,845456476864);


include BASEPATH ."/docs/tags.php";
echo "
 <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" 
 integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
   <!-- JavaScript Bundle with Popper -->
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js\" 
  integrity=\"sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa\" crossorigin=\"anonymous\"></script>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
 <link rel = \"stylesheet\" href = \"css/leaflet.css\" />
 <link href=\"/css/mystyle.css\" rel=\"stylesheet\"> 
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
       .dropdown-toggle.caret-off::after {
    display: none;
}
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
 h1 {
 
  font-size: 32px !important;
  font-weight: bold;
  color: #222222;
}
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
 
 
 
a.menu_links { cursor: pointer; }
.info {
    padding: 6px 8px;
    font: 14px/16px Arial, Helvetica, sans-serif;
    background: white;
    background: rgba(255,255,255,0.8);
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
    border-radius: 5px;
}

    .stylePopup .leaflet-popup-content-wrapper,
    .stylePopup .leaflet-popup-tip {
        background-color: #ffffff;
        border: 0;
          border-radius: 5px;
         box-shadow: none;
          padding: 1px;
         border: none !important;
         border: 6px solid transparent;
       
    }
 .leaflet-popup-tip {
    display: none;
}
    .leaflet-tooltip.my-labels {
  background-color: transparent;
  border: transparent;
  box-shadow: none;
  box-shadow: none !important;
  font-weight: none;
  font-size: 15px;
    border: 0px;
  }
    /* css to customize Leaflet default styles  */

</style>";

