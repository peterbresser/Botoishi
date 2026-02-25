<?php

if( !defined('BASEPATH')) {
	define('BASEPATH', "/var/www/botoishi");
}
include BASEPATH . '/japan.inc';
$GLOBALS['URLOCATION']="https://japan.bresser.net.au";
$GLOBALS['zoompoint']='35.4131226,136.5103287';
$wollongongpoint='-34.4491483,150.8235785';

$GLOBALS['hokkaido']='43.4667496,142.5569343';
$GLOBALS['honshu']='35.3975773,138.4342935';
$GLOBALS['shikoku']='33.5564072,133.2287805';
$GLOBALS['kyushu']='32.6827171,130.8145517';

if(!isset($GLOBALS['HOTELS'])){


    $query = mysqli_query($japansql, "select   * from hotels  where active =1");
   while ($result = mysqli_fetch_assoc($query)) {
       $GLOBALS['HOTELS'][$result['hoteltag']] = $result['hotelname'];

   }
}


$expiretime = 3600;


