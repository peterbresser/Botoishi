<?php

include("/var/www/botoishi/config.php");
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";



echo "

    <header>
    <h1 class='text-center'> <b>Zao Onsen </b></h1>
<div class=\"container  container-md  border-0 text-center\">
    	  <source type=\"image/webp\" srcset=\"".$GLOBALS['URLOCATION']."/images/zaoonsen.webp\">
            <p><img src=\"".$GLOBALS['URLOCATION']."/images/zaoonsen.webp\"    class=\"desktop-only\"   width =1400px     alt='ZaoOnsen Ski Slopes '></p>
    <p><img src=\"".$GLOBALS['URLOCATION']."/images/zaoonsen.webp\"  class=\"mobile-only\" width =350px   alt='ZaoOnsen Ski Slopes'></p>
    
</header>
 
</div><br>
<main>
    <section><center> 
         <div class=\"container-fluid text-center container-md\">
  <center> 
     <div class=\"col \">
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Getting there</H5> 
       <ul>
       
       <li>

 Take the 
<a href=\"".$GLOBALS['URLOCATION']."/map.php?id=1121618\"  style=\"text-decoration:none;border:0;\" title =\'Line Map\'>
 
<span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\">Yamagata Shinkansen</a> 
from Tokyo to Yamagata  </li>
       
       <li>

From  Yamagata take the bus to Zoa Onsen, they leave from the from the No1 Bus Stop  out the front of the station (West Entrance)<br>
<a href=\"https://travel.yamakobus.jp/en/timetable/routebus-yamagata-zaoline.html\"  style=\"text-decoration:none;border:0;\" > Yamagata Line</a>
 </li>

</ul>


 
</div></div></div>
    </section>

    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Where to Stay</H5> 
    <ul>
           <li><a href=\"https://www.meitoya.com/inbound/eng.html\" class='text-blue'style='text-decoration: none;' target='_blank'>Meito Hotel</a></li>
 </ul>
</div></div></div>
    </section>


    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Places of Interest</H5> 
            <ul>
             <li>Ski, SKi Ski </li>
             <li>Local Restaurant <a href=\"".$GLOBALS['URLOCATION']."/map.php?id=8732\"  style='text-decoration: none;' target='_blank'>Shiba Mama No Omise</a> </i>
            <li>Okama Crater  - Not open during the winter months  ,take the Zao Ropeway to to the Upper Station and its about 45 minutes to the crater</li> 
        </ul></div></div></div>
</main>




";

include BASEPATH."/docs/footer.php";
