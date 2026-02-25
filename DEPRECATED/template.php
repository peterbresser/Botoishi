<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";
echo "<meta charset=\"UTF-8\">
		<meta name=\"description\" content=\"Ryokans  in Japan\">
		<meta name=\"keywords\" content=\"ryokans in japan  ,private inns in japan ,accomodation  in japan ,  traditional  inn  japan\">
		<meta name=\"twitter:card\" content=\"summary_large_image\">
		<meta name=\"twitter:site\" content=\"@botoishi\">
		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
		<meta property=\"fb:app_id\" content=\"".$randomid."\">
		<meta property=\"og:description\" content=\"Staying at a ryokan  in Japan.\">
		<meta property=\"og:title\" content=\"Ryokans  in Japan.\">
		<meta property=\"og:image\" content=\"https://botoishi.com.au/images/keio.png\">
		<meta property=\"og:type\" content=\"website\">
		<meta property=\"og:url\" content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] .".php\">
 </head>";

if(isset($_POST['location'])) {
    $_GET['location']=$_POST['location'];
}

if(isset($_POST['route'])) {
    $_GET['route']=$_POST['route'];
}

echo "

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
    .navbar {
    margin: 0px; !important
    padding: 0px; !important
}

.container {
      padding: 0px; !important
     border: 0px; !important
}
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
 
         <br><center>

<div class=\"container-fluid text-center\">
  <div class=\"row\">
    <div class=\"col\"><br><center>
 	<div class=\"card\" style=\"width: 18rem;\"><br><center><br>
            <img  src=\"images/hokkaido.png\" style='height:250px;width:250px; '  alt=\"hokaidoryokan\">
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='hokkaidoryokan.php'  class=\"textnon\" ></a></p>
                 <p class=\"card-text text-dark\"><a href='ryokanmap.php?type=hotel&island=hokkaido'  class=\"textnon\" >Hokkaido Map</a></p>
            </div>            
         </div>
	</div>
 <div class=\"col\"><br><center>
        <div class=\"card\" style=\"width: 18rem;\"><br><center><br>
            <img  src=\"images/honshu.png\" style='height:250px;width:250px; '  alt=\"homshuryokan\">
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href=homshuryokan.php'  class=\"textnon\" ></a></p>
                         <p class=\"card-text text-dark\"><a href='ryokanmap.php?type=hotel&island=honshu'  class=\"textnon\" >Honshu Map</a></p>
            </div>            
         </div>
        </div>
      
     <div class=\"col\"><br><center>
        <div class=\"card\" style=\"width: 18rem;\"><br><center><br>
            <img  src=\"images/shikoku.png\" style='height:250px;width:250px; '  alt=\"shikokuryokan\">
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='shikokuryokan.php'  class=\"textnon\" > </a></p>
              <p class=\"card-text text-dark\"><a href='ryokanmap.php?type=hotel&island=shikoku'  class=\"textnon\" >Shikoku Map</a></p>
            </div>            
	  </div>
	</div>
     <div class=\"col\"><br><center>
        <div class=\"card\" style=\"width: 18rem;\"><center><br>
            <img  src=\"images/kyushu.png\" style='height:250px;width:250px; '  alt=\"kyushuryokan\">
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='kyushuryoakan.php'  class=\"textnon\" ></a></p>
                <p class=\"card-text text-dark\"><a href='ryokanmap.php?type=hotel&island=kyushu'  class=\"textnon\" >Kyushu Map</a></p>
         </div>
	  </div>
	</div>
  </div>
</div>




";

echo "<p id=\"locationmap\" style='margin-top: 0;'></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";



include BASEPATH ."/docs/footer.php";
