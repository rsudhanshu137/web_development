<?php
require 'common.php';
?>

<?php
if(isset($_SESSION['email']))
{
    header('location:product.php');
}
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css2/style2.css" >

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

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

         
         <br><br><br>

        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <h1> SIGN UP </h1>
                    <form method="POST" action="signup_script.php">
                        
                         Name: <input type="text" class="form-control" name="name"><br>
                         Email: <input type="email" class="form-control" name="email" required ="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
                         Password: <input type="Password" class="form-control" name="Password" required = "true" pattern=".{6,}"><br>
                         Contact: <input type="number" class="form-control"  name="Contact"><br>
                         City:  <input type="text" class="form-control" name="city"><br>
                         Address: <input type="text" class="form-control" name="address"><br>
                          <button class="btn btn-primary">Submit </button>
                    </form>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
         <?php
         include 'footer.php';
         ?>
       

    </body>
    </html>


   

