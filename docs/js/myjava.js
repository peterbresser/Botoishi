<?php 

 echo "var MyLocations= [".$locationsMy."];
                setMarkers(map, MyLocations);
}
 function checkForm(obj){
var newname=document.getElementById(\"searchname\").value;
  let span = document.getElementById(\"GFG_Span\");
         span.textContent = newname;
//         var msg =\"By clicking  you:\\n\(1)\tacknowledge and agree that the Service(s) that are the subject of this order are governed by the  Standard Terms, applicable \\n\\tProduct Schedule for the Service(s) and Service Level Agreement available at japan.bresser.net.au /legal-contracts or if applicable.\"
//#       return confirm(newname);
}
function showCustomername(){
            var newname=document.getElementById(\"searchname\").value;
            document.getElementById('shipname').value = newname;
        }
function setMarkers(map, MyLocations) {
var infowindow = new google.maps.InfoWindow();
for (var i = 0; i < MyLocations.length; i++) {
var beach = MyLocations[i];
var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
var marker = new google.maps.Marker({
position: myLatLng,
draggable: false,
map: map,
icon:MyLocations[i][5],
title: beach[0],
});
var contentString='<div id=\"content\"  style=\"z-index: 1; position:relative; left: 1%; top: 5%; width: 100%; will-change: transform; transform: translate(0px);\">'+
        '<div id=\"siteNotice\"><b>'+MyLocations[i][0]+
      '</b></div>'+
      '<div id=\"bodyContent\">'+
      '<p class =text >'+MyLocations[i][3]+'</div>'+
      '<p class =text >'+MyLocations[i][4]+'</div>'+
      '</div></div>';
        bindInfoWindow(marker, map, infowindow, contentString);
}
}
function bindInfoWindow(marker, map, infowindow, html, Ltitle) {
    google.maps.event.addListener(marker,'click', function() {
                infowindow.setContent(html);
                infowindow.open(map, marker);
    });
   google.maps.event.addListener(map, 'click', function() {
                    infowindow.close();
                    marker.open = false;
                });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
";
