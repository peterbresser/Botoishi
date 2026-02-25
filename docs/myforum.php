<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";

echo " <head>  
 <link href=\"css/mystyle.css\" rel=\"stylesheet\">
</head>";

include BASEPATH ."/docs/menu.php";
echo "<style>
.navbar {
    margin: 0px; !important
    padding: 0px; !important
}

.container {
      padding: 0px; !important
     border: 0px; !important
}
</style>";

echo"

    <iframe src=frm2 style=\"border:none;\" width =100%  height=700px title=description></iframe>  

     

   ";




#include BASEPATH ."/docs/footer.php";
