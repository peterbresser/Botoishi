<?php


echo "    
     

          if(mycon=='honshu'){
                      window['marker'+1]=new L.Marker([lat,lon],{icon:StationIcon} ).addTo(markerGroup);
          }
          
           if(mycon=='hokkaido'){
                       window['marker'+1]=new L.Marker([lat,lon], {icon:StationIcon} ).addTo(markerGroup);
          }      
       
        if(mycon=='kyushu'){
                      window['marker'+1]=new L.Marker([lat,lon],{icon:StationIcon} ).addTo(markerGroup);
          }   
         
else if(mycon=='kyushu'){
          window['marker'+1]=new L.Marker([lat,lon],{icon:KyushuStationIcon} ).addTo(markerGroup);
}   

             if(mycon == 'city')    
                window['marker'+1]=new L.Marker([lat,lon], {icon:CityIcon}).addTo(markerGroup);;
                if(mycon == 'park')
                window['marker'+1]=new L.Marker([lat,lon], {icon:ParkIcon}).addTo(markerGroup);;
                 if(mycon == 'busico')
                window['marker'+1]=new L.Marker([lat,lon], {icon:BusIcon}).addTo(markerGroup);;
                 if(mycon == 'information1')
                   window['marker'+1]=new L.Marker([lat,lon], {icon: InfoIcon}).addTo(markerGroup);;                 
                if(mycon == 'information2')
                   window['marker'+1]=new L.Marker([lat,lon], {icon: InfoTwoIcon}).addTo(markerGroup);;                 
                if(mycon == 'information3')
                  window['marker'+1]=new L.Marker([lat,lon], {icon: InfoThreeIcon}).addTo(markerGroup);;                
                 if(mycon == 'information5')
                   window['marker'+1]=new L.Marker([lat,lon], {icon: InfoFourIcon}).addTo(markerGroup);;
                
                
                
                
                   if(mycon == 'port')
                window['marker'+1]=new L.Marker([lat,lon], {icon:FerryIcon}).addTo(markerGroup);;
                if(mycon == 'coffee')
                window['marker'+1]=new L.Marker([lat,lon], {icon:CoffeeIcon}).addTo(markerGroup);;
                 if(mycon == 'temple')
                window['marker'+1]=new L.Marker([lat,lon], {icon:TempleIcon}).addTo(markerGroup);;
                 if(mycon == 'woodwork')
                window['marker'+1]=new L.Marker([lat,lon], {icon:locationIcon}).addTo(markerGroup);;
             if(mycon == 'mymarker')
                window['marker'+1]=new L.Marker([lat,lon], {icon:markerIcon}).addTo(markerGroup);;
                  if(mycon == 'grantia')
                    window['marker'+1]=new L.Marker([lat,lon], {icon:GrantiaIcon}).addTo(markerGroup);;
                if(mycon == 'hotel')
                window['marker'+1]=new L.Marker([lat,lon], {icon:HotelIcon}).addTo(markerGroup);;
                 if(mycon == 'notes')
                window['marker'+1]=new L.Marker([lat,lon], {icon:NotesIcon}).addTo(markerGroup);;
                if(mycon == 'candeo'){
                window['marker'+1]=new L.Marker([lat,lon], {icon:CandeoIcon}).addTo(markerGroup);;
           
                    }
              if(mycon == 'omo5')
                window['marker'+1]=new L.Marker([lat,lon], {icon:HoshinoIcon}).addTo(markerGroup);;
               if(mycon == 'hoshino')
                window['marker'+1]=new L.Marker([lat,lon], {icon:HoshinoIcon}).addTo(markerGroup);;
              if(mycon == 'dormyinn')
                window['marker'+1]=new L.Marker([lat,lon], {icon:DormyInnIcon}).addTo(markerGroup);;
              if(mycon == 'toyokoinn')
                window['marker'+1]=new L.Marker([lat,lon], {icon:toyokoInnIcon}).addTo(markerGroup);; 
                 if(mycon == 'onyado')
                window['marker'+1]=new L.Marker([lat,lon], {icon:OnyadoIcon}).addTo(markerGroup);; 
                if(mycon=='highlited'){
 
    window['marker'+1]=new L.Marker([lat,lon],{icon:HighLiteIcon} ).addTo(markerGroup);;
} 
                 if(mycon == 'routeinn')
                window['marker'+1]=new L.Marker([lat,lon], {icon:routeInnIcon}).addTo(markerGroup);; 
              if(mycon == 'restaurant'){
          
                window['marker'+1]=new L.Marker([lat,lon], {icon:RestaurantIcon}).addTo(markerGroup);;
             
                } 
                  if(mycon == 'superhotel'){
                            window['marker'+1]=new L.Marker([lat,lon], {icon:superHotelIcon}).addTo(markerGroup);; 
             
                }
                    if(mycon == 'palace')
                window['marker'+1]=new L.Marker([lat,lon], {icon:PalaceIcon}).addTo(markerGroup);; 
                     if(mycon == 'ruins')
                window['marker'+1]=new L.Marker([lat,lon], {icon:RuinsIcon}).addTo(markerGroup);; 
                          if(mycon == 'monument')
                window['marker'+1]=new L.Marker([lat,lon], {icon:MonumentIcon}).addTo(markerGroup);;     
                if(mycon == 'hotel')
                window['marker'+1]=new L.Marker([lat,lon], {icon:HotelIcon}).addTo(markerGroup);; 
                   if(mycon == 'ryokan')
                window['marker'+1]=new L.Marker([lat,lon], {icon:RyokanIcon}).addTo(markerGroup);;  
                  if(mycon == 'station')
                window['marker'+1]=new L.Marker([lat,lon], {icon:StationIcon}).addTo(markerGroup);;     
                 if(mycon == 'joetsu')
                window['marker'+1]=new L.Marker([lat,lon], {icon:JoestuStationIcon}).addTo(markerGroup);;     
                    if(mycon == 'sanyo'){

                window['marker'+1]=new L.Marker([lat,lon], {icon:SanyoStationIcon}).addTo(markerGroup);
                }    
                     if(mycon == 'tohoku')
                window['marker'+1]=new L.Marker([lat,lon], {icon:TohokuStationIcon}).addTo(markerGroup);;     
               if(mycon == 'kyushu')
                window['marker'+1]=new L.Marker([lat,lon], {icon:KyushuStationIcon}).addTo(markerGroup);;     
                 if(mycon == 'mizuho')
                window['marker'+1]=new L.Marker([lat,lon], {icon:KyushuStationIcon}).addTo(markerGroup);;    
                    if(mycon == 'akita')
                window['marker'+1]=new L.Marker([lat,lon], {icon:AkitaStationIcon}).addTo(markerGroup);;  
                             if(mycon == 'yamagata')
                window['marker'+1]=new L.Marker([lat,lon], {icon:YamagataStationIcon}).addTo(markerGroup);;      
                      if(mycon == 'horruriku')
                window['marker'+1]=new L.Marker([lat,lon], {icon:HorrurikuStationIcon}).addTo(markerGroup);;     
                       if(mycon == 'hokkaido')
                window['marker'+1]=new L.Marker([lat,lon], {icon:HokkaidoStationIcon}).addTo(markerGroup);;     
                if(mycon == 'tokaido')
                window['marker'+1]=new L.Marker([lat,lon], {icon:TokaidoStationIcon}).addTo(markerGroup);;    
                    if(mycon == 'bar')
                window['marker'+1]=new L.Marker([lat,lon], {icon:BarIcon}).addTo(markerGroup);;    
                      if(mycon == 'museum')
                window['marker'+1]=new L.Marker([lat,lon], {icon:MuseumIcon}).addTo(markerGroup);;   
                          if(mycon == 'building')
                window['marker'+1]=new L.Marker([lat,lon], {icon:BuildingIcon}).addTo(markerGroup);;               
                             if(mycon == 'theatre')
                window['marker'+1]=new L.Marker([lat,lon], {icon:TheatreIcon}).addTo(markerGroup);;  
                if(mycon == 'minshinku')
                window['marker'+1]=new L.Marker([lat,lon], {icon:MinshinkuIcon}).addTo(markerGroup);;  
                if(mycon == 'onsen')
                window['marker'+1]=new L.Marker([lat,lon], {icon:OnsenIcon}).addTo(markerGroup);;          
                 if(mycon == 'sake')
                        window['marker'+1]=new L.Marker([lat,lon], {icon:SakeIcon}).addTo(markerGroup);;          
                 if(mycon == 'walk')
                        window['marker'+1]=new L.Marker([lat,lon], {icon:WalkIcon}).addTo(markerGroup);;          
                 if(mycon == 'ski')
                        window['marker'+1]=new L.Marker([lat,lon], {icon:SkiIcon}).addTo(markerGroup);;  
                  if(mycon == 'temple')
                 window['marker'+1]=new L.Marker([lat,lon], {icon:TempleIcon}).addTo(markerGroup);;  
                   if(mycon=='bike'){
          window['marker'+1]=new L.Marker([lat,lon],{icon:BikeIcon} ).addTo(markerGroup);
}   
";
if(substr($_SERVER['PHP_SELF'],1)=='stationmap.php'    ) {
    echo " window['marker'+1]=new L.Marker([lat,lon], {icon:StationIcon}).addTo(markerGroup);;  ";
}