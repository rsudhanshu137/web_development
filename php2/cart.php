<?php
require 'common.php';
?>

<?php
if (!isset($_SESSION['email'])) {
    header('location:product.php');
}
?>

<br>
<br>
<br>
<?php
$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
$emailx = @($_SESSION['email']);
$user_id_query = "SELECT id FROM users WHERE email='{$emailx}'";
$user_id_result = mysqli_query($con, $user_id_query) or die(mysqli_error($con));
$user_id_rows = mysqli_fetch_array($user_id_result);
$user_id = $user_id_rows['id'];

$sql = "SELECT * FROM users_items INNER JOIN users ON users.id = users_items.user_id INNER JOIN items ON users_items.item_id = items.id WHERE users_items.user_id = {$user_id}";
$result = mysqli_query($con, $sql) or die(mysqli_error($con));
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

    <br><br><br>

    <div class="container">
        <table class="table table-striped table-bordered table-responsive">

            <tbody>
                <tr>
                    <th>Item number </th>
                    <th>Item name </th>
                    <th>Price </th>
                    <th>............. </th>
                </tr>
                <?php
                if (mysqli_num_rows($result) == 0)
                {
						echo "Add items to cart first";
                }

                else  if (mysqli_num_rows($result) > 0)
                {
                    while ($row = mysqli_fetch_array($result)) 

                    {   
                    	$sum=0;

                    	
                ?>

                        <tr>
                            <td><?php echo $row['id'] ?></td>;
                            <td><?php echo $row['name'] ?></td>;
                            <td><?php echo $row['price'] ?></td>;
                            <td><a href='cart-remove.php?id={$row['id']}' class="remove_item_link">Remove</a></td>
                        </tr>

                <?php
                			$sum=$sum+$row['price'];
                		}
                ?>
                        <tr>
                        	<td colspan="2" align="right">Total</td>
                        	<td align="right"><?php echo "$sum" ?></td>
                        	<td></td>
                        </tr>
                        <?php
                 }
                 ?>
                <tr>
                    <a href="success.php"> <button class="btn btn-primary btn-block">Confirm Order</button></a> </th>
                </tr>
            </tbody>
        </table>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <?php
    include 'footer.php';
    ?>

</body>

</html>