<?php
require 'common.php';
?>

<?php   
        $user_id=@$_SESSION['user_id'];
		$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
		$query="DELETE FROM users_items where user_id='$user_id' AND item_id='item_id'";
		$del=mysqli_query($con,$query);

			if($del)
			{

				echo "<br><b>Entry deleted Successfully...</b>";
				header('location:cart.php');
				
			}
			else
				echo "<br>Error deleting!";
?>