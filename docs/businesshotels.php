<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";

echo"<body >

<br>
<center>
<div class=\"container  container-md border\">
 <div class=\"row p-2\">
    <div class=\"col  text-start p-2 \"11
      <center ><h1><center>Business Hotels</h1><br>
  
   <p class=\" lh-base text-start text-wrap text text-start  \">Business Hotels are affordable hotels generally located within a short distance  
   from train stations, making them easy to find and great for that 5am getaway .
   We have found them to be clean and accessable hotels, whilst not luxurious they very comfortable and easily accessable.
      <p class=\"text-start  lh-base text text-start   text-wrap\">  The prices do vary between locations, expect to pay more in the big cities, 
      and possibly smaller rooms . You can get a twin king room for song in the more remote locations. <br>
Most chains have a loyalty program that will get you a discounted or free nights accomodation per X number of vists, we have managed to get a few free
 nights in a months worth of traveling. 
Dont be afraid to ask for card .</p>
<p class=\" lh-base text text text-start text-wrap\"> The ones we have experiended are Toyoko Inn, Route Inn , Super Hotel   and have not looked any futher. 
There are others but we found these three and never ventured beyond, except in small town where no chain existed ,  usually you can find a local 
businessman hotel (not as good) .There are also very good <a href='chainhotels.php' >chains</a>, some which may be classified as business hotels but we found them better , these also have a more upscale/prestegious brands attached. 

 
</p>  
    </div>
 </div>
 </div
    
         <br><center>

<div class=\"container-fluid text-center\">
  <div class=\"row\">
    <div class=\"col \"><br><center>
 	<div class=\"card border  border-5\" style=\"width: 18rem;\"><br><center><br>
            <a href='hotels.php?chain=toyokoinn&maptype=hotel'  class=\"text\" >
            <img  src=\"images/toyokoinn.webp\" style='height:100px;width:150px;' alt=\"toyokoinn\"></a>
            <div class=\"card-body border-0\">

            </div>    
       <div class=\"card-footer\" style=\"padding:0!important;\">
      <div class=\"row border-5\" style=\"margin:5!important;\">
                              <center>   <table width=100%><tr><td>
      <form method =POST action=hotels.php title='Go Hotel' > 
      <input type=hidden name=chain  value =\"toyokoinn\" >
       <button type=\"submit\" class=\"btn text-dark\" style=\"text-decoration:none;border:0;\"><span class=text-dark >Hotel Map</span></button>
         </form >    </td><td>
                  <a href='toyokoinn.php'  class=text-dark  style=\"text-decoration:none;text-align:right;\">
                Hotel List  </a>
                </td></tr></table>
        
      </div>
    </div>           
         </div>
	</div>
 
          <div class=\"col \"><br><center>
 	<div class=\"card border  border-5\" style=\"width: 18rem;\"><br><center><br>
            <a href='hotels.php?chain=superhotel&maptype=hotel'  class=\"text\" >
         <img  src=\"images/super.webp\"style='height:100px;width:150px;'  alt=\"superhotel\"></a>
            <div class=\"card-body border-0\">

            </div>    
       <div class=\"card-footer\" style=\"padding:0!important;\">
      <div class=\"row border-5\" style=\"margin:5!important;\">
                              <center>        <table width=100%><tr><td>
      <form method =POST action=hotels.php title='Go Hotel' > 
      <input type=hidden name=chain  value =\"superhotel\" >
       <button type=\"submit\" class=\"btn text-dark\" style=\"text-decoration:none;border:0;\"><span class=text-dark >Hotel Map</span></button>
         </form >    </td><td>
                  <a href='superhotel.php'  class=text-dark  style=\"text-decoration:none;text-align:right;\">
                Hotel List  </a>
                </td></tr></table>
         
      </div>
    </div>           
         </div>
	</div>
 
          <div class=\"col \"><br><center>
 	<div class=\"card border  border-5\" style=\"width: 18rem;\"><br><center><br>
            <a href='hotels.php?chain=routeinn&maptype=hotel'  class=\"text\" >
        <img  src=\"images/routeinn.webp\" style='height:100px;width:110px;'  alt=\"routeinn\"></a>
            <div class=\"card-body border-0\">

            </div>    
       <div class=\"card-footer\" style=\"padding:0!important;\">
      <div class=\"row border-5\" style=\"margin:5!important;\">
      <center><table width=100%><tr><td>
      <form method =POST action=hotels.php title='Go Hotel' > 
      <input type=hidden name=chain  value =\"routeinn\" >
       <button type=\"submit\" class=\"btn text-dark\" style=\"text-decoration:none;border:0;\"><span class=text-dark >Hotel Map</span></button>
         </form >    </td><td>
                  <a href='routeinn.php'  class=text-dark  style=\"text-decoration:none;text-align:right;\">
                Hotel List  </a>
                </td></tr></table>
     
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
