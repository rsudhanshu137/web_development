    <?php
require 'common.php';
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

         <?php
         include 'check-if-added.php';
          ?>
         <br><br><br>

        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p> We have the best cameras,watches and shirts for you.No need to hunt around,we have all in one place. </p>
            </div>
        </div>

        <div class="row">
             <div class="col-md-3 col-sm-6">
                 <a href="#" class="thumbnail"><img src="images\1.jpg" alt="Responsive image">
                    <div class="caption">
                        <h3>Cannos EOS</h3>
                        <p>
                            <?php
                        if(!isset($_SESSION['email'])) 
                        {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">BUY NOW</a></p>
                            <?php
                        }
                        else
                        {
                            if(check_if_added_to_cart(1)!=0)
                                echo'<a href="#" class="btn btn-block btn-success"disabled>Added to cart</a>';                       
                             else
                             {
                            ?>
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                            }
                        }
                        ?>
                        price Rs:36,000
                        </p>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </a></div>

             <div class="col-md-3 col-sm-6">
               <a href="#" class="thumbnail"><img src="images\2.jpg" alt="Responsive image"> 
                <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>
                        <?php
                        if(!isset($_SESSION['email'])) 
                        {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">BUY NOW</a></p>
                            <?php
                        }
                        else
                        {
                            if(check_if_added_to_cart(2))
                                echo'<a href="#" class="btn btn-block btn-success"disabled>Added to cart</a>';                       
                             else
                             {
                            ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                             }
                        }
                        ?>
                        price Rs:40,000
                        </p>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
               </a></div>

             <div class="col-md-3 col-sm-6">
               <a href="#" class="thumbnail"><img src="images\3.jpg" alt="Responsive image">
                <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>
                             <?php
                        if(!isset($_SESSION['email'])) 
                        {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">BUY NOW</a></p>
                            <?php
                        }
                        else
                        {
                            if(check_if_added_to_cart(3))
                                echo'<a href="#" class="btn btn-block btn-success"disabled>Added to cart</a>';                       
                             else
                             {
                            ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                            }
                        }
                        ?>
                        price Rs:50,000
                        </p>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </a></div>

               <div class="col-md-3 col-sm-6">
               <a href="#" class="thumbnail"><img src="images\4.jpg" alt="Responsive image"> 
                <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>
                             <?php
                        if(!isset($_SESSION['email'])) 
                        {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">BUY NOW</a></p>
                            <?php
                        }
                        else
                        {
                            if(check_if_added_to_cart(4))
                                echo'<a href="#" class="btn btn-block btn-success"disabled>Added to cart</a>';                       
                             else
                             {
                            ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                            }
                        }
                        ?>
                        price Rs:80,000
                        </p>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
               </a></div>

        </div>


        <div class="row">
             <div class="col-md-3 col-sm-6">
                 <a href="#" class="thumbnail"><img src="images\9.jpg" alt="Responsive image">
                    <div class="caption">
                        <h3>Titan Model #301</h3>
                        <p>
                             <?php
                        if(!isset($_SESSION['email'])) 
                        {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">BUY NOW</a></p>
                            <?php
                        }
                        else
                        {
                            if(check_if_added_to_cart(5))
                                echo'<a href="#" class="btn btn-block btn-success"disabled>Added to cart</a>';                       
                             else
                             {
                            ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                            }
                        }
                        ?>
                        price Rs:13,000
                        </p>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </a></div>

             <div class="col-md-3 col-sm-6">
               <a href="#" class="thumbnail"><img src="images\10.jpg" alt="Responsive image"> 
                <div class="caption">
                        <h3>Titan Model #201</h3>
                        <p>
                          <?php
                        if(!isset($_SESSION['email'])) 
                        {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">BUY NOW</a></p>
                            <?php
                        }
                        else
                        {
                            if(check_if_added_to_cart(6))
                                echo'<a href="#" class="btn btn-block btn-success"disabled>Added to cart</a>';                       
                             else
                             {
                            ?>
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                            }
                        }
                        ?>
                        price Rs:3,000
                        </p>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
               </a></div>

             <div class="col-md-3 col-sm-6">
               <a href="#" class="thumbnail"><img src="images\11.jpg" alt="Responsive image">
                <div class="caption">
                        <h3>HMT Milan</h3>
                        <p>
                             <?php
                        if(!isset($_SESSION['email'])) 
                        {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">BUY NOW</a></p>
                            <?php
                        }
                        else
                        {
                            if(check_if_added_to_cart(7))
                                echo'<a href="#" class="btn btn-block btn-success"disabled>Added to cart</a>';                       
                             else
                             {
                            ?>
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                            }
                        }
                        ?>
                        price Rs:8,000
                        </p>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </a></div>

               <div class="col-md-3 col-sm-6">
               <a href="#" class="thumbnail"><img src="images\12.jpg" alt="Responsive image"> 
                <div class="caption">
                        <h3>Faber Luba #111</h3>
                        <p>
                             <?php
                        if(!isset($_SESSION['email'])) 
                        {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">BUY NOW</a></p>
                            <?php
                        }
                        else
                        {
                            if(check_if_added_to_cart(8))
                                echo'<a href="#" class="btn btn-block btn-success"disabled>Added to cart</a>';                       
                             else
                             {
                            ?>
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                            }
                        }
                        ?>
                        price Rs:18,000
                        </p>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
               </a></div>

        </div>


         <div class="row">
             <div class="col-md-3 col-sm-6">
                 <a href="#" class="thumbnail"><img src="images\8.jpg" alt="Responsive image">
                    <div class="caption">
                        <h3>H & W</h3>
                        <p>
                             <?php
                        if(!isset($_SESSION['email'])) 
                        {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">BUY NOW</a></p>
                            <?php
                        }
                        else
                        {
                            if(check_if_added_to_cart(9))
                                echo'<a href="#" class="btn btn-block btn-success"disabled>Added to cart</a>';                       
                             else
                             {
                            ?>
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                            }
                        }
                        ?>
                        price Rs:800
                        </p>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </a></div>

             <div class="col-md-3 col-sm-6">
               <a href="#" class="thumbnail"><img src="images\6.jpg" alt="Responsive image"> 
                <div class="caption">
                        <h3>Luis Phil</h3>
                        <p>
                             <?php
                        if(!isset($_SESSION['email'])) 
                        {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">BUY NOW</a></p>
                            <?php
                        }
                        else
                        {
                            if(check_if_added_to_cart(10))
                                echo'<a href="#" class="btn btn-block btn-success"disabled>Added to cart</a>';                       
                             else
                             {
                            ?>
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                            }
                        }
                        ?>
                        price Rs:1,000
                        </p>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
               </a></div>

             <div class="col-md-3 col-sm-6">
               <a href="#" class="thumbnail"><img src="images\13.jpg" alt="Responsive image">
                <div class="caption">
                        <h3>John Zok </h3>
                        <p>
                             <?php
                        if(!isset($_SESSION['email'])) 
                        {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">BUY NOW</a></p>
                            <?php
                        }
                        else
                        {
                            if(check_if_added_to_cart(11))
                                echo'<a href="#" class="btn btn-block btn-success"disabled>Added to cart</a>';                       
                             else
                             {
                            ?>
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                            }
                        }
                        ?>
                        price Rs:1,500
                        </p>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </a></div>

               <div class="col-md-3 col-sm-6">
               <a href="#" class="thumbnail"><img src="images\14.jpg" alt="Responsive image"> 
                <div class="caption">
                        <h3>Jhalsani</h3>
                        <p>
                             <?php
                        if(!isset($_SESSION['email'])) 
                        {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">BUY NOW</a></p>
                            <?php
                        }
                        else
                        {
                            if(check_if_added_to_cart(12))
                                echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                       
                             else
                             {
                            ?>
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                            }
                        }
                        ?>
                        price Rs:1,300
                        </p>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
               </a></div>
         </div>

         <?php
         include 'footer.php';
         ?>

</body>
</html>