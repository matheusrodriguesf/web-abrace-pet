<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
    
      #map {
       height:300px;
	   width:500px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 50%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
    /*Inicializa o mapa passando os valores de entrada*/

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -15.80479997, lng: -48.01125516},
          zoom: 13
        });
        var infoWindow = new google.maps.InfoWindow({map: map});
		var marker;

     
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Localização encontrada.' + position.coords.latitude + position.coords.longitude);
            map.setCenter(pos);
			
				
			
          },   
		  
		  
		  function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Falha no serviço.' :
                              'Error: Seu navegador não possui suporte.');
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAR0J4_MHKvJyzf2Q5lJaHkAoHDLopt0Gk&callback=initMap">
    </script>
  </body>
</html>