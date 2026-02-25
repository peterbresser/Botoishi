<?php

include("/var/www/botoishi/config.php");
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";



echo "

    <header>
    <h1 class='text-center'> <b>Koyasan  </b></h1>
<div class=\"container  container-md  border-0 text-center\">
    	  <source type=\"image/webp\" srcset=\"".$GLOBALS['URLOCATION']."/images/koyasan.jpg\">
            <p><img src=\"".$GLOBALS['URLOCATION']."/images/koyasan.jpg\"    class=\"desktop-only\"   width =1000px     alt='Koyasan Street View'></p>
    <p><img src=\"".$GLOBALS['URLOCATION']."/images/koyasan.webp\"  class=\"mobile-only\" width =500px   alt='Koyasan Street View'></p>
    
</header>
 
</div><br>
<main>
    <section><center> 
         <div class=\"container-fluid text-center container-md\">
  <center> 
     <div class=\"col \">
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Getting there</H5> 
       <ul>
       
       <li>

 Take the 
<a href=\"".$GLOBALS['URLOCATION']."/newstations.php?lineid=32007\"  style=\"text-decoration:none;border:0;\" title =\'Line Map\'>
 
<span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\">Nakai Koya Line</a> 
from Namba Station (private) to Gokurakubash  </li>
       
       <li>

From Gokurakubashi take the  
<a href=\"".$GLOBALS['URLOCATION']."/newstations.php?lineid=32008\" style=\"text-decoration:none;border:0;\" title =\'Line Map\'>
Nakai Koya Cable Car</a>
 
 ,at the top of the mountain take the bus into Koyasan</li>

</ul>


 
</div></div></div>
    </section>

    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Where to Stay</H5> 
    <ul>
           <li><a href=\"http://koyasanguesthouse.com/\" class='text-blue'style='text-decoration: none;' target='_blank'> Koyasan Guest House Kokuu</a></li>
 </ul>
</div></div></div>
    </section>


    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Places of Interest</H5> 
            <ul>
             <li>Explore the  Koyasan Cemetery , enter <a href=\"".$GLOBALS['URLOCATION']."/map.php?id=8856\"  style='text-decoration: none;' target='_blank'>Here</a> </li>
           
        </ul></div></div></div>
</main>




";

include BASEPATH."/docs/footer.php";
