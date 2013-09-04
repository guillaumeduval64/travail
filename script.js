  function initialize() {

    // Create the map 
    // No need to specify zoom and center as we fit the map further down.
    var map = new google.maps.Map(document.getElementById("map_canvas"), {
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      streetViewControl: false
    });
 
    // Define the list of markers.
    // This could be generated server-side with a script creating the array.
    
        var markers= [{ latitude: 47.660937,
                              longitude: 9.569803 }]
    
    

    // Create the markers ad infowindows.
    for (index in markers) addMarker(markers[index]);
    function addMarker(data) {
      // Create the marker
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(data.lat, data.lng),
        map: map,
        title: data.nom + ' ' + data.prenom + ' ' + data.number + ' ' + data.street
      });
    
      // Create the infowindow with two DIV placeholders
      // One for a text string, the other for the StreetView panorama.
      var content = document.createElement("DIV");
      var title = document.createElement("DIV");
      var nomPrenom = data.nom + ' ' + data.prenom + ' ' + data.number + ' ' + data.street;
      var str = new String(nomPrenom);
      var URL = "http://localhost:81/symfony/web/app_dev.php/intranet/admin/"+ data.id+'/estimation';
      title.innerHTML = str.link( URL );
      content.appendChild(title);
      var streetview = document.createElement("DIV");
      streetview.style.width = "200px";
      streetview.style.height = "200px";
      content.appendChild(streetview);
      var infowindow = new google.maps.InfoWindow({
        content: content
      });

      // Open the infowindow on marker click
      google.maps.event.addListener(marker, "click", function() {
        infowindow.open(map, marker);
      });
    
      // Handle the DOM ready event to create the StreetView panorama
      // as it can only be created once the DIV inside the infowindow is loaded in the DOM.
      google.maps.event.addListenerOnce(infowindow, "domready", function() {
        var panorama = new google.maps.StreetViewPanorama(streetview, {
            navigationControl: false,
            enableCloseButton: false,
            addressControl: false,
            linksControl: false,
            visible: true,
            position: marker.getPosition()
        });
      });
    }

    // Zoom and center the map to fit the markers
    // This logic could be conbined with the marker creation.
    // Just keeping it separate for code clarity.
    var bounds = new google.maps.LatLngBounds();
    for (index in markers) {
      var data = markers[index];
      bounds.extend(new google.maps.LatLng(data.lat, data.lng));
    }
    map.fitBounds(bounds);
  }