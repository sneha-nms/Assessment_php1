



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

$sql = "SELECT id, name, price, image, description FROM products_de";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row in display table
    while($row = $result->fetch_assoc()) {
       echo "<table>";
       echo "<th>";
       echo"<tr>";
        echo "<th> <div class='grid'>";
        echo "<div>";
        echo "<h2 class='h1'>" . $row["name"] . "</h2>";
        echo "<p><strong>Price:</strong> $" . $row["price"] . "</p>";
        echo "<p><img src='images/" . $row["image"] . "' style='width:100px;height:100px;'></p>";
        echo "<p>" . $row["description"] . "</p>";
        echo "</div>";
        echo "</div> <th>";
        echo "</tr>";
        echo "</th>";
        echo "</table>";
      
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .grid{
       display: grid;
        grid-template-columns: auto auto auto auto;
       gap: 50px;
      
      width: 300px;
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); /* Max width of the grid container */
      padding: 20px;
     border: 1px solid #ccc; /*Optional border
     background-color: #f9f9f9; /* Light background color */
}

 .img {
    width: 100%; /* Responsive image */
    height: auto; /* Maintain aspect ratio */
    grid-row: 3 / 4; /* Place image in the third row */
}

 .h1 {
    margin: 0;
    color: red;
    font-size: 1.5em;
}

p {
    margin: 0;
    color: #666;
}

/* Optional: Responsive adjustments */
@media (min-width: 600px) {
    .product-grid {
        grid-template-columns: repeat(2, 1fr); /* 2 columns on wider screens */
    }
    .product-grid img {
        grid-row: 1 / 5; /* Span through all rows if two columns */
        grid-column: 2; /* Place in the second column */
    }
}
        </style>
    


</head>
<body>


    
</body>
</html>
<?php
 require('footer.php');
?>