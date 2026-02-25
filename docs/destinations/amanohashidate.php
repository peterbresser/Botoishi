<?php


include("/var/www/botoishi/config.php");
include $_SERVER['DOCUMENT_ROOT'] . "/header.php";


include BASEPATH . "/docs/menu.php";


echo "

    <header>
    <h1 class='text-center'> <b> Amanohashidate  </b></h1>
<div class=\"container  container-md  border-0 text-center\">
    	  <source type=\"image/webp\" srcset=\"" . $GLOBALS['URLOCATION'] . "/images/amanohashidate.webp\">
            <p><img src=\"" . $GLOBALS['URLOCATION'] . "/images/amanohashidate.webp\"    class=\"desktop-only\"   width =1400px     alt='Amanohashidate  - Kehi no Matsubara Pine Grove '></p>
    <p><img src=\"" . $GLOBALS['URLOCATION'] . "/images/amanohashidate.webp\"  class=\"mobile-only\" width =500px   alt='Amanohashidate  - Kehi no Matsubara Pine Grove '></p>
    
</header>
 
</div>
<main>
    <section><center> 
         <div class=\"container-fluid text-center container-md\">
  <center> 
       <div class=\"col \">
        <div class=\"card text-start moderat  border-0\"  ><left><br>
      <H5>About</H5> 
        <p><br>Amanohashidate  is one of Japan's three scenic views , predominately known for its pine covered sand bar in the mouth of the Bay .
        <br>It is one of the most popular Japanese tourists spots.
        <br>Expect it to be busy if walking/cycking the sandbar or taking the ropeway;

</div></div><br>
     <div class=\"col \">
        <div class=\"card text-start moderat  border-0\"  ><left><br>
      <H5>Getting there</H5> 
      <ul>
        <li>From Osaka take the  <b>Nozomi</b>  to Kyoto .<br>
         At Kyoto  take the  Limited Express Hashidate </b> to<b> Amanohashidate</b> <br>
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
         <li>This is a traditional Japanese tourist town and is local hotels , mishinku and ryokans</li>
        <li><a href=\"https://shourotei.com/\" class='text-blue'style='text-decoration: none;' target='_blank'>Monjuso</a></li>
          <li><a href=\"http://coto-miyazu.com/\" class='text-blue'style='text-decoration: none;' target='_blank'>Coto</a></li>
 </ul>
</div></div></div>
    </section>


    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat  border-0\"  ><left><br>
      <H5>Places of Interest</H5> 
            <ul>
            <li>Hire a bike <a href='" . $GLOBALS['URLOCATION'] . "/map.php?id=3125'  class='text-blue'style='text-decoration: none;' target='_blank' >Here</a>, ride around the Aso the Island Sea.</li>
            <li>Visit <a href='" . $GLOBALS['URLOCATION'] . "/map.php?id=8874'  class='text-blue'style='text-decoration: none;' target='_blank' >Amanohashidate Chairlift and Monorail</a> </li>

            </li>
              
           
        </ul></div></div></div>
</main>




";

include BASEPATH . "/docs/footer.php";
