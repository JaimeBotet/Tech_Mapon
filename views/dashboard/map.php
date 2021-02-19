<!DOCTYPE html>
<html lang="en">
<?php
require "views/components/head.php";
?>

<body>
    <main class="login col-md-6 mx-auto container mt-5 pt-5 mb-5 pb-2">
        <h1>Car Routes</h1>

        <?php
        // if (!empty($routePoints)) {
        //     foreach ($routePoints as $route) {
        //         echo "Type:" . $route->type . '<br>';
        //         if ($route->type !== 'stop') {
        //             echo "Starting in: lat " . $route->start->lat . "and long: " . $route->start->lng . '<br>';
        //             echo "Ending in: lat " . $route->end->lat . "and long: " . $route->end->lng . '<br>';
        //             echo "Encoded Polyline: " . $route->polyline . '<br><br>';
        //         } else {
        //             echo "Stoping in: lat " . $route->start->lat . "and long: " . $route->start->lng . '<br><br>';
        //         }
        //     }
        // }
        ?>
        <h2>Map without Routes</h2>
        <div class="mapouter">
            <div class="map_canvas"><iframe width="600" height="500" id="map_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
            </div>
        </div>
        <h2>Map with Routes</h2>
        <div id="map_canvas"></div>
        <br>
        <button type="button" class="btn btn-light"><a href="?controller=user&action=showDashboard">Back</a></button>
    </main>
</body>

<script>
    function initializeMap() {

        var map = new google.maps.Map(
            document.getElementById("map_canvas"), {
                center: new google.maps.LatLng(37.4419, -122.1419),
                zoom: 13,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

        $.getJSON("./resources/polyline.json", function(routes) {
            console.log(routes);

            var completeRoute = "";
            routes.forEach((route) => {
                if (route.type === "route") {
                    completeRoute += route.polyline;
                }
            })
            var polyline = new google.maps.Polyline({
                path: google.maps.geometry.encoding.decodePath(completeRoute),
                map: map
            });
            var bounds = new google.maps.LatLngBounds();
            for (var i = 0; i < polyline.getPath().getLength(); i++) {
                bounds.extend(polyline.getPath().getAt(i));
            }
            map.fitBounds(bounds);
        });
    }
    google.maps.event.addDomListener(window, "load", initializeMap);
</script>

</html>