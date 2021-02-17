<!DOCTYPE html>
<html lang="en">
<?php
require "../components/head.php";
?>

<body>
    <main class="container">
        <form class="login col-md-6 mx-auto container mt-5 pt-5 mb-5 pb-2" method="post" action="admin.php">
            <div class="form-label-group">
                <input type="string" id="inputEmail" class="form-control my-2" placeholder="Username" required="" autofocus="" name="username">
            </div>

            <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control my-2" placeholder="Password" required="" name="password">
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
        </form>
    </main>
</body>

</html>