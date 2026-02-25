<?php

include("/var/www/botoishi/config.php");
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";



echo "

    <header>
    <h1 class='text-center'> <b> Kinosaki </b></h1>
    <div class=\"text-center\">
      <source type=\"image/webp\" srcset=\"".$GLOBALS['URLOCATION']."/images/kinosaki.webp\">
       <p><img src=\"".$GLOBALS['URLOCATION']."/images/kinosaki.webp\"    class=\"desktop-only\"   width =1120px     alt='Namahage wearing hefty oni masks and traditional straw capes outside of Oga'></p>
    <p><img src=\"".$GLOBALS['URLOCATION']."/images/kinosaki.webp\"  class=\"mobile-only\" width =350px   alt='Namahage wearing hefty oni masks and traditional straw capes outside of Oga'></p>
  
    </div>
</header>

<main>
    <section>
         <div class=\"container-fluid text-center container-md\">
  
     <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Getting there [from Osaka] </H5> 
        <p>Take the Limited Express Kounotori  from
       <a href='".$GLOBALS['URLOCATION']."/map.php?id=1164115'   class='text-blue'style='text-decoration: none;' >Osaka Station </a>
   ( <a href=\"https://www.westjr.co.jp/global/en/\"  class='text-blue'style='text-decoration: none;' target='_blank' >JR West  Trains</a> ), Reseverd seating is available
         <br>Outside of the station is the Tourist Information Centre , they are brilliant , if you have not booked accomodation this is the place .
</div></div></div>
    </section>

    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Where to Stay</H5> 
    <ul>
         <li>There are no chain hotels inside the town , this is a traditional Onsen Town  , if you are unsure use the Tourist Information Center</li>
        <li><a href=\"https://www.nishimuraya.ne.jp/honkan//\" class='text-blue'style='text-decoration: none;' target='_blank'> Nishimuraya Honkan</a>	 - a 200 Plus year old Ryokan</li>
 </ul>
</div></div></div>
    </section>


    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Places of Interest</H5> 
            <ul>
            <li> Where your Yukata and wooden clogs into town , walk along the river and find the amusement arcade and play the drums </li>
            <li>Visit the seven unique public onsens  (tattoo friendly) </li>
        </ul></div></div></div>
</section>
</main>




";

include BASEPATH."/docs/footer.php";
