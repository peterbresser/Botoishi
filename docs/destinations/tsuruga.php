<?php

include("/var/www/botoishi/config.php");
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";



echo "

    <header>
    <h1 class='text-center'> <b> Tsuruga </b></h1>
<div class=\"container  container-md  border-0 text-center\">
    	  <source type=\"image/webp\" srcset=\"".$GLOBALS['URLOCATION']."/images/tsuruga.webp\">
            <p><img src=\"".$GLOBALS['URLOCATION']."/images/tsuruga.webp\"    class=\"desktop-only\"   width =600px     alt='Tsuruga - Kehi no Matsubara Pine Grove '></p>
    <p><img src=\"".$GLOBALS['URLOCATION']."/images/tsuruga.webp\"  class=\"mobile-only\" width =500px   alt='Tsuruga - Kehi no Matsubara Pine Grove '></p>
    
</header>
 
</div><br>
<main>
    <section><center> 
         <div class=\"container-fluid text-center container-md\">
  <center> 
       <div class=\"col \">
        <div class=\"card text-start moderat  border-0\"  ><left><br>
      <H5>About</H5> 
        <p><br>Tsuruga is a samll remote port town on the west coast of Honshu , until the shinkansen connected it to Tokyo it was only accessable via a 3 hour local train.
        <br>It is not a tourist destination , but still an intereststing enough town, for a glimpse of working port town.
        <br>It gets cold , realy cold , -10C  in winter, then when the wind whips up, colder
        <br> it is the home of  Leiji Matsumoto (not really) , manga creator known for Space Battleship Yamato (Star Blazers)  , statues of the characters adorn the main street



</div></div><br>
     <div class=\"col \">
        <div class=\"card text-start moderat  border-0\"  ><left><br>
      <H5>Getting there</H5> 
      <ul>
        <li>From Tokyo take the  <a href=\"".$GLOBALS['URLOCATION']."/shinkansenmap.php?route=hokuriku\" class='text-blue'style='text-decoration: none;' >Hokuriku Shinkansen </a> <br>

Hokuriku Shinkansen  -Kagayaki [Tokyo - Ueno - Omiya - Nagano - Toyama - Kanazawa - Komatsu - Kaga Onsen - Awara Onsen - Fukui - Echizen-Takefu - Tsuruga]</li>
<li>From Osaka take the  Limited. Express Thunderbird ( approx 1.5 hours)

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
         <li>Dormy Inn , Toyoko Inn  and Route Inn are all within short walking distance of Tsuruga Station</li>
        <li><a href=\"https://choubei.jp/\" class='text-blue'style='text-decoration: none;' target='_blank'>Sazanami Resort Chobei</a></li>
 </ul>
</div></div></div>
    </section>


    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat  border-0\"  ><left><br>
      <H5>Places of Interest</H5> 
            <ul>
            <li>Hire a bike from the tourist informtion center and explore the Port area and the Kehi no Matsubara Pine Grove </li>
            <li>Visit <a href='".$GLOBALS['URLOCATION']."/map.php?id=8869'  class='text-blue'style='text-decoration: none;' target='_blank' >Shoin Garden</a> </li>

            </li>
              
           
        </ul></div></div></div>
</main>




";

include BASEPATH."/docs/footer.php";
