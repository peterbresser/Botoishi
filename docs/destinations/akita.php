<?php

include("/var/www/botoishi/config.php");
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";



echo "

    <header>
    <h1 class='text-center'> <b> Akita </b></h1>
    <div class=\"text-center\">
      <source type=\"image/webp\" srcset=\"".$GLOBALS['URLOCATION']."/images/akita.webp\">
       <p><img src=\"".$GLOBALS['URLOCATION']."/images/akita.webp\"    class=\"desktop-only\"   width =1300px     alt='Namahage wearing hefty oni masks and traditional straw capes outside of Oga'></p>
    <p><img src=\"".$GLOBALS['URLOCATION']."/images/akita.webp\"  class=\"mobile-only\" width =500px   alt='Namahage wearing hefty oni masks and traditional straw capes outside of Oga'></p>
  
    </div>
</header>

<main>
    <section>
         <div class=\"container-fluid text-center container-md\">
  
     <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Getting there</H5> 
        <p>Take the <a href=\"https://botoishi.com.au/shinkansenmap.php?route=akita&traintype=komachi\" class='text-blue'style='text-decoration: none;' >Akita Shinkansen</a>  [Tokyo to Akita] . This is a Komachi train stopping at  Tokyo , Ueno , Omiya , Sendai , Morioka , Shizokuishi , Tazawako , Kakunodate , Omagari , Akita
        <br>Akita Train station is the center of town , with the usual hotels surrounding , Dormy Inn Akita is one og the best, with an onsen on teh top floor , with an outdoor one as well<br>
         <br>There is a Seibu mall not far from the station with a really good food area downstairs ,also a Tower Records in the station precinct.
         <br>Inside the staion is the Tourist Information Center , they are so helpful .
</div></div></div>
    </section>

    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Where to Stay</H5> 
    <ul>
         <li>Dormy Inn , Apa Hotel , Toyoko Inn  are all within short walking distance of Akita Station</li>
        <li><a href=\"https://www.satomi-e.com/\" class='text-blue'style='text-decoration: none;' target='_blank'>  Akita Onsen Satomi</a></li>
 </ul>
</div></div></div>
    </section>


    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Places of Interest</H5> 
            <ul>
           
            <li> <a href=\"".$GLOBALS['URLOCATION']."\map.php?id=35\" style='text-decoration: none;'   > Kodama Miso and Sake Brewery</a>  - Sake, Miso and Soya factory -local train to Ugo Iizuka   </li>
            <li>Akita Castle , Temple and Park   </li>
             <li>Hire a car and travel to Cape Nudo -  drive back along the west coast  , see<a href=\"".$GLOBALS['URLOCATION']."\map.php?id=1803\" style='text-decoration: none;'   > Oga</a></li>
        </ul></div></div></div>
</section>
</main>




";

include BASEPATH."/docs/footer.php";
