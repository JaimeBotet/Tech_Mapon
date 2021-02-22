// function initMap() {
//     console.log("initializing map!");

//     var options = {
//         zoom: 13,
//         center: {lat:41.38879, lng: 2.15899}
//     }
//     console.log(options);
//     var map = new google.maps.Map(document.getElementById('map_canvas'), options);
//     console.log(map);

//     $.getJSON("./resources/polyline.json", function(routes) {
//         console.log(routes);

//         var completeRoute = "";
//         routes.forEach((route) => {
//             if (route.type === "route") {
//                 completeRoute += route.polyline;
//             }
//             else if(route.type === "stop"){
//                 var pos = {
//                     lat: route.start.lat,
//                     lng: route.start.lng
//                 }
//                 var marker = new google.maps.Marker({
//                     map: map,
//                     draggable: false,
//                     position: pos,
//                     icon: 'https://www.freeiconspng.com/uploads/stop-sign-png-14.png'

//                 })
                
//                 var infoWindow = new google.maps.infoWindow({content: 'Vehicle Stop' });

//                 marker.addListener('click', ()=>{
//                     infoWindow.open(map, marker);
//                 })
//             }
//         })
//         var polyline = new google.maps.Polyline({
//             path: google.maps.geometry.encoding.decodePath(completeRoute),
//             map: map
//         });
//         var bounds = new google.maps.LatLngBounds();
//         for (var i = 0; i < polyline.getPath().getLength(); i++) {
//             bounds.extend(polyline.getPath().getAt(i));
//         }
//         map.fitBounds(bounds);
//     });
// }

function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 8,
    center: {lat:41.38879, lng: 2.15899},
  });
  
  $.getJSON("./resources/polyline.json", function(routes) {
    console.log(google.maps.geometry);

    routes.forEach((route) => {
        if (route.type === "route") {
            console.log(route.polyline);
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
        else if(route.type === "stop"){
            var pos = {
                lat: route.start.lat,
                lng: route.start.lng
            }
            var marker = new google.maps.Marker({
                map: map,
                draggable: false,
                position: pos,
                icon: 'https://www.freeiconspng.com/uploads/stop-sign-png-14.png'
            })
        }
    });
    // console.log(completeRoute);

    
});

}


// var infoWindow = new google.maps.infoWindow({content: 'Vehicle Stop' });

            // marker.addListener('click', ()=>{
            //     infoWindow.open(map, marker);
            // })


//   const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
//   const markers = locations.map((location, i) => {
//     return new google.maps.Marker({
//       position: location,
//       label: labels[i % labels.length],
//     });
//   });
//   new MarkerClusterer(map, markers, {
//     imagePath:
//       "https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m",
//   });


const locations = [
  { lat: -31.56391, lng: 147.154312 },
  { lat: -33.718234, lng: 150.363181 },
  { lat: -33.727111, lng: 150.371124 },
  { lat: -33.848588, lng: 151.209834 },
  { lat: -33.851702, lng: 151.216968 },
  { lat: -34.671264, lng: 150.863657 },
  { lat: -35.304724, lng: 148.662905 },
  { lat: -36.817685, lng: 175.699196 },
  { lat: -36.828611, lng: 175.790222 },
  { lat: -37.75, lng: 145.116667 },
  { lat: -37.759859, lng: 145.128708 },
  { lat: -37.765015, lng: 145.133858 },
  { lat: -37.770104, lng: 145.143299 },
  { lat: -37.7737, lng: 145.145187 },
  { lat: -37.774785, lng: 145.137978 },
  { lat: -37.819616, lng: 144.968119 },
  { lat: -38.330766, lng: 144.695692 },
  { lat: -39.927193, lng: 175.053218 },
  { lat: -41.330162, lng: 174.865694 },
  { lat: -42.734358, lng: 147.439506 },
  { lat: -42.734358, lng: 147.501315 },
  { lat: -42.735258, lng: 147.438 },
  { lat: -43.999792, lng: 170.463352 },
];