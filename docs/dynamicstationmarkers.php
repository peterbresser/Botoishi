<?php


echo "    

    if(((checkmarker.match(/jr /g) || []).length)>0){
                  window['marker'+1]=new L.Marker([lat,lon], {icon:JRIcon}).addTo(StationmarkerGroup);;  
                 
                  } 
    else if(((checkmarker.match(/shinkansen /g) || []).length)>0){
                  window['marker'+1]=new L.Marker([lat,lon], {icon:JRIcon}).addTo(StationmarkerGroup);;  
                  }          
    else if(((checkmarker.match(/tobu/g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:TobuIcon}).addTo(StationmarkerGroup);;      
                }
    else if(((checkmarker.match(/metro /g) || []).length)>0){
 
          window['marker'+1]=new L.Marker([lat,lon], {icon:MetroIcon}).addTo(StationmarkerGroup);;  
         
                }  
    else if(((checkmarker.match(/seibu /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:SeibuIcon}).addTo(StationmarkerGroup);;      
                }  
    else if(((checkmarker.match(/keisei /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:KeiseiIcon}).addTo(StationmarkerGroup);;      
                }  
    else if(((checkmarker.match(/meitetsu /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:MeitetsuIcon}).addTo(StationmarkerGroup);;      
                } 
    else if(((checkmarker.match(/sotetsu /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:SotetsuIcon}).addTo(StationmarkerGroup);;              
          }
          
     else if(((checkmarker.match(/mizushima /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:MizurinIcon}).addTo(StationmarkerGroup);;              
          } 
             else if(((checkmarker.match(/awo line/g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:KobeElecIcon}).addTo(StationmarkerGroup);;              
          }    
        else if(((checkmarker.match(/arima /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:KobeElecIcon}).addTo(StationmarkerGroup);;              
          }
              else if(((checkmarker.match(/hanshin /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:HanshinIcon}).addTo(StationmarkerGroup);;              
          }
      else if(((checkmarker.match(/kinokuni /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:JRIcon}).addTo(StationmarkerGroup);;              
          }
     else if(((checkmarker.match(/hankai /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:HankaiIcon}).addTo(StationmarkerGroup);;              
          }
    else if(((checkmarker.match(/kintetsu /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:KintetsuIcon}).addTo(StationmarkerGroup);;              
          }
         else if(((checkmarker.match(/seikibashi /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:SeikibashiIcon}).addTo(StationmarkerGroup);;              
          }
         else if(((checkmarker.match(/kobe expressway/g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:KobeRapidIcon}).addTo(StationmarkerGroup);;              
          }
else if(((checkmarker.match(/hankyu /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:HankyuIcon}).addTo(StationmarkerGroup);;              
          }
else if(((checkmarker.match(/port liner/g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:KobeNewIcon}).addTo(StationmarkerGroup);;              
          }
else if(((checkmarker.match(/rokko /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:KobeNewIcon}).addTo(StationmarkerGroup);;              
          }
    else if(((checkmarker.match(/fujikyu /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:FujiKyuIcon}).addTo(StationmarkerGroup);;              
          }
     else if(((checkmarker.match(/kishu /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:KitetsuIcon}).addTo(StationmarkerGroup);;              
          }
    else if(((checkmarker.match(/higashiyama /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:HigashiyamaIcon}).addTo(StationmarkerGroup);;              
          }
   else if(((checkmarker.match(/toyama /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:ToyamaCIcon}).addTo(StationmarkerGroup);;              
          } 
   else if(((checkmarker.match(/nankai /g) || []).length)>0){
      
         window['marker'+1]=new L.Marker([lat,lon], {icon:NankaiIcon}).addTo(StationmarkerGroup);;              
          }
    else if(((checkmarker.match(/oigawa /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:OigawaIcon}).addTo(StationmarkerGroup);;              
          }   
       else if(((checkmarker.match(/southern alps /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:OigawaIcon}).addTo(StationmarkerGroup);;              
            }   
      else if(((checkmarker.match(/ruins/g) || []).length)>0){             
         window['marker'+1]=new L.Marker([lat,lon], {icon:RuinsIcon}).addTo(StationmarkerGroup);;      
                }     
                  
    else if(((checkmarker.match(/sake /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:SakeIcon}).addTo(StationmarkerGroup);;
                }                     
   else if(((checkmarker.match(/sotetsu /g) || []).length)>0){
         window['marker'+1]=new L.Marker([lat,lon], {icon:SotetsuIcon}).addTo(StationmarkerGroup);;      
                }  
 else if(checkmarker=='highlited'){

window['marker'+1]=new L.Marker([lat,lon],{icon:HighLiteIcon} ).addTo(StationmarkerGroup);;
}
    else {
     
         window['marker'+1]=new L.Marker([lat,lon], {icon:StationIcon}).addTo(StationmarkerGroup);;   
      
    }
    
                
          ";