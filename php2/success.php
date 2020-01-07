<?php
require 'common.php';
?>

		<?php 
		    session_start();
		  if (!isset($_SESSION["email"]))
		   {
		      header('location: index2.php');
		   }
   echo 'Your order is confirmed.Thank you for shopping with us.<a href="product.php"><u>click here</u></a> to purchase any other item.';
?>