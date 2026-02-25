<?php

include("/var/www/botoishi/config.php");
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";



echo "

    <header>
    <h1 class='text-center'> <b> Beppu </b></h1>
    <div class=\"text-center\">
      <source type=\"image/webp\" srcset=\"".$GLOBALS['URLOCATION']."/images/beppu.webp\">
       <p><img src=\"".$GLOBALS['URLOCATION']."/images/beppu.webp\"    class=\"desktop-only\"   width =1200px     alt='Beppu ,  a hot spings town'></p>
    <p><img src=\"".$GLOBALS['URLOCATION']."/images/beppu.webp\"  class=\"mobile-only\" width =500px   alt='Beppu ,  a hot spings town'></p>
  
    </div>
</header>

<main>
    <section>
         <div class=\"container-fluid text-center container-md\">
  
     <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Getting there</H5> 
        <p>From Osaka Take the <a href=\"".$GLOBALS['URLOCATION']."/shinkansenmap.php?route=sanyo&traintype=mizuho\" class='text-blue'style='text-decoration: none;' >Sanyo Shinkansen  (Mizuho,Nozomi,Kodama)</a>  [Osaka to Fukuoka ] .Get off at Kokura then take the local train down the coat to Beppu
        <br>Beppu Train station is not quite in the  center of town .
       
         <br>From the train station down towards the coast is the main restaurant part of town, its worth an explore on the southern  fringes of the area.
          <br>Getting out -  take the ferry from <a href=\"".$GLOBALS['URLOCATION']."\map.php?id=8865\" style='text-decoration: none;'   > Beppu to Yawatahama </a>( train to Matsuyama) </li>
        
</div></div></div>
    </section>

    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Where to Stay</H5> 
    <ul>
         <li> SuperHotel, APA ,Kamenoi and Onyado are within a short walk of the station </li>
        <li><a href=\"https://www.shiragiku.co.jp/en/\" class='text-blue'style='text-decoration: none;' target='_blank'> Hotel Shiragiku</a> -  a massive onsen and rooftop bar</li>
 
        
 </ul>
</div></div></div>
    </section>


    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Places of Interest</H5> 
            <ul>
           
            <li> <a href=\"".$GLOBALS['URLOCATION']."\map.php?id=8863\" style='text-decoration: none;'   > Spica Bepu</a>  eclectic store  </li>
            <li>Beppu Park   </li>
            <li>There  is a <a href=\"".$GLOBALS['URLOCATION']."\map.php?id=8864\" style='text-decoration: none;' >Hirose Beppu hardware store </a> , get lost for a few hours </li>
             <li>Take a day trip the train down the coast to Oita</a></li>
        </ul></div></div></div>
</section>
</main>




";

include BASEPATH."/docs/footer.php";
