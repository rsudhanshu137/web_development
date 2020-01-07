<?php
require 'common.php';
?>

<?php 
    
  if (!isset($_SESSION["email"]))
   {
      header('location: index2.php');
   }
  
   $email=@$_SESSION['email'];

   if($email)
   {
             
		  	$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
		  	$op=$_POST['op'];
		  	$np=$_POST['np'];
		  	$rnp=$_POST['rnp'];
            
		  	
            
		  	$sql=mysqli_query($con,"SELECT password from users where email='".$email."'");
			$num=mysqli_fetch_array($sql);
			$database_password = $num['password'];
             

	if($op==$database_password)
		{

		     	if ($np == $rnp)
			{
			 	$querychange=mysqli_query($con,"UPDATE users SET password='".$np."' WHERE email='".$email."'"	);
				echo "Password Changed Successfully !!";
			}
				else
			{
				echo "Your new and Retype Password are not match";
			}
			
		}

	else 
	     	 {
		   		 echo "Your old password is wrong";
		   
		  	 }
	
	
	}	
 	
?>