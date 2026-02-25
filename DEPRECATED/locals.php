<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";
echo " <meta charset=\"UTF-8\">
		<meta name=\"description\" content=\"Private railways lines Japan.\">
		<meta name=\"keywords\" content=\"railways , trains , japan\">
		<meta name=\"twitter:card\" content=\"summary_large_image\">
		<meta name=\"twitter:site\" content=\"@botoishi\">
		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
		<meta property=\"fb:app_id\" content=\"".$randomid."\">
		<meta property=\"og:description\" content=\"Private railways lines Japan\">
		<meta property=\"og:title\" content=\"Private railways lines Japan\">
		<meta property=\"og:image\" content=\"https://botoishi.com.au/images/local.avif\">
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
 
<br>
<center>
<div class=\"container  container-md border\">
 <div class=\"row p-2\">
    <div class=\"col  text-center p-2 \" ><b>Private Lines</b></div>
 
 
 
   
   <p class=\"text-start text-left  mt-2\"> For private railway lines  you will need to either putchase a ticket or use an iccard , there are a very few exceptions where your JR pass can be used<br>
   
   
   <br> <a href='privates.php?route=fujikyu'  class=\"text_blue\" >Fujikyuko line</a></b><br>
   <br>
This train line operated by Fujikyu takes passengers to the main Mt Fuji station Kawaguchiko Station on the mountain’s northern side.

 Trains leave Otsuki Station, which is also on the Chuo Line, for Kawaguchiko with two types of service available.
<br>
<br>
<b>Keikyu Main Line- Tokyo</b>
<br>
This line runs from Shinagawa Station in Tokyo to Yokosuka, passing through Kawasaki and central Yokohama along the way. 
<br>
<br>
<a href='privates.php?route=Toyama Chiho'  class=\"text_blue\" >Toyama Chihou Railway</a> </b>
<br>
Toyama Chihou Railway is a private rail company that operates railways and bus routes in primarily eastern Toyama Prefecture.. 
<br>
<br>
<a href='privates.php?route=Nankai'  class=\"text_blue\" >Nankai Railways- Osaka </a>
</b>
Nankai operates in and around Osaka  , there are two lines with a variety of routes including rapid transit from Kansai Airport to Namba Station  <a href='https://www.nankai.co.jp/en_railway/traffic/railmap.html'>[ Nankai and Toya lones ]</a>
<br>
<br>
Keikyu Kuko Line - Tokyo</b><br>
One of the other lines managed by the Keikyu company is the Keikyu Kuko line, otherwise known as the Keikyu Airport Line. 
This private railway line connects Tokyo International Airport at Haneda with the Keikyu Main Line, so you can get to Tokyo, Kawasaki and Yokohama from the airport at Haneda. The only other rail option from Tokyo International Airport is the Tokyo Monorail which is included in the JR Pass.
<br><b>
Keio Line-Osaka</b><br>
If you’re thinking of heading out towards the suburban city of Hachiōji or Mount Takao, you’ll want to look at the Keio Line. Leaving from Shinjuku in Tokyo, the line heads out to Hachiōji, with branch lines along the way. One branch line that’s quite important is the Takao Line which goes from Kitano Station to Takaosanguchi Station at the bottom of Mount Takao by its cable car station.
<br><b>
Keihan Main Line - Kyoto</b><br>
 The railways line runs from Sanjo Station in Kyoto to Yodoyabashi Station in Osaka, with many stops along the way close to major Kyoto attractions. 

<br><b>
Keisei Main Line</b><br>
 The railways line runs from Narita Airport to Tokyo, terminating at Keisei Ueno station. From there you can get practically anywhere in Tokyo, using your JR Pass for the Yamanote Line from Ueno Station nearby.
 <br><b>

Hakone Tozan Line</b><br>
This line runs from Odawara to Gora , then you take a cable car to Suonzan, IC Card can be used on the main line but not on the cable car
<br>
</p>  
    </div>
 </div>
 </div
    
     

";

echo "<p id=\"locationmap\" style='margin-top: 0;'></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";



include BASEPATH ."/docs/footer.php";
