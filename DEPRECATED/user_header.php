<?php

#print_r($_REQUEST);
echo "<center>
<div class=container>
<table width =810   border=0 cellspacing=\"0\" cellpadding=\"0\"  style=\"background-color: transparent\";>
  <tr valign=\"top\">";
$_GET['type']='NBN';
	$_POST['type']=$_GET['type'];

$_GET['id']=trim(ltrim($_GET['id']));
$selfie=str_replace("/","",$_SERVER['PHP_SELF']);

if($selfie=='nbnuserlist.php'){
echo "<tr  _bold align  = center valign =middle>
<form action=nbnuserlist.php method =POST><td>";
if($_POST['nbn_domain'])
	$_GET['nbn_domain'] =$_POST['nbn_domain'];

       if( $_GET['nbn_domain'])	
		$_SESSION['selected_nbn_domain']=$_GET['nbn_domain'];
       else	
		$_GET['nbn_domain']= $_SESSION['selected_nbn_domain'];


if($_GET['nbn_domain']!='all')
	echo "<input  type=hidden name =nbn_domain value=".$_GET['nbn_domain']." >";
else
	echo "<input  type=hidden name =nbn_domain value=all >";


echo "<input  type=hidden name =record_status value =pending >";
if(strtolower($_POST['type'])=='pending')
echo " <button  class=\"btn btn-sm btn-info\" role=\"button\"  >Pending <input type=hidden id=submitbutton name =type value=\"Pending\" >  </button>";

else
echo "<button class=\"btn btn-sm btn-info\" role=\"button\"  >Pending<input type=hidden id=submitbutton name =type value=\"Pending\" >  </button>";
echo "</td>
</form>
<form action=nbnuserlist.php method =POST><td>";
if($_GET['nbn_domain']!='all')
        echo "<input  type=hidden name =nbn_domain value=".$_GET['nbn_domain']." >";
else
        echo "<input  type=hidden name =nbn_domain value=all >";
echo "<input  type=hidden name =record_status value =current ><input  type=hidden name =service_status value =active >";
if(strtolower($_POST['type'])=='active')
echo "<button class=\"btn btn-sm btn-info\" role=\"button\" ><input type=hidden id=submitbutton name =type value=\"Active\" > Active</button>";
else
echo "<button class=\"btn btn-sm btn-info\" role=\"button\"  ><input type=hidden  id=submitbutton  name =type value=\"Active\" > Active</button>";

echo "</td>
</form>
<form action=nbnuserlist.php method =POST><td>";
if($_GET['nbn_domain']!='all')
        echo "<input  type=hidden name =nbn_domain value=".$_GET['nbn_domain']." >";
else
        echo "<input  type=hidden name =nbn_domain value=all >";
	echo "<input  type=hidden name =record_status value =current ><input  type=hidden name =service_status value =inactive >";
if(strtolower($_POST['type'])=='inactive')
echo "<button class=\"btn btn-sm btn-info\" role=\"button\"  >InActive<input type=hidden id=submitbutton name =type value=\"InActive\" >  </button>";

else
echo "<button class=\"btn btn-sm btn-info\" role=\"button\"  >InActive <input type=hidden id=submitbutton name =type value=\"InActive\" > </button>";

echo "</td>
</form>
<form action=nbnuserlist.php method =POST><td>";
if($_GET['nbn_domain']!='all')
        echo "<input  type=hidden name =nbn_domain value=".$_GET['nbn_domain']." >";
else
        echo "<input  type=hidden name =nbn_domain value=all >";
echo "<input  type=hidden name =supply_status value =rejected >";
if(strtolower($_POST['type'])=='rejected')
echo "<button class=\"btn btn-sm btn-info\" role=\"button\"  >Rejected <input type=hidden id=submitbutton name =type value=\"Rejected\" >  </button>";
else 
echo "<button class=\"btn btn-sm btn-info\" role=\"button\"  >Rejected <input type=hidden id=submitbutton name =type value=\"Rejected\" >  </button>";
echo "</td>
</form>
<form action=active_nbnuserlist.php method =POST><td>";
if($_GET['nbn_domain']!='all')
        echo "<input  type=hidden name =nbn_domain value=".$_GET['nbn_domain']." >";
else
        echo "<input  type=hidden name =nbn_domain value=all >";
echo "<input  type=hidden name =format value =csv >
<button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\" >Report  </button>
</td>
</form>
";
}


elseif($selfie=='transactions.php'){
if($_GET['type'])
$_POST['type']=$_GET['type'];

echo "<tr  _bold align  = center valign =middle>
<form action=transactions.php method =POST><td>";
if($_POST['dsl_domain'])
        $_GET['dsl_domain'] =$_POST['dsl_domain'];


       if( $_GET['dsl_domain'])
        	$_SESSION['selected_dsl_domain']=$_GET['dsl_domain'];
	 else
                $_GET['dsl_domain']= $_SESSION['selected_dsl_domain'];

if($_GET['dsl_domain']!='all')
        echo "<input  type=hidden name =dsl_domain value=".$_GET['dsl_domain']." >";
else
        echo "<input  type=hidden name =dsl_domain value=all >";
echo "<input  type=hidden name =record_status value =pending >";
if(strtolower($_POST['type'])=='pending')
echo "<button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\" ><input type=hidden id=submitbutton name =type value=\"Pending\" > Pending </button>";
else
echo "<button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\" ><input type=hidden id=submitbutton name =type value=\"Pending\" > Pending </button>";

echo "</td>
</form>
<form action=transactions.php method =POST><td>";
if($_GET['dsl_domain']!='all')
        echo "<input  type=hidden name =dsl_domain value=".$_GET['dsl_domain']." >";
else
        echo "<input  type=hidden name =dsl_domain value=all >";
echo "<input  type=hidden name =record_status value =current >
<input  type=hidden name =service_status value =active >";
if(strtolower($_POST['type'])=='active')
echo "<button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\" ><input type=hidden id=submitbutton name =type value=\"Active\" > Active </button>";
else
echo "<button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\" ><input type=hidden id=submitbutton name =type value=\"Active\" > Active </button>";
echo "</td>
</form>
<form action=transactions.php method =POST><td>";
if($_GET['dsl_domain']!='all')
        echo "<input  type=hidden name =dsl_domain value=".$_GET['dsl_domain']." >";
else
        echo "<input  type=hidden name =dsl_domain value=all >";
echo "<input  type=hidden name =record_status value =current >
<input  type=hidden name =service_status value =inactive >";
if(strtolower($_POST['type'])=='inactive')
echo "<button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\" ><input type=hidden id=submitbutton name =type value=\"InActive\" > InActive  </button>";
else
echo "<button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\" ><input type=hidden id=submitbutton name =type value=\"InActive\" > InActive  </button>";
echo "
</td>
</form>
<form action=transactions.php method =POST><td>";
if($_GET['dsl_domain']!='all')
        echo "<input  type=hidden name =dsl_domain value=".$_GET['dsl_domain']." >";
else
        echo "<input  type=hidden name =dsl_domain value=all >";
echo "
<input  type=hidden name =supply_status value =rejected >";
if(strtolower($_POST['type'])=='rejected')
echo " <button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\"  ><input type=hidden id=submitbutton name =type value=\"Rejected\" > Rejected</button>";
else
echo " <button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\"  ><input type=hidden id=submitbutton name =type value=\"Rejected\" > Rejected</button>";
echo " </td>
</form>
<form action=active_transactions.php method =POST><td>";
if($_GET['nbn_domain']!='all')
        echo "<input  type=hidden name =dsl_domain value=".$_GET['dsl_domain']." >";
else
        echo "<input  type=hidden name =dsl_domain value=all >";
echo "
<input  type=hidden name =format value =csv >
 <button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\"  >Report</button>
</td>
</form>


";
}


elseif($selfie=='pbauserlist.php'){

echo "<tr  _bold align  = center valign =middle bgcolor=#F0F0F0 ><td  _bold align =center  colspan =7 > </td ></tr><tr  _bold align  = center valign =middle>
<form action=pbauserlist.php method =POST><td>";

if($_POST['hsdpa_domain'])
        $_GET['hsdpa_domain'] =$_POST['hsdpa_domain'];

 if( $_GET['hsdpa_domain'])
                $_SESSION['selected_hsdpa_domain']=$_GET['hsdpa_domain'];
         else
                $_GET['hsdpa_domain']= $_SESSION['selected_hsdpa_domain'];


if($_GET['hsdpa_domain']!='all')
        echo "<input  type=hidden name =hsdpa_domain value=".$_GET['hsdpa_domain']." >";
else
        echo "<input  type=hidden name =hsdpa_domain value=all >";

echo "<input  type=hidden name =record_status value =pending >";
if($_POST['type']=='pending')
echo "<button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\" >Pending";
else
echo "<button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\" >Pending";

echo "</td>
</form> 
<form action=pbauserlist.php method =POST><td>";
if($_GET['hsdpa_domain']!='all')
        echo "<input  type=hidden name =hsdpa_domain value=".$_GET['hsdpa_domain']." >";
else
        echo "<input  type=hidden name =hsdpa_domain value=all >";
echo "<input  type=hidden name =record_status value =current >
<input  type=hidden name =service_status value =active >";

if(strtolower($_POST['type'])=='active')
echo "<button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\" >Active </button>";
else
echo "<button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\" >Active </button>";
echo "</td>
</form>
<form action=pbauserlist.php method =POST><td>";
if($_GET['hsdpa_domain']!='all')
        echo "<input  type=hidden name =hsdpa_domain value=".$_GET['hsdpa_domain']." >";
else
        echo "<input  type=hidden name =hsdpa_domain value=all >";
echo "<input  type=hidden name =record_status value =current >
<input  type=hidden name =service_status value =inactive >";

if(strtolower($_POST['type'])=='inactive')
echo " <button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\"  >InActive</button>";
else
echo " <button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\"  >InActive</button>";
echo "</td>
</form>
<form action=pbauserlist.php method =POST><td>";
if($_GET['hsdpa_domain']!='all')
        echo "<input  type=hidden name =hsdpa_domain value=".$_GET['hsdpa_domain']." >";
else
        echo "<input  type=hidden name =hsdpa_domain value=all >";
echo "
<input  type=hidden name =supply_status value =rejected >";
if(strtolower($_POST['type'])=='rejected')
echo " <button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\"  >Rejected</button>";
else
echo " <button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\"  >Rejected</button>";


echo "
</form>
</td>
<form action=active_pbauserlist.php method =POST><td>";
if($_GET['nbn_domain']!='all')
        echo "<input  type=hidden name =hsdpa_domain value=".$_GET['hsdpa_domain']." >";
else
        echo "<input  type=hidden name =hsdpa_domain value=all >";
echo "
<input  type=hidden name =format value =csv >
 <button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\"  >Report</button>
</td>
</form>";
}






elseif($selfie=='diallist.php' or $selfie=='dialtransactions.php'){
echo "<tr  _bold align  = center valign =middle bgcolor=#F0F0F0 ><td  _bold align =center  colspan =7 > </td ></tr><tr  _bold align  = center valign =middle>
<form action=diallist.php method =POST><td>";

if($_POST['dial_domain'])
        $_GET['dial_domain'] =$_POST['dial_domain'];

if($_GET['type'])
$_POST['type']=$_GET['type'];

if($_GET['dial_domain']!='all')
        echo "<input  type=hidden name =dial_domain value=".$_GET['dial_domain']." >";
else
        echo "<input  type=hidden name =dial_domain value=all >";


echo " <form action=diallist.php method =POST><td>";
if($_GET['dial_domain']!='all')
        echo "<input  type=hidden name =dial_domain value=".$_GET['dial_domain']." >";
else
        echo "<input  type=hidden name =dial_domain value=all >";
echo "<input  type=hidden name =record_status value =current >
<input  type=hidden name =service_status value =active >";
if(strtolower($_POST['type'])=='active')
echo "<button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\" >Active </button>";
else
echo "<button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\" >Active </button>";
echo "</td>
</form>
<form action=diallist.php method =POST><td><input  type=hidden name =service_status value =inactive >";
if($_GET['dial_domain']!='all')
        echo "<input  type=hidden name =dial_domain value=".$_GET['dial_domain']." >";
else
        echo "<input  type=hidden name =dial_domain value=all ><input  type=hidden name =service_status value =inactive >";
if(strtolower($_POST['type'])=='inactive')
echo " <button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\"  >InActive </button>";
else
echo " <button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\"  >InActive</button>";
echo "</td>
</form>
<form action=active_diallist.php method =POST><td>";
if($_GET['dial_domain']!='all')
        echo "<input  type=hidden name =dial_domain value=".$_GET['dial_domain']." >";
else
        echo "<input  type=hidden name =dial_domain value=all >";
echo "<input  type=hidden name =format value =csv >
 <button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\"  >Report</button>
</td>
</form>
";
}

elseif($selfie=='voipuserlist.php'){
echo "<tr  _bold align  = center valign =middle bgcolor=#F0F0F0 ><td  _bold align =center  colspan =7 >VOIP </td ></tr><tr  _bold align  = center valign =middle>
<form action=voipuserlist.php method =POST><td>";
if($_POST['dsl_domain'])
        $_GET['dsl_domain'] =$_POST['dsl_domain'];
if($_GET['dsl_domain']!='all')
        echo "<input  type=hidden name =dsl_domain value=".$_GET['dsl_domain']." >";
else
        echo "<input  type=hidden name =dsl_domain value=all >";
echo "<input  type=hidden name =record_status value =pending >";
if(strtolower($_POST['type'])=='pending')
echo "<button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\" >\"Pending\" </button>";
else
echo "<button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\" >\"Pending\" </button>";

echo "</td>
</form>
<form action=voipuserlist.php method =POST><td>";
if($_GET['dsl_domain']!='all')
        echo "<input  type=hidden name =dsl_domain value=".$_GET['dsl_domain']." >";
else
        echo "<input  type=hidden name =dsl_domain value=all >";
echo "<input  type=hidden name =record_status value =current >
<input  type=hidden name =service_status value =active >";
if(strtolower($_POST['type'])=='active')
echo "<button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\" >\"Active\" </button>";
else
echo "<button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\" >\"Active\" </button>";
echo "</td>
</form>
<form action=voipuserlist.php method =POST><td>";
if($_GET['dsl_domain']!='all')
        echo "<input  type=hidden name =dsl_domain value=".$_GET['dsl_domain']." >";
else
        echo "<input  type=hidden name =dsl_domain value=all >";
echo "<input  type=hidden name =record_status value =current >
<input  type=hidden name =service_status value =inactive >";
if(strtolower($_POST['type'])=='inactive')
echo " <button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\"  >InActive</button>";
else
echo " <button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\"  >InActive</button>";
echo "
</td>
</form>
<form action=voipuserlist.php method =POST><td>";
if($_GET['dsl_domain']!='all')
        echo "<input  type=hidden name =dsl_domain value=".$_GET['dsl_domain']." >";
else
        echo "<input  type=hidden name =dsl_domain value=all >";
echo "
<input  type=hidden name =supply_status value =rejected >";
if(strtolower($_POST['type'])=='rejected')
echo " <button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\"  >Rejected</button>";
else
echo " <button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\"  >Rejected</button>";
echo " </td>
</form>
<form action=active_voipuserlist.php method =POST><td>";
if($_GET['nbn_domain']!='all')
        echo "<input  type=hidden name =dsl_domain value=".$_GET['dsl_domain']." >";
else
        echo "<input  type=hidden name =dsl_domain value=all >";
echo "
<input  type=hidden name =format value =csv >
 <button class=\"btn btn-sm btn-info\" role=\"button\" href=\"\"  >Report</button>
</td>
</form>


";
}

$domains = explode(",", $_SESSION['sessiondata']);
$dsl_domain = "";

foreach ($domains as $dom) {
    if (strlen($dsl_domain) > 2) {
        $dsl_domain = $dsl_domain . " or dsl_domain = '$dom' ";
    } else {
        $dsl_domain = " dsl_domain  = '$dom' ";
    }
}

include_once "config.php";

$flagg = 0;



if (substr_count($selfie, "active_") < 1) {
    $localpage = "active_" . $selfie;
} else
    $localpage = $selfie;



if ($_REQUEST['pricing_band'])
    $localpage = $localpage . "?carrier=" . $_REQUEST['pricing_band'];

else
    $localpage = $localpage;



if ($localpage == "active_transactions.php")
    $displaypage = "DSL ";

elseif ($localpage == "active_pbauserlist.php")
    $displaypage = "HSPDA ";
elseif ($localpage == "active_nbnuserlist.php")
    $displaypage = "NBN ";


elseif ($localpage == "active_diallist.php")
    $displaypage = "DIAL ";
else
    $displaypage = "DSL ";

$selfie=str_replace("/","",$_SERVER['PHP_SELF']);

if ($selfie == 'voipuserlist.php') {

    echo "
         <td bgcolor=#FFFFFF align=center nowrap width=100%  ><form action=voipuserlist.php method=GET  class=\"form-inline\">
        <input type=text name=id style=\"width:370px;\"    maxlength=64   value=\"" . $_GET['id'] . "\"  class=\"form-control\" >
         <input type=hidden name =type value=pba>

        <button class=\"btn btn-sm btn-warning\" role=\"button\" href=\"\"  > Search <input type=hidden   name=go value=\"Search\"></button> 
 
        </form>
      </a></td>
        </tr>";
}




elseif($selfie == 'diallist.php') {

    echo "
         <td bgcolor=#FFFFFF align=center nowrap colspan =6  ><form action=diallist.php method=GET class=\"form-inline\">
        <input type=text name=id style=\"width:370px;\"    maxlength=64   value=\"" . $_GET['id'] . "\"  class=\"form-control\" >
	<input type=hidden name =dial_domain value =".$_REQUEST['dial_domain']." >
	  <button class=\"btn btn-sm btn-warning\" role=\"button\" href=\"\"  > Search <input type=hidden   name=go value=\"Search\"></button> 
 
        </form>
      </a></td>
        </tr>";
}


elseif ($selfie == 'transactions.php') {
    echo "
        <td bgcolor=#FFFFFF align=center nowrap  >
	<form action=transactions.php method=GET class=\"form-inline\" >
        <input type=text name=id style=\"width:370px;\"   maxlength=64   value=\"" . $_GET['id'] . "\"  class=\"form-control\"  >
	<input type=hidden name =dsl_domain value =".$_REQUEST['dsl_domain']." >
          <button class=\"btn btn-sm btn-warning\" role=\"button\" href=\"\"  > Search <input type=hidden   name=go value=\"Search\"></button> 

	</form>
      </a></td>
        </tr>";
}

elseif ($selfie == 'pbauserlist.php') {

    echo "
        <td bgcolor=#FFFFFF align=center nowrap width=200   colspan =7 ><form action=pbauserlist.php method=GET  class=\"form-inline\">
        <input type=text name=id style=\"width:370px;\"   maxlength=64   value=\"" . $_GET['id'] . "\" class=\"form-control\" >
	<input type=hidden name =hsdpa_domain value =".$_REQUEST['hsdpa_domain']." >
          <button class=\"btn btn-sm btn-warning\" role=\"button\" href=\"\"  > Search <input type=hidden   name=go value=\"Search\"></button> 

	</form>
      </a></td>
        </tr>";
}
elseif ($selfie == 'nbnuserlist.php') {

    echo "
 <td bgcolor=#FFFFFF align=center nowrap   >

	<form action=nbnuserlist.php method=GET class=\"form-inline\" >
	
           <input type=text  name=id style=\"width:370px;\"   maxlength=64   value=\"" . $_GET['id'] . "\" class=\"form-control\"  >

        <input type=hidden name =nbn_domain value =".$_REQUEST['nbn_domain']." >
	 <button  class=\"btn btn-sm btn-warning\" role=\"button\"  class=\"form-inline\"  > <input type=hidden  name=go value=\"Search\" \">Search</button>
        </form>
      </td>
        </tr>";
}

else
		echo "";
echo "	</tr>
</table><div> 
</center> <br><br>";

?>

