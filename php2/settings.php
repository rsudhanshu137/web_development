<?php
require 'common.php';
?>

<?php

if (!isset($_SESSION["email"])) {
    header('location: index2.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css2/style2.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Lifestyle Store</a>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a href="setting.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav><br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-xs-4">
                <h1> Change Password </h1>
                <form action="settings_script.php" method="POST">

                    old password:<input type="password" class="form-control" name="op" placeholder="old password"><br>
                    new password:<input type="password" class="form-control" name="np" placeholder="new password"><br>
                    re type new password<input type="Password" class="form-control" name="rnp" placeholder="re type new password"><br>

                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>

    <footer>
        <center>
            Copyright @ Lifestyle Store .All Rights Reserved | Contact us: +91 90000 00000;
        </center>
    </footer>
</body>

</html>