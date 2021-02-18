<!DOCTYPE html>
<html lang="en">
<?php
require "views/components/head.php";
?>

<body>
    <main class="container">
        <form class="login col-md-6 mx-auto container mt-5 pt-5 mb-5 pb-2" method="post" action="?controller=map&action=getCarRoute">
            <h1>Select a Time Range</h1>
            <div class="form-label-group">
                <label for="">Time and Date From</label>
                <input type="date" id="dateFrom" class="form-control my-2" placeholder="date from" required autofocus="" name="dateFrom">
                <input type="time" id="timeFrom" class="form-control my-2" placeholder="time from" required autofocus="" name="timeFrom">
            </div>

            <div class="form-label-group">
                <label for="">Time and Date To</label>
                <input type="date" id="dateTo" class="form-control my-2" required name="dateTo">
                <input type="time" id="timeTo" class="form-control my-2" required autofocus="" name="timeTo">
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Get Route</button>
        </form>
    </main>
</body>

</html>