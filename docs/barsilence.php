<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";

echo"<body >
 
<br>
<center>
<div class=\"container  container-md border\">
 <div class=\"row p-2\">
    <div class=\"col  text-start p-2 \"
      <center ><h3><center>B a r Silence<br><center></center>
     <img  src=\"images/silnce.png\"  style='width:400px ;' alt=\"barsilence\" >
   <p class=\"text-center lead mt-2\">A very cosy 8 seater bar , the quintesential Japanse small bar . Its worth the trip to Tottori <p class=\"text-start lead mt-2\"> 

</p>  
    </div>
 </div>
 </div
    
         <br><center>
     

   ";

echo "<p id=\"locationmap\"></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";


include BASEPATH ."/docs/footer.php";

