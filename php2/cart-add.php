<?php
require 'common.php';
?>

		<?php
		$user_id = @($_SESSION['user_id']);
		$item_id = $_GET['id'];
		$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
		$p = "INSERT INTO `users_items`(`user_id`,`item_id`,`status`) VALUES ({$user_id},{$item_id},'Added to cart')";
		mysqli_query($con, $p);
		echo "Added to your cart.";
		echo "<br>";
		echo '<a href="product.php">Back to Products</a>';

?>