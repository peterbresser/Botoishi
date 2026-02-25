<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

echo"<body >";

include BASEPATH ."/docs/menu.php";

echo" 
 
<center>
<div class=\"container  container-md border\">
 <div class=\"row p-2\">
    <div class=\"col  text-start p-2 \"11
      <center ><h3><center>Katakanya characters <br><center></center>
    <img  src=\"images/katakanya.avif\"  style='width:800px ;' alt=\"katakanya\"></a>
   <p class=\"text-center lead mt-2\"> <p class=\"text-start lead mt-2\"> 
   
</p>  
    </div>
 </div>
 </div
    
         <br><center>
     

   ";
echo "<p id=\"locationmap\" style='margin-top: 0;'></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";






include BASEPATH ."/docs/footer.php";

