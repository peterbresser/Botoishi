<?php


echo "<!doctype html><html lang=\"en\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" /> ";
echo "<head>  <link href=\"mystyle.css\" rel=\"stylesheet\"> </head>";

if($_POST['action']!='go')
        showform();
if($_POST['action']=='go')
        processform();




function processform()
{

$filename="myfile.html";

exec("wget -O myfile.html ".$_POST['newslink']." ");

header("Location: myfile.html");
$data ="<head>  <link href=\"mystyle.css\" rel=\"stylesheet\"> </head><center><a href=\"https://hashi.bresser.net.au\" class=text_bold> Go BACK</a><br";
         $fopen = fopen("myfile.html", "r+")or die("cannot open processing file,try again later");
               fwrite($fopen,$data);
                $fopen=fclose($fopen);

}


function showform(){



echo "<form METHOD=POST ACTION =".$_SERVER['PHP_SELF']. " >

Address <INPUT type=text name=newslink size =40 >
<input type=hidden name=action value=go>
<input type=submit name=Submit value=Submit>
</form>
";

}


?>

