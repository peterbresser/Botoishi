<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";

echo"<body >
 
	 <div class=\"container  container-md  \">


    <div class='text text-center'> <span class=text><h1> JR Pass </h1></span></div>


 
 <div class=\"col\"> 
 	<div class=\"card\">
       <div class=\"card-body lh-base text-start text-wrap text text-start  \">  
            <p>A Japan Rail Pass provides unlimited travel on the JR Neworks. <br>
        There are some restictions on the Shinkansen , see below.<br>
        You can make a seat reservation using you JR Pass  , it is better to make a reservation on a Shinkansen than chance not finding a seat .<BR> 
        There are both  Resevered snd Non-Reserverd Cars
                
        <br><br>  You can specify the dates you want the pass to be active 
         Depending on where you want to travel and how long you want to stay in an area , check that the pass you buy covers that area.
            <br> 
            	  </div>
	</div>

    </div> 
  
             <div class=\"col\"><br><center>
     <div class=\"card\"><br><center> 
        <div class='text text-start'>
       
       <b>Tip</b><br>If you are only traveling between say  Tokyo ,Osaka, Kyoto and Hiroshima  consider a short duration  National pass for the start and end of your trip to cover the long distances  , then us local trains and purchase tickets (IC Cards) for the area you are staying in.
        I found a good was to use a National Pass for a week to travel to the area I wanted to see   , 
        we stayed moved around that area for a couple of weeks and use the pass and pay for local trains. , the activate my next pass to the next fartherest point.<br>Or even consider taking a local flight or hiring a car  to  next destination
       .
   </div>
   
   
    </div> 
 </div> 
 
  <div class=\"col\"><br><center>

     <div class=\"card\"><center></b>
        <span class =\"text-danger  medium \">
     Below are the available JR Passes for various locations,  click on the name to see the map areas and selected stations in the area and Details to get further specifics to the pass</span>
     <br>   <br> <div class='text text-start'>
        
          <ul  class= medium >
         <li><a href='https://japanrailpass.net/en/' class='text-blue'  style=\"font: 18px Arial, Helvetica, sans-serif;text-decoration: none;\">JR National   </a></li>
    
        <li><span class=\"text-balck  medium\">JR Hokkaido</span></li>
        
        
        <table><tr>
                <td>
                   <a href='https://www.jrhokkaido.co.jp/global/english/ticket/railpass/index.html'  target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='JR Hokkaido Pass'  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='JR Hokkaido Map' >  
                    <input type=hidden name=island= value =\"hokkaido\" >
                     <input type=hidden name=pass value =\"5\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >JR Hokkaido</span></button>
                     </form >   
                </td>
            </tr></table>
            
          <ul  class= medium >
         <li>
         
            
           <div id=\"div11\" onclick=\"showAppointment('div21')\"  class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"div21\" style=\"display:none;\" class=\"appointment_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"showAppointment('div11')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td  class=\"text-black medium menu_links \">
<ul class= medium >
<li>Reserved and non-reserved seats in ordinary car of limited express trains on JR Hokkaido Line</li>
<li>All seats on the Ltd. Exp. Hokuto, Ltd. Exp. Suzuran, Ltd. Exp. Ozora, and Ltd. Exp. Tokachi are reserved. There are no non-reserved seats on the trains above. Please make sure to receive a reserved seat ticket before boarding. (You cannot assign seats on the train.)</li>
<li>Reserved and non-reserved seats of special rapid and rapid trains on JR Hokkaido Line</li>
<li>Local trains on JR Hokkaido Line</li>
<li>Reserved and non-reserved seats of temporary trains (limited express/rapid/local) on JR Hokkaido Line (*If you wish to take the SL Fuyu-no-Shitsugen Train, please purchase a reserved seat ticket.)</li>
<li>*The rail pass can be used for some JR Hokkaido buses. Please see here for details.</li>
<li><span class =\"text-danger  medium \">The rail pass cannot be used for the Hokkaido Shinkansen, the South Hokkaido Railway, the streetcar and the subway.</span></li>
 </ul>



 <td></tr>
</table></div>
                                                                <script language=\"JavaScript\">
                                                            var currentDivAppt = document.getElementById(\"div11\");
                                                            function showAppointment(divIDAppt) {
                                                                var appt_div = document.getElementById(divIDAppt);
                                                                currentDivAppt.style.display = \"none\";
                                                                appt_div.style.display = \"block\";
                                                                currentDivAppt = appt_div; 
                                                            }
                                                        </script>
           
</ul> 
         </li>
              
        <table><tr>
                <td>
                   <a href='https://www.jrhokkaido.co.jp/global/english/ticket/railpass/index.html'  target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='Sapporo-noboribetsu Area Pass'  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='Sapporo-noboribetsu Map' >  
                    <input type=hidden name=island= value =\"hokkaido\" >
                     <input type=hidden name=pass value =\"2\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Sapporo-noboribetsu Area</span></button>
                     </form >   
                </td>
            </tr></table>
            
            
           
            <ul  class= medium ><li>
             <div id=\"divpart6\"  onclick=\"showNori('divpart62')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"divpart62\" style=\"display:none;\" class=\"eastsouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"showNori('divpart6')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td  class=\"text-black medium menu_links \">   <ul class= medium >
<li>Toya is not included.</li>
<li>You can take an ordinary car reserved seat and a non-reserved seat on the limited express, rapid and local trains in the valid area.</li>
<li>All seats on the Ltd. Exp. Hokuto and Ltd. Exp. Suzuran are reserved. There are no non-reserved seats on the trains above. Please make sure to receive a reserved seat ticket before boarding. (You cannot assign seats on the train.)</li>
<li>If you get off outside of the valid area, you must pay the normal basic fare and charge for the additional section.</li>
<li>The rail pass cannot be used for JR Hokkaido Bus, the streetcar and the subway in Sapporo.</li>
 </ul>
  </div>  
             <td></tr>
</table></div>
               <script language=\"JavaScript\">
                                                            var nobori = document.getElementById(\"divpart6\");
                                                            function showNori(divnobori) {
                                                                var nobori_div = document.getElementById(divnobori);
                                                                nobori.style.display = \"none\";
                                                                nobori_div.style.display = \"block\";
                                                                nobori = nobori_div; 
                                                            }
                                                        </script>        
           
            </ul>
            </li> 
            <table><tr>
                <td>
                   <a href='https://www.jrhokkaido.co.jp/global/english/ticket/railpass/index.html#furano'  target =_blank ><img src=images/jrrail4.webp width =24px  
                     title='Sapporo-furano Area Pass'  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='Sapporo-Furano Area Map' >  
                    <input type=hidden name=island= value =\"hokkaido\" >
                     <input type=hidden name=pass value =\"3\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\"><span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Sapporo-Furano Area</span></button>
                     </form >   
                </td>
            </tr></table>
       <ul  class= medium ><li>
           <div id=\"divpart7\"  onclick=\"showfurano('divpart72')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"divpart72\" style=\"display:none;\" class=\"furano_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"showfurano('divpart7')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td  class=\"text-black medium menu_links \">   <ul  class= medium >
<li>Tomamu is not included.</li>
<li>You can take an ordinary car reserved seat and a non-reserved seat on the limited express, rapid and local trains in the valid area.</li>
<li>If you get off outside of the valid area, you must pay the normal basic fare and charge for the additional section.</li>
<li>The rail pass cannot be used for JR Hokkaido Bus, the streetcar and the subway in Sapporo.</li>
 </ul>
             <td></tr>
</table></div>
               <script language=\"JavaScript\">
                                                            var furanoDiv = document.getElementById(\"divpart7\");
                                                            function showfurano(divfurano) {
                                                                var furano_div = document.getElementById(divfurano);
                                                                furanoDiv.style.display = \"none\";
                                                                furano_div.style.display = \"block\";
                                                                furanoDiv = furano_div; 
                                                            }
                                                        </script>        
           </ul>
            </li>
          </ul>
     <li><span class=\"text-balck  medium\">JR Central</span></li>
                <ul>
                
                 <table><tr>
                <td>
                   <a a href='https://touristpass.jp/en/ise_kumano/'   target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='Ise - Kumano - Wakayama Area Tourist  Pass'  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='Ise - Kumano - Wakayama Area Tourist  Map' >  
                    <input type=hidden name=island= value =\"honshu\" >
                     <input type=hidden name=pass value =\"8\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Ise - Kumano - Wakayama Area Tourist </span></button>
                     </form >   
                </td>
            </tr></table>
            
            
         
           <ul  class= medium ><li>
          
             <div id=\"divpart9\"  onclick=\"ShoaPrtNine('divpart92')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"divpart92\" style=\"display:none;\" class=\"easts_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"ShoaPrtNine('divpart9')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td  class=\"text-black medium menu_links \"> <ul>
<li>JR Line, Ise Railway: <br>
Non-reserved seating on JR, Ise Tetsudo limited express, express, rapid, and local trains between Nagoya station – within Osaka City (Kansai line: Kisei line: Hanwa line), Hineno station – Kansai-airport station (Kansai Airport line), Taki station - Toba station (Sangu line), Kameyama station - within Osaka City (Kansai line), Kizu station - within Osaka City (Katamachi line), Kyuhoji station - within Osaka City (Osaka Higashi line), Otori station - Higashi-Hagoromo station (Hanwa line), Wakayama station - Wakayamashi station (Kisei line), Kawarada station - Tsu station (Ise Railway)</li>

<li>Wakayama Electric Railway:Wakayama Electric Railway <a href =\"https://wakayama-dentetsu.co.jp/en//\"  target=_blanlk class='text-blue  medium'  style='text-decoration: none;' > WebSite </a>    : Wakayama station - Kishi station </li>

<li>Mie Kotsu Buses <a href =\"https://www.sanco.co.jp/\"  target=_blanlk class='text-blue  medium'  style='text-decoration: none;' > WebSite </a> and Kumano Gobo Nankai Bus <a href =\"https://kumanogobobus.nankai-nanki.jp/english/\"  target=_blanlk class='text-blue  medium'  style='text-decoration: none;' > WebSite </a> :<br>
Mie Kotsu Buses: Geku-Naiku line, Ise/Futami/Toba Excursion Bus CAN Bus, Owase station – Washige, Owase station – Segiyama – Kumano Kodo Center, Kumanoshi station – Senmaida and Tori-toge pass entrance
<br>
Kumano Gobo Nankai Bus: Kii Katsuura – Nachisan, Shingu station – Kii Katsuura, Shingu station – Hongu Taisha front, Shiko/Kanmaru – Koguchi, Aisuji Line, Hirotsuno Jyutaku Line, Matsuyama Takata Line

 </ul>
  </div>  
<td></tr>
</table></div>    
                                                                <script language=\"JavaScript\">
                                                            var currentKumano = document.getElementById(\"divpart9\");
                                                            function ShoaPrtNine(divKumano) {
                                                             var Kumano_div = document.getElementById(divKumano);
                                                                currentKumano.style.display = \"none\";
                                                                Kumano_div.style.display = \"block\";
                                                                currentKumano = Kumano_div; 
                                                            }
                                                        </script>
        </ul>
        </li>
        
                
                 <table><tr>
                <td>
                    <a href='https://touristpass.jp/en/fuji_shizuoka/'   target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='Mt Fuji - Shizuoka Area Tourist Map'  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='Mt Fuji - Shizuoka Area Tourist Map' >  
                    <input type=hidden name=island= value =\"honshu\" >
                     <input type=hidden name=pass value =\"9\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Mt Fuji - Shizuoka Area Tourist</span></button>
                     </form >   
                </td>
            </tr></table>
            
            
           
           <ul  class= medium ><li>
           <div id=\"divpart10\"  onclick=\"ShoaPrtTen('divpart102')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"divpart102\" style=\"display:none;\" class=\"eastsouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"ShoaPrtTen('divpart10')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td  class=\"text-black medium menu_links \">  
<ul>
<li>JR Lines
<br>Non-reserved seats of ordinary cars of JR limited express, express, rapid, and ordinary trains:
<br>Tokaido Main Line: Atami station - Toyohashi station
<br>Gotemba Line: Numazu station - Matsuda station
<br>Minobu Line: Fuji station - Shimobe-onsen station</li>

<li>Izuhakone Railway 
<br>
Izuhakone Railway: Mishima station - Shuzenji station  <a href=\"https://www.izuhakone.co.jp/sunzudaiyu/index.html\" style='text-decoration: none;' class=\"text-danger\" >Website </a></li>

<li>Buses<br>
Fujikyuko Bus: Gotemba station - Gotemba Premium Outlets, Gotemba station - Kawaguchiko station, Gotemba station - GrinPa,Shin-Fuji station - Mt. Fuji station, Shin-Fuji station - South Exit of Fuji station  <a href=\"https://www.fujikyubus.co.jp/regular/\" class=\"text-danger\" style='text-decoration: none;' target=_blank >Website </a>
<br>
Tokai Bus: Mishima station - Yamanaka Castle ruins, Numazu Station - Numazu Minato Shinsenkan, Shuzenji station - Shuzenji Onsen, Shuzenji station - Toi Port  <a href=\"https://www-tokaibus-jp.translate.goog/?_x_tr_sl=auto&_x_tr_tl=en&_x_tr_hl=ja\"style='text-decoration: none;'  class=\"text-danger\" target=_blank>Website </a>
<br>
Izuhakone Bus: Numazu station - Numazu Port, Izunagaoka station - IZU-MITO Sea Paradise  <a href=\"https://www.izuhakone.co.jp/bus/index.html\" class=\"text-danger\" style='text-decoration: none;' target=_blank target=_blank>Website </a>
<br>
Shizutetsu Bus: Shimizu Ekimae - Miho Marine Science Museum of TOKAI University  <a href=\"https://www.justline.co.jp/en/\" class=\"text-danger\" target=_blank>Website </a>
<br>
Entetsu Bus: Hamamatsu station - Nakatajima Shako, Hamamatsu station - Kanzanji Onsen (Hamanako Garden Park)  <a href=\"https://bus.entetsu.co.jp/\" class=\"text-danger\" style='text-decoration: none;' target=_blank>Website </a>
</li><li>
Ferries
Mt.Fuji Shimizu Port Cruise: Hinode - Hinode（ Getting on and off the ship at Miho is not permissible.） <a href=\"https://www.shimizu-cruise.co.jp/en//\" class=\"text-danger\" style='text-decoration: none;' target=_blank >Website </a>
<br> 
Suruga Bay Ferry: Shimizu Port - Toi Port <a href=\"https://www.223-ferry.or.jp/?language=en#googtrans(en)//\" style='text-decoration: none;' class=\"text-danger\" target=_blank >Website </a>

<br></span><span   class='text-primary medium'  style='text-decoration: none;'>Note: Always visit the reception counter before boarding the ferry. (Regarding the ferry, aside from suspensions due to severe weather conditions, operations will be suspended once a year for docking and inspection. Please confirm the ferry schedule on the website, etc. in advance.）</span>
</li>
<li>
<span class=text-danger> This pass does not allow you to ride inTokaido Shinkansen [Tokyo to Osaka]  and Sleeper Trains. Please be aware that to ride in them, you will need to pay the required additional fares or fees separately.</span> 
</li>
<ul>
            <td></tr></table>     
             </div><script language=\"JavaScript\">
             var currentShizuoka = document.getElementById(\"divpart10\");
            function ShoaPrtTen(divShizuoka) { var Shizuoka_div = document.getElementById(divShizuoka); currentShizuoka.style.display = \"none\";Shizuoka_div.style.display = \"block\";currentShizuoka = Shizuoka_div;} 
             </script>
             </li>                                           
             </ul>
       
      </li>
         </ul>
      
       <li><span class=\"text-balck  medium\">JR East</span></li>
         <ul  class= medium >
            <table><tr>
                <td>
                   <a href='https://www.jreast.co.jp/multi/en/pass/eastpass_n.html'  target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='Nagano-Niigata Pass'  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='Nagano-Niigata Map' >  
                    <input type=hidden name=island= value =\"honshu\" >
                     <input type=hidden name=pass value =\"10\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Nagano-Niigata</span></button>
                     </form >   
                </td>
            </tr></table>
              <ul  class= medium ><li>
           <div id=\"divpart11\"  onclick=\"ShoaNiigata('divpart112')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"divpart112\" style=\"display:none;\" class=\"eastsouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"ShoaNiigata('divpart11')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td  class=\"text-black medium menu_links \">    <ul  class= medium >
<li>JR EAST Lines</li>
<li>Tokyo Monorail</li>
<li>Izu Kyuko Line</li>
<li>Hokuetsu Express</li>
<li>Echigo TOKImeki Railway (between Naoetsu and Arai)</li>
<li>Reserved seats in ordinary cars of the following express trains with through operations between JR EAST and Tobu Railway lines: Nikko, Kinugawa, and SPACIA Kinugawa trains.</li>
<li>You can also use regular trains (including rapid trains) from Shimo-imaichi to Tobu-nikko and Kinugawa-onsen on the Tobu Railway line.</li>
<li>Between Kurihashi and Shimo-imaichi, you can only use limited express trains that run through to Tobu Railway. *</li>
<li>JR buses in the area (exc. highway and some regular bus routes)See bus map hereOpens in a new window</li>
<li>The only express trains that can be used with JR EAST PASS (Nagano, Niigata area) are those that run from JR lines to TOBU RAILWAY.</li>
<li>* Limited express trains that depart from or terminate at TOBU RAILWAY stations cannot be used. (If you are using a limited express train at Tochigi Station, Shimo-imaichi Station, Shin-kanuma Station, Tōbu-nikkō Station, Tobu World Square Station, or Kinugawa-onsen Station, either the starting station or the ending station must be a JR station.)</li>
<li>
<span class=text-danger> Please note<br>

You cannot use the JR EAST PASS (Nagano, Niigata area) to travel on the Tokaido Shinkansen. (This is because the Tokaido Shinkansen is run by another company)
<br>The areas between Minami-Otari and Itoigawa on the Oito Line and between Itoigawa and Joetsumyoko on the Hokuriku Shinkansen are not included in the pass area.
<br>If taking the Hokuriku Shinkansen from Itoigawa, you must purchase a separate basic fare ticket and Super (Limited) Express Train ticket for travel between Itoigawa and Joetsumyoko.
<br>Gala Yuzawa Station only operates during the winter and spring.​ ​
</li>

</ul>
            <td></tr></table>     
             </div><script language=\"JavaScript\">
             var currentNiigata = document.getElementById(\"divpart11\");
            function ShoaNiigata(divNiigata) { var Niigata_div = document.getElementById(divNiigata); currentNiigata.style.display = \"none\";Niigata_div.style.display = \"block\";currentNiigata = Niigata_div;} 
             </script>
             </li>                                           
             </ul>
  <table><tr>
                <td>
                   <a href='https://www.jreast.co.jp/en/multi/pass/easthokkaido.html' target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='Ise - Kumano - Wakayama Area Tourist  Pass'  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='JR East South Hokkaido  Map' >  
                    <input type=hidden name=island= value =\"honshu\" >
                     <input type=hidden name=pass value =\"11\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >JR East South Hokkaido </span></button>
                     </form >   
                </td>
            </tr></table>
            
                    
                  
                    
                  
          <ul  class= medium ><li>
          <div id=\"divparteast44\"  onclick=\"SHoEast('divparteast442')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"divparteast442\" style=\"display:none;\" class=\"eastsouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"SHoEast('divparteast44')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td  class=\"text-black medium menu_links \">
   <ul  class= medium >
<li>JR EAST (including BRT*)</li>
<li>JR Hokkaido Lines (Hakodate, Sapporo, Otaru area)</li>
<li>Aoimori Railway Line</li>
<li>Iwate Galaxy Railway (IGR) Line</li>
<li>Sendai Airport Transit Line</li>
<li>* BRT refers to a Bus Rapid Transit system.</li>
<li><span class=text-danger>You cannot use the South Hokkaido Railway Line.</span></li></ul>
</ul>
 <td></tr>
</table></div>    
    <script language=\"JavaScript\">
                                                            var easttohokus = document.getElementById(\"divparteast44\");
                                                            function SHoEast(diveasttohokus) {
                                                                var easttohokus_div = document.getElementById(diveasttohokus);
                                                                easttohokus.style.display = \"none\";
                                                                easttohokus_div.style.display = \"block\";
                                                                easttohokus = easttohokus_div; 
                                                            }
                                                    </script>
 </ul> </li>
          
            <table><tr>
                <td>
                   <a href='https://www.jreast.co.jp/en/multi/pass/eastpass_t.html'  target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='JR East Pass'  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='JR East South Hokkaido  Map' >  
                    <input type=hidden name=island= value =\"honshu\" >
                     <input type=hidden name=pass value =\"4\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >JR East Tohoku</span></button>
                     </form >   
                </td>
            </tr></table>
            
          
          
          
          
          
                  
  <ul  class= medium ><li>
  <div id=\"div12\"  onclick=\"showEastSouth('div22')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"div22\" style=\"display:none;\" class=\"eastsouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"showEastSouth('div12')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td  class=\"text-black medium menu_links \">
  
   <ul  class= medium >
<li>JR EAST (including BRT*)</li>
<li>JR Hokkaido Lines (Hakodate, Sapporo, Otaru area)</li>
<li>Izu Kyuko Line</li>
<li>Tokyo Monorail</li>
<li>Aoimori Railway Line</li>
<li>Iwate Galaxy Railway (IGR) Line</li>
<li>Sendai Airport Transit Line</li>
<li>Reserved seats in ordinary cars of the following express trains with through operations between JR EAST and Tobu Railway lines: Nikko, Kinugawa, and SPACIA Kinugawa trains.</li>
<li>You can also use regular trains (including rapid trains) from Shimo-imaichi to Tobu-nikko and Kinugawa-onsen on the Tobu Railway line.</li>
<li>Between Kurihashi and Shimo-imaichi, you can only use limited express trains that run through to Tobu Railway. **</li>
<li>*BRT refers to a Bus Rapid Transit system.</li>
<li>**The only express trains that can be used with JR East-South Hokkaido Rail Pass are those that run from JR lines to TOBU RAILWAY. Limited express trains that depart from or terminate at TOBU RAILWAY stations cannot be used. (If you are using a limited express train at Tochigi Station, Shimo-imaichi Station, Shin-kanuma Station, Tōbu-nikkō Station, Tobu World Square Station, or Kinugawa-onsen Station, either the starting station or the ending station must be a JR station.)
<li><span class=text-danger>You cannot use the JR East-South Hokkaido Rail Pass to travel on the Tokaido Shinkansen. (Because the Tokaido Shinkansen is operated by a different company)
Gala Yuzawa Station only operates during the winter and spring. 
You cannot use the South Hokkaido Railway Line.</span></li>
 </ul>
  </div> 
 <td></tr>
</table></div>                                                          
                                                                <script language=\"JavaScript\">
                                                           var jreastsouth = document.getElementById(\"div12\");
                                                            function showEastSouth(divEast) {
                                                                var eastsouth_div = document.getElementById(divEast);
                                                                jreastsouth.style.display = \"none\";
                                                                eastsouth_div.style.display = \"block\";
                                                                jreastsouth = eastsouth_div; 
                                                            }
                                                        </script>
 </ul>  
   </li>                                           
             </ul>
       
      </li>
         </ul>
         <ul>
       <li><span class=\"text-balck  medium\">JR West</span></li>
         <ul  class= medium >
         
                     <table><tr>
                <td>
                   <a href='https://www.westjr.co.jp/travel-information/en/tickets-passes/jrwest-rail-pass/all/' target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='JR West All Area'  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='JR East South Hokkaido  Map' >  
                    <input type=hidden name=island= value =\"honshu\" >
                     <input type=hidden name=pass value =\"4\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >JR West All Area</span></button>
                     </form >   
                </td>
            </tr></table>
            
               <ul  class= medium ><li>
             <div id=\"AllWest1\"  onclick=\"ShowAllWest('AllWest2')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"AllWest2\" style=\"display:none;\" class=\"eastseastouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"ShowAllWest('AllWest1')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td   class=\"text-black medium menu_links \">  <ul  class= medium >
<li>SANYO SHINKANSEN (Shin-Osaka⇔Hakata)</li> 
<li>The pass can be used for the Hello Kitty Shinkansen.</li>

<li>HOKURIKU SHINKANSEN (Tsuruga⇔Joetsu-Myoko)</li>  
<li>Reserved seats on Limited Express Trains HARUKA,THUNDERBIRD,KUROSHIO,KONOTORI,YAKUMO etc.</li>
<ul>
<li>For reserved seating, ensure you book your seats before boarding the train.</li>
 <li>Non-reserved seating is not available on trains with exclusively reserved seats.</li>
 </ul>
</li>
<li>Special Rapid Services, Rapid Services, and Local trains on JR-WEST Conventional lines</li>
<li>JR West Miyajima Ferry (Miyajimaguchi⇔Miyajima)</li>

 
<li>The pass is only valid on WEST JAPAN JR BUS route buses within the valid area. The pass cannot be used on expressway buses.</li>

<li>The IR Ishikawa Railway Line between Kanazawa and Tsubata. However, travel must be conducted on local or limited express trains and must encompass the full segment between these two stations. Travel is not covered if you disembark at any station on the IR Ishikawa Railway line, within or outside the segment (excluding Kanazawa or Tsubata).</li>

<li>The Ainokaze Toyama Railway Line between Toyama and Takaoka. However, travel must be conducted on local trains and must encompass the full segment between these two stations. Travel is not covered if you disembark at any station on the Ainokaze Toyama Railway line, within or outside the segment (excluding Toyama or Takaoka).</li>

<li>The Hapi-Line Fukui between Echizen-Hanandō and Fukui. However, travel must be conducted only on local trains and only between these two stations (Echizen-Hanandō or Fukui). Travel is not covered if you extend beyond these two stations on the Hapi-Line Fukui.</li>
<li>
<ul>
<li  class=text-danger >Trains below cannot be used!</li>
<li class=text-danger > Bullet Train \"TOKAIDO SHINKANSEN\" (Shin-Osaka⇔Tokyo)</li>
<li class=text-danger >Bullet Train \"KYUSHU SHINKANSEN\" (Hakata⇔Kagoshima-Chuo)</li>
 <li   class=text-danger >Separate charges apply when reserving and using the Special Rapid “A Seat” paid seating service.</li>
</ul>
</li>
</ul>
            <td></tr></table>     
             </div><script language=\"JavaScript\">
             var currentAllWest = document.getElementById(\"AllWest1\");
            function ShowAllWest(divAllWest) { var AllWest_div = document.getElementById(divAllWest); currentAllWest.style.display = \"none\";
AllWest_div.style.display = \"block\";currentAllWest = AllWest_div;} 
             </script>
             </ul> </li>      
                                <table><tr>
                <td>
                   <a href='https://www.jreast.co.jp/multi/en/pass/hokurikuarch.html' target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='JR West All Area'  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='Tokyo-Osaka Hokuriku Arch Map' >  
                    <input type=hidden name=island= value =\"honshu\" >
                     <input type=hidden name=pass value =\"4\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Tokyo-Osaka Hokuriku Arch</span></button>
                     </form >   
                </td>
            </tr></table>
                     <ul  class= medium ><li>
             <div id=\"OsakaHori1\"  onclick=\"ShowOsakaHori('OsakaHori2')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"OsakaHori2\" style=\"display:none;\" class=\"eastseastouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"ShowOsakaHori('OsakaHori1')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td   class=\"text-black medium menu_links \">  <ul  class= medium >
 
 
<li>JR EAST Lines</li>

<li>JR West Line</li>

<li>Tokyo Monorail</li>
<li>Noto Railway (between Nanao and Wakuraonsen stations)</li>
<li>IR Ishikawa Railway </li>
<ul>
<li class=text-danger> IR Ishikawa Railway is only available when passing through the section between Kanazawa Station and Tsubata Station (you can also use limited express trains)​​</li>
</ul>

<li>Ainokaze Toyama Railway </li>
<ul>
<li class=text-danger> Ainokaze Toyama Railway is only available when passing through the section between Takaoka Station and Toyama Station (a liner fee is required if you wish to use the Ainokaze Liner rapid train)​​</li>
</ul>
<li>HAPI-LINE FUKUI (between Fukui and Echizen-Hanando) </li>
<ul>
<li class=text-danger>HAPI-LINE FUKUI can only be used when passing through between Fukui and Echizen-Hanando.</li>
</ul>

            <td></tr></table>     
             </div><script language=\"JavaScript\">
             var currentOsakaHori = document.getElementById(\"OsakaHori1\");
            function ShowOsakaHori(divOsakaHori) { var OsakaHori_div = document.getElementById(divOsakaHori); currentOsakaHori.style.display = \"none\";
OsakaHori_div.style.display = \"block\";currentOsakaHori = OsakaHori_div;} 
             </script>
             </ul> </li>    
               </li>
                <table><tr>
                <td>
                   <a href='https://www.westjr.co.jp/travel-information/en/tickets-passes/jrwest-rail-pass/hokuriku/' target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='Hokuriku Area  Area'  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='JTokyo-Osaka Hokuriku Arch Map' >  
                    <input type=hidden name=island= value =\"honshu\" >
                     <input type=hidden name=pass value =\"12\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Hokuriku Area </span></button>
                     </form >   
                </td>
            </tr></table>
             <ul  class= medium ><li>
             <div id=\"Hokuriku1\"  onclick=\"ShowHokuriku('Hokuriku2')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"Hokuriku2\" style=\"display:none;\" class=\"eastseastouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"ShowHokuriku('Hokuriku1')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td   class=\"text-black medium menu_links \">  <ul  class= medium >
 
<li>Non-reserved seats on Bullet Train \"HOKURIKU SHINKANSEN\" <b>(Tsuruga   ⇔  Kurobe-Unazukionsen)</b></li>
<li>Rapid Services, and Local trains on JR-WEST Conventional lines</li>
<ul>
<li class=text-danger> Non-reserved seating is not available on trains with exclusively reserved seats.</li>
</ul>

<li>
The pass is only valid on WEST JAPAN JR BUS route buses within the valid area. The pass cannot be used on expressway buses.

The IR Ishikawa Railway Line between Kanazawa and Tsubata. However, travel must be conducted on local or limited express trains and must encompass the full segment between these two stations. Travel is not covered if you disembark at any station on the IR Ishikawa Railway line, within or outside the segment (excluding Kanazawa or Tsubata).

The Ainokaze Toyama Railway Line between Toyama and Takaoka. However, travel must be conducted on local trains and must encompass the full segment between these two stations. Travel is not covered if you disembark at any station on the Ainokaze Toyama Railway line, within or outside the segment (excluding Toyama or Takaoka).

The Hapi-Line Fukui between Echizen-Hanandō and Fukui. However, travel must be conducted only on local trains and only between these two stations (Echizen-Hanandō or Fukui). Travel is not covered if you extend beyond these two stations on the Hapi-Line Fukui.
</li>

<li class=text-danger>Cannot be used  on   \"HOKURIKU SHINKANSEN\" <b>(Kurobe-Unazukionsen  ⇔  Tokyo)</b></li>
</ul>

            <td></tr></table>     
             </div><script language=\"JavaScript\">
             var currentHokuriku = document.getElementById(\"Hokuriku1\");
            function ShowHokuriku(divHokuriku) { var Hokuriku_div = document.getElementById(divHokuriku); currentHokuriku.style.display = \"none\";
Hokuriku_div.style.display = \"block\";currentHokuriku = Hokuriku_div;} 
             </script>
             </ul> </li>      
             
             <table><tr>
                <td>
                   <a href='https://www.westjr.co.jp/travel-information/en/tickets-passes/jrwest-rail-pass/okayama_hiroshima_yamaguchi/' target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='Okayama Hiroshima Yamaguchi Area '  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='Okayama Hiroshima Yamaguchi Area  Map' >  
                    <input type=hidden name=island= value =\"honshu\" >
                     <input type=hidden name=pass value =\"15\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Okayama Hiroshima Yamaguchi Area</span></button>
                     </form >   
                </td>
            </tr></table>
           
                 <ul  class= medium ><li>
             <div id=\"Yamaguchi1\"  onclick=\"ShowYamaguchi('Yamaguchi2')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"Yamaguchi2\" style=\"display:none;\" class=\"eastseastouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"ShowYamaguchi('Yamaguchi1')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td   class=\"text-black medium menu_links \">  <ul  class= medium >
 
<li> Reserved seats on Bullet Train \"SANYO SHINKANSEN\" (Okayama ⇔ Hakata)</li>
<li> The pass can be used for the \"Hello Kitty Shinkansen\".</li>
<li>Special Rapid Services, Rapid Services, and Local trains on JR-WEST Conventional lines </li>
<li>JR West Miyajima Ferry (Miyajimaguchi ⇔ Miyajima)</li>

<li>Usable at \"EKIRIN\" rent-a-cycle shops within the pass's usage area.</li>

<li>  Reserved seats on Limited Express Trains
<ul>
<li class=text-danger>For reserved seating, ensure you book your seats before boarding the train. </li>
<li class=text-danger>Non-reserved seating is not available on trains with exclusively reserved seats.</li>
</ul>
<li>Unlimited rides on Chugoku JR route buses.</li>
<li class=text-danger>HAPI-LINE FUKUI can only be used when passing through between Fukui and Echizen-Hanando.</li>


<li class=text-danger>Cannot be used on  \"SANYO SHINKANSEN\" (Shin-Osaka ⇔ Okayama)</li>
<li class=text-danger>Not usable on conventional lines on Kyushu Island.</li>
</ul>

            <td></tr></table>     
             </div><script language=\"JavaScript\">
             var currentYamaguchi = document.getElementById(\"Yamaguchi1\");
            function ShowYamaguchi(divYamaguchi) { var Yamaguchi_div = document.getElementById(divYamaguchi); currentYamaguchi.style.display = \"none\";
Yamaguchi_div.style.display = \"block\";currentYamaguchi = Yamaguchi_div;} 
             </script>
             </ul> </li>      
      
       <table><tr>
                <td>
                   <a href='https://www.westjr.co.jp/travel-information/en/tickets-passes/jrwest-rail-pass/sanyo_sanin/' target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='Sanyo San-in Area  '  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='Sanyo San-in Area Map' >  
                    <input type=hidden name=island= value =\"honshu\" >
                     <input type=hidden name=pass value =\"12\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Sanyo San-in Area </span></button>
                     </form >   
                </td>
            </tr></table>
               <ul  class= medium ><li>
             <div id=\"SanyoSan1\">
             <div onclick=\"ShowSanyoSan('SanyoSan2')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</div>
           </div> <div id=\"SanyoSan2\" style=\"display:none;\" class=\"eastseastouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"ShowSanyoSan('SanyoSan1')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</div></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td   class=\"text-black medium menu_links \">  <ul  class= medium >
 
<li> Reserved seats on Bullet Train SANYO SHINKANSEN (Okayama ⇔ Hakata)</li>
<li> The pass can be used for the Hello Kitty Shinkansen.</li>
<li>Special Rapid Services, Rapid Services, and Local trains on JR-WEST Conventional lines </li>
<li>Chizu Express </li>
<li>Kyoto Tango Railway </li>
<li>JR Bus Chugoku</li>
<li>West JR Bus</li>
<li>JR West Miyajima Ferry (Miyajimaguchi ⇔ Miyajima)</li>
 

<li>  Reserved seats on Limited Express Train HARUKA,YAKUMO,KONOTORI, etc.
<ul>
<li class=text-danger>For reserved seating, ensure you book your seats before boarding the train. </li>
<li class=text-danger>Non-reserved seating is not available on trains with exclusively reserved seats.</li>
</ul>

<li class=text-danger>Cannot be used on TOKAIDO SHINKANSEN (Shin-Osaka ⇔ Tokyo)</li>
<li class=text-danger>Cannot be used on KYUSHU SHINKANSEN (Hakata ⇔ Kagoshima-Chuo)</li>

<li>Separate charges apply when reserving and using the Special Rapid “A Seat” paid seating service.</li>
</ul>
</ul>
            <td></tr></table>     
             </div><script language=\"JavaScript\">
             var currentSanyoSan = document.getElementById(\"SanyoSan1\");
            function ShowSanyoSan(divSanyoSan) { var SanyoSan_div = document.getElementById(divSanyoSan); currentSanyoSan.style.display = \"none\";
SanyoSan_div.style.display = \"block\";currentSanyoSan = SanyoSan_div;} 
             </script>
             </ul> </li>      
                  <table><tr>
                <td>
                     <a href='https://www.westjr.co.jp/travel-information/en/tickets-passes/other/setouchi/'   target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='Setouchi Area '  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='Setouchi Area   Map' >  
                    <input type=hidden name=island= value =\"honshu\" >
                     <input type=hidden name=pass value =\"17\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Setouchi Area  </span></button>
                     </form >   
                </td>
            </tr></table>
                  <ul  class= medium ><li>
             <div id=\"Setouchi1\"  onclick=\"ShowSetouchi('Setouchi2')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"Setouchi2\" style=\"display:none;\" class=\"eastseastouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"ShowSetouchi('Setouchi1')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td   class=\"text-black medium menu_links \">  <ul  class= medium >
 
<li>The pass can be used for reserved and non-reserved seats on Bullet Train SANYO SHINKANSEN (Shin-Osak ⇔ Hakata)</li>
<li> The pass can be used for the Hello Kitty Shinkansen.</li>
<li>Okayama Electric Tramway</li>
<li> Okenden Buz</li>
<li>JR Bus Chugoku(Hiroshima (Hiroshima Meipuru route only ) </li>
<li>Hiroshima bus(Hiroshima Minato New Route only)</li>
<li>Ryobi Ferry/ Shodoshima Ferry ( exlcuding high speed ferry)</li>
<li>JR West Miyajima Ferry (Miyajimaguchi ⇔ Miyajima)</li>
 <li>Ishizaki Kisen  (Hiroshima Port ⇔ Miyajima ) </li>
 <li>Sentonaikai Kisen  (Matsuyama ⇔ Hiroshoima  and Kure) </li>
<li> The pass can be used for reserved and non-reserved seats on Limited Express trains (HARUKA, SHIOKAZE, NAMPU, etc.).
<ul>
<li class=text-danger>For reserved seating, ensure you book your seats before boarding the train. </li>
<li class=text-danger>Non-reserved seating is not available on trains with exclusively reserved seats.</li>
</ul>

<li class=text-danger>Cannot be used on TOKAIDO SHINKANSEN (Shin-Osaka ⇔ Tokyo)</li>
<li class=text-danger>Cannot be used on KYUSHU SHINKANSEN (Hakata ⇔ Kagoshima-Chuo)</li>

<li>Special Rapid Services,rapid Services,and Local trains on JR-WEST and JR-SHIKOKU Conventional lines</li>
</ul>
            <td></tr></table>     
             </div><script language=\"JavaScript\">
             var currentSetouchi = document.getElementById(\"Setouchi1\");
            function ShowSetouchi(divSetouchi) { var Setouchi_div = document.getElementById(divSetouchi); currentSetouchi.style.display = \"none\";
Setouchi_div.style.display = \"block\";currentSetouchi = Setouchi_div;} 
             </script>
             </ul> </li>      
              <table><tr>
                <td>
                     <a href='https://www.westjr.co.jp/travel-information/en/tickets-passes/jrwest-rail-pass/kansai_sanin/'    target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='Kansai San-in Area'  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='Kansai San-in Area Map' >  
                    <input type=hidden name=island= value =\"honshu\" >
                     <input type=hidden name=pass value =\"18\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Kansai San-in Area </span></button>
                     </form >   
                </td>
            </tr></table>
            
               <ul  class= medium ><li>
             <div id=\"KansaiSanIn1\"  onclick=\"ShowKansaiSanIn('KansaiSanIn2')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"KansaiSanIn2\" style=\"display:none;\" class=\"eastseastouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"ShowKansaiSanIn('KansaiSanIn1')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td   class=\"text-black medium menu_links \">  <ul  class= medium >
 
<li>Reserved seats on Bullet Train SANYO SHINKANSEN (Shin-Osaka ⇔ Okayama)</li>
<li> The pass can be used for the Hello Kitty Shinkansen.</li>
<li>Chizu Express</li>
<li>Kyoto Tango Railway</li>
<li>West JR Bus</li>
 <li>Special Rapid Services,rapid Services,and Local trains on JR-WEST and JR-SHIKOKU Conventional lines</li>
<li>The pass can be used for reserved and non-reserved seats on Limited Express trains (HARUKA, SHIOKAZE, NAMPU, etc.).
<ul>
<li class=text-danger>For reserved seating, ensure you book your seats before boarding the train. </li>
<li class=text-danger>Non-reserved seating is not available on trains with exclusively reserved seats.</li>
</ul>

<li class=text-danger>Cannot be used on TOKAIDO SHINKANSEN (Shin-Osaka ⇔ Tokyo)</li>
<li class=text-danger>Cannot be used on KYUSHU SHINKANSEN (Hakata ⇔ Kagoshima-Chuo)</li>
 

</ul>
            <td></tr></table>     
             </div><script language=\"JavaScript\">
             var currentKansaiSanIn = document.getElementById(\"KansaiSanIn1\");
            function ShowKansaiSanIn(divKansaiSanIn) { var KansaiSanIn_div = document.getElementById(divKansaiSanIn); currentKansaiSanIn.style.display = \"none\";
KansaiSanIn_div.style.display = \"block\";currentKansaiSanIn = KansaiSanIn_div;} 
             </script>
             </ul> </li>   
             <table><tr>
                <td>
                     <a href='https://www.westjr.co.jp/travel-information/en/tickets-passes/jrwest-rail-pass/kansaimini/'    target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='Kansai Mini '  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='Kansai Mini Area  Map' >  
                    <input type=hidden name=island= value =\"honshu\" >
                     <input type=hidden name=pass value =\"19\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Kansai Mini  </span></button>
                     </form >   
                </td>
            </tr></table>
            
                          <ul  class= medium ><li>
             <div id=\"MiniKan1\"  onclick=\"ShowMiniKan('MiniKan2')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"MiniKan2\" style=\"display:none;\" class=\"eastseastouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"ShowMiniKan('MiniKan1')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td   class=\"text-black medium menu_links \">  <ul  class= medium >
 
<li>JR West Lines in the area</li>
<li>It can be uses on the Kansai Airport Aport Rapid Service , running directly between Jansai Airpot and Osaka/Kyobashi</li>
<li>Rapid Services, and Local trains on JR-WEST JR Lines such as the Kansai-Airport Rapid Service..
<ul>
<li class=text-danger>A separate Limited Express ticket is requied for the Kansai-Airport Express HARUKA and other Limited Express trains.</li>

</ul>
<li class=text-danger>Cannot be used on TOKAIDO SHINKANSEN (Shin-Osaka ⇔ Tokyo)</li>
<li class=text-danger>Cannot be used on KYUSHU SHINKANSEN (Shin-Osaka ⇔ Hakata)</li>
 

</ul>
            <td></tr></table>     
             </div><script language=\"JavaScript\">
             var currentMiniKan = document.getElementById(\"MiniKan1\");
            function ShowMiniKan(divMiniKan) { var MiniKan_div = document.getElementById(divMiniKan); currentMiniKan.style.display = \"none\";
MiniKan_div.style.display = \"block\";currentMiniKan = MiniKan_div;} 
             </script>
             </ul> </li>     
              <table><tr>
                <td>
                      <a href='https://www.westjr.co.jp/travel-information/en/tickets-passes/jrwest-rail-pass/kansai_hiroshima/' target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='Kansai Hiroshima'  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='Kansai Hiroshima' >  
                    <input type=hidden name=island= value =\"honshu\" >
                     <input type=hidden name=pass value =\"20\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Kansai Hiroshima</span></button>
                     </form >   
                </td>
            </tr></table> 
              
              
           <ul  class= medium ><li>
             <div id=\"KansaiHiroshima1\"  onclick=\"ShowKansaiHiroshima('KansaiHiroshima2')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"KansaiHiroshima2\" style=\"display:none;\" class=\"eastseastouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"ShowKansaiHiroshima('KansaiHiroshima1')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td   class=\"text-black medium menu_links \">   

<ul  class= medium >
 
<li>Reserved seats on Bullet Train SANYO SHINKANSEN (Shin-Osaka ⇔ Hiroshima)</li>
<li> The pass can be used for the Hello Kitty Shinkansen</li>
<li>Special Rapid Services, Rapid Services, and Local trains on JR-WEST Conventional lines</li>
<li>JR West Miyajima Ferry (Miyajimaguchi  ⇔  Miyajima)</li>
<li>Kyoto Tango Railway</li>
<li>Wakayama Electric  Railway</li>
<li>JR Bus Chugoku</li>
<li>JR West Bus/li>
<li>
<ul>
<li class=text>Reserved seats on Limited Express Trains HARUKA, KUROSHIO, KONOTORI, KINOSAKI, etc.</li>
</ul>
<li class=text-danger> For reserved seating, ensure you book your seats before boarding the train.</li>
<li class=text-danger> Non-reserved seating is not available on trains with exclusively reserved seats.</li>
 </ul>


<li class=text-danger>Cannot be used Bullet Train SANYO SHINKANSEN (Hiroshima ⇔ Hakata)</li>
<li class=text-danger>Cannot be used Bullet Train SANYO SHINKANSEN (Shin-Osaka⇔Tokyo)</li>
<li class=text-danger>Cannot be used Bullet Train SANYO SHINKANSEN (Hakata⇔Kagoshima-Chuo)</li>
<ul<<li>* Separate charges apply when reserving and using the Special Rapid “A Seat” paid seating service.</li></ul>
</ul>
            <td></tr></table>     
             </div><script language=\"JavaScript\">
             var currentKansaiHiroshima = document.getElementById(\"KansaiHiroshima1\");
            function ShowKansaiHiroshima(divKansaiHiroshima) { var KansaiHiroshima_div = document.getElementById(divKansaiHiroshima); currentKansaiHiroshima.style.display = \"none\";
KansaiHiroshima_div.style.display = \"block\";currentKansaiHiroshima = KansaiHiroshima_div;} 
             </script>
             </ul> </li>    
               <table><tr>
                <td>
                     <a href='https://www.westjr.co.jp/travel-information/en/tickets-passes/jrwest-rail-pass/hiroshima_yamaguchi/'   target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='Hiroshima Yamaguchi Area '  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='Hiroshima Yamaguchi Area  Map' >  
                    <input type=hidden name=island= value =\"honshu\" >
                     <input type=hidden name=pass value =\"21\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Hiroshima Yamaguchi Area </span></button>
                     </form >   
                </td>
            </tr></table>
            <ul  class= medium ><li>
             <div id=\"Hiroshima1\"  onclick=\"ShowHiroshima('Hiroshima2')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"Hiroshima2\" style=\"display:none;\" class=\"eastseastouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"ShowHiroshima('Hiroshima1')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td   class=\"text-black medium menu_links \">  <ul  class= medium >
 
<li>Reserved seats on Bullet Train SANYO SHINKANSEN (Shin-Osaka ⇔ Hiroshima)</li>
<li> The pass can be used for the Hello Kitty Shinkansen</li>
<li>Special Rapid Services, Rapid Services, and Local trains on JR-WEST Conventional lines</li>
<li>JR West Miyajima Ferry (Miyajimaguchi  ⇔  Miyajima)</li>
<li>Kyoto Tango Railway</li>
<li>Wakayama Electric  Railway</li>
<li>JR Bus Chugoku</li>
<li>JR West Bus/li>
<li>
<ul>
<li class=text>Reserved seats on Limited Express Trains HARUKA, KUROSHIO, KONOTORI, KINOSAKI, etc.</li>
</ul>
<li class=text-danger> For reserved seating, ensure you book your seats before boarding the train.</li>
<li class=text-danger> Non-reserved seating is not available on trains with exclusively reserved seats.</li>
 </ul>


<li class=text-danger>Cannot be used Bullet Train SANYO SHINKANSEN  (Mihara⇔Shin-Osaka)</li>
<li class=text-danger>Cannot be used Bullet Train SANYO SHINKANSEN (Shin-Osaka⇔Tokyo)</li>
<li class=text-danger>Cannot be used Bullet Train SANYO SHINKANSEN (Hakata⇔Kagoshima-Chuo)</li>
<ul<<li>* Separate charges apply when reserving and using the Special Rapid “A Seat” paid seating service.</li></ul>
</ul>
            <td></tr></table>     
             </div><script language=\"JavaScript\">
             var currentHiroshima = document.getElementById(\"Hiroshima1\");
            function ShowHiroshima(divHiroshima) { var Hiroshima_div = document.getElementById(divHiroshima); currentHiroshima.style.display = \"none\";
Hiroshima_div.style.display = \"block\";currentHiroshima = Hiroshima_div;} 
             </script>
             </ul> </li>       
</ul>
   
       <li> <span class=\"text-balck  medium\">JR Shikoku </span></li>
        <ul>
                   <table><tr>
                <td>
                     <a href='https://shikoku-railwaytrip.com/pass-information/'    target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='All Shikoku'  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='All Shikoku Map' >  
                    <input type=hidden name=island= value =\"shikoku\" >
                     <input type=hidden name=pass value =\"22\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >All Shikoku </span></button>
                     </form >   
                </td>
            </tr></table>
      
           <ul  class= medium ><li>
             <div id=\"AllShikoku1\"  onclick=\"ShowAllShikoku('AllShikoku2')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"AllShikoku2\" style=\"display:none;\" class=\"eastseastouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"ShowAllShikoku('AllShikoku1')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td   class=\"text-black medium menu_links \">  
<ul  class= medium >
 
<li>JR Shikoku-Line</li>
<li>Iyotetsu-Line</li>
<li>Tosaden Kotsu-Line</li>
<li>Tosa-Kuroshio Tetsudo-Line</li>
<li>Asa Kaigan Tetsudo-Line</li>
<li>Kotoden-Line</li>
<li>Shodoshima Ferry</li>
<li>Shodoshima Olive Bus</li>
 <li>Valid for Non-reserved seats in regular cars on limited express, rapid, and local trains on all JR Shikoku lines and all Tosa Kuroshio Railway lines</li>
<li>Valid for All Asa Kaigan Railway lines, all lyo Railway lines, all Takamatsu-Kotohira Electric Railroad lines, and all Tosaden Kotsu lines</li>
<li>Valid for Shodoshima Ferry passage between Takamatsu and Tonosho</li>
<liValid for >Shodoshima Olive Bus line</li>
<li class=text-danger> Not valid  on the Sunrise Seto or Botchan Train service</li>
<li class=text-danger> Not valid  on the  Shodoshima Ferry high-speed service or passage other than between Takamatsu and Tonosho</li>
<li class=text-danger>Not valid on any bus line other than Shodoshima Olive Bus</li>
<li class=text-danger> The Pass can be used on the JR Seto-Ōhashi Line from Kojima Station southward. Areas north of Kojima Station (towards Okayama Station) are not included in the Pass. When traveling to or from an area in which the Pass is not valid, you will need to purchase tickets for the segments not covered by the Pass.</li>
<ul>

            <td></tr></table>     
             </div><script language=\"JavaScript\">
             var currentAllShikoku = document.getElementById(\"AllShikoku1\");
            function ShowAllShikoku(divAllShikoku) { var AllShikoku_div = document.getElementById(divAllShikoku); currentAllShikoku.style.display = \"none\";
AllShikoku_div.style.display = \"block\";currentAllShikoku = AllShikoku_div;} 
             </script>
             </ul> </li>  
             <table><tr>
                <td>
                     <a href='https://shikoku-railwaytrip.com/pass-information/'    target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='Kagawa Mini Rail & Ferry '  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='Kagawa Mini Rail & Ferry  Map' >  
                    <input type=hidden name=island= value =\"shikoku\" >
                     <input type=hidden name=pass value =\"23\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Kagawa Mini Rail & Ferry </span></button>
                     </form >   
                </td>
            </tr></table>    
              <ul  class= medium ><li>
             <div id=\"MiniShikoku1\"  onclick=\"ShowMiniShikoku('MiniShikoku2')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"MiniShikoku2\" style=\"display:none;\" class=\"eastseastouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"ShowMiniShikoku('MiniShikoku1')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td   class=\"text-black medium menu_links \">  
<ul  class= medium >
 
<li>JR Shikoku-Line</li>
<li>Kotoden-Line</li>
<li>Shodoshima Ferry</li>
<li>Shodoshima Olive Bus</li>
<li>Valid for Non-reserved seats in regular cars on limited express, rapid, and local trains on the following lines of Shikoku Railway Company: Yosan Line between Takamatsu and Kan-onji, Kōtoku Line between Takamatsu and Hiketa, and Dosan Line between Tadotsu and Kotohira</li>
<li>Valid for All Takamatsu-Kotohira Electric Railroad Lines</li>
<li>Valid for Shodoshima Ferry passage between Takamatsu and Tonosho</li>
<li>Valid for Shodoshima Olive Bus line</li>
<li class=text-danger>Not valid on the Sunrise Seto</li>
<li class=text-danger>Not valid on the Shodoshima Ferry high-speed service or passage other than between Takamatsu and Tonosho</li>
<li class=text-danger>Not valid on the any bus line other than Shodoshima Olive Bus</li>
<li class=text-danger> The Pass can be used on the JR Seto-Ōhashi Line from Kojima Station southward. Areas north of Kojima Station (towards Okayama Station) are not included in the Pass. When traveling to or from an area in which the Pass is not valid, you will need to purchase tickets for the segments not covered by the Pass.</li>
<ul>
            <td></tr></table>     
             </div><script language=\"JavaScript\">
             var currentMiniShikoku = document.getElementById(\"MiniShikoku1\");
            function ShowMiniShikoku(divMiniShikoku) { var MiniShikoku_div = document.getElementById(divMiniShikoku); currentMiniShikoku.style.display = \"none\";
MiniShikoku_div.style.display = \"block\";currentMiniShikoku = MiniShikoku_div;} 
             </script>
             </ul> </li>      
          
    </ul>
       
        <li><span class=\"text-balck  medium\">JR Kyushu</span> </li>
        <ul  class= medium >
          <table><tr>
                <td>
                      <a href='https://www.jrkyushu.co.jp/english/railpass/railpass.jsp'   target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='All Area Kyushu '  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='All Area Kyushu  Map' >  
                    <input type=hidden name=island= value =\"kyushu\" >
                     <input type=hidden name=pass value =\"24\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >All Area Kyushu  </span></button>
                     </form >   
                </td>
            </tr></table>   
          
            
           <ul  class= medium ><li>
             <div id=\"AllKyushu1\"  onclick=\"ShowAllKyushu('AllKyushu2')\"  class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"AllKyushu2\" style=\"display:none;\" class=\"eastseastouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"ShowAllKyushu('AllKyushu1')\"  class=\"text-black medium menu_links \"  style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td   class=\"text-black medium menu_links \">  XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
            <td></tr></table>     
             </div><script language=\"JavaScript\">
             var currentAllKyushu = document.getElementById(\"AllKyushu1\");
            function ShowAllKyushu(divAllKyushu) { var AllKyushu_div = document.getElementById(divAllKyushu); currentAllKyushu.style.display = \"none\";
AllKyushu_div.style.display = \"block\";currentAllKyushu = AllKyushu_div;} 
             </script>
             </ul> </li>     
               <table><tr>
                <td>
                     <a href='https://www.japan-guide.com/e/e2361_sanyo_sanin_kyushu.html'  target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='Sanyo-San-In Northern Kyushu 7 Days '  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='Sanyo-San-In Northern Kyushu 7 Days  Map' >  
                    <input type=hidden name=island= value =\"kyushu\" >
                     <input type=hidden name=pass value =\"25\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Sanyo-San-In Northern Kyushu 7 Days  </span></button>
                     </form >   
                </td>
            </tr></table> 
         
           <ul  class= medium ><li>
             <div id=\"SevenKyushu1\"  onclick=\"ShowSevenKyushu('SevenKyushu2')\"  class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"SevenKyushu2\" style=\"display:none;\" class=\"eastseastouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"ShowSevenKyushu('SevenKyushu1')\"   class=\"text-black medium menu_links \"  style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td   class=\"text-black medium menu_links \">  XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
            <td></tr></table>     
             </div><script language=\"JavaScript\">
             var currentSevenKyushu = document.getElementById(\"SevenKyushu1\");
            function ShowSevenKyushu(divSevenKyushu) { var SevenKyushu_div = document.getElementById(divSevenKyushu); currentSevenKyushu.style.display = \"none\";
SevenKyushu_div.style.display = \"block\";currentSevenKyushu = SevenKyushu_div;} 
             </script>
             </ul> </li>      
           
                 <table><tr>
                <td>
                       <a href='https://www.jrkyushu.co.jp/english/railpass/railpass.jsp'  target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='Northern Kyushu Area '  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='Northern Kyushu Area   Map' >  
                    <input type=hidden name=island= value =\"kyushu\" >
                     <input type=hidden name=pass value =\"26\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Northern Kyushu Area </span></button>
                     </form >   
                </td>
            </tr></table>
                         <ul  class= medium ><li>
             <div id=\"SouthKyushu1\"  onclick=\"ShowSouthKyushu('SouthKyushu2')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"SouthKyushu2\" style=\"display:none;\" class=\"eastseastouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"ShowSouthKyushu('SouthKyushu1')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><td   class=\"text-black medium menu_links \">  XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
            <td></tr></table>     
             </div><script language=\"JavaScript\">
             var currentSouthKyushu = document.getElementById(\"SouthKyushu1\");
            function ShowSouthKyushu(divSouthKyushu) { var SouthKyushu_div = document.getElementById(divSouthKyushu); currentSouthKyushu.style.display = \"none\";
SouthKyushu_div.style.display = \"block\";currentSouthKyushu = SouthKyushu_div;} 
             </script>
             </ul> </li>      
             
                       <table><tr>
                <td>
                      <a href='https://www.jrkyushu.co.jp/english/railpass/railpass.jsp' target =_blank ><img src=images/jrrail4.webp width =24px   
                    title='Southern Kyushu Area '  ></a>
                </td>
                <td>
                    <form method =POST action=passmap.php  title='Southern Kyushu Area   Map' >  
                    <input type=hidden name=island= value =\"kyushu\" >
                     <input type=hidden name=pass value =\"27\" >
                     <button type=\"submit\" class=\"btn text-blue\" style=\"text-decoration:bold;border:0;\">
                     <span class=text-primary style=\"font: 18px Arial, Helvetica, sans-serif;\" >Southern Kyushu Area </span></button>
                     </form >   
                </td>
            </tr></table>
              
           <ul  class= medium ><li>
             <div id=\"SouthKyushu1\"  onclick=\"ShowSouthKyushu('SouthKyushu2')\" class=\"text-black medium menu_links \"  style='text-decoration: none;'> Details</a>
           </div> <div id=\"SouthKyushu2\" style=\"display:none;\" class=\"eastseastouth_class\">
           <table width =80%><tr bgcolor=#ffffff > <td bgcolor=#ffffff colspan =4 align=left ></font>
           <div onclick=\"ShowSouthKyushu('SouthKyushu1')\"   class=\"text-black medium menu_links \" style='text-decoration: none;'>Details</a></td></tr>
            <tr bgcolor=#ffffff  class=text_white><t d>  XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
            <td></tr></table>     
             </div><script language=\"JavaScript\">
             var currentSouthKyushu = document.getElementById(\"SouthKyushu1\");
            function ShowSouthKyushu(divSouthKyushu) { var SouthKyushu_div = document.getElementById(divSouthKyushu); currentSouthKyushu.style.display = \"none\";
SouthKyushu_div.style.display = \"block\";currentSouthKyushu = SouthKyushu_div;} 
             </script>
             </ul> </li>      
            
            </ul>
 </ul>
  </div>
        </div>
        
       
 
";

echo "<p id=\"locationmap\" style='margin-top: 0;'></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";



include BASEPATH ."/docs/footer.php";
