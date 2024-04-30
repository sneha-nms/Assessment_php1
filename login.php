


<?php
require('index.php');

if(isset($_POST['submit'])){

$servername = "localhost";
$username = "dckap";
$password = "Dckap2023Ecommerce";
$db_name = "php_ass";

$conn = new mysqli($servername, $username, $password, $db_name);



    $name=$_POST['fname'];
    $password=$_POST['password'];
    if($name!="" && $password!=""){

        $sql="SELECT * from users where name='$name' and password='$password'";
         $result=$conn->query($sql);
         if($result->num_rows > 0){
            // echo('insde');
            // header("Location:home.php");

         }else{
             echo "<p>Invalid username or password</p>";
         }

    }
    

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
 
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
            max-width: 400px;
        }
        p{
            text-align: center;
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-3">Login</h2>
        <form id="loginForm" action='<?php echo($_SERVER['PHP_SELF']) ?>' method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username"  name="fname"required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control"  name="password"  id="password" required>
            </div>
            <button type="submit"  name="submit"class="btn btn-primary">Log In</button>
        </form>
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

           
            if(username === "" || password === "") {
                alert("Please enter both username and password.");
            } else {
                // alert("Login successful!");
                
            }
        });
    </script> -->
</body>
</html>


<?php


// else{
//    echo "Please enter the value";
// }




?>
