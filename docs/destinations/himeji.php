<?php

include("/var/www/botoishi/config.php");
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";



echo "

    <header>
    <h1 class='text-center'> <b> Himeji  </b></h1>
<div class=\"container  container-md  border-0 text-center\">
    	  <source type=\"image/webp\" srcset=\"".$GLOBALS['URLOCATION']."/images/himeji.webp\">
            <p><img src=\"".$GLOBALS['URLOCATION']."/images/himeji.webp\"    class=\"desktop-only\"   width =800px     alt='Tegarayama interaction station'></p>
    <p><img src=\"".$GLOBALS['URLOCATION']."/images/himeji.webp\"  class=\"mobile-only\" width =500px   alt='Tegarayama interaction station'></p>
    
</header>
 
</div><br>
<main>
    <section><center> 
         <div class=\"container-fluid text-center container-md\">
  <center> 
     <div class=\"col \">
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Getting there</H5> 
        <p>Take the <a href=\ ".$GLOBALS['URLOCATION']."/shinkansenmap.php?route=tohoku\" class='text-blue'style='text-decoration: none;' >Sanyo Shinkansen (75 min) </a> from Shin Osaka to Himeji , there four to choose from<br>
<ul>
<li>Mizuho [Shin-Osaka - Shin-Kobe - Himeji - Okayama - Hiroshima - Kokura - Fukuoka]</li>
<li>Nozomi [Shin Osaka - Shin-Kobe - Himeji - Okayama - Fukuyama - Hiroshima - Tokuyama - Shin-Yamaguchi - Kokura - Fukuoka]</li>
<li>Kodama [Shin-Osaka - Shin-Kobe - Nishi-Akashi - Himeji - Aioi - Okayama - Shin-Kurashiki - Fukuyama - Shin-Onomichi - Mihara - Higashi-Hiroshima - Hiroshima - Tokuyama - Shin-Yamaguchi - Asa - Shin-Shimonoseki - Kokura - Fukuoka]</li>
<li>Hikari [Shin-Osaka - Shin-Kobe - Nishi-Akashi - Himeji - Aioi - Okayama]</li>
<li>Or take the  Kintetsu Ltd. Express  express from  Osaka Station (5 hours)</li>
</ul>

 
</div></div></div>
    </section>

    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Where to Stay</H5> 
    <ul>
         <li>Dormy Inn and  Toyoko Inn  are all within short walking distance of Hiemji  Station</li>
        <li><a href=\"https://besso.hyogo.jp/en/\" class='text-blue'style='text-decoration: none;' target='_blank'> Besso Himeji </a></li>
 </ul>
</div></div></div>
    </section>


    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Places of Interest</H5> 
            <ul>
            <li><a href='".$GLOBALS['URLOCATION']."/map.php?id=8852'  class='text-blue'style='text-decoration: none;' target='_blank' >Pacific War Air Raid Victims National Memorial</a> </li>
            <li><a href='".$GLOBALS['URLOCATION']."/map.php?id=8851'  class='text-blue'style='text-decoration: none;' target='_blank' >Tegarayama interaction station</a> </li>
            </li>
            <li>On a Saturday morning  <a href='".$GLOBALS['URLOCATION']."/map.php?id=8853'  class='text-blue'style='text-decoration: none;' target='_blank' >Hyogo Prefectural Budokan</a></li>
           <li>Try Kushikatsu ,meat and veggie skewers that are breaded with panko and deep-fried to a golden crisp  at  <a href='".$GLOBALS['URLOCATION']."/map.php?id=8857'  class='text-blue'style='text-decoration: none;' target='_blank' > Kushikatsu Jizou </a>
           
        </ul></div></div></div>
</main>




";

include BASEPATH."/docs/footer.php";
