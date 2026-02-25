<?php

include("/var/www/botoishi/config.php");
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";



echo "

    <header>
    <h1 class='text-center'> <b> Kochi - Shikoku </b></h1>
          <center><p><img src=\"".$GLOBALS['URLOCATION']."/images/kochitemple.webp\"    class=\"desktop-only\"   width =900px     alt='Temple outside of Kocki , at Otoya'></p>
    <p><img src=\"".$GLOBALS['URLOCATION']."/images/kochitemple.webp\"  class=\"mobile-only\" width =500px   alt='Temple outside of Kocki , at Otoya'></p>
  
</header>

<main>
    <section>
         <div class=\"container-fluid text-center   container-md \">
  
     <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Getting there</H5> 
     <p>Take the <a href=\"".$GLOBALS['URLOCATION']."/shinkansenmap.php?route=snyo\" class='text-blue'style='text-decoration: none;' >Sanyo Shinkansen</a> to Okayama ,them the 
    JR Marine Liner service to <a href=\"destination/takamatsu.php\"  class='text-blue'style='text-decoration: none;' >Takamatsu</a><br>

<ul>
<li> From takamatsu take the  JR Ltd. Exp. Shimanto to Kochi (aprrox 190 min)
</li>
</ul>

</div></div></div>
    </section>

    <section>
       <div class=\"container-fluid text-center container-md \">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Where to Stay</H5> 
    <ul>
         <li>Dormy Inn , Super Hotel  and  JR Clement  are all within short walking distance of Kochi Station</li>
        <li><a href=\"https://www.harunonoyu.co.jp//\" class='text-blue'style='text-decoration: none;' target='_blank'>Harunoyu hot springs</a></li>
 </ul>
</div></div></div>
    </section>


    <section>
       <div class=\"container-fluid text-center container-md \">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Places of Interest</H5> 
            <ul>
            <li> From Kochi Station Take  Pier Line Tram to the last stop [Sanbashi-dori 5-chome Station] thena  20 min walk to  Tsuzuki Iland </li>
            <li>3000 year old Cedar tree and shrine <a href=\"https://visitkochijapan.com/en/see-and-do/10028\" class='text-blue'style='text-decoration: none;' target='_blank'> here</a>  ,explore the woods (watch out for Bears!!) From Kochi Station take the local line [JR Dosan Line] to <a href\"https://japan.bresser.net.au/map.php?id=1180121&stationlocation=1\"  class='text-blue'style='text-decoration: none;'></a> Osugi Station </a></li>
            </li>
            <li> If you vist the tree there is a river that you can take a walk in , not an onsen river, but great for the feet  </li>
            <li>Kochi Castle in Decemeber has a night time festival and Saturday is market day </li>
 
        </ul></div></div></div>
</main>




";

include BASEPATH."/docs/footer.php";
