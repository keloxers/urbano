<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Circles</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>

// This example creates circles on the map, representing populations in North
// America.

// First, create an object containing LatLng and population for each city.
var citymap = {
  chicago: {
    center: {lat: <?php echo $tracks->latitud; ?>, lng: <?php echo $tracks->longitud; ?>},
    population: .6
  },
};

function initMap() {
  // Create the map.
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: {lat: <?php echo $tracks->latitud; ?>, lng: <?php echo $tracks->longitud; ?>},
    mapTypeId: google.maps.MapTypeId.TERRAIN
  });

  // Construct the circle for each value in citymap.
  // Note: We scale the area of the circle based on the population.
  for (var city in citymap) {
    // Add the circle for this city to the map.
    var cityCircle = new google.maps.Circle({
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#FF0000',
      fillOpacity: 0.35,
      map: map,
      center: citymap[city].center,
      radius: Math.sqrt(citymap[city].population) * 100
    });
  }
}

    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfngZFhu4M76qxs6lz2T0OEeKYalD4Ijk&signed_in=true&callback=initMap"></script>
  </body>
</html>
