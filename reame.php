<?php

exec('wget -O docs/js/exchnage.json  https://open.er-api.com/v6/latest/JPY');

$string = file_get_contents("docs/js/exchnage.json");
$json_a = json_decode($string);


print_r($json_a->rates);
