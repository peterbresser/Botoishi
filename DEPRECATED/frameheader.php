<?php
#include $_SERVER['DOCUMENT_ROOT'] . "/../vendor/autoload.php";
 if (!$_SERVER['DOCUMENT_ROOT']) {
    $dir = exec('pwd');
    $_SERVER['DOCUMENT_ROOT'] = $dir;
}

include_once "../config.php";
/*

echo " <!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" /> 
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"images/favicon.ico\">

    <title>VOCUS Wholesale</title>


    <!-- Bootstrap core CSS -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

     <!-- Bootstrap theme -->
    <link href=\"cssols/bootstrap-theme.min.css\" rel=\"stylesheet\">
     <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
     <link href=\"https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css\" rel=\"stylesheet\">
	        <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">

  <!-- Awesome theme -->
    <link href=\"cssols/font-awesome.min.css\" rel=\"stylesheet\">


    <!-- Custom styles for this template -->
    <link href=\"cssols/navbar-fixed-top.css\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"../assetsols/js/ie-emulation-modes-warning.js\"></script>
  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
 
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>

  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>




<script type=\"text/javascript\">

    function starttick()
{
        warn = 10;
        document.timer.title.style.visibility = 'visible';
        document.timer.disp.style.visibility = 'visible';
        val = document.timer.disp.value;
        val--;
        document.timer.disp.value = val;
        if(val == warn)
        {
                document.bgColor = '#eeeeee';
        }
        if(val == (warn-1))
        {
                document.bgColor = '#ffffff';
        }
        if(val < warn)
                document.timer.disp.style.color = '#ff0000';
        if(val < 1)
        {
                document.timer.title.value = 'Idle Timed Out';
                document.timer.title.style.background = '#eeeeee';
                document.timer.disp.style.visibility = 'hidden';
                document.bgColor = '#eeeeee';
                window.location ='menu.php?logout=1';   
        }
        else
        {
                document.timer.title.value = 'Idle timeout in:';
                setTimeout('starttick()',1000);
        }
}

function starttimer()
{
        document.timer.disp.value = '60';";
if(substr_count($_SESSION['staffname'],'bresser')>0)
	echo "";#	echo   "setTimeout('starttick()',199000);";
else
	echo " setTimeout('starttick()',1800000);";
echo " 



myFunction();
}";

echo "var myVar;
function myFunction() {
 myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById(\"loader\").style.display = \"none\";
  document.getElementById(\"myDiv\").style.display = \"block\";
}";

	
echo "


// -->
</script>
<script type=\"text/javascript\">
  document.getElementById(\"loading\").className = \"loading-visible\";
  var hideDiv = function(){document.getElementById(\"loading\").className = \"loading-invisible\";};
  var oldLoad = window.onload;
  var newLoad = oldLoad ? function(){hideDiv.call(this);oldLoad.call(this);} : hideDiv;
  window.onload = newLoad;
</script>

 <link href=\"cssols/navbar-fixed-top.css\" rel=\"stylesheet\">
";

echo " </head>

  <body onLoad=\"starttimer();\"  >

      <!-- Static navbar -->
     <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        	<div class=\"container\" id=\"navfluid\">
          		<div class=\"navbar-header\">
			<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navigationbar\">
         			<span class=\"sr-only\">Toggle navigation</span>
		       		<span class=\"icon-bar\"></span>
		       		<span class=\"icon-bar\"></span>
		       		<span class=\"icon-bar\"></span> 

			  </button>
 			<a class=\"navbar-brand\" href=\"main.php\"><img src=\"images\avocus.png\"  class=\"img-rounded\" width =135 height =30 ></a>
			</div>
 	         <div  class=\" collapse navbar-collapse\"  id=\"navigationbar\">
            <ul class=\"nav navbar-nav\">";
# <a class=\"navbar-brand\" href=\"main.php\"><img src=\"images\avocus.png\"  class=\"img-rounded\" width =135 height =30 ></a>
# <a class=\"navbar-brand\" href=\"main.php\"><span class=text-danger> UAT MODE</span></a>

#include_once BASEPATH . "/shaping.inc";
#include BASEPATH . "/raddb.inc";
#include BASEPATH . "/extendedconfigraddb.inc";
include BASEPATH."/membersprivileges.inc";
$GLOBALS['MEMBERS']=$membersportal;
$GLOBALS['membersportal']='membersportal';
$whoami=$_SESSION['location'];
#if(($_SESSION['staff']=='1'))
#        $master_acct_id =1;
#else
include_once BASEPATH . "/platfunctions.inc";

#print_r($_SESSION);
#        $master_acct_id=getmasteracct_id($_SESSION['sessiondata']);
     $master_acct_id=$_SESSION['master_account'];


#if((substr($_SERVER['REQUEST_URI'],1,(strrpos($_SERVER['REQUEST_URI'],".php")+3))) !='main.php')
#access_to($master_acct_id);

function access_to($master_acct_id)
{
      return 1;
}

$permission_flag = 1;
if ($_SESSION['location'] == "readonly-reseller" or $_SESSION['location']=='readonly-staff-reseller') {
    $permission_flag = 0;
}


showheader($master_acct_id,$permission_flag );
#}
#checassprivileges($_SERVER['PHP_SELF']);

function showheader($master_acct_id,$permission_flag )
{


 //reseller_service_types=getresellerservices($_SESSION['sessiondata']);
	$allowed_stc='';
        foreach($reseller_service_types as $key => $value){
                if($value==0){
                if(strlen($allowed_stc)==0)
                        $allowed_stc .="'".$key."'";
                else
                         $allowed_stc .=",'".$key."'";
                }
        }
        if($allowed_stc)
                $permitted_cat=" and category not in (".$allowed_stc.")";
        else
                $permitted_cat="";

        if(($_SESSION['sessiondata']=='staff'))
                $permitted_cat="";

#echo "select DISTINCT category  from ".$GLOBALS['membersportal'].".header_control inner join ".$GLOBALS['membersportal'].".headers  on header_control.header_id=headers.header_id and sessiontype=".$_SESSION['sessiontype']."  and stafflevel <= ".$_SESSION['sessionlevel']." and type in ('o','r')  and active='1' ".$permitted_cat." and masteracct =".$master_acct_id." order by  header_control.header_id asc";




          if ($_SESSION['staff'] == 1) {
echo " 			 <li   ".$active_hglt."  class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Internal<span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\">";

                         if(substr_count($_SERVER['REQUEST_URI'],'whoami.php')>0)
                         echo "<li class=\"active\"><a href=\"whoami.php\">WhoAmI</a></li>";
                        else
                         echo "<li ><a href=\"whoami.php\">WhoAmI</a></li>";
		
			 if(substr_count($_SERVER['REQUEST_URI'],'whosonline.php')>0)
                         echo "<li class=\"active\"><a href=\"whosonline.php\">Online</a></li>";
                        else
                         echo "<li ><a href=\"whosonline.php\">Users Online</a></li>";
			echo "</ul></li>";
			}
$heading==array();



#print_r($header_hlt);

 if($permission_flag == 0)
	$disabled = " disabled";
else
	$disabled = " ";
foreach($heading as $index =>  $value)
{
	if(substr_count($_SERVER['SCRIPT_NAME'],"/")>0)
		$file_name=str_replace("/","",$_SERVER['SCRIPT_NAME']);
	else
		$file_name=$_SERVER['SCRIPT_NAME'];

	if(active_page( $file_name, $index))
		$active_hglt=" class=\"active\"  ";
	else
		$active_hglt=" ";		
	
		##RADIUS DROP DOWN - PERMISSIONS

		if($index=="Admin"){
			#RESTRICT TO WS STAFF AND RESELLER
			if($_SESSION['sessiontype']=='1000' or $_SESSION['sessiontype']=='1050' )
				  echo "<li  ".$active_hglt." class=\"".$disabled."\"><a href=\"".$value."\" >".($index)."</a></li>";

	
		}
		##SUPPORT DROP DOWN - PERMISSIONS
		elseif($index=="Support"){
			$supportheader=mysqli_query($GLOBALS['MEMBERS'],"select name,url  from ".$GLOBALS['membersportal'].".headers  where  active='1' and category  ='Support' and  type='dp' ");
			while($supportresult=mysqli_fetch_assoc($supportheader))
				$support_details[$supportresult['name']]=$supportresult['url'];

		    echo  "<li ".$active_hglt."  class=\"dropdown \">
			 <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Support <span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\">
			 	 <li><a href=\"docs_defaultpages.php\">Documents</a></li>
				<li><a href=\"tickets_defaultpages.php\">Tickets</a></li>
				<li><a href=\"news_defaultpages.php\">News</a></li>
				  <li><a href=\"network_defaultpages.php\">Network</a></li>
			";
			foreach($support_details as $name => $url){

			echo "<li><a href=\"".$url." \">".$name."</a></li>";

			}
				echo "</ul>
			 </li>
			";
		}
		elseif($index=="Check Availability"){
		$nbn_plan = get_nbn_plans($_SESSION['sessiondata']);
                    echo  "<li ".$active_hglt."  class=\"dropdown ".$disabled."\">
                         <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Check Availability<span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\">";
			if($reseller_service_types['DSL']!=0)
                        echo "<li><a href=\"available.php \">DSL</a></li>";
			if($reseller_service_types['NBN']!=0)	 
				echo "<li><a href=\"nbnavailable.php \">NBN</a></li>";
 
                                echo "</ul>
                         </li>
                        ";



		}

		 elseif($index=="NCL2"){

			$nbn_ncl2 = checkncl2($_SESSION['sessiondata']);
			if($nbn_ncl2)		{

                               echo  "<li ".$active_hglt."  class=\"dropdown ".$disabled."\">
                         <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">NCL2<span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\">";

			 $ncl2header=mysqli_query($GLOBALS['MEMBERS'],"select distinct name,url  from ".$GLOBALS['membersportal'].".header_control inner join ".$GLOBALS['membersportal'].".headers  on header_control.header_id=headers.header_id and sessiontype='".$_SESSION['sessiontype']."'  and stafflevel <= ".$_SESSION['sessionlevel']."  and active='1' and category  ='NCL2' and masteracct =".$master_acct_id."  and  type='dp' ");
                while($ncl2result=mysqli_fetch_assoc($ncl2header))
				     echo "<li><a href=\"".$ncl2result['url']." \">".$ncl2result['name']."</a></li>";
				
		echo "</ul>
                         </li>
                        ";
					}

		}
		##NEW USER DROP DOWN - PERMISSIONS
		elseif($index=="New Service"){

		$newheader=mysqli_query($GLOBALS['MEMBERS'],"select name,url  from ".$GLOBALS['membersportal'].".header_control inner join ".$GLOBALS['membersportal'].".headers  on header_control.header_id=headers.header_id and sessiontype=".$_SESSION['sessiontype']."  and stafflevel <= ".$_SESSION['sessionlevel']."  and active='1' and category  ='New Service' and masteracct =".$master_acct_id."  and  type='dp'  order by headers.header_id");
                        while($newresult=mysqli_fetch_assoc($newheader))
                                $new_details[$newresult['name']]=$newresult['url'];
                    echo  "<li ".$active_hglt."  class=\"dropdown ".$disabled."\">
                         <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">New Service<span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\">";
                        foreach($new_details as $name => $url){
			if((substr_count(strtolower($name),"dsl")>0) or (substr_count(strtolower($name),"nbn")>0) )
				$tempname =substr($name,0,(strpos($name," ")));
			else
				 $tempname =$name;
#ds<button  class=\"btn  btn-primary  ".$disbaled."\" role=\"button\"    class=\"form-inline\" >Transfer NBN</button ><input type=hidden name =nbnrequestype value =transfer >	
			if($reseller_service_types[$tempname]>0){
				if(substr_count(strtolower($name),"nbn")>0){
					if(substr_count(strtolower($name),"transfer")>0)
					  echo "<li><a href=nbn_newuser.php?nbnrequestype=transfer >".$name."</a></li>";
					else
					  echo "<li><a href=nbn_newuser.php?nbnrequestype=new >".$name."</a></li>";
				}
				 if(substr_count(strtolower($name),"dsl")>0){
                                	if(substr_count(strtolower($name),"churn")>0)
					   echo "<li><a href=dsl_churnuser_part.php >".$name."</a></li>";
                                	else
					  echo "<li><a href=dsl_newuser_part.php >".$name."</a></li>";

                                }
				 if(substr_count(strtolower($name),"hsdpa")>0){
                                         echo "<li><a href=\"".$url." \">".$name."</a></li>";
                                        }

				if(substr_count(strtolower($name),"rc voice")>0){
                                         echo "<li><a href=\"".$url." \">".$name."</a></li>";
                                        }

				 if(substr_count(strtolower($name),"dial")>0){
                                         echo "<li><a href=\"".$url." \">".$name."</a></li>";
                                        }
				 if(substr_count(strtolower($name),"email")>0){
                                         echo "<li><a href=\"".$url." \">".$name."</a></li>";
                                        }

				}
				

                        }
                                echo "</ul>
                         </li>
                        ";

		
		}
		else
			echo "<li  ".$active_hglt." ><a href=\"".$value."\">".($index)."</a></li>";

		
	}
	if($permission_flag==1 and substr_count($_SESSION['location'],"reseller")>0)
		echo "<li ><a href=\"acctdetail.php\"><img src=\"images\myacct.png\" width =15 height=15 label=MyAccountDetails data-toggle=\"tooltip\" title=\"Account Access\" ></a></li>";
	else
		   echo "<li ><a href=\"acctdetail.php\"></a></li>";

	 
	echo "   <li ><a href=\"menu.php?logout=1\">Logout</span></a></li>

          </ul>
        </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
	";
}
# <script src=\"js/bootstrap-dropdown.js\"></script>


echo " <!-- Bootstrap core JavaScript
    ================================================== -->
         <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"assets/js/vendor/jquery.min.js\"><\/script>')</script>
    <script src=\"js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"assets/js/ie10-viewport-bug-workaround.js\"></script>
<center>
   <form action=null method=post name=timer>
        <input class=top_menu_link align=right type=text name=title size=16 value=\'\' style=\"visibility:hidden; color:#000000; border-width:0px; background-color:#ffffff;\">
        <input class=top_menu_link type=text align=left name=disp size=2 style=\"visibility:hidden; color:#000000; border-width:0px; background-color:#ffffff\">
</form>


";
*/
#echo   $tabledata="<a href=# onclick=\"window.open('buggerreport.php?page=".$_SERVER['REQUEST_URI']."','debug','fullscreen=no,toolbar=no,status=no,menubar=no,scrollbars=no,resizable=no,directories=no,location=no,width=1150,height=450');\" class=text-info>Bug Report</a>"; #$_SERVER['REQUEST_URI']);
#echo "<br>";

function active_page( $file_name,$index)
{
	$query=mysqli_query($GLOBALS['MEMBERS'],"select name,url   from  headers where type='page' and url='". $file_name."'  and active =9  and  category ='".$index."'");
	if($result=mysqli_fetch_assoc($query))
		return 1;
	else
		return 0;


}
?>
