<?php

include("/var/www/botoishi/config.php");
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";



echo "

    <header>
    <h1 class='text-center'> <b> Toyohashi </b></h1>
<div class=\"container  container-md  border-0 text-center\">
    	  <source type=\"image/webp\" srcset=\"".$GLOBALS['URLOCATION']."/images/toyohashi.webp\">
            <p><img src=\"".$GLOBALS['URLOCATION']."/images/toyohashi.webp\"    class=\"desktop-only\"   width =1000px     alt='Toyohashi Beer Tram'></p>
    <p><img src=\"".$GLOBALS['URLOCATION']."/images/toyohashi.webp\"  class=\"mobile-only\" width =350px   alt='Toyohashi Beer Tram'></p>
    
</header>
 
</div><br>
<main>
    <section><center> 
         <div class=\"container-fluid text-center container-md\">
  <center> 
     <div class=\"col \">
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Getting there</H5> 
        <p>Take the <a href=\"".$GLOBALS['URLOCATION']."/shinkansenmap.php?route=tkaido\" class='text-blue'style='text-decoration: none;' >Tokaido Shinkansen</a>from Osaka or Tokyo<br>
<ul>
<li>Hikari [Tokyo - Shinagawa - Shin-Yokohama - Odawara - Atami - Mishima - Shizuoka - Hamamatsu - Toyohashi - Nagoya - Gifu-Hashima - Maibara - Kyoto - Shin-Osaka]</li>
<li>Kodama [Tokyo - Shinagawa - Shin-Yokohama - Odawara - Atami - Mishima - Shin-Fuji - Shizuoka - Kakegawa - Hamamatsu - Toyohashi - Mikawa-Anjo - Nagoya - Gifu-Hashima - Maibara - Kyoto - Shin-Osaka]</li>
 
</ul>

,<br> One of Japans busiest port cities  but it's a  quiet place to stop if you want to break up a long trip <br>
        <br>One of the many stops that get ignored  on the main shinkansen lines . 
         <br>There are enough small local attractions to slow things down a bit .
         <br> 
</div></div></div>
    </section>

    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Where to Stay</H5> 
    <ul>
         <li>JR Hotels  , Toyoko Inn ,Dormy Inn  and Route Inn are all within short walking distance of Toyohashi Station</li>
        <li>If you dont want to move from the station , try <a href=\"https://www.arcriche.jp/\" class='text-blue'style='text-decoration: none;' target='_blank'>Hotel Arc Riche Toyohashi</a></li>
 </ul>
</div></div></div>
    </section>


    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Places of Interest</H5> 
            <ul>
            <li>Take the <a href='https://www.toyotetsu.com/shinaisen/'  class='text-blue'style='text-decoration: none;' target='_blank' >local tram</a> from outside the station and explore the suburbs  </li>
            <li>Catch the local train to on the Iida Line to Toyokawa Station and visit <a href='".$GLOBALS['URLOCATION']."/map.php?id=8887'  class='text-blue'style='text-decoration: none;' target='_blank' >Saishoden Temple</a> </li>
            <li>Catch the local train to Gamagōri Station and walk down to<a href='".$GLOBALS['URLOCATION']."/map.php?id=8886'  class='text-blue'style='text-decoration: none;' target='_blank'  Takeshima Isalnd</a> </li>

             
     
        </ul></div></div></div>
</main>




";

include BASEPATH."/docs/footer.php";
