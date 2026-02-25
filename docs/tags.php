<?php

$part1="";

$part2='';
$part4='';


$part3="
<meta property=\"og:type\" content=\"website\">";



$part5="
<meta name=\"twitter:card\" content=\"summary_large_image\">
<meta name=\"twitter:site\" content=\"@explorejapan\">
<meta>";

$part6="";
$part7="";
$part8='';
$partfivea="";
$scritptname=strtolower(substr($_SERVER['SCRIPT_NAME'],1,strlen($_SERVER['SCRIPT_NAME'])));
if(substr_count($scritptname,"/")>0)
		$scritptname=substr($scritptname,strrpos($scritptname,"/")+1);
$parameters=strtolower(substr($_SERVER['REQUEST_URI'],strpos($_SERVER['REQUEST_URI'],"?")+1));



###TESTING


if($scritptname == 'ryokan.php') {
    $partdescription="Ryokans in  Japan , a list  and a map of Ryokans in Japan";
$part2 = "
<meta name=\"description\" content=\"Ryokans in  Japan , a list  and a map of Ryokans in Japan\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Ryokans in Japan, Where to Stay in Japan, The Best  hotels in japan , , Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
$part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://japan.bresser.net.au/ryokan.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
$randomid=345633345678282;
$partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
$part6 = "<title>Ryokans in Japan </title>";

$repalace=array("<title>","</title>");
$part6a=str_replace($repalace,'',$part6);
    $part6 .=" <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Ryokans in Japan with a map of store locations.\",
       \"name\": \"Ryokans in Japan\",
       \"headline\": \"Ryokans in Japan ,the  place  to stay Japan\",
      \"image\": [
        \"https://botoishi.com.au/images/ryokan.webp\",
        \"https://botoishi.com.au/images/myjapam.webp\",
        \"https://botoishi.com.au/images/header1.webp\"
       ],
      \"datePublished\": \"2025-12-05T08:00:00+08:00\",
      \"dateModified\": \"2025-12-05TT09:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
    </script>";


}
if($scritptname == 'railheat.php') {
    $partdescription="Railway Heat Map Japan displaying all the railway and tram lines in Japan";
    $part2 = "
<meta name=\"description\" content=\"Railway Heat Map Japan displaying all the railway and tram lines in Japan \">
<meta name=\"keywords\" content=\"Trains,Railway map  heat of Japan to discoer all the raily line in Japan and the 10300 odd stations\">";
$part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">


<meta property=\"og:image\" content=\"https://botoishi.com.au//images/keio.avif\">
<meta property=\"og:url\" content=\"https://botoishi.com.au/railheat.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456781;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Railway Heat Map Japan</title>";
    $part6a=str_replace($repalace,'',$part6);


}


if($scritptname == 'chainhotels.php') {
    $partdescription="Hotels in Japan, a list and map of chain hotels in Japan";
    $part2 = "
<meta name=\"description\" content=\"Hotels in Japan, a list and map of chain hotels in Japan  \">
<meta name=\"keywords\" content=\"Hotels in Japan\">";

$part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/tokykocar.jpeg\">

<meta property=\"og:image\" content=\https://botoishi.com.au/images/tokykocar.jpeg\">
<meta property=\"og:url\" content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456781;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Hotels in Japan</title>";
    $part6a=str_replace($repalace,'',$part6);


}



if($scritptname == 'superhotel.php') {
    $partdescription="Super Hotels Japan , a list of Super Hotels in Japan  and a map of Super Hotels in Japan with directions from your location in Japan ";

    $part2 = "
<meta name=\"description\" content=\"Super Hotels Japan , a list of Super Hotels in Japan  and a map of Super Hotels in Japan with directions from your location in Japan \">
<meta name=\"keywords\" content=\"Super Hotels\">";
$part4 = "
<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">
<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456781;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Super Hotels Japan</title>";
    $part6a=str_replace($repalace,'',$part6);

}


if($scritptname == 'candeohotels.php') {
    $partdescription="Candeo Hotels Japan , a list of Candeo Hotels in Japan  and a map of Candeo Hotels in Japan with directions from your location in Japan ";

    $part2 = "
<meta name=\"description\" content=\"Candeo Hotels Japan , a list of Candeo Hotels in Japan  and a map of Candeo Hotels in Japan with directions from your location in Japan \">
<meta name=\"keywords\" content=\"Candeo Hotels\">";
    $part4 = "
<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">
<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456781;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Candeo Hotels Japan</title>";
    $part6a=str_replace($repalace,'',$part6);

}

if($scritptname == 'princehotel.php') {
    $partdescription="Prince Hotels Japan , a list of Prince Hotels in Japan  and a map of Prince Hotels in Japan with directions from your location in Japan ";

    $part2 = "
<meta name=\"description\" content=\"Prince Hotels Japan , a list of Prince Hotels in Japan  and a map of Prince Hotels in Japan with directions from your location in Japan \">
<meta name=\"keywords\" content=\"Prince Hotels\">";
    $part4 = "
<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">
<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456781;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Prince Hotels in Japan</title>";
    $part6a=str_replace($repalace,'',$part6);

}

if($scritptname == 'ryokans.php') {
   $partdescription="Ryokans Japan , a list of Ryokans  in Japan  and a map of Ryokans  in Japan with directions from your location in Japan";
    $part2 = "
<meta name=\"description\" content=\"Ryokans Japan , a list of Ryokans  in Japan  and a map of Ryokans  in Japan with directions from your location in Japan\">
<meta name=\"keywords\" content=\"Ryokans  in Japan , traditional japanese Inns , traditional japanese hotels\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">


<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456781;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Ryokans Japan</title>";
    $part6a=str_replace($repalace,'',$part6);
    $partdescription="Ryokans  in Japan";

}

if($scritptname == 'apahotels.php') {
    $partdescription="APA Hotels Japan , a list of APA Hotels in Japan  and a map of APA Hotels in Japan with directions from your location in Japan ";

    $part2 = "
<meta name=\"description\" content=\"APA Hotels Japan , a list of APA Hotels in Japan  and a map of APA Hotels in Japan with directions from your location in Japan \">
<meta name=\"keywords\" content=\"APA Hotels Japan \">";
    $part4 = "
<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">
<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456781;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>APA Hotels Japan</title>";
    $part6a=str_replace($repalace,'',$part6);

}
if($scritptname == 'dormyinn.php') {
    $partdescription="Dormy Inn  Hotels Japan , a list of Dormy Inn  Hotels in Japan  and a map of Dormy Inn  Hotels in Japan with directions from your location in Japan ";

    $part2 = "
<meta name=\"description\" content=\"Dormy Inn  Hotels Japan , a list of Dormy Inn  Hotels in Japan  and a map of Dormy Inn  Hotels in Japan with directions from your location in Japan \">
<meta name=\"keywords\" content=\"Dormy Inn  Hotels Japan \">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">


<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456781;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Dormy Inn HotelsHotels Japan</title>";
    $part6a=str_replace($repalace,'',$part6);

}
if($scritptname == 'jrhotel.php') {
    $partdescription="JR  Hotels Japan , a list of JR  Hotels in Japan JR  Hotels Japan , a list of JR Hotels in Japan  and a map of JR Hotels in Japan with directions from your location in Japan ";

    $part2 = "
<meta name=\"keywords\" content=\"JR  Hotels, hotel accomodation in Japan ,where to stay in Japan\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">


<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456781;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>JR  Hotels Japan</title>";
    $part6a=str_replace($repalace,'',$part6);

}

if($scritptname == 'toyokoinn.php') {
    $partdescription="Toyoko Inn Hotels Japan , a list and map  of Toyoko Inn Hotels in Japan";
    $part2 = "
<meta name=\"description\" content=\"Toyoko Inn Hotels Japan ,  a list and map  of Toyoko Inn Hotels in Japan \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Toyoko Inn Hotels in Japan,Toyoko Inn, Cheap hotels in japan  ,Where to Stay in Japan, Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/tokykocar.avif\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/hotels.php?chain=toyokoinn&maptype=hotel\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=34561234567819;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Toyoko Inn Hotels in Japan</title>";

    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);


}
if($scritptname == 'routeinn.php') {
    $partdescription="Route Inn  Hotels Japan , a list of Route Inn Hotels in Japan  ";
    $part2 = "
<meta name=\"description\" content=\"Route Inn Hotels Japan , a list of Route Inn Hotels in Japan \">
<meta name=\"keywords\" content=\"Trains,Railymap  heat of Japan to discoer all the raily line in Japan and the 10300 odd stations\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">


<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456781;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Route Inn Hotels Japan</title>";
    $part6a=str_replace($repalace,'',$part6);


}

if($scritptname == 'onyada.php') {
    $partdescription="Onyado  Hotels Japan , a list of Onyado Hotels in Japan  and a map of Onyado Hotels in Japan with directions from your location in Japan ";

    $part2 = "
<meta name=\"description\" content=\"Onyado  Hotels Japan , a list of Onyado Hotels in Japan  and a map of Onyado Hotels in Japan with directions from your location in Japan \">
<meta name=\"keywords\" content=\"Onyado Hotels\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">


<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456781;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Onyado Hotels Japan</title>";
    $part6a=str_replace($repalace,'',$part6);

}
if($scritptname == 'hoshino.php') {
    $partdescription="Hoshino  Hotels Japan , a list of Hoshino Hotels in Japan  and a map of v Hotels in Japan with directions from your location in Japan ";

    $part2 = "
<meta name=\"description\" content=\"Hoshino  Hotels Japan , a list of Hoshino Hotels in Japan  and a map of Hotels in Japan with directions from your location in Japan \">
<meta name=\"keywords\" content=\"Hoshino Hotel\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">


<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456781;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Hoshino Hotels Japan</title>";
    $part6a=str_replace($repalace,'',$part6);

}
if($scritptname == 'exchangerates.php') {
    $partdescription="Calculate Yen daily exchange rates";
    $part2 = "
<meta name=\"description\" content=\"Calculate Yen daily exchange rates\">
<meta name=\"keywords\" content=\"Japanese exchange rates,Calculate Yen daily exchange rates, Yen exchange rates\">";
$part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456781;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Calculate Yen daily exchange rates</title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);



}

if($scritptname == 'index.php') {
$partdescription="A simple guide for exploring Japan and going off the beaten track of tourist trails with lots of maps with interesting places .";
$part2 = "
<meta name=\"description\" content=\"A simple guide for exploring Japan and going off the beaten track of tourist trails with lots of maps with interesting places \">
<meta name=\"keywords\" content=\"Exploring Japan \">";
 $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">
<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">
<meta property=\"og:site_name\" content=\"Explore Japan\">";
    $part6 = "<title>Explore Japan</title>";

   $part8="
 <link rel=\"canonical\" href=\"https://botoishi.com.au/\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\"  href=\"https://botoishi.com.au/\">";

}


if($scritptname == 'traveling.php') {
$partdescription="Trains, trains and more trains .  Not the only way to travel in Japan but definitely the most effecient and enjoyable.";
    $part2 = "
<meta name=\"description\" content=\" Trains, trains and more trains .  Not the only way to travel in Japan but definitely the most effecient and enjoyable.\">
<meta name=\"keywords\" content=\"Exploring Japan \">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">
<meta property=\"og:site_name\" content=\"Explore Japan\">";
    $part6 = "<title>A guide to traveling and exploring Japan</title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);
    $partdescription=" Trains, trains and more trains .  Not the only way to travel in Japan but definitely the most effecient and enjoyable.";
    $part8="";

    $randomid=3456123456782;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";


}


if($scritptname == 'accomodation.php') {
    $partdescription="Where to Stay in Japan , sleeep and  eat in Japan , from hotels, ryokans and guest houses , and chain hotels";
    $part2 = "
<meta name=\"description\" content=\"Where to Stay in Japan , sleeep and  eat in Japan , from hotels, ryokans and guest houses , and chain hotels\">
<meta name=\"keywords\" content=\"Where to stay in Japan\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/accomodation.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456784;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>where to stay in Japan</title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);



}


########HERERERERERE
##https://botoishi.com.au/".$_SERVER['PHP_SELF'] .".php
if($scritptname == 'gettingby.php') {
    $partdescription="Travels tips forJapan , just some helpful hints that might help out a bit";
    $part2 = "
<meta name=\"description\" content=\"Travels tips forJapan , just some helpful hints that might help out a bit\">
<meta name=\"keywords\" content=\"Travels tips for  Japan\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=3456123456785;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>A guide to traveling and exploring Japan</title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);


}
if($scritptname == 'myforum.php') {
    $partdescription=" Forum for traveling in Japan  , ask questions on traveling in Japan";
    $part2 = "
<meta name=\"description\" content=\" Forum for traveling in Japan  , ask questions on traveling in Japan \">
<meta name=\"keywords\" content=\Japan Travel Forum, Explore Japan Forum, Japan Holidays Forum ,Japan Information Forum\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456786;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Japan Travel Forum</title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);



}

if($scritptname == 'minshinkumap.php') {
    $partdescription="Guest House Japan , a list of Guest House in Japan  and a map of Guest House in Japan with directions from your location in Japan ";

    $part2 = "
<meta name=\"description\" content=\"Guest House Japan , a list of Guest House in Japan  and a map of Guest House in Japan with directions from your location in Japan \">
<meta name=\"keywords\" content=\" Guest House  Japan,Guest House , Where to Stay in Japan, Cheap hotels in japan , Cheap accomodation in japan , Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/minshinkumap.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=34561234567826;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Guest Houses in Japan</title>";
    $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/minshinkumap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/minshinkumap.php\">";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);

}


if($scritptname == 'minshinku.php') {
    $partdescription="Guest House Japan , a list and   map  of Guest House in Japan";
    $part2 = "
<meta name=\"description\" content=\"Guest House Japan , a list and   map  of Guest House in Japan\">
<meta name=\"keywords\" content=\" Guest House  Japan,Guest House , Where to Stay in Japan, Cheap hotels in japan , Cheap accomodation in japan , Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/minshinkumap.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=34561234567826;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Guest Houses in Japan</title>";

    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);


}
if($scritptname == 'touristinfo.php') {
    $partdescription="Tourist Information Centers in Japan , the best place to get tourist information , free wifi and late bookings to hotels";
    $part2 = "
<meta name=\"description\" content=\"Tourist Information Centers in Japan , the best place to get tourist information , free wifi and late bookings to hotels \">
<meta name=\"keywords\" content=\"Tourist Information Centers in Japan\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456787;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title> Tourist Information Centers in Japan</title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);

    $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/touristinfo.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\"  href=\"https://botoishi.com.au/touristinfo.php\">";

}
if($scritptname == 'hariya.php') {
    $partdescription="Where to eat  the Best Udon in Takamatsu  and probably in Japan";
    $part2 = "
<meta name=\"description\" content=\"Where to eat  the Best Udon in Takamatsu  and probably in Japan  \">
<meta name=\"keywords\" content=\"The Best udon in Japan\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456788;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title> Best Udon in Japan</title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);



}




if($scritptname == 'infocenter.php') {
    $partdescription="Tourist Information Centers in Japan , the best place to get tourist information , free wifi and late bookings to hotels";

    $part2 = "
<meta name=\"description\" content=\"Tourist Information Centers in Japan , the best place to get tourist information , free wifi and late bookings to hotels \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Tourist Information Centers in Japan  ,Japan Information Centers ,TIC Japan  ,Japan Travel \">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456789;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title> Tourist Information Centers in Japan</title>";
    $part6a=str_replace($repalace,'',$part6);
    $repalace=array("<title>","</title>");

}
if($scritptname == 'prefecture.php') {
    $partdescription="Prefectures in Japan , a map of Japan with prefectures laid out for eay understanding";
    $part2 = "
<meta name=\"description\" content=\"Prefectures in Japan , a map of Japan with prefectures laid out for eay understanding    \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Japan Prefecture   ,Japan Prefectures ,Prefectures in Japan, Japan Traveling Prefectures\ \">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=34561234567810;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title> Japan Prefectures</title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);

    $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/prefecture.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\"  href=\"https://botoishi.com.au/prefecture.php\">";

}
if($scritptname == 'icards.php') {
    $partdescription="IC Cards  in Japan , The use and purchase Transport cards in Japan , for traveling and snacks ";
    $part2 = "
<meta name=\"description\" content=\"IC Cards Japan , The use and purchase Transport cards in Japan , for traveling and snacks \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, IC Cards Japan  ,Japan Travel  Cards ,trains, Japan Train Cards, Japan Private Railways \">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=34561234567811;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>IC Cards in Japan</title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);


}

if($scritptname == 'things.php') {
    $partdescription="Things to do in Japan  , places to go in Japan , Hiking in Japan , Off the beaten track in Japan";
    $part2 = "
<meta name=\"description\" content=\"Things to do in Japan  , places to go in Japan , Hiking in Japan , Off the beaten track in Japan \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Things to do in  Japan  ,Japan Travel  ,trains, Japan expolration, Japan travel, Japan haikyo \">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $part6 = "<title>Things to do in Japan</title>";
    $part6a=str_replace($repalace,'',$part6);
    $repalace=array("<title>","</title>");


}




if($scritptname == 'ramen.php') {
    $partdescription="Katsu Ramen Wollongong Style";
    $part2 = "
<meta name=\"description\" content=\"Katsu Ramen Wollongong Style\">
<meta name=\"keywords\" content=\"Katsu Ramen Wollongong Style\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $part6 = "<title>Katsu Ramen Recipe</title>";
    $part6a=str_replace($repalace,'',$part6);
    $repalace=array("<title>","</title>");


}

if($scritptname == 'stations.php') {
    if(substr_count($parameters,"location")>0) {
        $partdescription = "A map of all the train stations in Japan ,with the closest hotels and directions from your location ";
        $part2 = "
<meta name=\"description\" content=\"A map of all the train stations in Japan ,with the closest hotels and directions from your location  \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Railway Stations in Japan  ,Train Station, Railway Station ,Trains , Japan Fast Trains,Japan \">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/" . $_SERVER['PHP_SELF'] . ".php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid = 34561234567812;
        $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
        $part6 = "<title>Map ofTrain Stations in Japan</title>";
        $repalace = array("<title>", "</title>");
        $part6a = str_replace($repalace, '', $part6);

        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/stations.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/stations.php\">";


    }
    else {
        $partdescription = "A map of all the train stations in Japan ,with the closest hotels and directions from your location ";
        $part2 = "
<meta name=\"description\" content=\"A map of all the train stations in Japan ,with the closest hotels and directions from your location  \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Railway Stations in Japan  ,Train Station, Railway Station ,Trains , Japan Fast Trains,Japan \">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/" . $_SERVER['PHP_SELF'] . ".php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid = 34561234567812;
        $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
        $part6 = "<title>Map ofTrain Stations in Japan</title>";
        $repalace = array("<title>", "</title>");
        $part6a = str_replace($repalace, '', $part6);

        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/stations.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/stations.php\">";


    }
}
if($scritptname == 'jrpass.php') {
    $partdescription="JR Pass Japan ,  How to buy and exchange  a Japan Rail Pass  ";
    $part2 = "
<meta name=\"description\" content=\"JR Pass Japan ,  How to buy and exchange  a Japan Rail Pass  \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, JR Pass Japan  ,Japan   trains, Japan Shinkansen , Japan Railways ,Trains , Japan Fast Trains,Japan \">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
       $randomid=34561234567813;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>JR Pass in Japan</title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);


}
if($scritptname == 'exchange.php') {
    $partdescription="How to exchange your JR Pass in Japan including a list of locations that will do the exchange";
    $part2 = "
<meta name=\"description\" content=\"How to exchange your JR Pass in Japan including a list of locations that will do the exchange\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Exchange your JR Pass in Japan  ,Japan  Rail Pass Exchange ,Japan   trains, Japan Shinkansen , Japan Railways ,Trains , Japan Fast Trains,Japan \">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=34561234567814;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Exchange your JR Pass in Japan</title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);


}
if($scritptname == 'shinkansen.php') {
    $partdescription="Shinkansen trains in Japan , A list of all the shinkansen  trains and routes with maps and directions";
    $part2 = "
<meta name=\"description\" content=\"  Shinkansen trains in Japan , A list of all the shinkansen  trains and routes and directions  and directions\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Shinkansen  Japan  ,Shinkansen, Japan Fast Trains,Japan \">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
      $randomid=34561234567815;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Shinkansen Trains in Japan</title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);


}
if($scritptname == 'barsilence.php') {
    $partdescription="A Small Bar  in Tottori, the quitesential Japanese small bar ";
    $part2 = "
<meta name=\"description\" content=\"A Small Bar  in Tottori, the quitesential Japanese small bar \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Shinkansen  Japan  ,Shinkansen, Japan Fast Trains,Japan \">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";

    $randomid=3456123456716;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>B A R silence</title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);


}
if($scritptname == 'aboutus.php') {
    $partdescription="About Us";

    $part2 = "
<meta name=\"description\" content=\"Explore Japan-  About Us  \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Explore Japan , Travel in Japan s,Japan \">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456717;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>About Us</title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);


}
if($scritptname == 'businesshotels.php') {
    $partdescription="Business Hotels in Japan , affordable hotels in Japan";
    $part2 = "
<meta name=\"description\" content=\"Business Hotels in Japan, affordable hotels in Japa\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Where to Stay in Japan, Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/businesshotels.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/businesshotels.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/businesshotels.php\">";
    $randomid=34561234567818;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Business Hotels in Japan</title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);



}


if($scritptname == 'searchme.php') {
    $partdescription="Search Explore Japan";
    $part2 = "
<meta name=\"description\" content=\"Search Explore Japan\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Where to Stay in Japan, Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/businesshotels.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=34561234567818;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Search Explore Japan</title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);



}
if($scritptname == 'hotels.php') {

    if(substr_count($parameters,"princehotels")>0){
        $part2 = "
<meta name=\"description\" content=\"Prince Hotels Japan , a list of Prince Hotels in Japan  and a map of Prince Hotels in Japan with directions from your location in Japan \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Toyoko Inn Hotels in Japan,Toyoko Inn, Cheap hotels in japan  ,Where to Stay in Japan, Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/hotels.php\">
<meta property=\"og:title\" content=\" Holidays in Japan, Travel In Japan, Toyoko Inn Hotels in Japan,Toyoko Inn<\">
<meta name=\"og:description\" content=\"Prince Hotels Japan , a list of Prince Hotels in Japan  and a map of Prince Hotels in Japan with directions from your location in Japan \">";
        $randomid=34561234567819;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";

        $part6 = "<title>Prince Hotels in Japan</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/hotels.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/hotels.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);
        $partdescription="Prince Hotels Japan , a list of Prince Hotels in Japan  and a map of Prince Hotels in Japan with directions from your location in Japan ";

    }

    if(substr_count($parameters,"chain")>0){
        $part2 = "
<meta name=\"description\" content=\" Hotels Japan , a list of Hotels in Japan  and a map of Hotels in Japan with directions from your location in Japan \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Toyoko Inn Hotels in Japan,Toyoko Inn, Cheap hotels in japan  ,Where to Stay in Japan, Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/hotels.php\">
<meta property=\"og:title\" content=\" Holidays in Japan, Travel In Japan, Toyoko Inn Hotels in Japan,Toyoko Inn<\">
<meta name=\"og:description\" content=\"Hotels Japan , a list of Hotels in Japan  and a map of Hotels in Japan with directions from your location in Japan \">";
        $randomid=34561234567819;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Hotels in Japan</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/hotels.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/hotels.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);
        $partdescription="Hotels Japan , a list of Hotels in Japan  and a map of Hotels in Japan with directions from your location in Japan ";

    }


    if(substr_count($parameters,"island")>0){
        $part2 = "
<meta name=\"description\" content=\"Hotels Japan , a list of Hotels in Japan  and a map of Hotels in Japan with directions from your location in Japan \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Toyoko Inn Hotels in Japan,Toyoko Inn, Cheap hotels in japan  ,Where to Stay in Japan, Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/hotels.php\">
<meta property=\"og:title\" content=\" Holidays in Japan, Travel In Japan, Toyoko Inn Hotels in Japan,Toyoko Inn<\">
<meta name=\"og:description\" content=\"Hotels Japan , a list of Hotels in Japan  and a map of Hotels in Japan with directions from your location in Japan \">";
        $randomid=34561234567819;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Hotels in Japan</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/hotels.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/hotels.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);
        $partdescription="Hotels Japan , a list of Hotels in Japan  and a map of Hotels in Japan with directions from your location in Japan ";


    }

    if(substr_count($parameters,"apahotels")>0){
        $part2 = "
<meta name=\"description\" content=\"APA Hotels Japan , a list of APA Hotels in Japan  and a map of APA Hotels in Japan with directions from your location in Japan \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Toyoko Inn Hotels in Japan,Toyoko Inn, Cheap hotels in japan  ,Where to Stay in Japan, Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/hotels.php?chain=toyokoinn&maptype=hotel\">
<meta property=\"og:title\" content=\" Holidays in Japan, Travel In Japan, Toyoko Inn Hotels in Japan,Toyoko Inn<\">
<meta name=\"og:description\" content=\"APA Hotels Japan , a list of APA Hotels in Japan  and a map of APA Hotels in Japan with directions from your location in Japan \">";
        $randomid=34561234567819;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>APA Hotels in Japan</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/hotels.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/hotels.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);
        $partdescription="APA Hotels Japan , a list of APA Hotels in Japan  and a map of APA Hotels in Japan with directions from your location in Japan ";

    }
    if(substr_count($parameters,"toyokoinn")>0){
        $part2 = "
<meta name=\"description\" content=\"Toyoko Inn Hotels Japan ,  a list and map  of Toyoko Inn Hotels in Japan \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Toyoko Inn Hotels in Japan,Toyoko Inn, Cheap hotels in japan  ,Where to Stay in Japan, Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/hotels.php?chain=toyokoinn&maptype=hotel\">
<meta property=\"og:title\" content=\" Holidays in Japan, Travel In Japan, Toyoko Inn Hotels in Japan,Toyoko Inn<\">
<meta name=\"og:description\" content=\"Toyoko Inn Hotels Japan , a list and map  of Toyoko Inn Hotels in Japan \">";
        $randomid=34561234567819;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Toyoko Inn Hotels in Japan</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/hotels.php\" >
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/hotels.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);
        $partdescription="Toyoko Inn Hotels Japan , a list and map  of Toyoko Inn Hotels in Japan";

    }
    elseif(substr_count($parameters,"superhotel")>0) {
        $part2 = "
<meta name=\"description\" content=\"Super Hotel Japan , a list and map of Super Hotel in Japan  \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Super Hotel Hotels in Japan,Super Hotel, Cheap hotels in japan  ,Where to Stay in Japan, Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/hotels.php?chain=superhotel&maptype=hotel\">
<meta property=\"og:title\" content=\" Holidays in Japan, Travel In Japan, Super Hotel Hotels in Japan,Super Hotel<\">
<meta name=\"og:description\" content=\"Super Hotel Japan, a list and map of Super Hotel in Japan \">";
        $randomid=3456123456789;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Super Hotel in Japan</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/hotels.php\" >
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/hotels.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);
        $partdescription="Super Hotel Japan , a list and map of Super Hotel in Japan ";
      }


    elseif(substr_count($parameters,"dormyinn")>0) {
        $part2 = "
<meta name=\"description\" content=\"Dormy Inn  Hotels Japan , a list of Dormy Inn  Hotels in Japan  and a map of Dormy Inn  Hotels in Japan with directions from your location in Japan \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Dormy Inn  Hotels  in Japan,Dormy Inn , Cheap hotels in japan  ,Where to Stay in Japan, Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/hotels.php?chain=dormyinn\">
<meta property=\"og:title\" content=\" Holidays in Japan, Travel In Japan, Dormy Inn Hotels in Japan,Dormy Inn<\">
<meta name=\"og:description\" content=\"Dormy Inn  Hotels Japan , a list of Dormy Inn  Hotels in Japan  and a map of Dormy Inn  Hotels in Japan with directions from your location in Japan \">";
        $randomid=34561234567820;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Dormy Inn  in Japan</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/hotels.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/hotels.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);
        $partdescription="Dormy Inn  Hotels Japan , a list of Dormy Inn  Hotels in Japan  and a map of Dormy Inn  Hotels in Japan with directions from your location in Japan ";
      }

    elseif(substr_count($parameters,"routeinn")>0) {
        $part2 = "
<meta name=\"description\" content=\"Route Inn  Hotels Japan , a list of Route Inn  Hotels in Japan  and a map of Route Inn  Hotels in Japan with directions from your location in Japan \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Route Inn  Hotels  in Japan,Route Inn , Cheap hotels in japan  ,Where to Stay in Japan, Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/hotels.php?chain=routeinn\">
<meta property=\"og:title\" content=\" Holidays in Japan, Travel In Japan, Route Inn Hotels in Japan,Route Inn<\">
<meta name=\"og:description\" content=\"Route Inn  Hotels Japan , a list of Route Inn  Hotels in Japan  and a map of Route Inn  Hotels in Japan with directions from your location in Japan \">";
        $randomid=34561234567821;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Route Inn  in Japan</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/hotels.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/hotels.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);
        $partdescription="Route Inn  Hotels Japan , a list of Route Inn  Hotels in Japan  and a map of Route Inn  Hotels in Japan with directions from your location in Japan ";

    }

    elseif(substr_count($parameters,"candeo")>0) {
        $part2 = "
<meta name=\"description\" content=\"Candeo Hotels Japan , a list of Candeo Hotels in Japan  and a map of Candeo Hotels in Japan with directions from your location in Japan \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Route Inn  Hotels  in Japan,Route Inn , Cheap hotels in japan  ,Where to Stay in Japan, Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/hotels.php?chain=candeo\">
<meta property=\"og:title\" content=\" Holidays in Japan, Travel In Japan, Candeo Hotels in Japan,Candeo Hotels<\">
<meta name=\"og:description\" content=\"Candeo Hotels Japan , a list of Candeo Hotels in Japan  and a map of Candeo Hotels in Japan with directions from your location in Japan\">";
        $randomid=34561234567822;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Candeo Hotels  in Japan</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/hotels.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/hotels.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);
        $partdescription="Candeo Hotels Japan , a list of Candeo Hotels in Japan  and a map of Candeo Hotels in Japan with directions from your location in Japan";

    }
    elseif(substr_count($parameters,"grantia")>0) {
        $part2 = "
<meta name=\"description\" content=\"Grantia Hotels Japan , a list of Grantia Hotels in Japan  and a map of Grantia Hotels in Japan with directions from your location in Japan\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Grantia   Hotels  in Japan,Grantia Hotels  , Where to Stay in Japan, Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/hotels.php?chain=grantia\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=34561234567823;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Grantia Hotels  in Japan</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/hotels.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/hotels.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);
        $partdescription="Grantia Hotels Japan , a list of Grantia Hotels in Japan  and a map of Grantia Hotels in Japan with directions from your location in Japan";

    }
    elseif(substr_count($parameters,"onyado")>0) {
        $part2 = "
<meta name=\"description\" content=\"v\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Onyado   Hotels  in Japan,Onyado Hotels  , Where to Stay in Japan, Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/hotels.php?chain=onyado\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=34561234567824;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Onyado Hotels  in Japan</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/hotels.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/hotels.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);
        $partdescription="Onyado Hotels Japan , a list of Onyado Hotels in Japan  and a map of Onyado Hotels in Japan with directions from your location in Japan";

    }

    elseif(substr_count($parameters,"Guest House")>0) {
        $part2 = "
<meta name=\"description\" content=\"Guest Houses  Japan , a list of Guest Houses  in Japan  and a map of Guest Houses in Japan with directions from your location in Japan \">
<meta name=\"keywords\" content=\" Guest House  Japan,Guest House , Where to Stay in Japan, Cheap hotels in japan , Cheap accomodation in japan , Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/hotels.php?chain=Guest House\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=34561234567826;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Guest House in Japan</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/hotels.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/hotels.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);
        $partdescription="Guest Houses  Japan , a list of Guest Houses  in Japan  and a map of Guest Houses in Japan with directions from your location in Japan ";

    }

    elseif(substr_count($parameters,"others")>0) {
        $part2 = "
<meta name=\"description\" content=\"Hotels in  Japan , a list of Hotels in Japan  and a map of Hotels in Japan with directions from your location in Japan \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Hotels in Japan , Where to Stay in Japan, Cheap hotels in japan , Cheap accomodation in japan , Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/hotels.php?chain=others\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=34561234567827;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Hotels in Japan </title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/hotels.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/hotels.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);
        $partdescription="Hotels in  Japan , a list of Hotels in Japan  and a map of Hotels in Japan with directions from your location in Japan ";

    }
    elseif(substr_count($parameters,"ryokan")>0) {
        $part2 = "
<meta name=\"description\" content=\"Ryokans in  Japan , a list of Ryokans in Japan  and a map of Ryokans in Japan with directions from your location in Japan \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Ryokans in Japan, Where to Stay in Japan, The Best  hotels in japan , , Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/hotels.php?chain=ryokan\">
<meta property=\"og:title\" content=\" Holidays in Japan, Travel In Japan, Ryokans in Japan <\">
<meta name=\"og:description\" content=\"Ryokans in  Japan , a list of Ryokans in Japan  and a map of Ryokans in Japan with directions from your location in Japan \">";
        $randomid=345612345678282;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Ryokans in Japan </title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/hotels.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/hotels.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);
        $partdescription="Ryokans in  Japan , a list of Ryokans in Japan  and a map of Ryokans in Japan with directions from your location in Japan";

    }
    elseif(substr_count($parameters,"island")>0) {
        $part2 = "
<meta name=\"description\" content=\"Hotels in  Japan , a list of Hotels in Japan  and a map of Hotels in Japan with directions from your location in Japan\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Ryokans in Japan, Where to Stay in Japan, The Best  hotels in japan , , Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/hotels.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";        $randomid=345612345678282;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Ryokans in Japan </title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/hotels.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/hotels.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);
        $partdescription="Hotels in  Japan , a list of Hotels in Japan  and a map of Hotels in Japan with directions from your location in Japan";

    }
    else {
        $part2 = "
<meta name=\"description\" content=\"Hotels in  Japan , a list of Hotels in Japan  and a map of Hotels in Japan with directions from your location in Japan\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Japan Hotel Map, Where to Stay in Japan,hotels in japan , , Accomodation  in Japan, Hotels in Japan, Japan Accomodation\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/hotels.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";        $randomid=3456123456789;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Japan Hotel Map</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/hotels.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/hotels.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);
        $partdescription="Hotels in  Japan , a list of Hotels in Japan  and a map of Hotels in Japan with directions from your location in Japan";

    }

}


if($scritptname == 'hotelsmap.php') {
    $partdescription="Hotels in  Japan , a list of Hotels in Japan  and a map of Hotels in Japan with directions from your location in Japan";

    $part2 = "
<meta name=\"description\" content=\"Hotels in  Japan , a list of Hotels in Japan  and a map of Hotels in Japan with directions from your location in Japan\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Japan Hotel Map, Where to Stay in Japan,hotels in japan , , Accomodation  in Japan, Hotels in Japan, Japan Accomodation , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/hotels.php?chain=ryokan\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";    $randomid=34561234567829;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Japan Hotel Map   </title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);

     $part8="   <link rel=\"canonical\" href=\"https://botoishi.com.au/hotelsmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/hotelsmap.php\">";

}




if($scritptname == 'fullmap.php'   ) {
    $partdescription="Map of interesting places in Japan , of locations that are out of the way ( and some not so much )";
    $part2 = "
<meta name=\"description\" content=\"Map of interesting places in Japan , of locations that are out of the way ( and some not so much )\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Japan Map,Map of Japan, Map of Japan with directions , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip \">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/fullmap.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=34561234567831;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Interesting Destinations</title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);

    $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/fullmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/fullmap.php\">";


}

if( $scritptname == 'map.php' ) {
    $partdescription="Map of interesting places in Japan , of locations that are out of the way ( and some not so much )";
    $part2 = "
<meta name=\"description\" content=\"Map of interesting places in Japan , of locations that are out of the way ( and some not so much )\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Japan Map,Map of Japan, Map of Japan with directions  , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/fullmap.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=34561234567831;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Map</title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);

    $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/map.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/map.php\">";


}




if($scritptname == 'passtations.php') {
    $partdescription="Japan Rail Pass Exchange Stations , a list of places to exchange your JR Coupon to JR Pass";

    $part2 = "
<meta name=\"description\" content=\"Japan Rail Pass Exchange Stations , a list of places to exchange your JR Coupon to JR Pass\">
<meta name=\"keywords\" content=\"Japan Rail Pass Exchange Stations,Holidays in Japan, Travel In Japan, Japan Map,Map of Japan, Map of Japan with directions , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip \">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passtations.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=34561234567831;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Japan Rail Pass Exchange Staions </title>";
    $repalace=array("<title>","</title>");
    $part6a=str_replace($repalace,'',$part6);




}
if($scritptname == 'passmap.php'){



    if(substr_count($parameters,"pass=1")>0) {
        $partdescription = "JR National Rail Pass";
        $part2 = "
<meta name=\"description\" content=\"JR National  Rail Pass \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, JR National  Pass,JR  Pass, JR rail,JR  train,JR ticket , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=1\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid = 34561234567832;
        $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
        $part6 = "<title>JR National  Pass</title>";
        $repalace=array("<title>","</title>");
        $part6a = str_replace($repalace, '', $part6);


    }

    if(substr_count($parameters,"pass=2")>0){
        $partdescription="JR  Pass for  Sapporo-Noboribetsu in Hokkaido  , Sapporo-Noboribetsu Area  Rail Pass";
        $part2 = "
<meta name=\"description\" content=\"JR  Pass for  Sapporo-Noboribetsu in Hokkaido  , Sapporo-Noboribetsu Area  Rail Pass \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Sapporo, Noboribetsu Area,JR  Pass, JR rail,JR  train,JR ticket,JR Hokkaido , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=2&island=hokkaido\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=34561234567833;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>JR Hokkaido Sapporo-Noboribetsu Area Pass</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);



    }
    if(substr_count($parameters,"pass=3")>0){
        $partdescription="JR  Pass for  Sapporo-Furano Area in Hokkaido  , Sapporo-Furano Area Rail Pass";
        $part2 = "
<meta name=\"description\" content=\"JR  Pass for  Sapporo-Furano Area in Hokkaido  , Sapporo-Furano Area Rail Pass\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Sapporo-Furano Area ,JR  Pass, JR rail,JR  train,JR ticket,JR Hokkaido , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">
<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=3&island=hokkaido\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=34561234567834;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>JR  Sapporo-Furano Area Pass</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);

    }
    if(substr_count($parameters,"pass=8")>0){
        $partdescription="JR  Pass for  Ise - Kumano - Wakayama on Honshu  , Ise - Kumano - Wakayama Area Tourist  Rail Pass";
        $part2 = "

<meta name=\"description\" content=\"JR  Pass for  Ise - Kumano - Wakayama on Honshu  , Ise - Kumano - Wakayama Area Tourist  Rail Pass \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Ise  Kumano Wakayama Area ,JR  Pass, JR rail,JR  train,JR ticket,JR Central , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=8&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=34561234567835;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>JR Ise - Kumano - Wakayama Area Tourist  Area Pass</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $part6a=str_replace($repalace,'',$part6);
        $repalace=array("<title>","</title>");

    }
    if(substr_count($parameters,"pass=5")>0){
        $partdescription="All Hokkaindo  Area  Rail Pass ";
        $part2 = "
<meta name=\"description\" content=\"All Hokkaindo  Area  Rail Pass \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan,  Hokkaindo Pass ,JR  Pass, JR rail,JR  train,JR ticket,JR Hokkaido , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=5&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $part6 = "<title>All Hokkaindo  Area Pass</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);

    }
    if(substr_count($parameters,"pass=9")>0){
        $partdescription="JR  Pass for  Mt Fuji - Shizuoka on Honshu  , Mt Fuji - Shizuoka Area Tourist  Rail Pass ";
        $part2 = "
<meta name=\"description\" content=\" JR  Pass for  Mt Fuji - Shizuoka on Honshu  , Mt Fuji - Shizuoka Area Tourist  Rail Pass\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan,  Mt Fuji - Shizuoka ,JR  Pass, JR rail,JR  train,JR ticket,JR Central , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=9&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=34561234567826;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Mt Fuji - Shizuoka Area Tourist Pass</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\"> 
         <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);

    }

    if(substr_count($parameters,"pass=10")>0){
        $partdescription="JR  Pass for  Nagano-Niigata Pass on Honshu  , Nagano-Niigata Rail Pass";
        $part2 = "

<meta name=\"description\" content=\"JR  Pass for  Nagano-Niigata Pass on Honshu  , Nagano-Niigata  Rail Pass\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan,  Nagano-Niigata Pass ,JR  Pass, JR rail,JR  train,JR ticket,JR East , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=10&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=34561234567837;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Nagano-Niigata Pass Pass</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
            <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);

    }
    if(substr_count($parameters,"pass=11")>0){

        $partdescription="JR  Pass for  South Hokkaido and Honshu  ,JR East South Hokkaido Pass";

        $part2 = "

<meta name=\"description\" content=\"JR  Pass for  South Hokkaido and Honshu  ,JR East South Hokkaido Pass\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, JR East South Hokkaido  Pass ,JR  Pass, JR rail,JR  train,JR ticket,JR East , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=11&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=345612345678296;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>JR East South Hokkaido  Passs</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);


    }
    if(substr_count($parameters,"pass=4")>0){
        $partdescription="JR West All Area on Honshu  ,JR West All Area Pass";
        $part2 = "

<meta name=\"description\" content=\"JR West All Area on Honshu  ,JR West All Area Pass\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, JR West All Area Passs ,JR  Pass, JR rail,JR  train,JR ticket,JR West , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=4&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=34561234567839;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>JR West All Area Pass</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
            <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);


    }
    if(substr_count($parameters,"pass=14")>0){
        $partdescription="Tokyo-Osaka Hokuriku Arch on Honshu  ,Tokyo-Osaka Hokuriku Arch Area  Rail Pass";
        $part2 = "

<meta name=\"description\" content=\"Tokyo-Osaka Hokuriku Arch on Honshu  ,Tokyo-Osaka Hokuriku Arch Area  Rail Pass \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Tokyo-Osaka Hokuriku Arch Area Pass ,JR  Pass, JR rail,JR  train,JR ticket,JR West , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=14&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=34561234567840;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Tokyo-Osaka Hokuriku Arch Area Pass</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);


    }
    if(substr_count($parameters,"pass=12")>0){
        $partdescription="Hokuriku Area Rail Pass on Honshu  ,Hokuriku Area Rail Passs";
        $part2 = "

<meta name=\"description\" content=\"Hokuriku Area Rail Pass on Honshu  ,Hokuriku Area Rail Passs \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Hokuriku Area  Pass ,JR  Pass, JR rail,JR  train,JR ticket,JR West , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=12&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=34561234567841;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Hokuriku Area Pass</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);


    }
    if(substr_count($parameters,"pass=15")>0){
        $partdescription="Okayama Hiroshima Yamaguchi Area Pass on Honshu  ,Okayama Hiroshima Yamaguchi Area Rail Pass";
        $part2 = "

<meta name=\"description\" content=\"Okayama Hiroshima Yamaguchi Area Pass on Honshu  ,Okayama Hiroshima Yamaguchi Area Rail Pass \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Okayama Hiroshima Yamaguchi Area ,JR  Pass, JR rail,JR  train,JR ticket,JR West , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=12&island=honshu\">
<meta property=\"og:title\" content=\" Holidays in Japan, Travel In Japan, Okayama Hiroshima Yamaguchi Area Pass\">
<meta name=\"og:description\" content=\"Okayama Hiroshima Yamaguchi Area Pass on Honshu  ,Okayama Hiroshima Yamaguchi Area Rail Pass\">";
        $randomid=34561234567842;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Okayama Hiroshima Yamaguchi Area Pass </title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);


    }



    if(substr_count($parameters,"pass=16")>0){
        $partdescription="Sanyo San-in Area Rail Pass on Honshu  ,Sanyo San-in Area Rail Pass";
        $part2 = "

<meta name=\"description\" content=\" Sanyo San-in Area Rail Pass on Honshu  ,Sanyo San-in Area Rail Pass\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan,  Sanyo San-in Area  Pass  ,JR  Pass, JR rail,JR  train,JR ticket,JR West , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=16&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=34561234567843;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Sanyo San-in Area  Pass </title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);


    }
    if(substr_count($parameters,"pass=17")>0){
        $partdescription="Setouchi Area Rail Pass on Honshu  ,Setouchi Area Rail Pass";
        $part2 = "

<meta name=\"description\" content=\" Setouchi Area Rail Pass on Honshu  ,Setouchi Area Rail Pass \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan,  Setouchi Area Pass  ,JR  Pass, JR rail,JR  train,JR ticket,JR West , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=17&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=34561234567844;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Setouchi Area Pass</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);


    }

    if(substr_count($parameters,"pass=18")>0){
        $partdescription="Kansai San-in on Honshu  ,Kansai San-in Rail Pass ";
        $part2 = "

<meta name=\"description\" content=\"Kansai San-in on Honshu  ,Kansai San-in Rail Pass \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Kansai San-in Area Pass ,JR  Pass, JR rail,JR  train,JR ticket,JR West , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=18&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=34561234567845;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Kansai San-in Area Pass</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);


    }

    if(substr_count($parameters,"pass=19")>0){
        $partdescription="Kansai Mini  Rail Pass  on Honshu  ,Kansai Mini  Rail Pass ";
        $part2 = "

<meta name=\"description\" content=\"Kansai Mini  Rail Pass  on Honshu  ,Kansai Mini  Rail Pass \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Kansai Mini  Pass ,JR  Pass, JR rail,JR  train,JR ticket,JR West , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=19&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=34561234567846;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Kansai Mini  Pass</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);


    }
    if(substr_count($parameters,"pass=20")>0){
        $partdescription="Kansai Hiroshima Rail Pass  on Honshu  ,Kansai Hiroshima Rail Pass ";
        $part2 = "
<meta name=\"description\" content=\"Kansai Hiroshima Rail Pass  on Honshu  ,Kansai Hiroshima Rail Pass \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Kansai Mini  Pass ,JR  Pass, JR rail,JR  train,JR ticket,JR West , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=20&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
            $randomid=34561234567847;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Kansai Hiroshima Area  Pass </title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);

    }

    if(substr_count($parameters,"pass=21")>0){
        $partdescription="Hiroshima Yamaguchi Area Rail Pass  on Honshu  ,Hiroshima Yamaguchi Rail Pass";
        $part2 = "

<meta name=\"description\" content=\"Hiroshima Yamaguchi Area Rail Pass on Honshu  ,Hiroshima Yamaguchi Rail Pass \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Hiroshima Yamaguchi Area   Pass ,JR  Pass, JR rail,JR  train,JR ticket,JR West , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=21&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=34561234567848;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Hiroshima Yamaguchi Area  Pass</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);


    }


    if(substr_count($parameters,"pass=22")>0){
        $partdescription="All Shikoku Rail Pass on Shikoku  ,All Shikoku Rail Pass";
        $part2 = "
 
<meta name=\"description\" content=\"All Shikoku Rail Pass on Shikoku  ,All Shikoku Rail Pass\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan,   All Shikoku Pass ,JR  Pass, JR rail,JR  train,JR ticket,JR Shikoku , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip \">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=22&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=34561234567849;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title> All Shikoku Pass Pass</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);


    }

    if(substr_count($parameters,"pass=23")>0){
        $partdescription="Kagawa Mini Rail & Ferry  Rail Pass  on Shikoku  ,Kagawa Mini Rail & Ferry  Rail Pass";
        $part2 = "
 
<meta name=\"description\" content=\"Kagawa Mini Rail & Ferry  Rail Pass  on Shikoku  ,Kagawa Mini Rail & Ferry  Rail Pass\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan,   All Shikoku Pass ,JR  Pass, JR rail,JR  train,JR ticket,JR Shikoku , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip \">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=23&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
         $randomid=34561234567850;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Kagawa Mini Rail & FerryPass</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);


    }

    if(substr_count($parameters,"pass=24")>0){
        $partdescription="All Area Kyushu Rail Pass  on Kyushu  ,All Area Kyushu Rail Pass";
        $part2 = "

<meta name=\"description\" content=\"All Area Kyushu Rail Pass  on Kyushu  ,All Area Kyushu Rail Pass \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan,  All Area Kyushu Pass ,JR  Pass, JR rail,JR  train,JR ticket,JR Kyushu , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip \">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=24&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=34561234567851;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>All Area Kyushu Pass</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);


    }


    if(substr_count($parameters,"pass=25")>0){
        $partdescription="Sanyo-San-In Northern Kyushu 7 Day Rail Pass on Kyushu  ,Sanyo-San-In Northern Kyushu 7 Day Rail Pass";
        $part2 = "
 
<meta name=\"description\" content=\" Sanyo-San-In Northern Kyushu 7 Day Rail Pass on Kyushu  ,Sanyo-San-In Northern Kyushu 7 Day Rail Pass\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan,   Sanyo-San-In Northern Kyushu 7 Day Pass  ,JR  Pass, JR rail,JR  train,JR ticket,JR Kyushu , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip \">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=25&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=3456123456789;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Sanyo-San-In Northern Kyushu 7 Day Pass</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);


    }

    if(substr_count($parameters,"pass=26")>0){
        $partdescription="Northern Kyushu Rail Pass on Kyushu  ,Northern Kyushu Rail Pass";
        $part2 = "

<meta name=\"description\" content=\"Northern Kyushu Rail Pass on Kyushu  ,Northern Kyushu Rail Pass\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan,  Northern Kyushu Area ,JR  Pass, JR rail,JR  train,JR ticket,JR Kyushu  , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=26&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=3456123456752;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title> Northern Kyushu Area </title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);


    }


    if(substr_count($parameters,"pass=27")>0){
        $partdescription="Southern Kyushu Rail Pass on Kyushu  ,Southern Kyushu Rail Pass";
        $part2 = "
<meta name=\"description\" content=\"Southern Kyushu Rail Pass on Kyushu  ,Southern Kyushu Rail Pass\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Southern Kyushu Area Pass  ,JR  Pass, JR rail,JR  train,JR ticket,JR Kyushu  , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
        $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/passmap.php?pass=27&island=honshu\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
        $randomid=3456123456753;
        $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
        $part6 = "<title>Southern Kyushu Area Pass</title>";
        $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/passmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/passmap.php\">";
        $repalace=array("<title>","</title>");
        $part6a=str_replace($repalace,'',$part6);


    }


}
if($scritptname == 'shinkansenmap.php') {
    $partdescription = "A Map of Japan with the Shinkansen routes with the stations on the various lines ( and trains)  and closet hotels tot the stations";

    $part2 = "
<meta name=\"description\" content=\"A Map of Japan with the Shinkansen routes with the stations on the various lines ( and trains)  and closet hotels tot the stations \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan,  Shinkansenn Map,Shinkansenn, Japan Fast Trains,Hokkaido West  , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/shinkansenmap.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid = 34561234567549;
    $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
    $part6 = "<title> Shinkansen Map </title>";
    $repalace=array("<title>","</title>");
    $part6a = str_replace($repalace, '', $part6);
    $part8="
        <link rel=\"canonical\" href=\"https://botoishi.com.au/shinkansenmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/shinkansenmap.php\">";


    if(substr_count($parameters,"tokaido")>0) {
        if (substr_count($parameters, "hikari") > 0) {
            $partdescription = "Tokaido Shinkansen  , Hikari train  - Tokyo  to Shin Osaka, Shinkansen Hikari   , Tokaido Shinkansen Map";
            $part2 = "
<meta name=\"description\" content=\"Tokaido Shinkansen  , Hikari train  - Tokyo  to Shin Osaka, Shinkansen Hikari   , Tokaido Shinkansen Map\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Tokaido Shinkansenn,  Hikari ,Shinkansenn, Japan Fast Trains,JR West , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
            $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"Tokaido Shinkansen  , Hikari train  - Tokyo  to Shin Osaka, Shinkansen Hikari   , Tokaido Shinkansen Map\">";
            $randomid = 34561234567549;
            $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
            $part6 = "<title>Tokaido Shinkansen</title>";
            $part8 = "
        <link rel=\"canonical\" href=\"https://botoishi.com.au/shinkansenmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\"  href=\"https://botoishi.com.au/shinkansenmap.php\">";
            $repalace = array("<title>", "</title>");
            $part6a = str_replace($repalace, '', $part6);

            if (substr_count($parameters, "nozomi") > 0) {
                $partdescription = "Tokaido Shinkansen  , Nozomi train  - Tokyo  to Shin Osaka Shinkansen Nozomi   , Tokaido Nozomi Shinkansen Map";
                $part2 = "
<meta name=\"description\" content=\"Tokaido Shinkansen  , Nozomi train  - Tokyo  to Shin Osaka Shinkansen Nozomi   , Tokaido Nozomi Shinkansen Mapp\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Tokaido Shinkansenn,  Nozomi ,Shinkansenn, Japan Fast Trains,JR West , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
                $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/shinkansenmap.php?route=tokaido&amp;traintype=nozomi\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
                $randomid = 34561234567549;
                $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
                $part6 = "<title>Tokaido Shinkansen Nozomi</title>";
                $part8 = "
        <link rel=\"canonical\" href=\"https://botoishi.com.au/shinkansenmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/shinkansenmap.php\">";
                $repalace = array("<title>", "</title>");
                $part6a = str_replace($repalace, '', $part6);

            }

            if (substr_count($parameters, "kodama") > 0) {
                $partdescription = "Tokaido Shinkansen  , Kodama train  - Tokyo  to Shin Osaka Shinkansen Kodama   , Tokaido Kodama Shinkansen Map";
                $part2 = "
<meta name=\"description\" content=\"Tokaido Shinkansen  , Kodama train  - Tokyo  to Shin Osaka Shinkansen Kodama   , Tokaido Kodama Shinkansen Map\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Tokaido Shinkansenn,  Kodama ,Shinkansenn, Japan Fast Trains,JR West\">";
                $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/shinkansenmap.php?route=tokaido&amp;traintype=kodama\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
                $randomid = 34561234567549;
                $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
                $part6 = "<title>Tokaido Shinkansen Kodama</title>";
                $part8 = "
        <link rel=\"canonical\" href=\"https://botoishi.com.au/shinkansenmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/shinkansenmap.php\">";
                $repalace = array("<title>", "</title>");
                $part6a = str_replace($repalace, '', $part6);

            }
        }


        if (substr_count($parameters, "hokkaido") > 0) {
            if (substr_count($parameters, "hayabusa") > 0) {
                $partdescription = "Hokkaido Shinkansen  , Hayabusa train  -Aomori to Hakodate, Shinkansen Hayabusa   , Hokkaido Hayabusa Shinkansen Map";
                $part2 = "
<meta name=\"description\" content=\"Hokkaido Shinkansen  , Hayabusa train  -Aomori to Hakodate, Shinkansen Hayabusa   , Hokkaido Hayabusa Shinkansen Map\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Hokkaido Shinkansenn Hayabusa,Shinkansenn, Hayabusa, Japan Fast Trains,Hokkaido West , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
                $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/shinkansenmap.php?route=hokkaido&traintype=hayabusa\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
                $randomid = 34561234567549;
                $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
                $part6 = "<title>Hokkaido Shinkansen - Hayabusa</title>";
                $part8 = "
        <link rel=\"canonical\" href=\"https://botoishi.com.au/shinkansenmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/shinkansenmap.php\">";
                $repalace = array("<title>", "</title>");
                $part6a = str_replace($repalace, '', $part6);


            }
        }


        ##SANYO

        if (substr_count($parameters, "sanyo") > 0) {
            if (substr_count($parameters, "mizuho") > 0) {
                $partdescription = "Sanyo Shinkansen  , Mizuho train  -Shin-Osaka  to Fukuoka, Shinkansen Mizuho   , Sanyo Mizuho Shinkansen Map";
                $part2 = "
<meta name=\"description\" content=\"Sanyo Shinkansen  , Mizuho train  -Shin-Osaka  to Fukuoka, Shinkansen Mizuho   , Sanyo Mizuho Shinkansen Map\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Sanyo Shinkansen Mizuho ,Shinkansenn Mizuho, Japan Fast Trains,JR West , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
                $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/shinkansenmap.php?route=sanyo&traintype=mizuho\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
                $randomid = 34561234567549;
                $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
                $part6 = "<title>Sanyo Shinkansen - Mizuho </title>";
                $part8 = "
        <link rel=\"canonical\" href=\"https://botoishi.com.au/shinkansenmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/shinkansenmap.php\">";
                $repalace = array("<title>", "</title>");
                $part6a = str_replace($repalace, '', $part6);


            }

            if (substr_count($parameters, "sakura") > 0) {
                $partdescription = "Sanyo Shinkansen  , Sakura train  -Shin-Osaka  to Fukuoka, Shinkansen Sakura   , Sanyo Sakura Shinkansen Map";
                $part2 = "
<meta name=\"description\" content=\"Sanyo Shinkansen  , Sakura train  -Shin-Osaka  to Fukuoka, Shinkansen Sakura   , Sanyo Sakura Shinkansen Map\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Sanyo Shinkansenn Sakura ,Shinkansenn Sakura, Japan Fast Trains,JR West , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
                $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\"> 
<meta name=\"og:description\" content=\"Sanyo Shinkansen  , Sakura train  -Shin-Osaka  to Fukuoka, Shinkansen Sakura   , Sanyo Sakura Shinkansen Map\">";
                $randomid = 34561234567549;
                $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
                $part6 = "<title>Sanyo Shinkansen - Sakura </title>";
                $part8 = "
        <link rel=\"canonical\" href=\"https://botoishi.com.au/shinkansenmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/shinkansenmap.php\">";
                $repalace = array("<title>", "</title>");
                $part6a = str_replace($repalace, '', $part6);

            }


            if (substr_count($parameters, "nozomi") > 0) {
                $partdescription = "Sanyo Shinkansen  , Nozomi train  -,Shin-Osaka  to Fukuoka, Shinkansen Nozomi   , Sanyo Nozomi Shinkansen Map";
                $part2 = "
<meta name=\"description\" content=\"Sanyo Shinkansen  , Nozomi train  -,Shin-Osaka  to Fukuoka, Shinkansen Nozomi   , Sanyo Nozomi Shinkansen Map\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Sanyo Shinkansenn Nozomi ,Shinkansenn Nozomi, Japan Fast Trains,JR West , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
                $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/shinkansenmap.php?route=sanyo&traintype=nozomi\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
                $randomid = 34561234567549;
                $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
                $part6 = "<title>Sanyo Shinkansen - Nozomi </title>";
                $part8 = "
        <link rel=\"canonical\" href=\"https://botoishi.com.au/shinkansenmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/shinkansenmap.php\">";
                $repalace = array("<title>", "</title>");
                $part6a = str_replace($repalace, '', $part6);


            }


            if (substr_count($parameters, "kodama") > 0) {
                $partdescription = "Sanyo Shinkansen  , Kodama train  -,Shin-Osaka  to Fukuoka, Shinkansen Kodama   , Sanyo Kodama Shinkansen Map";
                $part2 = "
<meta name=\"description\" content=\"Sanyo Shinkansen  , Kodama train  -,Shin-Osaka  to Fukuoka, Shinkansen Kodama   , Sanyo Kodama Shinkansen Map\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Sanyo Shinkansenn Kodama ,Shinkansenn Kodama, Japan Fast Trains,JR West , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
                $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/shinkansenmap.php?route=sanyo&traintype=kodama\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
                $randomid = 34561234567549;
                $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
                $part6 = "<title>Sanyo Shinkansen - Kodama </title>";
                $part8 = "
        <link rel=\"canonical\" href=\"https://botoishi.com.au/shinkansenmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/shinkansenmap.php\">";
                $repalace = array("<title>", "</title>");
                $part6a = str_replace($repalace, '', $part6);


            }

            if (substr_count($parameters, "hikari") > 0) {
                $partdescription = "Sanyo Shinkansen  , Hikari train  -,Shin-Osaka  to Okayama, Shinkansen Hikari   , Sanyo Hikari Shinkansen Map";
                $part2 = "
<meta name=\"description\" content=\"Sanyo Shinkansen  , Hikari train  -,Shin-Osaka  to Okayama, Shinkansen Hikari   , Sanyo Hikari Shinkansen Map\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Sanyo Shinkansenn Hikari ,Shinkansenn Hikari, Japan Fast Trains,JR West , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
                $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/shinkansenmap.php?route=sanyo&traintype=hikari\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
                $randomid = 34561234567549;
                $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
                $part6 = "<title>Sanyo Shinkansen - Hikari </title>";
                $part8 = "
        <link rel=\"canonical\" href=\"https://botoishi.com.au/shinkansenmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/shinkansenmap.php\">";
                $repalace = array("<title>", "</title>");
                $part6a = str_replace($repalace, '', $part6);

            }
        }

        ####


        if (substr_count($parameters, "tohoku") > 0) {
            if (substr_count($parameters, "hayabusa") > 0) {
                $partdescription = "Tohoku Shinkansen  , Hayabusa train  -Tokyo to Shin-Aomori , Tohoku Hayabusa   , Tohoku Hayabusa Shinkansen Map";
                $part2 = "
<meta name=\"description\" content=\"Tohoku Shinkansen  , Hayabusa train  -Tokyo to Shin-Aomori , Tohoku Hayabusa   , Tohoku Hayabusa Shinkansen Map\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Tohoku Shinkansenn ,Shinkansenn, Hayabusa,Japan Fast Trains,JR East , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
                $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/shinkansenmap.php?route=tohoku&traintype=hayabusa\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
                $randomid = 34561234567549;
                $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
                $part6 = "<title>Tohoku Shinkansen Hayabusa</title>";
                $part8 = "
        <link rel=\"canonical\" href=\"https://botoishi.com.au/shinkansenmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/shinkansenmap.php\">";
                $repalace = array("<title>", "</title>");
                $part6a = str_replace($repalace, '', $part6);


            }
            if (substr_count($parameters, "yamabiko") > 0) {
                $partdescription = "Tohoku Shinkansen  , Yamabiko train  -Tokyo to Morioka , Tohoku Yamabiko   , Tohoku Yamabiko Shinkansen Map";

                $part2 = "
<meta name=\"description\" content=\"Tohoku Shinkansen  , Yamabiko train  -Tokyo to Morioka , Tohoku Yamabiko   , Tohoku Yamabiko Shinkansen Map\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Tohoku Shinkansenn ,Shinkansenn, Yamabiko,Japan Fast Trains,JR East , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
                $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/shinkansenmap.php?route=tohoku&traintype=yamabiko\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
                $randomid = 34561234567549;
                $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
                $part6 = "<title>Tohoku Shinkansen Yamabiko</title>";
                $part8 = "
        <link rel=\"canonical\" href=\"https://botoishi.com.au/shinkansenmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/shinkansenmap.php\">";
                $repalace = array("<title>", "</title>");
                $part6a = str_replace($repalace, '', $part6);


            }
            if (substr_count($parameters, "nasuno") > 0) {
                $partdescription = "Tohoku Shinkansen  , Nasuno train  -Tokyo to Koriyama , Tohoku Nasuno   , Tohoku Nasuno Shinkansen Map";

                $part2 = "

<meta name=\"description\" content=\"Tohoku Shinkansen  , Nasuno train  -Tokyo to Koriyama , Tohoku Nasuno   , Tohoku Nasuno Shinkansen Map\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Tohoku Shinkansenn ,Shinkansenn, Nasuno,Japan Fast Trains,JR East , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
                $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/shinkansenmap.php?route=tohoku&traintype=nasuno\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
                $randomid = 34561234567549;
                $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
                $part6 = "<title>Tohoku Shinkansen Nasuno</title>";
                $part8 = "
        <link rel=\"canonical\" href=\"https://botoishi.com.au/shinkansenmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/shinkansenmap.php\">";
                $repalace = array("<title>", "</title>");
                $part6a = str_replace($repalace, '', $part6);


            }
        }
        if (substr_count($parameters, "kyushu") > 0) {


            if (substr_count($parameters, "mizuho") > 0) {
                $partdescription = "Kyushu Shinkansen  , Mizuho train  -Fukuoka to Kagoshima , Kyushu Mizuho   , Kyushu Mizuho Shinkansen Map";

                $part2 = "
<meta name=\"description\" content=\"Kyushu Shinkansen  , Mizuho train  -Fukuoka to Kagoshima , Kyushu Mizuho   , Kyushu Mizuho Shinkansen Map\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Kyushu Shinkansenn ,Shinkansen, Japan Fast Trains,Kyushu  , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
                $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/shinkansenmap.php?route=kyushu&traintype=mizuho\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
                $randomid = 34561234567855;
                $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
                $part6 = "<title>Kyushu Shinkansen</title>";
                $part8 = "
        <link rel=\"canonical\" href=\"https://botoishi.com.au/shinkansenmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/shinkansenmap.php\">";
                $repalace = array("<title>", "</title>");
                $part6a = str_replace($repalace, '', $part6);

            }
        }


        if (substr_count($parameters, "joetsu") > 0) {
            if (substr_count($parameters, "toki") > 0) {
                $partdescription = "Joetsu Shinkansen  , Toki train  -Tokyo to Niigata , Joetsu Toki   , Joetsu Toki Shinkansen Map";

                $part2 = "

<meta name=\"description\" content=\"Joetsu Shinkansen  , Toki train  -Tokyo to Niigata , Joetsu Toki   , Joetsu Toki Shinkansen Map\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, Joetsu Shinkansenn ,Shinkansen, Japan Fast Trains,Joetsu  , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
                $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/shinkansenmap.php?route=joetsu&traintype=toki\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
                $randomid = 34561234567856;
                $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
                $part6 = "<title>Joetsu Shinkansen -Toki</title>";
                $part8 = "
        <link rel=\"canonical\" href=\"https://botoishi.com.au/shinkansenmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/shinkansenmap.php\">";
                $repalace = array("<title>", "</title>");
                $part6a = str_replace($repalace, '', $part6);


            }
        }

        if (substr_count($parameters, "yamagata") > 0) {
            if (substr_count($parameters, "tsubasa") > 0) {
                $partdescription = "Yamagata Shinkansen  , Tsubasa train  -Tokyo to Shinjo , Yamagata Tsubasa   , Yamagata Tsubasa Shinkansen Map";
                $part2 = "
<meta name=\"description\" content=\"Yamagata Shinkansen  , Tsubasa train  -Tokyo to Shinjo , Yamagata Tsubasa   , Yamagata Tsubasa Shinkansen Map , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">
<meta name=\"keywords\" content=\"Yamagata Shinkansen  Tsubasa , Tsubasa ,Shinkansen, Tokyo to Shinjo,Japan Fast Trains,  Shinkansen Map\">";
                $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/shinkansenmap.php?route=yamagata&traintype=tsubasa\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
                $randomid = 34561234567857;
                $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
                $part6 = "<title>Yamagata Shinkansen - Tsubasa</title>";
                $part8 = "
        <link rel=\"canonical\" href=\"https://botoishi.com.au/shinkansenmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/shinkansenmap.php\">";
                $repalace = array("<title>", "</title>");
                $part6a = str_replace($repalace, '', $part6);

            }
        }

        if (substr_count($parameters, "akita") > 0) {
            if (substr_count($parameters, "komachi") > 0) {
                $partdescription = "Akita Shinkansen  , Komachi train  -Tokyo to Akita , Akita Komachi   , Akita Komachi Shinkansen Map";
                $part2 = "

<meta name=\"description\" content=\"Akita Shinkansen  , Komachi train  -Tokyo to Akita , Akita Komachi   , Akita Komachi Shinkansen Map\">
<meta name=\"keywords\" content=\"Akita Shinkansen  Komachi , Komachi ,Shinkansen, Tokyo to Akita,Japan Fast Trains,  Shinkansen Map  , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
                $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/shinkansenmap.php?route=akita&traintype=komachi\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
                $randomid = 3456123456758;
                $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
                $part6 = "<title>Akita Shinkansen -  Komachi</title>";
                $part8 = "
        <link rel=\"canonical\" href=\"https://botoishi.com.au/shinkansenmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/shinkansenmap.php\">";
                $repalace = array("<title>", "</title>");
                $part6a = str_replace($repalace, '', $part6);


            }
        }

        if (substr_count($parameters, "hokuriku") > 0) {
            if (substr_count($parameters, "kagayaki") > 0) {
                $partdescription = "Hokuriku Shinkansen  , Kagayaki train  -Tokyo to Tsuruga , Hokuriku Kagayaki   , Hokuriku Kagayaki Shinkansen Map";
                $part2 = "

<meta name=\"description\" content=\"Hokuriku Shinkansen  , Kagayaki train  -Tokyo to Tsuruga , Hokuriku Kagayaki   , Hokuriku Kagayaki Shinkansen Map\">
<meta name=\"keywords\" content=\"Hokuriku Shinkansen  Kagayaki , Kagayaki ,Shinkansen, Tokyo to Tsuruga,Japan Fast Trains,  Shinkansen Map , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip \">";
                $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">
<meta property=\"og:url\" content=\"https://botoishi.com.au/shinkansenmap.php?route=hokuriku&traintype=kagayaki\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
                $randomid = 3456123456758;
                $partfivea = "<meta property=\"fb:app_id\" content=\"" . $randomid . "\">";
                $part6 = "<title>Hokuriku Shinkansen -  Kagayaki</title>";
                $part8 = "
        <link rel=\"canonical\" href=\"https://botoishi.com.au/shinkansenmap.php\">
        <link rel=\"alternate\" media=\"only screen and (max-width: 640px)\" href=\"https://botoishi.com.au/shinkansenmap.php\">";
                $repalace = array("<title>", "</title>");
                $part6a = str_replace($repalace, '', $part6);

            }
        }
    }

}


if($scritptname == 'akita.php') {

    $partdescription="Akita, things to do in Akita, things to see in Akita, off the beaten track in Akita";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"Akita , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/akita.avif\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/destinations/akita.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"  ".$partdescription." \">";
    $randomid=345612345678282;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Akita  </title>";

    $part6 .="
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Akita Japan , things to da and see off the beaten tracki.\",
       \"name\": \"Akita Japan\",
       \"headline\": \"Akita  Japan\",
      \"image\": [  
       \"https://botoishi.com.au/images/akita.webp\"
       ],
      \"datePublished\": \"2025-09-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-10TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
    </script>";


}


if($scritptname == 'osaka.php') {

    $partdescription="Osaka, things to do in osaka, things to see in osaka, off the beaten track in osaka";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"Osaka  , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/osakaexpo.webp\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/destinations/osaka.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"  ".$partdescription." \">";
    $randomid=345612345678282;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Osaka  </title>";
    $part6 .="
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Osaka Japan , things to da and see off the beaten track.\",
       \"name\": \"Osaka Japan\",
       \"headline\": \"Osaka  Japan\",
      \"image\": [  
       \"https://botoishi.com.au/images/osaka4.webp\",
        \"https://botoishi.com.au/images/osaka3.webp\",
        \"https://botoishi.com.au/images/osakanew2.webp\" 
       ],
      \"datePublished\": \"2025-09-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-10TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
    </script>";


}

if($scritptname == 'abashiri.php') {

    $partdescription="Abashiri, a remote town on the east coast of Hokkaido Japan ";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"Abashiri , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip \">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/abashiri.webp\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/destinations/abashiri.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456782821;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Abashiri </title>";
    $part6 .="
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Abashiri Japan off the beaten track in Japan.\",
       \"name\": \"Abashiri Japan\",
       \"headline\": \"Abashiri - Hokkaido, Japan\",
      \"image\": [
        \"https://botoishi.com.au/images/abashiri1.webp\",
        \"https://botoishi.com.au/images/abashiri2.webp\",
        \"https://botoishi.com.au/images/abashiri3.webp\"
       ],
      \"datePublished\": \"2025-09-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-10TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
    </script>";

}


if($scritptname == 'kochi.php') {

    $partdescription=" Kochi , on the island of Shikoku , you can catch a tram to the coast , explore  the Saturday morning markets and Kochi Castle Festival in December";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"Explore Kochi , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/kochitram.webp\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/destinations/kochi.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=345612345678282;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Kochi </title>";
    $part6 .="
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Kochi Japan off the beaten track in Japan.\",
       \"name\": \"Kochi Japan\",
       \"headline\": \"Kochi - Shikoku, Japan\",
      \"image\": [
        \"https://botoishi.com.au/images/kochitram.webp\",
        \"https://botoishi.com.au/images/kochitemple.webp\" 
       ],
      \"datePublished\": \"2025-11-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-15TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
    </script>";

}

if($scritptname == 'soupstock.php') {

    $partdescription="Soup Stock Tokyo store Locations and map , Soup Stock Tokyo Map ,Soup in Japan , where to eat fantastic soup,The place to re-energize during the very cold winter days";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"Soup Stock Tokyo ,Soup in Japan  , Soup STock Tokyo Map , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/mrsoup3.webp\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/soupstock.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=345612345678282;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Soup Stock Tokyo</title>";

$part6 .="
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Soup Stock Tokyo Japan with a map of store locations.\",
       \"name\": \"Soup Stock Tokyo Japan\",
       \"headline\": \"Soup Stock Tokyo Japan\",
      \"image\": [
        \"https://botoishi.com.au/images/mrsoup1.webp\",
        \"https://botoishi.com.au/images/mrsoup2.webp\",
        \"https://botoishi.com.au/images/mrsoup13.webp\"
       ],
      \"datePublished\": \"2025-09-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-10TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
    </script>";
}

if($scritptname == 'mrdonut.php') {
    $partdescription="Mister Donut Japan for the best donuts in Japan  for when you are cold and hungry and crave something hot and sweet ";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription." \">
<meta name=\"keywords\" content=\"Mister Donut Store Locations and map ,Mister Donut Map and route, donut and coffee in Japan ,Donut Japan,Mister Donut Japan,Mister Donut store locations \">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/mrdonutt.webp\">
<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456781;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Mister Donut Japan</title>";
    $part6 .=" <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Mister Donut Japan with a map of store locations.\",
       \"name\": \"Mister Donut Japan\",
       \"headline\": \"Mister Donut Japan , the best donuts in Japan\",
      \"image\": [
        \"https://botoishi.com.au/images/mrdonutt.webp\",
        \"https://botoishi.com.au/images/mrdonut2.webp\",
        \"https://botoishi.com.au/images/mrdonut3.webp\",
        \"https://botoishi.com.au/images/mrdonut4.webp\"
       ],
      \"datePublished\": \"2025-12-05T08:00:00+08:00\",
      \"dateModified\": \"2025-12-05TT09:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
    </script>";

}


if($scritptname == 'tokyometrogame.php') {
    $partdescription="Tokyo Metro: The Underground Mysteries 2025 , explore tokyo  walking around the city with a 24-hour ticket for unlimited rides on the Tokyo Metro and a puzzle-solving";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription." \">
<meta name=\"keywords\" content=\"Tokyo Metro: The Underground Mysteries 2025 , explore tokyo , explore toky in 24 hours , solve Mysteries , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip >";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/scarp.webp\">
<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456781;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Tokyo Metro:Underground Mysteries 2025</title>";
    $part6 .=" <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"".$partdescription."\",
       \"name\": \"Tokyo Metro:Underground Mysteries 2025\",
       \"headline\": \"Tokyo Metro:Underground Mysteries 2025\",
      \"image\": [
        \"https://botoishi.com.au/images/scarp.webp\"
       ],
      \"datePublished\": \"2025-10-05T08:00:00+08:00\",
      \"dateModified\": \"2025-12-05TT09:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
    </script>";

}



if($scritptname == 'tanner.php') {
    $partdescription="Tanners Stations-Off the beaten track stations";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription." \">
<meta name=\"keywords\" content=\"Off the beaten track stations , Tokyo hidden stations , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\" >";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/tanner.webp\">
<meta property=\"og:url\"  content=\"https://botoishi.com.au/".$_SERVER['PHP_SELF'] ."\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456781;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Tanners Stations-Off Track</title>";
    $part6 .=" <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"".$partdescription."\",
       \"name\": \"Tokyo, off track stations\",
       \"headline\": \"Tokyo, off  track stations\",
      \"image\": [
        \"https://botoishi.com.au/images/tanner.webp\"
       ],
      \"datePublished\": \"2025-11-05T08:00:00+08:00\",
      \"dateModified\": \"2025-12-05TT09:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
    </script>";

}
if($scritptname == 'kinosaki.php') {

    $partdescription=" Kinosaki Onsen is a traditional Onsen town in the Hyogo prefecture  ";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"Explore Kinosaki , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/kinosaki.webp\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/destinations/kinosaki.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456758282;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Kinosaki - Explore Kinosaki </title>";
    $part6 .="
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Kinosaki - Explore Kinosaki\",
       \"name\": \"Kinosaki Japan\",
       \"headline\": \"Kinosaki - Explore Kinosaki\",
      \"image\": [
        \"https://botoishi.com.au/images/kinosaki.webp\" 
       ],
      \"datePublished\": \"2025-11-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-15TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
    </script>";

}
if($scritptname == 'projectoilet.php') {

    $partdescription="The Tokyo Toilet Project is an urban redevelopment project in Shibuya, with location map and routes to get there ";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"The Tokyo Toilet Project is an urban redevelopment project in Shibuya, Tokyo\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/tokyotoilet.webp\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/projectoilet.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=3456123456758282;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>The Tokyo Toilet Project   </title>";
    $part6 .="   
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"The Tokyo Toilet Project .\",
       \"name\": \"The Tokyo Toilet Project \",
       \"headline\": \"The Tokyo Toilet Project \",
      \"image\": [
        \"https://botoishi.com.au/images/tokyotoilet.webp\"
       ],
      \"datePublished\": \"2025-11-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-15TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
    </script>";

}
if($scritptname == 'himeji.php') {

    $partdescription="Himeji ,located between Osaka and Okyama , not just about the Castle";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"Himeji  , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/himeji.webp\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/destinations/himeji.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=34561234561758282;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Himeji - Explore Himeji</title>";
    $part6 .="
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Himeji - Explore Himeji\",
       \"name\": \"Himeji Japan\",
       \"headline\": \"Himeji - Explore Himeji\",
      \"image\": [
        \"https://botoishi.com.au/images/himeji.webp\" 
       ],
      \"datePublished\": \"2025-11-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-15TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
    
    </script>";

}
if($scritptname == 'zaoonsen.php') {

    $partdescription="Zao Onsen ,onsen and ski village outside of Yamagata";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"Zao Onsen  , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip , Ski Japna, Ski at Zao Onsen , Onsen town\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/zaoonsen.webp\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/destinations/zaoonsen.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=345612345617582844;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Zao Onsen - Explore Zao Onsen</title>";
    $part6 .="
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Zao Onsen - Explore Zao Onsen\",
       \"name\": \"Zao Onsen\",
       \"headline\": \"Zao Onsen - Explore Zao Onsen\",
      \"image\": [
        \"https://botoishi.com.au/images/zaoonsen.webp\" 
       ],
      \"datePublished\": \"2025-11-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-15TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
    
    </script>";

}

if($scritptname == 'jizou.php') {

    $partdescription="Kushikatsu Jizou - Himjei izakaya serviing  meat and veggie skewers that are breaded with panko and deep-fried to a golden crisp";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"Kushikatsu Jizou, where to eat  Himeji  , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/jizou.webp\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/destinations/jizou.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=34561234567582822;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Kushikatsu Jizo</title>";
    $part6 .="
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Kushikatsu Jizou -  where to eat Himeji.\",
       \"name\": \"Kushikatsu Jizou Himeji \",
       \"headline\": \"Kushikatsu Jizou Himehi\",
      \"image\": [
        \"https://botoishi.com.au/images/jizou.webp\" 
       ],
      \"datePublished\": \"2025-11-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-15TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
    
    </script>";

}



if($scritptname == 'koyasan.php') {

    $partdescription="Koyasan ,a temple village on an ancient pilgrimage trail";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"Koyasan ,temple saty , Koyasan Guest House Kokuu  , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/koyasan.webp\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/destinations/koyasan.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=34561234567582822;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Koyasan - Explore Koyasan</title>";
    $part6 .="
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Koyasan - Explore Koyasan\",
       \"name\": \"Koyasan Japan\",
       \"headline\": \"Koyasan - Explore Koyasan\",
      \"image\": [
        \"https://botoishi.com.au/images/koyasan.webp\" 
       ],
      \"datePublished\": \"2025-11-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-15TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
    
    </script>";

}



if($scritptname == 'sagishima.php') {

    $partdescription=" Sagishima (Sagi Island)  is a small island in the Seto Sea, small enough to hike across in a day";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"Sagishima  , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/sagishima2.webp\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/destinations/sagishima.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=34561234567582821;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Sagishima - Explore Sagishima</title>";
    $part6 .="
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Sagishima - Explore Sagishima.\",
       \"name\": \"Sagishima - Explore Sagishima\",
       \"headline\": \"Sagishima - Explore Sagishima\",
      \"image\": [
        \"https://botoishi.com.au/images/sagishima2.webp\" 
       ],
      \"datePublished\": \"2025-11-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-15TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
    </script>";

}

if($scritptname == 'randomlocator.php') {

    $partdescription=" Locate a random station to visit in Japan";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"Random Station Locator Japan\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/randomstation.webp\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/destinations/randomlocator.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=345612345675828212;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Random Japan Station Locator</title>";
    $part6 .="
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Random Station Locater.\",
       \"name\": \"Random Station Locater\",
       \"headline\": \"Random Station Locater\",
      \"image\": [
        \"https://botoishi.com.au/images/randomstation.webp\" 
       ],
      \"datePublished\": \"2025-11-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-15TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
    </script>";

}



if($scritptname == 'beppu.php') {

    $partdescription="Beppu ,a hot springs town with over 2000 hot springs";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"Beppu  , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/beppu.webp\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/destinations/beppu.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=34561234567582822;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Beppu - Explore Beppu</title>";
    $part6 .="
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Beppu - Explore Beppu.\",
       \"name\": \"Beppu Japan\",
       \"headline\": \"Beppu- Explore Beppu\",
      \"image\": [
        \"https://botoishi.com.au/images/koyasan.webp\" 
       ],
      \"datePublished\": \"2025-11-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-15TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
    
    </script>";

}

if($scritptname == 'tsuruga.php') {
    $partdescription="Tsuruga , a port city off the beaten track";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"Tsuruga , travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/tsuruga.webp\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/destinations/tsuruga.php\">
<meta property=\"og:title\" content=\"".$partdescription."\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=34561234567582822;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Tsuruga  - Explore Tsuruga</title>";
    $part6 .="
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Tsuruga  - Explore Tsuruga\",
       \"name\": \"Tsuruga Japan\",
       \"headline\": \"Tsuruga  - Explore Tsuruga\",
      \"image\": [
        \"https://botoishi.com.au/images/koyasan.webp\" 
       ],
      \"datePublished\": \"2025-11-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-15TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
        </script>";
}

if($scritptname == 'amanohashidate.php') {
    $partdescription="Exploring Amanohashidate  ,a pine covered sand bar in the mouth of the Bay and one of Japan's three scenic views";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"amanohashidate, travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/amanohashidate.webp\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/destinations/amanohashidate.php\">
<meta property=\"og:title\" content=\"Amanohashidate\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=345612341231111;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Amanohashidate</title>";
    $part6 .="
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Amanohashidate\",
       \"name\": \"Amanohashidate Japan\",
       \"headline\": \"Amanohashidate\",
      \"image\": [
        \"https://botoishi.com.au/images/amanohashidate.webp\" 
       ],
      \"datePublished\": \"2025-11-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-15TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
        </script>";
}


if($scritptname == 'yunokamionsen.php') {
    $partdescription="Exploring Yunokamionsen  ,  a historic hot spring resort town in Fukushima Prefecture";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"Yunokamionsen, travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/yunokamionsen.webp\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/destinations/yunokamionsen.php\">
<meta property=\"og:title\" content=\"Yunokamionsen\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=345612341231112;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Yunokamionsen</title>";
    $part6 .="
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Yunokamionsen\",
       \"name\": \"Yunokamionsen Japan\",
       \"headline\": \"Yunokamionsen - explore Yunokamionsen\",
      \"image\": [
        \"https://botoishi.com.au/images/yunokamionsen.webp\" 
       ],
      \"datePublished\": \"2025-11-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-15TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
        </script>";
}


if($scritptname == 'kawasaki.php') {
    $partdescription="Exploring Kawasaki  ,a great place to start your journey";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"Kawasaki, travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/kawasaki.webp\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/destinations/kawasaki.php\">
<meta property=\"og:title\" content=\"Kawasaki\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=345612341231112;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Kawasaki</title>";
    $part6 .="
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Kawasaki\",
       \"name\": \"Kawasaki Japan\",
       \"headline\": \"Kawasaki- explore YKawasaki\",
      \"image\": [
        \"https://botoishi.com.au/images/kawasaki.webp\" 
       ],
      \"datePublished\": \"2025-11-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-15TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
        </script>";
}

if($scritptname == 'toyohashi.php') {
    $partdescription="Exploring Toyohashi  ,a quiet paced town";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"Toyohashi, travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/toyohashi.webp\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/destinations/toyohashi.php\">
<meta property=\"og:title\" content=\"Toyohashi\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=345612341231113;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Toyohashi</title>";
    $part6 .="
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Toyohashi\",
       \"name\": \"Toyohashi Japan\",
       \"headline\": \"Toyohashi- explore Toyohashi\",
      \"image\": [
        \"https://botoishi.com.au/images/toyohashi.webp\" 
       ],
      \"datePublished\": \"2025-11-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-15TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
        </script>";
}
if($scritptname == 'kijimadaira.php') {
    $partdescription="Exploring Kijimadaira  ,a small ski resort town";
    $part2 = "
<meta name=\"description\" content=\"".$partdescription."\">
<meta name=\"keywords\" content=\"Toyohashi, travel, sightseeing, guide, visit, visitor, tourism, tourist, trip\">";
    $part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/kijimadaira.webp\">

<meta property=\"og:url\" content=\"https://botoishi.com.au/destinations/kijimadaira.php\">
<meta property=\"og:title\" content=\"Kijimadaira\">
<meta name=\"og:description\" content=\"".$partdescription."\">";
    $randomid=345612341231113;
    $partfivea="<meta property=\"fb:app_id\" content=\"".$randomid."\">";
    $part6 = "<title>Kijimadaira</title>";
    $part6 .="
    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"Article\",
       \"description\": \"Kijimadaira\",
       \"name\": \"Kijimadaira Japan\",
       \"headline\": \"Kijimadaira- explore Kijimadaira\",
      \"image\": [
        \"https://botoishi.com.au/images/kijimadaira.webp\" 
       ],
      \"datePublished\": \"2025-11-10T08:00:00+08:00\",
      \"dateModified\": \"2025-12-15TT11:20:00+08:00\",
      \"author\": [{
          \"@type\": \"Person\",
          \"name\": \"A Botoshi\",
          \"url\": \"https://botoishi.com.au/aboutus.php\"
        }]
    }
        </script>";
}

echo $part6.$partfivea.$part8.$part1.$part2.$part3.$part4.$part5. $partfivea;


$part2 = "
<meta name=\"description\" content=\".\">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan, \">";
$part4 = "<meta property=\"og:image\" content=\"https://botoishi.com.au/images/japan-map-png2.png\">

<meta property=\"og:url\" content=\"\">
<meta property=\"og:title\" content=\" Holidays in Japan, Travel In Japan, \">
<meta name=\"keywords\" content=\"Holidays in Japan, Travel In Japan,  Holidays in Japan, Travel In Japan, \">";
$part6 = "<title></title>";
