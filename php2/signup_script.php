<?php
require 'common.php';
?>

<?php


$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));

$email = $_POST['email'];
$name=$_POST['name'];
$password=$_POST['Password'];
$contact=$_POST['Contact'];
$city=$_POST['city'];

$q = " select id from users  where email = '$email'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){ 
	echo " duplicate data ";
}
else
    {
	$qy= " INSERT INTO  users(email,name,Password,Contact,city) VALUES ('$email','$name','$password','$contact','$city') ";
	$user_registration_submit=mysqli_query($con, $qy) or die(mysqli_error($con));
	$logged_in_user_id = mysqli_insert_id($con);
    echo "New record has id: " . mysqli_insert_id($con);
    header('location:product.php'); 
    }


?>