<?php


include $_SERVER['DOCUMENT_ROOT'] . "/header.php";


include BASEPATH . "/docs/menu.php";

$GLOBALS['CHAIN']='candeo';



 $query = mysqli_query($japansql, "select  *  from locations    where type ='hotel' and  marker= '".$GLOBALS['CHAIN']."' and active =1");
       while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
         $locations[$result['island']][]=$result;
        }

echo "
<div class=\"container  container-md  border-0 \">
 <div class=\"row p-2  border-0 \">
    <div class=\"col  text-start p-2  border-0 \"
      <center ><h1><center>Candeo Hotels</h1><br>
<center><table border='0'  cellpadding =5 cellspacing =5 >

 ";
foreach($locations as $island=>$locationdata){
    $counter=0;
    echo "<tr ><td colspan= 4 bgcolor=#cccccc>
    <b>".strtoupper($island)."</b>
    </td></tr>
    ";
    foreach($locationdata as $location){
        echo " <td>
     <form method =POST action=map.php  title='Go Hotel' ><td>
      <input type=hidden name=id  value =\"".$location['id']."\" >
          <input type=\"image\"   src='images/redlocationIcon.avif' width='16'  title=\"Show on Map\" >
        </form > <a href='".$location['web_page']."' style=\"background-color:cccccc;text-decoration:none;text-align:center;\"  target='_blank'>".$location['location_name'] ."</a></td>";

        $counter++;
if($counter%2==0) {
    echo "</tr><tr>";

    }

    }



}
echo"</table></div></div>";
echo "<p id=\"locationmap\"></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";

include BASEPATH . "/docs/footer.php";