<?php

include("/var/www/botoishi/config.php");
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";



echo "

    <header>
    <h1 class='text-center'> <b> Sagishima [Sagi Island] </b></h1>
 <center>
     <p><img src=\"".$GLOBALS['URLOCATION']."/images/sagishima2.webp\"    class=\"desktop-only\"   width =1400px     alt='Peak of Sagishima in the Seto Sea, hiking across half the island'></p>
    <p><img src=\"".$GLOBALS['URLOCATION']."/images/sagishima2.webp\"  class=\"mobile-only\" width =500px   alt='Peak of Sagishima in the Seto Sea, hiking across half the island'></p>
  
    
    
    </div>
</header>

<main>
    <section>
         <div class=\"container-fluid text-center container-md\">
  
     <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><table><br>
      <H5>Getting there</H5> 
        <p>From Osaka take the <a href=\"".$GLOBALS['URLOCATION']."/shinkansenmap.php?route=sanyo\" class='text-blue'style='text-decoration: none;' >Sanyo Shinkansen</a> to Mihara .<br>
<ul>
<li>Kodama [ 	
Shin-Osaka - Shin-Kobe - Nishi-Akashi - Himeji - Aioi - Okayama - Shin-Kurashiki - Fukuyama - Shin-Onomichi - Mihara - Higashi-Hiroshima - Hiroshima - Tokuyama - Shin-Yamaguchi - Asa - Shin-Shimonoseki - Kokura - Fukuoka ]</li>
 
</ul>

<br> Spending a night or two in Mihara is worth it. You can hire bike form the tourist infomation center and ride around the coast , <br>
we have only headed south around the harbour and and and across the Nishinogawa River bridge<left> <table border='0'><tr valign='top'> 
<form method =POST action='".$GLOBALS['URLOCATION']."/map.php'>
       <input type=hidden name=id value='8860'>
       <button type=\"submit\" class=\"btn text-dark\" style=\"text-decoration:none;border:0;\"> 
<td>From Mihara take the ferry from 

      
       <button class=text-primary style=\"font: 16px Arial, Helvetica, sans-serif;background-color:white;border:0;\" >Here</button></button> 
       </form>    </td></tr> <tr><td>
<a href=\"https://www.city.mihara.hiroshima.jp/soshiki/30/naikou.html\" class='text-blue'style='text-decoration: none;' >
<br>  Mihara Port Ferry Terminal Timetable</a><br></td></tr> 
        </table>   
</div></div></div>
    </section>

    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Where to Stay</H5> 
    <ul>
         <li>SuperHotel  and Route Inn are all within short walking distance of Mihara Station</li>
       
 </ul>
</div></div></div>
    </section>


    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Places of Interest</H5> 
            <ul>
 
 
            <li>Walk the Orange groves</li>
             
             <li>Hike across the island , it its steep in sections ( chains and ropes are there to help), 
             <br>catch the ferry from <a href=\"".$GLOBALS['URLOCATION']."/map.php?id=8860\" class='text-blue'style='text-decoration: none;' >Mihara Port</a> to get <a href=\"".$GLOBALS['URLOCATION']."/map.php?id=8859\" class='text-blue'style='text-decoration: none;' >Sagi Port</a> then hike acoss the island and catch the ferry from  <a href=\"".$GLOBALS['URLOCATION']."/map.php?id=8861\" class='text-blue'style='text-decoration: none;' >Mukota Port</a></li>
        </ul></div></div></div>
</main>




";

include BASEPATH."/docs/footer.php";
