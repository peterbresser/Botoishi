<?php

include("/var/www/botoishi/config.php");
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";



echo "

    <header>
    <h1 class='text-center'> <b> Abashiri - Hokkaido </b></h1>
<div class=\"container  container-md  border-0 text-center\">
    	  <source type=\"image/webp\" srcset=\"".$GLOBALS['URLOCATION']."/images/abashiri.webp\">
            <p><img src=\"".$GLOBALS['URLOCATION']."/images/abashiri.webp\"    class=\"desktop-only\"   width =1000px     alt='Abashiri harbour , a view across to the Shiretoko Peninsula and Mount Shiretoko  '></p>
    <p><img src=\"".$GLOBALS['URLOCATION']."/images/abashiri.webp\"  class=\"mobile-only\" width =350px   alt='Abashiri harbour , a view across to the Shiretoko Peninsula and Mount Shiretoko  '></p>
    
</header>
 
</div><br>
<main>
    <section><center> 
         <div class=\"container-fluid text-center container-md\">
  <center> 
     <div class=\"col \">
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Getting there</H5> 
        <p>Take the <a href=\"".$GLOBALS['URLOCATION']."/shinkansenmap.php?route=tohoku\" class='text-blue'style='text-decoration: none;' >Tohoku Shinkansen</a> to Aomori , there three to choose from<br>
<ul>
<li>Hayabusa [Tokyo - Omiya - Sendai - Morioka - Shin-Aomori]</li>
<li>Yamabiko [Tokyo - Ueno - Omiya - Oyama - Utsunomiya - Nasu-Shiobara - Shin-Shirakawa - Koriyama - Fukushima - Shiroishi-Zao - Sendai - Furukawa - Kurikoma-Kogen - Ichinoseki - Mizusawa-Esashi - Kitakami - Shin-Hanamaki - Morioka]</li>
<li>Nasuno [Tokyo - Ueno - Omiya - Oyama - Utsunomiya - Nasu-Shiobara - Shin-Shirakawa - Koriyama]</li>
</ul>

,<br> Spending a night or two in Aomori is worth it. <br>From Aomori (departs Shi-Aomri) take the  <a href=\"https://".$GLOBALS['URLOCATION']."/shinkansenmap.php?route=hokkaiido\" class='text-blue'style='text-decoration: none;' >Hokkaido Shinkansen</a> to Hakodate<br>
        <br>Hakodate tends to get missed by a lot of travellers, its mainly a stop on the way to Saporro. 
         <br>Saporro to Abashiri  , the Ltd. Exp. is 7 hours , we break it up into a few days , stopping at smaller towns on the way , such as Asahikawa and Kitamia
         <br> 
</div></div></div>
    </section>

    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Where to Stay</H5> 
    <ul>
         <li>Dormy Inn , Toyoko Inn (they have double king rooms)  and Route Inn are all within short walking distance of Abashiri Station</li>
        <li><a href=\"http://animanosato.jp/\" class='text-blue'style='text-decoration: none;' target='_blank'> Farm Inn Anima no Sato</a></li>
 </ul>
</div></div></div>
    </section>


    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Places of Interest</H5> 
            <ul>
            <li><a href='".$GLOBALS['URLOCATION']."/map.php?id=3070'  class='text-blue'style='text-decoration: none;' target='_blank' >Moyoro Shell Mound Museum</a> </li>
            <li><a href='".$GLOBALS['URLOCATION']."/map.php?id=3071'  class='text-blue'style='text-decoration: none;' target='_blank' >Museum of Northern People </a> </li>
            </li>
            <li>Eat an Abashiri oyster at  <a href='".$GLOBALS['URLOCATION']."/map.php?id=735'  class='text-blue'style='text-decoration: none;' target='_blank' >Sakanatei Kihachi - Izakaya</a></li>
             
             <li>Catch the local train down the east coast to Midori for a coffee at Marufu Coffee</li>
        </ul></div></div></div>
</main>




";

include BASEPATH."/docs/footer.php";
