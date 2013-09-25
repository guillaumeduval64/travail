<?php

/* MyAppApBundle:Map:voirClient.html.twig */
class __TwigTemplate_d4751f1b04f52910b46de8d7c712672e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>    
         <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\" />
    <style type=\"text/css\">
      html { height: 100% }
      body { height: 100% }
      
      #map_canvas { height: 100%;
                    margin: 2px;
                    border-style:solid;
                    border-width:1px; }
    </style>
    <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>
  
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> 
  function initialize() {
    // Create the map 
    // No need to specify zoom and center as we fit the map further down.
    var map = new google.maps.Map(document.getElementById(\"map_canvas\"), {
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      streetViewControl: false
    });
 
    // Define the list of markers.
    // This could be generated server-side with a script creating the array.
        var markers= ";
        // line 30
        echo twig_jsonencode_filter($this->getContext($context, "markers"));
        echo ";
    // Create the markers ad infowindows.
    for (index in markers) addMarker(markers[index]);
       
    
    function addMarker(data) {
         var counter = data.test;
switch (counter)
{
case \"1\":
  image = 'http://chart.apis.google.com/chart?chst=d_map_xpin_icon&chld=pin|bank-dollar|52B552';
  break;
case \"2\":
  image = 'https://maps.google.com/mapfiles/kml/shapes/schools_maps.png';
  break;
default:
  image='http://chart.apis.google.com/chart?chst=d_map_xpin_icon&chld=pin|bank-dollar|52B552';
}
        
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(data.lat, data.lng),
        map: map,
        title: '1',
        icon: image,
        title: data.nom + ' ' + data.prenom + ' ' + data.number + ' ' + data.street
      });
    
      // Create the infowindow with two DIV placeholders
      // One for a text string, the other for the StreetView panorama.
      var content = document.createElement(\"DIV\");
      var title = document.createElement(\"DIV\");
      var nomPrenom = data.nom + ' ' + data.prenom + ' ' + data.number + ' ' + data.street;
      var str = new String(nomPrenom);
      var URL = \"http://localhost:81/symfony/web/app_dev.php/intranet/admin/\"+ data.id+'/estimation';
      title.innerHTML = str.link( URL );
      content.appendChild(title);
      var streetview = document.createElement(\"DIV\");
      streetview.style.width = \"200px\";
      streetview.style.height = \"200px\";
      content.appendChild(streetview);
      var infowindow = new google.maps.InfoWindow({
        content: content
      });

      // Open the infowindow on marker click
      google.maps.event.addListener(marker, \"click\", function() {
        infowindow.open(map, marker);
      });
    
      // Handle the DOM ready event to create the StreetView panorama
      // as it can only be created once the DIV inside the infowindow is loaded in the DOM.
      google.maps.event.addListenerOnce(infowindow, \"domready\", function() {
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
</script> 
</head> 
    
    
<body onload=\"initialize()\">
  <div id=\"map_canvas\" style=\"width: 80%; height: 80%;\"></div>
</body>
";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Map:voirClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 30,  19 => 1,);
    }
}
