<?php
require 'common.php';
?>

<?php
if (isset($_SESSION['email'])) {
    header('location:product.php');
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

    <?php
    include 'header.php';
    ?>
    <br><br><br><br>

    <div id="banner_image">
        <div class="container">
            <div id="banner_content">
                <a class="btn btn-danger btn-lg active" href="product.php"> Shop now </a>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php
        include 'footer.php';
        ?>


</body>

</html>