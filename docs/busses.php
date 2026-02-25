<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";

echo"<body >

<br>

 <div class=\"container  container-md  \">

 <div class=\"col\"></div> 
 	<div class=\"card border-0\"><br><center> 
    <div class='text text-center'><h1> <b>The Bus </b></h1></div>
    </div><div></div> 


 
 <div class=\"col\"> 
 	<div class=\"card  \"><br><center><br>
  <div class='text text-start card-body '><p>

Busses in Japan can be  confusing for the first few times.  Always carry cash (notes and change) , <br>
 
<br>Busses in the larger cities will accept the IC Cards ,whereas busses in the rural areas may not
<brLocal Bus timetables can be hard to find, they may not be in English , so some tranlation work may need to be done.
 
<br>Busses should be boarded from the rear doors. Check for IC Card signs on the bus ,<img src='images/busicard.avif'><br>if in doubt .. Cash .
<br>Collect a ticket when you get on.  Take note of the number on your ticket.
<br>The is a board at the front of the bass that indicates the stops and fare for that stop. It increases as the trip goes on.
<br><img src='images/busfare.png'>
<br>Using the number on your ticket , match that the number on the board and that is how much you need to pay
<br>Meanwhile stay calm, count the stops, count your cash and wait for your stop ;) 

 
 
 

 </div> 
 
 
 </div> ";

echo "<p id=\"locationmap\" style='margin-top: 0;'></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";



include BASEPATH ."/docs/footer.php";
