<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";

echo"<body >
 
<br>

<div class=\"container-fluid text-center\">
 <div class=\"col\"><br><center>
 	<div class=\"card border-0\"   ><center>
 	   <span class=text><h1> How JR Pass Works </h1></span>

 
 <div class=\"col\"> 
 	<div class=\"card\"><br><center><br>
  <div class='text text-start card-body '><p>
1. Buy Your Japan Rail Pass (Exchange Coupon): Order your pass online by credit card and receive an order summary upon completion. <br><b>*If you are departing Australia within 14 days, you won’t be able to order online. Please email us at sydres.au@jtbap.com to discuss the best option for obtaining a pass.

 </div> </div> </div>
 <div class=\"card\"><br><center><br>
  <div class='text text-start card-body '><p>
 2. Receive Your JR Pass Exchange Coupon by Mail: After purchasing your pass, your exchange coupon will be delivered to you. <br>Please allow up to 5 business days for delivery within Australia.
  </div> 
  </div>  
 <div class=\"card\"><br><center><br>
  <div class='text text-start card-body '><p>
 3. Go To Japan: Get your 'Temporary Visitor' visa stamp in your passport at immigration at the airport in Japan. <br><b>*If you use an automated gate, no stamp will be applied to your passport. Either use a manned automated gate or ask a clerk to apply the stamp to your passport.
  </div> </div>
  <div class=\"card\"><br><center><br>
  <div class='text text-start card-body '><p>
 4. Swap Your Exchange Coupon for Your Actual Rail Pass: <br>You will need to swap your exchange coupon for your actual JR pass in Japan at an exchange office.<br> You can then start using your JR pass the day you exchange it or select a date for the first day of use.
 </div> </div> 
<div class=\"card\"><br><center><br>
  <div class='text text-start card-body '><p>
5. <a href=\"passtations.php\"  class='text-blue ' style='text-decoration:none;'> Exchange Offices  -  go to one of the locations listed here </a>

 </div> </div>  
 

 

 </div> 
 
 
 </div> ";

echo "<p id=\"locationmap\" style='margin-top: 0;'></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";



include BASEPATH ."/docs/footer.php";
