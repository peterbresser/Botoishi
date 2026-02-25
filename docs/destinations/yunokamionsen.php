<?php


include("/var/www/botoishi/config.php");
include $_SERVER['DOCUMENT_ROOT'] . "/header.php";


include BASEPATH . "/docs/menu.php";


echo "

    <header>
    <h1 class='text-center'> <b> Yunokami Onsen  </b></h1>
<div class=\"container  container-md  border-0 text-center\">
    	  <source type=\"image/webp\" srcset=\"" . $GLOBALS['URLOCATION'] . "/images/yunokamionsen.webp\">

            <p><img src=\"" . $GLOBALS['URLOCATION'] . "/images/yunokamionsen.webp\"    class=\"desktop-only\"   width =1100px     alt='Yunokamionsen  - A historic hot spring resort in Shimogo Town '></p>
    <p><img src=\"" . $GLOBALS['URLOCATION'] . "/images/yunokamionsen.webp\"  class=\"mobile-only\" width =500px   alt='Yunokamionsen - A historic hot spring resort in Shimogo Towne '></p>
    
</header>
 
</div>
<main>
    <section><center> 
         <div class=\"container-fluid text-center container-md\">
  <center> 
       <div class=\"col \">
        <div class=\"card text-start moderat  border-0\"  ><left><br>
      <H5>About</H5> 
        <p><br>Yunokami Onsen is a historic hot spring resort town in Fukushima Prefecture .
        <br>There are inns and guesthouses scattered from AAshinomakionsen  to Aizu-Tajima;
        <br>Yunokami Onsen is a tradtional hot springs town , forget about chain hotels and western style rooms.

</div></div><br>
     <div class=\"col \">
        <div class=\"card text-start moderat  border-0\"  ><left><br>
      <H5>Getting there</H5> 
      <ul>
        <li>From Tokyo take the  <b>Tohoku or yamagata Shinkansen   </b>  to <b> Koriyama Station</b><br>
          at  <b> Koriyama </b>, change to  the Ban-Etsusai Line to  <b>Aizu-Wakamatsu Station</b><br>
           at   <b>Aizu-Wakamatsu Station</b>, change to  the Tadami Line  to  <b>Yunokamionsen Station</b><br></li>
    <span class=\"text-danger\" >Note: this is a mixter of JR and Provate railways , so you will need to byt tivckets or user a IC card where possible</span>

   </ul>


</div></div></div>
    </section>

    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Where to Stay</H5> 
    <ul>
         <li>This is a traditional Japanese tourist town and is local hotels , mishinku and ryokans</li>
        <li><a href=\"https://yunokami.com/oyado/nishikiya/\" class='text-blue'style='text-decoration: none;' target='_blank'>Nishikiya</a></li>
          <li><a href=\"https://yunokami.com/oyado/miyamotoya//\" class='text-blue'style='text-decoration: none;' target='_blank'>Miyamotoya</a></li>
 </ul>
</div></div></div>
    </section>


    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat  border-0\"  ><left><br>
      <H5>Places of Interest</H5> 
            <ul>
            <li>Onsen,Relax and Eat </li>
            <li>Visit <a href='https://yunokami.com/sightseeing/'  class='text-blue'style='text-decoration: none;' target='_blank' >Local Tourist Organiization</a> </li>

            </li>
              
           
        </ul></div></div></div>
</main>




";

include BASEPATH . "/docs/footer.php";
