


request.open('GET', 'https://api.openrouteservice.org/v2/directions/cycling-regular?api_key=5b3ce3597851110001cf62488946ef5ab53a41b8bd2791b40e206222&start='+mylongitude+','+mylatitude+'&end=$endlon,$endlat');
request.setRequestHeader('Accept', 'application/json, application/geo+json, application/gpx+xml, img/png; charset=utf-8');
akitapolyline.removeFrom(map);



