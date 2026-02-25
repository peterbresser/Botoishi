<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

echo"<body >
";
include BASEPATH ."/docs/menu.php";

echo"
<div class=\"container-fluid text-center\">
 <div class=\"col\"><br><center>
 	<div class=\"card border-0\"   ><center>
 	   <span class=text><h1> Shinkansen </h1></span>
<div class='text text-start  '><p>These are the many Shinkansen , with different train names for the same route with different stops .Below are the Shinkansen name , with the route name (click on Route to display) , the train type and station stops.  
If you are using a JR pass (1st Class [Green] or standard) it is recommended that on the busier lines that you make a reservation, there are reserved and unreseved seats<br> 
Due to the frequency of the trains you can go to the station and make the reservation for the next train leaving<br>
Below are maps of each of the islands and the route associated and the shinkansen and train names</div>
<div class='text text-start '><p><b> Note:</b> Make sure to check the station names , for example Shinkansen departing out of Osaka leave from Shin-Osaka(see the map) , this in not Osaka or Namba station</div> 
</p></div><div></div>";

echo"

    
         <center>Clicking on the Shinkansen lines will take you to the line map and Show Hotels will display Hotels along the route .

<div class=\"container-fluid text-center\">
  <div class=\"row\">
  <div class=\"col\"><br><center>
 	<div class=\"card\" style=\"width: 18rem;\"><br><center><br><center>
            <a href='shinkansenmap.php?island=all'  class=\"text\" ><img  src=\"images/japan-map-png.png\" style='height:250px;width:250px; '  alt=\"japan shinkansen\"></a>
            
            <div class=\"card-body\">
                <table border='0'> 
      <tr>
     
      <td><form method =POST action='shinkansenmap.php'> 
      <input type=hidden name=island value='all'>
      
       <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:none;border:0;\"> 
       <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Full Map</span></button>
       </form>   </td>
    </tr>
 </table>
              
             
            </div>            
         </div>
	</div>
	</div>

     

   ";



echo "<div class=\"col\"><br><center>
 	<div class=\"card\">
<div class='text text-start'><p><left><b>Hokkaido Shinkansenn </b>  <span class='text-start text-small'> [Aomori to Hakodate]</span></left></div>
    <div class='text-danger text-start '> 
    <table border='0'> 
      <tr>
      <td> Hayabusa </td>
      <td><form method =POST action='shinkansenmap.php'> 
      <input type=hidden name=route value='hokkaido'>
       <input type=hidden name=traintype value='hayabusa'>
       <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:none;border:0;\"> 
       <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Route</span></button>
       </form>   </td>
    </tr>
 </table>
   
 
         <span class='text-start text-small'>  <left>Shin-Aomori - Oku Tsugaru Imabetsu - Kikonai - Shin Hakodate Hokuto</span>
        </div><div></div> </div> 
";


echo "    
 	<div class=\"card\"><center>
<div class='text text-start'><p><left><b>Kyushu Shinknasen  </b>  <span class='text-start text-small'> [Fukuoka  to  Kagoshima]</span></div>
       <div class='text-danger text-start'>       
 <table border='0'> 
      <tr>
      <td> Mizuho </td>
      <td><form method =POST action='shinkansenmap.php'> 
      <input type=hidden name=route value='kyushu'>
       <input type=hidden name=traintype value='mizuho'>
       <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:none;border:0;\"> 
       <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Route</span></button>
       </form>   </td>
    </tr>
 </table>
         
      
 
        <span class='text-start text-small'>  <left>Fukuoka - Kumamoto - Kagoshima-Chuo</span>
        <div></div> </div>  </div>  
";


echo "
 	<div class=\"card\"><center>
<div class='text text-start'><p><left><b>Joetsu Shinkansen  </b>  <span class='text-start text-small'>[Tokyo  to Niigata]</span></div>
      <div class='text-danger text-start text-small'> 
       <table border='0'> 
      <tr>
      <td> Toki </td>
      <td><form method =POST action='shinkansenmap.php'> 
      <input type=hidden name=route value='joetsu'>
       <input type=hidden name=traintype value='toki'>
       <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:none;border:0;\"> 
       <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Route</span></button>
       </form>   </td>
    </tr>
 </table>
     
       <span class='text-start text-small'>  <left>Tokyo - Ueno - Omiya - Kumagaya - Honjo-Waseda - Takasaki - Jomo-Kogen - Echigo-Yuzawa - Urasa - Nagaoka - Tsubame-Sanjo - Niigata</span>
  </div><div></div> </div>

 	<div class=\"card\">
<div class='text text-start'><p><left><b>Yamagata Shinkansen </b>  <span class='text-start text-small'> [Tokyo to  Shinjo ]</span></b></div>
     <div class='text-danger text-start text-small'> 
      <table border='0'> 
      <tr>
      <td> Tsubasa </td>
      <td><form method =POST action='shinkansenmap.php'> 
      <input type=hidden name=route value='yamagata'>
       <input type=hidden name=traintype value='tsubasa'>
       <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:none;border:0;\"> 
       <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Route</span></button>
       </form>   </td>
    </tr>
 </table>
          <span class='text-start text-small'> <left>Tokyo - Ueno - Omiya - Utsunomiya - Koriyama - Fukushima - Yonezawa - Takahata - Akayu - Kaminoyama-Onsen - Yamagata - Tendo - Sakurambo-Higashine - Murayama - Oishida - Shinjo</b></span>
 </div><div></div> </div> 
 
 	<div class=\"card\">
<div class='text text-start'><p><left><b>Akita Shinkansen </b>  <span class='text-start text-small'> [Tokyo  to Akita]</span></b></div>
     <div class='text-danger text-start text-small'> 
           <table border='0'> 
      <tr>
      <td> Komachi </td>
      <td><form method =POST action='shinkansenmap.php'> 
      <input type=hidden name=route value='akita'>
       <input type=hidden name=traintype value='komachi'>
       <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:none;border:0;\"> 
       <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Route</span></button>
       </form>   </td>
    </tr>
 </table>
         <span class=' text-start text-small'> <left>Tokyo - Ueno - Omiya - Sendai - Morioka - Shizokuishi - Tazawako - Kakunodate - Omagari - Akita</span>
 </div></div><div></div> 
  
 	<div class=\"card\">
    <div class='text text-start'><p><left><b>Tohoku Shinkansen </b>  <span class='text-start text-small'> [Tokyo to Aomori]</span></div>
  <div class='text-danger text-start text-small'> 
         <table border='0'> 
      <tr>
      <td> Hayabusa </td>
      <td><form method =POST action='shinkansenmap.php'> 
      <input type=hidden name=route value='tohoku'>
       <input type=hidden name=traintype value='hayabusa'>
       <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:none;border:0;\"> 
       <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Route</span></button>
       </form>   </td>
    </tr>
 </table>
   
  <span class=' text-start text-small'> <left>Tokyo - Omiya - Sendai - Morioka - Shin-Aomori</span>
  
   <span class='text-danger text-start text text-small'> 
   
    <table border='0'> 
      <tr>
      <td> Yamabiko </td>
      <td><form method =POST action='shinkansenmap.php'> 
      <input type=hidden name=route value='tohoku'>
       <input type=hidden name=traintype value='yamabiko'>
       <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:none;border:0;\"> 
       <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Route</span></button>
       </form>   </td>
    </tr>
 </table>
   
      <span class=' text-start text-small'><left></b>Tokyo - Ueno - Omiya - Oyama - Utsunomiya - Nasu-Shiobara - Shin-Shirakawa - Koriyama - Fukushima - Shiroishi-Zao - Sendai - Furukawa - Kurikoma-Kogen - Ichinoseki - Mizusawa-Esashi - Kitakami - Shin-Hanamaki - Morioka</b></span>
 
      <span class='text-danger text-start text text-small'> 
      
         <table border='0'> 
      <tr>
      <td> Nasuno </td>
      <td><form method =POST action='shinkansenmap.php'> 
      <input type=hidden name=route value='tohoku'>
       <input type=hidden name=traintype value='nasuno'>
       <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:none;border:0;\"> 
       <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Route</span></button>
       </form>   </td>
    </tr>
 </table>
      
        <span class=' text-start text-small'>  <left></b>Tokyo - Ueno - Omiya - Oyama - Utsunomiya - Nasu-Shiobara - Shin-Shirakawa - Koriyama</b></span>
 </p></div><div></div></div>  
 
<div class=\"card\">
 <div class='text text-start'><left><b>Sanyo Shinkansen </b>  <span class='text-start text-small'> [Osaka to Fukuoka]</span></div><br>

      <div class='text-danger text-start text-small'> 
      
          <table border='0'> 
      <tr>
      <td>  Mizuho </td>
      <td><form method =POST action='shinkansenmap.php'> 
      <input type=hidden name=route value='sanyo'>
       <input type=hidden name=traintype value='mizuho'>
       <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:none;border:0;\"> 
       <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Route</span></button>
       </form>   </td>
    </tr>
 </table>
      
        <span class='text-start text-small'>  <left>Shin-Osaka - Shin-Kobe - Himeji - Okayama - Hiroshima - Kokura - Fukuoka</span>
   
 
          
     <span class='text-danger text-start text text-small'> 
     
              <table border='0'> 
      <tr>
      <td> Nozomi </td>
      <td><form method =POST action='shinkansenmap.php'> 
      <input type=hidden name=route value='sanyo'>
       <input type=hidden name=traintype value='nozomi'>
       <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:none;border:0;\"> 
       <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Route</span></button>
       </form>   </td>
    </tr>
 </table>
      
        <span class=' text-start text-small'>
          <left></b>Shin Osaka - Shin-Kobe - Himeji - Okayama - Fukuyama - Hiroshima - Tokuyama - Shin-Yamaguchi - Kokura - Fukuoka</b></span>
          
     <span class='text-danger text-start text text-small'> 
                   <table border='0'> 
      <tr>
      <td> Kodama </td>
      <td><form method =POST action='shinkansenmap.php'> 
      <input type=hidden name=route value='sanyo'>
       <input type=hidden name=traintype value='kodama'>
       <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:none;border:0;\"> 
       <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Route</span></button>
       </form>   </td>
    </tr>
 </table>
     
         <span class=' text-start text-small'> <left></b>Shin-Osaka - Shin-Kobe - Nishi-Akashi - Himeji - Aioi - Okayama - Shin-Kurashiki - Fukuyama - Shin-Onomichi - Mihara - Higashi-Hiroshima - Hiroshima -  Tokuyama - Shin-Yamaguchi - Asa - Shin-Shimonoseki - Kokura - Fukuoka </b></span>
      <span class='text-danger text-start text text-small'> 
      
                         <table border='0'> 
      <tr>
      <td> Hikari </td>
      <td><form method =POST action='shinkansenmap.php'> 
      <input type=hidden name=route value='sanyo'>
       <input type=hidden name=traintype value='hikari'>
       <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:none;border:0;\"> 
       <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Route</span></button>
       </form>   </td>
    </tr>
 </table>
     
   
          <span class=' text-start text-small'> <left></b>Shin-Osaka - Shin-Kobe - Nishi-Akashi - Himeji - Aioi - Okayama</b></span>
</div><div></div></div>
  
<div class=\"card\">
 <div class='text text-start'><p><left><b> Tokaido Shinkansen  </b>  <span class='text-start text-small'>[Tokyo to  Osaka]</span></div>
         <span class='text-danger text-start text-small'> 
                                  <table border='0'> 
      <tr>
      <td> Nozomi </td>
      <td><form method =POST action='shinkansenmap.php'> 
      <input type=hidden name=route value='nozomi'>
       <input type=hidden name=traintype value='hikari'>
       <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:none;border:0;\"> 
       <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Route</span></button>
       </form>   </td>
    </tr>
 </table>
          
            <span class=' text-start text-small'>  <left></b>Tokyo - Shinagawa - Shin-Yokohama - Nagoya - Kyoto - Shin Osaka</b></span>
        <span class='text-danger text-start text text-small'> 
         <table border='0'> 
      <tr>
      <td> Hikari </td>
      <td><form method =POST action='shinkansenmap.php'> 
      <input type=hidden name=route value='tokaido'>
       <input type=hidden name=traintype value='hikari'>
       <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:none;border:0;\"> 
       <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Route</span></button>
       </form>   </td>
    </tr>
 </table>
        
         <span class=' text-start text-small'> <left></b>Tokyo - Shinagawa - Shin-Yokohama - Odawara - Atami - Mishima - Shizuoka - Hamamatsu - Toyohashi - Nagoya - Gifu-Hashima - Maibara - Kyoto - Shin-Osaka</b></span>
        <span class='text-danger text-start text text-small'> 
                 <table border='0'> 
      <tr>
      <td> Kodama </td>
      <td><form method =POST action='shinkansenmap.php'> 
      <input type=hidden name=route value='tokaido'>
       <input type=hidden name=traintype value='kodama'>
       <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:none;border:0;\"> 
       <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Route</span></button>
       </form>   </td>
    </tr>
 </table>
        
        <span class=' text-start text-small'> <left></b> Tokyo - Shinagawa - Shin-Yokohama - Odawara - Atami - Mishima - Shin-Fuji - Shizuoka - Kakegawa - Hamamatsu - Toyohashi - Mikawa-Anjo - Nagoya - Gifu-Hashima - Maibara - Kyoto - Shin-Osaka</b></span>
 </p></div><div></div>
  <div class=\"col\"><br><center>
 <div class=\"card\">
<div class='text text-start'><p><left><b> Hokuriku Shinkansen </b>  <span class='text-start text-small'> [Tokyo to Tsuruga]</span></div>

    <span class='text-danger text-start text-small'> 
          <table border='0'> 
      <tr>
      <td> Kagayaki </td>
      <td><form method =POST action='shinkansenmap.php'> 
      <input type=hidden name=route value='horruriku'>
       <input type=hidden name=traintype value='kagayaki'>
       <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:none;border:0;\"> 
       <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Route</span></button>
       </form>   </td>
    </tr>
 </table>
     
        <span class=' text-start text-small'> <left></b>Tokyo - Ueno - Omiya - Nagano - Iiyama -Itoigawa - Toyama - Kanazawa - Komatsu - Kaga Onsen - Awara Onsen - Fukui - Echizen-Takefu - Tsuruga</b></span>
</div></div><div></div>
 
";

echo "<p id=\"locationmap\" style='margin-top: 0;'></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";



include BASEPATH ."/docs/footer.php";
