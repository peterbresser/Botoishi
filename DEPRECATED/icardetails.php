<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";
echo "
 
<link rel = \"stylesheet\" href = \"css/leaflet.css\" />
<style>
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

</style>
   <script src=\"css/leaflet.js\"></script>
   <script language=\"javascript\">

	function init() {
              

        

  
";



include BASEPATH ."/docs/css/maykers.inc";

$mapmarker='';
$locationtype = " ";
$traintype='';



include BASEPATH ."/docs/myjsfunctions.js";



if(isset($_GET['cardname'])) {
    if ($_GET['cardname'] == 'sapica' or $_GET['cardname'] == 'all')
        include BASEPATH . "/docs/js/sapica.js";

if ($_GET['cardname'] == 'suica')
    include BASEPATH . "/docs/js/suica.js";
}

if($_GET['cardname'] == 'all') {
include BASEPATH . "/docs/js/sapica.js";
   include BASEPATH . "/docs/js/suica.js";

}




    /*if($_GET['route']=='tohoku' or  $_GET['route']=='all' )
        include BASEPATH ."/docs/js/tohoku.js";
    if($_GET['route']=='akita' or  $_GET['route']=='all' )
        include BASEPATH . "/docs/js/akita.js";
    if($_GET['route']=='hokkaido' or  $_GET['route']=='all' )
        include BASEPATH . "/docs/js/hokkaido.js";
    if($_GET['route']=='horruriku' or  $_GET['route']=='all' )
        include BASEPATH . "/docs/js/horruriku.js";
    if($_GET['route']=='kyushu' or  $_GET['route']=='all' )
        include BASEPATH . "/docs/js/kyushu.js";
    if($_GET['route']=='joetsu' or  $_GET['route']=='all' )
        include BASEPATH . "/docs/js/joetsu.js";
    if($_GET['route']=='yamagata' or  $_GET['route']=='all' )
        include BASEPATH . "/docs/js/yamagata.js";
    if($_GET['route']=='sanyo' or  $_GET['route']=='all' )
        include BASEPATH . "/docs/js/sanyo.js";
*/
//}
//elseif(isset($_GET['island'])){
/*
    if($_GET['island']=='honshu' or  $_GET['route']=='all' or  $_GET['island']=='all'  ) {
        include BASEPATH . "/docs/js/tokaido.js";
        include BASEPATH ."/docs/js/tohoku.js";
        include BASEPATH . "/docs/js/akita.js";
        include BASEPATH . "/docs/js/horruriku.js";
        include BASEPATH . "/docs/js/joetsu.js";
        include BASEPATH . "/docs/js/yamagata.js";
        include BASEPATH . "/docs/js/kyushu.js";
        include BASEPATH . "/docs/js/sanyo.js";
*/
   // }
    //..if($_GET['island']=='hokkaido' or  $_GET['route']=='all' or $_GET['island']=='all'  )
     //   include BASEPATH . "/docs/js/hokkaido.js";
    //if($_GET['island']=='kyushu' or  $_GET['route']=='all'  or $_GET['island']=='all' )
     //   include BASEPATH . "/docs/js/kyushu.js";


echo "}

   
</script>
   
</head>
<body onLoad=\"javascript:init();\">
<center><br>
       
 <table border =1 width=95% height=75% ><tr><td>  <div id=\"map\" style=\"height: 83vh;\"></div></td></tr></table>";
echo "<p id=\"locationmap\"></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";





include BASEPATH ."/docs/footer.php";
