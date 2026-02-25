<?php

include("/var/www/botoishi/config.php");
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";



echo "

    <header>
    <h1 class='text-center'> <b> Kijimadaira    </b></h1>
<div class=\"container  container-md  border-0 text-center\">
    	  <source type=\"image/webp\" srcset=\"".$GLOBALS['URLOCATION']."/images/kijimadaira.webp\">
            <p><img src=\"".$GLOBALS['URLOCATION']."/images/kijimadaira.webp\"    class=\"desktop-only\"   width =900px     alt='Kijimadaira , a small village and ski fiels in Nagano Prefecture'></p>
    <p><img src=\"".$GLOBALS['URLOCATION']."/images/kijimadaira.webp\"  class=\"mobile-only\" width =350px   alt='Kijimadaira , a small village and ski fiels in Nagano Prefecture '></p>
    
</header>
 
</div><br>
<main>
    <section><center> 
         <div class=\"container-fluid text-center container-md\">
  <center> 
     <div class=\"col \">
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Getting there</H5> 
        <p>Take the <a href=\"".$GLOBALS['URLOCATION']."/shinkansenmap.php?route=hokuriku\" class='text-blue'style='text-decoration: none;' >Hokuriku Shinkansen</a> to Tsuruga  <br>
<ul>
<li>Kagayaki [Tokyo - Ueno - Omiya - Nagano - Iiyama -Itoigawa - Toyama - Kanazawa - Komatsu - Kaga Onsen - Awara Onsen - Fukui - Echizen-Takefu - Tsuruga]</li>
<li>From Nagano you can also take the JR Iiyama Line local train </li>
</ul>
A night or two in Nagano  is worth it.  
          <br> 
</div></div></div>
    </section>

    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Where to Stay</H5> 
    <ul>
        <li>This is a small ski resort , there are no big chain hotels, its all Guest Houese and Minshinkus</li>
        <li>A great guest house , they will shuttle you to and from Iiyama station <a href=\"https://www.miyukinoyh.com/\" class='text-blue'style='text-decoration: none;' target='_blank'> Miyuki no mori</a> on the Kijimadaira ski fields <a href='https://kijimadaira-ski.com/'>here</a>  </li>
    <li>On the Ski Fields, ski in, ski out in your own Lodge <a href ='https://kijimadaira.org/article/detail/stay/pension-watanomi/'>Watanomi Lodge</a></li>    
        
 </ul>
</div></div></div>
    </section>


    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Places of Interest</H5> 
            <ul>
                <li>Village Website <a href='https://kijimadaira.org/'  class='text-blue'style='text-decoration: none;' target='_blank'> Here</a> </li>
            <li><a href='https://kijimadaira.org/article/detail/activity/enjoysnow/'  class='text-blue'style='text-decoration: none;' target='_blank' >SKi</a> </li>
            <li><a href='http://www.kamisukiya.com'  class='text-blue'style='text-decoration: none;' target='_blank' >Washi Paper Experience</a> </li>
            </li>
              
             <li>Catch the local bus to NozawaOnsen</li>
        </ul></div></div></div>
</main>




";

include BASEPATH."/docs/footer.php";
