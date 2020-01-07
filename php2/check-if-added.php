	<?php
		function check_if_added_to_cart($item_id)
		{
	
				require 'common.php';
                $user_id=isset($_SESSION['user_id']);
				$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
				$p="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id' and status='Added to cart'";
				$result = mysqli_query($con, $p);
                $num = mysqli_num_rows($result);
				
				{
			   
					    if($num >=1)
					    {
						echo 1 ;
						}
						else
						{
					     echo 0 ;
						}
				}
		}
	  ?>