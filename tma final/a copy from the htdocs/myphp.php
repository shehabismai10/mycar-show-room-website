<?php       
$carmanufacture= $_POST['carmanufacture'];
$carmodel = $_POST['carmodel'];
$address = $_POST['address'];
$email = $_POST['email'];
$contactnum = $_POST['contactnum'];





$server_name="localhost";
$user_name="root";
$password="";
$db_name="purchase";


$conn = new mysqli($server_name,$user_name,$password,$db_name);
$query="insert into purchase(carmanufacture, carmodel, address, email, contactnum) values('$carmanufacture	', '$carmodel', '$address', '$email', '$contactnum')";


mysqli_query($conn,$query);

$conn -> close();
echo "Your order has been placed successfully"    






?>