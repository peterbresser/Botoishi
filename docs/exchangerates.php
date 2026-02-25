<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

include BASEPATH ."/docs/menu.php";



$string = file_get_contents("js/exchnage.json");
$json_a = json_decode($string);

echo "

    <script language=\"javascript\">

function calcvalue(){
var selectrate = document.getElementById(\"country\").value;
var howmuch = document.getElementById(\"howmuch\").value;

var myrates=(howmuch/selectrate);
myrates = Number((myrates).toFixed(2));
myrates = numberWithCommas(myrates);
document.getElementById(\"totalrate\").value =myrates; 

}

function numberWithCommas(x) {
    x = x.toString();
    var pattern = /(-?\d+)(\d{3})/;
    while (pattern.test(x))
        x = x.replace(pattern,\"$1,$2\");
            return x;
}

function mufunction(){
var selectrate = document.getElementById(\"country\").value;
document.getElementById(\"countryrate\").value =selectrate; 

};
</script>
<div class=\"col\"><center><br>
     
        <span class=text><h1>Exchange Rates</h1></span> <span class ='text-small'> Updated ".date("d M Y 03:04:00" ,strtotime("-4 hours"))." AEST </span>
            
<center><table cellpadding='5' cellspacing='0' border='0' align='center'>
<tr class=\"orm-select-sm mb-3\"><td>Country</td><td>Rate</td><td></td></td><td>Amount</td><td></td></tr>

<tr><form method=POST action=".$_SERVER['PHP_SELF']."><td><select name=myrates class=\"form-select form-select-sm mb-3\"   id='country' onchange='mufunction();'>";
$temparry=array('Select'=>'Select');
foreach($json_a->rates as $cnt => $rate) {
    if($cnt!='JPY')
    $ratearry[$cnt]=$rate;
    if($cnt=='AUD'){
        $temparry[$cnt]=$rate;
        unset($ratearry[$cnt]);

    }

}

$newratearry= array_merge($temparry,$ratearry);
print_r($newratearry);
##$json_a->rates->AUD=$json_a->rates->AUD;
foreach($newratearry as $cnt => $rate) {
    if($cnt!='JPY')
    echo "<option   value=".$rate."  >".$cnt."</option>";

}
echo " </select></td>
<td><input type =text size=7 id='countryrate' readonly   class=\"form-select-sm mb-3\"  ><td>
<td> <input type =text size=9 maxlength=5 id='howmuch' onchange='calcvalue();'    class=\"form-select-sm mb-3\" > </td></tr>
<tr><td></td><td colspan =3
 align='left'> <input type =text size=11 id='totalrate' class=\"form-select-sm mb-3\"> Yen</td>
 
 <td></td></tr></table>";





ECHO "</div> 
   
</head>
<body>
 
 ";

include BASEPATH ."/docs/footer.php";



