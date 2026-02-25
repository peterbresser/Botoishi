<?php

include("/var/www/botoishi/config.php");
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";


echo"

<body>
    <nav>
     ";
// include BASEPATH ."/docs/menu.php";
echo "
    </nav>
    <header>
    <h1 class='text-center'> <b> Osaka </b></h1>
    <div class=\"text-center\">
    
        <p><img src=\"".$GLOBALS['URLOCATION']."/images/osakaexpo.webp\"    class=\"desktop-only\"   width =800px     alt='Expo 70 site in Osaka'></p>
    <p><img src=\"".$GLOBALS['URLOCATION']."/images/osakaexpo.webp\"  class=\"mobile-only\" width =500px   alt='Expo 70 site in Osaka'></p>

    
     
</header>

<main>
    <section>
         <div class=\"container-fluid text-center container-md \">
  
     <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Getting there</H5> 
        <p>Asuming that you land at Kansai Airport there is an  express bus  ( <a href=\"https://www.kate.co.jp/en/timetable/detail/UH\" target =_blank >Limousine Bas Service Timetable</a> ) to get to      Kintetsu Uehommachi  and express trains on the <a href=\"https://www.howto-osaka.com/en/access-fromkix/\"> Nakai Line</a>  that will get you to Namba Station, the most central station in Osaka.
            <ul><li>For the bus you can buy tickets out the from of the airport from a ticket machine once you have exited the terminal building ( turn right upon exiting) , then just up from the ticket machine you find the bus departures</li>         
            <li>For the train follow the signs from the arrivals hall to the Nankai Line Limied express to Namaba, its the blue train that looks like a robot</li>
            </ul><br>The bus is a better option , there is so much more to see </p>
            
            The bus arrives at Kintetsu Uehommachi  then its a walk to the  Metro station , its called the Namba Walk and there are lots of signs to get you there , follow the crowd. 
            <br>The train arrives at Namba Station(Nakai Line) , you will need to follow the signs to the Metro Station
</div></div></div>
    </section>

    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Where to Stay</H5> 
    
        <p>I would avoid central Osaka , the Metro and JR Lines make it so easy to get around.The business district area near Osaka Castle (Honnmachi) is
            great jumping off point.
 
           <br>From  Namba station  ,this is where the express bus  (Limousine Bus Service )and express trains (on the Nakai Line) arrive at from Kansai Airport  .

            

                  <br>Take the Osaka Metro Midosuji Line to Hommachi Station , then from there you have a choice of a few Hotels , See map</p>
</div></div></div>
    </section>


    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Places of Interest</H5> 
    
    
  
        <ul>
            <li>Osaka Castle - if its your first castle and if its in the autumn its wonderful just to walk around it</li>
            <li>Ride the Monrail to Bampakukinenkoen Station  from Senri-chuo</li>
            <li>Expo 70 Park</li>
            <li>Ride the Ferrris Wheel at LaLaport Expo City</li>
            <li>Day trip to Nara</li>
            <li>Hankai Electric Tramway  from  Ebisucho or Tennoji</li>
            <li>Hattori Ryokuchi Park </li>
            <li>Ikoma Sanjo Amusement Park </li>
            <li>Sakura Circus</li>
            <li>Climb Mount Kongo  - Kawachinagano Station ,transfer to the Nankai Bus, and get off at the bus stop of Mt. Kongoyama Ropeway</li>

        </ul></div></div></div>
</section>
</main>




";

include BASEPATH."/docs/footer.php";
