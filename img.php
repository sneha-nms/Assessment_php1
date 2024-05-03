<?php


$servername = "localhost";
$username = "dckap";
$password = "Dckap2023Ecommerce";
$db_name = "php_ass";

$conn = new mysqli($servername, $username, $password, $db_name);

// $fname=$_POST['name'];
// $email_id=$_POST['email'];
// $password=$_POST['password'];

// $sql=("INSERT into users(name,email,password) 
// VALUES ('$fname','$email_id','$password')");

// if($conn->query($sql) === TRUE){
//   echo "New record created successfully";
// //   header("location:home.php");
 
// }





$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
    <?php

$sql = "SELECT * FROM image";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
        echo '<imgsrc src="'.$row['img'].'</img>';
        
    }
} else {
    echo "0 results";
}




    ?>
</div>
    
</body>
</html>