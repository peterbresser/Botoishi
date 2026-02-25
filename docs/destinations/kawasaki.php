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
    <h1 class='text-center'> <b> Kawasaki</b></h1>
    <div class=\"text-center\">
    
        <p><img src=\"".$GLOBALS['URLOCATION']."/images/kawasaki.webp\"    class=\"desktop-only\" width =1100px       alt='Tama River Kawasaki'></p>
    <p><img src=\"".$GLOBALS['URLOCATION']."/images/kawasaki.webp\"  class=\"mobile-only\" width =500px   alt='Tama River Kawasaki'></p>

    
     
</header>

<main>
    <section>
         <div class=\"container-fluid text-center container-md \">
  
     <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Getting there</H5> 
	<li>If you are landing at Haneda its a great landing place, only 20  mins from the airport  and a lively city center</li>
        <li>If you landing at Haneda there are bathroom facilities with showers to freshen up</li>

        <p>From Tokyo you can use the  Tōkaidō Line (approx 20 mins)    or from Haneda use the Keikyū Airport Line to Kawasaki Station.
</div></div></div>
    </section>

    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Where to Stay</H5> 
        <p>Dormy Inn, Toyoko Inn,APA and JR Hotels are  around Kawasaki Staion , its a busy area with a lot going on.
            great jumping off point.
 
<br><a href =\"https://hotel-plus-hostel.jp/tokyokawasaki\" class='text-blue'style='text-decoration: none;' >Hotel + Hostel Tokyo Kawasaki</a> is great place away from the station <a href=\"".$GLOBALS['URLOCATION']."/map.php?id=890\" class='text-blue'style='text-decoration: none;' > Here</a>
            

</div></div></div>
    </section>


    <section>
       <div class=\"container-fluid text-center container-md\">
      <div class=\"col\"><center><br>
        <div class=\"card text-start moderat border-0\"  ><left><br>
      <H5>Places of Interest</H5> 
    
    
  
        <ul>
            <li><a href=\"".$GLOBALS['URLOCATION']."/map.php?id=8880\" class='text-blue'style='text-decoration: none;'>Rent a Bike  </a> at <a href=\"https://docomo-cycle.jp/kawasaki/?lang=en\"  class='text-blue'style='text-decoration: none;' target='_blank' >  Docomo Bike Share</a> , Kawasaki is flat and easy to get around, ride along the Tama River</li>
            <li>Live Music at <a href=\"".$GLOBALS['URLOCATION']."/map.php?id=8882\" class='text-blue'style='text-decoration: none;'>CLUB CITT'A'TTIC</a> </li>
            <li>Visit the Italian Quarter at La Cittadella</li>
            <li>Go to the  <a href=\"".$GLOBALS['URLOCATION']."/map.php?id=8881\" class='text-blue'style='text-decoration: none;' > Movies </a> at Toho Cinemas Kawasaki and relax in the super comfy chairs , fall asleep after your flight or  eat Karage and drink sake</li>
	     <li>Eat at <a href=\"".$GLOBALS['URLOCATION']."/map.php?id=8884\" class='text-blue'style='text-decoration: none;'>Unico Gardens</a> A few different cafe and bars. </li>
        </ul></div></div></div>
</section>
</main>




";

include BASEPATH."/docs/footer.php";
