async function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 8,
    center: {lat:41.38879, lng: 2.15899}, //coords of Barcelona
  });
  routes = await $.getJSON("./resources/polyline.json", (routes)=> routes);
  routes.forEach((route) => {
      if (route.type === "route") {
          addPolyline(route, map);
      }
      else if(route.type === "stop"){
          var pos = {
              lat: route.start.lat,
              lng: route.start.lng
          }
          addMarker(pos,map);          
      }
  });
}

function addMarker(coords, map){
    var marker = new google.maps.Marker({
        map: map,
        draggable: false,
        position: coords,
        icon: 'https://maps.gstatic.com/mapfiles/ms2/micons/red-pushpin.png'
    })
}

function addPolyline(route, map){
    var polyline = new google.maps.Polyline({
        path: google.maps.geometry.encoding.decodePath(route.polyline),
        map: map
    });

    var bounds = new google.maps.LatLngBounds();
    for (var i = 0; i < polyline.getPath().getLength(); i++) {
        bounds.extend(polyline.getPath().getAt(i));
    }
    map.fitBounds(bounds);
}



