<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
</body>
</html>


<?php

require('index.php');

$servername = "localhost";
$username = "dckap";
$password = "Dckap2023Ecommerce";
$dbname = "php_ass";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>






table{
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  height: 70px;
}

 table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
} 

table tr:nth-child(even){background-color: #f2f2f2;}


table th {
 
  text-align:center;
  background-color: blue;
  color: white;
}

th, td {
  padding:8px;
}
h1{
    text-align: center;
}
table.border-collapse.border.border-slate-400.\.\.\. {
    position: relative;
    bottom: 143px;
}
        </style>
</head>
<body>
<script src="https://cdn.tailwindcss.com"></script>

<div class="flex flex-col">

<h1>BLogs</h1>
    <!-- Table for displaying records -->
    <table class="border-collapse border border-slate-400 ...">
        <thead>
            <tr>
                <th class="border border-gray-300 p-2">Id</th>
                <th class="border border-gray-300 p-2">Title</th>
                <th class="border border-gray-300 p-2">content</th>
                <th class="border border-gray-300 p-2">author</th>
                <th class="border border-gray-300 p-2">created_at</th>
                <th class="border border-gray-300 p-2">status</th>
            </tr>
        </thead>
        <tbody>
            <!-- Fetch records from database and display -->
            <?php
            // Fetch records from the database and loop through them
            $sql = "SELECT * FROM blog";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    
                    echo"<tr>";
                    echo "<td>". $row["id"] ."</td>";
                    echo "<td>". $row["title"] ."</td>"."<br>";
                    echo "<td>". $row["content"] ."</td>";
                    echo "<td>". $row["author"] ."</td>";
                    echo "<td>". $row["created_at"] ."</td>";
                    echo "<td>". $row["status"] ."</td>";
                    echo "</tr>";
                    
                }
            } else {
                echo "0 results";
            }
            ?>
       
                 </tbody>
    </table>
</div>

</body>
</html>


<?php

require('footer.php');



?>



















