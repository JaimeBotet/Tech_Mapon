<!DOCTYPE html>
<html>

<?php
require VIEWS . 'components/map_head.php';
?>

<body>
    <div class="container text-center">
        <h1>Selected Car Routes</h1>
        <br>
        <div id="map"></div>
        <br>
        <button type="button"><a href="?controller=user&action=showDashboard">Back</a></button>
    </div>
</body>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOECGuKdGBDID4tNqJqz76ncPauyQDjLg&callback=initMap&libraries=&v=weekly&libraries=geometry" async defer></script>

</html>