  
  $(document).ready(function(){
	$('.form').on('submit', function(e){
		e.preventDefault();
		console.log($(this).serialize());
	});
});
    
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