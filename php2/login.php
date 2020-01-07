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

         <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Lifestyle Store</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav><br><br><br>
     <form action="login_submit.php" method="POST">

        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="panel panel-primary">
                       <div class="panel-heading">
                          <h4>LOGIN PAGE</h4>  
                       </div> 
                       <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p> 
         
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="email">
                            </div>
                            <div class="form-group">
                                 <input type="password" class="form-control" name="password" placeholder="password">
                            </div><br>
                                <button class="btn btn-primary">Submit </button>
                        </div>
                        <div class="panel-footer">
                       Don't have an account? Register
                       </div>
                    </div>    
                </div>  
            </div>
        </div>
    </form>
       <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
         <?php
         include 'footer.php';
         ?>
    
         
    </body>
</html>