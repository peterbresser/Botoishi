<?php


echo "    

if(checkmarker == 'bar'){
window['marker'+1]=new L.Marker([lat,lon], {icon:BarIcon}).addTo(markerGroup);  }  
else if(checkmarker == 'museum'){
window['marker'+1]=new L.Marker([lat,lon], {icon:MuseumIcon}).addTo(markerGroup); }  
else if(checkmarker == 'building'){
window['marker'+1]=new L.Marker([lat,lon], {icon:BuildingIcon}).addTo(markerGroup); }              
else if(checkmarker == 'theatre'){
window['marker'+1]=new L.Marker([lat,lon], {icon:TheatreIcon}).addTo(markerGroup);  }
else if(checkmarker == 'travel'){
window['marker'+1]=new L.Marker([lat,lon], {icon:TravelIcon}).addTo(markerGroup);  }
else if(checkmarker ==  'omo5'){
window['marker'+1]=new L.Marker([lat,lon], {icon:HoshinoIcon}).addTo(markerGroup);}
else if(checkmarker == 'hoshino'){
window['marker'+1]=new L.Marker([lat,lon], {icon:HoshinoIcon}).addTo(markerGroup);}

else if(checkmarker == 'Guest House'){
window['marker'+1]=new L.Marker([lat,lon], {icon:MinshinkuIcon}).addTo(markerGroup); } 
else if(checkmarker == 'onsen'){
window['marker'+1]=new L.Marker([lat,lon], {icon:OnsenIcon}).addTo(markerGroup); }         
else if(checkmarker == 'sake'){
window['marker'+1]=new L.Marker([lat,lon], {icon:SakeIcon}).addTo(markerGroup);}          
else if(checkmarker == 'walk'){
window['marker'+1]=new L.Marker([lat,lon], {icon:WalkIcon}).addTo(markerGroup); }         
else if(checkmarker == 'ski'){
window['marker'+1]=new L.Marker([lat,lon], {icon:SkiIcon}).addTo(markerGroup);  
}
else if(checkmarker == 'temple'){
window['marker'+1]=new L.Marker([lat,lon], {icon:TempleIcon}).addTo(markerGroup); 
} 
else if(checkmarker == 'restaurant'){
                window['marker'+1]=new L.Marker([lat,lon], {icon:RestaurantIcon}).addTo(markerGroup);;
             
                } 
 else if(checkmarker=='highlited'){

window['marker'+1]=new L.Marker([lat,lon],{icon:HighLiteIcon} ).addTo(markerGroup);;
}
else if(((checkmarker.match(/ linr/g) || []).length)>0){   
window['marker'+1]=new L.Marker([lat,lon], {icon:GeneralStationIcon}).addTo(markerGroup); 
}

else if(checkmarker == 'jrstation'){
window['marker'+1]=new L.Marker([lat,lon], {icon:JRIcon}).addTo(markerGroup);  
}

else if(checkmarker == 'metro'){
window['marker'+1]=new L.Marker([lat,lon], {icon:MetroIcon}).addTo(markerGroup);  
}
else if(checkmarker == 'walk'){
window['marker'+1]=new L.Marker([lat,lon], {icon:WalkIcon}).addTo(markerGroup);  
}

else if(checkmarker == 'subway'){
window['marker'+1]=new L.Marker([lat,lon], {icon:MetroIcon}).addTo(markerGroup);  
}

else if(checkmarker == 'tram'){
window['marker'+1]=new L.Marker([lat,lon], {icon:TramIcon}).addTo(markerGroup);  
}
else if(checkmarker == 'hotel'){
window['marker'+1]=new L.Marker([lat,lon], {icon:HotelIcon}).addTo(markerGroup);  
}

else{
window['marker'+1]=new L.Marker([lat,lon], {icon:GeneralStationIcon}).addTo(markerGroup); 
 } 
  
 

 


";