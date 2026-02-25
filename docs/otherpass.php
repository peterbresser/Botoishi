<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";

echo"<body >
 
 <br>
<center>
<div class=\"container-fluid   container-md  \">
 <div class=\"col\"><br><center>
     <div class=\"card border-0\"><br><center><br>
        <div class='text text-center'><p> <b><h1> Travel passes</h1></b></p>
        </div>
    </div> 
 
     <div class=\"card\"><br><center><br>
        <div class='text text-start'>
 <p>The JR Railways and private lines run passes to specific areas and at specific times of the year , these  are a few </p>
        </div>
        </div>
    </div> 
 
  <div class=\"col\"><br><center>
  <div class=\"card\">
        <div class='text-body text-start'><p><left><b>  <a href='https://www.visitchiba.jp/things/thank-you-chiba-free-pass/ 'class='textblue' title='Thank You Chiba Free Pass' >Thank You Chiba Free Pass</a></b>
        </div>
             <div class=' text-start text-small'>
     <a href='https://osaka-amazing-pass.com/en/service_free.html' target='_blank'> <img src='images/chiba.png' width=160px alt=\"Tokyo Underground mysteries \"></a>    
     <br> <p> <br>The “Thank You Chiba Free Pass” is a seasonal two-day ticket sold by JR East. With this pass, you can take unlimited rides on JR trains around Chiba — plus participating private railways and buses, and even a ferry — for two consecutive days. The next period this pass will be available is from January 4, 2026 to February 28, 2026 (last day of purchase: February 27, 2026).
        <BR>   <A HREF  = \"https://www.visitchiba.jp/wp-content/uploads/2025/10/%E3%82%B5%E3%83%B3%E3%82%AD%E3%83%A5%E3%83%BC%E8%8B%B1%E8%AA%9E.pdf\" style=\"text-decoration:none\">Click Here to Download the PDF</A></div>
     </div> 
 
   <div class=\"col\"><br><center>
  <div class=\"card\">
        <div class='text-body  text-start'><p><left><b>  <a href='".$GLOBALS['URLOCATION']."/destinations/tokyometrogame.php' class='textblue' title='Tokyo Metro: The Underground Mysteries' >Tokyo Metro: The Underground Mysteries</a></b>
        </div>
             <div class=' text-start text-body'>
     <a href='https://realdgame.jp/s/chikanazo2025/' target='_blank'> <img src='images/scarp.webp' width=300px alt=\"Tokyo Metro: The Underground Mysteries\"></a>    
      <br> <br>Tokyo Metro: The Underground Mysteries is an annual puzzle-solving adventure game in Tokyo, typically held in winter, where participants use metro lines to follow clues, solve riddles, and discover hidden city spots, often involving a physical kit and a 24-hour ticket, but it's
currently unavailable for booking in late 2025
        <BR>   <BR><A HREF  = '".$GLOBALS['URLOCATION']."/destinations/tokyometrogame.php\"  target='_blank' style=\"text-decoration:none\" >Details for  2025</A></div>
     </div> 
 
 
 <div class=\"col\"><br><center>
  <div class=\"card\">
        <div class='text text-start'><p><left><b>  <a href='https://osaka-amazing-pass.com/en/info.html' class='textblue' title='Osaka Amazing Pass' >Osaka Amazing Pass</a></b>
        </div>
             <div class=' text-start text-small'>
     <a href='https://osaka-amazing-pass.com/en/service_free.html' target='_blank'> <img src='images/osakapass.avif' width=160px alt=\"osakapass\"></a>    
      <p> 1 or 2 day pass for  metro and private railways across Osaka <br> Osaka Amazing  Pass  is a mobile service that allows users to purchase tickets for trains and buses and access tourist facilities using a QR code on their smartphones.
    >
        </div>
     </div> 
 
 <div class=\"col\"><br><center>
 
  <div class=\"card\">
        <div class='text text-start'><p><left><b>  <a href='https://www.tokyometro.jp/en/ticket/1day/index.html' class='textblue'  title='Tokyo Day Pass'  >Tokyo Day  Pass</a></b>
        </div>
             <div class=' text-start text-small'>
     <a href='https://tokyocitypass.com/en/#' target='_blank'>  <img src='images/tokyo1.avif ' width=160px alt=\"tokyo1\">  </a>     <a href='https://tokyocitypass.com/en/#' target='_blank'> </a>     <a href='https://tokyocitypass.com/en/#' target='_blank'>  <img src='images/tokyo2.avif ' width=160px alt=\"tokyo2\">         <img src='images/tokyo3.avif ' width=160px  alt=\"tokyo3\"></a>   
      <p> 1, 2 or 3  day pass for  metro and private railways across Tokyo on the Tokyo Metro and Toei Subway lines. SImilar to the JR Pass that you must by a voucher prior to arrival and exchange before using.
        
        </div>
      </div> 
 
 <div class=\"col\"><br><center>
    
      <div class=\"card\">
        <div class='text text-start'><p><left><b>  <a href='https://www.discoverkyoto.com/visitors-guide/day-pass-ticket/' class='textblue'  title='Kyoto Day Pass' >Kyoto Day Pass</a></b>
        </div>
             <div class=' text-start text-small'>
      <a href='https://www.discoverkyoto.com/visitors-guide/day-pass-ticket/' target='_blank'><img src='images/kyoto.avif' width=160px alt=\"kyoto\">  </a>  
      <p> 1 day pass for Kyoto Subway lines and City Bus lines.<br>For use on Karasuma Line,Tōzai Line,Keifuku Line,Keihan Line,Kintetsu Line,Sagano Scenic Line,Hankyū Line,Eizan Line and Kyoto City Bus
     
        </div>
    </div>
 </div> 
</div>
";

echo "<p id=\"locationmap\" style='margin-top: 0;'></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";



include BASEPATH ."/docs/footer.php";
