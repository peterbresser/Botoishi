<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";




echo"<body >
";
include BASEPATH ."/docs/menu.php";



echo"
<br>
 
<div class=\"container  container-md border  border-0\">
 <div class=\"row p-3  border-0\">
    <div class=\"col  text-start p-2 \"11></div>
      <center ><h1><center>About Us</h1><br>
 <div class=\"card-body lh-base  border-0 text-start text-wrap\">  

  We are a couple of explorative/adventerous types , maybe not so adventerous as the years go by.  Hopefully we have more and just scratched the surface in our travels, taken a few risks and gone through a few doors that have opened our minds.<br><br>
  We are not supported,sponsored,influenced by any of busineses listed on the site, its a labour of love and having way to much time on our hands and a love of Japan . We enjoyed our time there and just wanted share our experience ( and play with various aspects of the functilnailty that can be built into a web site)
  <br>
  We dont use google, bing, yahoo , amazon or  apple  for  maps ,ratings, reviews or api . Maps are from OSM  and openrailwaymap. We run our own routing engine . Data is collected from experience (NO AI).


<br>
And there is nothing like a  map  ,  </p>
</div>
    </div>
 </div>
 </div
    
         <br><center>

	  </div>
	</div>
  </div>
</div>
";

echo "<p id=\"locationmap\" style='margin-top: 0;'></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";



include BASEPATH ."/docs/footer.php";
