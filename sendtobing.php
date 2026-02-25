<?php

// Your Bing Webmaster API key
// Your Bing Webmaster API key
$apiKey = "72cc5eea2106446da48a1ea044f6bb4f"; 

// The main domain associated with your API key in Bing Webmaster Tools
$host = "https://botoishi.com.au"; 

// Array of URLs to submit
$urlList = [
"https://botoishi.com.au/katakanya.php",
"https://botoishi.com.au/map.php",
"https://botoishi.com.au/minshinkumap.php",
"https://botoishi.com.au/index.php",
"https://botoishi.com.au/myforum.php",
"https://botoishi.com.au/passmap.php",
"https://botoishi.com.au/railheat.php",
"https://botoishi.com.au/ryokanmap.php",
"https://botoishi.com.au/shinkandetails.php",
"https://botoishi.com.au/shinkansenmap.php",
"https://botoishi.com.au/shinkansen.php",
"https://botoishi.com.au/stations.php",
"https://botoishi.com.au/mrdonut.php",
"https://botoishi.com.au/soupstock.php",
"https://botoishi.com.au/osaka.php",
"https://botoishi.com.au/akita.php",
"https://botoishi.com.au/abashiri.php",
"https://botoishi.com.au/dormyinn.php",
"https://botoishi.com.au/hoshino.php",
"https://botoishi.com.au/candeohotels.php",
"https://botoishi.com.au/onyada.php",
"https://botoishi.com.au/jrhotel.php",
"https://botoishi.com.au/grantia.php",
"https://botoishi.com.au/apahotels.php",
"https://botoishi.com.au/grandvia.php",
"https://botoishi.com.au/princehotel.php",
"https://botoishi.com.au/mystays.php",
"https://botoishi.com.au/toyokoinn.php",
"https://botoishi.com.au/superhotel.php",
"https://botoishi.com.au/taxis.php",
"https://botoishi.com.au/routeinn.php",
"https://botoishi.com.au/travelling.php",
"https://botoishi.com.au/hotels.php",
"https://botoishi.com.au/touristinfo.php",
"https://botoishi.com.au/things.php"
	// Add more URLs as needed
];

  $request = curl_init();
    $data = array(
        'host' => "https://botoishi.com.au",
        'key' => $apiKey,
        'keyLocation' => "https://botoishi.com.au/".$apiKey.".txt",
        'urlList' => $urlList 
    );
    curl_setopt($request, CURLOPT_URL, "https://api.indexnow.org/indexnow");
    curl_setopt($request, CURLOPT_HTTPHEADER, array('Content-Type:application/json; charset=utf-8'));
    curl_setopt($request, CURLOPT_POST, 1);
    curl_setopt($request, CURLOPT_POSTFIELDS, json_encode($data, JSON_UNESCAPED_UNICODE));
    curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($request);
var_dump($reponse);
    if ($response === false) { echo('Error: ' . curl_error($request)); }
    echo('Status code: ' . curl_getinfo($request, CURLINFO_HTTP_CODE));

