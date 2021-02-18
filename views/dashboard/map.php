<!DOCTYPE html>
<html lang="en">
<?php
require "views/components/head.php";
?>

<body>
    <main class="login col-md-6 mx-auto container mt-5 pt-5 mb-5 pb-2">
        <h1>Car Routes</h1>

        <?php
        if (!empty($routePoints)) {
            foreach ($routePoints as $route) {
                echo "Type:" . $route->type . '<br>';
                if ($route->type !== 'stop') {
                    echo "Starting in: lat " . $route->start->lat . "and long: " . $route->start->lng . '<br>';
                    echo "Ending in: lat " . $route->end->lat . "and long: " . $route->end->lng . '<br><br>';
                } else {
                    echo "Stoping in: lat " . $route->start->lat . "and long: " . $route->start->lng . '<br><br>';
                }
            }
        }
        ?>
        <div class="mapouter">
            <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
            </div>
        </div>
        <br>
        <button type="button" class="btn btn-light"><a href="?controller=user&action=showDashboard">Back</a></button>
    </main>
</body>

</html>