<?php



if(isset($_POST['location'])) {
$_POST['location']=$_POST['location'];
}

if(isset($_POST['route'])) {
    $_POST['route']=$_POST['route'];
}
$routeset=0;
echo "var mymapinfo = L.control();";
echo "var routeset=0;

var  routelength=0;
var filename ='".substr($_SERVER['PHP_SELF'],1)."';



";
//function makerouteavailable(){
//this._div.innerHTML = '<h4>Explore Japan<br> <b><center><form method=POST action=routeme.php><input type=hidden name=longitude value =\"".$_POST['longitude']."\" ><input type=hidden name=latitude value =\"".$_POST['latitude']."\" ><input type=hidden name =go value =start><button class=\"btn btn-outline-blue  text  btn-lg\">Start</button></form></h4>';
//}";

    $displayname='';
    $mychain='';


    if (isset($_POST['pass'])) {
    if ($_POST['pass'] == '1')
        $displayname = 'JR East South Hokkaido';
    if ($_POST['pass'] == '2')
        $displayname = 'JR East Sapporo-noboribetsu';
        if ($_POST['pass'] == '3')
            $displayname = 'Sapporo-furano Area';
         if ($_POST['pass'] == '4')
            $displayname = 'JR East  Tohoku';
           if ($_POST['pass'] == '5')
            $displayname = 'All Hokkaido ';
  if ($_POST['pass'] == '6')
            $displayname = 'Ise - Kumano - Wakayama Area Tourist ';
        if ($_POST['pass'] == '7')
            $displayname = 'Takayama - Hokuriku Area Tourist ';

        if ($_POST['pass'] == '8')
            $displayname = 'Ise - Kumano - Wakayama Area Tourist ';
        if ($_POST['pass'] == '9')
            $displayname = 'Mt Fuji - Shizuoka Area Tourist  ';

         if ($_POST['pass'] == '10')
            $displayname = 'Nagano-Niigata';

     if ($_POST['pass'] == '11')
            $displayname = 'JR West All Area ';
     if ($_POST['pass'] == '12')
            $displayname = 'Hokuriku Area';
     if ($_POST['pass'] == '13')
            $displayname = 'JR West All Area ';
     if ($_POST['pass'] == '14')
            $displayname = 'Tokyo-Osaka Hokuriku Arch ';
       if ($_POST['pass'] == '15')
            $displayname = 'Okayama Hiroshima Yamaguchi Area';
        if ($_POST['pass'] == '16')
            $displayname = 'Sanyo San-in Area ';
        if ($_POST['pass'] == '17')
            $displayname = 'Setouchi Area ';
    if ($_POST['pass'] == '18')
            $displayname = 'Kansai Sanin Area ';

   if ($_POST['pass'] == '19')
            $displayname = 'Kansai Mini';
  if ($_POST['pass'] == '20')
            $displayname = 'Kansai Hiroshima Area';

  if ($_POST['pass'] == '21')
            $displayname = 'Hiroshima Yamaguchi Area';



  if ($_POST['pass'] == '22')
            $displayname = 'All Shikoku';

  if ($_POST['pass'] == '23')
            $displayname = 'Kagawa Mini Rail & Ferry';

    if ($_POST['pass'] == '24')
            $displayname = 'All Area Kyushu';

  if ($_POST['pass'] == '25')
            $displayname = 'Sanyo-San-In Northern Kyushu 7 Days';
  if ($_POST['pass'] == '26')
            $displayname = 'Southern Kyushu Area';

  if ($_POST['pass'] == '27')
            $displayname = 'Northern Kyushu Area';






      if ($_POST['pass'] == 'all')
        $displayname = '';

      }

if (isset($_POST['cardname'])) {
    if ($_POST['cardname'] == 'sapica')
        $displayname = 'Sapica IC Card';
    if ($_POST['cardname'] == 'suica')
        $displayname = 'Suica IC Card';

      if ($_POST['cardname'] == 'all') {
        $displayname = '';

      }


}
echo "var linemae='';";
if(isset($_POST['lineid'])){
    ##$GLOBALS['LINENAME']=$_POST['lineid'];
    echo "var linemae='".$GLOBALS['LINENAME']."';";

}

if(isset($_POST['chain'])){
    $mychain ="&chain=".$_POST['chain']."";
    if($_POST['chain']=='dormyinn')
        $displayname='Dormy Inn';
    if($_POST['chain']=='superhotel')
        $displayname='Super Hotel';
    if($_POST['chain']=='routeinn')
        $displayname='Route Inn';
    if($_POST['chain']=='toyokoinn')
        $displayname='Toyoko Inn';
    if($_POST['chain']=='hoshino')
        $displayname='Hoshino Resorts';
    if($_POST['chain']=='candeo')
        $displayname='Candeo Hotels';
        if($_POST['chain']=='princehotels')
        $displayname='Prince Hotels';
        if($_POST['chain']=='grantia')
        $displayname='Grantia Hotels';
    if($_POST['chain']=='onyado')
        $displayname='Onyado Hotels';
  if($_POST['chain']=='jrhotel')
        $displayname='JR Hotels';
  if($_POST['chain']=='apahotels')
        $displayname='APA Hotels';
if($_POST['chain']=='ryokan')
        $displayname='Ryokan';
if($_POST['chain']=='minshinku')
        $displayname='Minshinku';
if($_POST['chain']=='grandvia')
        $displayname='Grandvia Hotels';
if($_POST['chain']=='other')
        $displayname='';

}

if(isset($_POST['location'])){
	if($_POST['location']==1){	
		echo "var locationtype=1\n";
		}

	if($_POST['location']==2){
		echo "var locationtype=2\n";	
		}

}
else
	 echo "var locationtype=2\n";


if(isset($_POST['route']))
{
    echo "mymapinfo.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'info'); // create a div with a class
    this.update();
    return this._div;};";

}

if(isset($_POST['chain'])  or isset($_POST['location'])  or isset($_POST['island'])){
echo "mymapinfo.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'info'); // create a div with a class
    this.update();
    return this._div;
    };   ";

}

echo "mymapinfo.onAdd = function (map) {

    this._div = L.DomUtil.create('div', 'info'); // create a div with a class
    this.update();
    return this._div;
    };

// method that we will use to update the control based on feature properties passed
mymapinfo.update = function (props) {

    if(filename=='prefecture.php' ) {

        this._div.innerHTML = '<h4>Prefecture Map</h4>' + (props ?'<b>' + props['name'] +' </b><br />   <sup> </sup>': ' ');
        }

    if(filename=='touristinfo.php' ) {


        this._div.innerHTML = '<h4>Tourist Information Centers</h4>' + (props ?
            '<b>' + props['name'] + '</b><br />   <sup> </sup>'
            : ' ');
    }
    if(filename=='tannermap.php' ) {


        this._div.innerHTML = '<h4>Tanners Stations</h4>' + (props ?
            '<b>' + props['name'] + '</b><br />   <sup> </sup>'
            : ' ');
    }
    if(filename=='toiletmap.php' ) {


        this._div.innerHTML = '<h4>Tokyo Toilet Project</h4>' + (props ?
            '<b>' + props['name'] + '</b><br />   <sup> </sup>'
            : ' ');
    }
    if(filename=='stations.php' ) {


        this._div.innerHTML = '<h4>Station Map</h4>' + (props ?
            '<b>' + props['name'] + '</b><br />   <sup> </sup>'
            : ' ');
    }
    if(filename=='teststations.php' ) {


        this._div.innerHTML = '<h4> Station Map</h4>' +linemae+ ' ';
    }
    if(filename=='wollongong.php' ) {


        this._div.innerHTML = '<h4>Wollongong </h4>' + (props ?
            '<b>' + props['name'] + '</b><br />   <sup> </sup>'
            : ' ');
    }
    if(filename=='mrdonutmap.php' ) {


        this._div.innerHTML = '<h4>Mr Donut Map</h4>' + (props ?
            '<b>' + props['name'] + '</b><br />   <sup> </sup>'
            : ' ');
    }
    if(filename=='directions.php' ){";
        if($displayname)
            echo"this._div.innerHTML = '<h4>Explore Japan</h4> <b>".$displayname."</b>'";

    else
        echo "this._div.innerHTML = '<h4>Explore Japan</h4> <b>".$displayname."</b>'";


        echo "

    }
    if(filename=='ryokanmap.php' ){";
        if($displayname)
            echo"this._div.innerHTML = '<h4>Explore Japan</h4> <b>Ryokans</b>'";

    else
        echo "this._div.innerHTML = '<h4>Explore Japan</h4> <b>Ryokans</b>'";


        echo "

    }

    if(filename=='map.php' ){";
        if($displayname)
            echo"this._div.innerHTML = '<h4>Explore Japan</h4> <b>".$displayname."</b>'";

    else
        echo "this._div.innerHTML = '<h4>Explore Japan</h4> <b>".$displayname."</b>'";


        echo "

    }
    if(filename=='fullmap.php' ){";

            echo"this._div.innerHTML = '<h4>Explore Japan</h4> <b>".$displayname."</b>'";

       echo "

    }
    if(filename=='notwhathefuck' ){
       ";
        echo "";

        echo "
    }

    if(filename=='whathefuck' ){
       ";
        //echo "this._div.innerHTML = '  <h4>Explore Japan<br> <b><center><form method=POST action=routeme.php><input type=hidden name=longitude value =\"".$_POST['longitude']."\" ><input type=hidden name=latitude value =\"".$_POST['latitude']."\" >  <input type=hidden name=id value =\"".$_POST['id']."\" >   <input type=hidden name=id value =\"".$_POST['id']."\" > <input type=hidden name =go value =start><button class=\"btn btn-outline-dark     btn-lg\">StartO</button></form></h4>'";
        echo"";
        echo "
    }
if(filename=='hotels.php' ){";



    if($displayname)
        echo"this._div.innerHTML = '<h4>Hotel  Map</h4> <b>".$displayname."</b>'";

    else
          echo"this._div.innerHTML = '<h4>Hotel  Map</h4>';";


    echo "

}
    if(filename=='newhotels.php' ){";
        if($displayname)
            echo"this._div.innerHTML = '<h4>Hotel  Map</h4> <b>".$displayname."</b>'";

    else
        echo"this._div.innerHTML = '<h4>Hotel  Map</h4>';";


        echo "

    }
    if(filename=='passmap.php' ){";
        if($displayname)
            echo"this._div.innerHTML = '<h4>JR Pass  Map</h4> <b>".$displayname."</b>'";

    else
        echo"this._div.innerHTML = '<h4>JR Pass  Map</h4>';";


        echo "

    }
    if(filename=='minshinkumap.php' ){";
        if($displayname)
            echo"this._div.innerHTML = '<h4>Guest House Map</h4> <b>".$displayname."</b>'";

    else
        echo"this._div.innerHTML = '<h4>Guest House  Map</h4>';";


        echo "

    }
if(filename=='icardetails.php' ){
    ";

    if($displayname)
        echo"this._div.innerHTML = '<h4>IC Card Map</h4> <b>".$displayname."</b>'";

    else
          echo"this._div.innerHTML = '<h4>IC Card Map</h4>';";


    echo "

}

if(filename=='testdirectionlist.php') {


}


if(filename=='shinkansenmap.php') {

    ";

if(isset($_POST['route'])){
    if(isset($_POST['traintype']))
        $traintype="<span class=text-danger>".ucfirst($_POST['traintype'])."</span>";

if($_POST['route'] =='akita')
    echo "        this._div.innerHTML = '<h4>Shinkansen Map</h4>' + '<b>Akita</b> '+'".$traintype."';";
    elseif($_POST['route'] =='tokaido')
        echo "    this._div.innerHTML = '<h4>Shinkansen Map</h4>' + '<b>Tokaido</b> '+'".$traintype."';";
    elseif($_POST['route'] =='sanyo')
        echo "    this._div.innerHTML = '<h4>Shinkansen Map</h4>' + '<b>Sanyo</b> '+'".$traintype."';";
    elseif($_POST['route'] =='hokkaido')
        echo "    this._div.innerHTML = '<h4>Shinkansen Map</h4>' + '<b>Hokkaido</b> '+'".$traintype."';";
    elseif($_POST['route'] =='yamagata')
        echo "    this._div.innerHTML = '<h4>Shinkansen Map</h4>' + '<b>Yamagata</b> '+'".$traintype."';";
    elseif($_POST['route'] =='tohoku')
        echo "    this._div.innerHTML = '<h4>Shinkansen Map</h4>' + '<b>Tohoku</b> '+'".$traintype."';";
    elseif($_POST['route'] =='hokuriku')
        echo "    this._div.innerHTML = '<h4>Shinkansen Map</h4>' + '<b>Hokuriku</b> '+'".$traintype."';";
    elseif($_POST['route'] =='kyushu')
        echo "    this._div.innerHTML = '<h4>Shinkansen Map</h4>' + '<b>Kyushu</b> '+'".$traintype."';";
    elseif($_POST['route'] =='joetsu')
        echo "    this._div.innerHTML = '<h4>Shinkansen Map</h4>' +'<b>Joetsu</b> '+'".$traintype."';";
}
    else {
    if(isset($_POST['island'])) {

         if($_POST['island']=='all') {

            echo "    this._div.innerHTML = '<h4>Shinkansen Map</h4>' + (props ?
            '<b>' + props['name'] + '</b><br />   <sup> </sup>'
        : ' ');";
        }else{


             echo "    this._div.innerHTML = '<h4>Shinkansen Map</h4>' + (props ?
             '<b>' + props['name'] + '</b><br />   <sup> </sup>'
         : ' ');";
         }
    }
    else{

        echo "    this._div.innerHTML = '<h4>Shinkansen Map</h4>' + (props ?'<b>' + props['name'] + '</b><br />   <sup> </sup>': ' ');";

    }


        }

    echo "
}

};

function prefectureFeature(e ) {

    const details=[];
    var sline='';
    let result = e.substring(0, 5);
    if(e==1)
        details['name']='';
    else
        details['name']=e;

        mymapinfo.update(details);




}


function stationFeature(e) {

    const details=[];
    var sline='';
    let result = e.substring(0, 5);
        details['name']=e;

        mymapinfo.update(details);




}
function highlightFeature(e ) {

    const details=[];
    var sline='';
    let result = e.substring(0, 5);


     if(result =='line:')
         sline= e.substring(5);

    if(e=='in'){

        details['name']='32423423423423423';
        mymapinfo.update(details);

    }
    if(e=='out'){
        details['name']='';
        mymapinfo.update(details);
    }
    else{
        details['name']=sline;
        mymapinfo.update(details);
    }


}

const legend = L.control({position: 'bottomright'});";

    $hotelisland="";



echo "
legend.onAdd = function (map) {
    var div = L.DomUtil.create('div', 'info'); // create a div with a class
    grades = [0],
        labels = [];";

    if(isset($_POST['island'])) {

        if($_POST['island']=='all')
            $hotelisland="";
        else
            $hotelisland="&island=".$_POST['island']." ";
    }

    if(substr($_SERVER['PHP_SELF'],1)=='hotelsq.php' ) {
        echo
        "
        for (var i = 0; i < grades.length; i++) {
            div.innerHTML +=
                '<class=info> ' +

                '<table border =0><tr><td><a href=\'hotels.php?chain=toyokoinn".$hotelisland."\' >' + '<small>Toyoko Inn' + '</small></a>' +
                '</td></tr><tr><td>' +
                 '<a href=\'hotels.php?chain=hoshino".$hotelisland."\' >' + '<small>Hoshino' + '</small></a><br>' +
                '</td></tr><tr><td>' +
                 '<a href=\'hotels.php?chain=apahotels".$hotelisland."\' >' + '<small>APA' + '</small></a><br>' +
                '</td></tr><tr><td>' +
                '<a href=\'hotels.php?chain=superhotel".$hotelisland."\' >' + '<small>Super Hotel' + '</small></a><br>' +
                '</td></tr><tr><td>' +
                '<a href=\'hotels.php?chain=dormyinn".$hotelisland."\'>' + '<small>Dormy Inn' + '</small></a><br>' +
                '</td></tr><tr><td>' +
                '<a href=\'hotels.php?chain=routeinn".$hotelisland."\'>' + '<small>Route Inn' + '</small></a><br>' +
                '</td></tr><tr><td>' +
                '<a href=\'hotels.php?chain=candeo".$hotelisland."\'>' + '<small>Candeo Hotels' + '</small></a><br>' +
                '</td></tr><tr><td>' +
                '<a href=\'hotels.php?chain=grantia".$hotelisland."\'>' + '<small>Grantia Hotels' + '</small></a><br>' +
                '</td></tr><tr><td>' +
                '<a href=\'hotels.php?chain=onyado".$hotelisland."\'>' + '<small>Onyado Hotels' + '</small></a><br>' +
                '</td></tr><tr><td>' +
                '<a href=\'hotels.php?chain=minshinku".$hotelisland."\'>' + '<small>Minshinku' + '</small></a><br>' +
                    '<i  ></i> ' +
              '<a href=\'hotels.php?chain=jrhotel".$hotelisland."\'>' + '<small>JR Hotels' + '</small></a><br>' +
                '</td></tr><tr><td>' +
                '<a href=\'hotels.php?chain=others".$hotelisland."\'>' + '<small>Others' + '</small></a><br>' +
                '</td></tr><tr><td>' +
                '<a href=\'hotels.php?chain=ryokan".$hotelisland."\'>' + '<small>Ryokan</small> ' + '</a>' +
            '</td></tr><tr><td>' +
                '<a href=\'hotels.php\'>' + '<small>All</small> ' + '</a>'+
                '</td></tr></table>';
        }

"; }

     if(substr($_SERVER['PHP_SELF'],1)=='shinkansenmap.php'  and (isset($_POST['chain'])) ) {
         if(isset($_POST['traintype']))
              $hotelisland="&route=".$_POST['route']."&traintype=".$_POST['traintype']." ";
        else
                $hotelisland="&island=".$_POST['island']." ";

        echo
        "            div.innerHTML =
              '<a href=\'shinkansenmap.php?chain=toyokoinn".$hotelisland."\' ><img src=images/mktoyokoinn.png width=\"20px\">' + '<small>Toyoko Inn' + '</small></a><br>' +
                '<i  ></i> ' +
                '<i  ></i> ' +
                '<a href=\'shinkansenmap.php?chain=superhotel".$hotelisland."\' >' + '<small>Super Hotel' + '</small></a><br>' +
                '<i  ></i> ' +
                '<a href=\'shinkansenmap.php?chain=dormyinn".$hotelisland."\'>' + '<small>Dormy Inn' + '</small></a><br>' +
                '<i  ></i> ' +
              '<a href=\'shinkansenmap.php?chain=apahotels".$hotelisland."\'>' + '<small>APA' + '</small></a><br>' +
              '<i  ></i> ' +
                '<a href=\'shinkansenmap.php?chain=routeinn".$hotelisland."\'>' + '<small>Route Inn' + '</small></a><br>' +
                '<i  ></i> ' +
                '<a href=\'shinkansenmap.php?chain=candeo".$hotelisland."\'>' + '<small>Candeo Hotels' + '</small></a><br>' +
                '<i  ></i> ' +
                '<a href=\'shinkansenmap.php?chain=grantia".$hotelisland."\'>' + '<small>Grantia Hotels' + '</small></a><br>' +
                '<i  ></i> ' +
                '<a href=\'shinkansenmap.php?chain=onyado".$hotelisland."\'>' + '<small>Onyado Hotels' + '</small></a><br>' +
                '<i  ></i> ' +
                '<a href=\'shinkansenmap.php?chain=minshinku".$hotelisland."\'>' + '<small>Minshinku' + '</small></a><br>' +
              '<i  ></i> ' +
              '<a href=\'shinkansenmap.php?chain=jrhotel".$hotelisland."\'>' + '<small>JR Hotels' + '</small></a><br>' +
                '<i  ></i> ' +

                '<a href=\'shinkansenmap.php?chain=others".$hotelisland."\'>' + '<small>Others' + '</small></a><br>' +
                '<i  ></i> ' +
                '<a href=\'shinkansenmap.php?chain=ryokan".$hotelisland."\>' + '<small>Ryokan</small> ' + '</a><br>';
";
     }

        if(substr($_SERVER['PHP_SELF'],1)=='passmapq.php'  and (isset($_POST['chain'])) ) {

            $hotelisland="&island=".$_POST['island']." ";
            $passtype="&pass=".$_POST['pass']." ";
            echo
            "            div.innerHTML =
            '<a href=\'passmap.php?chain=toyokoinn".$passtype."\' >' + '<small>Toyoko Inn' + '</small></a><br>' +
            '<i  ></i> ' +
            '<i  ></i> ' +
            '<a href=\'passmap.php?chain=superhotel".$passtype."\' >' + '<small>Super Hotel' + '</small></a><br>' +
            '<i  ></i> ' +
            '<a href=\'passmap.php?chain=dormyinn".$passtype."\'>' + '<small>Dormy Inn' + '</small></a><br>' +
               '<i  ></i> ' +
            '<a href=\'passmap.php?chain=apahotels".$passtype."\'>' + '<small>APA' + '</small></a><br>' +
            '<i  ></i> ' +
            '<a href=\'passmap.php?chain=routeinn".$passtype."\'>' + '<small>Route Inn' + '</small></a><br>' +
            '<i  ></i> ' +
            '<a href=\'passmap.php?chain=candeo".$passtype."\'>' + '<small>Candeo Hotels' + '</small></a><br>' +
            '<i  ></i> ' +
            '<a href=\'passmap.php?chain=grantia".$passtype."\'>' + '<small>Grantia Hotels' + '</small></a><br>' +
            '<i  ></i> ' +
            '<a href=\'passmap.php?chain=onyado".$passtype."\'>' + '<small>Onyado Hotels' + '</small></a><br>' +
            '<i  ></i> ' +
            '<a href=\'passmap.php?chain=minshinku".$passtype."\'>' + '<small>Minshinku' + '</small></a><br>' +
            '<i  ></i> ' +
            '<a href=\'passmap.php?chain=jrhotel".$passtype."\'>' + '<small>JR Hotels' + '</small></a><br>' +
            '<i  ></i> ' +
            '<a href=\'passmap.php?chain=others".$passtype."\'>' + '<small>Others' + '</small></a><br>' +

            '<i  ></i> ' +
            '<a href=\'passmap.php?chain=ryokan".$passtype."\'>' + '<small>Ryokan</small> ' + '</a><br>';
            ";
        }
        if(substr($_SERVER['PHP_SELF'],1)=='shinkansenmap.php'  and (!isset($_POST['chain'])) )
        {
        $routeset =1;

        if(isset($_POST['island']) and isset(($_POST['route'])))
            echo  "    div.innerHTML = '<i  ></i> ' + '<a href=\'shinkansenmap.php?island=".$_POST['island']."&chain=all\'>' + '<small>Show Hotels' + '</small></a><br>' ";
             else{
                  if(isset($_POST['traintype']))
                    echo  " div.innerHTML = '<i  ></i> ' + '<a href=\'shinkansenmap.php?route=".$_POST['route']."&traintype=".$_POST['traintype']."&chain=all\'>' + '<small>Show Hotels' + '</small></a><br>' ";
                      else
                        {

                        if(isset(($_POST['route']))){
                        echo  "div.innerHTML= '<i  ></i> ' + '<a href=\'shinkansenmap.php?route=".$_POST['route']."&chain=all\'>' + '<small>Show Hotels' + '</small></a><br>' ";
                             }
                         else{
               echo  "div.innerHTML = ' ' + '<center><a href=\'shinkansenmap.php?show=location\' title=\'Show Location\'><img src=images/findme.png alt=\'findme\'></a><br>'  ";
                         }
        }
                    }
        }
    #         if(substr($_SERVER['PHP_SELF'],1)=='map.php' )
     #   {
     #     echo  "    div.innerHTML = '<i  ></i> ' + '<a href=\'map.php?id=".$_POST['id']."&stations=show\'>' + '<small>Show Stations' + '</small></a><br>' ";
    #    }
  if(substr($_SERVER['PHP_SELF'],1)=='ryokanmap.php'    )
        {

           //nasas

        } if(substr($_SERVER['PHP_SELF'],1)=='touristinfo.php'    )
        {

                echo  " div.innerHTML ='<table border =0><tr><td><a href=\'touristinfo.php?cat=1\' style=\'text-decoration:none\' title=\'Wifi\' ><img src=images/information.png  width=15px>Cat 3</a><br></td></tr><tr><td><a href=\'touristinfo.php?cat=2\'  style=\'text-decoration:none\'><img src=images/information2.png  width=15px>Cat 2 <br></a></td></tr><tr><td><a href=\'touristinfo.php?cat=3\' style=\'text-decoration:none\' ><img src=images/information3.png  width=15px>Cat 1 <br></a> </td></tr><tr><td align =left><a href=\'touristinfo.php?cat=4\' style=\'text-decoration:none\' ><img src=images/information4.png  width=15px>Partner<br></a></td></tr><tr><td></td><tr><td align = center><a href=\'touristinfo.php?show=location\' title=\'Show Location\'><img src=images/findme.png alt=\'findme\'></a><br></td></tr></table>'";
        }

        if(substr($_SERVER['PHP_SELF'],1)=='oldminshinkumap.php'    )
        {

            if(isset($_POST['island']))
                echo  "    div.innerHTML = '<i  ></i> ' + '<a href=\'minshinkumap.php?island=".$_POST['island']."&stations=show\'>' + '<small>Show Stations' + '</small></a><br>' ";



        }
        if(substr($_SERVER['PHP_SELF'],1)=='stationmap.php'    )
        {

         if(isset($_POST['island']) )
            echo  "    div.innerHTML = '<i  ></i> ' + '<a href=\'stationmap.php?island=".$_POST['island']."&chain=all\'>' + '<small>Show Hotels' + '</small></a><br>' ";
             else{
                  if(isset($_POST['traintype']))
                    echo  " div.innerHTML = '<i  ></i> ' + '<a href=\'stationmap.php?route=".$_POST['route']."&traintype=".$_POST['traintype']."&chain=all\'>' + '<small>Show Hotels' + '</small></a><br>' ";
                      else
                        {
                        echo  "div.innerHTML '<i  ></i> ' + '<a href=\'stationmap.php?route=".$_POST['route'].
                    "&chain=all\'>' + '<small>Show Hotels' + '</small></a><br>' ";
                        }
                    }


        }
        if(substr($_SERVER['PHP_SELF'],1)=='directions.php')
        {

            echo
            "div.innerHTML ='' + routelength + ' Km   to '+goingto+'' ";

        }
        if(substr($_SERVER['PHP_SELF'],1)=='passmap.php'     )
        {
            if(isset($_POST['island']))
                echo  "     div.innerHTML = '<i  ></i> ' + '<a href=\'passmap.php?pass=".$_POST['pass']."&island=".$_POST['island']."&chain=all\'>' + '<small>Show Hotels' + '</small></a><br>' ";
                else
                         echo  "     div.innerHTML = '<i  ></i> ' + '<a href=\'passmap.php?pass=".$_POST['pass']."&chain=all\'>' + '<small>Show Hotels' + '</small></a><br>' ";
        }
        if(substr($_SERVER['PHP_SELF'],1)=='railheat.php'   )
        {
             if(isset($_POST['show']))
                if($_POST['show']=='location')
                        $showmylocation="&show=location";
                else
                        $showmylocation="";

            if(isset($_POST['heat']) ) {
                if($_POST['heat']=='on')

                    echo  "div.innerHTML = ' ' + '<center><a href=\'railheat.php?show=location\' title=\'Show Location\'><img src=images/findme.png alt=\'findme\'></a><br>' ";
                else
                    echo  "div.innerHTML = ' ' + '<center><a href=\'railheat.php?show=location\' title=\'Show Location\'><img src=images/findme.png alt=\'findme\'></a><br>' ";
            }
            else
                echo  "div.innerHTML = ' ' + '<center> <a href=\'railheat.php?show=location\' title=\'Show Location\'><img src=images/findme.png alt=\'findme\'></a><br>'  ";

        }
        if(substr($_SERVER['PHP_SELF'],1)=='stations.php'   and (!isset($_REQUEST['id'])) )
        {

            echo  " div.innerHTML = '<i></i> ' + '<a href=\'stations.php?show=location\' title=\'Show Location\'><img src=images/findme.png alt=\'findme\'></a><br>' ";

        }
        if(substr($_SERVER['PHP_SELF'],1)=='fullmap.php'       )
        {


            echo  " div.innerHTML = '<i></i> ' + '<a href=\'fullmap.php?show=location\' title=\'Show Location\'><img src=images/findme.png alt=\'findme\'></a>' ";

        }
        if(substr($_SERVER['PHP_SELF'],1)=='wollongong.php'       )
        {


            echo  " div.innerHTML = '<i></i> ' + '<a href=\'map.php?show=location\' title=\'Show Location\'><img src=images/findme.png alt=\'findme\'></a>' ";


        }
        if(substr($_SERVER['PHP_SELF'],1)=='map.php'       )
        {


            echo  " div.innerHTML = '<i></i> ' + '<a href=\'map.php?show=location\' title=\'Show Location\'><img src=images/findme.png alt=\'findme\'></a>' ";

        }
        if(substr($_SERVER['PHP_SELF'],1)=='mrdonutmap.php'   )
        {


            echo  " div.innerHTML = '<i></i> ' + '<a href=\'map.php?show=location\' title=\'Show Location\'><img src=images/findme.png alt=\'findme\'></a>' ";

        }
        if(substr($_SERVER['PHP_SELF'],1)=='stations.php'   and ( isset($_REQUEST['prefecture'])) )
        {

            echo  " div.innerHTML = '<i></i> ' + '<a href=\'stations.php?prefecture=".$_REQUEST['prefecture']."&show=location\' title=\'Show Location\'><img src=images/findme.png alt=\'findme\'></a><br>' ";
        }

        if(substr($_SERVER['PHP_SELF'],1)=='teststations.php'   )
        {
            if($_POST['lineid'])
                echo  " div.innerHTML =  '<a href=\\'teststations.php?show=location&lineid=\"".$_POST['lineid']."\"\\' title=\\'Show Location\\'><img src=images/findme.png></a><br><a href=\\'teststations.php\\' title=\\'Show Stations\\'><img src=images/prefecturemap.png></a><br>';\n";

        else

            echo  " div.innerHTML =  '<a href=\\'teststations.php?show=location\\' title=\\'Show Location\\'><img src=images/findme.png></a><br><a href=\\'teststations.php\\' title=\\'Show Stations\\'><img src=images/prefecturemap.png></a><br>';\n";
            }
        echo"
        return div;
        ";

echo"
};

legend.gpsupdate = function (props) {

         if(filename=='hotels.php' ) {
             this._div.innerHTML = '<i><a href=".$_SERVER['PHP_SELF']."?location=1&type=hotel".$mychain."><img src=images/onlocation.png></a></i>';
         }
                 if(filename=='newhotels.php' ) {
             this._div.innerHTML = '<i><a href=".$_SERVER['PHP_SELF']."?location=1&type=hotel".$mychain."><img src=images/onlocation.png></a></i>';
         }


};
 if(filename=='fullmap.php') {

     legend.addTo(map);
 }

 if(filename=='hotelsq.php') {

     legend.addTo(map);
 }


    if(filename=='passmap.php' ) {
        legend.addTo(map);
    }" ;

  if($routeset==1) {
      echo
      "
      if (filename == 'shinkansenmap.php') {
          legend.addTo(map);
      }
      ";
  }
echo "
     if(filename=='wollongong.php' ) {
         legend.addTo(map);
}
     if(filename=='stations.php' ) {
         legend.addTo(map);
}
    if(filename=='teststations.php' ) {
        legend.addTo(map);
    }

     if(filename=='ryokanmap1.php' ) {
     legend.addTo(map);
 }

     if(filename=='oldminshinkumap.php' ) {
     legend.addTo(map);
 }
    if(filename=='mrdonutmap.php' ) {
        legend.addTo(map);
    }
     if(filename=='railheat.php'   ) {
     legend.addTo(map);
 }

  if(filename=='map.php'   || filename=='newprefecture.php' ) {


   legend.addTo(map);
    }

  if(filename=='touristinfo.php'   ) {
      legend.addTo(map);
    }


    function resetHighlight(e) {

    mymapinfo.update();
}
mymapinfo.addTo(map);


    function setrouteallowed()
    {

       // alert(routeset);



    }";

    //echo "
    //alert( this._div.innerHTML);
    //";
    ?>


