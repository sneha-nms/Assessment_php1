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

$sql = "SELECT id, title, author, img,des FROM product";
$result = $conn->query($sql);
 if(isset($_GET["search"])) {


$search=$_GET["search"];
$sql="select * from product where  title LIKE '%$search%'";
$result=$conn->query($sql);


}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Grid</title>
    <style>
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 20px;
            padding: 20px;
        }
        .grid {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
        .h1 {
            margin: 0;
            color: red;
            font-size: 1.5em;
        }
        p {
            margin: 5px 0;
            color: #666;
        }
        img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="product-grid">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='grid'>";
                echo "<h2 class='h1'>" . $row["title"] . "</h2>";
                echo "<p><strong>author_name:</strong> $" . $row["author"] . "</p>";
                echo "<p><img src='image/" . $row["img"] . "'></p>";
                echo "<p>" . $row["des"] . "</p>";
                echo "<button><a href='product_view.php?id=" . $row['id'] . "'>view</a></button>";
                echo "</div>";
            }
        } else {
            echo "<p>No results found</p>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
<?php
require('footer.php');
?>
