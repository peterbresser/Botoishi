<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";
echo"
 <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"  integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
     crossorigin=\"\"/>


 <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
     crossorigin=\"\"></script>  ";

echo"<body >

<center>
<div class=\"container  container-md  border-0 \">
 <div class=\"row p-2  border-0 \">
    <div class=\"col  text-start p-2  border-0 \">
      <center ><h1><center>Chain Hotels</h1><br>
  
   <p class=\" lh-base text-start text-wrap text text-start  \">Japanese chain hotels are so good, always found them to be of a high standard and in interesting areas , and whilst the standard and service are all of a high quality there is usually somneting unique about each one. 
   Like the business hotels they are usually around the station .We found the ones outside of the big cities to be the best .<br>
 
    
 
</p>  
    </div>
 </div>
 </div
    
         <br><center>

<div class=\"container-fluid text-center\">
  <div class=\"row\">
    <div class=\"col text-start p-2 \"><br><center>
 	
        <div class=\"card\" style=\"width: 14rem;\"><br><center><br>
          
             <img  src=\"images/dormy.jpeg\" style='height:120px;width:120px;' alt=\"dormyinn\"> 
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><br>Dormy Inn</p>
            </div>          
               <div class=\"card-footer\" style=\"padding:0!important;\">
      <div class=\"row\" style=\"margin:0!important;\">
<table width=100%><tr><td>
      <form method =POST action=hotels.php title='Go Hotel' > 
      <input type=hidden name=chain  value =\"dormyinn\" >
       <button type=\"submit\" class=\"btn text-dark\" style=\"text-decoration:none;border:0;\"><span class=text-dark >Hotel Map</span></button>
         </form >    </td><td>
                  <a href='dormyinn.php'  class=text-dark  style=\"text-decoration:none;text-align:right;\">
                Hotel List  </a>
                </td></tr></table>
      
     </div>
    </div>                  
	  </div><br>
	  	  <div class=\"col\"><br><center>
        <div class=\"card\" style=\"width: 14rem;\"><br><center><br>
              
              <img  src=\"images/grantia.webp\"style='height:120px;width:120px;'  alt=\"grandvio\"> 
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><br>Grantia Hotels</p>
                 </div> 
             <div class=\"card-footer   \" style=\"padding:0!important;background-color:#f2f2f2;style=\"text-decoration:none;text-align:left;\">
    
      <div class=\"row \" style=\"margin:0!important;\">
       <table width=100%><tr><td>
      <form method =POST action=hotels.php title='Go Hotel' > 
      <input type=hidden name=chain  value =\"grantia\" >
       <button type=\"submit\" class=\"btn text-dark\" style=\"text-decoration:none;border:0;\"><span class=text-dark >Hotel Map</span></button>
         </form >    </td><td>
                  <a href='grantia.php'  class=text-dark  style=\"text-decoration:none;text-align:right;\">
                Hotel List  </a>
                </td></tr></table>
      </div>
    </div>                    
	  </div>
	</div>

	  
	  </div> 
           <div class=\"col\"><br><center>
        <div class=\"card\" style=\"width: 14rem;\"><br><center><br>
              
              <img  src=\"images/hoshino.png\"style='height:120px;width:120px;'  alt=\"hoshino\"> 
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><br>Hoshino Hotels</p>
           </div> 
                        <div class=\"card-footer\" style=\"padding:0!important;\">
      <div class=\"row\" style=\"margin:0!important;\">
       <table width=100%><tr><td>
      <form method =POST action=hotels.php title='Go Hotel' > 
      <input type=hidden name=chain  value =\"hoshino\" >
       <button type=\"submit\" class=\"btn text-dark\" style=\"text-decoration:none;border:0;\"><span class=text-dark >Hotel Map</span></button>
         </form >    </td><td>
                  <a href='hoshino.php'  class=text-dark  style=\"text-decoration:none;text-align:right;\">
                Hotel List  </a>
                </td></tr></table>
      
      </div>
    </div>                  
	  </div><br>
	  	  <div class=\"col\"><br><center>
        <div class=\"card\" style=\"width: 14rem;\"><br><center><br>
              
              <img  src=\"images/apa.jpeg\"style='height:120px;width:120px;'  alt=\"onyado\"> 
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><br>APA Hotels</p>
            </div>        
             <div class=\"card-footer\" style=\"padding:0!important;\">
      <div class=\"row\" style=\"margin:0!important;\">
    <table width=100%><tr><td>
      <form method =POST action=hotels.php title='Go Hotel' > 
      <input type=hidden name=chain  value =\"apahotels\" >
       <button type=\"submit\" class=\"btn text-dark\" style=\"text-decoration:none;border:0;\"><span class=text-dark >Hotel Map</span></button>
         </form >    </td><td>
                  <a href='apahotels.php'  class=text-dark  style=\"text-decoration:none;text-align:right;\">
                Hotel List  </a>
                </td></tr></table>
   
      </div>
    </div>                    
	  </div>
	</div>

	  
	  </div>
           <div class=\"col\"><br><center>
        <div class=\"card\" style=\"width: 14rem;\"><br><center><br>
             
              <img  src=\"images/candeo.webp\"style='height:120px;width:120px;'  alt=\"candeohotel\"> 
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><br>Candeo Hotels</p>
            </div>    
            <div class=\"card-footer\" style=\"padding:0!important;\">
      <div class=\"row\" style=\"margin:0!important;\">
         <table width=100%><tr><td>
      <form method =POST action=hotels.php title='Go Hotel' > 
      <input type=hidden name=chain  value =\"candeo\" >
       <button type=\"submit\" class=\"btn text-dark\" style=\"text-decoration:none;border:0;\"><span class=text-dark >Hotel Map</span></button>
         </form >    </td><td>
                  <a href='candeohotels.php'  class=text-dark  style=\"text-decoration:none;text-align:right;\">
                Hotel List  </a>
                </td></tr></table>
        
    </div>
    </div>                  
	  </div><br>
	  	  <div class=\"col\"><br><center>
        <div class=\"card\" style=\"width: 14rem;\"><br><center><br>
              
              <img  src=\"images/granvia.webp\"style='height:120px;width:120px;'  alt=\"grandvia\"> 
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><br>Grandvia Hotels</p>
            </div>        
             <div class=\"card-footer\" style=\"padding:0!important;\">
      <div class=\"row\" style=\"margin:0!important;\">
           <table width=100%><tr><td>
      <form method =POST action=hotels.php title='Go Hotel' > 
      <input type=hidden name=chain  value =\"grandvia\" >
       <button type=\"submit\" class=\"btn text-dark\" style=\"text-decoration:none;border:0;\"><span class=text-dark >Hotel Map</span></button>
         </form >    </td><td>
                  <a href='grandvia.php'  class=text-dark  style=\"text-decoration:none;text-align:right;\">
                Hotel List  </a>
                </td></tr></table>
     
      </div>
    </div>                    
	  </div>
	</div>

	  
	  </div>
     <div class=\"col\"><br><center>
        <div class=\"card\" style=\"width: 14rem;\"><br><center><br>
             
              <img  src=\"images/onyadologo.webp\"style='height:120px;width:120px;'  alt=\"onyado\">
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><br>Onyado Hotels</p>
                   </div>   
                                                <div class=\"card-footer\" style=\"padding:0!important;\">
      <div class=\"row\" style=\"margin:0!important;\">
                                   <table width=100%><tr><td>
      <form method =POST action=hotels.php title='Go Hotel' > 
      <input type=hidden name=chain  value =\"onyada\" >
       <button type=\"submit\" class=\"btn text-dark\" style=\"text-decoration:none;border:0;\"><span class=text-dark >Hotel Map</span></button>
         </form >    </td><td>
                  <a href='onyada.php'  class=text-dark  style=\"text-decoration:none;text-align:right;\">
                Hotel List  </a>
                </td></tr></table>
        
      </div>
    </div>              
	  </div><br><br>
	  <div class=\"card\" style=\"width: 14rem;\"><br><center><br>
             
             <img  src=\"images/prince.webp\" style='height:120px;width:120px;' alt=\"prince hotels\"> 
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><br>Prince Hotels</p>
            </div>   
                                         <div class=\"card-footer\" style=\"padding:0!important;\">
      <div class=\"row\" style=\"margin:0!important;\">
                 <table width=100%><tr><td>
      <form method =POST action=hotels.php title='Go Hotel' > 
      <input type=hidden name=chain  value =\"princehotels\" >
       <button type=\"submit\" class=\"btn text-dark\" style=\"text-decoration:none;border:0;\"><span class=text-dark >Hotel Map</span></button>
         </form >    </td><td>
                  <a href='princehotel.php'  class=text-dark  style=\"text-decoration:none;text-align:right;\">
                Hotel List  </a>
                </td></tr></table>
      
      </div>
    </div>        
         </div>
	</div>
	  <div class=\"col\"><br><center>
        <div class=\"card\" style=\"width: 14rem;\"><br><center><br>
           
              <img  src=\"images/jrhotels.jpeg\"style='height:120px;width:120px;'  alt=\"onyado\"> 
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><br>JR Hotels</p>
              </div>      
                             <div class=\"card-footer\" style=\"padding:0!important;\">
      <div class=\"row\" style=\"margin:0!important;\">
                     <table width=100%><tr><td>
      <form method =POST action=hotels.php title='Go Hotel' > 
      <input type=hidden name=chain  value =\"jrhotel\" >
       <button type=\"submit\" class=\"btn text-dark\" style=\"text-decoration:none;border:0;\"><span class=text-dark >Hotel Map</span></button>
         </form >    </td><td>
                  <a href='jrhotel.php'  class=text-dark  style=\"text-decoration:none;text-align:right;\">
                Hotel List  </a>
                </td></tr></table>
      
      </div>
    </div>            
	  </div><br>
          <div class=\"col\"><br><center>
        <div class=\"card\" style=\"width: 14rem;\"><br><center><br>
           
              <img  src=\"images/mystays.webp\"style='height:120px; '  alt=\"mystays\"> 
            <div class=\"card-body\">
                <p class=\"card-text text-dark\"><br>Mystays</p>
              </div>      
                             <div class=\"card-footer\" style=\"padding:0!important;\">
      <div class=\"row\" style=\"margin:0!important;\">
                            <table width=100%><tr><td>
      <form method =POST action=hotels.php title='Go Hotel' > 
      <input type=hidden name=chain  value =\"mystays\" >
       <button type=\"submit\" class=\"btn text-dark\" style=\"text-decoration:none;border:0;\"><span class=text-dark >Hotel Map</span></button>
         </form >    </td><td>
                  <a href='mystays.php'  class=text-dark  style=\"text-decoration:none;text-align:right;\">
                Hotel List  </a>
                </td></tr></table>
  
      </div>
    </div>            
	  </div>
        </div>
                   
	  </div>
	</div>

    
        
        </div>
	  </div>
	</div>
  </div>
</div>
   

<div id=\"map\" style=\"height: 0vh;\"></div>";
echo "<p id=\"locationmap\"></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";

include BASEPATH ."/docs/footer.php";

