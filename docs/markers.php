<?php


echo "    
if(checkmarker=='honshu'){
          window['marker'+1]=new L.Marker([lat,lon],{icon:HonshuStationIcon} ).addTo(markerGroup);
}

else if(checkmarker=='hokkaido'){
           window['marker'+1]=new L.Marker([lat,lon], {icon:HokkaidoStationIcon} ).addTo(markerGroup);
}      

else if(checkmarker=='kyushu'){
          window['marker'+1]=new L.Marker([lat,lon],{icon:KyushuStationIcon} ).addTo(markerGroup);
}   

else if(checkmarker=='bike'){
          window['marker'+1]=new L.Marker([lat,lon],{icon:BikeIcon} ).addTo(markerGroup);
}   
else if(checkmarker=='honshu'){
window['marker'+1]=new L.Marker([lat,lon],{icon:StationIcon} );
}

else if(checkmarker == 'temple'){
window['marker'+1]=new L.Marker([lat,lon], {icon:TempleIcon}).addTo(markerGroup); } 
else if(((checkmarker.match(/JR /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:JRIcon}).addTo(markerGroup); } 
else if(((checkmarker.match(/jr /g) || []).length)>0){
   
window['marker'+1]=new L.Marker([lat,lon], {icon:JRIcon}).addTo(StationmarkerGroup); 
} 
else if(((checkmarker.match(/shinkansen /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:JRIcon}).addTo(StationmarkerGroup);  
}          
else if(((checkmarker.match(/tobu/g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:TobuIcon}).addTo(StationmarkerGroup);      
}
else if(((checkmarker.match(/metro /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:MetroIcon}).addTo(StationmarkerGroup);  
}  
else if(((checkmarker.match(/seibu /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:SeibuIcon}).addTo(StationmarkerGroup);      
}  
else if(((checkmarker.match(/keisei /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:KeiseiIcon}).addTo(StationmarkerGroup);      
}  
else if(((checkmarker.match(/meitetsu /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:MeitetsuIcon}).addTo(StationmarkerGroup);      
} 
else if(((checkmarker.match(/sotetsu /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:SotetsuIcon}).addTo(StationmarkerGroup);              
}

else if(((checkmarker.match(/mizushima /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:MizurinIcon}).addTo(StationmarkerGroup);              
} 
else if(((checkmarker.match(/awo line/g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:KobeElecIcon}).addTo(StationmarkerGroup);              
}    
else if(((checkmarker.match(/arima /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:KobeElecIcon}).addTo(StationmarkerGroup);              
}
else if(((checkmarker.match(/hanshin /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:HanshinIcon}).addTo(StationmarkerGroup);              
}
else if(((checkmarker.match(/kinokuni /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:JRIcon}).addTo(StationmarkerGroup);              
}
else if(((checkmarker.match(/hankai /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:HankaiIcon}).addTo(StationmarkerGroup);              
}
else if(((checkmarker.match(/kintetsu /g) || []).length)>0){

window['marker'+1]=new L.Marker([lat,lon], {icon:KintetsuIcon}).addTo(StationmarkerGroup);   
   
}
else if(((checkmarker.match(/seikibashi /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:SeikibashiIcon}).addTo(StationmarkerGroup);              
}
else if(((checkmarker.match(/kobe expressway/g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:KobeRapidIcon}).addTo(StationmarkerGroup);              
}
else if(((checkmarker.match(/hankyu /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:HankyuIcon}).addTo(StationmarkerGroup);              
}
else if(((checkmarker.match(/port liner/g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:KobeNewIcon}).addTo(StationmarkerGroup);              
}
else if(((checkmarker.match(/rokko /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:KobeNewIcon}).addTo(StationmarkerGroup);              
}
else if(((checkmarker.match(/fujikyu /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:FujiKyuIcon}).addTo(StationmarkerGroup);              
}
else if(((checkmarker.match(/kishu /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:KitetsuIcon}).addTo(StationmarkerGroup);              
}
else if(((checkmarker.match(/higashiyama /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:HigashiyamaIcon}).addTo(StationmarkerGroup);              
}
else if(((checkmarker.match(/toyama /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:ToyamaCIcon}).addTo(StationmarkerGroup);              
} 
else if(((checkmarker.match(/nankai /g) || []).length)>0){

window['marker'+1]=new L.Marker([lat,lon], {icon:NankaiIcon}).addTo(StationmarkerGroup);              
}
else if(((checkmarker.match(/oigawa /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:OigawaIcon}).addTo(StationmarkerGroup);              
}   
else if(((checkmarker.match(/southern alps /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:OigawaIcon}).addTo(StationmarkerGroup);              
}   
else if(((checkmarker.match(/ruins/g) || []).length)>0){             
window['marker'+1]=new L.Marker([lat,lon], {icon:RuinsIcon}).addTo(StationmarkerGroup);      
}     

else if(((checkmarker.match(/sake /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:SakeIcon}).addTo(StationmarkerGroup);
}                     
else if(((checkmarker.match(/sotetsu /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:SotetsuIcon}).addTo(StationmarkerGroup);      
}  
else if(((checkmarker.match(/jr /g) || []).length)>0){
window['marker'+1]=new L.Marker([lat,lon], {icon:StationIcon} ).addTo(StationmarkerGroup);;
}
else if(checkmarker=='hokkaido'){
window['marker'+1]=new L.Marker([lat,lon], {icon:StationIcon} ).addTo(markerGroup);
}      
else if(checkmarker=='kyushu'){
window['marker'+1]=new L.Marker([lat,lon],{icon:StationIcon} ).addTo(markerGroup);
}   
else if(checkmarker == 'city'){
window['marker'+1]=new L.Marker([lat,lon], {icon:CityIcon}).addTo(markerGroup);
}
else if(checkmarker == 'park'){
window['marker'+1]=new L.Marker([lat,lon], {icon:ParkIcon}).addTo(markerGroup);}
else if(checkmarker == 'busico'){
window['marker'+1]=new L.Marker([lat,lon], {icon:BusIcon}).addTo(markerGroup);}
else if(checkmarker == 'information'){
window['marker'+1]=new L.Marker([lat,lon], {icon: InfoIcon}).addTo(markerGroup); } 
else if(checkmarker == 'information1'){
window['marker'+1]=new L.Marker([lat,lon], {icon: InfoIcon}).addTo(markerGroup); }                
else if(checkmarker == 'information2'){
window['marker'+1]=new L.Marker([lat,lon], {icon: InfoTwoIcon}).addTo(markerGroup); }                
else if(checkmarker == 'information3'){
window['marker'+1]=new L.Marker([lat,lon], {icon: InfoThreeIcon}).addTo(markerGroup);  }              
else if(checkmarker == 'information5'){
window['marker'+1]=new L.Marker([lat,lon], {icon: InfoFourIcon}).addTo(markerGroup);}
else if(checkmarker == 'port'){
window['marker'+1]=new L.Marker([lat,lon], {icon:FerryIcon}).addTo(markerGroup);}
else if(checkmarker == 'coffee'){
window['marker'+1]=new L.Marker([lat,lon], {icon:CoffeeIcon}).addTo(markerGroup);}
else if(checkmarker == 'temple'){
window['marker'+1]=new L.Marker([lat,lon], {icon:TempleIcon}).addTo(markerGroup);}
else if(checkmarker == 'woodwork'){
window['marker'+1]=new L.Marker([lat,lon], {icon:locationIcon}).addTo(markerGroup);}
else if(checkmarker == 'mymarker'){
window['marker'+1]=new L.Marker([lat,lon], {icon:markerIcon}).addTo(markerGroup);}
else if(checkmarker == 'grantia'){
window['marker'+1]=new L.Marker([lat,lon], {icon:GrantiaIcon}).addTo(markerGroup);}
else if(checkmarker == 'hotel'){
window['marker'+1]=new L.Marker([lat,lon], {icon:HotelIcon}).addTo(markerGroup);}
else if(checkmarker == 'notes'){
window['marker'+1]=new L.Marker([lat,lon], {icon:NotesIcon}).addTo(markerGroup);}
else if(checkmarker == 'candeo'){
window['marker'+1]=new L.Marker([lat,lon], {icon:CandeoIcon}).addTo(markerGroup);}
else if(checkmarker == 'dormyinn'){
window['marker'+1]=new L.Marker([lat,lon], {icon:DormyInnIcon}).addTo(markerGroup);}
else if(checkmarker == 'toyokoinn'){
window['marker'+1]=new L.Marker([lat,lon], {icon:toyokoInnIcon}).addTo(markerGroup);}
else if(checkmarker == 'onyado'){
window['marker'+1]=new L.Marker([lat,lon], {icon:OnyadoIcon}).addTo(markerGroup); }
else if(checkmarker == 'routeinn'){

          if(checkmarker=='honshu'){
                      window['marker'+1]=new L.Marker([lat,lon],{icon:StationIcon} ).addTo(markerGroup);
          }
          
           if(checkmarker=='hokkaido'){
                       window['marker'+1]=new L.Marker([lat,lon], {icon:StationIcon} ).addTo(markerGroup);
          }      
       
        if(checkmarker=='kyushu'){
                      window['marker'+1]=new L.Marker([lat,lon],{icon:StationIcon} ).addTo(markerGroup);
          }   
         
window['marker'+1]=new L.Marker([lat,lon], {icon:routeInnIcon}).addTo(markerGroup);} 
 
else if(checkmarker == 'superhotel'){
window['marker'+1]=new L.Marker([lat,lon], {icon:superHotelIcon}).addTo(markerGroup); }
else if(checkmarker == 'palace'){
window['marker'+1]=new L.Marker([lat,lon], {icon:PalaceIcon}).addTo(markerGroup);}
else if(checkmarker == 'ruins'){
window['marker'+1]=new L.Marker([lat,lon], {icon:RuinsIcon}).addTo(markerGroup);}
else if(checkmarker == 'monument'){
window['marker'+1]=new L.Marker([lat,lon], {icon:MonumentIcon}).addTo(markerGroup);}    
else if(checkmarker == 'hotel'){
window['marker'+1]=new L.Marker([lat,lon], {icon:HotelIcon}).addTo(markerGroup); }
else if(checkmarker == 'ryokan'){
window['marker'+1]=new L.Marker([lat,lon], {icon:RyokanIcon}).addTo(markerGroup); } 
else if(checkmarker == 'station'){
window['marker'+1]=new L.Marker([lat,lon], {icon:StationIcon}).addTo(markerGroup);  }   
else if(checkmarker == 'joetsu'){
window['marker'+1]=new L.Marker([lat,lon], {icon:JoestuStationIcon}).addTo(markerGroup); }    
else if(checkmarker == 'sanyo'){
window['marker'+1]=new L.Marker([lat,lon], {icon:SanyoStationIcon}).addTo(markerGroup);}
else if(checkmarker == 'tohoku'){
window['marker'+1]=new L.Marker([lat,lon], {icon:TohokuStationIcon}).addTo(markerGroup);}     
else if(checkmarker == 'kyushu'){
window['marker'+1]=new L.Marker([lat,lon], {icon:KyushuStationIcon}).addTo(markerGroup); }    
else if(checkmarker == 'mizuho'){
window['marker'+1]=new L.Marker([lat,lon], {icon:KyushuStationIcon}).addTo(markerGroup);   } 
else if(checkmarker == 'akita'){
window['marker'+1]=new L.Marker([lat,lon], {icon:AkitaStationIcon}).addTo(markerGroup);  }
else if(checkmarker == 'yamagata'){
window['marker'+1]=new L.Marker([lat,lon], {icon:YamagataStationIcon}).addTo(markerGroup); }     
else if(checkmarker == 'horruriku'){
window['marker'+1]=new L.Marker([lat,lon], {icon:HorrurikuStationIcon}).addTo(markerGroup); }    
else if(checkmarker == 'hokkaido'){
window['marker'+1]=new L.Marker([lat,lon], {icon:HokkaidoStationIcon}).addTo(markerGroup);  }   
else if(checkmarker == 'tokaido'){
window['marker'+1]=new L.Marker([lat,lon], {icon:TokaidoStationIcon}).addTo(markerGroup); }   
else if(checkmarker == 'bar'){
window['marker'+1]=new L.Marker([lat,lon], {icon:BarIcon}).addTo(markerGroup);  }  
else if(checkmarker == 'museum'){
window['marker'+1]=new L.Marker([lat,lon], {icon:MuseumIcon}).addTo(markerGroup); }  
else if(checkmarker == 'building'){
window['marker'+1]=new L.Marker([lat,lon], {icon:BuildingIcon}).addTo(markerGroup); }              
else if(checkmarker == 'theatre'){
window['marker'+1]=new L.Marker([lat,lon], {icon:TheatreIcon}).addTo(markerGroup);  }

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
window['marker'+1]=new L.Marker([lat,lon], {icon:GeneralStationIcon}).addTo(StationmarkerGroup); 
}
else{
window['marker'+1]=new L.Marker([lat,lon], {icon:GeneralStationIcon}).addTo(StationmarkerGroup); 
 } 
  
 

 


";