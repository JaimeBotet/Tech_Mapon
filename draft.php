<!DOCTYPE html>
<html lang="en">
<?php
require "views/components/map_head.php";
?>

<body>
    <h1>Selected Car Routes</h1>
    <div id="map">
        This is the map
    </div>

    <br>
    <button type="button"><a href="?controller=user&action=showDashboard">Back</a></button>
</body>



<!-- Google Maps API -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOECGuKdGBDID4tNqJqz76ncPauyQDjLg&callback=initMap" type="text/javascript"></script>


</html>


<!DOCTYPE html>
<html>
<?php
require "views/components/map_head.php";
?>

<body>
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
</body>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOECGuKdGBDID4tNqJqz76ncPauyQDjLg&callback=initMap&libraries=&v=weekly" async defer></script>

</html>