<?php
include  $_SERVER['DOCUMENT_ROOT']."/header.php";


include BASEPATH ."/docs/menu.php";






$searchme ='';
$searchstring='';
if(!isset($_POST["search"])   )
{

    Echo "<center><span class='text-danger'><br>Invalid Sereach Query</span></center>";
    include BASEPATH ."/docs/footer.php";
    exit();
}
if(isset($_POST["search"])) {


    if(strlen(trim(ltrim($_POST["search"]))) <1 )
    {

   Echo "<center><span class='text-danger'><br>Invalid Sereach Query</span></center>";
        include BASEPATH ."/docs/footer.php";
        exit();
    }
}
if(isset($_POST["search"])) {

        $_POST["search"]= preg_replace('/[^\p{L}\s]+/u', '', $_POST["search"]);


if(!isset($_POST["search"])   )
{

    Echo "<center><span class='text-danger'><br>Invalid Sereach Query</span></center>";
    include BASEPATH ."/docs/footer.php";
    exit();
}
}
    $exclude=0;
if(isset($_POST["search"])) {
    $originalsearchparams=$_POST["search"];
    if(substr_count($_POST["search"], 'station') == 1) {
        $_POST["search"] = str_replace("station", "", $_POST["search"]);
        $exclude=1;
    }
      $_POST['search'] = trim(ltrim($_POST["search"]));
    $stationsearchstring='';
    if (substr_count($_POST['search'], " ") > 0) {
        $searchs = explode(" ", $_POST['search']);
        foreach ($searchs as $search) {
              $search = trim($search);
            if (strlen($searchstring) > 0) {
                $searchstring .= " and  (location_name like '%" . $search . "%'   or  description  like '%" . $search . "%' )";
                $stationsearchstring .= " and  (ename like '%" . $search . "%'   or  address  like '%" . $search . "%' )";
            } else
                $searchstring .= " ( location_name like '%" . $search . "%'   or  description  like '%" . $search . "%' )";
                $stationsearchstring .= " and  (ename like '%" . $search . "%'     or jname like '%" .  $search . "%' )";
        }

    } else {
    $searchstring = " ( location_name like '%" .$_POST['search'] . "%'  or  description  like '%" . $_POST['search'] . "%' ) ";
    $stationsearchstring = " ( ename like '%" . $_POST['search'] . "%'     or jname like '%" .  $_POST['search'] . "%'    ) ";
                }
}
$searchstring = " ( location_name like '%" .$_POST['search'] . "%'  or  description  like '%" . $_POST['search'] . "%' ) ";
$stationsearchstring = " ( ename like '%" . $_POST['search'] . "%'     or jname like '%" .  $_POST['search'] . "%'    ) ";
    if(substr_count($originalsearchparams, 'station') == 1)
        $searchstring='';







echo " <br><br>
 
  <div class=\"container  container-md \">
  <div class=\"row\"></div> 
    <div class=\"col\"> ";
if(!$exclude) {
    $location = array();

    $query = mysqli_query($japansql, "select  id, location_name, latitude, longitude, description, web_page, marker,type,passmap,traintype from locations  
where     (" . $searchstring . ")  and location_name not like '%station%'  and marker !='station'  and  zoomlevel =1   ");
    while ($result = mysqli_fetch_assoc($query)) {
        $result['location_name'] = ucwords(strtolower($result['location_name']));
        $result['description'] = str_replace(", Japan", " ", $result['description']);
        $location[] = array('id' => $result['id'], 'location_name' => $result['location_name'], 'marker' => 'internal', 'type' => $result['type'], 'latitude' => $result['latitude'], 'longitude' => $result['longitude'], 'description' => $result['description'], 'web_page' => $result['web_page'], 'passmap' => $result['passmap'],'traintype'=>$result['traintype']);

    }

    $query = mysqli_query($japansql, "select  id, location_name, latitude, longitude, description, web_page, marker,type,passmap,traintype from locations  
where     (" . $searchstring . ")  and location_name not like '%station%'  and marker !='station'  and zoomlevel !=1 order by id  asc");
    while ($result = mysqli_fetch_assoc($query)) {
        $result['location_name'] = ucwords(strtolower($result['location_name']));
        $result['description'] = str_replace(", Japan", " ", $result['description']);
        $location[] = array('id' => $result['id'], 'location_name' => $result['location_name'], 'marker' => $result['marker'], 'type' => $result['type'], 'latitude' => $result['latitude'], 'longitude' => $result['longitude'], 'description' => $result['description'], 'web_page' => $result['web_page'], 'passmap' => $result['passmap'],'traintype'=>$result['traintype']);

    }
}
$query2=mysqli_query($japansql ,"select   longitude, latitude ,ename as location_name,jname,address as description ,stations.id as id , stations.line_id as lineid, company_id, line_name  from stations inner join japan.jplines jp  on  stations.line_id =jp.line_id where  active =1 and latitude!='0'  and      (".$stationsearchstring.")  order by ename");
while($resultstation=mysqli_fetch_assoc($query2)) {
    $resultstation['location_name']=ucwords(strtolower($resultstation['location_name']));
    $resultstation['description']=str_replace(", Japan"," ",$resultstation['description']);
    $location[] = array('id'=>$resultstation['id'],'location_name'=>$resultstation['location_name'],'marker'=>'train','type'=>'station','latitude'=>$resultstation['latitude'],'longitude'=>$resultstation['longitude'],'description'=>$resultstation['description'],'web_page'=>$resultstation['web_page'],'passmap'=>$resultstation['passmap'],'line_name'=>$resultstation['line_name'],'jname'=>$resultstation['jname']);

}


foreach($location as $name=>$detail ){

    if($detail['type']=='hotel') {
        $imaged = 'images/hotelIcon3.png';
        if ($detail['marker'] == 'onsen')
            $imaged = 'images/hotelIcon3.png';
        if ($detail['marker'] == 'hotel')
            $imaged = 'images/hotelIcon3.png';
          if ($detail['marker'] == 'routeinn')
            $imaged = 'images/hotelIcon3.png';
    if ($detail['marker'] == 'dormyinn')
            $imaged = 'images/hotelIcon3.png';
        if ($detail['marker'] == 'superhotel')
            $imaged = 'images/hotelIcon3.png';
          if ($detail['marker'] != 'hotel' and   $detail['marker'] != 'ryokan'   and   $detail['marker'] != 'minshinku'  )
              $imaged='images/hotelIcon3.png';
        if ($detail['marker'] == 'minshinku')
            $detail['marker'] ="hotelIcon3.png";
          if ($detail['marker'] == 'hotel')
           $imaged = 'images/hotelIcon3.png';
        if ($detail['marker'] == 'ryokan')
            $imaged = 'images/hotelIcon3.png';
    }
    elseif($detail['type']=='information') {
        if ($detail['traintype'] == 1)
            $imaged = 'images/information.png';
        if ($detail['traintype'] == 2)
            $imaged = 'images/information2.png';
        if ($detail['traintype'] == 3)
            $imaged = 'images/information3.png';
        if ($detail['traintype'] == 4)
            $imaged = 'images/information4.png';
    }

    elseif($detail['type']=='travel')
            $imaged='images/hotelIcon2.png';
     elseif($detail['type']=='museum')
        $imaged='images/museum.png';

    if($detail['marker']=='onsen')
        $imaged='images/mkonsen.png';
    elseif($detail['marker']=='restaurant')
        $imaged='images/restaurant.png';
    elseif($detail['type']=='station')
         $imaged='images/station.png';
    elseif($detail['marker']=='museum')
        $imaged='images/museum.png';
   elseif($detail['marker']=='internal')
         $imaged='images/hotelIcon2.png';

   elseif($detail['marker']=='bar')
         $imaged='images/bar.avif';
   elseif($detail['type']=='busico')
        $imaged='images/bus.png';
    elseif($detail['marker']=='coffee')
        $imaged='images/coffee.png';
    elseif($detail['marker']=='sake')
        $imaged='images/mksake.png';
    elseif($detail['marker']=='park')
        $imaged='images/park.png';
    elseif($detail['marker']=='walk')
        $imaged='images/walk.png';
    elseif($detail['marker']=='soupstock')
        $imaged='images/soupsock2.png';
       else
        $imaged='images/hotelIcon3.png';

  echo "  
<div class=\"card\">
  <div class='text text-start card-body '> 
";
  if(substr_count($detail['description'],"Japan")>0)
            $detail['description']=str_replace("Japan","", $detail['description']);


  if($detail['marker']=='train')
      $detail['marker']='station';
if($detail['marker']=='internal')
     $detail['marker']='Botoishi';
  if($detail['marker']=='hotelIcon3.png')
        $detail['marker']='Hotel';

    if($detail['type']=='station')
        echo " <form method =POST action=map.php  title='GoTo Station Map' ><input type=hidden name=id  value =\"".$detail['id']."\" >
         <input type=hidden name= stationlocation value =1 >
         <input type=\"image\"   src='" . $imaged . "' width='22' alt=\"Button Image\" ></form > 
         <class='text-small'>[".ucfirst($detail['marker'])."]  ".ucfirst($detail['jname'])."<br> ";

        else
            echo " <form method =POST action=map.php  title='GoTo Map' ><input type=hidden name=id  value =\"".$detail['id']."\" >
         <input type=hidden name= stationlocation value =0 >
         <input type=\"image\" src='" . $imaged . "' width='22' alt=\"Button Image\" >
         <span class='text-small'>[".ucfirst($detail['marker'])."]</span></form > <br> ";


if($detail['web_page'])
echo "<a href=\"".$detail['web_page']."\" class=\"card-text text-blue\"  title='website' style='text-decoration: none;' target='_blank' >".$detail['location_name']."</a>
";
else
     echo "".$detail['location_name']."</a>
";

    if(!$detail['description'])
    $detail['description']='';
echo " <img src=\"images/spacer.gif\" width='42' height='1'>  </a><br> <span class='text-small'>".$detail['description']."</span>
 ";
    if($detail['type']=='station')
  echo " <img src=\"images/spacer.gif\" width='42' height='1'>  <span class='text-small'>" . $detail['line_name'] . "</span>  ";
  echo "
  
           
	  </div>  </div> 
";
}


if(count($location)<1) {

    echo "<br><span class='text-danger'>No results found</span> ";
}

echo "</div></div> <p id=\"locationmap\" style='margin-top: 0;'></p>
  <script> var map = new L.Map('map');   </script>
<script language=\"javascript\" src =\"js/mapikey.js\"</script>";
include BASEPATH ."/docs/mapfooter.php";

include BASEPATH ."/docs/footer.php";
