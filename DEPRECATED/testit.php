<?php

echo "   <!DOCTYPE html>
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
  <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-115812690-1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-108639039-1');
    gtag('set', {'user_id': 'orders@ace.com.au'}); 
</script>

    <!-- Bootstrap core CSS -->
    <link href=\"cssols/bootstrap.min.css\" rel=\"stylesheet\">

     <!-- Bootstrap theme -->
    <link href=\"cssols/bootstrap-theme.min.css\" rel=\"stylesheet\">
     <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
     <link href=\"https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css\" rel=\"stylesheet\">
	        <link rel=\"stylesheet\" type=\"text/css\" href=\"olstyle.css\">

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
        document.timer.disp.value = '60'; 



myFunction();
}var myVar;
function myFunction() {
 myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById(\"loader\").style.display = \"none\";
  document.getElementById(\"myDiv\").style.display = \"block\";
}


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
 </head>

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
 		 
			</div>
 	         <div  class=\" collapse navbar-collapse\"  id=\"navigationbar\">
            <ul class=\"nav navbar-nav\"> 			 <li     class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Internal<span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\"><li ><a href=\"whoami.php\">WhoAmI</a></li><li ><a href=\"whosonline.php\">Users Online</a></li></ul></li><li    class=\" \"><a href=\"admin_defaultpages.php\" >Admin</a></li><li    class=\"dropdown \">
			 <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Support <span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\">
			 	 <li><a href=\"docs_defaultpages.php\">Documents</a></li>
				<li><a href=\"tickets_defaultpages.php\">Tickets</a></li>
				<li><a href=\"news_defaultpages.php\">News</a></li>
				  <li><a href=\"network_defaultpages.php\">Network</a></li>
			<li><a href=\"emailaddresses_defaultpages.php \">Email Addresses</a></li><li><a href=\"reports.php \">Reports</a></li></ul>
			 </li>
			<li   class=\"active\"   ><a href=\"transaction_header.php\">Service Records</a></li><li    ><a href=\"networkconnect.php\">Feature</a></li>
                    <li      class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Radius <span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\">  <li><a href=\"nbnradius_defaultpages.php\">NBN</a></li><li><a href=\"dslradius_defaultpages.php\">DSL</a></li>                     </ul>
                   </li><li    class=\"dropdown  \">
                         <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">New Service<span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\"><li><a href=nbn_newuser.php?nbnrequestype=new >NBN - New</a></li><li><a href=nbn_newuser.php?nbnrequestype=transfer >NBN - Transfer</a></li><li><a href=dsl_churnuser_part.php >DSL - Churn</a></li><li><a href=dsl_newuser_part.php >DSL - New</a></li></ul>
                         </li>
                        <li    class=\"dropdown  \">
                         <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Check Availability<span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\"><li><a href=\"available.php \">DSL</a></li><li><a href=\"nbnavailable.php \">NBN</a></li></ul>
                         </li>
                      
          </ul>
        </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
	 <!-- Bootstrap core JavaScript
    ================================================== -->
         <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"assetsols/js/vendor/jquery.min.js\"><\/script>')</script>
    <script src=\"js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"assetsols/js/ie10-viewport-bug-workaround.js\"></script>
<center>
   <form action=null method=post name=timer>
        <input class=top_menu_link align=right type=text name=title size=16 value=\'\' style=\"visibility:hidden; color:#000000; border-width:0px; background-color:#ffffff;\">
        <input class=top_menu_link type=text align=left name=disp size=2 style=\"visibility:hidden; color:#000000; border-width:0px; background-color:#ffffff\">
</form>


<script language=\"JavaScript\">
<!--

function submitlookup(selected_identifier,selected_type)
{

	if(selected_identifier == 0){
		alert('Invalid select , please choose a product type ');
		return 0;

	}


	if( selected_type== 'DSL')
	        var selection_string ='transactions.php?dsl_domain=all&id='+selected_identifier;
	if( selected_type== 'NBN')
                var selection_string ='nbnuserlist.php?nbn_domain=all&id='+selected_identifier;		
	if( selected_type== 'HSDPA')
                var selection_string ='pbauserlist.php?hsdpa_domain=all&id='+selected_identifier;
	if( selected_type== 'DIAL')
                var selection_string ='diallist.php?dial_domain=all&id='+selected_identifier;


	window.location = selection_string;



}


function submitnbnrealm(realm)
{

	 var  selected_domain = realm;	
	 var selection_string ='nbnuserlist.php?nbn_domain='+selected_domain+'&record_status=pending&type=pending';
	 window.location = selection_string;


}
function submithsdparealm(realm)
{

         var  selected_domain = realm; 
         var selection_string ='pbauserlist.php?hsdpa_domain='+selected_domain+'&record_status=pending&type=pending';
         window.location = selection_string;


}

function submitdslrealm(realm)
{

         var  selected_domain = realm ;
         var  selection_string ='transactions.php?dsl_domain='+selected_domain+'&record_status=pending&type=pending';
         window.location = selection_string;


}

function submitdialrealm(realm)
{

         var  selected_domain = realm;
         var  selection_string ='diallist.php?dial_domain='+selected_domain+'&type=active';
         window.location = selection_string;


}


-->
</script><center>

<table  width =44%    border=0 cellspacing=\"1\" cellpadding=\"1\"  bgcolor =#ffffff  >
  <tr valign=\"top\" bgcolor =#ffffff><td  align=center width=\"40\" nowrap><a href=\"transactions.php?dsl_domain=all\" class=\"text\"></a><br>  <div class=\"dropdown theme-dropdown clearfix\">	
		 <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">DSL <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu dropdown-menu-center\" id=\"dsllist\"  ><li id=\"aceadsl.com.au\"  ><a href=\"#\">aceadsl.com.au</li></ul>
            </li>  
</td><td  align=center width =20 nowrap><a href=\"nbnuserlist.php?nbn_domain=all\"  class=\"text\"> </a><br>   <div class=\"dropdown theme-dropdown clearfix\"> 
                 <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">NBN <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu dropdown-menu-center\" id=\"nbnlist\"  ><li id=\"wba.rcacenet.com.au\"  ><a href=\"#\">wba.rcacenet.com.au</li></ul></li></div>

	</td></tr><tr>

<td colspan =9 align =center><br>
        <form class=\"form-inline\"> <div class=\"form-group row\">  <input type=text name=identifier id=identifier  size=40 maxlength=64   class=\"form-control\"  >
	</div>
	<img src=\"images\spacer.gif\" width=20 >
	<div class=\"form-group  \"> 
	
	 <div class=\"dropdown theme-dropdown clearfix\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">SELECT <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu dropdown-menu-center\" id=\"recordsearch\"  >	 <li id=tranactions ><a href=\"#\">DSL</a></li> <li id=nbnuserlist ><a href=\"#\">NBN</a></li>
		 </ul>
            </li> 
	</div>
  </div>
</form>
</td>
</tr><tr>
<td  align =center class =text_small colspan =10>Search parameters are dependent on product (Username,IP Address, Name, AVC ID, FNN, Carrier ID)</span></td>
</tr>	</tr>
</table>
</center>
<script language=\"JavaScript\">
<!--

$('#dsllist li').on('click', function(){
	submitdslrealm( $(this).text())
});

$('#nbnlist li').on('click', function(){
        submitnbnrealm( $(this).text())
});


$('#hsdpalist li').on('click', function(){
        submithsdparealm( $(this).text())
});

$('#diallist li').on('click', function(){
        submitdialrealm( $(this).text())
});



$('#recordsearch li').on('click', function(){
	var typeofservice= $(this).text();
	var identity = document.getElementById(\"identifier\").value; 
	submitlookup(identity,typeofservice);
});


-->


</script>
<center></table></table>

</center>
<p align=right>
 <!-- Bootstrap core JavaScript
    ================================================== -->
         <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"assets/js/vendor/jquery.min.js\"><\/script>')</script>
    <script src=\"js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"assetsols/js/ie10-viewport-bug-workaround.js\"></script>
<center>
   <form action=null method=post name=timer>
        <input class=top_menu_link align=right type=text name=title size=16 value=\'\' style=\"visibility:hidden; color:#000000; border-width:0px; background-color:#ffffff;\">
        <input class=top_menu_link type=text align=left name=disp size=2 style=\"visibility:hidden; color:#000000; border-width:0px; background-color:#ffffff\">
</form>


<span class=top_menu_link><center></b><span class=text_small>Logged in as vocus\peter.bresser</span><span class =\"text-muted small\"> [1]</span></body>
</html>";