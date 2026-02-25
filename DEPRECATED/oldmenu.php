<?php


#$_SERVER['PHP_SELF']
$GLOBALS['SEARCHPAGE']="searchme.php";
echo " <link href=\"css/mystyle.css\" rel=\"stylesheet\">";
echo "<style>
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
    }" .
    "
</style>";
echo ";
//   <li class=\"nav-item\">
//    <a class=\"nav-link text-white\" href=\"aboutus.php\">About Us </a>
//    </li>
//";

if($_SERVER['REMOTE_ADDR']=='127.0.0.11' or  $_SERVER['REMOTE_ADDR']=='111.220.139.2531'  ){
    echo "        <li class=\"nav-item\">
          <a class=\"nav-link  text-white\"   href=\"easylife/admin.php\">Admin</a>
	</li>";

}
echo "     <li class=\"nav-item\">
        <a class=\"nav-link  text-white\"   href=\"wollongong.php\">Wollongong</a>
	</li>
</ul>";
echo "
 <form class=\"d-flex input-group w-auto   form-control-sm\" method =post action=".$GLOBALS['SEARCHPAGE'].">  <span class=\"input-group-text border-0  bg-dark\" id=\"search-addon\">
    <input   type=\"text\" name='search'   class=\"form-control  bg-light\"  placeholder=\"Search   \"    />
    <button class=\"btn btn-outline-success my-1 my-sm-1 border-white text-white  bg-dark \" type=\"submit\">Search</button>
    </span>
  </form> ";
echo "
     </div></div>";

echo " </div>
</nav>";
