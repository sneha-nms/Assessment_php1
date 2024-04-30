<?php


$servername = "localhost";
$username = "dckap";
$password = "Dckap2023Ecommerce";
$db_name = "php_ass";

$conn = new mysqli($servername, $username, $password, $db_name);

$fname=$_POST['name'];
$email_id=$_POST['email'];
$password=$_POST['password'];

$sql=("INSERT into users(name,email,password) 
VALUES ('$fname','$email_id','$password')");

if($conn->query($sql) === TRUE){
//   echo "New record created successfully";
  header("location:home.php");
 
}

$conn->close();

?>
