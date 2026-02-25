<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";


echo "<style>
 #myIndent1 {
   background-color:#FFFFFF;
  text-indent: 10px;
 }
 #myIndent2 {
  background-color:#FFFFFF;
  text-indent:  0px;
 }
 #myIndent3 {
  background-color:#FFFFFF;
  text-indent: 15px;
 }
 .about p {
  margin-left: 40px;
   margin-right: 40px;
  text-indent: 2rem;
  text-align: justify;
}
</style> ";

echo "<div class=\"container-fluid text-center\">
 <div class=\"col\"><br><center>
 	<div class=\"card\"><br><center><br>
<div class='text text-start'><p>These are the different Shinkanssen , with the route name, the train type and station stops.  
If you are using a JR pass (1st Class [Green] or standard) it is recommended that on the busier lines that you make a reservation<br> 
Due to the frequency of the trains you can go to the station and make the reservation for the next train leaving</div>
<div class='text text-start'><p><b> Note:</b> Make sure to check the station names , for example Shinkansen departing out of Osaka leave from Shin-Osaka(see the map) , this in not Osaka station</div> 
</p></div><div></div>";
if(isset($_GET['island'])){

    if($_GET['island'] == 'all' or $_GET['island'] == 'hokkaido'){
        echo "<div class=\"col\"><br><center>
 	<div class=\"card\"><br>
<div class='text text-start'><p><left><b>Hokkaido Shinkansen [Aomori to Hakodate]</b></left></div>
    <div class='text-danger text-start text'><p>  <left><b>Hayabusa </left><span class='text'><b>[</b><span><a href =\"shinkansenmap.php?route=hokkaido&traintype=hayabusa\" class='text-danger text-start text'><b>Route</b></a><span class='text'><b>]</b><span></div>
         <div class=' text-start text-small'><p>  <left>Shin-Aomori - Oku Tsugaru Imabetsu - Kikonai - Shin Hakodate Hokuto</div>
        </p></div><div></div> 
";
    }
    if($_GET['island'] == 'all' or $_GET['island'] == 'kyushu'){
        echo "<div class=\"col\"><br><center>
 	<div class=\"card\"><br>
<div class='text text-start'><p><left><b>Kyushu Shinknasen - [Fukuoka  to  Kagoshima]</b></div>
     <div class='text-danger text-start text'><p>  <left><b>Mizuho</b> </left><span class='text'><b>[</b><span><a href =\"shinkansenmap.php?route=kyushu&traintype=mizuho\" class='text-danger text-start text'><b>Route</b></a><span class='text'><b>]</b><span></div>
        <div class=' text-start text-small'><p>  <left></b>Hakata (Fukuoka) - Kumamoto - Kagoshima-Chuo</b></div> </p></div><div></div> 
";
    }
    if($_GET['island'] == 'all' or $_GET['island'] == 'honshu'){
        echo "<div class=\"col\"><br><center>
 	<div class=\"card\"><br>
<div class='text text-start'><p><left><b>Joetsu Shinkansen [Tokyo  to Niigata])</b></div>
      <div class='text-danger text-start text'><p>  <left><b>Toki</b> </left><span class='text'><b>[</b><span><a href =\"shinkansenmap.php?route=joetsu&traintype=toki\" class='text-danger text-start text'><b>Route</b></a><span class='text'><b>]</b><span></div>
         <div class=' text-start text-small'><p>  <left></b>Tokyo - Ueno - Omiya - Kumagaya - Honjo-Waseda - Takasaki - Jomo-Kogen - Echigo-Yuzawa - Urasa - Nagaoka - Tsubame-Sanjo - Niigata</b></div>
 </p></div><div></div> 
 <div class=\"col\"><br><center>
 	<div class=\"card\"><br>
<div class='text text-start'><p><left><b>Yamagata Shinkansen [Tokyo to  Shinjo ]</b></div>
     <div class='text-danger text-start text'><p>  <left><b>Tsubasa</b> </left><span class='text'><b>[</b><span><a href =\"shinkansenmap.php?route=yamagata&traintype=tsubasa\" class='text-danger text-start text'><b>Route</b></a><span class='text'><b>]</b><span></div>
         <div class=' text-start text-small'><p>  <left></b>Tokyo - Ueno - Omiya - Utsunomiya - Koriyama - Fukushima - Yonezawa - Takahata - Akayu - Kaminoyama-Onsen - Yamagata - Tendo - Sakurambo-Higashine - Murayama - Oishida - Shinjo</b></div>
 </p></div><div></div> 
 	<div class=\"card\"><br>
<div class='text text-start'><p><left><b>Akita Shinkansen [Tokyo  to Akita]</b></div>
     <div class='text-danger text-start text'><p>  <left><b>Komachi</b> </left><span class='text'><b>[</b><span><a href =\"shinkansenmap.php?route=akita&traintype=komachi\" class='text-danger text-start text'><b>Route</b></a><span class='text'><b>]</b><span></div>
        <div class=' text-start text-small'><p>  <left></b>Tokyo - Ueno - Omiya - Sendai - Morioka - Shizokuishi - Tazawako - Kakunodate - Omagari - Akita</b></div>
 </p></div><div></div> 
 	<div class=\"card\"><br>
    <div class='text text-start'><p><left><b>Tohoku Shinkansen [Tokyo to Aomori]</b></div>
  <div class='text-danger text-start text'><p>  <left><b> Hayabusa</b> </left><span class='text'><b>[</b><span><a href =\"shinkansenmap.php?traintype=hayabusa&route=tohoku\" class='text-danger text-start text'><b>Route</b></a><span class='text'><b>]</b><span></div>
       <div class=' text-start text-small'><p>  <left></b>Tokyo - Omiya - Sendai - Morioka - Shin-Aomori</b></div>
      <div class='text-danger text-start text'><p>  <left><b>Yamabiko</b> </left><span class='text'><b>[</b><span><a href =\"shinkansenmap.php?route=tohoku&traintype=yamabiko\" class='text-danger text-start text'><b>Route</b></a><span class='text'><b>]</b><span></div>
        <div class=' text-start text-small'><p>  <left></b>Tokyo - Ueno - Omiya - Oyama - Utsunomiya - Nasu-Shiobara - Shin-Shirakawa - Koriyama - Fukushima - Shiroishi-Zao - Sendai - Furukawa - Kurikoma-Kogen - Ichinoseki - Mizusawa-Esashi - Kitakami - Shin-Hanamaki - Morioka</b></div>
 
      <div class='text-danger text-start text'><p>  <left><b>Nasuno</b> </left><span class='text'><b>[</b><span><a href =\"shinkansenmap.php?route=tohoku&traintype=nasuno\" class='text-danger text-start text'><b>Route</b></a><span class='text'><b>]</b><span></div>
        <div class=' text-start text-small'><p>  <left></b>Tokyo - Ueno - Omiya - Oyama - Utsunomiya - Nasu-Shiobara - Shin-Shirakawa - Koriyama</b></div>
 </p></div><div></div> 
<div class=\"card\"><br>

 <div class='text text-start'><p><left><b>Sanyo Shinkansen [Osake to Fukuoka]</b></div>

      <div class='text-danger text-start text'><p>  <left>Mizuho</b> </left><span class='text'><b>[</b><span><a href =\"shinkansenmap.php?route=sanyo&traintype=mizuho\" class='text-danger text-start text'><b>Route</b></a><span class='text'><b>]</b><span></div>
        <div class=' text-start text-small'><p>  <left></b> Shin-Osaka - Shin-Kobe - Himeji - Okayama - Hiroshima - Kokura - Hakata (Fukuoka)</b></div>
      <div class='text-danger text-start text'><p>  <left><b>Sakura</b> </left><span class='text'><b>[</b><span><a href =\"shinkansenmap.php?route=sanyo&traintype=sakura\" class='text-danger text-start text'><b>Route</b></a><span class='text'><b>]</b><span></div>
          <div class=' text-start text-small'><p>  <left></b>Shin-Osaka - Shin-Kobe - Himeji - Okayama - Fukuyama - Hiroshima - Tokuyama - Shin-Yamaguchi - Kokura - Fukuoka (Hakata Station)</b></div>
     <div class='text-danger text-start text'><p>  <left><b>Nozomi</b> </left><span class='text'><b>[</b><span><a href =\"shinkansenmap.php?route=sanyo&traintype=nozomi\" class='text-danger text-start text'><b>Route</b></a><span class='text'><b>]</b><span></div>
        <div class=' text-start text-small'><p>  <left></b>Shin Osaka - Shin-Kobe - Himeji - Okayama - Fukuyama - Hiroshima - Tokuyama - Shin-Yamaguchi - Kokura - Hakata (Fukuoka)</b></div>
     <div class='text-danger text-start text'><p>  <left><b>Kodama</b> </left><span class='text'><b>[</b><span><a href =\"shinkansenmap.php?route=sanyo&traintype=kodama\" class='text-danger text-start text'><b>Route</b></a><span class='text'><b>]</b><span></div>
         <div class=' text-start text-small'><p>  <left></b>Shin-Osaka - Shin-Kobe - Nishi-Akashi - Himeji - Aioi - Okayama - Shin-Kurashiki - Fukuyama - Shin-Onomichi - Mihara - Higashi-Hiroshima - Hiroshima -  Tokuyama - Shin-Yamaguchi - Asa - Shin-Shimonoseki - Kokura - Fukuoka (Hakata Station)</b></div>
      <div class='text-danger text-start text'><p>  <left><b>Hikari</b> </left><span class='text'><b>[</b><span><a href =\"shinkansenmap.php?route=sanyo&traintype=hikari\" class='text-danger text-start text'><b>Route</b></a><span class='text'><b>]</b><span></div>
          <div class=' text-start text-small'><p>  <left></b>Shin-Osaka - Shin-Kobe - Nishi-Akashi - Himeji - Aioi - Okayama</b></div>
 </p></div><div></div>
  
<div class=\"card\"><br>
 <div class='text text-start'><p><left><b> Tokaido Shinkansen [Tokyo to  Osaka]</b></div>
         <div class='text-danger text-start text'><p>  <left><b>Nozomi</b> </left><span class='text'><b>[</b><span><a href =\"shinkansenmap.php?route=tokaido&traintype=nozomi\" class='text-danger text-start text'><b>Route</b></a><span class='text'><b>]</b><span></div>
            <div class=' text-start text-small'><p>  <left></b>Tokyo - Shinagawa - Shin-Yokohama - Nagoya - Kyoto - Shin Osaka</b></div>
        <div class='text-danger text-start text'><p>  <left><b>Hikari</b> </left><span class='text'><b>[</b><span><a href =\"shinkansenmap.php?route=tokaido&traintype=hikari\" class='text-danger text-start text'><b>Route</b></a><span class='text'><b>]</b><span></div>
         <div class=' text-start text-small'><p>  <left></b>Tokyo - Shinagawa - Shin-Yokohama - Odawara - Atami - Mishima - Shizuoka - Hamamatsu - Toyohashi - Nagoya - Gifu-Hashima - Maibara - Kyoto - Shin-Osaka</b></div>
        <div class='text-danger text-start text'><p>  <left><b>Kodama</b> </left><span class='text'><b>[</b><span><a href =\"shinkansenmap.php?route=tokaido&traintype=kodama\" class='text-danger text-start text'><b>Route</b></a><span class='text'><b>]</b><span></div>
        <div class=' text-start text-small'><p>  <left></b> Tokyo - Shinagawa - Shin-Yokohama - Odawara - Atami - Mishima - Shin-Fuji - Shizuoka - Kakegawa - Hamamatsu - Toyohashi - Mikawa-Anjo - Nagoya - Gifu-Hashima - Maibara - Kyoto - Shin-Osaka</b></div>
 </p></div><div></div>
 <div class=\"card\"><br>
<div class='text text-start'><p><left><b> Hokuriku Shinkansen [Tokyo to Tsuruga]</b></div>
    <div class='text-danger text-start text'><p>  <left><b>Kagayaki</b> </left><span class='text'><b>[</b><span><a href =\"shinkansenmap.php?route=horruriku&traintype=kagayaki\" class='text-danger text-start text'><b>Route</b></a><span class='text'><b>]</b><span></div>
        <div class=' text-start text-small'><p>  <left></b>Tokyo - Ueno - Omiya - Nagano - Toyama - Kanazawa - Komatsu - Kaga Onsen - Awara Onsen - Fukui - Echizen-Takefu - Tsuruga</b></div>
";

    }
}
echo"</div>";
include BASEPATH ."/docs/footer.php";