<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";



echo"<body >
<style>


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

 
    <div class=\"container-fluid  \">
  <div class=\"row\">
  
  </div><div></div>
     
  <div class=\"col\"><center><br>
        <div class=\"card\" style=\"width: 100%;\"><center><br>
        <span class=text><h1>Where to Stay</h1></span>
            <div class=\"card-body lh-base text-start text-wrap text text-start  \">  
 Japan has a plethora of Hotels and  the standards are very high from the Business Hotel to the best Ryokans. The  hotel chains,big hotels, hotels in major cities and those in high tourist area are found on all the hotel booking apps.
 Hotels, Ryonkans and Guest Houses  (that are not part of chains) in out of the way area may not be found there , you need to scoure maps, Japanese language local websites and travel forums to find them. 
 They may only take reservation by phone , email  or Fax   , you will need to spend the time to arrange the booking but the results are usually worth the effort. The other option
 is to use the Tourist Information  office , usually located in or around the railway station  . The very small stations may not have them , for these you need to book .
 <br>The Tourist Information office will find your somewhere to stay , they will call the hotel and make a reservation for you that suits your price range and location, they are brilliant
    <br><br>Not all hotels in the chains are created equal ,anything with Gran indicates the better hotel in the chain , Onsen indicates a natural onsen is availabe. Ekimae indicates the hotel is next to the station [there may be other chain the chain further away]. </br>            <p class=\"card-text text-dark\"> </p>
        <br>On the maps the Show Station link will try and find the closest station to the hotel within a 2 km radius that we have inlcuded , you can also use the <a href=\" railheat.php\" target=_blank  style='text-decoration: none;'>Railway Heat Map</a>   to show all the railway lines and your location (in Japan)
         
         </div>
	  </div>
	</div>
   

<div class=\"container-fluid text-center\">
  <div class=\"row\">
    <div class=\"col\"><center><br>
 	<div class=\"card\" style=\"width: 18rem;\"><center><br>
           <a href='businesshotels.php'  class=\"text\" > <img  src=\"images/tokykocar.avif\" style='height:250px;width:250px; '  alt=\"businesshotel\"></a>
           
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='businesshotels.php'  class=\"text\" style=\"text-decoration:none;text-align:center;\"   >Business Hotel</a></p>
            </div>            
         </div>
	</div>
 
    <div class=\"col\"><center><br>
 	<div class=\"card\" style=\"width: 18rem;\"><center><br>
           <a href='chainhotels.php'  class=\"text\" > <img  src=\"images/dormyinn.avif\" style='height:250px;width:250px; '  alt=\"chainshotel\"></a>
           
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='chainhotels.php'  class=\"text\"  style=\"text-decoration:none;text-align:center;\"  >Chains</a></p>
            </div>            
         </div>
	</div>
 <div class=\"col\"><center><br>
        <div class=\"card\" style=\"width: 18rem;\"><center><br>
           <a href='ryokan.php'  class=\"text\" > <img  src=\"images/ryokancar.avif\" style='height:250px;width:250px; '  alt=\"ryokans\"></a>
           
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='ryokan.php'  class=\"text\"  style=\"text-decoration:none;text-align:center;\" >Ryokan</a></p>
            </div>            
         </div>
        </div>
      
     <div class=\"col\"><center><br>
        <div class=\"card\" style=\"width: 18rem;\"><center><br>
           <a href='Guest House.php'  class=\"text\" > <img  src=\"images/guesthouse.avif\" style='height:250px;width:250px; '  alt=\"Guest House\"></a>
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='minshinku.php'  class=\"text\"  style=\"text-decoration:none;text-align:center;\" >Guest House</a></p>
            </div>            
	  </div>
	</div>
     <div class=\"col\"><center><br>
        <div class=\"card\" style=\"width: 18rem;\"><center><br>
          <a href='hotelsmap.php'  class=\"text\" >  <img  src=\"images/japan-map.avif\" style='height:250px;width:250px; '  alt=\"businesshotel\"></a>
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><a href='hotels.php'  class=\"text\"  style=\"text-decoration:none;text-align:center;\" >Hotel Map</a></p>
         </div>
	  </div>
	</div>
  </div>
</div>


   ";

echo "<p id=\"locationmap\" style='margin-top: 0;'></p>
  <script> var map = new L.Map('map');   </script>
 <script language=\"javascript\" src =\"js/mapikey.js\"</script> ";



include BASEPATH ."/docs/footer.php";
