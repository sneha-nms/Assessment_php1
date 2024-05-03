
<?php
require('index.php');

?>
<?php 

$servername = "localhost";
$username = "dckap";
$password = "Dckap2023Ecommerce";
$db_name = "php_ass";

$conn = new mysqli($servername, $username, $password, $db_name);

$id=$_GET['id'];
 $sql="select * from  product where id='$id'";
 
$result=$conn->query($sql);



 


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



