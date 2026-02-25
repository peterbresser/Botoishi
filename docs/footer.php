<?php
   $filename =substr($_SERVER['PHP_SELF'],1);


echo "<footer> 
<link rel = \"stylesheet\" href = \"".$GLOBALS['URLOCATION']."/css/mystyle.css\" /><center><span class='textblue_small'>last modified: ". date ("F d Y", filemtime($filename));
echo "
  <br><center><span class='textblue_small'>&copy 2025 botishi.com.au</span></center>
 </footer>

  </body>
</html>";
